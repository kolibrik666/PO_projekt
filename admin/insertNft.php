<?php
require_once "menuAdmin.php";

if (isset($_POST['submit'])) {
    $title = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $user_id = $_POST['user_id'];
    $image = $_POST['image_number'];
    $royalties = $_POST['royalties'];
    $date = date('Y-m-d', strtotime($_POST['date']));

    $insert = $db->insertNft($title, $description, $price, $royalties, $image, $date, $user_id);
    if ($insert) {
        header("Location: menuAdmin.php");
    } else {
        header("Location: menuAdmin.php");
    }
}
?>

<div class="container">
    <h3>Add NFT:</h3>
    <form action="insertNft.php" method="post" style="display: flex; flex-direction: column">
        <label for="name">Name:</label>
        <input type="text" name="name" value=""><br>
        <label for="description">Description:</label>
        <textarea name="description"></textarea><br>
        <label for="price">Price (in ETH):</label>
        <input type="text" name="price" value="" required><br>
        <label for="user_id">User:</label>
        <select name="user_id" required>
            <?php
            $users = $db->getUsers();
            foreach ($users as $user) echo '<option value="' . $user['id'] . '">' . $user['username'] . '</option>';
            ?>
        </select><br>
        </select>
        <label for="image_number">Image number:</label>
        <select name="image_number" required>
            <?php
            for ($i = 1; $i <= 6; $i++) {
                $paddedNumber = sprintf('%02d', $i);
                echo '<option value="' . $paddedNumber . '">' . $paddedNumber . '</option>';
            }
            ?>
        </select><br>
        <label for="royalties">Royalties: (advised -> 0-25%)</label>
        <input type="text" name="royalties" value=""><br>
        <label for="date">Ends in Date:</label>
        <input type="date" name="date" value=""><br>
        <input type="submit" name="submit" value="Add NFT">
    </form>
</div>

