<?php
require_once "menuAdmin.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = $db->deleteUser($id);

    if ($delete) {
        header("Location: updateUser.php");
        exit();
    } else {
        echo "Failed to delete";
    }
} else {
    echo "Invalid ID";
}
?>