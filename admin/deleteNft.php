<?php
require_once "menuAdmin.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $db->deleteNft($id);

    if ($delete) {
        header("Location: updateNft.php");
        exit();
    } else {
        header("Location: deleteNft.php");
        echo "Failed to delete";
    }
} else {
    header("Location: deleteNft.php");
    echo "Invalid ID";
}
?>