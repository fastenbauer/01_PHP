var tablecount = 0;

$(document).ready(function () {
    $("#btn-add-data").click(function () {
        $(".content-loader").fadeOut('fast', function() {
            $(".content-loader").load("newData.php", function() {
                $(".content-loader").fadeIn('fast');
            });
            $("#btn-view-data").show();
            $("#btn-add-data").hide();
        });
    });

    $("#btn-view-data").click(function () {
        $(".content-loader").fadeOut('fast', function() {
            $(".content-loader").load("viewData.php", function() {
                $(".content-loader").fadeIn('fast');
            });
            $("#btn-view-data").hide();
            $("#btn-add-data").show();
        });
    });

    $(".category-items").click(function () {
        alert("haut hin!");
    });
});