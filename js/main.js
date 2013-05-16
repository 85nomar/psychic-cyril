$(document).ready(function() {

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

    function markCategoryTree () {
        $(".navCat .active").removeClass("active");
        $('.navCat ul').each(function(index) {
            $(this).delay(400 * index - 1).fadeIn(300).addClass('catSuggest').find('.demo').addClass('active');
        });
    }

    // on btn click
    $('#categoryFinder .btn').click(markCategoryTree);
    // on keyboard enter
    $("#appendedInputButton").keypress(function(e) {
        if(e.which == 13) {
            markCategoryTree();
        }
    });

    // initialize upload img section
    ricardoImageUpload.init();

    // Step3 - Payment-Conditions-Selection
						
		$('#listingPaymentConditions button')
		.click(function(event){
			event.preventDefault();
		})
		.mousedown(function(event){
			$('.option-group').not($(this).parents('.option-group')).removeClass('selected').find('button').removeClass('active');
			$(this).toggleClass('active');
		})
		.mouseup(function(event){
			 if($(this).parent().find('.active').size() > 0){
				$(this).parents('.option-group').addClass('selected');
			 } else {
				$(this).parents('.option-group').removeClass('selected');
			 }
		});		
		
		$('.option-group:last button')
		.mousedown(function(event){
			$(this).parents('.option-group').find('button').removeClass('active');
			$(this).addClass('active');
		});
		
		$('#ricardopayInfo').click(function(event) {
			event.preventDefault();
      $('#modalRicardoPay').modal('show');
    });

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
        if (startDatePicker != null && endDatePicker != null) {
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
        $(".noUiSlider").noUiSlider({
            range : [0, 9],
            start : 9,
            handles : 1,
            connect : "lower",
            orientation : "horizontal",
            step : 1,
            slide : function(e) {
                var sliderVal = $(this).val(), daysInMs = (sliderVal + 1) * 24 * 60 * 60 * 1000, startDate = startDatePicker.getDate();

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

    /* Step 4 - Shipping */
    (function($) {
        // function to update costs input field
        function updatePrice(val, data) {
            // make sure costs input field is visible
            showCosts(data.costsInputDiv);
            // check wether costs field is disabled and reset "offer for free" option accordingly
            data.costsInputDiv.find(".js-input-shipping-costs").prop('disabled', false);
            // reset js-free-shipping checkbox
            data.costsInputDiv.closest(".js-shipping-costs").find(".js-shipping-free").attr('checked', false);
            // check whether value is actually a placeholder
            if (isNaN(val)) {
                data.costsInputDiv.find(".js-input-shipping-costs").attr("placeholder", val).val("");
            } else {
                // update with value
                data.costsInputDiv.find(".js-input-shipping-costs").val(val);
            }
        }

        // function to show costs input field
        function showCosts(element) {
            // check if costs input field visible
            if (element.hasClass("hide")) {
                element.removeClass("hide");
            }
        }

        // function to show additional dropdown for certain shipping methods
        function showAdditionalOption(targetClass, data) {
            var target = data.shippingElement.find("." + targetClass);
            target.removeClass("hide");
            // update costs with default selected value
            updatePrice(target.find(":selected").attr("data-price"), data);
            // register event listener on options
            target.find("option").on("click.additionalDropdown", null, target, function(e) {
                // add AdditionalDropdown element name to context
                // that way we know later whether an additionalDropdown was clicked
                data.context = e.data;
                processSelection($(this), data);
            });
        }

        // function to hide additional dropdowns if visible when not needed for a certain shipping method
        function hideAddon(selectOption, data) {
            var els = data.shippingElement.find(".js-shipping-addon");
            // hide
            els.addClass("hide");
            // remove event-listeners as no longer needed atm
            els.find("option").off("click.additionalDropdown");
        }

        // function to check and process a certain selected option
        function processSelection(selectOption, data) {
            var targetClass = selectOption.attr("data-target"), price = selectOption.attr("data-price"), 
            data = (data !== undefined) ? data : {};
            // save a reference to current js-shipping-element
            data.shippingElement = selectOption.closest(".js-shipping-element");

            // save a reference to the costs input field if not already existing
            data.costsInputDiv = data.shippingElement.find(".js-shipping-costs");

            if (targetClass !== undefined) {
                // always hide open addons first
                hideAddon(selectOption, data);
                showAdditionalOption(targetClass, data);
            } else if (price !== undefined) {
                // check if selection was made in AdditinalDropdown
                // --> only hide them if not
                if (data.context === undefined) {
                    hideAddon(selectOption, data);
                }
                updatePrice(price, data);
            }
        }

        // register event listeners
        $(".js-shipping-method > option").on("click", function(e) {
            processSelection($(this));
        });

        $(".js-add-additional-shipping").on("click", function(event) {
            event.preventDefault();
            var newest, clone, lastSel;
            // get newest element
            newest = $(".js-shipping-element").last();
            lastSel = newest.find(".js-shipping-method :selected");

            // abort if no value selected in previous
            // or if already choosen more than 5 options
            if (lastSel.val() == "-1" || $(".js-shipping-element").length >= 5) {
                console.log("max options reached");
                // TODO: set some error style to select box
                // return
                return;
            }
            // clone it
            clone = newest.clone(true);
            // reset state
            clone.find(".js-shipping-addon").addClass("hide");
            clone.find(".js-shipping-costs").addClass("hide");
            clone.find(".js-input-shipping-costs").prop('disabled', false);
            clone.find(".icon-info-sign").remove();
            // insert into DOM
            clone.insertAfter(newest).find(".js-delete-additional-shipping").removeClass("hide");

        });

        $(".js-delete-additional-shipping").on("click", function(event) {
            event.preventDefault();
            $(this).closest(".js-shipping-element").remove();
        });

        $(".js-shipping-free").change(function() {
            var $this = $(this), el = $this.closest(".js-shipping-costs").find(".js-input-shipping-costs"), restoredVal;
            if ($this.is(':checked')) {
                el.val("0.00").prop('disabled', true);
            } else {
                el.prop('disabled', false);
                // restore value from selected option
                restoredVal = $this.closest(".js-shipping-element").find(".js-shipping-addon:not(.hide) > :selected").attr("data-price");
                el.val(restoredVal);
            }
        });
    })(window.jQuery);

    /*$("#listingType .toggle").on("click", function(e) {
        var $this = $(this), target = $this.attr('data-target');

        if ($(target).hasClass('in'))
            return;
        $(".in").removeClass('in');
        $(target).addClass('in');
    });	*/	
		
		$('label[for="toggle-auction"]').click(function(e) {
			$('#auctionPricing').show();
			$('#fixedPricePricing').hide();
		});
		$('label[for="toggle-fixedPriceOffer"]').click(function(e) {
			$('#auctionPricing').hide();
			$('#fixedPricePricing').show();
		});
		$('*[data-toggle="tooltip"]').tooltip();
		
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
		
	// Step 5 - Selling Options
	
	
		isChecked = $('#adWindow input[name="adWindow"]:checked').parents('.option').index();
		$('#adWindow #optionCarousel').carousel(isChecked).carousel('pause');
		$('#adWindow #optionCarousel .item').eq(isChecked).addClass('selected');	
		$('#adWindow .option').eq(isChecked).addClass('selected');				
		
    $('#adWindow .option')
			.bind('mouseenter',function(){
				showItem = $(this).index();
				$('#adWindow #optionCarousel').carousel(showItem).carousel('pause');
			})
			.bind('mouseleave',function(){
				showItem = $('#optionCarousel .item.selected').index();
				$('#adWindow #optionCarousel').carousel(showItem).carousel('pause');
			})
			.bind('mousedown',function(){
				showItem = $(this).index();
				$('#adWindow .option').removeClass('selected');
				$(this).addClass('selected');
				$('#adWindow #optionCarousel .item').removeClass('selected');
				$('#adWindow #optionCarousel .item').eq(showItem).addClass('selected');				
			});
			
		$('#adHomepage .option')
			.bind('mousedown',function(){
				$(this).toggleClass('selected');				
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

    // function to move images in ImageUploader
    function imageMovers() {

        var assets = {
            home : '.productImages',
            prodImage : '.productImage',
            homeMain : '.span3',
            homeElse : '.span9',
            overlay : '.removeImageOverlay',
            btnGroup : '.image-movers',
            moveLeft : '.move-left',
            moveRight : '.move-right',
        };

        $(assets.overlay + ' .btn').on('click', function() {

            var that = $(this);

            var ObjID = {
                // rootBox => .span3 or .span9
                rootBox : that.parents(assets.prodImage).parents('div').attr('class'),
                // buttonDirection => right or left
                buttonDirection : that.attr('class').replace('btn move-', ''),
                // get class attribute to check if exists next element
                nextSiblingClass : that.parents(assets.prodImage).next(assets.prodImage).attr('class'),
                // get class attribute to check if exists previous element
                prevSiblingClass : that.parents(assets.prodImage).prev(assets.prodImage).attr('class'),

                camaraImagePath : 'img/img_placeholder_90.jpg'
            };
            // Case 1 => Main Image onclick "arrow right"
            if (ObjID.rootBox == assets.homeMain.replace('.', '')) {
                var MainPicSrc = that.parents(assets.prodImage).children('img').attr('src');
                var FirstPicSrc = $(assets.home + ' ' + assets.homeElse + ' ' + assets.prodImage + ':first').children('img').attr('src');
                if (FirstPicSrc != ObjID.camaraImagePath) {
                    that.parents(assets.prodImage).children('img').attr('src', FirstPicSrc);
                    $(assets.home + ' ' + assets.homeElse + ' ' + assets.prodImage + ':first').children('img').attr('src', MainPicSrc);
                } else {
                    alert('fügen sie bitte ein weiteres Bild hinzu');
                }
            }
            // Case 2 => First Image of the 9 others onclick "arrow left"
            else if (ObjID.rootBox == assets.homeElse.replace('.', '') && ObjID.buttonDirection == 'left' && ObjID.prevSiblingClass == undefined) {
                var MainPicSrc = $(assets.home + ' ' + assets.homeMain + ' ' + assets.prodImage).children('img').attr('src');
                var FirstPicSrc = $(assets.home + ' ' + assets.homeElse + ' ' + assets.prodImage + ':first').children('img').attr('src');
                $(assets.home + ' ' + assets.homeMain + ' ' + assets.prodImage).children('img').attr('src', FirstPicSrc);
                $(assets.home + ' ' + assets.homeElse + ' ' + assets.prodImage + ':first').children('img').attr('src', MainPicSrc);

            }
            // Case 3 => All other Images onclick "arrow left"
            else if (ObjID.rootBox == assets.homeElse.replace('.', '') && ObjID.buttonDirection == 'left' && ObjID.prevSiblingClass != undefined) {
                var Actual1Src = that.parents(assets.prodImage).children('img').attr('src');
                var LastSrc = that.parents(assets.prodImage).prev().find('img').attr('src');
                that.parents(assets.prodImage).find('img').attr('src', LastSrc);
                that.parents(assets.prodImage).prev().find('img').attr('src', Actual1Src);
            }
            // Case 4 => All other Images + first Image onclick "arrow right"
            else if (ObjID.rootBox == assets.homeElse.replace('.', '') && ObjID.buttonDirection == 'right' && ObjID.nextSiblingClass != undefined) {
                var Actual2Src = that.parents(assets.prodImage).children('img').attr('src');
                var NextSrc = that.parents(assets.prodImage).next().children('img').attr('src');
                if (NextSrc != ObjID.camaraImagePath) {
                    that.parents(assets.prodImage).find('img').attr('src', NextSrc);
                    that.parents(assets.prodImage).next().find('img').attr('src', Actual2Src);
                } else {
                    alert('fügen sie bitte ein weiteres Bild hinzu');
                }
            }

        });
    }

    imageMovers();

});
