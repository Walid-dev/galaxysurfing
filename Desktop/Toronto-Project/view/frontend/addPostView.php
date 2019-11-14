<?php ob_start(); ?>
<div id="addPostContainer" class="container">
    <h1 class="text-center pt-5">Ajouter un article</h1>
    <hr class="mt-2 mb-2">
    <p><a class="up btn return_btn mb-2 mt-2" href="index.php#sectionArticles">Retour à la liste des chapitres</a></p>
    <h2>Ajouter un article</h2>

    <form method="post">
        <div class="form-group">
            <label for="author">Auteur</label><br>
            <input class="form-control" placeholder="Auteur" type="text" id="author" name="author" required oninvalid="this.setCustomValidity('Remplir le champ svp.')" oninput="setCustomValidity('')" />
            <div class="invalid-feedback">
                Remplir ce champs svp.
            </div>
        </div>
        <div class="form-group">
            <label for="title">Titre</label><br>
            <input class="form-control" placeholder="Titre" id="title" name="title" required oninvalid="this.setCustomValidity('Remplir le champ svp')" oninput="setCustomValidity('')" />
        </div>
        <div class="form-group">
            <label for="title">Texte</label><br />
            <textarea id="myTextArea" name="content"></textarea>
        </div>
        <div id="buttonBox" class="d-flex mt-4">
            <button class="btn btn-info ml-1" type="submit" name="save">Poster</button>
        </div>
    </form>
</div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>