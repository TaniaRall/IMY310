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
$restaurant = mysqli_fetch_assoc($result);
$src = "https://www.google.com/maps/embed/v1/place?key=".$apiKey."&q=".urlencode($restaurant["Name"].",". $restaurant['address']);

echo("<img class='detail-logo' src='logos/".$restaurant['logoPath']."'' alt='Restaurant Logo' /><br>");
?>

<?php
    echo("<iframe id='googleMap' src='$src'></iframe>");
    if (isset($_SESSION['location'])) {
        $coords = $_SESSION['location']['coords'];
        $origins = "origins=" . $coords['latitude'] . "," . $coords['longitude'];
        $destinationStrings = "destinations=" . urlencode($restaurant['address']);

        $url = "https://maps.googleapis.com/maps/api/distancematrix/json?" . $origins . "&" . $destinationStrings;

        $matrixRes = json_decode(file_get_contents($url), true);
        if ($matrixRes['status'] == "OK") {
            $dist = $matrixRes['rows'][0]['elements'][0];

            if ($dist['status'] == "OK") {
                $restaurant['duration'] = $dist['duration']['text'];
                $restaurant['distance'] = $dist['distance']['text'];
            }
        }
    }
?>

<div id="details">
    <p class="rest-name"><?php echo($restaurant['Name']); ?>
        <?php if (isset($restaurant['distance'])) {
            $dist = $restaurant['distance'];
            $time = $restaurant['duration'];
            echo(" ($dist, $time)");
        } ?>
    </p>
    <div class="dresscode"><span class="label">Dress code</span> <?php echo($restaurant['Dresscode']); ?></div>

    <?php if(!empty($restaurant['telephone'])) {?>
        <div class="address"><span class="label">Phone</span>  <?php echo($restaurant['telephone']); ?></div>
    <?php } ?>

    <div class="address"><span class="label">Address</span>  <?php echo($restaurant['address']); ?></div>
    <div class="online">
        <?php if(!empty($restaurant['Website'])) echo("<a href='".$restaurant['Website']."'>".$restaurant['Website'] ."</a><br>"); ?>
        <?php if(!empty($restaurant['Facebook'])) echo("<a href='".$restaurant['Facebook']."'>".$restaurant['Facebook']."</a><br>"); ?>
        <?php if(!empty($restaurant['Twitter'])) echo("<a href='".$restaurant['Twitter']."'>".$restaurant['Twitter']."</a><br>"); ?>
        <?php if(!empty($restaurant['Youtube'])) echo("<a href='".$restaurant['Youtube']."'>".$restaurant['Youtube']."</a><br>"); ?>
    </div>
    <div class="price"><span class="label">Price Range</span> <?php echo($restaurant['price_category']) ?></div>

    <div class="food-types">
        <span class="label">Food Categories</span>
        <?php
        $result = mysqli_query($conn, "SELECT DISTINCT food_category FROM food_categories
      INNER JOIN  food_link ON food_type = food_categories.food_id
      WHERE restaurant = $restaurant[restaurant_id]");
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
      WHERE restaurant = $restaurant[restaurant_id]");
        while($row = mysqli_fetch_assoc($result))
        {
            echo("<span class='venue'> $row[venue_name]</span>");
        }
        ?>
    </div>
</div>

