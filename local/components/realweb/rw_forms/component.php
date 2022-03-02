<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

$this->IncludeComponentTemplate();


$arParams["IBLOCK_ID"] = \Realweb\Site\Site::getIblockId('FORMS');

$res = CIBlockSection::GetList(array(), array('IBLOCK_ID' => $arParams["IBLOCK_ID"], 'SITE_ID' => "s1"));
$section = $res->Fetch();

$elements = \Realweb\Site\Site::getIBlockElements(['IBLOCK_ID' => $arParams["IBLOCK_ID"], 'IBLOCK_SECTION_ID' => $section["ID"]]);

$FORM_FIELDS = [];

foreach ($elements as $el) {

    $FORM_F = [
        'NAME' => $el['FIELDS']['CODE'],
        'TITLE' => $el['FIELDS']['NAME'],
        'DESCRIPTION' => $el['FIELDS']['PREVIEW_TEXT'],
        'TYPE' => $el['PROPERTIES']['FIELD_TYPE']['VALUE_XML_ID'],
        'VALID' => $el['PROPERTIES']['FIELD_VALIDATION']['VALUE_XML_ID'],
        'LENGTH' => $el['PROPERTIES']['LENGTH']['VALUE'],
        'PLACEHOLDER' => $el['PROPERTIES']['PLACEHOLDER']['VALUE'],
        'WRAP_CSS' => $el['PROPERTIES']['WRAP_CSS']['VALUE'],
        'FIELD_CSS' => $el['PROPERTIES']['FIELD_CSS']['VALUE'],
        'HIDE_LABEL' => $el['PROPERTIES']['HIDE_LABEL']['VALUE']
    ];

    if ($FORM_F['TYPE'] == 'SELECT') {

        $FORM_F['IBLOCK'] = $el['PROPERTIES']['IBLOCK_CODE']['VALUE'];
    }

    $arResult['FIELDS'][] = $FORM_F;

}

$this->IncludeComponentTemplate();

?>