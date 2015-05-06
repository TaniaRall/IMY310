$(document).ready(function(){
	//$("form :submit").click(function(){$("#content").load("resultsIframe.php"); return false;})
	$("#back").click(function(){window.history.back();})//$("#content").load("searchIframe.php"); return false;})
	$("#backPrev").click(function(){window.history.back();})//$("#content").load("resultsIframe.php"); return false;})

	$(document).on("click", "div.result", function(){$("form", this).submit();});//$("#content").load("detailedResult.php");})
});