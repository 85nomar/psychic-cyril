function setCookie(name, value, expires, path, domain, secure) {
    var today = new Date();
    today.setTime(today.getTime());
    if (expires) {
        expires = expires * 1000 * 60 * 60 * 24;
    }
    var expires_date = new Date(today.getTime() + (expires));

    document.cookie = name + "=" + escape(value) + ((expires ) ? ";expires=" + expires_date.toGMTString() : "" ) + ((path ) ? ";path=" + path : "" ) + ((domain ) ? ";domain=" + domain : "" ) + ((secure ) ? ";secure" : "" );
}

function getCookie(cookieName) {
    var i, x, y, ARRcookies = document.cookie.split(";");
    for ( i = 0; i < ARRcookies.length; i++) {
        x = ARRcookies[i].substr(0, ARRcookies[i].indexOf("="));
        y = ARRcookies[i].substr(ARRcookies[i].indexOf("=") + 1);
        x = x.replace(/^\s+|\s+$/g, "");
        if (x == cookieName) {
            return unescape(y);
        }
    }
}
		
function switchDoubleLang(){
		$('.secondLang').toggleClass('hidden');
		$('.defaultLang').toggleClass('span12').toggleClass('span6');
		$('.defaultLang #arrow').toggleClass('hidden');
		/*if(getCookie('putLang')!='double'){
			setCookie('putLang','double');
		}
		else {
			setCookie('putLang','');					
		}*/
}

function switchDoubleLang2(){
    if ($('#multieditors').length == 1){
        cookieVal = getCookie('putLang');
        console.log('this'+cookieVal);

        var cases = {   singleLang : function(param){
                            if (param === 'true'){$('.swissIcons input').prop("checked", false);}else{}
                            
                            $('.defaultLang, #DualEditorDE').addClass('span12').removeClass('span6');
                            $('.secondLang, #DualEditorFR').addClass('hidden');
                            setCookie('putLang', '');
                        },
                        doubleLang : function(param){
                            if (param === 'true'){$('.checkbox input').prop("checked", true);}else{}
                            
                            $('.defaultLang, #DualEditorDE').removeClass('span12').addClass('span6');
                            $('.secondLang, #DualEditorFR').removeClass('hidden');
                            setCookie('putLang', 'double');
                            // do not remove this!!!!
                            validationCases('.secondLang');
                        },
        }

        if (cookieVal === 'double'){
            cases.doubleLang('true');
        }else{
            cases.singleLang('true');
        }
        
        $('#swissIcons').on('click', function(){
            var checked = $('.swissIcons input').prop("checked");
            if (checked == true){
                cases.singleLang('true');
                setCookie('putLang', '');
            }else{
                cases.doubleLang('true');
                setCookie('putLang', 'double');
            }
        });

        $('.checkbox input').on('click', function(){
            var editorDeSize = $('#DualEditorDE');
            if (editorDeSize.is('.span12')){
                cases.doubleLang('false');
            }else{
                cases.singleLang('false');
            }
        });
    
    }
}


function countField(target){
	
	maxChar = $(target).attr('maxlength');
	
	$(target).after('<span class="badge helper">'+maxChar+'</span>');
	
	$(target).bind('keyup',function(){
		
		fieldHelper = $(this).parent().find('.helper');
		fieldLength = $(this).val().length;
		//console.log(fieldLength);
		fieldLengthValue = maxChar - fieldLength;
		//console.log(fieldLengthValue);
		
		switch (true) {
			case (fieldLengthValue<10):
				fieldHelper.removeClass('success').removeClass('warning').addClass('alert');
				break;
			case (fieldLengthValue<25):
				fieldHelper.removeClass('success').removeClass('alert').addClass('warning');
				break;
			default:
				fieldHelper.removeClass('warning').removeClass('alert').addClass('success');
				break;
		}
		fieldHelper.text(fieldLengthValue);
	});
	
}

/*if (getCookie('view') == 'cars') {
    document.writeln('<style>.core{display:none !important;}.accessory{display:none !important}.cars{display:block !important;}</style>');
} else if (getCookie('view') == 'accessory') {
    document.writeln('<style>.core{display:none !important;}.cars{display:none !important}.accessory{display:block !important;}</style>');
} else {
    setCookie('view', 'core');
    document.writeln('<style>.cars{display:none !important}.accessory{display:none !important}.core{display:block !important;}</style>');
}*/

$(document).ready(function() {
	
	countField('.charsCount');
	
	// init corret collapse classes
	
	$('.collapse').not('.in').parent().find('.accordion-heading a, .collapse-heading a').addClass('collapsed');

		if (getCookie('view') == 'cars') {
			 $('.cars').show();
		} else if (getCookie('view') == 'accessory') {
			 $('.accessory').show();
		} else {
			$('.core').show();
			setCookie('view', 'core');
		}

    $('.setCookie').mousedown(function() {
        setCookie('view', $(this).attr('data-view'));
    });
		
		// set reached step for diffrent functions
		
		if(getCookie('reachedStep')!= undefined){
			thisView = getCookie('view');
			thisStep = $('#formNav.'+thisView+' .active .num').text();
			reachedStep = getCookie('reachedStep');
			if(thisStep>reachedStep){
				setCookie('reachedStep',thisStep);
			}
						
			for (var i=0; i<reachedStep; i++){
				$('#formNav.'+thisView+' li:eq('+i+')').removeClass('todo').addClass('done');
			}
		
			//$('.done .num').html('<img src="img/haken.png" />');
			$('.done .num').html('<i class="icon-ok icon-green"></i>');
			$('.todo').click(function(event) {
        event.preventDefault();
      });
		}
		else {
				setCookie('reachedStep',1);
		}
		
		if(reachedStep >= 6){
			$('.form-actions a.toNext').addClass('btn-small');
			$('.form-actions a.toOverview').show();
		}
		
		$('.form-actions a:visible').css('display','inline-block');

    // disable/enable next-btn

    function enableNextButton() {
        $('.form-actions .cars.btn').addClass('btn-primary').removeClass('btn-disabled');
    }

    function disableNextButton() {
        $('.form-actions .cars.btn').removeClass('btn-primary').addClass('btn-disabled');
    }


    $('.form-actions .btn').click(function(event) {
        if ($(this).hasClass('btn-disabled') == false) {
					window.location = $(this).attr('href');
        } else {
            event.preventDefault();
            //console.log('click not allowed');
        }
    });

    // +++++++++++++++++++++++++ Step 1 +++++++++++++++++++++++++

    // init Cat-Selection
    $('.navCat:first ul').show();
    // show first nav

    $('.navCat a').click(function(event) {// add click-functions
        event.preventDefault();

        allCatNo = $(this).parents('controls').find('.navCat').size();
        // numbers of navs
        thisCatNo = parseInt($(this).parents('nav').attr('id').match(/[0-9.]+/g));
        // number of this nav

        $(this).parents('.navCat:eq(' + thisCatNo + ')').find('.active').removeClass('active');
        // remove active from next nav
        $(this).parents('nav').find('li').removeClass('active');
        // remove all actives in this category
        $(this).parent().addClass('active');
        // set this as active

        for (var i = thisCatNo + 1; i < allCatNo; i++) {// hide other navs and actives in other navs
            $(this).parents('.navCat:eq(' + i + ') ul').hide().find('.active').removeClass('active');
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

    function markCategoryTree() {
        $('.navCat .active').removeClass('active');
        $('.row-fluid:visible .navCat ul').each(function(index) {
            $(this).delay(400 * index - 1).fadeIn(300).addClass('catSuggest').find('.demo').addClass('active');
        });
    }

    // on btn click
    $('#categoryFinder .btn').click(markCategoryTree);
    // on keyboard enter
    $("#appendedInputButton").keypress(function(e) {
        if (e.which == 13) {
            e.preventDefault();
            markCategoryTree();
        }
    });

    // .cars Category-Selector

    $('#carsCatSelector a').click(function(event) {
        event.preventDefault()
        thisView = getCookie('view');
        targetView = $(this).attr('data-view');
        $(this).addClass("selected");

        if (thisView != targetView) {
            $('#carsCatSelector a').removeClass("selected");
            $(this).addClass("selected");
            setCookie('view', $(this).attr('data-view'));
            setCookie('catg', $(this).index());
            location.reload();
        } else {
            $('#carsCatSelector a').removeClass("selected");
            $(this).addClass("selected");
            target = '.catSelect.' + thisView;
            $(target).collapse('show');
        }
    });

    if (getCookie('catg') != undefined) {
        $('#carsCatSelector a:eq(' + getCookie('catg') + ')').addClass('selected');
    }

    if (getCookie('view') == 'cars' && getCookie('catg') != undefined) {
        $('#carTypeSelector').height('auto');
    }
		
		$('#carVerionSelector, #carAttributeSelector').collapse({toggle: false});

    function checkFieldCollapse(target, collapse) {
            fieldVal = $.trim(target.val());
            if (fieldVal != '' && fieldVal != '-' && fieldVal != 0) {
                $(collapse).collapse('show');
								$('html, body').animate({
										 scrollTop: $("#carSelector").offset().top
								 }, 500);
								console.log('"checkFieldCollapse":empty value');
            } else {
                $(collapse).collapse('hide');
								console.log('"checkFieldCollapse":value set');
            }			
			console.log('function "checkFieldCollapse" fired');
    }

    function checkFieldValue(target) {
        fieldVal = $.trim(target.val());
        if (fieldVal != '' && fieldVal != '-' && fieldVal != 0) {
          valCheck = true;
				} else {
          valCheck = false;
        }
        return valCheck;
			
			console.log('function "checkFieldValue" fired');
    }
		
		function copyField(target,source){
			sourceValue = $(source).val();
			if($(source).prop('tagName')=='SELECT'){				
				$(target).find('option[value="'+sourceValue+'"]').attr('selected', 'selected');
				console.log('function "copyField" set select-field')
			}
			else if ($(source).prop('tagName')=='INPUT'){
				$(target).val($(source).val());
				console.log('function "copyField" set input-field');
			}
			else {
				//console.log('unsuported type of form-element for function "copyField"');
			}
			
			//console.log('function "copyField" fired');
		}		
		
		function setField(target,value){
			if($(target).prop('tagName')=='SELECT'){
				$(target).find('option[value="'+value+'"]').attr('selected', 'selected');
			}
			else if ($(target).prop('tagName')=='INPUT'){
				$(target).val(value);
			}
			else {
				//console.log('unsuported type of form-element for function "copyField"');
			}
			
			//console.log('function "setField" fired');
		}
		
		lockReset = false;
		
    function resetCarSelector(thisSelector) {
			
			console.log('"resetCarSelector" fired');
					
			resetSelector  = thisSelector;
			activeSelector = $('.carSelector').not(thisSelector);
						
			if(activeSelector.hasClass('selected') == false && lockReset == false){	
						
				activeSelector.removeClass('blurSelector').addClass('selected');
				
				resetSelector.removeClass('selected').addClass('blurSelector');
				resetSelector.find('.control-group:gt(0) select').attr('disabled', 'disabled');
				resetSelector.find('option:selected').removeAttr('selected');
				resetSelector.find('input').val('');
				
				$('#carVerionSelector').collapse('hide');
				$('#carAttributeSelector').collapse('hide');
			
			}
			
    };

    // show .cars Car-Type-Selector

    $('#carTypeSelector a').click(function() {
        $('#carSelector').collapse('show');
    });

    // show .cars Car-Version-Selector

		$('#IDRegistrYear').change(function(){
			if($('#TxtCertification').val()==123456){				 
					$('#carSelector').find('.alert').removeClass('hidden');
					copyField('#FormRegistrMonth','#IDRegistrMonth');
					copyField('#FormRegistrYear','#IDRegistrYear');					
					$('#FormMake').removeAttr('disabled').focus();
				  resetCarSelector($('#selectCarByID'));
			}
			else{
				checkFieldCollapse($(this), '#carVerionSelector');
			}
		});
		
		$('#FormFuel').change(function(){		
    	checkFieldCollapse($(this), '#carAttributeSelector');
		});
		

    // enable/disable form-fields

    $('.carSelector select').not('#IDRegistrYear').change(function() {
				//console.log('call carReset by change select-fields');
        resetCarSelector($('.carSelector').not($(this).parents('.carSelector')));
    });

    $('.controls select:last-child, .controls input:last-child').each(function() {
        $(this).bind('change blur keyup mouseup', function() {
            if (checkFieldValue($(this)) == true) {
                if ($(this).parents('.control-group').next('.control-group').height() > 0) {
                    var myObj = $(this).parents('.control-group').next('.control-group');
                } else {
                    var myObj = $(this).parents('.control-group').next('.control-group').next();
                }
                myObj.find('select').removeAttr('disabled');
            } else {
                $(this).parents('.control-group').nextAll('.control-group').find('select').attr('disabled', 'disabled').find('option:selected').removeAttr('selected');
            }
        });
    });

    $('#TxtCertification').bind('change blur keyup mouseup', function() {
				//console.log('call carReset by change TxtCertification');
        resetCarSelector($('.carSelector').not($(this).parents('.carSelector')));
        if ($(this).val().length == 6) {
            $(this).parents('.control-group').next('.control-group').find('select').removeAttr('disabled');
        } else {
            $(this).parents('.control-group').nextAll('.control-group').find('select').attr('disabled', 'disabled').find('option:selected').removeAttr('selected');
        }
    });

    // show hide alternate Model
		
    $('#FormModel, #FormMake').bind('change', function(e) {
        fieldVal = $.trim($(this).val());
        if (fieldVal == 0) {
						 $(this).parents('.control-group').collapse('hide');
						 $(this).parents('.control-group').next().collapse('show');
        }
    });		
		
    $('#alternateMake, #alternateModel').bind('mouseup keyup', function(e) {
				if(checkFieldValue($(this))==true){
            $(this).parents('.control-group').next('.control-group').find('select').removeAttr('disabled');
        } else {
            $(this).parents('.control-group').nextAll('.control-group').find('select').attr('disabled', 'disabled').find('option:selected').removeAttr('selected');
        }
    });

    $('.carSelector .close').bind('click', function(event) {
			event.preventDefault();
		 $(this).parents('.control-group').collapse('hide').find('input').val('');
		 $(this).parents('.control-group').prev().collapse('show').find('option:selected').removeAttr('selected');
     $(this).parents('.control-group').nextAll('.control-group').find('select').attr('disabled', 'disabled').find('option:selected').removeAttr('selected');
    });

    // Car-Version-Select-Table

    $('#carVerionSelector table tr:visible:odd').addClass('oddRow');

    $('.versionBasic').click(function() {
        $('.versionBasic.selected').removeClass('selected');
        $(this).addClass('selected');
        $('.versionDetails').hide();
        $(this).next().show();

        enableNextButton();
    });
		
		function copyCar(){
			copyField('#FormRegistrMonth','#IDRegistrMonth');
			copyField('#FormRegistrYear','#IDRegistrYear');
			copyField('#altTxtCertification','#TxtCertification');
			
			setField('#FormMake',79);
			setField('#FormModel',1765);
			setField('#FormFuel',1);
			setField('#altBodyType',1);
			setField('#altDrive',1);
			setField('#altGearType',1);
			setField('#altGearNumber',5);
			setField('#altSeat',5);
			
			//console.log('function "copyCar" fired');
		}
		
		$('#alternateCar').click(function(event) {
			event.preventDefault();
			setCookie('alternateCar',true);
			copyCar();
			
			$('#selectCarByForm').find('select').removeAttr('disabled');
			//console.log('call carReset by alternat car button');
			resetCarSelector($('#selectCarByID'));
			
			$('#carVerionSelector').collapse('hide');
			$('#carAttributeSelector').collapse('show');
    });

    // Enable Next-Button by set HP for alternative Cars

    $('#altHP').bind('change blur keyup mouseup', function() {
        if (checkFieldValue($(this)) == true) {
            enableNextButton();
        } else {
            disableNextButton()
        }
    });

    // +++++++++++++++++++++++++ Step2 (C&B) +++++++++++++++++++++++++		
		
		function customCheckList(target){
			$(target).find('.optionList').addClass('editable');
			$(target).find('.optionList input:checked').parent().addClass('selected');
			$(target).find('.optionList label, .optionList i').each(function(){
				$(this).click(function(){
					$(this).parent().toggleClass('selected').find('input').attr('checked','checked');
				});
			});
		}		
		
		customCheckList('#additionalEquipement, #optionalEquipement');
		$('#standardEquipement .btn').click(function(event){
			event.preventDefault();
			customCheckList($(this).closest('.row-fluid'));
		});
		
    $('.collapse-control a').click(function(event){
			event.preventDefault();
			$(this).parent().find('a').toggleClass('hidden');
		});
		$('.collapse-control a.showall').click(function(){
			$(this).parents('.collapse-control').parent().find('.collapse').not('.in').collapse('show');
			//$(this).parents('.collapse-control').next().find('.collapse').not('.in').addClass('in');
		});
		$('.collapse-control a.hideall').click(function(){
			$(this).parents('.collapse-control').parent().find('.collapse').collapse('hide');
			//$(this).parents('.collapse-control').next().find('.collapse').removeClass('in');
		});
		
    // +++++++++++++++++++++++++ Step2 (Core) +++++++++++++++++++++++++

    // initialize upload img section
    ricardoImageUpload.init();

    // +++++++++++++++++++++++++ Step3 +++++++++++++++++++++++++
		
		if($('#listingPaymentConditions4Cars').size()==1 && getCookie('putLang')=='double' ){
			switchDoubleLang();
		}
		else

    //Payment-Conditions-Selection		
		
		$('.collapse:not(.in)').collapse('hide');
		
		$('#listingPaymentConditions').find('.selection-group input:checked').parent().addClass('selected').parents('selection-group').addClass('active');
		$('#listingPaymentConditions').find('.selection-group .btn').each(function(){
			$(this).click(function(){
				// unselect each other
				$('.selection-group').not($(this).parents('.selection-group')).removeClass('active').find('.btn').removeClass('selected').find('input').removeAttr('checked','');
				if($(this).hasClass('selected')==false){
					// select this
					$(this).addClass('selected').parents('.selection-group').addClass('active').find('input').attr('checked','checked');
				}
				else {
					// unselect this
					if($(this).addClass('selected').parents('.selection-group').find('.btn.selected').size()>1){
						$(this).removeClass('selected').find('input').attr('checked','');
					}
				}
			});
		});
			
		$('#listingPaymentConditions .btn').click(function(){
			console.log($('#listingPaymentConditions .likeDescription').find('.btn').hasClass('selected'))
			if($('#listingPaymentConditions .likeDescription').find('.btn').hasClass('selected') == true){
				$('#additional-payment-notes').collapse('show');
			}
			else{
				$('#additional-payment-notes.in').collapse('hide');
				$('#additional-payment-notes textarea').val('');
			}
		});
		
    $('#ricardopayInfo').click(function(event) {
        event.preventDefault();
        $('#modalRicardoPay').modal('show');
    });

    // Step3 - Date & Time functions
    (function($) {
        var now = new Date(), in10days = new Date(now.getTime() + 864000000), tenDays = 864000000, oneDay = 86400000;
        $('#dateStartTimePicker').datetimepicker({
            language : 'de',
            pickSeconds : false,
            startDate : now,
            endDate : new Date(now.getTime() + 2592000000) // max. 3 months in advance of 10 days
        });

        $('#dateEndTimePicker').datetimepicker({
            language : 'de',
            pickSeconds : false,
            startDate : new Date(now.getTime() + oneDay),
            endDate : in10days
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
            $(".noUiSlider").val(9);
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
            }
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
            var targetClass = selectOption.attr("data-target"), price = selectOption.attr("data-price"), data = (data !== undefined) ? data : {};
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
        if ( typeof (window.innerWidth) == 'number') {
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

    $('.modal').each(function() {

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

    $('#adWindow .option').bind('mouseenter', function() {
        showItem = $(this).index();
        $('#adWindow #optionCarousel').carousel(showItem).carousel('pause');
    }).bind('mouseleave', function() {
        showItem = $('#optionCarousel .item.selected').index();
        $('#adWindow #optionCarousel').carousel(showItem).carousel('pause');
    }).bind('mousedown', function() {
        showItem = $(this).index();
        $('#adWindow .option').removeClass('selected');
        $(this).addClass('selected');
        $('#adWindow #optionCarousel .item').removeClass('selected');
        $('#adWindow #optionCarousel .item').eq(showItem).addClass('selected');
    });

    $('#adHomepage .option').bind('mousedown', function() {
        $(this).toggleClass('selected');
    });

    // Step 5 - Login Modal
    (function($) {
        function showLogin(event) {
					if(getCookie('reachedStep')<6){
            event.preventDefault();
            $('#modalLogin').modal('show');
					}
        };

        $('.js-prelogin').click(showLogin);
        $(".stepN6").click(showLogin);
    })(window.jQuery);

    // Step 6 - Preview Modal

    $('#articlePreview img, #articlePreview a').click(function(event) {
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
            moveRight : '.move-right'
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
    function dragAndDrop(e) {
        // Some element definitions
        var elements = {
            cBody : 'body',
            containerClass : '.productImage',
            draggableImg : '.productImage img',
            droper : '.droper',
        }

        var functions = {
            // updates the URL-safer with the urls from image-uploader
            updatetUrlSaver : function() {
                var counter = $('.droper').length;
                console.log(counter);
                for ( sprint = 0; sprint < counter; sprint++) {
                    imgScr = $('.productImage:eq(' + sprint + ') img').attr('src');
                    $('#urlSaver').append('<img src="' + imgScr + '" />')
                }
            },
            // gets the URLs form URL-saver and transfers them to
            getFromUrlSaver : function() {
                var counter = $('#urlSaver img').length;
                console.log(counter);
                for ( sprint = 0; sprint < counter; sprint++) {
                    UrlSaverImgSrc = $('#urlSaver img:eq(' + sprint + ')').attr('src');
                    $('.productImage:eq(' + sprint + ') img').attr('src', UrlSaverImgSrc);
                }
            },
            //update
            uploadFieldFix : function() {
                $('.addProductImageLink img').attr('src', 'img/camera.png');
                console.log('url updated')

            },
        }

        // Drag Start
        var mypic = $(elements.containerClass);
        mypic.delegate('img:not(.placeholder)', 'dragstart', function(e) {
            // empty all images from URLSaver
            $('#urlSaver').html('');
            // Update the URLSaver
            functions.updatetUrlSaver();
            //set class ondrag
            $(this).parents('.productImage').addClass('ondragcontainer');
            //Array for Transfer to drop
            var transferData = [];
            //Offsets of Current image
            var curOffsets = $(this).offset();
            var curOffsetLeft = curOffsets.left;
            var curOffsetTop = curOffsets.top;
            var img = $(this).attr('src');
            // Push data to Array
            transferData.push(curOffsetLeft.toFixed(0), curOffsetTop.toFixed(0), img)
            //set Value to transfer to dropEvent
            e.originalEvent.dataTransfer.setData("Text", transferData);

            console.log(transferData[2]);
        });

        // Dragenter (Not relevant)
        var dragBox = $('body');
        dragBox.delegate('.droper', 'dragenter', function(e) {
            e.preventDefault();
            console.log('Dragenter checked');
        });

        // Dragover (Not relevant)
        dragBox.delegate('.droper', 'dragover', function(e) {
            e.preventDefault();
            console.log('Dragover checked');
        });

        // Drop
        dragBox.delegate('.droper', 'drop', function(e) {
            // rmove Class 'ondragcontainer'
            $('.ondragcontainer').removeClass('ondragcontainer');
            //preventDefault
            e.preventDefault();
            // Data from Dragstart (Image-SRC)
            var TransferData = e.originalEvent.dataTransfer.getData("Text");
            var recivedData = TransferData.split(',');
            var offsetsDragStart = [recivedData[0], recivedData[1]]
            // detect offset from image in DropZone
            var curOffsets = $(this).children('img').offset();
            var curOffsetLeft = curOffsets.left;
            var curOffsetTop = curOffsets.top;
            //Drop handling
            if (offsetsDragStart[0] < curOffsetLeft && offsetsDragStart[1] == curOffsetTop.toFixed(0) || offsetsDragStart[1] > curOffsetTop.toFixed(0)) {
                // Find url from the img in the dropZone
                var detectDropZone = $(this).find('img').attr('src');
                if (detectDropZone != recivedData[2]) {
                    // Find the img in UrlSaver
                    $('#urlSaver').find("img[src$='" + recivedData[2] + "']").remove();
                    // set the droped img after the dropZone
                    $('#urlSaver').find("img[src$='" + detectDropZone + "']").after('<img src="' + recivedData[2] + '" />');
                    functions.getFromUrlSaver();
                }
            } else if (offsetsDragStart[0] > curOffsetLeft && offsetsDragStart[1] == curOffsetTop.toFixed(0) || offsetsDragStart[1] < curOffsetTop.toFixed(0)) {
                // Find url from the img in the dropZone
                var detectDropZone = $(this).find('img').attr('src');
                if (detectDropZone != recivedData[2]) {
                    // Find the img in UrlSaver
                    $('#urlSaver').find("img[src$='" + recivedData[2] + "']").remove();
                    // set the droped img after the dropZone
                    $('#urlSaver').find("img[src$='" + detectDropZone + "']").before('<img src="' + recivedData[2] + '" />');
                    functions.getFromUrlSaver();
                }

            }
            functions.uploadFieldFix();
        });
    }

    function maxChars(e) {
        $('.charsCount').on('focus', function() {
            var maxChars = $(this).attr('maxlength');
            $(this).keyup(function() {
                var counter = $(this).val().length;
                var charsLeft = maxChars - counter;
                $(this).attr('maxlength', maxChars)
                $(this).next('div').children('span.charsLeft').html(charsLeft);
            });
        });
    }

    function setPaymentCookie() {
        //set cookie
        $('.option-group .btn').click(function() {
            var selectedOption = $(this).parents('.option-group.active').children('h4').text();
            if (selectedOption.indexOf('Abholung') > -1) {
                setCookie('optionGroup', 'Barzahlung');
            } else {
                setCookie('optionGroup', 'other');
            }
        });

        var cookieVal = getCookie('optionGroup');
        if (cookieVal == 'Barzahlung') {
            // Step 4
            // if cookie value is Barzahlung set the option Abholung dur Käufer as standard.
            $(".js-shipping-method option[value$='-1']").removeAttr('selected');
            $(".js-shipping-method option[value$='10']").attr('selected', true);
            $('.js-shipping-costs').removeClass('hide');
            $('.inputShippingCosts').val('0.00');
            // hide checkbox for free shipping
            $('.js-shipping-method').on('click', function() {
                if ($('.js-shipping-method option:selected').val().indexOf('10') > -1) {
                    $('.js-shipping-costs label').addClass('hide');
                } else {
                    $('.js-shipping-costs label').removeClass('hide');
                }
            });
            // hide checkbox for free shipping
            if ($('.js-shipping-method').length != 0 && $('.js-shipping-method option:selected').val().indexOf('10') > -1) {
                $('.js-shipping-costs .checkbox').addClass('hide');
                console.log('something2');
            } else {
                $('.js-shipping-costs .checkbox').removeClass('hide');
            }
            // Step 3
            $(".option-group:eq(1)").addClass('active');
            $(".option-group:eq(1) .btn").addClass('selected');
        }
    }

     function validationCases(lenguageClass){
                // Case 1
                // get every required inputfield with the class 
                // "input.required-de / input.required-fr"
                // and check if the value is empty
                $(lenguageClass+' input.required').on('focusout',function(){
                    // some required variables
                    var inputVal = $.trim($(this).val());
                    var input = $(this);
                    //console.log(inputVal);
                    if (inputVal == null || inputVal == undefined || inputVal == ''){
                    // set inputval to default in Case of whitespaces
                        input.val(inputVal);
                        input.removeClass('solved');
                        input.addClass('validationCase1');
                        input.click(function(){
                            input.addClass('solved');
                            input.removeClass('validationCase1')
                        });
                    }
                
                });
                // Case 2
                // get every required inputfield with the class 
                // "input.onlyNumber-de / input.onlyNumber-fr"
                // and check if the value is a number
                $(lenguageClass+' input.onlyNumber').on('focusout',function(){
                    // some required variables
                    var inputVal = $.trim($(this).val());
                    var input = $(this);
                    // console.log(inputVal)
                    if (isNaN(inputVal)){
                        input.val(''); input.attr('placeholder', 'Dieses Feld muss eine Zahl sein');
                        input.removeClass('solved');
                        input.addClass('validationCase1');

                        input.click(function(){
                            input.addClass('solved');
                            input.removeClass('validationCase1')
                        });
                    }
                
                });
                // Case 3
                // get every required inputfield with the class 
                // "input.onlyText-de / input.onlyText-fr"
                // and check if the value is empty
                $(lenguageClass+' input.onlyText').on('focusout',function(){
                    // some required variables
                    var inputVal = $.trim($(this).val());
                    var input = $(this);
                    // console.log(inputVal)
                    if (!isNaN(inputVal)){

                        input.val(''); input.attr('placeholder', 'Dieses Feld muss Text sein')
                        input.addClass('validationCase1');
                        input.click(function(){
                            input.removeClass('validationCase1')
                        });
                    }
                
                });

                // get every required selectfield and check if it's number
                $(lenguageClass+' select.required').on('focusout',function(){
                    // some required variables
                    var selectVal = $(this).find('option:selected').val();
                    var selectFirstVal = $(this).find('option:first').val();
                    var select = $(this);
                    console.log(selectVal);
                    console.log(selectFirstVal);
                    if (selectVal == selectFirstVal){
                    // set inputval to default in Case of whitespaces
                        select.removeClass('solved');
                        select.addClass('validationCase1');
                        select.click(function(){
                            select.removeClass('validationCase1')
                            select.addClass('solved');
                        });
                    }
                
                });

                        $('.required').on('focusout',function(){
                            var requiredSingleLangCount = $('.defaultLang .required').length;
                            var solvedSingleLangCount = $('.defaultLang .solved').length;
                            var requiredDoubleLangCount = $('.secondLang .required').length;
                            var solvedDoubleLangCount = $('.secondLang .solved').length;
                            var LangCookieVal = getCookie('putLang');

                            console.log('singleReq : '+requiredSingleLangCount+ ' +  singleReq :' +requiredDoubleLangCount+' = '+ (requiredSingleLangCount + requiredDoubleLangCount) );
                            console.log('singleSolved :'+solvedSingleLangCount+ ' +  doubleSolved :' +solvedDoubleLangCount+' = '+ (solvedSingleLangCount + solvedDoubleLangCount) );

                            if (LangCookieVal === 'double'){
                                    if ((requiredSingleLangCount + requiredDoubleLangCount) === (solvedSingleLangCount + solvedDoubleLangCount)){
                                        $('a.submit').removeAttr('disabled');
                                    }else{
                                        $('a.submit').attr('disabled','disabled');
                                    }
                            }else{
                                    if (requiredSingleLangCount === solvedSingleLangCount){
                                        $('a.submit').removeAttr('disabled');
                                    }else{
                                        $('a.submit').attr('disabled','disabled');
                                    }
                            }
                        });
                    
}
         

    function validation(){
    // primary classes in case of Single lenguage
    //"""""""""""""""""""""""""""""""""""""""""""
    // required => check if input field is empty
    // rquired onlyNumber => check if value of inputfield is a number
    // required onlyText => check if value of inputfield is a text
            

            $('.required').click(function(){
                    $(this).addClass('solved')
                });
            $('a.submit').attr('disabled', 'disabled')
        
            validationCases('.defaultLang');
            // cookie based fr inputs validation
            if(getCookie('putLang')==='double'){
                validationCases('.secondLang');
            }else{
                $('.secondLang input, .secondLang select').removeClass('validationCase1')}

        // check whole Site if there are validation cases
    }
$(window).load(function() {

    switchDoubleLang2();
    maxChars();
    dragAndDrop();
    setPaymentCookie();
    validation();

}); 