<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Wie möchten Sie Ihren Artikel bewerben?</h2>

<form>
	<fieldset id="adWindow" class="well">
    <div class="row-fluid">
      <div class="span3">
        <label>Wie oft soll Ihr Artikel im Werbefenster angezeigt werden?</label>
        <div>
          <div class="option optDisable">
            <label for="none">
              <input type="radio" name="adWindow" value="none" id="none" checked="checked" />
              <i class="icon-ok icon-white"></i>
              <span class="value">nie</span>
             </label>
          </div>
          <div class="option">
            <label for="bronce">
              <input type="radio" name="adWindow" value="bronce" id="bronce" />
              <i class="icon-ok icon-white"></i>
              <span class="value">selten (Bronze)</span>
              <img src="img/push01.png" width="75" height="55" /></label>
          </div>
          <div class="option">
            <label for="silver">
              <input type="radio" name="adWindow" value="silver" id="silver" />
              <i class="icon-ok icon-white"></i>
              <span class="value">oft (Silber)</span>
              <img src="img/push05.png" width="75" height="55" /></label>
          </div>
          <div class="option">
            <label for="gold">
              <input type="radio" name="adWindow" value="gold" id="gold" />
              <i class="icon-ok icon-white"></i>
              <span class="value">sehr oft (Gold)</span>
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
              <p>Werbefenster</p>
              <h2 class="optionName">Kein Werbefenster</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 0.00</p>
              <p><strong>Ihr Artikel wird NICHT im attraktiven Werbefenster angezeigt.</strong></p>
            </div>
          
            <div id="optionTypeBronce" class="item description">
              <i class="sash"><img src="img/schleife_bronze.png" width="53" height="54" /></i>
              <img class="bigPic" src="img/push01_big.png" width="39" height="86" />
              <p>Werbefenster</p>
              <h2 class="optionName">Bronze</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 2.00</p>
              <p><strong>Der Artikel erscheint ab und zu im Werbefenster</strong></p>
              <ol>
                <li>Ihr Artikel wird attraktiv im Webefenster zuoberst auf der Artikel-Seite angezeigt.</li>
                <li>Das gebuchte Werbefenster wird rotierend eingesetzt.</li>
                <li>Sie können den Interval der Einblendungen selber auswählen (Gold, Silber, Bronze)</li>
              </ol>
            </div>
          
            <div id="optionTypeSilver" class="item description">
              <i class="sash"><img src="img/schleife_silver.png" width="53" height="54" /></i>
              <img class="bigPic" src="img/push05_big.png" width="104" height="86" align="right" />
              <p>Werbefenster</p>
              <h2 class="optionName">Silber</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 15.00</p>
              <p><strong>Der Artikel erscheint 5x öfters als beim Werbefenster Bronze</strong></p>
              <ol>
                <li>Ihr Artikel wird attraktiv im Webefenster zuoberst auf der Artikel-Seite angezeigt.</li>
                <li>Das gebuchte Werbefenster wird rotierend eingesetzt.</li>
                <li>Sie können den Interval der Einblendungen selber auswählen (Gold, Silber, Bronze)</li>
              </ol>
            </div>
          
            <div id="optionTypeGold" class="item description">
              <i class="sash"><img src="img/schleife_gold.png" width="53" height="54" /></i>
              <img class="bigPic" src="img/push20_big.png" width="104" height="86" align="right" />
              <p>Werbefenster</p>
              <h2 class="optionName">Gold</h2>
              <p class="optionPrice"><span class="currency">CHF</span> 5.00</p>
              <p><strong>Der Artikel erscheint 20x öfters als beim Werbefenster Bronze</strong></p>
              <ol>
                <li>Ihr Artikel wird attraktiv im Webefenster zuoberst auf der Artikel-Seite angezeigt.</li>
                <li>Das gebuchte Werbefenster wird rotierend eingesetzt.</li>
                <li>Sie können den Interval der Einblendungen selber auswählen (Gold, Silber, Bronze)</li>
              </ol>
            </div>            
            
          </div>
         </div>
        <div class="span6 optionPreview">
          <p>So wirds Aussehen:</p>
          <img src="img/TopOffers_2nd_Level_top_prototyp_iphone.jpg" width="328" height="263" />
        </div>
      <div></div>
      </div>
      <div></div>
      
    </div>
   </fieldset>
  <fieldset id="adHomepage" class="well">
    <div class="row-fluid">
      <div class="span3">
        <label>Soll Ihr Artikel auf der ricardo-Startseite angezeigt werden?</label>
        <div>
          <div class="option optDisable">
            <label for="none">
              <input type="radio" name="adHomepage" value="1" id="none" />
              <i class="icon-ok icon-white"></i>
              <span class="value">Top Angebot Homepage</span>
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
          <p>So wirds Aussehen:</p>
          <img src="img/hp_promo_prototype_iphone.jpg" width="328" height="209" />
        </div>
      <div></div>
      </div>
      <div></div>
      
    </div>
   </fieldset>
</form>

<div class="form-actions">
    <a href="step6.php" class="btn btn-primary pull-right" id="prelogin">Weiter zu "Zusammenfassung"</a>
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
			<h4>Noch keine Benutzerkonto?</h4>
      <ol>
      	<li>Jetzt registrieren.</li>
      	<li>Wir prüfen Ihre Registrierung und schalten Sie innerhalb von 48 Stunden frei.</li>
      	<li>Ihr erfasstes Angebot wirde in der Zwischenzeit gespeichert.</li>
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