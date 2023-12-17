<?php
require_once "menuAdmin.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $deleteNfts = $db->deleteNftsByUserId($id);
    $deleteSellers = $db->deleteSellersByUserId($id);
    $delete = $db->deleteUser($id);

    if ($delete) {
        header("Location: updateUser.php");
        exit();
    } else {
        header("Location: deleteUser.php");
        echo "Failed to delete";
    }
} else {
    header("Location: deleteUser.php");
    echo "Invalid ID";
}
?>