<?php
include_once "lib/Common.php";
include_once "lib/DB.php";
include_once "lib/functions.php";

use praca_Pavlisin\Lib\Common;
use praca_Pavlisin\Lib\DB;

$common = new Common();
$db = new DB("localhost", 3306, "root", "", "nft_db");

$users = $db->getUserInfo();

foreach ($users as $username => $item)
{
    $priceInUsd = convertEthToUsd($item['earnings_eth']);
    ?>
    <div class="col-lg-3 col-sm-6">
        <div class="row">
            <div class="col-lg-12">
                <div class="item">
                    <img src="<?= $item['user_image_url'] ?>" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                    <h6><?= $username ?><br><a href="#"><?= $item['earnings_eth'] ?> ETH or $<?= $priceInUsd ?></a></h6>
                </div>
            </div>
        </div>
    </div>
    <?php
}
?>