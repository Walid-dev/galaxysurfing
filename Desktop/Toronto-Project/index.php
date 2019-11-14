<?php
session_start();
require('controller/frontendController.php');

try {
    if (isset($_GET['error'])) { } else {
        test();
    }
} catch (Exception $e) {
    $_SESSION['message'] = $e->getMessage();
    $_SESSION['msg_type'] = "danger";
    listPosts();
}
