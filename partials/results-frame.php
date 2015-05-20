<?php
include_once('connection.php');

function formatResult($value)
{
    $inside = " <a href='restaurant-details.php?id=$value[restaurant_id]'>
                    <img class='logo' src='logos/$value[logoPath]' alt='$value[Name] Logo' />
                </a>
                <div class='name hidden'>
                    $value[Name]
                </div>
                <div class='address'>
                    $value[address]
                </div>";
    if (isset($value['distance'])) {
        $dist = $value['distance'];
        $time = $value['duration'];
        $inside.= "<div>$dist, $time</div>";
    }
    echo("<div class='result'>$inside


            </div>");
}

$result;
if (isset($_GET['all']) && $_GET['all']) {
    $result = mysqli_query($conn, "SELECT * FROM restaurants
      INNER JOIN addresses on addresses.restaurant = restaurant_id
 	 ORDER BY Name DESC ");
} else {
    $price = $_GET['price'];
    $foodType = $_GET['food'];
    $venue = $_GET['venue'];
    $prev = false;

    $tempQuery = "SELECT DISTINCT * FROM restaurants ";
        if ($venue != "ANY") 
            $tempQuery .= " INNER JOIN venue_link on venue_link.restaurant = restaurant_id";
        if ($foodType != "ANY")
            $tempQuery .= " INNER JOIN food_link on food_link.restaurant = restaurant_id";
        
        $tempQuery .= " INNER JOIN addresses on addresses.restaurant = restaurant_id
        INNER JOIN prices on price_id = Price";

    if($price != "ANY")
    {
        $tempQuery .= " WHERE Price <= $price";
        $prev = true;
    }
    
    if($foodType != "ANY")
    {
        if($prev)
        {
            $tempQuery .= " AND food_type = $foodType";
        }
        else
        {
            $tempQuery .= " WHERE food_type = $foodType";
            $prev = true;
        }
    }

    if($venue != "ANY")
    {
        if($prev)
        {
            $tempQuery .= " AND venue_type = $venue";
        }
        else
        {
            $tempQuery .= " WHERE venue_type = $venue";
            $prev = true;
        }
    }

    $tempQuery .= " ORDER BY Price DESC";
   // echo ($tempQuery);
    $result = mysqli_query($conn, $tempQuery);
}?>

<div id="restaurant-list">
    <?php

    function sorter($a, $b) {
        $aT = isset($a['distSort']);
        $bT = isset($b['distSort']);
        if (!$bT)
            $b['distSort'] = 0;
        if (!$aT && !$bT) {
            return 0;
        } else if (!$aT) {
            return 1;
        }
        else
            return $a['distSort'] - $b['distSort'];
    }

    $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo(mysqli_error($conn));
    if(count($ans) == 0)
    {
        echo("<p>No entries matched your search</p><br/>");
    }
    else {
        $destinations = [];
        if (isset($_SESSION['location'])) {
            foreach ($ans as $key => $value) {
                array_push($destinations, urlencode(str_replace(",", ".", $value['address'])));

            }
            $coords = $_SESSION['location']['coords'];
            $origins = "origins=" . $coords['latitude'] . "," . $coords['longitude'];
            $destinationStrings = "destinations=" . implode("|", $destinations);

            $url = "https://maps.googleapis.com/maps/api/distancematrix/json?" . $origins . "&" . $destinationStrings;

            $res = json_decode(file_get_contents($url), true);
            if ($res['status'] == "OK") {
                $rows = $res['rows'][0]['elements'];

                foreach ($rows as $key => $value) {
                    //echo(json_encode($value, JSON_PRETTY_PRINT));
                    if ($value['status'] == "OK") {
                        $ans[$key]['duration'] = $value['duration']['text'];
                        $ans[$key]['distance'] = $value['distance']['text'];
                        $ans[$key]['distSort'] = $value['distance']['value'];
                    }
                }
            }

            usort($ans, 'sorter');
        }

        foreach ($ans as $key => $value) {
            formatResult($value);
        }
    }
    ?>
</div>
<div id="restaurant-details">

</div>
<br>