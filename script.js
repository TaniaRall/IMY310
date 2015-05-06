$(document).ready(function(){
	//$("form :submit").click(function(){$("#content").load("resultsIframe.php"); return false;})
	$("#back").click(function(){window.history.back();})//$("#content").load("searchIframe.php"); return false;})
	$("#backPrev").click(function(){window.history.back();})//$("#content").load("resultsIframe.php"); return false;})

	$(document).on("click", "div.result", function(){$("form", this).submit();});//$("#content").load("detailedResult.php");})
	$(document).on("click", ".accept", function(){$(this).parents("form:first").attr("action", "addSuggestion.php");});//$("#content").load("detailedResult.php");})
	$(document).on("click", ".deny", function(){$(this).parents("form:first").attr("action", "denySuggestion.php");});//$("form", this).submit();});//$("#content").load("detailedResult.php");})

	$('#mail').click(function() {
		if(this.checked)
		{
			$(".mail").show();
		}
		else
		{
			$('.mail').hide();
		}
	});
});