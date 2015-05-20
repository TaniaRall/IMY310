function setResultClick() {

    $("#restaurant-list").on("click", ".result ", function(event) {
        event.stopPropagation();
        var a = $(event.currentTarget).children("a").eq(0).attr("href");
        var id = a.substring(a.indexOf('?'));
        $("#restaurant-details").html("Loading...");
        $("#restaurant-details").load("partials/details-frame.php" + id ,function() {
            setResultClick();
        });
        return false;
    });
}

$(document).ready(function(){

	$("#back").click(function(){window.history.back();});

    $(document).on("click", "div.result", function () {$("form", this).submit(); });
    $(document).on("click", ".accept", function(){$(this).parents("form:first").attr("action", "addSuggestion.php");});//$("#content").load("detailedResult.php");})
    $(document).on("click", ".deny", function(){$(this).parents("form:first").attr("action", "denySuggestion.php");});//$("form", this).submit();});//$("#content").load("detailedResult.php");})

    $('#mail').click(function() {
        if(this.checked)
        {
            $(".mail").show();
            $("#email").show();
        }
        else
        {
            $('.mail').hide();
            $("#email").hide();
        }
    });

    setResultClick();

});