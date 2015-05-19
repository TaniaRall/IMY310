<?php include('partials/head.php'); ?>
<?php include ("partials/menu.php"); ?>

<div id="feedback">
	<form method="post" action="saveFeedback.php" id="feedbackF" onsubmit="return validateMe()">
		<h2>Feedback:</h2>
		<label for="name">First name:</label><br>
		<input type="text" id="name" name="name" value="Anonymous"/>
		<br>
		
		<label for="feedback">Feedback</label> <br>
		<textarea id="feedbackText" placeholder="Write your feedback here" name="feedback"></textarea><br>
		<label for="mail">Contact me:</label>
		<input type="checkbox" name="mail" id="mail" checked="true"/>
		<br>
		<label for="email" class="mail">Email:</label>
		<input type="email" name="email" class="mail" id="email"/>
		<br>
		<input type="submit" value="Submit" id="submitSearch"/>
	</form>
</div>

<script>
	function validateMe()
	{
		event.stopPropagation();

        if($("#name").val() == "" || $("#feedbackText").val() == "" || ($("#mail").is(":checked") && $("#email").val() == ""))
        {
            alert("Please fill in all the boxes.");
          
            if($("#name").val() == "")
            {
                $("#name").attr("class", "invalid");
            }
            else
            {
                $("#name").attr("class", "");
            }

            if($("#feedbackText").val() == "")
            {
                $("#feedbackText").attr("class", "invalid");
            }
            else
            {
                $("#feedbackText").attr("class", "");
            }

            if($("#mail").is(":checked") && $("#email").val() == "")
            {
                $("#email").attr("class", "invalid");
            }
            else
            {
                $("#email").attr("class", "");
            }
        }
        else
        {
            $("#feedbackF").submit();
        }
        return false;
    };

</script>