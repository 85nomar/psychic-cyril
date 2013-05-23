<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>In welcher Kategorie möchten Sie Ihr Produkt einstellen?</h2>

<div id="carsCatSelector" class="cars accessory row-fluid" style="text-align:center;">
  <script type="text/javascript">
			if(getCookie('view')=='cars'){
				document.writeln('<a href="#carTypeSelector" class="span2 btn toggle" data-toggle="collapse"><img src="img/car.png" width="89" height="72" />Autos</a>');
			}
			else {
				document.writeln('<a href="step1.php" class="span2 btn setCookie" data-view="cars"><img src="img/car.png" width="89" height="72" />Autos</a>');
			}
  </script>
	<!--<a href="step1.php" class="span2 btn setCookie" data-view="cars"><img src="img/car.png" width="89" height="72" />Autos</a>	-->
	<a href="step1.php" class="span2 btn setCookie" data-view="cars"><img src="img/bike.png" width="89" height="72" />Motoräder</a>
	<a href="step1.php" class="span2 btn setCookie" data-view="cars"><img src="img/utility.png" width="89" height="72" />Nutzfahrzeuge</a>
	<a href="step1.php" class="span2 btn setCookie" data-view="accessory"><img src="img/accessories.png" width="89" height="72" />Zubehör</a>
	<a href="step1.php" class="span2 btn setCookie" data-view="cars">Andere Fahrzeuge</a>
</div>
  <script type="text/javascript">
    $(document).ready(function(e) {
    });
  </script>
  <style>
		.hiddenRow {
			display:none;
			}
		.control-group {
			margin-bottom:0;
			}
		.btn-disabled {
			color:#CCC;
			border-color:#eee #ddd #ddd #eee;
			}
		#carsCatSelector{
			margin-bottom:15px;
			}
		#carsCatSelector a{
			display:inline-block;
			float:none;
			height:110px;
			padding-top:80px;
			position:relative;
			}
		#carsCatSelector img{ 
			left: 50%;
			margin-left: -44px;
			position: absolute;
			top: 5px;
			}
		#carSelector .well{
			min-height:350px;
			}
		.carIDHint {
			position:relative;
			height:110px;
			margin-top:15px;
		}
		.carIDHint div:last-child {
			position:absolute;
			bottom:0;
			right:0px;
			min-height:auto;
		}
  </style>

<div class="core accessory row-fluid">
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
			
			if(getCookie('view')=='accessory'){
				$('#categoryFinder input').typeahead({
					minLength: 2,
					items: 8,
					source: ['Navigationgerät','Navigon','Falk','Tom Tom','Navigation-Software','Garmin','Navigationskarten']                    
				});
			}
			else{
				$('#categoryFinder input').typeahead({
					minLength: 2,
					items: 8,
					source: ['iPhone','iPhone 3G','iPhone 3G S','iPhone 4','iPhone 4S','iPhone 5','iPhone Cover','iPhone Etui','iPhone Akku','iPhone Kabel','iPhone Headset'] 
				});
			}
			
			// show cars-section
			$('#carTypeSelector a').click(function(){
				$('#carSelector').collapse('show');
			});
			
			$('#IDRegistrYear').change(function(){
				fieldVal = $.trim($(this).val());
				console.log(fieldVal);
				if(fieldVal != '' && fieldVal != '-' && fieldVal != 0){
					$('#carVerionSelector').collapse('show');
				}		
			});	
			
			$('#FormFuel').change(function(){
				fieldVal = $.trim($(this).val());
				console.log(fieldVal);
				if(fieldVal != '' && fieldVal != '-' && fieldVal != 0){
					$('#carAttributeSelector').collapse('show');
				}				
			});
			
    });
  </script>
</div>

<div class="row-fluid catSelect core">
    <div class="controls controls-row span12 well">
        <nav class="span2 navCat" id="navCatLvl1">
          <ul class="nav nav-list">
            <li class="hasSub"><a href="#">Antiquitäten &amp; Kunst <i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Audio, TV & Video<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Auto &amp; Motorrad<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Briefmarken<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Bücher &amp; Comics<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Büro & gewerbe<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Computer & Netzwerk<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Filme & DVD<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Foto & Optik<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Games & Spielkonsolen<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Handwerk & Garten<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub catAlternativ demo"><a href="#">Handy, Festnetz, Funk<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Haushalt & Wohnen<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Kind & Baby<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub has5Lvl"><a href="#">Kleidung & Accessoires<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Kosmetik & Pflege<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Modellbau & Hobby<i class="icon-chevron-right"></i></a></li>
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
            <li class="hasSub"><a href="#">Blackberry<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">HTC<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">LG<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Motorola<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Nokia<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Nokia N-Gage<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Panasonic<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Palm Treo<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Qtek<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Samsung<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Sharp<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Siemens<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Sony Ericsson<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Sonstige Handys ohne SIM-Lock<i class="icon-chevron-right"></i></a></li>
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

<div class="row-fluid catSelect cars collapse collapse-body" id="carTypeSelector">
    <div class="controls controls-row span12 well">
        <nav class="span2 navCat" id="navCatLvl1">
          <ul class="nav nav-list">
            <li class=""><a href="#">Autos<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Ersatzteilträger<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#">Mietfarzeuge<i class="icon-chevron-right"></i></a></li>
          </ul>        
        </nav>
    </div>
</div>

<div class="row-fluid catSelect accessory">
    <div class="controls controls-row span12 well">
        <nav class="span2 navCat" id="navCatLvl1">
          <ul class="nav nav-list">
            <li class="hasSub"><a href="#">Autozubehör<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Autotuning<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub catAlternativ"><a href="#">Car Hifi<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Felgen, Pneus &amp; Räder<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub catAlternativ demo"><a href="#">Navigationsgeräte<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Motorradzubehör<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Motorradbekleidung<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Oldtimer-Zubehör<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Bootzubehör<i class="icon-chevron-right"></i></a></li>
            <li><a href="#">Zubehör für Nutzfahrzeuge<i class="icon-chevron-right"></i></a></li>
            <li><a href="#">Sonstiges Fahrzeugzubehör<i class="icon-chevron-right"></i></a></li>
            <li><a href="#">Traktorenzubehör<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Mofazubehör<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Autoersatzteile<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Werkstattbedarf<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Motorradersatzteile<i class="icon-chevron-right"></i></a></li>
            <li><a href="#">Campingzubehör<i class="icon-chevron-right"></i></a></li>
            <li class="hasSub"><a href="#">Fanartikel<i class="icon-chevron-right"></i></a></li>
            <li><a href="#">Anhängerzubehör<i class="icon-chevron-right"></i></a></li>
          </ul>        
        </nav>
        <nav class="span2 navCat" id="navCatLvl2">
          <ul class="nav nav-list">
            <li><a href="#">GPS Antennen<i class="icon-chevron-right"></i></a></li>
            <li class="catAlternativ demo"><a href="#">Navigation Festeinbau<i class="icon-chevron-right"></i></a></li>
            <li class="catAlternativ"><a href="#">Navigation Portabel<i class="icon-chevron-right"></i></a></li>
            <li class="catAlternativ"><a href="#">Navigation Zubehör<i class="icon-chevron-right"></i></a></li>
            <li class="catAlternativ"><a href="#">Software<i class="icon-chevron-right"></i></a></li>
            <li class="catAlternativ"><a href="#">Sonstiges<i class="icon-chevron-right"></i></a></li>
          </ul>
        </nav>
    </div>
</div>

<div id="carSelector" class="cars row-fluid collapse collapse-body">
	<h3>Wie möchten Sie Ihr Fahrzeug einstellen?</h3>
	<div class="span4 well">
    	<h4>Mit Typenschein-Nummer</h4>
      <script type="text/javascript">
      	$(document).ready(function(e) {
          $('.controls select:last-child, .controls input:last-child').each(function() {
            $(this).change(function(){
							fieldVal = $.trim($(this).val());
							console.log(fieldVal);
							if(fieldVal != '' && fieldVal != '-' && fieldVal != 0){
								console.log("do check now...");
								
								if($(this).parents('.control-group').next('.control-group').height() > 0){
									var myObj = $(this).parents('.control-group').next('.control-group');
								} else {
									var myObj = $(this).parents('.control-group').next('.control-group').next();
								}
								console.log("length of obj :",myObj.length);
							  myObj.find('select').removeAttr('disabled');
							}
						});
          });
        });
      </script>
      <div class="control-group">
        <label class="control-label">Nummer</label>
        <div class="controls">
          <input class="span12" type="text" />
        </div>
     	</div>
      
      <div class="control-group">
        <label class="control-label">Zulassungsdatum</label>
        <div class="controls">    
          <select class="span8" name="IDRegistrMonth" id="IDRegistrMonth" tabindex="3" disabled="disabled">
            <option value="-" selected="selected">Monat</option>
            <option value="01">Januar</option>
            <option value="02">Februar</option>
            <option value="03">März</option>
            <option value="04">April</option>
            <option value="05">Mai</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Dezember</option>
          </select>
          <select class="span4" name="IDRegistrYear" id="IDRegistrYear" tabindex="4" disabled="disabled">
            <option value="-" selected="selected">Jahr</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
            <option value="1959">1959</option>
            <option value="1958">1958</option>
            <option value="1957">1957</option>
            <option value="1956">1956</option>
            <option value="1955">1955</option>
            <option value="1954">1954</option>
            <option value="1953">1953</option>
            <option value="1952">1952</option>
            <option value="1951">1951</option>
            <option value="1950">1950</option>
            <option value="1949">1949</option>
            <option value="1948">1948</option>
            <option value="1947">1947</option>
            <option value="1946">1946</option>
            <option value="1945">1945</option>
            <option value="1944">1944</option>
            <option value="1943">1943</option>
            <option value="1942">1942</option>
            <option value="1941">1941</option>
            <option value="1940">1940</option>
            <option value="1939">1939</option>
            <option value="1938">1938</option>
            <option value="1937">1937</option>
            <option value="1936">1936</option>
            <option value="1935">1935</option>
            <option value="1934">1934</option>
            <option value="1933">1933</option>
            <option value="1932">1932</option>
            <option value="1931">1931</option>
            <option value="1930">1930</option>
            <option value="1929">1929</option>
            <option value="1928">1928</option>
            <option value="1927">1927</option>
            <option value="1926">1926</option>
            <option value="1925">1925</option>
            <option value="1924">1924</option>
            <option value="1923">1923</option>
            <option value="1922">1922</option>
            <option value="1921">1921</option>
            <option value="1920">1920</option>
            <option value="1919">1919</option>
            <option value="1918">1918</option>
            <option value="1917">1917</option>
            <option value="1916">1916</option>
            <option value="1915">1915</option>
            <option value="1914">1914</option>
            <option value="1913">1913</option>
            <option value="1912">1912</option>
            <option value="1911">1911</option>
            <option value="1910">1910</option>
            <option value="1909">1909</option>
            <option value="1908">1908</option>
            <option value="1907">1907</option>
            <option value="1906">1906</option>
            <option value="1905">1905</option>
            <option value="1904">1904</option>
            <option value="1903">1903</option>
            <option value="1902">1902</option>
            <option value="1901">1901</option>
            <option value="1900">1900</option>
          </select>
        </div>
      </div>
      
      <div class="carIDHint">
      	<div class="span7"><a href="#modalCarID" role="button" data-toggle="modal"><img src="img/fahrzeugausweisg_tmb.png" width="145" height="110" /></a></div>
      	<div class="span5"><a href="#modalCarID" role="button" data-toggle="modal"><i class="icon-zoom-in"></i> Vergrössern</a></div>
      </div>
      
  </div>
  
	<div class="span2">oder</div>
  
      <script type="text/javascript">
				$(document).ready(function(e) {
          $('#FormModel').change(function(e) {
						fieldVal = $.trim($(this).val());
						console.log(fieldVal);
						if(fieldVal == 0){
							$('#alternateModelConrol').collapse('show')
						}            
          });
        });
      </script>
	<div class="span4 well">
    	<h4>Mit Marke / Model</h4><div class="control-group">
        <label class="control-label">Zulassungsdatum</label>
        <div class="controls">    
          <select class="span8" name="FormRegistrMonth" id="FormRegistrMonth" tabindex="3">
            <option value="-" selected="selected">Monat</option>
            <option value="01">Januar</option>
            <option value="02">Februar</option>
            <option value="03">März</option>
            <option value="04">April</option>
            <option value="05">Mai</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Dezember</option>
          </select>
          <select class="span4" name="FormRegistrYear" id="FormRegistrYear" tabindex="4">
            <option value="-" selected="selected">Jahr</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
            <option value="1979">1979</option>
            <option value="1978">1978</option>
            <option value="1977">1977</option>
            <option value="1976">1976</option>
            <option value="1975">1975</option>
            <option value="1974">1974</option>
            <option value="1973">1973</option>
            <option value="1972">1972</option>
            <option value="1971">1971</option>
            <option value="1970">1970</option>
            <option value="1969">1969</option>
            <option value="1968">1968</option>
            <option value="1967">1967</option>
            <option value="1966">1966</option>
            <option value="1965">1965</option>
            <option value="1964">1964</option>
            <option value="1963">1963</option>
            <option value="1962">1962</option>
            <option value="1961">1961</option>
            <option value="1960">1960</option>
            <option value="1959">1959</option>
            <option value="1958">1958</option>
            <option value="1957">1957</option>
            <option value="1956">1956</option>
            <option value="1955">1955</option>
            <option value="1954">1954</option>
            <option value="1953">1953</option>
            <option value="1952">1952</option>
            <option value="1951">1951</option>
            <option value="1950">1950</option>
            <option value="1949">1949</option>
            <option value="1948">1948</option>
            <option value="1947">1947</option>
            <option value="1946">1946</option>
            <option value="1945">1945</option>
            <option value="1944">1944</option>
            <option value="1943">1943</option>
            <option value="1942">1942</option>
            <option value="1941">1941</option>
            <option value="1940">1940</option>
            <option value="1939">1939</option>
            <option value="1938">1938</option>
            <option value="1937">1937</option>
            <option value="1936">1936</option>
            <option value="1935">1935</option>
            <option value="1934">1934</option>
            <option value="1933">1933</option>
            <option value="1932">1932</option>
            <option value="1931">1931</option>
            <option value="1930">1930</option>
            <option value="1929">1929</option>
            <option value="1928">1928</option>
            <option value="1927">1927</option>
            <option value="1926">1926</option>
            <option value="1925">1925</option>
            <option value="1924">1924</option>
            <option value="1923">1923</option>
            <option value="1922">1922</option>
            <option value="1921">1921</option>
            <option value="1920">1920</option>
            <option value="1919">1919</option>
            <option value="1918">1918</option>
            <option value="1917">1917</option>
            <option value="1916">1916</option>
            <option value="1915">1915</option>
            <option value="1914">1914</option>
            <option value="1913">1913</option>
            <option value="1912">1912</option>
            <option value="1911">1911</option>
            <option value="1910">1910</option>
            <option value="1909">1909</option>
            <option value="1908">1908</option>
            <option value="1907">1907</option>
            <option value="1906">1906</option>
            <option value="1905">1905</option>
            <option value="1904">1904</option>
            <option value="1903">1903</option>
            <option value="1902">1902</option>
            <option value="1901">1901</option>
            <option value="1900">1900</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Marke</label>
        <div class="controls">    
          <select class="span12" name="FormMake" id="FormMake" tabindex="3" disabled="disabled">
            <option value="-">Bitte wählen Sie...</option>
            <option value="218">AIXAM</option>
            <option value="10">ALFA ROMEO</option>
            <option value="62">AMERICAN MOTORS</option>
            <option value="235">ARTEGA</option>
            <option value="73">ASTON MARTIN</option>
            <option value="11">AUDI</option>
            <option value="31">AUSTIN</option>
            <option value="94">BENTLEY</option>
            <option value="95">BERTONE</option>
            <option value="13">BMW</option>
            <option value="92">BMW-ALPINA</option>
            <option value="85">BUGATTI</option>
            <option value="23">BUICK</option>
            <option value="24">CADILLAC</option>
            <option value="74">CATERHAM</option>
            <option value="25">CHEVROLET</option>
            <option value="54">CHRYSLER</option>
            <option value="14">CITROEN</option>
            <option value="228">DACIA</option>
            <option value="20">DAEWOO</option>
            <option value="16">DAIHATSU</option>
            <option value="99">DAIMLER</option>
            <option value="68">DE TOMASO</option>
            <option value="226">DODGE</option>
            <option value="98">DONKERVOORT</option>
            <option value="65">FERRARI</option>
            <option value="17">FIAT</option>
            <option value="237">FISKER</option>
            <option value="21">FORD</option>
            <option value="22">FORD (USA)</option>
            <option value="28">HONDA</option>
            <option value="109">HS</option>
            <option value="225">HUMMER</option>
            <option value="34">HYUNDAI</option>
            <option value="230">INFINITI</option>
            <option value="32">INNOCENTI</option>
            <option value="53">ISUZU (GM)</option>
            <option value="58">ISUZU (J)</option>
            <option value="231">IVECO</option>
            <option value="33">JAGUAR</option>
            <option value="59">JEEP</option>
            <option value="88">KIA</option>
            <option value="232">KTM</option>
            <option value="29">LADA</option>
            <option value="66">LAMBORGHINI</option>
            <option value="30">LANCIA</option>
            <option value="187">LAND ROVER</option>
            <option value="61">LEXUS</option>
            <option value="223">LIGIER</option>
            <option value="77">LOTUS</option>
            <option value="55">MASERATI</option>
            <option value="37">MAZDA</option>
            <option value="236">McLAREN</option>
            <option value="38">MERCEDES-BENZ</option>
            <option value="18">MG</option>
            <option value="217">MINELLI</option>
            <option value="67">MINI</option>
            <option value="39">MITSUBISHI</option>
            <option value="84">MORGAN</option>
            <option value="40">NISSAN</option>
            <option value="26">OLDSMOBILE</option>
            <option value="41">OPEL</option>
            <option value="42">PEUGEOT</option>
            <option value="27">PONTIAC</option>
            <option value="43">PORSCHE</option>
            <option value="57">PUCH</option>
            <option value="220">QVALE</option>
            <option value="102">RELIANT</option>
            <option value="44">RENAULT</option>
            <option value="80">ROLLS-ROYCE</option>
            <option value="35">ROVER</option>
            <option value="45">SAAB</option>
            <option value="19">SEAT</option>
            <option value="46">SKODA</option>
            <option value="216">SMART</option>
            <option value="115">SSANG YONG</option>
            <option value="47">SUBARU</option>
            <option value="48">SUZUKI</option>
            <option value="49">TALBOT</option>
            <option value="222">TATA</option>
            <option value="234">TESLA</option>
            <option value="233">THINK</option>
            <option value="50">TOYOTA</option>
            <option value="89">TVR</option>
            <option value="82">VENTURI</option>
            <option value="51">VOLVO</option>
            <option value="52">VW</option>
            <option value="219">WIESMANN</option>
            <option value="103">ZAGATO</option>
            <option value="-1">Sonstige</option>
          </select>
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Modell</label>
        <div class="controls">    
          <select class="span12" name="FormModel" id="FormModel" tabindex="3" disabled="disabled">
          	<option value="-1">Bitte wählen Sie ...</option>
            <option value="204">Aerostar</option>
            <option value="205">Bronco/Expl</option>
            <option value="206">Cougar</option>
            <option value="627">GT</option>
            <option value="207">Probe</option>
            <option value="208">Taurus</option>
            <option value="209">Windstar</option>
            <option value="0">Sonstige</option>
          </select>
        </div>
      </div>
      <div id="alternateModelConrol" class="control-group collapse collapse-body">
        <label class="control-label">anderes Modell</label>
        <div class="controls">
        	<input type="text" name="alternateModel" id="alternateModel" disabled="disabled" />
        </div>
      </div>
      <div class="control-group">
        <label class="control-label">Treibstoff</label>
        <div class="controls">    
          <select class="span12" name="FormFuel" id="FormFuel" tabindex="3" disabled="disabled">
          	<option value="-1">Bitte wählen Sie ...</option>
            <option value="1">Benzin Bleifrei</option>
            <option value="2">Benzin verbleit</option>
            <option value="4">Diesel</option>
            <option value="8">Elektrisch</option>
            <option value="16">Erdgas (CNG) / Benzin</option>
            <option value="32">Ethanol E85 / Benzin</option>
            <option value="64">Erdgas (CNG)</option>
            <option value="128">Hybrid</option>
            <option value="256">Andere</option>
            <option value="512">Flüssiggas (LPG) / Benzin</option>
            <option value="1024">Elektrisch (Plug-in) / Benzin</option>
          </select>
        </div>
      </div>
  </div>
</div>
<style>
	#carVerionSelector .oddRow td {
		background-color:#FFF;
	} 
	#carVerionSelector .versionDetails td {
		background-color:#bcd229;
		color:#fff;
	} 
	#carVerionSelector .versionBasic {
		cursor:pointer;
	} 
	#carVerionSelector .versionBasic.selected td {
		background-color: #a6b825;
		color:#fff;
	} 
	#carVerionSelector .versionDetails {
		display:none;
	} 
	#carVerionSelector .versionDetails td{
		padding-left: 33px;
	} 
	#carVerionSelector .versionDetails dl {
		margin:0;
	} 
	#carVerionSelector .versionDetails dt, #carVerionSelector .versionDetails dd {
		display: inline-block;
		font-weight:normal;
	} 
	#carVerionSelector .versionDetails dt:after {
   content: ": ";
	} 
	#carVerionSelector .versionDetails dd {
		border-right: 1px dotted;
    display: inline-block;
    margin-right: 10px;
    padding-right: 15px;
	} 
	
	.icon-select {
	  background-image: none;
    border: 1px solid #757575;
    border-radius: 4px;
    -moz-border-radius: 4px;
    -webkit-border-radius: 4px;
		margin-right:10px;
	}
	.selected .icon-select {
		background-color: #fff;
    background-image: url("https://pics.ricardostatic.ch/contents/ch/assets/images/ricardo_icons_green.png");
    background-position: -288px 0;
    border-color: #fff !important;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(e) {
		$('#carVerionSelector table tr:visible:odd').addClass('oddRow');
		
    $('.versionBasic').click(function(){
			$('.versionBasic.selected').removeClass('selected');
			$(this).addClass('selected');
			$('.versionDetails').hide();
			$(this).next().show();
			
			$('.form-actions .cars.btn').addClass('btn-primary').removeClass('btn-disabled');		
		});
			
		$('#altHP').bind('change blur',function(){
			fieldVal = $.trim($(this).val());
			console.log(fieldVal);
			if(fieldVal != '' && fieldVal != '-' && fieldVal != 0){
				$('.form-actions .cars.btn').addClass('btn-primary').removeClass('btn-disabled');
			}		
			else {
				$('.form-actions .cars.btn').removeClass('btn-primary').addClass('btn-disabled');
				}		
		});
		
		
  });	
</script>

<div id="carVerionSelector" class="cars row-fluid collapse collapse-body">
	<h3>Welche Fahrzeug-Version möchten Sie Verkaufen?</h3>
  <div class="well">
    <table id="CertificationNrTable" class="table table-striped">
      <thead>
        <tr>
          <th>Version</th>
          <th>Aufbauart</th>
          <th>Leistung PS</th>
          <th>Türen</th>
          <th>Sitze</th>
          <th>Getriebeart</th>
        </tr>
      </thead>
      <tbody>
        <tr class="versionBasic">
          <td><i class="icon-select"></i>Golf 1.6 Trend</td>
          <td>Limousine</td>
          <td>102</td>
          <td>3</td>
          <td>5</td>
          <td>Schaltgetriebe</td>
        </tr>
        <tr class="versionDetails">
          <td colspan="6">
            <dl>
              <dt>Instandsetzung</dt>
              <dd>04.2008</dd>
              <dt>Treibstoff</dt>
              <dd>Benzin bleifrei</dd>
              <dt>Typenscheinnummer</dt>
              <dd>1VD242</dd>
            </dl>     
          </td>
        </tr>
        <tr class="versionBasic">
          <td><i class="icon-select"></i>Golf 1.6 Trend</td>
          <td>Limousine</td>
          <td>102</td>
          <td>5</td>
          <td>5</td>
          <td>Schaltgetriebe</td>
        </tr>
        <tr class="versionDetails">
          <td colspan="6">
            <dl>
              <dt>Instandsetzung</dt>
              <dd>04.2008</dd>
              <dt>Treibstoff</dt>
              <dd>Benzin bleifrei</dd>
              <dt>Typenscheinnummer</dt>
              <dd>1VD242</dd>
            </dl>     
          </td>
        </tr>
        <tr class="versionBasic">
          <td><i class="icon-select"></i>Golf 1.6 Comfort</td>
          <td>Limousine</td>
          <td>102</td>
          <td>3</td>
          <td>5</td>
          <td>Schaltgetriebe</td>
        </tr>
        <tr class="versionDetails">
          <td colspan="6">
            <dl>
              <dt>Instandsetzung</dt>
              <dd>04.2008</dd>
              <dt>Treibstoff</dt>
              <dd>Benzin bleifrei</dd>
              <dt>Typenscheinnummer</dt>
              <dd>1VD242</dd>
            </dl>     
          </td>
        </tr>
        </tr>
        <tr class="versionBasic">
          <td><i class="icon-select"></i>Golf 1.6 Comfort</td>
          <td>Limousine</td>
          <td>102</td>
          <td>5</td>
          <td>5</td>
          <td>Schaltgetriebe</td>
        </tr>
        <tr class="versionDetails">
          <td colspan="6">
            <dl>
              <dt>Instandsetzung</dt>
              <dd>04.2008</dd>
              <dt>Treibstoff</dt>
              <dd>Benzin bleifrei</dd>
              <dt>Typenscheinnummer</dt>
              <dd>1VD242</dd>
            </dl>     
          </td>
        </tr>
        </tr>
        <tr class="versionBasic">
          <td><i class="icon-select"></i>Golf 1.6 Sport</td>
          <td>Limousine</td>
          <td>102</td>
          <td>3</td>
          <td>5</td>
          <td>Schaltgetriebe</td>
        </tr>
        <tr class="versionDetails">
          <td colspan="6">
            <dl>
              <dt>Instandsetzung</dt>
              <dd>04.2008</dd>
              <dt>Treibstoff</dt>
              <dd>Benzin bleifrei</dd>
              <dt>Typenscheinnummer</dt>
              <dd>1VD242</dd>
            </dl>     
          </td>
        </tr>
        </tr>
        <tr class="versionBasic">
          <td><i class="icon-select"></i>Golf 1.6 Sport</td>
          <td>Limousine</td>
          <td>102</td>
          <td>5</td>
          <td>5</td>
          <td>Schaltgetriebe</td>
        </tr>
        <tr class="versionDetails">
          <td colspan="6">
            <dl>
              <dt>Instandsetzung</dt>
              <dd>04.2008</dd>
              <dt>Treibstoff</dt>
              <dd>Benzin bleifrei</dd>
              <dt>Typenscheinnummer</dt>
              <dd>1VD242</dd>
            </dl>     
          </td>
        </tr>
        </tr>
        <tr class="versionBasic">
          <td><i class="icon-select"></i>Golf 1.6 Goal</td>
          <td>Limousine</td>
          <td>102</td>
          <td>3</td>
          <td>5</td>
          <td>Schaltgetriebe</td>
        </tr>
        <tr class="versionDetails">
          <td colspan="6">
            <dl>
              <dt>Instandsetzung</dt>
              <dd>04.2008</dd>
              <dt>Treibstoff</dt>
              <dd>Benzin bleifrei</dd>
              <dt>Typenscheinnummer</dt>
              <dd>1VD242</dd>
            </dl>     
          </td>
        </tr>
        </tr>
        <tr class="versionBasic">
          <td><i class="icon-select"></i>Golf 1.6 Goal</td>
          <td>Limousine</td>
          <td>102</td>
          <td>5</td>
          <td>5</td>
          <td>Schaltgetriebe</td>
        </tr>
        <tr class="versionDetails">
          <td colspan="6">
            <dl>
              <dt>Instandsetzung</dt>
              <dd>04.2008</dd>
              <dt>Treibstoff</dt>
              <dd>Benzin bleifrei</dd>
              <dt>Typenscheinnummer</dt>
              <dd>1VD242</dd>
            </dl>     
          </td>
        </tr>
        </tr>
      </tbody>
    </table>
  </div>
</div>

<div id="carAttributeSelector" class="cars row-fluid  collapse collapse-body">
	<div class="alert alert-error">
  	 <button type="button" class="close" data-dismiss="alert">&times;</button>
     <p>Wir haben Ihr Fahrzeug nicht gefunden.</p>
  </div>
	<h3>Wie lauten die technischen Details des Fahrzeuges?</h3>
  <div class="well">
  		<div class="row-fluid">
        <div class="control-group span3">
          <label class="control-label">Aufbauart</label>
          <div class="controls">    
            <select class="span12" name="FormModel" id="FormModel" tabindex="3">
              <option selected="selected" value="-1">Bitte wählen Sie...</option>
              <option value="1">Limousine</option>
              <option value="2">Kombi</option>
              <option value="3">Coupé</option>
              <option value="4">Cabriolet</option>
              <option value="5">Targa</option>
              <option value="6">Pick-Up</option>
              <option value="7">SUV / Geländewagen</option>
              <option value="8">Minivan / Van</option>
              <option value="17">Sonstige</option>
            </select>
          </div>
        </div>
        <div class="control-group span3">
          <label class="control-label">Antrieb</label>
          <div class="controls">    
            <select class="span12" name="FormModel" id="FormModel" tabindex="3">
              <option selected="selected" value="-1">Bitte wählen Sie...</option>
              <option value="1">Vorderradantrieb</option>
              <option value="2">Hinterradantrieb</option>
              <option value="7">Allrad</option>
            </select>
          </div>
        </div>
        <div class="control-group span3">
          <label class="control-label">Getriebeart</label>
          <div class="controls">    
            <select class="span12" name="FormModel" id="FormModel" tabindex="3">
              <option selected="selected" value="-1">Bitte wählen Sie...</option>
              <option value="1">Schaltgetriebe</option>
              <option value="3">Automat</option>
            </select>
          </div>
        </div>
        <div class="control-group span3">
          <label class="control-label">Gänge</label>
          <div class="controls">    
            <select class="span12" name="FormModel" id="FormModel" tabindex="3">
              <option selected="selected" value="-1">Bitte wählen Sie...</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="9">9</option>
            </select>
          </div>
        </div>
      </div>
  		<div class="row-fluid">
        <div class="control-group span3">
          <label class="control-label">Zylinder <span class="optionalField">(optional)</span></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
        <div class="control-group span3">
          <label class="control-label">Hubraum ccm <span class="optionalField">(optional)</span></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
        <div class="control-group span3">
          <label class="control-label">Leistung PS</label>
          <div class="controls">
            <input class="span12" type="text" name="altHP" id="altHP" />
          </div>
        </div>
        <div class="control-group span3">
          <label class="control-label">Leistung KW <span class="optionalField">(optional)</span></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
       </div>
  		<div class="row-fluid">
        <div class="control-group span3">
          <label class="control-label">Typenscheinnummer <span class="optionalField">(optional)</span></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
        <div class="control-group span3">
          <label class="control-label">Gewicht (kg) <span class="optionalField">(optional)</span></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
        <div class="control-group span3">
          <label class="control-label">Anhängerlast gebr. <span class="optionalField">(optional)</span></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
      </div>   
  </div>
</div>

<div class="form-actions">
    <a href="step2.php" class="btn btn-primary pull-right core accessory">Weiter zu &laquo;Artikel&raquo;</a>
    <a href="step2cb.php" class="btn btn-disabled pull-right cars">Weiter zu &laquo;Artikel&raquo;</a>
</div>

<div id="modalCarID" class="modal hide fade">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          &times;
      </button>
   		<h3>Typenschein-Nummer im Fahrzeugausweiss</h3>
    </div>
    <div class="modal-body">
        <!-- Modal-Body Start-->
        
        <img src="img/fahrzeugausweisg_big.png" width="763" height="535" align="center"/>
        
				<!-- Modal-Body End-->
        <span class="clear"></span>
    </div>
    <!--<div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
    </div>-->
</div>

<?php $Layout -> end(); ?>