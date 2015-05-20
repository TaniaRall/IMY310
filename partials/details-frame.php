<?php include_once('connection.php'); ?>

<?php $apiKey = "AIzaSyDk9GnS9P2LscHZBJ5AdsgSB_mmQDfTEr8";
$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM restaurants
      INNER JOIN venue_link on venue_link.restaurant = restaurant_id
      INNER JOIN food_link on food_link.restaurant = restaurant_id
      INNER JOIN prices on price_id = Price
      INNER JOIN addresses on addresses.restaurant = restaurant_id
      WHERE restaurant_id = $id
      GROUP BY restaurant_id");

//echo(mysqli_error($conn));
$value = mysqli_fetch_assoc($result);
$src = "https://www.google.com/maps/embed/v1/place?key=".$apiKey."&q=".urlencode($value["Name"].",". $value['address']);

echo("<img class='detail-logo' src='logos/".$value['logoPath']."'' alt='Restaurant Logo' /><br>");
?>

<?php
echo("<iframe id='googleMap' src='$src'></iframe>");
?>

<div id="details">
    <div class="rest-name"><span class="label">Name</span> <?php echo($value['Name']); ?> </div>
    <div class="dresscode"><span class="label">Dress code</span> <?php echo($value['Dresscode']); ?></div>

    <?php if(!empty($value['telephone'])) {?>
        <div class="address"><span class="label">Phone</span>  <?php echo($value['telephone']); ?></div>
    <?php } ?>

    <div class="address"><span class="label">Address</span>  <?php echo($value['address']); ?></div>
    <div class="online">
        <?php if(!empty($value['Website'])) echo("<a href='".$value['Website']."'>".$value['Website'] ."</a><br>"); ?>
        <?php if(!empty($value['Facebook'])) echo("<a href='".$value['Facebook']."'>".$value['Facebook']."</a><br>"); ?>
        <?php if(!empty($value['Twitter'])) echo("<a href='".$value['Twitter']."'>".$value['Twitter']."</a><br>"); ?>
        <?php if(!empty($value['Youtube'])) echo("<a href='".$value['Youtube']."'>".$value['Youtube']."</a><br>"); ?>
    </div>
    <div class="price"><span class="label">Price Range</span> <?php echo($value['price_category']) ?></div>

    <div class="food-types">
        <span class="label">Food Categories</span>
        <?php
        $result = mysqli_query($conn, "SELECT DISTINCT food_category FROM food_categories
      INNER JOIN  food_link ON food_type = food_categories.food_id
      WHERE restaurant = $value[restaurant_id]");
        while($row = mysqli_fetch_assoc($result))
        {
            echo("<span class='food'> $row[food_category]</span>");
        }
        ?>
    </div>

    <div class="venue-types">
        <span class="label">Venue</span>
        <?php

        $result = mysqli_query($conn, "SELECT DISTINCT venue_name FROM venue_categories
      INNER JOIN  venue_link ON venue_type = venue_categories.venue_id
      WHERE restaurant = $value[restaurant_id]");
        while($row = mysqli_fetch_assoc($result))
        {
            echo("<span class='venue'> $row[venue_name]</span>");
        }
        ?>
    </div>
</div>

