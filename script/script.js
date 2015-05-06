$(document).ready(function(){

	$("#back").click(function(){window.history.back();})
	$("#backPrev").click(function(){window.history.back();})

	$(document).on("click", "div.result", function(){$("form", this).submit();});

    $("#restaurant-list").on("click", ".result ", function(event) {
        event.stopPropagation();
        var a = $(event.currentTarget).children("a").eq(0).attr("href");
        var id = a.substring(a.indexOf('?'));
        $.get("partials/details-frame.php" + id, function(data) {
            $("#restaurant-details").html(data);
        });
        return false;
    })
});