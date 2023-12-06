<?php
include_once "lib/Common.php";
include_once "lib/DB.php";

use praca_Pavlisin\Lib\Common;
use praca_Pavlisin\Lib\DB;

$common = new Common();
$db = new DB("localhost", 3306, "root", "", "nft_db");
?>
<?php
    $nftItems = getNftItems();

    foreach ($nftItems as $title => $item) {
    ?>
    <div class="col-lg-6 currently-market-item all msc">
        <div class="item">
            <div class="left-image">
                <img src="<?= $item['image_url'] ?>" alt="" style="border-radius: 20px; min-width: 195px;">
            </div>
            <div class="right-content">
                <h4><?= $title ?></h4>
                <span class="author">
                    <!-- Assuming 'desc' in the database corresponds to Liberty Artist -->
                    <img src="assets/images/author.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6><?= $item['desc'] ?><br><a href="#"><?= $item['url'] ?></a></h6>
                </span>
                <div class="line-dec"></div>
                <span class="bid">Current Bid<br><strong><?= $item['price'] ?></strong><br><em>(<?= $item['price'] ?>)</em></span>
                <span class="ends">Ends In<br><strong><?= $item['ends_in'] ?></strong><br><em><?= $item['ends_in'] ?></em></span>
                <div class="text-button">
                    <a href="details.php">View Item Details</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>