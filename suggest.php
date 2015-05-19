<?php include('partials/head.php'); ?>
<?php include ("partials/menu.php"); ?>

<div id="suggest">
	<form method="POST" action="suggestRestaurant.php" enctype="multipart/form-data" id="sugForm"  onsubmit="return validate()">
		<h2>Suggest restuarant:</h2>
		<label for="restuarantName">Restaurant Name:</label><br>
		<input type="text" id="restuarantName" name="name" value="" placeholder="Bravo Pizzeria"/>
		<br>
		
		<label for="address">Restaurant Adress:</label><br>
		<input type="text" id="address" name="address" value="" placeholder="1212 South Street, Hatfield, Pretoria"/>
		<br>
		
		<label for="telephone">Restaurant Telephone:</label><br>
		<input type="text" id="telephone" name="tel" value=""/>
		<br>
		
		<label for="price">Restaurant Price Class:</label><br>
		<select id="price" name="price">
			<option value="invalid" selected="selected" disabled="disabled">Please choose one</option>
			<?php
				$result = mysqli_query($conn, "SELECT * FROM prices"); 
				$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
				foreach ($ans as $key => $value) {
					echo("<option value='".$ans[$key]['price_id']."'>".$ans[$key]['price_category']."</option>");
				}
			?>
		</select>
		<br>
		
		<label for"dres">Dress code:</label><br>
		<input type="text" id="dres" name="dres" value="" placeholder="Casual"/>
		<br>
		
		<label for"logo">Logo:</label><br>
		<input type="file" id="logo" name="logo"/>
		<br>

		<label for"you">Youtube:</label><br>
		<input type="text" id="you" name="you" value=""/>
		<br>

		<label for="web">Restaurant Website:</label><br>
		<input type="text" id="web" name="web" value=""/>
		<br>
		
		<label for="facebook">Restaurant Facebook:</label><br>
		<input type="text" id="facebook" name="fb" value=""/>
		<br>
		
		<label for="twitter">Restaurant Twitter:</label><br>
		<input type="text" id="twitter" name="twitter" value=""/>
		<br>
		
		<label for="restuarantFood">Restaurant Food Type:</label><br>
		<select id="restuarantFood" name="food">
			<option value="invalid" selected="selected" disabled="disabled">Please choose one</option>
			<?php
				$result = mysqli_query($conn, "SELECT * FROM food_categories"); 
				$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
				foreach ($ans as $key => $value) {
					echo("<option value='".$ans[$key]['food_id']."'>".$ans[$key]['food_category']."</option>");
				}
			?>
		</select>
		<br>
		<label for="venue">Venue:</label><br>
		<select name="venue" id="venue">
			<option value="invalid" selected="selected" disabled="disabled">Please choose one</option>
			<?php
				$result = mysqli_query($conn, "SELECT * FROM venue_categories"); 
				$ans = mysqli_fetch_all($result, MYSQLI_ASSOC);
		
				foreach ($ans as $key) {
					echo("<option value='".$key['venue_id']."'>".$key['venue_name']."</option>");
				}
			?>
		</select>
		<br>
		<input type="submit" value="Submit" id="submitSearch"/>
	</form>
</div>

<script>
	
function validate(){
        event.stopPropagation();

        if($("#restuarantName").val() == "" || $("#address").val() == "" || $("#price").val() == null || $("#dres").val() == "" || $("#restuarantFood").val() == null || $("#venue").val() == null)
        {
            alert("Please fill in all the boxes.");
          
            if($("#restuarantName").val() == "")
            {
                $("#restuarantName").attr("class", "invalid");
            }
            else
            {
                $("#restuarantName").attr("class", "");
            }

            if($("#address").val() == "")
            {
                $("#address").attr("class", "invalid");
            }
            else
            {
                $("#address").attr("class", "");
            }

            if($("#price").val() == null)
            {
                $("#price").attr("class", "invalid");
            }
            else
            {
                $("#price").attr("class", "");
            }

            if($("#dres").val() == "")
            {
                $("#dres").attr("class", "invalid");
            }
            else
            {
                $("#dres").attr("class", "");
            }

            if($("#restuarantFood").val() == null)
            {
                $("#restuarantFood").attr("class", "invalid");
            }
            else
            {
                $("#restuarantFood").attr("class", "");
            }

            if($("#venue").val() == null)
            {
                $("#venue").attr("class", "invalid");
            }
            else
            {
                $("#venue").attr("class", "");
            }
        }
        else
        {
            $("#sugForm").submit();
        }
        return false;
    };

</script>