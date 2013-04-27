$(document).ready(function() {
    $('#datetimepicker').datetimepicker({
        language : 'de',
        pickSeconds : false,
    });

    $(".noUiSlider").noUiSlider({
        range : [0, 14400],
        start : 10080,
        handles : 1,
        connect : "lower",
        orientation : "horizontal",
        serialization : {
            to : $("#duration"),
            resolution : 1
        },
        step : 30,
        slide : function(e) {
            var d, h, m;
            d = Math.floor(e.val / 60 / 24);
            h = Math.floor(e.val / 60 % 24);
            m = e.val % 60;
            $("#duration").val(d + "d " + h + "h " + m + "min");
        },
    });

    $("#inputStartPrice").on("focusout", function(event) {
        var a = [[10, 100, 1000, 10000], [0.05, 5.00, 10.00, 100.00]];
        var v = $(this).val();
        if (!isNaN(v)) {
            for (var i = 0; i < a[0].length; i++) {
                if (a[0][i] >= Number(v)) {
                    $("#inputIncrementPrice").val(a[1][i]);
                    break;
                }
            }
        }
    });

    $(".add-additional-shipping").on("click", function(event) {
        event.preventDefault();
        $(this).parents(".shipping-element").clone(true).insertAfter(".shipping-element:last");
    });

    $("#listingType .toggle").on("click", function(e) {
        var $this = $(this), target = $this.attr('data-target');

        if ($(target).hasClass('in'))
            return;
        $(".in").removeClass('in');
        $(target).addClass('in');
    });
});
