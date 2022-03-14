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


        if (!$GLOBALS["APPLICATION"]->CaptchaCheckCode($input['cap'], $input['captcha_sid'])) {

            $errors[] = 'Вы неверно ввели код с картинки';

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
        if ($input['akc_name'] != '') {
            $sumbission_data[] = ['LABEL' => 'Название акции', 'VALUE' => $input['akc_name']];
            // $sumbission_data = array_merge($akc, $sumbission_data);
        }
        if ($input['vrac_name'] != '') {
            $sumbission_data[] = ['LABEL' => 'Врач к которому производится запись', 'VALUE' => $input['vrac_name']];
            // $sumbission_data = array_merge($akc, $sumbission_data);
        }

        $html = '<h3>Данные формы</h3>';
        foreach ($sumbission_data as $line) {

            $html .= '<b>' . $line['LABEL'] . '</b> ' . $line['VALUE'] . '<br>';

        }


        \Bitrix\Main\Loader::includeModule('iblock');

        $el = new \CIBlockElement;


        if ($PROPS['form'] == 'Оставить отзыв') {

            $PROPS2 = [];


            $SELECT_IBLOCK_ID = Site::getIblockId(['doctors']);
            $doctor_name = $sumbission_data['doctor']['VALUE'];
            $select_elements = Site::getIBlockElements(['IBLOCK_ID' => $SELECT_IBLOCK_ID, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y", "NAME" => $doctor_name]);

            $doctor_id = array_key_first($select_elements);


            if ($doctor_id > 0) {
                $PROPS2['DOCTOR'] = $doctor_id;
            }

            /*Оставление отзыва*/


            $iblock_id = Site::getIblockId('reviews');
            $arParams = array("replace_space" => "_", "replace_other" => "");
            $trans = \Cutil::translit($PROPS['fio'], "ru", $arParams);
            $fields = array(
                "DATE_CREATE" => date("d.m.Y H:i:s"), //Передаем дата создания
                "CREATED_BY" => $GLOBALS['USER']->GetID(),    //Передаем ID пользователя кто добавляет
                "IBLOCK_ID" => $iblock_id, //ID информационного блока
                "PROPERTY_VALUES" => $PROPS2, // Передаем массив значении для свойств
                "PREVIEW_TEXT" => $sumbission_data['comment']['VALUE'],
                "ACTIVE_FROM" => date('d.m.Y'),
                "CODE" => $trans.'_'.time(),
                "NAME" => $PROPS['fio'],
                "ACTIVE" => "N", //поумолчанию делаем активным или ставим N для отключении поумолчанию

            );


        } else {
            /*Остальные формы*/

            $iblock_id = Site::getIblockId('RESULTS');

            $fields = array(
                "DATE_CREATE" => date("d.m.Y H:i:s"), //Передаем дата создания
                "CREATED_BY" => $GLOBALS['USER']->GetID(),    //Передаем ID пользователя кто добавляет
                "IBLOCK_ID" => $iblock_id, //ID информационного блока
                "PROPERTY_VALUES" => $PROPS, // Передаем массив значении для свойств
                "NAME" => $PROPS['form'] . ' от ' . date("d.m.Y H:i:s"),
                "ACTIVE" => "Y", //поумолчанию делаем активным или ставим N для отключении поумолчанию
                "PREVIEW_TEXT" => $html

            );

        }


        if (empty($errors)) {
            //Результат в конце отработки
            if ($ID = $el->Add($fields)) {
                $result = ['success' => 1];
            } else {
                $result = ['error' => 1];
            }
        } else {
            $result = ['error' => $errors[0]];
        }
        return $result;
    }

    public function addSubscriber()
    {
        /*Подписка на e-mail рассылку*/
        $request = $this->_getRequest();
        $errors = array();

        $input = array();
        try {
            parse_str($request->getInput(), $input);


        } catch (Exception $e) {

            $errors[] = $e->getMessage();


        }
        \Bitrix\Main\Loader::includeModule('iblock');
        $iblock_id = Site::getIblockId('SUBSCRIBES');
        $arSelect = array("ID", "IBLOCK_ID", "NAME");//IBLOCK_ID и ID обязательно должны быть указаны, см. описание arSelectFields выше
        $arFilter = array("IBLOCK_ID" => $iblock_id, 'PROPERTY_EMAIL' => $input['email']);

        $res = \CIBlockElement::GetList(array(), $arFilter, false, array("nPageSize" => 50), $arSelect);
        while ($ob = $res->GetNextElement()) {
            $errors[] = 'Этот адрес уже подписан на рассылку!';
        }


        if (empty($errors)) {

            $PROPS = ['EMAIL' => $input['email']];


            $el = new \CIBlockElement;


            $fields = array(
                "DATE_CREATE" => date("d.m.Y H:i:s"), //Передаем дата создания
                "CREATED_BY" => $GLOBALS['USER']->GetID(),    //Передаем ID пользователя кто добавляет
                "IBLOCK_ID" => $iblock_id, //ID информационного блока
                "PROPERTY_VALUES" => $PROPS, // Передаем массив значении для свойств
                "NAME" => $PROPS['form'] . ' от ' . date("d.m.Y H:i:s"),
                "ACTIVE" => "Y", //поумолчанию делаем активным или ставим N для отключении поумолчанию
            );

            if ($ID = $el->Add($fields)) {
                $result = ['success' => 1];
            } else {
                $result = ['error' => 1];
            }
        } else {
            $result = ['error' => $errors[0]];
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