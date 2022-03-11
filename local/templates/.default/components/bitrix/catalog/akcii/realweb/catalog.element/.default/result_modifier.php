
<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
    if (!empty($arResult["PREVIEW_PICTURE"]["SRC"])) {
        $arFileTmp = CFile::ResizeImageGet(
          $arResult["PREVIEW_PICTURE"],
          array("width" => 320, "height" => 453),
          BX_RESIZE_IMAGE_EXACT,
          true,
          false,
          false,
          99
        );
        $arResult["PREVIEW_PICTURE"] = array(
          "SRC"    => $arFileTmp["src"],
          "WIDTH"  => $arFileTmp["width"],
          "HEIGHT" => $arFileTmp["height"],
        );

    }
?>


