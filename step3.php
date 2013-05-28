<?php
require ('inc/layout.php');
require ('inc/layout_cb.php');
$Layout -> title = 'Selling';
$Layout -> start();
$Layout_cb -> nav_cb();
?>

<h2>Wie möchten Sie Ihr Produkt verkaufen?</h2>

<form>
    <section class="section">
        <fieldset id="listingType" class="well">
            <div class="row-fluid">
                <div class="span12">
                    <label for="auctionType">Wie möchten Sie Ihr Produkt verkaufen?</label>

                    <input class="toggle" type="radio" name="toggle" id="toggle-auction" value="option1" data-target="#auctionPricing" checked>
                    <label class="btn span3" for="toggle-auction"> <i class="icon-select"></i> <h4>Auktion</h4>
                        <ul>
                            <li>
                                Der Markt bestimmt den Preis
                            </li>
                            <li>
                                Mitreissendes Kauferlebnis
                            </li>
                            <li>
                                Höhere Verkaufschancen
                            </li>
                        </ul> </label>

                    <span class="seperator"> oder </span>

                    <input class="toggle" type="radio" name="toggle" id="toggle-fixedPriceOffer" data-target="#fixedPricePricing" value="option2">
                    <label class="btn span3" for="toggle-fixedPriceOffer"> <i class="icon-select"></i> <h4 class="core accessory">Fixpreis-Angebot</h4><h4 class="cars">Anzeige</h4>
                        <ul>
                            <li>
                                Sie bestimmen den Preis
                            </li>
                            <li>
                                Konventionelles Kauferlebnis
                            </li>
                            <li>
                                Geringere Verkaufschancen
                            </li>
                        </ul> </label>

                </div>
            </div>
            <div id="auctionPricing" class="row-fluid">
                <div class="span3">
                    <label for="auctionStartPrice">Startpreis <i class="icon-info-sign" data-toggle="tooltip" data-placement="right" title="Legen Sie einen Startpreis für die Auktion fest. Wenn Sie beispielsweise einen Startpreis von CHF 5.00 festlegen, muss das erste Gebot mindestens CHF 5.00 betragen."></i></label>
                    <div class="input-prepend">
                        <span class="add-on">CHF</span>
                        <input class="span10" id="inputStartPrice" type="text" placeholder="Startpreis setzen">
                    </div>
                </div>
                <div class="span3">
                    <label for="auctionIncrementPrice">Erhöhungsschritt <i class="icon-info-sign" data-toggle="tooltip" data-placement="right" title="Legen Sie selbst fest in welchen Schritten geboten werden darf."></i></label>
                    <div class="input-prepend">
                        <span class="add-on">CHF</span>
                        <input class="span10" id="inputIncrementPrice" type="text" value="0.05">
                    </div>
                </div>
                <div class="span6">
                    <label for="buyNowPrice">Sofort-Kaufen-Preis <span class="optionalField">(optional)</span> <i class="icon-info-sign" data-toggle="tooltip" data-placement="right" title="Mit der „Sofortkaufen“ Option können Sie einen fixen Wunsch-Preis festlegen. Somit kann ein Käufer der auf das Risiko einer Auktion verzichten möchte  den Artikel sofort kaufen."></i></label>
                    <div class="input-prepend">
                        <span class="add-on">CHF</span>
                        <input class="span10" id="buyNowPrice" type="text" placeholder="Sofort-Kaufen-Preis">
                    </div>
                    <span class="optionWithCosts">Kostenpflichtig: CHF 0.60</span>
                </div>
            </div>
            <div id="fixedPricePricing" class="row-fluid">
                <div class="span12">
                    <label for="fixedPrice">Preis <i class="icon-info-sign" data-toggle="tooltip" data-placement="right" title="Legen Sie einen Preis fest und verkaufen Sie den Artikel direkt an den ersten Käufer."></i></label>
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="input-prepend">
                                <span class="add-on">CHF</span>
                                <input class="span10" id="fixedPrice" type="text" placeholder="Preis">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>

        <fieldset class="well" id="listingStartTimeAndDuration">
            <div class="row-fluid">
                <div class="span4">
                    <label for="startTime"> Start </label>
                    <div class="row-fluid">
                        <div id="dateStartTimePicker" class="input-append date">
                            <input id="startTime" data-format="dd.MM.yyyy hh:mm" type="text" placeholder="sofort">
                            <span class="add-on"> <i class="icon-calendar" data-time-icon="icon-time" data-date-icon="icon-calendar"> </i> </span>
                        </div>
                    </div>
                </div>
                <div class="span4">
                    <label for="Dauer"> Dauer </label>
                    <div class="noUiSlider"></div>
                    <div class="stepLabels">
                        <span class="one">1T</span>
                        <span class="three">3T</span>
                        <span class="five">5T</span>
                        <span class="seven">7T</span>
                        <span class="ten">10T</span>
                    </div>
                </div>
                <div class="span4">
                    <label for="endDate"> Ende </label>
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
                <label for="reactivationOption">Wie häufig soll Ihr Artikel reaktiviert werden?</label>
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
                <span class="help-inline">reaktivieren <span class="optionalField">(optional)</span> <i class="icon-info-sign" data-toggle="tooltip" data-placement="right" title="Falls Ihr Artikel in der von Ihnen gewählten Dauer nicht verkauft werden sollte, wird der Artikel automatisch wieder reaktiviert.  Dabei entstehen wiederholt Einstellgebühren."></i></span>
            </div>
        </fieldset>
        <fieldset class="well" id="listingPaymentConditions">
            <div class="row-fluid">
                <!--<aside class="span3 ricardopay-info-box">
                    <p><img title="ricardopay – einfach sicher" style="margin: 0" alt="ricardopay – einfach sicher" src="img/ricardo-pay.png">
                    </p>
                    <p>
                        <a href="#" id="ricardopayInfo">Wie funktioniert ricardopay?</a>
                    </p>
                </aside>-->
                <div class="span12">

                    <label for="paymentConditions">Zu welchem Zeitpunkt möchten Sie, dass der Kunde bezahlt?</label>
                    <div class="row-fluid">
                        <div class="span6 option-group">
                            <h4>Zahlung im Voraus</h4>
                            <div class="span12">
                                <div class="btn span6" style="float:left"> 
                                    <i class="icon-select"></i>
                                    <img title="ricardopay – einfach sicher" style="margin: 0" alt="ricardopay – einfach sicher" src="img/ricardo-pay.png"><br />
                                    <small>Käuferschutz bis CHF 500.-</small>
                                    <br />
                                    <ul class="ricardoPayList">
                                        <li><small class="smaller">Per Rechnung</small></li>
                                        <li><small class="smaller">Per ricardo-Guthaben</small></li>
                                        <li><small class="smaller">Per Kreditkarte:</small></li>
                                    </ul>
                                    <img src="img/creditcards.png" />
                                </div>
                                <div class="btn span6" style="float:right">
                                    <i class="icon-select"></i>
                                    Bank / Post
                                    <br />
                                    <small>(2-3 Tage)</small>
                                </div>
                            </div>
                        </div>
                        <div class="span3 option-group">
                            <h4>Zahlung bei Abholung</h4>
                            <div class="span12">
                                <div class="btn span12">
                                    <i class="icon-select"></i>
                                    Barzahlung
                                </div>
                            </div>
                        </div>
                        <div class="span3 option-group">
                            <h4>Sonstige</h4>
                            <div class="span12 likeDescription">
                                <div class="btn span12">
                                    Gemäss Beschreibung
                                    <textarea></textarea>
                                </div>
                            </div>
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
                </div>
            </div>
        </fieldset>

    </section>
</form>

<div class="form-actions">
    <a href="step4.php" class="btn btn-primary pull-right core asseccory">Weiter zu &laquo;<?php echo $Layout->formNav[3]["title"]; ?>&raquo;</a>
    <a href="step5.php" class="btn btn-primary pull-right cars">Weiter zu &laquo;<?php echo $Layout_cb->formNav[4]["title"]; ?>&raquo;</a>
</div>

<div id="modalRicardoPay" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;
        </button>
        <img src="img/ricardo-pay.png">
    </div>
    <div class="modal-body">
        <!-- Modal-Body Start-->
        <div class="row-fluid">
            <div class="span6">
                <h3>Wie funktioniert RicardoPay?</h3>
                <ol>
                    <li>
                        Sie bieten RicardoPay als Zahlungsoption an
                    </li>
                    <li>
                        Der Käufer zahlt per ricardopay-Guthaben, Kreditkarte oder Rechnung
                    </li>
                    <li>
                        Sie erhalten sofort eine E-Mail oder SMS, dass der Käufer bezahlt hat
                    </li>
                    <li>
                        Das Geld wird sofort auf Ihr ricardo.ch Konto oder ihr eigenes Bankkonto überwiesen
                    </li>
                </ol>
            </div>
            <div class="span6">
                <h3>Kostenlos</h3>
                <ul>
                    <li>
                        RicardoPay ist für den Verkäufer kostenlos
                    </li>
                    <li>
                        <p>
                            Die Käufer zahlen 0-2% Zahlungsgebühren je nach gewählter Zahlungsmethode:
                        </p>
                        <table class="table table-striped" style="width:auto;">
                            <tr>
                                <td>ricardopay-Guthaben:</td><td>Keine Gebühren</td>
                            </tr>
                            <tr>
                                <td>Kreditkarte:</td><td>2% Gebühr</td>
                            </tr>
                            <tr>
                                <td>Postfinance Card:</td><td>1% Gebühr</td>
                            </tr>
                            <tr>
                                <td>Rechnung:</td><td>1% Gebühr</td>
                            </tr>
                        </table>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Modal-Body End-->
        <span class="clear"></span>
    </div>
    <!--<div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
    </div>-->
</div>

<?php $Layout->end();
?>