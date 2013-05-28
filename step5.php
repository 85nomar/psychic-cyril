<?php
require ('inc/layout.php');
require ('inc/layout_cb.php');
$Layout -> title = 'Selling';
$Layout -> start();
$Layout_cb -> nav_cb();
?>

<h2>Wie möchten Sie Ihren Artikel bewerben?</h2>

<form>
	<fieldset id="adWindow" class="well core">
    <div class="row-fluid">
      <div class="span3">
        <label>Wie oft soll Ihr Artikel im Anzeigefenster angezeigt werden?</label>
        <div>
          <div class="option optDisable">
            <label for="none">
              <input type="radio" name="adWindow" value="none" id="none" />
              <i class="icon-ok icon-white"></i>
              <span class="value">Nie</span>
             </label>
          </div>
          <div class="option">
            <label for="bronce">
              <input type="radio" name="adWindow" value="bronce" id="bronce" />
              <i class="icon-ok icon-white"></i>
              <span class="value">3x weniger</span>
              <img src="img/push01.png" width="75" height="55" /></label>
          </div>
          <div class="option">
            <label for="silver">
              <input type="radio" name="adWindow" value="silver" id="silver" checked="checked"/>
              <i class="icon-ok icon-white"></i>
              <span class="value">Standard CHF 5.00</span>
              <img src="img/push05.png" width="75" height="55" /></label>
          </div>
          <div class="option">
            <label for="gold">
              <input type="radio" name="adWindow" value="gold" id="gold" />
              <i class="icon-ok icon-white"></i>
              <span class="value">4x mehr</span>
              <img src="img/push20.png" width="75" height="55" /></label>
          </div>
        </div>
      </div>
      <div class="span9 blowUp">
      	<div id="optionCarousel" class="span6 carousel">
          <div id="" class="carousel-inner">
          
            <div id="optionTypeNone" class="item active description">
              <!--<i class="sash"><img src="img/schleife_silver.png" width="53" height="54" /></i>
              <img class="bigPic" src="img/push05_big.png" width="104" height="86" align="right" />-->
              <p class="optionMaintext">Der Artikel erscheint nicht in den Anzeigefenstern. Ihre Verkaufschancen werden nicht erhöht.</p>
            </div>
          
            <div id="optionTypeBronce" class="item description">
              <i class="sash"><img src="img/schleife_bronze.png" width="53" height="54" /></i>
              
              <p>Anzeigefenster</p>
              <h2 class="optionName">Hauptkategorie- & Suchresultat-Seite</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 2.00</p>
              <p class="optionMaintext">Der Artikel erscheint <b><big>3x</big></b> weniger in den Anzeigefenster als bei der Option “Standard”.</p>
            </div>
          
            <div id="optionTypeSilver" class="item description">
              <i class="sash"><img src="img/schleife_silver.png" width="53" height="54" /></i>
              <p>Anzeigefenster</p>
              <h2 class="optionName">Hautptkategorie- & Suchresultat-Seite</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 5.00</p>
              <p class="optionMaintext">Der Artikel erscheint in den Anzeigefenstern abwechselnd mit anderen Artikeln.<br /><br /> Sie haben die Möglichkeit, den Artikel “mehr” oder “weniger” in der Rotation anzuzeigen.Siehe Video</p>
            </div>
          
            <div id="optionTypeGold" class="item description">
              <i class="sash"><img src="img/schleife_gold.png" width="53" height="54" /></i>
              
              <p>Anzeigefenster</p>
              <h2 class="optionName">Hauptkategorie- & Suchresultat-Seite</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 15.00</p>
              <p class="optionMaintext">Der Artikel erscheint <b><big>4x</big></b> mehr in dem Anzeigefenster als bei der Option “Standard”.</p>
            </div>
          </div>
         </div>
        <div class="span6 optionPreview">
          <p>Hauptkategorieseite</p>

          <img class="specialHover" src="img/kategorie_anzeigefenster_klein.jpg" />
          <img src="img/plus.png" style="margin:10px 0 10px 155px;" />
          <p>Suchresultat-Seite</p>

          <img class="specialHover" src="img/listing_anzeigefenster_klein.jpg" />
          
        </div>
      <div></div>
      </div>
      <div></div>
      
    </div>
   </fieldset>
   <p>&nbsp;</p>
   <fieldset id="adHomepage" class="well core">
    <div class="row-fluid">
      <div class="span3">
        <label>Möchten Sie Ihren Artikel auf der meistbesuchten Seite von ricardo.ch publizieren?</label>
        <div>
          <div class="option optDisable">
            <label for="none">
              <input type="radio" name="adHomepage" value="1" id="none" />
              <i class="icon-ok icon-white"></i>
              <span class="value">Ja</span>
             </label>
          </div>
        </div>
      </div>
      <div class="span9 blowUp">
        <div id="optionCarousel" class="span6 carousel">
          <div id="" class="carousel-inner">
          
            <div id="optionTypeNone" class="item active description">
              <!--<i class="sash"><img src="img/schleife_silver.png" width="53" height="54" /></i>
              <img class="bigPic" src="img/push05_big.png" width="104" height="86" align="right" />-->
              <p>Top Angebot</p>
              <h2 class="optionName">Homepage</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 40.00</p>
              <ol>
                <li>Der Artikel erscheint auf der MEISTBESUCHTEN Seite von ricardo.ch</li>
                <li>370'000 Besucher täglich!</li>
                <li>Der Artikel wird zusammen mit anderen Top-Angebote publiziert</li>
              </ol>
            </div>     
            
          </div>
         </div>
        <div class="span6 optionPreview">
          <p>Hier wird der Artikel angezeit:</p>
          <img src="img/hp_promo_prototype_iphone.jpg" width="328" height="209" />
        </div>
      <div></div>
      </div>
      <div></div>
      
    </div>
  </fieldset>

  <fieldset id="adHomepage" class="well cars">
    <!-- Row 1 -->
    <div class="row-fluid">
      <div class="span3">
        <label>Möchten Sie Ihren Artikel auf der Suchresultat-Seite von auto.ricardo.ch anzeigen?</label>
        <div>
          <div class="option optDisable">
            <label for="none">
              <input type="radio" name="adHomepage" value="1" id="none" />
              <i class="icon-ok icon-white"></i>
              <span class="value">Ja</span>
             </label>
          </div>
        </div>
      </div>
      <div class="span9 blowUp">
      	<div id="optionCarousel" class="span6 carousel">
          <div id="" class="carousel-inner">
          
            <div id="optionTypeNone" class="item active description">
              <!--<i class="sash"><img src="img/schleife_silver.png" width="53" height="54" /></i>
              <img class="bigPic" src="img/push05_big.png" width="104" height="86" align="right" />-->
              <p>Anzeigefenster</p>
              <h2 class="optionName">Top-Angebot in Listing</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 7.50</p>
              <p class="optionMaintext">Ihr Artikel erscheint zusammen mit 4 weiteren Artikel oberhalb des Suchresultats.</p>
            </div>     
            
          </div>
         </div>
        <div class="span6 optionPreview">
          <p>Suchresultat-Seite</p>
          <!-- Bootstrap Modal 1 Anfang -->
          <div id="ModalTopOffer" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel"></h3>
            </div>
            <div class="modal-body">
              <img src="img/car_overlays/fullsize/car_startseite.jpg" />
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Schliessen</button>
            </div>
          </div>
          <!-- Bootstrap Modal 1 Ende -->
          <img data-toggle="modal" href="#ModalTopOffer" class="specialHover" src="img/car_overlays/tnails/car_topoffer.jpg" width="328" height="209" />
        </div>
      <div></div>
      </div>
      <div></div>
      
    </div>
  </fieldset>
    <!-- Row 2 -->
    <fieldset id="adHomepage" class="well cars">
        <div class="row-fluid">
      <div class="span3">
        <label>Möchten Sie Ihren Artikel auf der Startseite von auto.ricardo.ch anzeigen?</label>
        <div>
          <div class="option optDisable">
            <label for="none">
              <input type="radio" name="adHomepage" value="1" id="none" />
              <i class="icon-ok icon-white"></i>
              <span class="value">Ja</span>
             </label>
          </div>
        </div>
      </div>
      <div class="span9 blowUp">
        <div id="optionCarousel" class="span6 carousel">
          <div id="" class="carousel-inner">
          
            <div id="optionTypeNone" class="item active description">
              <!--<i class="sash"><img src="img/schleife_silver.png" width="53" height="54" /></i>
              <img class="bigPic" src="img/push05_big.png" width="104" height="86" align="right" />-->
              <p>Top Angebot</p>
              <h2 class="optionName">Startseite</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 40.00</p>
              <p class="optionMaintext">Ihr Artikel erscheint auf der Startseite von auto.ricardo.ch zusammen mit anderen Top-Angeboten.</p>
            </div>     
          </div>
         </div> 
        <div class="span6 optionPreview">
          <p>Startseite</p>
          <!-- Bootstrap Modal 2 Anfang -->
          <div id="ModalStartseite" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel"></h3>
            </div>
            <div class="modal-body">
              <img src="img/car_overlays/fullsize/car_topoffer.jpg" />
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Schliessen</button>
            </div>
          </div>
          <!-- Bootstrap Modal 2 Ende -->
          <img data-toggle="modal" href="#ModalStartseite" class="specialHover" src="img/car_overlays/tnails/car_startseite.jpg" width="328" height="209" />
        </div>
      <div></div>
      </div>
      <div></div>
      
    </div>
  </fieldset>
    <!-- Row 3 -->
    <fieldset id="adHomepage" class="well cars">
        <div class="row-fluid">
      <div class="span3">
        <label>Möchten Sie Ihren Artikel in der Listenansicht farbig hervor heben?</label>
        <div>
          <div class="option optDisable">
            <label for="none">
              <input type="radio" name="adHomepage" value="1" id="none" />
              <i class="icon-ok icon-white"></i>
              <span class="value">Ja</span>
             </label>
          </div>
        </div>
      </div>
      <div class="span9 blowUp">
        <div id="optionCarousel" class="span6 carousel">
          <div id="" class="carousel-inner">
          
            <div id="optionTypeNone" class="item active description">
              <!--<i class="sash"><img src="img/schleife_silver.png" width="53" height="54" /></i>
              <img class="bigPic" src="img/push05_big.png" width="104" height="86" align="right" />-->
              <p>Suchresultat-Seite</p>
              <h2 class="optionName">Farbiger Hintergrund</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 10.00</p>
              <p class="optionMaintext">Durch den farbigen Hintergrund in der Suchresultat-Seite wird Ihr Artikel besser wahrgenommen.</p>
            </div>     
            
          </div>
         </div>
        <div class="span6 optionPreview">
          <p>Suchresultat-Seite</p>
          <!-- Bootstrap Modal 3 Anfang -->
          <div id="ModalHighlight" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
              <h3 id="myModalLabel"></h3>
            </div>
            <div class="modal-body">
              <img src="img/car_overlays/fullsize/car_highlight.jpg" style="margin:auto;"/>
            </div>
            <div class="modal-footer">
              <button class="btn" data-dismiss="modal">Schliessen</button>
            </div>
          </div>
          <!-- Bootstrap Modal 3 Ende -->
          <img data-toggle="modal" href="#ModalHighlight" class="specialHover" src="img/car_overlays/tnails/car_highlight.jpg" width="328" height="209" />
        </div>
      <div></div>
      </div>
      <div></div>
      
    </div>
   </fieldset>

</form>

<div class="form-actions">
    <a href="step6.php" class="btn btn-primary pull-right" id="prelogin">Weiter & Anmelden</a>
</div>

<div id="modalLogin" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Auf ricardo.ch einloggen</h3>
	</div>
	<div class="modal-body">
	<!-- Modal-Body Start-->
  	<p>Um den nächsten Schritt abschliessen zu können müssen Sie angemeldet sein. Logen Sie sich dazu ein oder erstellen Sie ein neues Benutzerkonto.</p>
	
		<section id="it_LoginSection" class="it_logForm">
    	<form action="step6.php">
        <dl>
          <dt><label for="uxNickName">Benutzername</label></dt>
          <dd><input type="text" class="it_inputField" tabindex="10" id="uxNickName" name="ctl00$ctl00$SiteContent$MasterContent$LoginForm1$uxNickName"></dd>
          <dt><label for="uxPassword">Passwort</label></dt>
          <dd><input type="password" class="it_inputField" tabindex="11" id="uxPassword" name="ctl00$ctl00$SiteContent$MasterContent$LoginForm1$uxPassword"></dd>
          <dt></dt>
          <dd><input type="checkbox" tabindex="12" checked="checked" id="it_checkboxInp" class="it_inputField"><label for="it_checkboxInp" class="it_txtRemember">Benutzername speichern</label></dd>
          <dt></dt>
          <dd><input type="submit" class="validButton btn btn-primary" id="uxSendLogin" value="Login"></dd>
        </dl>
      </form>
			<a href="http://auto.ch.betaqxl.com/form/lostpassword.asp" target="_blank">Benutzername und/oder Passwort vergessen?</a>
		</section>
		<section id="it_RegisterSection">
			<h4>Noch kein Benutzerkonto?</h4>
      <ol>
      	<li>Jetzt registrieren.</li>
      	<li>Wir prüfen Ihre Registrierung und schalten Sie innerhalb von 48 Stunden frei.</li>
      	<li>Ihr erfasstes Angebot wird in der Zwischenzeit gespeichert.</li>
      </ol>
			<a href="https://www.ricardo.ch/registration/" class="hpcButton hpcBlue btn btn-darkblue" target="_blank">Jetzt registrieren</a><!--11888-->
		</section>
	
	<!-- Modal-Body End-->
	<span class="clear"></span>
	</div>
	<!--<div class="modal-footer">
		<a href="#" class="btn">Close</a>
		<a href="#" class="btn btn-primary">Save changes</a>
	</div>-->
</div>

<?php $Layout -> end(); ?>