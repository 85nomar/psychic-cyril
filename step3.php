<?php
require ('inc/layout.php');
$Layout->title='Selling';
$Layout->start();
?>

<h2>Preis und Dauer des Angebots einstellen</h2>

<form>
    <section class="section">
        <fieldset id="listingType" class="well">
            <div class="row-fluid">
                <div class="span12">
                    <label for="auctionType">Wie möchten Sie Ihr Produkt verkaufen?</label>
                    
                    <input class="toggle" type="radio" name="toggle" id="toggle-auction" value="option1" data-target="#auctionPricing" checked>
                    <label class="btn span3" for="toggle-auction">
                    	<i class="icon-remove"></i>
                      <h4>Auktion</h4>
                      <ul>
                        <li>Der Markt bestimmt den Preis</li>
                        <li>Mitreissendes Kauferlebnis</li>
                        <li>Höhere Verkaufschancen </li>
                      </ul>
                    </label>
                    
                    <span class="seperator"> oder </span>
                    
                    <input class="toggle" type="radio" name="toggle" id="toggle-fixedPriceOffer" data-target="#fixedPricePricing" value="option2">
                    <label class="btn span3" for="toggle-fixedPriceOffer">
                    	<i class="icon-remove"></i>
                      <h4>Fixpreis-Angebot</h4>
                      <ul>
                        <li>Sie bestimmen den Preis</li>
                        <li>Konventionelles Kauferlebnis</li>
                        <li>Geringere Verkaufschancen</li>
                      </ul>
                    </label>

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
                                <input class="span10" id="fixedPrice" type="text" placeholder="Sofort-Kaufen-Preis">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </fieldset>
        
        <fieldset class="well" id="listingPaymentConditions">
            <div class="row-fluid">
                <label for="paymentConditions">Welche Zahlungsarten möchten Sie anbieten?</label>
                  <div class="span3 option-group">
                      <h4>Zahlung im Voraus</h4>
                      <div>
                       <button class="btn" data-toggle="tooltip" data-placement="right" title="Zahlungsmöglichkeiten: Mit Guthaben, Per Kreditkarte (Visa/MasterCard), PostFinance, Per Rechnung"><i class="icon-remove"></i>RicardoPay</button>
                       <button class="btn"><i class="icon-remove"></i>Bank / Post</button>
                      </div>
                  </div>
                  <div class="span3 option-group">
                      <h4>Zahlung bei Abholung</h4>
                      <div>
                       <button class="btn"><i class="icon-remove"></i>Barzahlung</button>
                      </div>
                  </div>
                  <div class="span3 option-group">
                      <h4>Zahlung auf Rechnung</h4>
                      <div>
                       <button class="btn" data-toggle="tooltip" data-placement="right" title="Zahlungsmöglichkeiten: Mit Guthaben, Per Kreditkarte (Visa/MasterCard), PostFinance, Per Rechnung"><i class="icon-remove"></i>RicardoPay</button>
                       <button class="btn"><i class="icon-remove"></i>Bank / Post</button>
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
            <aside>
              <p><img title="ricardopay – einfach sicher" style="margin: 0" alt="ricardopay – einfach sicher" src="https://ricardopay.betaqxl.com/Content/img/logo-small.png"></p>
              <p><strong>Vorteile</strong></p>
              <ul>
               <li>ricardopay ist gratis </li>
               <li>Verkäuferschutz</li>
               <li>Zahlungseingang innerhalb von 48 Stunden</li>
               <li>Weniger Adminstrationsaufwand</li>
              </ul>              
              <p><a href="https://ricardopay.betaqxl.com">Mehr zu ricardopay</a></p>
            </aside>
        </fieldset>
    </section>
    <section class="section">
        <fieldset class="well" id="listingStartTimeAndDuration">
            <div class="row-fluid">
                <div class="span4">
                    <label for="startTime"> Startzeit </label>
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
                        <span>1d</span>
                        <span>5d</span>
                        <span>10d</span>
                    </div>
                </div>
                <div class="span4">
                    <label for="endDate"> End-Datum </label>
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
    </section>
</form>

<div class="form-actions">
    <a href="step4.php" class="btn btn-primary pull-right">Weiter zu "Versandoptionen"</a>
</div>
<?php $Layout->end(); ?>