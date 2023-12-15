<?php
require_once "menuAdmin.php";
if ($_GET['id'] !== null){
    $drink = $db->getNft($_GET['id']);
}


if (isset($_POST['submit'])) {
    $title = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $user_id = $_POST['user_id'];
    $image = $_POST['image_number'];
    $royalties = $_POST['royalties'];
    $date = date('Y-m-d', strtotime($_POST['date']));

    $update = $db->updateDrinkMenuItem($title,$description,$price,$royalties,$image,$date,$approved,$users_id);

    if ($update) {
        header("Location: menuAdmin.php");
    } else {
        header("Location: menuAdmin.php");
    }
}
?>
<div class="container" >
    <h3>Edit drink:</h3><br>
    <br><br>
    <form action="updateDrinkMenu.php" method="post" style="display: flex; flex-direction: column">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $drink['name']; ?>"><br>
        <label for="description">Description:</label>
        <textarea name="description"><?php echo $drink['description']; ?></textarea><br>
        <label for="price">Price:</label>
        <input type="text" name="price" value="<?php echo $drink['price']; ?>" required><br>
        <label for="drink_category_id">Category:</label>
        <select name="drink_category_id" required>
            <?php
            $categories = $db->getCategories();
            foreach ($categories as $category) {
                $selected = ($category['id'] == $drink['drink_category_id']) ? 'selected="selected"' : '';
                echo '<option value="' . $category['id'] . '" ' . $selected . '>' . $category['name'] . '</option>';
            }
            ?>
        </select><br>
        <label for="url">Image link:</label>
        <textarea name="url"><?php echo $drink['img_url']; ?></textarea><br>
        <input type="hidden" name="id" value="<?php echo $drink['id']; ?>">
        <input type="submit" name="submit" value="Update">
    </form>
</div>