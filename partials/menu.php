<?php include_once "connection.php" ?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../style/style.css">
        <script src="../script/jquery-1.11.2.min.js"></script>
        <script src="../script/script.js" type="text/javascript"></script>
        <title><?php echo($PageTitle) ?></title>
    </head>
    <body>
    <div id="NavBack">
        <ul id="nav">
            <li>
                <img src="../images/logoPlaceholder.jpg" alt="Our Logo" id="menuLogo">
            </li>
            <li>
                <a href="../index.php">Home</a>
            </li>
            <li>
                <a href="../aboutUs.php">About Us</a>
            </li>
            <li>
                <ul>
                    <li>
                        <a href="../contactUs.php">Contact Us</a>
                    </li>
                    <li>
                        <a href="">Suggestion</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="../login.php">Login</a>
            </li>
        </ul>
    </div>

<?php
function formatResult($value) {
    echo("<div class='result'>
            <a href='../detailedResultChangePage.php?id=$value[restaurant_id]'>
                <img class='logo' src='logos/$value[logoPath]' alt='$value[Name] Logo' />
            </a>
            <div class='rest-name'>
                $value[Name]
            </div>
            <div class='address'>
                $value[address]
            </div>
        </div>");
    /* <div class="small-details"><span class='label'>Name</span>  echo($value['Name']); ?> <br>
         <span class='label'>Price-Range</span> echo($value['price_category']); </div>*/
}?>