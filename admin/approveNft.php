<?php
require_once "menuAdmin.php";

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $approved = $_POST['approved'];

    $update = $db->approveNft($id, $approved);
    header("Location: approveNft.php");
}
?>

<div class="container">
    <h3>Approve NFT:</h3>
    <form action="approveNft.php" method="post" style="display: flex; flex-direction: column">
        <label for="id">Select NFT to approve:</label>
        <select name="id" required>
            <?php
            $nfts = $db->getNftItems();
            foreach ($nfts as $title => $item) {
                if ($item['approved'] == 0) echo '<option value="' . $item["id"] . '">' . $title . '</option>';
            }
            ?>
        </select>
        <br>
        <label for="approved">Approval Status:</label>
        <select name="approved" required>
            <option value="0">Not Approved</option>
            <option value="1">Approved</option>
        </select>
        <br>
        <input type="submit" name="submit" value="Update">
    </form>
</div>

