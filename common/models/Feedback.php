<?php

namespace common\models;


use himiklab\yii2\recaptcha\ReCaptchaValidator2;
use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "contacts".
 *
 * @property int $id
 * @property string $full_name
 * @property string $email_phone
 * @property string $message
 * @property int $created_at [int(11)]
 */
class Feedback extends \yii\db\ActiveRecord
{
    public $reCaptcha;

    public static function tableName()
    {
        return 'feedback';
    }

    public function rules()
    {
        return [
            [['full_name', 'email_phone'], 'required'],
            [['full_name', 'email_phone', 'message'], 'string', 'max' => 50],
            [['reCaptcha'], ReCaptchaValidator2::class, 'uncheckedMessage' => Yii::t('app', 'Please confirm that you are not a bot.')],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'full_name' => 'FIO',
            'email_phone' => 'Telefon',
            'message' => 'Matni',
            'created_at' => 'Qo`shilgan vaqti',
            'reCaptcha' => Yii::t('app', 'reCaptcha'),
        ];
    }

    public function behaviors()
    {
        return [
            'timestamp' => [
                'class' => 'yii\behaviors\TimestampBehavior',
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                ],
            ],
        ];
    }

    public function afterSave($insert, $changedAttributes)
    {
//        dd($this);
        if ($insert) {
            $text = "Murojaat qoldirildi! \n" .
                "FIO: " . $this->full_name . "\n" .
                "Telefon: " . $this->email_phone . "\n" .
                "Xabar: " . $this->message . "\n";
            (new Telegram($text))->sendMessage();
        }
        parent::afterSave($insert, $changedAttributes);
    }
}
