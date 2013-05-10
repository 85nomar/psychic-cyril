<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>In welcher Kategorie möchten Sie Ihr Produkt einstellen?</h2>

<div class="row-fluid">
    <form class="form-search span12">
        <fieldset id="categoryFinder" class="well">
            <div class="input-append">
                <input class="span12" id="appendedInputButton" autocomplete="off" type="text" placeholder="z.B iPhone Tisch Computer Lego" />
                <button class="btn" type="button">
                    Kategorie vorschlagen lassen!
                </button>
            </div>
        </fieldset>
    </form>
  <script type="text/javascript">
    $(document).ready(function(e) {
      $('#categoryFinder input').typeahead({
        minLength: 2,
        items: 8,
        source: ['iPhone','iPhone 3G','iPhone 3G S','iPhone 4','iPhone 4S','iPhone 5','iPhone Cover','iPhone Etui','iPhone Akku','iPhone Kabel','iPhone Headset']                    
      });
    });
  </script>
</div>

<div class="row-fluid">
    <div class="controls controls-row span12 well">
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
            <li class="hasSub catAlternativ demo"><a href="#">Handy, Festnetz, Funk<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Haushalt & Wohnen<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Kind & Baby<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub has5Lvl"><a href="#">Kleidung & Accessoires<i class="icon-chevron-right"></i></a></li>
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
            <li class="hasSub"><a href="#">Funktechnik<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub catAlternativ"><a href="#">Handyzubehör<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub catAlternativ"><a href="#">Handys mit SIM-Lock<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub catAlternativ demo"><a href="#">Handys ohne SIM-Lock<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">PrePaid-Karten<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Sonstige Handys &amp; Zubehör<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Telefone &amp; Telefaxe<i class="icon-chevron-right"></i></a></li>
          </ul>
        </nav>
        <nav class="span2 navCat" id="navCatLvl3">
          <ul class="nav nav-list">
            <li class="hasSub catAlternativ demo"><a href="#">Apple iPhone<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Blackberry<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">HTC<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">LG<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Motorola<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Nokia<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Nokia N-Gage<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Panasonic<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Palm Treo<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Qtek<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Samsung<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Sharp<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Siemens<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Sony Ericsson<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Sonstige Handys ohne SIM-Lock<i class="icon-chevron-right"></i></a></li>
          </ul>        
        </nav>
        <nav class="span2 navCat" id="navCatLvl4">
          <ul class="nav nav-list">
            <li class="catAlternativ"><a href="#">iPhone<i class="icon-chevron-right"></i></a></li>
            <li class="catAlternativ"><a href="#">iPhone 3G<i class="icon-chevron-right"></i></a></li>
            <li class="catAlternativ"><a href="#">iPhone 3G S<i class="icon-chevron-right"></i></a></li>
            <li class="catAlternativ"><a href="#">iPhone 4<i class="icon-chevron-right"></i></a></li>
            <li class="catAlternativ"><a href="#">iPhone 4S<i class="icon-chevron-right"></i></a></li>
            <li class="catAlternativ"><a href="#">iPhone 5<i class="icon-chevron-right"></i></a></li>
          </ul>        
        </nav>
        <nav class="span2 navCat" id="navCatLvl5">
          <ul class="nav nav-list">
          </ul>        
        </nav>
    </div>
</div>

<div class="form-actions">
    <a href="step2.php" class="btn btn-primary pull-right">Weiter</a>
</div>

<?php $Layout -> end(); ?>