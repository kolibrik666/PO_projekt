<?php
require_once "menuAdmin.php";

$nftSelection = null;

if ($_GET['id'] !== null) {
    $nftSelection = $db->getNft($_GET['id']);
}

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $approved = $_POST['approved'];

    $update = $db->approveNft($id, $approved);

    header("Location: menuAdmin.php");

}
?>

<div class="container">
    <h3>Approve NFT:</h3>
    <form action="approveNft.php" method="post" style="display: flex; flex-direction: column">
        <label for="approved">Approval Status:</label>
        <select name="approvedSelect" required>
            <?php
            $nfts = $db->getNftItems();
            foreach ($nfts as $title => $item) {
                echo $item['id'];
                if (isset($item['id']) && $item['approved'] == 0) {
                    $selected = ($nftSelection && $item['id'] == $nftSelection['id']) ? 'selected="selected"' : '';
                    echo '<option value="' . $item['id'] . '" ' . $selected . '>' . $title . '</option>';
                    echo '<input type="text" name="id" value="'. $nftSelection ? $nftSelection['id'] : '';
                }
            }
            ?>

        </select><br>
        <label for="approved">Approved:</label>
        <input type="text" name="approved" value="<?php echo $nftSelection ? $nftSelection['approved'] : ''; ?>"><br>
        <input type="submit" name="submit" value="Update">
    </form>
</div>