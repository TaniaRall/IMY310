<?php
$PageTitle = "Bacon Finder" ;
include "partials/menu.php";
?>
	<body>
	<div id="overall">
        <button type='button' id='back'>Back </button>
		<div id="BaconFinder">
			<?php include "partials/bacon-finder.php"; ?>
		</div>
		<div id="content">
			<?php include "partials/search-frame.php"; ?>
		</div>
        <div id="content2">
            Loading...
        </div>
	</div>
<?php include "partials/footer.php" ?>
<script>
$(function() {
    var $content2 = $("#content2");

    function showSearch(){
        $content2.slideUp();
        $content2.html("Loading");
        $("#content").slideDown();
    }
    <!-- Merging -->
    $content2.hide();
    var button = "<button id='closeR'>Close Results</button>";
    $("#content2").on("click", "#closeR", showSearch);


    $("#search").submit(function(event) {
          event.stopPropagation();
          var data = {
              food : $("#FoodType").val(),
              venue : $("#Venue").val(),
              price : $("#Price").val()

          };
        $content2.load("partials/results-frame.php?" + $.param(data), function() {
            $content2.append(button);
            setResultClick();
        });
        $("#content").slideUp();
        $content2.slideDown();
        return false;
      });
  });

</script>
