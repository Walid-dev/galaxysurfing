<tr>
    <td><?= $data['post_id']; ?></td>
    <td class="comment_author"><?= $data['author']; ?></td>
    <td class="report"><?= $data['report']; ?></td>
    <td><?= $data['comment']; ?></td>
    <td>
        <a href="index.php?action=deleteComment&amp;id=<?= $data['id'] ?>" class="btn btn-danger">Effacer</a>
        <a href="index.php?action=validateComment&amp;id=<?= $data['id'] ?>" class="btn btn-info ml-2">Valider</a>
    </td>
</tr>