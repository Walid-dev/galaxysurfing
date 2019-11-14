<div id="infoText" class="alert alert-<?= $_SESSION['msg_type'] ?>">
    <?= $_SESSION['message'];
    unset($_SESSION['message']); ?>
</div>