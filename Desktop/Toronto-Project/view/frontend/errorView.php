<?php ob_start(); ?>
<div id="errorView" class="container-fluid">
    <div class="row">
        <div class="error_msg p-3">
            <h1 class="text-center display-5"><?= 'Erreur : ' . $e->getMessage(); ?></h1>
            <div class="row">
                <a class="up return_errorView btn return_btn ml-3 mt-2 mb-2" href="index.php#sectionArticles">Retour à la liste des chapitres</a>
            </div>
        </div>
    </div>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>