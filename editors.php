<?php include 'inc/head.php' ?>
<style>
	.de, .fr {
		float:left;
	}
	.de .mce-menubar{
		display: none;
	}

	.de #arrow, .fr #arrow{
	position: absolute;
	top: -4px;
	right: 2px;
	}

	#DualEditorFR .mce-tinymce .mce-container-body:first-child .mce-container .mce-container-body .mce-toolbar, #DualEditorDE .mce-tinymce .mce-container-body:first-child .mce-container .mce-container-body .mce-toolbar{
		overflow:hidden;
		height: 34px;
	}

	#singleEditor{
	}

	.sn #arrow{
		position: absolute;
	right: 0;
	top: 0;
	}


</style>


<div id="DualEditorDE" class="span5 de">
      <textarea class="tinyman" rows="4" placeholder="Beschreiben Sie ihr Produkt hier"></textarea>
</div>

<div id="DualEditorFR" class="span5 fr">
   	<textarea class="tinyman" rows="4" placeholder="Beschreiben Sie ihr Produkt hier"></textarea>
</div>

</body>
</html>
<script>
$(window).load(function(){

var de = '.de';
var fr = '.fr';
var arrowContainer = $('#DualEditorDE .mce-tinymce .mce-container-body .mce-container:eq(1)');
var heightAnimation = $('#DualEditorDE .mce-tinymce .mce-container-body .mce-container:eq(1) .mce-container-body .mce-toolbar');
var arrowContainerfr = $('#DualEditorFR .mce-tinymce .mce-container-body .mce-container:eq(1)');
var heightAnimationfr = $('#DualEditorFR .mce-tinymce .mce-container-body .mce-container:eq(1) .mce-container-body .mce-toolbar');


var buttonHTML = '<div id="ivan" class="mce-widget mce-btn mce-menubtn mce-last mce-flow-layout-item" tabindex="-1" role="button" aria-haspopup="true"><button id="ivan-open" role="presentation" tabindex="-1">Verkaufsvorlage <i class="mce-caret"></i></button></div>';
var subMenu = '<div id="vv_submenu" class="mce-container mce-panel mce-floatpanel mce-menu mce-menu-align" hidefocus="1" tabindex="-1" style="border-width: 1px;z-index: 65536;left: 1160px;top: 701px;width: 160px;" role="menu"><div id="mce_39-body" class="mce-container-body mce-stack-layout" style="width: 160px;"><div id="mce_40" class="vv_sub1 mce-menu-item mce-menu-item-expand mce-first mce-stack-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true" aria-expanded="false"> <span id="mce_40-text" class="mce-text noTemplate">keine Vorlage</span></div><div id="mce_41" class="vv_sub2 mce-menu-item mce-menu-item-expand mce-stack-layout-item" tabindex="-1" role="menuitem" aria-haspopup="true" aria-expanded="false"> <span id="mce_41-text" class="mce-text applyTemplate">Verkaufsvorlage 1</span></div></div></div>'
var htmlCodeVV = '<div id="vv_container"><div id="vv_header"></div><div id="vv_content"><h1>Produktename</h1>sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.<h2>Detail 1</h2> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut. <h2>Detail 2</h2>sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut. </div><div id="vv_footer"><br /><br />consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut.</div></div>';
var iframeBody = $(de +' iframe').contents().find('body');
    
// arrow functionality DE form
arrowContainer.append('<div id="arrow" class="mce-btn arrow-down"></div>');
$(de + ' #arrow').on('click', function(){
	if ($(this).hasClass('arrow-down')){
		$(heightAnimation).animate({'height':'105px'});
		$(this).removeClass('arrow-down').addClass('arrow-up');
	}else{
		$(heightAnimation).animate({'height':'34px'});
		$(this).removeClass('arrow-up').addClass('arrow-down');
	}
})

arrowContainerfr.append('<div id="arrow" class="mce-btn arrow-down"></div>');
$(fr + ' #arrow').on('click', function(){
	if ($(this).hasClass('arrow-down')){
		$(heightAnimationfr).animate({'height':'105px'});
		$(this).removeClass('arrow-down').addClass('arrow-up');
	}else{
		$(heightAnimationfr).animate({'height':'34px'});
		$(this).removeClass('arrow-up').addClass('arrow-down');
	}
})


});
</script>