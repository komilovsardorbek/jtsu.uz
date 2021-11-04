<?php

$this->params['breadcrumbs'][] = $option->getName();
?>

<div class="wa_team_wrapper">
    <div class="container">
        <?php foreach ($items as $item): ?>
            <section class="wa_started_wrapper relative wow fadeInUp mb-4" data-wow-delay="0.1s">
                <a href="<?= $item->link ?>">
                    <div class="wa_started_inner">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= $item->getPhoto1('143', '145', 'scaleResize', 'transparent', 'center', 'top') ?>" alt="image"/>
                            </div>
                            <div class="col-sm-9">
                                <div class="wa_started_data">
                                    <h1><?= $item->getText1() ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
        <?php endforeach; ?>
    </div>
</div>
