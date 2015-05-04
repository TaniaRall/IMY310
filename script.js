$(document).ready(function(){
	//$("form :submit").click(function(){$("#content").load("resultsIframe.php"); return false;})

	$(document).on("click", "div.result", function(){$("#content").load("detailedResult.php");})
});