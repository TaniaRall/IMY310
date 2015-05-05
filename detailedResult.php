<div id="information">
    <?php $apiKey = "AIzaSyDk9GnS9P2LscHZBJ5AdsgSB_mmQDfTEr8";
         $id = $_GET['Name'];

        $result = mysqli_query($conn, "SELECT * FROM restaurants
          INNER JOIN venue_link on venue_link.restaurant = restaurant_id
          INNER JOIN food_link on food_link.restaurant = restaurant_id
          INNER JOIN prices on price_id = Price
          INNER JOIN addresses on addresses.restaurant = restaurant_id
          WHERE restaurant_id = $id
          GROUP BY restaurant_id");

        $ans = mysqli_fetch_assoc($result);
        $src = "https://www.google.com/maps/embed/v1/place?key=".$apiKey."&q=".urlencode($ans["Name"].",".$ans['address']);
    ?>

	<div id="googleMap">
        <?php echo("<iframe src='$src'></iframe>"); ?>
	</div>


    <?php
        $value = $ans;

	 	echo("<img class='logo' width='150' height='150' src='logos/".$value['logoPath']."'' alt='Restaurant Logo' />") ?>
		<span class="rest-name">Name: <?php echo($value['Name']); ?></span><br>
		 <span class="dresscode">Dresscode: <?php echo($value['Dresscode']); ?></span><br>
		<?php if(!empty($value['Website'])) echo("<a href='".$value['Website']."'>".$value['Website'] ."</a><br>"); ?>
		<?php if(!empty($value['Facebook'])) echo("<a href='".$value['Facebook']."'>".$value['Facebook']."</a><br>"); ?>
		<?php if(!empty($value['Twitter'])) echo("<a href='".$value['Twitter']."'>".$value['Twitter']."</a><br>"); ?>
		<?php if(!empty($value['Youtube'])) echo("<a href='".$value['Youtube']."'>".$value['Youtube']."</a><br>"); ?>
		<span class="price">Price Range: <?php echo($value['price_category']) ?></span><br>
		<?php

		//TODO - Query for food type
		//TODO - Query for adresses
		//TODO - Query for venue - type

            ?>
		<span class="price">Food Category: <?php echo($value['food_category']) ?></span><br>

</div>
<input type='button' value='Back' id='backPrev'>
