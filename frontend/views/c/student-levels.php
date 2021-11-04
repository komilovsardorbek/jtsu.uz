<?php

$this->params['breadcrumbs'][] = ['label' => $option->collection->name, 'url' => $option->collection->link];
$this->params['breadcrumbs'][] = $option->name;
?>

<style>
    .pc_shop_wrapper {
        margin-top: 70px;
    }

    .pc_shop_img_box {
        position: relative;
    }

    .pc_shop_img {
        transition: 0.4s;
        width: 100%;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    .pc_shop_item_content {
        padding-top: 20px;
    }

    h5.pc_shop_item_heading {
        font-size: 18px;
        font-weight: bold;
    }

    .pc_shop_item_content p {
        font-size: 14px;
        padding: 0px 0 5px;
        line-height: 1.5;
    }
</style>

<section>
    <div class="pc_shop_wrapper">
        <div class="container">
            <div class="row">
                <?php foreach ($items as $item) : ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-12 mb_40">
                        <a class="pc_shop_box" href="<?= $item->link ?>">
                            <div class="pc_shop_img_box">
                                <img src="<?= $item->galleryPhoto ?>" class="img-fluid pc_shop_img" alt="images">
                            </div>
                            <div class="pc_shop_item_content">
                                <h5 class="pc_shop_item_heading"><?= $item->text1 ?></h5>
                                <!--                                <p class="pc_shop_item_text">--><?php ////=$item->text1 ?><!--</p>-->
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
