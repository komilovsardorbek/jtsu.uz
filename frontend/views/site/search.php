<?php

use yii\widgets\ListView;

$this->params['breadcrumbs'][] = $title;

?>
<br>

<br>
<section class="wa_started_wrapper relative wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <?php if($dataProvider->getTotalCount() > 0): ?>
        <div class="row">

            <!-- === product-item === -->

            <?= ListView::widget([
                'dataProvider' => $dataProvider,
                'itemOptions' => [
                    'tag' => false,
                ],
                'itemView' => '_item',
                'layout' => "{items}",
                'options' => ['tag' => false, 'id' => false],
            ])
            ?>

        </div><!--/row-->
        <br>
        <ul class="pagination pagination-md justify-content-center ">
            <div class="pagination-wrapper" style="text-color: #009134">
                <?= ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemOptions' => [
                        'tag' => false,
                    ],
                    'layout' => "{pager}",
                    'options' => ['tag' => false, 'id' => false],
                    'pager' => [
                        'options' => [
                            'class' => 'pagination'
                        ],
                        'nextPageLabel' => 'Next',
                        'linkOptions' => ['class' => 'page-link'],
                        'firstPageCssClass' => 'page-link',
                        'lastPageCssClass' => 'page-link',
                        'prevPageLabel' => 'Previous',
                        'disabledListItemSubTagOptions' => ['tag' => 'a'],
                        'disabledPageCssClass' => '',
                        'prevPageCssClass' => 'text-light',
                        'nextPageCssClass' => 'text-light',
                    ]
                ])
                ?>
            </div>
        </ul>
        <?php else: ?>
        <div> <h3> <?= Yii::t('app','No data found') ?></h3></div>
        <?php endif; ?>

    </div>
</section>