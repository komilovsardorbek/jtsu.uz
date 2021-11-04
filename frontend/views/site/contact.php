<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model \frontend\models\ContactForm */

use afzalroq\cms\entities\unit\Unit;
use himiklab\yii2\recaptcha\ReCaptcha2;
use yii\bootstrap\ActiveForm;

$this->title = Yii::t('app', 'Contact');
$this->params['breadcrumbs'][] = $this->title;
?>
<section>
    <div class="container">
        <div class="row">
            <div class="  col-md-12 col-xl-6" style="padding:70px 20px;">
                <div class="loc_contact_info">
                    <h4 class="loc_sub_heading ml-md-0"><?= Yii::t('app', 'Contact Information') ?></h4>
                    <div class="loc_conatact_section">
                        <h4 class="loc_sub_heading"><?= Yii::t('app', 'Location') ?> -</h4>
                        <div class="loc_contact_info_inner"><i class="fas fa-map-marker-alt"></i>
                            <?= Unit::get('address'); ?>
                        </div>
                    </div>
                    <div class="loc_conatact_section">
                        <h4 class="loc_sub_heading"><?= Yii::t('app', 'Call Us') ?> -</h4>
                        <div class="loc_contact_info_inner">
                            <i class="fas fa-phone"></i>
                            <?= Unit::get('phone'); ?>
                            <br> <span class="span-margin"><?= Unit::get('fax'); ?></span>
                        </div>
                    </div>
                    <div class="loc_conatact_section">
                        <h4 class="loc_sub_heading"><?= Yii::t('app', 'Mail Us') ?> -</h4>
                        <div class="loc_contact_info_inner" style="margin: 0;">
                            <i class="fas fa-at"></i>
                            <?= Unit::get('mail'); ?><br> <span class="span-margin"> </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 col-xl-6 " style="padding:70px 20px;">
                <div class="wa_mapdata_inner wow fadeInRight" data-wow-delay="0.1s">
                    <div class="wa_map_form">
                        <h1 class=""><?= Yii::t('app', 'Contact us') ?></h1>
                        <?php $form = ActiveForm::begin(['options' => ['class' => 'reservation__form']]); ?>
                        <?= $form->errorSummary($model) ?>
                        <div class="row">
                            <div class="col-md-12">
                                <?php if (Yii::$app->session->hasFlash('success')): ?>
                                    <div class="alert alert-success"><?= Yii::t('app', 'Thank you for contacting us. We will get back to you as soon as possible.') ?></div>
                                <?php elseif (Yii::$app->session->hasFlash('error')): ?>
                                    <div class="alert alert-danger"><?= Yii::t('app', 'An error occurred while sending email.') ?></div>
                                <?php else: ?>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-12">
                                <div class="wa_map_field">
                                    <?= $form->field($model, 'full_name')->textInput(['maxlength' => 255, 'placeholder' => Yii::t('app', 'Enter Your Name'), 'class' => 'wa_form_field require mb-0'])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wa_map_field">
                                    <?= $form->field($model, 'email_phone')->textInput(['maxlength' => 255, 'placeholder' => Yii::t('app', 'Enter Your Phone'), 'class' => 'wa_form_field require mb-0'])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wa_map_field">
                                    <?= $form->field($model, 'message')->textarea(['rows' => '5', 'cols' => '80', 'placeholder' => Yii::t('app', 'Enter Your Message...'), 'class' => 'wa_form_field require mb-0'])->label(false) ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="wa_map_field">
                                    <?= $form->field($model, 'reCaptcha')->widget(ReCaptcha2::class,
                                        [
                                            'options' => ['class' => 'form-control mb-30']
                                        ]
                                    )->label(false) ?>
                                </div>
                            </div>
                            <button class="wa_btn" type="submit"><?= Yii::t('app', 'Send') ?></button>
                        </div>
                    </div>
                    <?php ActiveForm::end(); ?>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="wa_map_wrapper relative">

    <div class="wa_map_box">
        <div class="map_box maxw-1000 mx-auto map-container">
            <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3016.5728579998404!2d69.04118681520735!3d40.88124717931379!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae0d83398bf7e7%3A0xd1500dfd3d3f5eeb!2so&#39;zbekiston%20davlat%20jismonoy%20tarbiya%20va%20sport%20instituti!5e0!3m2!1suz!2s!4v1617169905982!5m2!1suz!2s"
                    width="600"
                    height="609"
                    style="border:0;"
                    allowfullscreen="">
            </iframe>
        </div>
    </div>
</section>

