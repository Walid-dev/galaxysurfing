<?php ob_start(); ?>
<section id="part1" class="part1">
    <?= sliderHeader(); ?>
</section>
<?= meteoBanner(); ?>
<section id="part2" class="part2">
    <?= mapSection(); ?>
</section>
<section id="part3" class="part3">

</section>
<section id="part4" class="part4"></section>


<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>