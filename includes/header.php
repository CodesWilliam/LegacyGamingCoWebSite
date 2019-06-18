<?php include "config.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <!--<script src="https://use.fontawesome.com/c7ba93ac29.js"></script>-->
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="script.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="../css/nav.css" />
</head>
<header>
    <div class="crown">
        <a href="index.php" ><img src="../images/smallLogo.png" alt="Legacy Gaming Logo" /></a>
    </div>
    <div class="legacy">
        <a href="index.php"><img src="../images/banner.png" alt="Legacy Gaming Banner" /></a>
    </div>
    <nav id="cssmenu">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="storeinfo.php">Store Info</a>
                <ul>
                    <li><a href="#">Kids Zone</a></li>
                </ul>
            </li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    </nav>
</header>
<body>
        <!-- header ends here -->