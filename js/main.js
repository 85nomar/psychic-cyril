$(document).ready(function() {
	
		// init Cat-Selection
		$('.navCat:first ul').show();// show first nav
		
		$('.navCat a').bind('mousedown',function(){ // add click-functions
			
			allCatNo = $('.navCat').size(); // numbers of navs
			thisCatNo = parseInt($(this).parents('nav').attr('id').match(/[0-9.]+/g)); // number of this nav
			
			
			$('.navCat:eq('+thisCatNo+')').find('.active').removeClass('active');// remove active from next nav
			$(this).parents('nav').find('li').removeClass('active'); // remove all actives in this category				
			$(this).parent().addClass('active'); // set this as active
			
			for ( var i=thisCatNo+1 ; i<allCatNo ; i++ ){ // hide other navs and actives in other navs
				$('.navCat:eq('+i+') ul').hide().find('.active').removeClass('active');
			}							
			$(this).parents('nav').next().find('ul').show(); // show nex nav	
					
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
console.log(startDatePicker);
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

    // function to move images in ImageUploader
    function imageMovers(){

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

        $(assets.overlay+' .btn').on('click', function(){
        
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
        if (ObjID.rootBox == assets.homeMain.replace('.',''))
            {
                var MainPicSrc = that.parents(assets.prodImage).children('img').attr('src');
                var FirstPicSrc = $(assets.home+' '+assets.homeElse+' '+assets.prodImage+':first').children('img').attr('src');
                if (FirstPicSrc != ObjID.camaraImagePath){
                    that.parents(assets.prodImage).children('img').attr('src', FirstPicSrc);
                    $(assets.home+' '+assets.homeElse+' '+assets.prodImage+':first').children('img').attr('src', MainPicSrc);
                }else{
                    alert('fügen sie bitte ein weiteres Bild hinzu');
                }
            }
        // Case 2 => First Image of the 9 others onclick "arrow left"
        else if (ObjID.rootBox == assets.homeElse.replace('.','') && ObjID.buttonDirection == 'left' && ObjID.prevSiblingClass == undefined )
            {
                var MainPicSrc = $(assets.home+' '+assets.homeMain+' '+assets.prodImage).children('img').attr('src');
                var FirstPicSrc = $(assets.home+' '+assets.homeElse+' '+assets.prodImage+':first').children('img').attr('src');
                $(assets.home+' '+assets.homeMain+' '+assets.prodImage).children('img').attr('src', FirstPicSrc);
                $(assets.home+' '+assets.homeElse+' '+assets.prodImage+':first').children('img').attr('src', MainPicSrc);

            }
        // Case 3 => All other Images onclick "arrow left"
        else if (ObjID.rootBox == assets.homeElse.replace('.','') && ObjID.buttonDirection == 'left' && ObjID.prevSiblingClass != undefined)
            {
                var Actual1Src = that.parents(assets.prodImage).children('img').attr('src');
                var LastSrc = that.parents(assets.prodImage).prev().find('img').attr('src');
                that.parents(assets.prodImage).find('img').attr('src', LastSrc);
                that.parents(assets.prodImage).prev().find('img').attr('src', Actual1Src);
            }
        // Case 4 => All other Images + first Image onclick "arrow right"
        else if (ObjID.rootBox == assets.homeElse.replace('.','') && ObjID.buttonDirection == 'right' && ObjID.nextSiblingClass != undefined)
            {
                var Actual2Src = that.parents(assets.prodImage).children('img').attr('src');
                var NextSrc = that.parents(assets.prodImage).next().children('img').attr('src');
                if (NextSrc != ObjID.camaraImagePath){
                    that.parents(assets.prodImage).find('img').attr('src', NextSrc);
                    that.parents(assets.prodImage).next().find('img').attr('src', Actual2Src);
                }else{
                    alert('fügen sie bitte ein weiteres Bild hinzu');
                }
            }

         });     
    }
imageMovers();


});
