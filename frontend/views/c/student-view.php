<?php

use yii\helpers\Url;
use yii\widgets\Breadcrumbs;

$this->params['breadcrumbs'][] = $title->name;
?>

<section class="wa_started_wrapper relative wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <?php foreach ($entities as $entity): ?>
                <div class="col-6">
                    <a href="<?= Url::to(['/students/list', 'id' => $entity->id]) ?>">
                        <div class="wa_started_inner">
                            <div class="row">
                                <div class="col-lg-9">
                                    <div class="wa_started_data">
                                        <a href="<?= Url::to(['/students/list', 'id' => $entity->id]) ?>">
                                            <h1><?= $entity->name ?></h1>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
