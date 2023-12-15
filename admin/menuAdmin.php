<?php
session_start();
if(!isset($_SESSION['login'])) {
    header("Location: login.php");
}

include_once "../lib/DB.php";
use praca_Pavlisin\Lib\DB;

$db = new DB("localhost", 3306, "root", "", "nft_db");

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        .tm-top-header {
            background-color: #333;
            padding: 10px 0;
        }
        .tm-top-header-inner {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .tm-nav {
            flex-grow: 1;
        }
        .main-menu {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-between;
        }
        .main-menu li {
            margin: 0;
        }
        .main-menu a {
            display: block;
            padding: 10px 15px;
            color: #fff;
            text-decoration: none;
            transition: background-color 0.3s;
        }
        .main-menu a:hover {
            background-color: #555;
        }
    </style>
</head>
<body>

<div class="tm-top-header">
    <div class="container">
        <div class="row">
            <div class="tm-top-header-inner">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="tm-nav">
                    <ul class="main-menu" id="main-menu container">
                        <li><a href="menuAdmin.php">Main menu</a></li>
                        <li><a href="insertNft.php">Insert nft</a></li>
                        <li><a href="updateNft.php">Manage nft</a></li>
                        <li><a href="approveNft.php">Approve nft</a></li>
                        <li><a href="insertUser.php">Insert user</a></li>
                        <li><a href="updateUser.php">Manage user</a></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

</body>