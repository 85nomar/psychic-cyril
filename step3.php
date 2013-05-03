<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Preis und Dauer des Angebots einstellen</h2>

<form>
    <section class="section">
        <fieldset id="listingType" class="well">
            <div class="row-fluid">
                <div class="span12">
                    <label for="auctionType">
                        Wählen Sie, wie Sie Ihr Produkt anbieten möchten
                    </label>
                        <input class="toggle" type="radio" name="toggle" id="toggle-auction" value="option1" data-target="#auctionPricing" checked>
                        <label class="btn" for="toggle-auction">
                            Auktion
                        </label>
                         oder 
                        <input class="toggle" type="radio" name="toggle" id="toggle-fixedPriceOffer" data-target="#fixedPricePricing" value="option2">
                        <label class="btn" for="toggle-fixedPriceOffer">
                            Fixpreis-Angebot
                        </label>

                </div>
            </div>
            <div id="auctionPricing" class="section collapse in">
                <label for="auctionStartPrice">
                    Startpreis
                </label>
                <div class="row-fluid">
                    <div class="span3">
                        <div class="input-prepend">
                            <span class="add-on">CHF</span>
                            <input class="span10" id="inputStartPrice" type="text" placeholder="Startpreis setzen">
                        </div>
                    </div>
                    <div class="span9">
                        <a href="#" class="btn btn-link" data-toggle="collapse" data-target="#buyNowSection">Fügen Sie eine Sofortkaufen-Option hinzu</a><small class="label label-warning">+ CHF 1.00</small>
                    </div>
                </div>
                <div class="row-fluid">
                    <div class="span3">
                        <label for="auctionIncrementPrice">
                            Erhöhungsschritt
                        </label>
                        <div class="input-prepend">
                            <span class="add-on">CHF</span>
                            <input class="span10" id="inputIncrementPrice" type="text" value="0.05">
                        </div>
                    </div>
                    <div class="span9">
                        <div class="collapse" id="buyNowSection">
                            <label for="buyNowPrice">
                                Sofort-Kaufen-Preis
                            </label>
                            <div class="input-prepend">
                                <span class="add-on">CHF</span>
                                <input class="span10" id="buyNowPrice" type="text" placeholder="Sofort-Kaufen-Preis">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fixedPricePricing" class="row-fluid section collapse">
                <div class="span12">
                    <label for="fixedPrice">
                        Sofort-Kaufen-Preis
                    </label>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="input-prepend">
                                <span class="add-on">CHF</span>
                                <input class="span10" id="fixedPrice" type="text" placeholder="Sofort-Kaufen-Preis">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="row-fluid" id="listingPaymentConditions">
            <div class="span12 well">
                <label for="paymentConditions">
                    Akzeptierte Zahlungsbedingungen
                </label>
                <label class="checkbox inline checkbox-label-btn btn">
                    <input type="checkbox" checked>
                    Zahlung im Voraus
                </label>
                <label class="checkbox inline checkbox-label-btn btn">
                    <input type="checkbox">
                    Zahlung bei Abholung
                </label>
                <label class="checkbox inline checkbox-label-btn btn">
                    <input type="checkbox">
                    Zahlung auf Rechnung
                </label>
            </div>
        </fieldset>
        <fieldset id="listingPaymentMethods" class="well">
            <div class="row-fluid">
                <div class="span12">
                    <label for="paymentConditions">
                        Akzeptierte Zahlungsmittel
                    </label>
                    <label class="checkbox inline checkbox-label-btn btn">
                        <input type="checkbox" checked>
                        RicardoPay
                    </label>
                    <label class="checkbox inline checkbox-label-btn btn">
                        <input type="checkbox">
                        Bank / Post
                    </label>
                    <label class="checkbox inline checkbox-label-btn btn">
                        <input type="checkbox">
                        Bar
                    </label>
                </div>
            </div>
            <div class="row-fluid section">
                <div class="span12">
                    <a id="add-additional-payment-notes" data-toggle="collapse" data-target="#additional-payment-notes" class="btn btn-link">Zusätzliche Bemerkungen zu den Zahlungsmitteln</a><small class="muted">(optional)</small>
                </div>
            </div>
            <div class="row-fluid collapse" id="additional-payment-notes">
                <textarea class="span6" rows="3" placeholder="Erwähnen Sie hier z.B, wenn Sie zusätzliche Gebühren für Postüberweisungen erheben"></textarea>
            </div>
        </fieldset>
    </section>
    <section class="section">
        <fieldset class="well" id="listingStartTimeAndDuration">
            <div class="row-fluid">
                <div class="span4">
                    <label for="startTime">
                        Startzeit
                    </label>
                    <div class="row-fluid">
                        <div id="dateStartTimePicker" class="input-append date">
                            <input id="startTime" data-format="dd.MM.yyyy hh:mm" type="text" placeholder="sofort">
                            <span class="add-on"> <i class="icon-calendar" data-time-icon="icon-time" data-date-icon="icon-calendar"> </i> </span>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <label>
                        Dauer
                    </label>
                    <div class="noUiSlider"></div>
                </div>
                <div class="span4">
                    <label for="endDate">
                        End-Datum
                    </label>
                    <div class="row-fluid">
                        <div id="dateEndTimePicker" class="input-append date">
                            <input id="endTime" data-format="dd.MM.yyyy hh:mm" type="text">
                            <span class="add-on"> <i class="icon-calendar" data-time-icon="icon-time" data-date-icon="icon-calendar"> </i> </span>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        <fieldset class="row-fluid" id="listingsReactivation">
            <div class="span12 well">
                <label for="reactivationOption">
                    Wie oft soll ihr Angebot bei Enden ohne Gebot reaktiviert werden?
                </label>
                <select class="span1">
                    <option selected>0</option>
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
    <a href="step4.php" class="btn btn-primary pull-right">Weiter zu "Versandoptionen"</a>
</div>
<?php $Layout -> end(); ?>