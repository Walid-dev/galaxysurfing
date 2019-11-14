<?php ob_start(); ?>
<div id="editPostContainer" class="container">
    <h1 class="text-center pt-5"><?= "Modifier " . '"' . $post['title'] . '"' ?></h1>
    <hr class="mt-2 mb-2">
    <p><a class="up btn return_btn" href="index.php#sectionArticles">Retour à la liste des billets</a></p>
    <form action="index.php?action=updateArticle&amp;id=<?= $post['id'] ?>" method="post">
        <div class="form-group">
            <label for="author">Auteur</label><br>
            <input type="text" class="form-control" id="author" name="author" value="<?= $post['author'] ?>" />
        </div>

        <div class="form-group">
            <label for="title">Titre</label>
            <input id="title" class="form-control" name="title" value="<?= $post['title'] ?>" />
        </div>

        <div class="form-group">
            <label for="title">Texte</label><br>
            <textarea id="myTextArea" name="content"><?= $post['content'] ?></textarea>
        </div>

        <div id="buttonBox" class="d-flex mt-4">
            <button class="btn btn-info mb-5" type="submit" name="update">Sauvegarder</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>