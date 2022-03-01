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
<div class="make__form">
    <form class="webform-submission-form webform-submission-add-form webform-submission-makeform-form webform-submission-makeform-add-form webform-submission-makeform-page_variant-make_appointment-panels_variant-0-form webform-submission-makeform-page_variant-make_appointment-panels_variant-0-add-form makeform js-webform-details-toggle webform-details-toggle">
        <? if (!empty($arResult['FIELDS'])) { ?>
            <? foreach ($arResult['FIELDS'] as $field) { ?>

                <div class="<?= trim($field['WRAP_CSS']); ?>">

                    <? switch ($field['TYPE']) {
                        case 'BUTTON':
                            ?>
                            <button type="submit" class="<?= $field['FIELD_CSS']; ?>"><?= $field['TITLE'] ?></button>

                            <? break; ?>
                        <? case 'TEXT': ?>
                            <? if ($field['HIDE_LABEL'] == '') { ?>
                                <label for="edit-name"
                                       class=" js-form-required form-required"><?= $field['TITLE'] ?></label>
                            <? } ?>
                            <input type="text" id="edit-<?= $field['NAME'] ?>" name="<?= $field['NAME'] ?>"
                                   placeholder="<?= $field['PLACEHOLDER']; ?>" class="<?= $field['FIELD_CSS']; ?>"
                                   value=""
                                   autocomplete="off">
                            <? break; ?>

                        <? case 'CHECKBOX': ?>


                            <input type="checkbox" id="edit-agreement" name="<?= $field['NAME'] ?>" value="1"
                                   checked="checked" class="form-checkbox required" required="required"
                                   aria-required="true">

                            <? if (!empty($field['DESCRIPTION'])) { ?>
                                <div class="description">
                                    <div id="edit-agreement--description"
                                         class="webform-element-description"><?= $field['DESCRIPTION']; ?></div>

                                </div>
                            <? } ?>


                            <? break; ?>


                        <? } ?>
                </div>
            <? } ?>
        <? } ?>
    </form>

</div>