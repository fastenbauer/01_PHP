
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
        viewDataTable();
    });

    $('.datepicker-me').datepicker( {
        format: 'dd-mm-yyyy',
    });
});

$(document).on('submit', '#addData', function () {
    $.POST("MRepository.php", $('#addData').serialize()).done(function (data) {
       var result = JSON.parse(data);

        if (result.success) {
            viewDataTable();
        }
        else
            alert("Ein Fehler ist aufgetreten: " + result.msg);
    });
    return false;
});

function viewDataTable() {
    $(".content-loader").fadeOut('fast', function() {
        $(".content-loader").load("viewData.php", function() {
            $(".content-loader").fadeIn('fast');
        });
        $("#btn-view-data").hide();
        $("#btn-add-data").show();
    });
}