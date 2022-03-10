<?php if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<div class="subscription width width_full">
    <span class="subscription__title width width_norm width_paddingStandart">ХОТИТЕ ПЕРВЫМИ УЗНАВАТЬ ОБ АКЦИЯХ?</span>
    <div class="subscription__content width width_norm width_paddingStandart">
        <div id="block-podpiska" class="block block-podpiska">
            <div id="success_main_subscribe" class="success_form"
                 >
                <i class="fa fa-check"></i> Вы подписались на новости!
            </div>
            <div id="error_main_subscribe" class="error_form">
                <i class="fa fa-times-circle"></i> <span class="error_main_text">Произошла ошибка. Попробуйте повторить позже.</span>
            </div>
            <form id="main_subscribe"
                  method="post"
                  class="">
                <?= bitrix_sessid_post() ?>


                <input type="hidden" name="action" value="Action_addSubscriber">


                <div class="subscription__name js-form-item form-item js-form-type-textfield form-item-email js-form-item-email form-no-label">

                    <label for="edit-email" class="visually-hidden js-form-required form-required">Введите Ваш
                        email</label>

                    <input autocomplete="off" type="email" id="edit-email" name="email"
                           value="" size="60" maxlength="255" placeholder="Введите Ваш email" class="form-text required"
                           required="required">


                </div>
                <div class="subscription__actions form-actions webform-actions js-form-wrapper form-wrapper"
                     id="edit-actions">
                    <button class="webform-button--submit button button--primary js-form-submit form-submit"
                            type="submit" id="edit-actions-submit" name="op"
                            value="Подписаться">Подписаться
                    </button>

                </div>
                <div
                     class="subscription__agreement js-form-item form-item js-form-type-checkbox form-item-agreement js-form-item-agreement">


                    <input type="checkbox" id="edit-agreement" name="agreement_subscribe"
                           value="1" checked="checked" class="form-checkbox required" required="required"
                           aria-required="true">

                    <label for="edit-agreement" class="option js-form-required form-required">Даю согласие на <a
                                href="/agreement/" target="_blank">обработку персональных</a> данных</label>
                </div>


            </form>

        </div>

    </div>
</div>