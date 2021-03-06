function setResultClick() {

    $("#restaurant-list").on("click", ".result ", function(event) {
        event.stopPropagation();
        var a = $(event.currentTarget).children("a").eq(0).attr("href");
        var id = a.substring(a.indexOf('?'));
        var $restaurant = $("#restaurant-details");
        $restaurant.html("Loading...");
        $restaurant.load("partials/details-frame.php" + id ,function() {
            setResultClick();
        });
        return false;
    });
}
var refreshNow = false;

$(function(){

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
    if (!navigator.geolocation) {
         $('#locationUpdate').remove();
    } else {
        $('#locationUpdate').click(locationUpdate);
    }


});

function locationUpdate(event) {
    event.stopPropagation();
    refreshNow = true;

    getLocation();

    return false;
}

function getLocation() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(usePosition, showError);
    }
}

function usePosition(position) {
    var callback;
    if (refreshNow) {
        refreshNow = false;
        callback = function() {
            window.location.reload();
        }
    }
    $.get("partials/setLocation.php", {location:position}, callback);

}

function showError(error) {

    switch(error.code) {
        case error.PERMISSION_DENIED:
            console.log("User denied the request for Geolocation.");
            break;
        case error.POSITION_UNAVAILABLE:
            console.log("Location information is unavailable.");
            break;
        case error.TIMEOUT:
            console.log( "The request to get user location timed out.");
            break;
        case error.UNKNOWN_ERROR:
        default :
            console.log( "An unknown error occurred.");
            break;
    }
}