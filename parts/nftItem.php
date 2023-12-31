<?php
include_once "lib/DB.php";
include_once "lib/functions.php";

use praca_Pavlisin\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "nft_db");

$nftItems = $db->getNftItems();

foreach ($nftItems as $title => $item)
{
    if ($item["approved"] !== 1) continue;
    $priceInUsd = convertEthToUsd($item['price']);
    $endsInDisplay = formatTimeDisplay($item['ends_in']);
    ?>
        <div class="col-lg-6 currently-market-item all msc">
            <div class="item">
                <div class="left-image">
                    <img src="assets/images/discover-<?= $item['image_num'] ?>.jpg" alt="" style="border-radius: 20px;">
                </div>
                <div class="right-content">
                    <h4><?= $title ?></h4>
                    <span class="author">
                    <img src="assets/images/author-<?= $item['user_image_num'] ?>.jpg" alt="" style="max-width: 50px; border-radius: 50%;">
                    <h6><?= $item['username'] ?><br></h6>
                </span>
                    <div class="line-dec"></div>
                    <span class="bid">
                    Current Bid<br>
                    <strong><?= $item['price'] ?> ETH</strong><br>
                    <em>(<?= $priceInUsd ?> $)</em>
                </span>
                    <span class="ends">
                    Ends In<br>
                    <strong><?= $endsInDisplay ?></strong><br>
                    <em>(<?= $item['ends_in'] ?>)</em>
                </span>
                    <div class="line-dec"></div>
                    <p><?= $item['description'] ?></p>
                </div>
            </div>
        </div>
    <?php
}
?>