<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

$this->IncludeComponentTemplate();


$arParams["IBLOCK_ID"] = \Realweb\Site\Site::getIblockId('FORMS');

$res = CIBlockSection::GetList(array(), array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'SITE_ID' => "s1", "CODE" => $arParams['CODE']));
$section = $res->Fetch();

$elements = \Realweb\Site\Site::getIBlockElements(['IBLOCK_ID' => $arParams["IBLOCK_ID"], 'SECTION_ID' => $section["ID"]]);

$FORM_FIELDS = [];

foreach ($elements as $el) {

    $FORM_F = [
        'NAME' => strtolower($el['FIELDS']['CODE']),
        'TITLE' => $el['FIELDS']['NAME'],
        'DESCRIPTION' => $el['FIELDS']['PREVIEW_TEXT'],
        'TYPE' => $el['PROPERTIES']['FIELD_TYPE']['VALUE_XML_ID'],
        'VALID' => $el['PROPERTIES']['FIELD_VALIDATION']['VALUE_XML_ID'],
        'PLACEHOLDER' => $el['PROPERTIES']['PLACEHOLDER']['VALUE'],
        'WRAP_CSS' => $el['PROPERTIES']['WRAP_CSS']['VALUE'],
        'FIELD_CSS' => $el['PROPERTIES']['FIELD_CSS']['VALUE'],
        'HIDE_LABEL' => $el['PROPERTIES']['HIDE_LABEL']['VALUE'],
        'ON_SUBMIT' => $el['PROPERTIES']['ON_SUBMIT']['VALUE']
    ];
    if ($el['PROPERTIES']['REQUIED']['VALUE'] != '') {

        $FORM_F['REQ'] = 'required="required"';
        $FORM_F['TITLE'] .= '*';
    } else {
        $FORM_F['REQ'] = '';
    }
    if ($el['PROPERTIES']['LENGTH']['VALUE'] != '') {

        $FORM_F['LENGTH'] = 'minlength="' . $el['PROPERTIES']['LENGTH']['VALUE'] . '"';
    } else {
        $FORM_F['LENGTH'] = '';
    }
    if ($FORM_F['TYPE'] == 'SELECT') {

        $FORM_F['IBLOCK'] = $el['PROPERTIES']['IBLOCK_CODE']['VALUE'];
    }
    $arResult['FORM'] = ['ID' => $section['ID'], 'NAME' => $section['NAME']];
    $arResult['FIELDS'][] = $FORM_F;

}

$this->IncludeComponentTemplate();

?>