<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Wie möchten Sie Ihren Artikel bewerben?</h2>

<form>
    <fieldset class="well">
        <div class="row-fluid">
            <div class="span4">
                <label class="btn checkbox-label-btn-promoFeature"> <h6>Top-Angebot Startseite</h6> <span class="promoFeature-subTeaser">200x mehr Besucher</span>
                    <div class="row-fluid">
                        <p class="span8">
                            Ihr Angebot erscheint auf der Startseite von ricardo.ch
                        </p>
                        <img class="promo-img span4" src="img/crowd_5x.png">
                    </div>
                    <input type="checkbox">
                    <span class="promoFeature-costs">CHF 40.00</span> </label>
            </div>
        </div>
    </fieldset>
        <fieldset class="well">
        <div class="row-fluid">
            <div class="span4">
                <label class="btn checkbox-label-btn-promoFeature"> <h6>Gallerie-Angebot bronze</h6> <span class="promoFeature-subTeaser">10x mehr Besucher</span>
                    <div class="row-fluid">
                        <p class="span8">
                            Ihr Angebot erscheint in allen Gallerie-Promotionen
                        </p>
                        <img class="promo-img span4" src="img/crowd_5x.png">
                    </div>
                    <input type="radio" name="categoryFeature">
                    <span class="promoFeature-costs">CHF 5.00</span> </label>
            </div>
            <div class="span4">
                <label class="btn checkbox-label-btn-promoFeature"> <h6>Gallerie-Angebot silber</h6> <span class="promoFeature-subTeaser">20x mehr Besucher</span>
                    <div class="row-fluid">
                        <p class="span8">
                            Ihr Angebot erscheint in allen Gallerie-Promotionen
                        </p>
                        <img class="promo-img span4" src="img/crowd_5x.png">
                    </div>
                    <input type="radio" name="categoryFeature">
                    <span class="promoFeature-costs">CHF 20.00</span> </label>
            </div>
            <div class="span4">
                <label class="btn checkbox-label-btn-promoFeature"> <h6>Gallerie-Angebot gold</h6> <span class="promoFeature-subTeaser">40x mehr Besucher</span>
                    <div class="row-fluid">
                        <p class="span8">
                            Ihr Angebot erscheint in allen Gallerie-Promotionen
                        </p>
                        <img class="promo-img span4" src="img/crowd_5x.png">
                    </div>
                    <input type="radio" name="categoryFeature">
                    <span class="promoFeature-costs">CHF 30.00</span> </label>
            </div>
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
			<a href="http://auto.ch.betaqxl.com/form/lostpassword.asp">Benutzername und/oder Passwort vergessen?</a>
		</section>
		<section id="it_RegisterSection">
			<h4>Noch keinen Account?<br>Jetzt anmelden.</h4>
      <p>Ihr Artikel wird in Ihrem neuen Benutzer-Profil unter</p>
      <p align="center" class="well"><strong>MyRicardo <i class="icon-chevron-right"></i> Mein verkaufen <i class="icon-chevron-right"></i> geplante Angebote</span></strong></p>
      <p>gespeichert.</p>
			<a href="https://www.ricardo.ch/registration/" class="hpcButton hpcBlue btn btn-darkblue">Jetzt registrieren</a><!--11888-->
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