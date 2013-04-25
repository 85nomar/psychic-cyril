<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Promotions-Optionen auswählen</h2>

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
    <a href="step6.php" class="btn btn-primary">Weiter zu "Zusammenfassung"</a>
</div>
<?php $Layout -> end(); ?>