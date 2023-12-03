<?php

include_once "lib/Common.php";
include_once "lib/DB.php";

use praca_Pavlisin\Lib\Common;
use praca_Pavlisin\Lib\DB;

$common = new Common();
$db = new DB("localhost", 3306, "root", "", "nft_db");
?>
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="index.php" class="logo">
                        <img src="assets/images/logo.png" alt="">
                    </a>
                        <ul class="nav" id="main-menu container">
                            <?php
                            $menu = $db->getMenuItems();
                            foreach ($menu as $menuName => $menuUrl) {
                                echo '<li><a href="'.$menuUrl.'">'.$menuName.'</a></li>';
                            }
                            ?>
                        </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>

        </div>
    </div>

</header>