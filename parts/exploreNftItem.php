<?php
include_once "lib/Common.php";
include_once "lib/DB.php";
include_once "lib/functions.php";

use praca_Pavlisin\Lib\Common;
use praca_Pavlisin\Lib\DB;

$common = new Common();
$db = new DB("localhost", 3306, "root", "", "nft_db");
$nftItems = $db->getNftItems();

foreach ($nftItems as $title => $item)
{
    if ($item["approved"] !== 1) return;
    $endsInDisplay = formatTimeDisplay($item['ends_in']);
?>
    <div class="col-lg-3">
        <div class="item">
            <div class="row">
                <div class="col-lg-12">
                    <span class="author">
                      <img src="assets/images/author-<?= $item['user_image_num']?>.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                    </span>
                    <img src="assets/images/discover-<?= $item['image_num'] ?>.jpg" alt="" style="border-radius: 20px;">
                    <h4><?= $title ?></h4>
                </div>
                <div class="col-lg-12">
                    <div class="line-dec"></div>
                    <div class="row">
                        <div class="col-6">
                            <span>Current Price: <br> <strong><?= $item['price'] ?> ETH</strong></span>
                        </div>
                        <div class="col-6">
                            <span>Ends In: <br> <strong><?= $item['ends_in'] ?></strong></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>