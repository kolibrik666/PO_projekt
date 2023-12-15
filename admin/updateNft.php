<?php
require_once "menuAdmin.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $title = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image_num = $_POST['image_number'];
    $royalties = $_POST['royalties'];
    $ends_in = date('Y-m-d', strtotime($_POST['date']));
    $approved = $_POST['approved'];
    $users_id = $_POST['user_id'];

    $update = $db->updateNft($id,$title,$description,$price,$royalties,$image_num,$ends_in,$approved,$users_id);
    header("Location: updateNft.php");
}

$nfts = $db->getNftItems();

?>
<div class="container">
    <h3>Manage NFT:</h3>

    <form action="updateNft.php" method="post" style="display: flex; flex-direction: column">
        <label for="selectedNft"><strong>Select NFT to manage:</strong></label>
        <select name="selectedNft" id="selectedNft" onchange="this.form.submit()">
            <?php
            foreach ($nfts as $title => $item) {
                echo '<option value="' . $item['id'] . '">' . $title . '</option>';
            }
            ?>
        </select>
    </form>
    <hr color="black" size="8">

    <?php

    if (isset($_POST['selectedNft'])) {
        $selectedNftId = $_POST['selectedNft'];
        $selectedNft = $db->getNft($selectedNftId);
        ?>

        <form action="updateNft.php" method="post" style="display: flex; flex-direction: column">
            <label for="name">Name:</label>
            <input type="text" name="name" value="<?php echo $selectedNft['title']; ?>" required><br>

            <label for="description">Description:</label>
            <textarea name="description" required><?php echo $selectedNft['description']; ?></textarea><br>

            <label for="price">Price:</label>
            <input type="text" name="price" value="<?php echo $selectedNft['price']; ?>" required><br>

            <label for="image_number">Image number:</label>
            <select name="image_number" required>
                <?php
                for ($i = 1; $i <= 6; $i++) {
                    $paddedNumber = sprintf('%02d', $i);
                    $selected = ($paddedNumber == $selectedNft['image_num']) ? 'selected="selected"' : '';
                    echo '<option value="' . $paddedNumber . '" ' . $selected . '>' . $paddedNumber . '</option>';
                }
                ?>
            </select><br>

            <label for="royalties">Royalties:</label>
            <input type="text" name="royalties" value="<?php echo $selectedNft['royalties']; ?>"><br>

            <label for="date">Date:</label>
            <input type="date" name="date" value="<?php echo $selectedNft['ends_in']; ?>"><br>

            <label for="approved">Approval Status:</label>
            <select name="approved">
                <option value="0" <?php echo ($selectedNft['approved'] == 0) ? 'selected="selected"' : ''; ?>>Not Approved</option>
                <option value="1" <?php echo ($selectedNft['approved'] == 1) ? 'selected="selected"' : ''; ?>>Approved</option>
            </select><br>

            <label for="user_id">User:</label>
            <select name="user_id">
                <?php
                $users = $db->getUsers();
                foreach ($users as $user) {
                    $selected = ($user['id'] == $selectedNft['users_id']) ? 'selected="selected"' : '';
                    echo '<option value="' . $user['id'] . '" ' . $selected . '>' . $user['username'] . '</option>';
                }
                ?>
            </select><br>
            <input type="hidden" name="id" value="<?php echo $selectedNft['id']; ?>">

            <button type="submit" name="submit">Update</button><br>
            <a href="deleteNft.php?id=<?php echo $selectedNft['id']; ?>" onclick="return confirm('Are you sure you want to delete this NFT?')">Delete</a>

        </form>

    <?php } ?>
</div>
