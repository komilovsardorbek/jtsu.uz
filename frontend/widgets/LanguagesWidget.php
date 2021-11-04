<?php

namespace frontend\widgets;

use Yii;
use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class LanguagesWidget extends Widget
{
    public $mobile;
    private $languages;
    private $current_url;
    private $current_language;

    public function init()
    {
        $this->languages = Yii::$app->params['cms']['languageIds'];
        $this->current_url = mb_strcut(Url::current(), 4);
        $this->current_language = Yii::$app->language;
    }

    public function run()
    {
        return $this->render('languages_template', [
            'getLinks' => $this->getLinks(),
            'mobile' => $this->mobile,
            'getmobil' => $this->getMobile()
        ]);
    }

    private function getLinks()
    {
        foreach ($this->languages as $language => $value) {
            if ($language != $this->current_language) {
                $url = rtrim("/$language/$this->current_url", '/');
                $links[] = Html::a('<img style="width:20px;" src="/images/' . $language . '.svg" alt=""> ' . Yii::$app->params['cms']['languages'][$value], $url);
            }
        }
        return $links ?? null;
    }

    private function getMobile()
    {
        foreach ($this->languages as $language => $value) {
            if ($language != $this->current_language) {
                $url = rtrim("/$language/$this->current_url", '/');
                $mobile[] = Html::a( $language , $url);
            }

        }
        return $mobile;
    }


}
