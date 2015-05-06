<?php include('head.php'); ?>
<?php
/*if($_SESSION['admin'] == true)
{*/?>
    <div id="NavBack">
        <ul id="nav">
            <li>
                <img src="images/logoPlaceholder.jpg" alt="Our Logo" id="menuLogo">
            </li>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="results.php?all=all.php">Browse Restaurants</a>
            </li>
            <li>
                <a href="about.php">About Us</a>
            </li>
            <li>
                <a href="">Contact Us</a>
                <ul>
                    <li>
                        <a href="suggest.php">Suggest Restaurant</a>
                    </li>
                    <li>
                        <a href="feedback.php">Feed Back</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin.php">Admin</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
        </ul>
    </div>
<?php
/*}
else
{ ?>
    <div id="NavBack">
    <ul id="nav">
         <li>
                <img src="images/logoPlaceholder.jpg" alt="Our Logo" id="menuLogo">
            </li>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="results.php?all=all.php">Browse Restaurants</a>
            </li>
            <li>
                <a href="about.php">About Us</a>
            </li>
            <li>
                <a href="">Contact Us</a>
                <ul>
                    <li>
                        <a href="suggest.php">Suggest Restaurant</a>
                    </li>
                    <li>
                        <a href="feedback.php">Feed Back</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="login.php">Admin Login</a>
            </li>
    </ul>
</div>
<?php 
}*/
?>

<?php

function formatResult($value) {
    echo("<div class='result'>
            <a href='restaurant-details.php?id=$value[restaurant_id]'>
                <img class='logo' src='logos/$value[logoPath]' alt='$value[Name] Logo' />
            </a>
            <div class='address'>
                $value[address]
            </div>
        </div>");
}?>