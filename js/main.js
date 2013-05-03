$(document).ready(function() {
	/*jslint unparam: true */
	$(function() {'use strict';
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
	});

	$("#fileupload").on("fileuploadadd", function(e, data) {
		if (1 === data.files.length) {
			var firstIsUploading = (0 < $(".productImage:first.isUploading").length) ? true : false;
			if (firstIsUploading) {
				$(".uploadProgressOverlay:first")
				.clone()
				.prependTo(".productImage:not(:has(.uploadProgressOverlay)):first")
				.parent()
				.addClass("isUploading");
			} else {
				$(".productImage:first").addClass("isUploading");
			}
		}
	});

	$("#fileupload").on("fileuploadstart", function(e, data) {
		$(".addProductImagesOverlay").hide();
		$(".uploadProgressOverlay").show();
	});

	$("#fileupload").on("fileuploadprogress", function(e, data) {

	});

	$("#fileupload").on("fileuploadprogressall", function(e, data) {
		var progress = parseInt(data.loaded / data.total * 100, 10);
		// if (progress >= 100) {
			// $(".addProductImagesOverlay");
		// }
	});

	$("#fileupload").on("fileuploadstop", function(e, data) {

	});

	$("#fileupload").on("fileuploaddone", function(e, data) {
		$this = $(".isUploading:first");
		$this.removeClass("isUploading").addClass("uploaded");
		$this.find(".uploadProgressOverlay").hide();
		// the following this in each is actually wrong, needs to be refactored
		$.each(data.result.files, function(index, file) {
			$this.find("img").attr("src", file.thumbnail_url);
		});
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
