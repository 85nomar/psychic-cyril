<?php
require ('inc/layout.php');
require ('inc/layout_cb.php');
$Layout -> title = 'Selling';
$Layout -> start();
$Layout_cb -> nav_cb();
?>

<h2>In welcher Kategorie möchten Sie Ihr Produkt einstellen?</h2>

<div id="carsCatSelector" class="cars accessory row-fluid" style="text-align:center;">
	<a href="step1.php" class="span2 btn" data-view="cars"><img src="img/car.png" width="89" height="72" />Autos<span class="cbMainCatMark"></span></a>	
	<a href="step1.php" class="span2 btn" data-view="cars"><img src="img/bike.png" width="89" height="72" />Motoräder<span class="cbMainCatMark"></span></a>
	<a href="step1.php" class="span2 btn" data-view="cars"><img src="img/utility.png" width="89" height="72" />Nutzfahrzeuge<span class="cbMainCatMark"></span></a>
	<a href="step1.php" class="span2 btn" data-view="accessory"><img src="img/accessories.png" width="89" height="72" />Zubehör<span class="cbMainCatMark"></span></a>
	<a href="step1.php" class="span2 btn" data-view="cars">Andere Fahrzeuge<span class="cbMainCatMark"></span></a>
</div>

<div class="core accessory row-fluid">
    <form class="form-search span12">
        <fieldset id="categoryFinder" class="well section">
            <div class="input-append">
                <input class="span12" id="appendedInputButton" autocomplete="off" autofocus="autofocus" type="text" placeholder="z.B iPhone Tisch Computer Lego" />
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
            <li class=""><a href="#">Mietfarzeuge<i class="icon-chevron-right"></i></a></li>
            <li class=""><a href="#" data-toggle="tooltip" data-placement="right" title="Fahrzeuge zum ausschlachten">Ersatzteilträger<i class="icon-info-sign"></i><i class="icon-chevron-right"></i></a></li>
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
	<div class="span4 offset1 well carSelector" >
    	<h4>Mit Typenschein-Nummer</h4>
      
      <div class="control-group">
        <label class="control-label">Nummer</label>
        <div class="controls">
          <input class="span12" type="text" name="TxtCertification" id="TxtCertification" maxlength="6" />
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
  
	<div class="span1 seperator">oder</div>
  
	<div class="span4 well carSelector">
    	<h4>Mit Marke / Model</h4>
      <div class="control-group">
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
      <div class="control-group collapse collapse-body in">
        <label class="control-label">Marke</label>
        <div class="controls">    
          <select class="span12" name="FormMake" id="FormMake" tabindex="3" disabled="disabled">
          	 <option value="-1">Bitte wählen Sie ...</option>
             <option value="1">Aixam</option>
             <option value="2">Alfa Romeo</option>
             <option value="3">American Motors</option>
             <option value="313">Artega</option>
             <option value="4">Aston Martin</option>
             <option value="5">Audi</option>
             <option value="6">Austin</option>
             <option value="7">Bentley</option>
             <option value="8">Bertone</option>
             <option value="9">BMW</option>
             <option value="10">BMW-Alpina</option>
             <option value="11">Bugatti</option>
             <option value="12">Buick</option>
             <option value="13">Cadillac</option>
             <option value="14">Caterham</option>
             <option value="15">Chevrolet</option>
             <option value="16">Chrysler</option>
             <option value="17">Citroen</option>
             <option value="18">Dacia</option>
             <option value="19">Daewoo</option>
             <option value="20">Daihatsu</option>
             <option value="21">Daimler</option>
             <option value="22">De Tomaso</option>
             <option value="335">Dfsk</option>
             <option value="23">Dodge</option>
             <option value="24">Donkervoort</option>
             <option value="25">Ferrari</option>
             <option value="26">Fiat</option>
             <option value="324">Fisker</option>
             <option value="27">Ford</option>
             <option value="28">Ford (Usa)</option>
             <option value="321">Giotti Victoria</option>
             <option value="29">Honda</option>
             <option value="30">HS</option>
             <option value="31">Hummer</option>
             <option value="32">Hyundai</option>
             <option value="87">Infiniti</option>
             <option value="33">Innocenti</option>
             <option value="34">Isuzu</option>
             <option value="35">Isuzu (J)</option>
             <option value="88">Iveco</option>
             <option value="36">Jaguar</option>
             <option value="37">Jeep</option>
             <option value="38">Kia</option>
             <option value="299">KTM</option>
             <option value="39">Lada</option>
             <option value="40">Lamborghini</option>
             <option value="41">Lancia</option>
             <option value="42">Land Rover</option>
             <option value="43">Lexus</option>
             <option value="44">Ligier</option>
             <option value="45">Lotus</option>
             <option value="46">Maserati</option>
             <option value="47">Mazda</option>
             <option value="314">McLaren</option>
             <option value="316">Mega</option>
             <option value="48">Mercedes-Benz</option>
             <option value="49">MG</option>
             <option value="50">Minelli</option>
             <option value="51">Mini</option>
             <option value="52">Mitsubishi</option>
             <option value="53">Morgan</option>
             <option value="54">Nissan</option>
             <option value="55">Oldsmobile</option>
             <option value="56">Opel</option>
             <option value="57">Peugeot</option>
             <option value="149">Piaggio</option>
             <option value="58">Pontiac</option>
             <option value="59">Porsche</option>
             <option value="60">Puch</option>
             <option value="61">Qvale</option>
             <option value="62">Reliant</option>
             <option value="63">Renault</option>
             <option value="315">Renault Trucks</option>
             <option value="64">Rolls-Royce</option>
             <option value="65">Rover</option>
             <option value="66">Saab</option>
             <option value="67">Seat</option>
             <option value="68">Skoda</option>
             <option value="69">Smart</option>
             <option value="301">Sokon</option>
             <option value="70">Ssang Yong</option>
             <option value="71">Subaru</option>
             <option value="72">Suzuki</option>
             <option value="73">Talbot</option>
             <option value="74">Tata</option>
             <option value="312">Tesla</option>
             <option value="311">Think</option>
             <option value="75">Toyota</option>
             <option value="76">TVR</option>
             <option value="77">Venturi</option>
             <option value="78">Volvo</option>
             <option value="79">VW</option>
             <option value="80">Wiesmann</option>
             <option value="81">Zagato</option>
             <option value="0">Sonstige</option>            
          </select>
        </div>
      </div>
      <div class="control-group collapse collapse-body">
        <label class="control-label">andere Marke</label>
        <div class="controls input-append span12">
        	<input class="" type="text" name="alternateMake" id="alternateMake" /><span class="add-on"><a class="close" href="#">&times;</a></span>
        </div>
      </div>
      <div class="control-group collapse collapse-body in">
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
      <div class="control-group collapse collapse-body">
        <label class="control-label">anderes Modell</label>
        <div class="controls input-append span12">
        	<input class="" type="text" name="alternateModel" id="alternateModel" /><span class="add-on"><a class="close" href="#">&times;</a></span>
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
	<h3>Wie lauten die technischen Details des Fahrzeuges?</h3>
  <div id="altCarAttributes" class="well">
  	<h4>Pflicht-Angaben</h4>
  		<div class="row-fluid">
        <div class="control-group span4">
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
        <div class="control-group span4">
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
        <div class="control-group span4">
          <label class="control-label">Getriebeart</label>
          <div class="controls">    
            <select class="span12" name="FormModel" id="FormModel" tabindex="3">
              <option selected="selected" value="-1">Bitte wählen Sie...</option>
              <option value="1">Schaltgetriebe</option>
              <option value="3">Automat</option>
            </select>
          </div>
        </div>
        <div class="control-group span4">
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
        <div class="control-group span4">
          <label class="control-label">Leistung PS</label>
          <div class="controls">
            <input class="span12" type="text" name="altHP" id="altHP" />
          </div>
        </div>
      </div>
  	<h4>Optionale Angaben</h4>
  		<div class="row-fluid">
        <div class="control-group span4">
          <label class="control-label">Zylinder<!-- <span class="optionalField">(optional)</span>--></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
        <div class="control-group span4">
          <label class="control-label">Hubraum ccm<!-- <span class="optionalField">(optional)</span>--></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
        <div class="control-group span4">
          <label class="control-label">Leistung KW<!-- <span class="optionalField">(optional)</span>--></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
        <div class="control-group span4">
          <label class="control-label">Typenscheinnummer<!-- <span class="optionalField">(optional)</span>--></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
        <div class="control-group span4">
          <label class="control-label">Gewicht (kg)<!-- <span class="optionalField">(optional)</span>--></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
        <div class="control-group span4">
          <label class="control-label">Anhängerlast gebr.<!-- <span class="optionalField">(optional)</span>--></label>
          <div class="controls">
            <input class="span12" type="text" name="" id="" />
          </div>
        </div>
      </div>   
  </div>
</div>

<div class="form-actions">
    <a href="step2.php" class="btn btn-primary toNext core accessory">Weiter zu &laquo;<?php echo $Layout->formNav[1]["title"]; ?>&raquo;</a>
    <a href="step2cb.php" class="btn btn-disabled toNext cars">Weiter zu &laquo;<?php echo $Layout_cb->formNav[1]["title"]; ?>&raquo;</a>
    <a href="step6.php" class="btn toOverview">Weiter zu &laquo;<?php echo $Layout_cb->formNav[5]["title"]; ?>&raquo;</a>
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