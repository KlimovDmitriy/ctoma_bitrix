<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */


$this->setFrameMode(true);


?>

<? if (!empty($arResult['FIELDS'])) { ?>
    <div class="make__form">
        <div id="success_<?= $arParams['CODE']; ?>" class="success_form">
            <i class="fa fa-check"></i> Ваше сообщение успешно отправлено.
        </div>
        <div id="error_<?= $arParams['CODE']; ?>" class="error_form">
            <i class="fa fa-times-circle"></i> <span class="error_main_text"> Произошла ошибка. Попробуйте повторить позже.</span>
        </div>
        <form id="<?= $arParams['CODE']; ?>" method="post"
              class="webform-submission-form webform-submission-add-form webform-submission-makeform-form webform-submission-makeform-add-form webform-submission-makeform-page_variant-make_appointment-panels_variant-0-form webform-submission-makeform-page_variant-make_appointment-panels_variant-0-add-form makeform js-webform-details-toggle webform-details-toggle">
            <input type="hidden" name="action" value="Action_formSubmit">
            <input type="hidden" name="form_name" value="<?= $arResult['FORM']['NAME']; ?>">
            <input type="hidden" name="form_id" value="<?= $arResult['FORM']['ID']; ?>">
            <? foreach ($arResult['FIELDS'] as $field) { ?>

                <div class="<?= trim($field['WRAP_CSS']); ?>">

                    <? switch ($field['TYPE']) {
                        case 'BUTTON':
                            ?>
                            <?
                            $capCode = $GLOBALS["APPLICATION"]->CaptchaGetCode();
                            ?>

                            <label for="edit-captcha"
                                   class="cap_label">Введите код с картинки<br>
                                <img src="/bitrix/tools/captcha.php?captcha_sid=<?= htmlspecialchars($capCode) ?>"
                                     width="180" height="40">
                            </label>

                            <div class="cap_code_block">
                                <input placeholder="Введите код" value="" name="cap" class="cap_code"/>
                            </div>

                            <input type="hidden" name="captcha_sid" value="<?= htmlspecialchars($capCode) ?>">

                            <button type="submit" class="<?= $field['FIELD_CSS']; ?>"><?= $field['TITLE'] ?></button>

                            <? break; ?>
                        <? case 'TEXT': ?>

                            <?

                            if ($field['VALID'] != '') {
                                $field['FIELD_CSS'] = 'js-' . strtolower($field['VALID']) . ' ' . $field['FIELD_CSS'];

                            }

                            ?>
                            <? if ($field['HIDE_LABEL'] == '') { ?>
                                <label for="edit-<?= $field['NAME'] ?>"
                                       class="js-form-required form-required"><?= $field['TITLE'] ?></label>
                            <? } ?>
                            <input type="text" id="edit-<?= $field['NAME'] ?>" name="<?= $field['NAME'] ?>"
                                   placeholder="<?= $field['PLACEHOLDER']; ?>"
                                   class="form-element <?= $field['FIELD_CSS']; ?>"
                                   value=""
                                   autocomplete="off" <?= $field['LENGTH']; ?> <?= $field['REQ']; ?>>
                            <? break; ?>
                        <? case 'TEXTAREA': ?>

                            <?

                            if ($field['VALID'] != '') {
                                $field['FIELD_CSS'] = 'js-' . strtolower($field['VALID']) . ' ' . $field['FIELD_CSS'];

                            }

                            ?>
                            <? if ($field['HIDE_LABEL'] == '') { ?>
                                <label for="edit-<?= $field['NAME'] ?>"
                                       class="js-form-required form-required"><?= $field['TITLE'] ?></label>
                            <? } ?>
                            <textarea
                                    autocomplete="off"
                                    data-drupal-selector="edit-message"
                                    id="edit-message"
                                    name="<?= $field['NAME'] ?>"
                                    rows="5" cols="60"
                                    placeholder="<?= $field['PLACEHOLDER']; ?>"
                                    class="form-element <?= $field['FIELD_CSS']; ?>" <?= $field['REQ']; ?>></textarea>

                            <? break; ?>

                        <? case 'CHECKBOX': ?>


                            <input type="checkbox" id="edit-agreement" name="<?= $field['NAME'] ?>" value="1"
                                   checked="checked"
                                   class="form-checkbox <?= $field['FIELD_CSS']; ?>" <?= $field['REQ']; ?>
                                   aria-required="true">

                            <? if (!empty($field['DESCRIPTION'])) { ?>
                                <div class="description">
                                    <div id="edit-agreement--description"
                                         class="webform-element-description"><?= $field['DESCRIPTION']; ?></div>

                                </div>
                            <? } ?>


                            <? break; ?>
                        <? case 'TEXT_MARKED': ?>


                            <? if (!empty($field['DESCRIPTION'])) { ?>
                                <div class="<?= $field['FIELD_CSS']; ?>">
                                    <?= $field['DESCRIPTION']; ?>
                                </div>
                            <? } ?>


                            <? break; ?>


                        <? case 'SELECT': ?>
                            <?
                            //Определяем инфоблок для SELECT
                            $SELECT_IBLOCK_ID = \Realweb\Site\Site::getIblockId($field['IBLOCK']);
                            //Достаем активные элементы из него
                            $select_elements = \Realweb\Site\Site::getIBlockElements(['IBLOCK_ID' => $SELECT_IBLOCK_ID, "ACTIVE_DATE" => "Y", "ACTIVE" => "Y"]);

                            ?>
                            <label for="edit-<?= $field['NAME'] ?>"><?= $field['TITLE'] ?></label>

                            <select id="edit-<?= $field['NAME'] ?>" name="<?= $field['NAME'] ?>"
                                    class="<?= $field['FIELD_CSS']; ?>" <?= $field['REQ']; ?>>
                                <option value="" selected="selected"><?= $field['PLACEHOLDER'] ?></option>
                                <? foreach ($select_elements as $sel) { ?>
                                    <option value="<?= $sel['FIELDS']['NAME']; ?>"><?= $sel['FIELDS']['NAME']; ?></option>
                                <? } ?>
                            </select>
                            <? break; ?>

                        <? } ?>
                </div>
            <? } ?>

        </form>

    </div>
<? } ?>
