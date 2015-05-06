<?php include('partials/head.php'); ?>
    <!-- Merging -->
<?php
if($_SESSION['admin'] == true)
{?>
    <div id="NavBack">
        <ul id="nav">
            <li>
                <img src="images/logoPlaceholder.jpg" alt="Our Logo" id="menuLogo">
            </li>
            <li>
                <a href="index.php">Home</a>
            </li>
            <li>
                <a href="results.php?all=all">Browse Restaurants</a>
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
}
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
                <a href="results.php?all=all">Browse Restaurants</a>
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
}
?>