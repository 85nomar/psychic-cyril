<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Kategorie für das einzustellende Produkt bestimmen</h2>

<div class="row-fluid">
    <form class="form-search span12">
        <fieldset id="categoryFinder" class="well">
            <div class="input-append">
                <input class="span12" id="appendedInputButton" type="text" placeholder="z.B i-Phone 3 GS">
                <button class="btn" type="button">
                    Kategorie vorschlagen lassen!
                </button>
            </div>
        </fieldset>
    </form>
</div>
<div class="row-fluid">
    <div class="controls controls-row span12 well">
        <!--<select size="26" multiple="multiple" class="span2">
            <option>Antiquitäten &amp; Kunst</option>
            <option>Audio, TV & Video</option>
            <option>Auto &amp; Motorrad</option>
            <option>Briefmarken</option>
            <option>Bücher &amp; Comics</option>
            <option>Büro & gewerbe</option>
            <option>Computer & Netzwerk</option>
            <option>Filme & DVD</option>
            <option>Foto & Optik</option>
            <option>Games & Spielkonsolen</option>
            <option>Handwerk & Garten</option>
            <option>Handy, Festnetz, Funk</option>
            <option>Haushalt & Wohnen</option>
            <option>Kind & Baby</option>
            <option>Kleidung & Accessoires</option>
            <option>Kosmetik & Pflege</option>
            <option>Modellbau & Hobby</option>
            <option>Münzen</option>
            <option>Musik & Instrumente</option>
            <option>Sammeln & Seltenes</option>
            <option>Spielzeug & Basteln</option>
            <option>Sport</option>
            <option>Tickets & Gutscheine</option>
            <option>Tierzubehör</option>
            <option>Uhren & Schmuck</option>
            <option>Wein & Genuss</option>
        </select>-->
				<style>
				</style>
				<script type="text/javascript">
					$(document).ready(function(e) {
					
					});				
				</script>
				<nav class="span2 navCat" id="navCatLvl1">
					<ul class="nav nav-list">
            <li><a href="#">Antiquitäten &amp; Kunst <i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Audio, TV & Video<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Auto &amp; Motorrad<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Briefmarken<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Bücher &amp; Comics<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Büro & gewerbe<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Computer & Netzwerk<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Filme & DVD<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Foto & Optik<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Games & Spielkonsolen<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Handwerk & Garten<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Handy, Festnetz, Funk<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Haushalt & Wohnen<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Kind & Baby<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Kleidung & Accessoires<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Kosmetik & Pflege<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Modellbau & Hobby<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Münzen<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Musik & Instrumente<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Sammeln & Seltenes<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Spielzeug & Basteln<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Sport<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Tickets & Gutscheine<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Tierzubehör<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Uhren & Schmuck<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Wein & Genuss<i class="icon-chevron-right"></i></a></li>
					</ul>				
        </nav>
				<nav class="span2 navCat" id="navCatLvl2">
					<ul class="nav nav-list">
            <li class="hasSub"><a href="#">Computer & Netzwerk<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Filme & DVD<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Foto & Optik<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Games & Spielkonsolen<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Handwerk & Garten<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Handy, Festnetz, Funk<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Haushalt & Wohnen<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Kind & Baby<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Kleidung & Accessoires<i class="icon-chevron-right"></i></a></li>
					</ul>				
        </nav>
				<nav class="span2 navCat" id="navCatLvl3">
					<ul class="nav nav-list">
            <li class="hasSub"><a href="#">Kosmetik & Pflege<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Modellbau & Hobby<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Münzen<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Spielzeug & Basteln<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Sport<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Tickets & Gutscheine<i class="icon-chevron-right"></i></a></li>
					</ul>				
        </nav>
				<nav class="span2 navCat" id="navCatLvl4">
					<ul class="nav nav-list">
            <li class="hasSub"><a href="#">Kosmetik & Pflege<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Modellbau & Hobby<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Tickets & Gutscheine<i class="icon-chevron-right"></i></a></li>
					</ul>				
        </nav>
				<nav class="span2 navCat" id="navCatLvl5">
					<ul class="nav nav-list">
            <li class="hasSub"><a href="#">Kosmetik & Pflege<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Modellbau & Hobby<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Münzen<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Musik & Instrumente<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Sammeln & Seltenes<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Spielzeug & Basteln<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Sport<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Tickets & Gutscheine<i class="icon-chevron-right"></i></a></li>
					</ul>				
        </nav>
				
        <!--<select size="26" multiple="multiple" class="span2">

        </select>
        <select size="26" multiple="multiple" class="span2">

        </select>
        <select size="26" multiple="multiple" class="span2">

        </select>
        <select size="26" multiple="multiple" class="span2">

        </select>-->
    </div>
</div>

<div class="form-actions">
    <a href="step2.php" class="btn btn-primary pull-right">Weiter um das Produkt zu beschreiben</a>
</div>

<?php $Layout -> end(); ?>