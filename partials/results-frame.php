<script ></script>
<?php
include_once('connection.php');

function formatResult($value)
{
    echo("<div class='result'>
                <a href='restaurant-details.php?id=$value[restaurant_id]'>
                    <img class='logo' src='logos/$value[logoPath]' alt='$value[Name] Logo' />
                </a>
                <div class='name hidden'>
                    $value[Name]
                </div>
                <div class='address'>
                    $value[address]
                </div>
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

    $result = mysqli_query($conn, "SELECT * FROM restaurants
 	 INNER JOIN venue_link on venue_link.restaurant = restaurant_id
 	 INNER JOIN food_link on food_link.restaurant = restaurant_id
 	 INNER JOIN addresses on addresses.restaurant = restaurant_id
 	 INNER JOIN prices on price_id = Price
 	 WHERE Price <= $price AND venue_type = $venue AND food_type = $foodType
 	 ORDER BY Price DESC ");
}?>

<div id="restaurant-list">
    <?php
    $ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo(mysqli_error($conn));
    if(count($ans) == 0)
    {
        echo("<p>No entries matched your search</p><br/>");
    }
    foreach ($ans as $key => $value) {
        formatResult($value);
    }
    ?>
</div>
<div id="restaurant-details">

</div>
<br>
<input type='button' value='Back' id='back'/>

<!--script type="application/javascript">
    $(function() {
        if (!navigator.geolocation) {
            $("#locSort").remove();
        } else {
            $("#locSort").click(getLocation);
        }

        function getLocation() {
            if (!navigator.geolocation) {
                alert("Geolocation is not supported by this browser.");
            } else {
                console.log("here...");
                navigator.geolocation.getCurrentPosition(usePosition);
            }
        }

        function usePosition(position) {
            var origin = position.coords.latitude +','
                + position.coords.longitude;

            var list = $("#restaurant-list").children().toArray();
            var destinations = [];
            for (var i=0; i<list.length; ++i) {
                var dom = list[i];
                var address =  $(dom).children(".address").text().trim().replace(/\s/g, ' ');
                address = encodeURIComponent(address);
                destinations.push(address);
            }

            var dataString = "origins=" + origin  + "&destinations=" + destinations.join('|') + "&callback=receive";
            var url = "http://maps.googleapis.com/maps/api/distancematrix/json?" + dataString;

        }
    });
</script-->