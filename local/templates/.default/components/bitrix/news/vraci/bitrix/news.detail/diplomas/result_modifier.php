<?

$arResult["DIPLOMAS"] = array();
if (isset($arResult['PROPERTIES']['DIPLOMAS']['VALUE']) && is_array($arResult['PROPERTIES']['DIPLOMAS']['VALUE'])) {
    foreach ($arResult["PROPERTIES"]["DIPLOMAS"]["VALUE"] as $key => $FILE) {
        $FILE = CFile::GetFileArray($FILE);
        if (is_array($FILE)) {
            $arResult["DIPLOMAS"][$key]["LARGE"] = CFile::ResizeImageGet(
              $FILE,
              array('width' => 631, 'height' => 891),
              BX_RESIZE_IMAGE_EXACT,
              true
            );;
            $arResult["DIPLOMAS"][$key]["PREVIEW"] = CFile::ResizeImageGet(
              $FILE,
              array('width' => 175, 'height' => 285),
              BX_RESIZE_IMAGE_EXACT,
              true
            );
        }
    }
}
?>