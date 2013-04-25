<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Preis und Dauer des Angebots einstellen</h2>

<form>
    <section class="section">
        <fieldset class="row-fluid" id="listingType">
            <div class="span12 well">
                <label for="auctionType"> Auktionsart </label>
                <div class="btn-group">
                    <input class="toggle" type="radio" name="toggle" id="toggle-auction" value="option1" checked>
                    <label class="btn" for="toggle-auction">Auktion</label>
                    <input class="toggle" type="radio" name="toggle" id="toggle-fixedPriceOffer" value="option2">
                    <label class="btn" for="toggle-fixedPriceOffer">Fixpreis</label>
                </div>
            </div>
        </fieldset>
        <fieldset class="row-fluid" id="listingStartPrice">
            <div class="span12 well">
                <label for="auctionStartPrice"> Startpreis </label>
                <div class="row-fluid">
                    <div class="span3">
                        <div class="input-prepend">
                            <span class="add-on">CHF</span>
                            <input class="span10" id="inputStartPrice" type="text" placeholder="Startpreis setzen">
                        </div>
                    </div>
                    <div class="span9">
                        <a href="#" class="btn btn-link">Fügen Sie eine Sofortkaufen-Option hinzu</a><small class="label label-warning">+ CHF 1.00</small>
                    </div>
                </div>
                <label for="auctionIncrementPrice"> Erhöhungsschritt </label>
                <div class="input-prepend">
                    <span class="add-on">CHF</span>
                    <input class="span10" id="inputIncrementPrice" type="text" value="0.05">
                </div>
            </div>
        </fieldset>
        <fieldset class="row-fluid" id="listingPaymentConditions">
            <div class="span12 well">
                <label for="paymentConditions"> Akzeptierte Zahlungsbedingungen </label>
                <label class="checkbox inline checkbox-label-btn btn">
                    <input type="checkbox" checked>
                    Zahlung im Voraus </label>
                <label class="checkbox inline checkbox-label-btn btn">
                    <input type="checkbox">
                    Zahlung bei Abholung </label>
                <label class="checkbox inline checkbox-label-btn btn">
                    <input type="checkbox">
                    Zahlung auf Rechnung </label>
            </div>
        </fieldset>
        <fieldset id="listingPaymentMethods" class="well">
            <div class="row-fluid">
                <div class="span12">
                    <label for="paymentConditions"> Akzeptierte Zahlungsmittel </label>
                    <label class="checkbox inline checkbox-label-btn btn-ricardoPay btn">
                        <input type="checkbox" checked>
                        RicardoPay </label>
                    <label class="checkbox inline checkbox-label-btn btn">
                        <input type="checkbox">
                        Bank / Post </label>
                    <label class="checkbox inline checkbox-label-btn btn">
                        <input type="checkbox">
                        Bar </label>
                </div>
            </div>
            <div class="row-fluid section">
                <div class="span12">
                    <a id="add-additional-payment-notes" data-toggle="collapse" data-target="#additional-payment-notes" class="btn btn-link">Zusätzliche Bemerkungen zu den Zahlungsmitteln</a><small class="muted">(optional)</small>
                </div>
            </div>
            <div class="row-fluid collapse" id="additional-payment-notes">
                <textarea class="span6" rows="3" placeholder="Fügen Sie hier zusätliche Bemerkungen ein"></textarea>
            </div>
        </fieldset>
    </section>
    <section class="section">
        <fieldset class="well" id="listingStartTimeAndDuration">
            <div class="row-fluid">
                <div class="span4">
                    <label for="startTime"> Startzeit </label>
                    <div class="row-fluid">
                        <div id="datetimepicker" class="input-append date">
                            <input id="startTime" data-format="dd.MM.yyyy hh:mm" type="text" placeholder="sofort">
                            <span class="add-on"> <i class="icon-calendar" data-time-icon="icon-time" data-date-icon="icon-calendar"> </i> </span>
                        </div>
                    </div>
                </div>
                <div class="span2">
                    <label for="duration">Dauer</label>
                    <input id="duration" type="text" class="input-small">
                </div>
                <div class="span6">
                    <div class="noUiSlider"></div>
                </div>
            </div>
        </fieldset>
        <fieldset class="row-fluid" id="listingsReactivation">
            <div class="span12 well">
                <label for="reactivationOption"> Wie oft soll ihr Angebot bei Enden ohne Gebot reaktiviert werden? </label>
                <select class="span1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                </select>
                <span class="help-inline">reaktivieren</span>
            </div>
        </fieldset>
    </section>
</form>

<div class="form-actions">
    <a href="step4.php" class="btn btn-primary">Weiter zu "Versandoptionen"</a><span class="separator muted">
</div>
<?php $Layout -> end(); ?>