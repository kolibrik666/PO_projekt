<?php

include_once "lib/DB.php";

use praca_Pavlisin\Lib\DB;
$db = new DB("localhost", 3306, "root", "", "nft_db");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //ziskanie dat
    $title = $_POST['title'];
    $description = $_POST['description'];
    $username = $_POST['username'];
    $price = $_POST['price'];
    $royalties = $_POST['royalties'];
    $date = date('Y-m-d', strtotime($_POST['date']));

    if ($db->isUsernameExists($username)) {
        $user_id = $db->getUserIdByUsername($username);
    } else {
        $profileFiles = glob('assets/images/author-*.jpg');
        $randomProfile = $profileFiles[array_rand($profileFiles)];
        $db->insertUser($username,$randomProfile);
        $user_id = $db->getUserIdByUsername($username);
    }

    $imageFiles = glob('assets/images/discover-*.jpg');
    $randomImage = $imageFiles[array_rand($imageFiles)];
    $insert = $db->insertNft($title,$description,$price,$royalties,$randomImage,$date,$user_id);
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