<?php
require_once "menuAdmin.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $db->deleteNft($id);

    if ($delete) {
        header("Location: updateNft.php");
        exit();
    } else {
        echo "Failed to delete NFT";
    }
} else {
    echo "Invalid ID";
}
?>