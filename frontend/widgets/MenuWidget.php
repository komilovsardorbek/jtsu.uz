<?php

namespace frontend\widgets;

use yii\bootstrap\Widget;

class MenuWidget extends Widget
{

    public function run()
    {
        return $this->render('_menu');
    }
}
