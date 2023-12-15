<?php
include_once "lib/DB.php";
include_once "lib/functions.php";

use praca_Pavlisin\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "nft_db");

$nftItems = $db->getNftItems();

foreach ($nftItems as $title => $item)
{
    if ($item["approved"] !== 1) continue;
    ?>

    <div class="item">
        <div class="thumb">
            <img src="assets/images/featured-<?=$item['image_num']?>.jpg" alt="" style="border-radius: 20px;">
            <div class="hover-effect">
                <div class="content">
                    <h4><?=$title?></h4>
                    <span class="author">
                        <img src="<?= $item['user_image_num'] ?>" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6> <?=$item['username']?><br></h6>
                      </span>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>