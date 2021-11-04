<?php

$this->params['breadcrumbs'][] = ['label' => $collection->name, 'url' => $collection->link];
$this->params['breadcrumbs'][] = $collection->name;

?>

<section class="wa_started_wrapper relative wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <?php foreach ($studentCategories as $category): ?>
        <br>
            <a href="<?= $category->link ?>">
                <div class="wa_started_inner">
                    <div class="wa_started_data">
                        <h1><?= $category->name ?></h1>
                    </div>
                </div>
                <br>
            </a>
        <?php endforeach; ?>
    </div>
</section>
