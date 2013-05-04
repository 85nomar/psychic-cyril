$(document).ready(function() {

    $('#fileupload').fileupload({
        url : "fileupload.php",
        dataType : 'json',
        process : [{
            action : 'load',
            fileTypes : /^image\/(gif|jpeg|png)$/,
            maxFileSize : 20000000 // 20MB
        }, {
            action : 'resize',
            maxWidth : 1920,
            maxHeight : 1200,
            minWidth : 800,
            minHeight : 600
        }, {
            action : 'save'
        }],
    });

    $("#fileupload").on("fileuploadadd", function(e, data) {
        // find node to attach uploaded element to
        var node = $(".productImage:not(.isUploading):not(.uploadCompleted):first"), progressOverlay = $(".uploadProgressOverlay:first");
        // create and save a reference to the node for later callbacks
        data.context = node;
        // copy uploadProgressOverlay html from first element if it doesn't exist yet
        if (node.find(".uploadProgressOverlay").length < 1) {
            progressOverlay.clone().prependTo(node);
        }
        // add css class that tells us later that this node is occupied
        node.addClass("isUploading");
        // disable possibility to add new images
        $(".addProductImagesOverlay").hide();
        // reset properties that have been modified
        node.find(".bar").css("width", 0 + "%").text("");
        // display progress overlay
        node.find(".uploadProgressOverlay").show();
    });

    $("#fileupload").on("fileuploadprogress", function(e, data) {
        var node = data.context.find(".bar"), progress = parseInt(data.loaded / data.total * 100, 10);
        // update progress bar
        node.animate({
            width : progress + "%"
        }, 1000, function() {
            // progress bar stays at 99% after image has been uploaded while it is beeing processed on server side
            // so we tell that to the user
            if (progress > 98) {
                node.text("processing...");
            }
        });
    });

    $("#fileupload").on("fileuploadprogressall", function(e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        // add image upload button to next remaining placeholder after all uploads have finished
        if (progress >= 100) {
            $(".addProductImagesOverlay").prependTo(".productImage:not(.uploadCompleted):not(.isUploading):first").show();
        }
    });

    $("#fileupload").on("fileuploadstop", function(e, data) {

    });

    $("#fileupload").on("fileuploaddone", function(e, data) {
        var node = data.context, removeOverlay = $(".removeImageOverlay:first"), file = data.result.files[0];
        // mark as complete
        node.removeClass("isUploading").addClass("uploadCompleted");
        // remove progress overlay
        node.find(".uploadProgressOverlay").hide();
        // attach uploaded image to placeholder
        node.find("img:not(.productImagePlaceholder)").attr("src", file.thumbnail_url);
        // copy the remove link from the first image and insert it for the new image
        if (node.find(".removeImageOverlay").length < 1) {
            removeOverlay.clone(true).prependTo(node);
        }
    });

    // add event listener to display delete link on an image when hovering
    $(".productImages").delegate(".uploadCompleted", {
        "mouseenter" : function(e) {
            $(this).find(".removeImageOverlay").show();
        },
        "mouseleave" : function(e) {
            $(this).find(".removeImageOverlay").hide();
        }
    });

    // click handler to remove an image from the collection
    // what actually will happen on delete is that we remove the element
    // from the current position in the DOM, move it to the end, cleanup it's content
    // and send an ajax request to the server to delete the corresponding images
    $(".productImages").delegate(".removeImageOverlay a", "click", function(e) {
        e.preventDefault();
        // get productImageNode from DOM
        var node = $(this).closest(".productImage");
        // ajax request to fileserver

        // check if user wants to delete main image. this needs to be treated seperately
        if (node.hasClass("mainProductImage") && $(".uploadCompleted,.isUploading").length > 0) {
            // move this node to the end of normal ones
            node.removeClass("mainProductImage").appendTo(".files");
            // but take one from .files
            $(".uploadCompleted:first,.isUploading:first").prependTo(".productImages > div:first").addClass("mainProductImage");
        } else {
            node.appendTo(".files");
        }
        node.find("img:not(.productImagePlaceholder)").attr("src", "img/img_placeholder_90.jpg");
        node.find(".removeImageOverlay").hide();
        node.removeClass("uploadCompleted");
        // move add images overlay to the first element that hasn't an image yet
        $(".addProductImagesOverlay").appendTo(".productImage:not(.isUploading):not(.uploadCompleted):first");
    });

    var now = new Date();
    $('#dateStartTimePicker').datetimepicker({
        language : 'de',
        pickSeconds : false,
        startDate : now,
        endDate : new Date(now.getTime() + 2592000000) , // max. 3 months in advance of 10 days
    });

    $('#dateEndTimePicker').datetimepicker({
        language : 'de',
        pickSeconds : false,
        startDate : new Date(now.getTime() + 86400000), // set +1 day as default end date. Changes dynamically according to StartTimePicker
        endDate : new Date(now.getTime() + 864000000), // max. 10 days duration. changes dynamically
    });

    $(".noUiSlider").noUiSlider({
        range : [0, 14400],
        start : 14400,
        handles : 1,
        connect : "lower",
        orientation : "horizontal",
        serialization : {
            to : $("#endTime"),
            resolution : 1
        },
        step : 30,
        slide : function(e) {
            // var d, h, m;
            // d = Math.floor(e.val / 60 / 24);
            // h = Math.floor(e.val / 60 % 24);
            // m = e.val % 60;
            var future = new Date(now.getTime() + (e.val * 60 * 1000));
            var y, m, d, h, i;
            y = future.getFullYear();
            m = future.getMonth();
            d = future.getDate();
            h = future.getHours();
            i = future.getMinutes();

            $("#endTime").val(d + "." + m + "." + y + " " + h + ":" + i);
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
        $(".shipping-element:first").clone(true).insertAfter(".shipping-element:last");
    });

    $(".inputShippingMethod > option").on("click", function(e) {
        var $this = $(this), v;
        if (!( v = $this.attr("data-value")))
            v = "0.00";
        $this.parents(".shipping-element").find(".inputShippingCosts").val(v);
    });

    $("#listingType .toggle").on("click", function(e) {
        var $this = $(this), target = $this.attr('data-target');

        if ($(target).hasClass('in'))
            return;
        $(".in").removeClass('in');
        $(target).addClass('in');
    });
});
