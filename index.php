<?php
$PageTitle = "Bacon Finder" ;
include "partials/menu.php";
?>
	<body>
	
        <!--button type='button' id='back'>Back </button-->
		<div id="content">
			<?php include "partials/search-frame.php"; ?>
		</div>
        <div id="content2">
            Loading...
        </div>
	
<? include "partials/footer.php" ?>
<script>
$(function() {
    var $content2 = $("#content2");

    function showSearch(){
        $content2.slideUp();
        $content2.html("Loading");
        $("#content").slideDown();
    }

    $content2.hide();
    var button = "<button id='closeR'>Close Results</button>";
    $("#content2").on("click", "#closeR", showSearch);


    $("#search").submit(function(event) {
        event.stopPropagation();
          
        if($("#FoodType").val() == null || $("#Venue").val() == null || $("#Price").val() == null)
        {
            alert("Please fill in all the boxes.");
          
            if($("#FoodType").val() == null)
            {
                $("#FoodType").attr("class", "invalid");
            }
            else
            {
                $("#FoodType").attr("class", "");
            }

            if($("#Venue").val() == null)
            {
                $("#Venue").attr("class", "invalid");
            }
            else
            {
                $("#Venue").attr("class", "");
            }

            if($("#Price").val() == null)
            {
                $("#Price").attr("class", "invalid");
            }
            else
            {
                $("#Price").attr("class", "");
            }
        }
        else
        {
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
        }

        return false;
    });
});

</script>
