$(document).ready(function() {
    $('#datetimepicker').datetimepicker({
        language : 'de',
        pickSeconds : false,
    });

    $(".noUiSlider").noUiSlider({
        range : [0, 14400],
        start : 10080,
        handles: 1,
        connect: "lower",
        orientation: "horizontal",
        serialization: {
            to: $("#duration"),
            resolution: 1
        },
        step: 30,
        slide: function(e) {
            var d, h, m;
            d = Math.floor(e.val / 60 / 24);
            h = Math.floor(e.val / 60 % 24);
            m = e.val % 60;
            $("#duration").val(d + "d " + h + "h " + m + "min");
        },
    });
});
