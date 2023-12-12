<?php require_once "menuAdmin.php";


if (isset($_POST['submit'])) {
    $update = $db->insertDrinkMenuItem( $_POST['name'],$_POST['description'],$_POST['price'],$_POST['drink_category_id'],$_POST['url']);

    if ($update) {
        header("Location: drinkMenuAdmin.php");
    } else {
        header("Location: drinkMenuAdmin.php");
    }
}

