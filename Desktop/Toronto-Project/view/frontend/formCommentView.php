<form id="commentForm" action="index.php?action=addComment&amp;id=<?= $post['id'] . "#commentForm" ?>" method="post">
    <div class="form-group">
        <label for="author">Auteur</label><br />
        <input class="form-control" type="text" id="author" name="author" required oninvalid="this.setCustomValidity('Remplir le champs svp')" oninput="setCustomValidity('')" />
    </div>
    <div class="form-group">
        <label for="comment">Commentaire</label><br />
        <textarea class="form-control" id="comment" name="comment" required oninvalid="this.setCustomValidity('Ajouter un commentaire.')" oninput="setCustomValidity('')"></textarea>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </div>
</form>