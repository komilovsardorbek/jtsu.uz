<?php

$this->params['breadcrumbs'][] = $title;
?>

<div class="wa_team_wrapper">
    <div class="container">
        <?php foreach ($faculties as $faculty): ?>
            <section class="wa_started_wrapper relative wow fadeInUp mb-4" data-wow-delay="0.1s">
                <a href="<?= $faculty->link ?>">
                    <div class="wa_started_inner">
                        <div class="row">
                            <div class="col-sm-3">
                                <img src="<?= $faculty->getPhoto1('143', '145', 'zoomCrop', 'transparent', 'center', 'top') ?>" alt="image"/>
                            </div>
                            <div class="col-sm-9">
                                <div class="wa_started_data">
                                    <h1><?= isset($cathedra) && $cathedra ? $faculty->getText1() : $faculty->getName() ?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </section>
        <?php endforeach; ?>
    </div>
</div>
