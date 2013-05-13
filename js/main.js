$(document).ready(function() {

    // current step?
    var currentStep = 

    // init Cat-Selection
    $('.navCat:first ul').show();
    // show first nav

    $('.navCat a').click(function(event) {// add click-functions
        event.preventDefault();

        allCatNo = $('.navCat').size();
        // numbers of navs
        thisCatNo = parseInt($(this).parents('nav').attr('id').match(/[0-9.]+/g));
        // number of this nav

        $('.navCat:eq(' + thisCatNo + ')').find('.active').removeClass('active');
        // remove active from next nav
        $(this).parents('nav').find('li').removeClass('active');
        // remove all actives in this category
        $(this).parent().addClass('active');
        // set this as active

        for (var i = thisCatNo + 1; i < allCatNo; i++) {// hide other navs and actives in other navs
            $('.navCat:eq(' + i + ') ul').hide().find('.active').removeClass('active');
        }
        $(this).parents('nav').next().find('ul').fadeIn();
        // show nex nav

    });

    $('.navCat:first a').click(function() {
        if ($(this).parent().hasClass('has5Lvl') == true) {
            $('.navCat').addClass('expandLvl');
        } else {
            $('.navCat').removeClass('expandLvl');
        }
    });

    $('#categoryFinder .btn').click(function() {
        $('.navCat ul').each(function(index) {
            $(this).delay(400 * index - 1).fadeIn(300).addClass('catSuggest').find('.demo').addClass('active');

        });
    });

    // initialize upload img section
    ricardoImageUpload.init();

    // Step3 - Date & Time functions
    (function($) {
        var now = new Date(), in10days = new Date(now.getTime() + 864000000), in20days = new Date(in10days.getTime() + 864000000), tenDays = 864000000, oneDay = 86400000;

        $('#dateStartTimePicker').datetimepicker({
            language : 'de',
            pickSeconds : false,
            startDate : now,
            endDate : new Date(now.getTime() + 2592000000) , // max. 3 months in advance of 10 days
        });

        $('#dateEndTimePicker').datetimepicker({
            language : 'de',
            pickSeconds : false,
            startDate : in10days, // set +10 days as default end date. Changes dynamically according to StartTimePicker
            endDate : in20days, // max. 10 days duration. changes dynamically
        });

        // update endDatePicker when startDatePicker changes
        var startDatePicker = $('#dateStartTimePicker').data('datetimepicker');
        var endDatePicker = $('#dateEndTimePicker').data('datetimepicker');

        // set start dates
        if (typeof(startDatePicker) == undefined || typeof(endDatePicker) == undefined) {
            startDatePicker.setLocalDate(new Date(now.getTime()));
            endDatePicker.setLocalDate(new Date(now.getTime() + tenDays));
        }

        $('#dateStartTimePicker').on("changeDate", function(e) {
            endDatePicker.setStartDate(new Date(e.date.getTime() + oneDay));
            endDatePicker.setEndDate(new Date(e.date.getTime() + tenDays));
            endDatePicker.setLocalDate(new Date(e.date.getTime() + tenDays));
            // update Slider
            $(".noUiSlider").noUiSlider("disabled", false);
            $(".noUiSlider").val(2);
        })

        $('#dateEndTimePicker').on("changeDate", function(e) {
            $(".noUiSlider").noUiSlider("disabled", true);
        })
        // Day-Slider
        // define possible duration in days as an array
        // maps to the range: and step: parameters above
        var mapDays = [1, 5, 10], labelCount = mapDays.length;

        $(".noUiSlider").noUiSlider({
            range : [0, 2],
            start : 2,
            handles : 1,
            connect : "lower",
            orientation : "horizontal",
            step : 1,
            slide : function(e) {
                var sliderVal = $(this).val(), daysInMs = mapDays[sliderVal] * 24 * 60 * 60 * 1000, startDate = startDatePicker.getDate();

                // update EndDatePicker with duration choosen via slider
                endDatePicker.setStartDate(new Date(startDate.getTime() + oneDay));
                endDatePicker.setEndDate(new Date(startDate.getTime() + tenDays));
                endDatePicker.setLocalDate(new Date(startDate.getTime() + daysInMs));
            },
        });
    })(window.jQuery);

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
		
	// Overall Calculate maximum Modal-Body-Height

	function getClientHeight() {
		var myHeight = 0;
		if (typeof (window.innerWidth) == 'number') {
			//Non-IE
			myHeight = window.innerHeight;
		} else if (document.documentElement && (document.documentElement.clientWidth || document.documentElement.clientHeight)) {
			//IE 6+ in ′standards compliant mode′
			myHeight = document.documentElement.clientHeight;
		} else if (document.body && (document.body.clientWidth || document.body.clientHeight)) {
			//IE 4 compatible
			myHeight = document.body.clientHeight;
		}
		return myHeight;
	}
		
	clientHeight = getClientHeight();
	modalMargin = clientHeight / 5;
	modelHeader = 49;
	modelFooter = 56;
	modalBodyNoFoot = clientHeight - modalMargin - modelHeader;
	modalBodyWithFoot = clientHeight - modalMargin - modelHeader - modelFooter;

	$('.modal').each(function () {

		if ($(this).find('.modal-footer').size() != 1) {
			// modals without a footer
			$(this).find('.modal-body').css('max-height', modalBodyNoFoot);
		} else {
			// modals with a footer
			$(this).find('.modal-body').css('max-height', modalBodyWithFoot);
		}

	});
		
	// Step 5 - Login Modal
		   
	$('#prelogin').click(function(event){
			event.preventDefault();
			$('#modalLogin').modal('show');				
	});
		
	// Step 6 - Login Modal
		
	$('#articlePreview img, #articlePreview a').click(function(event){
			event.preventDefault();
			$('#modalPreview').modal('show');				
	});

});
