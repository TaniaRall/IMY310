<?php include('partials/head.php'); ?>
<?php
if($_SESSION['admin'] == true)
{?>
    <div id="NavBack">
        <ul id="nav">
            <li>
                <img src="images/logoMenuOther.png" alt="Our Logo" id="menuLogo">
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
                <a href="../feedback.php">Contact Us</a>
                <ul>
                    <li>
                        <a href="../feedback.php">Feed Back</a>
                    </li>
                    <li>
                        <a href="../suggest.php">Suggest Restaurant</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="admin.php">Admin</a>
            </li>
            <li>
                <a href="logout.php">Logout</a>
            </li>
			<li id="help">
                <a >?</a>
				<ul>
					<li>
						<h2>Bacon Finder</h2>
						<p>
							We created Bacon Finder to help people, who don't yet know Hafield and its surrounding areas, 
							find a nice place to eat in and around Hatfield.
						</p>
						<br/>
						<h3>
							How to use Bacon Finder
						</h3>
						<p>
							To use Bacon Finder simply fill in your search criteria in the provided fields on the right and click submit.
							Your results will be shown to you in a scrollable box. Clicking on one of the results will open a more detailed view of the result.
							At any stage you can go back by simply clicking on the back button at the bottom of your screen. 
						</p>
					</li>
				</ul>
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
                <img src="images/logoMenuOther.png" alt="Our Logo" id="menuLogo">
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
                <a href="feedback.php">Contact Us</a>
                <ul>
                    <li>
                        <a href="feedback.php">Feed Back</a>
                    </li>
                    <li>
                        <a href="suggest.php">Suggest Restaurant</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="login.php">Admin Login</a>
            </li>
			<li id="help">
                <a >?</a>
				<ul>
					<li>
						<h2>Bacon Finder</h2>
						<p>
							We created Bacon Finder to help people, who don't yet know Hafield and its surrounding areas, 
							find a nice place to eat in and around Hatfield.
						</p>
						<br/>
						<h3>
							How to use Bacon Finder
						</h3>
						<p>
							To use Bacon Finder simply fill in your search criteria in the provided fields on the right and click submit.
							Your results will be shown to you in a scrollable box. Clicking on one of the results will open a more detailed view of the result.
							At any stage you can go back by simply clicking on the back button at the bottom of your screen. 
						</p>
					</li>
				</ul>
            </li>
    </ul>
</div>
<?php 
}
?>