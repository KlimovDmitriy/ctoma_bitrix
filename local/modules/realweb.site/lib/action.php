<?php


namespace Realweb\Site;

use Bitrix\Main\Application;
use Bitrix\Main\Config\Option;
use Bitrix\Main\HttpRequest;
use Bitrix\Main\Loader;
use Bitrix\Main\Type\DateTime;
use Realweb\Recaptcha\Captcha;


class Action
{
    private function _getRequest()
    {
        if ($this->_request === null) {
            $this->_request = Application::getInstance()->getContext()->getRequest();
        }

        return $this->_request;
    }

    public function confirmClinic()
    {
        if ($id = intval($this->_getRequest()->get('ID'))) {
            Site::setCookie('clinic', $id, (time() + 60 * 60 * 24 * 30));

            return array('url' => $this->_getRequest()->get('URL'));
        }
    }

    public function formSubmit()
    {
        $request = $this->_getRequest();
        $errors = array();

        $input = array();

        try {
            parse_str($request->getInput(), $input);


        } catch (Exception $e) {

            $errors[] = $e->getMessage();


        }
        $filter = ['IBLOCK_ID' => Site::getIblockId('FORMS'), 'SECTION_ID' => $input['form_id']];
        $datas = Site::getIBlockElements($filter);

        $sumbission_data = [];
        $main_array = ['form', 'fio', 'phone', 'clinic'];
        $exclude = ['submit', 'pers_data'];
        $PROPS = ['form' => $input['form_name']];
        foreach ($datas as $form_field) {
            $code = strtolower($form_field['FIELDS']['CODE']);

            $sumbission_data[$code] = ['LABEL' => $form_field['FIELDS']['NAME'], 'VALUE' => $input[$code]];

            if (in_array($code, $main_array)) {

                $PROPS[$code] = $sumbission_data[$code]['VALUE'];
                unset($sumbission_data[$code]);
            }
            if (in_array($code, $exclude)) {

                unset($sumbission_data[$code]);
            }
        }
        $html = '<h3>Данные формы</h3>';
        foreach ($sumbission_data as $line) {

            $html .= '<b>' . $line['LABEL'] . '</b> ' . $line['VALUE'] . '<br>';

        }


        \Bitrix\Main\Loader::includeModule('iblock');

        $el = new \CIBlockElement;
        $iblock_id = Site::getIblockId('RESULTS');
        $section_id = false;
        $fields = array(
            "DATE_CREATE" => date("d.m.Y H:i:s"), //Передаем дата создания
            "CREATED_BY" => $GLOBALS['USER']->GetID(),    //Передаем ID пользователя кто добавляет
            "IBLOCK_ID" => $iblock_id, //ID информационного блока
            "PROPERTY_VALUES" => $PROPS, // Передаем массив значении для свойств
            "NAME" => $PROPS['form'] . ' от ' . date("d.m.Y H:i:s"),
            "ACTIVE" => "Y", //поумолчанию делаем активным или ставим N для отключении поумолчанию
            "PREVIEW_TEXT" => $html

        );

        //Результат в конце отработки
        if ($html != '<h3>Данные формы</h3>' && $ID = $el->Add($fields)) {
            $result = ['success' => 1];
        } else {
            $result = ['error' => 1];
        }
        return $result;
    }

    public function getAllClinicsCoords()
    {
        /*Список клиник с ID, и координатами*/
        $cls = Site::getIBlockElements(['IBLOCK_ID' => Site::getIblockId('clinics')]);
        $places = [];


        foreach ($cls as $clinic) {


            $places[] = array(
                'LON' => str_replace(',', '.', $clinic['PROPERTIES']['LONGITUDE']["VALUE"]),
                'LAT' => str_replace(',', '.', $clinic['PROPERTIES']['LATITUDE']["VALUE"]),
                'NAME' => $clinic['NAME'],
                'TID' => $clinic['ID']
            );


        }

        return json_encode($places);
    }
}

?>