<?php
require_once "menuAdmin.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['name'];
    $user_image_num = $_POST['image_number'];

    $update = $db->updateUser($id,$username,$user_image_num);
    header("Location: updateUser.php");
}

$users = $db->getUsers();
?>

<div class="container">
    <h3>Manage User:</h3>

    <form action="updateUser.php" method="post" style="display: flex; flex-direction: column">
        <label for="selectedUser"><strong>Select User to manage:</strong></label>
        <select name="selectedUser" id="selectedUser" onchange="this.form.submit()">
            <?php
            foreach ($users as $user) {
                echo '<option value="' . $user['id'] . '" ' . (isset($_POST['selectedUser']) &&
                    $_POST['selectedUser'] == $user['id'] ? 'selected' : '') . '>' . $user['username'] . '</option>';
            }
            ?>
        </select>
    </form>
    <hr color="black" size="8">

    <?php
    if (isset($_POST['selectedUser'])) {
        $selectedUserId = $_POST['selectedUser'];
        $selectedUser = $db->getUser($selectedUserId);
        ?>
        <form action="updateUser.php" method="post" style="display: flex; flex-direction: column">
            <input type="hidden" name="id" value="<?= $selectedUser['id']; ?>">

            <label for="name">Username:</label>
            <input type="text" name="name" value="<?= $selectedUser['username']; ?>" required><br>

            <label for="image_number">Image number:</label>
            <select name="image_number" required>
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    $selected = ($i == $selectedUser['user_image_num']) ? 'selected="selected"' : '';
                    echo '<option value="' . $i . '" ' . $selected . '>' . $i . '</option>';
                }
                ?>
            </select><br>
            <button type="submit" name="submit">Update</button><br>
            <a href="deleteUser.php?id=<?php echo $selectedUser['id']; ?>" onclick="return confirm('Are you sure you want to delete this NFT?')">Delete</a>

        </form>
    <?php }
    ?>
</div>