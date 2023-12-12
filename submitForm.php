<?php

include_once "lib/DB.php";

use praca_Pavlisin\Lib\DB;
$db = new DB("localhost", 3306, "root", "", "nft_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $title = $_POST['title'];
    $description = $_POST['description'];
    $username = $_POST['username'];
    $price = $_POST['price'];
    $royalties = $_POST['royalties'];
    $date = date('Y-m-d', strtotime($_POST['date']));

    if ($db->isUsernameExists($username)) {
        $user_id = $db->getUserIdByUsername($username);
    } else {
        $randomPrfNumber = sprintf('%02d', rand(1, 3));
        $db->insertUser($username,$randomPrfNumber);
        $user_id = $db->getUserIdByUsername($username);
    }

    $randomImgNumber = sprintf('%02d', rand(1, 4));
    $insert = $db->insertNft($title,$description,$price,$royalties,$randomImgNumber,$date,$user_id);
    if($insert) {
        header("Location: index.php");
    }
    else {
        echo "Invalid request method!";
    }
} else {
    echo "Invalid request method!";
}

?>