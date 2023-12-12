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
    $imageUrl = $item['image_url'];
    $imageNum = substr($imageUrl, -6);
    ?>

    <div class="item">
        <div class="thumb">
            <img src="assets/images/featured-<?= $imageNum?>" alt="" style="border-radius: 20px;">
<!--            <img src="--><?php //= $item['image_url'] ?><!--" alt="" style="border-radius: 20px;">-->

            <div class="hover-effect">
                <div class="content">
                    <h4><?=$title?></h4>
                    <span class="author">
                        <img src="<?= $item['user_image_url'] ?>" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6> <?=$item['username']?><br></h6>
                      </span>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>