<?php

$this->params['breadcrumbs'][] = ['label' => $item->entity->name, 'url' => $item->entity->link];
$this->params['breadcrumbs'][] = $item->getText1();

$item->registerMetaTags();

?>

<section style="padding-top: 80px;" class="wa_started_wrapper relative wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="wa_project_gallery text-center">
                    <div class="gallery_container popup_gallery4">
                        <div class="row">
                            <?php foreach ($item->photos as $photo) : ?>
                                <div style="margin: 20px 0;" class="col-md-4 col-sm-6 design wow zoomIn" data-wow-delay="0.2s">
                                    <a href="<?= $photo->getPhoto('960', '700', 'zoomCrop', 'transparent', 'center', 'top') ?>" class="view">
                                        <div class="">
                                            <img src="<?= $photo->getPhoto('370', '280', 'zoomCrop', 'transparent', 'center', 'top') ?>" alt="project-img">
                                        </div>
                                    </a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

