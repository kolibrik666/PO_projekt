<?php
require_once "menuAdmin.php";

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $image_num = $_POST['image_number'];

    $insert = $db->insertUser($username, $image_num);
    header("Location: insertUser.php");
}
?>

<div class="container">
    <h3>Add User:</h3>
    <form action="insertUser.php" method="post" style="display: flex; flex-direction: column">
        <label for="username">Username:</label>
        <input type="text" name="username" value=""><br>
        </select>
        <label for="image_number">Image number:</label>
        <select name="image_number" required>
            <?php
            for ($i = 1; $i <= 3; $i++) {
                $paddedNumber = sprintf('%02d', $i);
                echo '<option value="' . $paddedNumber . '">' . $paddedNumber . '</option>';
            }
            ?>
        </select><br>
        <input type="submit" name="submit" value="Add User">
    </form>
</div>

