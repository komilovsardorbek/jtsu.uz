<?php
/* @var $links */
/* @var $mobile */
?>


<?php if ($mobile): ?>
    <?php foreach ($getmobil as $mobil): ?>
            <?= $mobil ?>
    <?php endforeach; ?>

<?php else: ?>
    <?php foreach ($getLinks as $link) {
        echo '<li>' . $link . '</li>';
    } ?>

<?php endif; ?>


