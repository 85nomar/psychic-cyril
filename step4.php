<?php
require ('inc/layout.php');
require ('inc/layout_cb.php');
$Layout -> title = 'Selling';
$Layout -> start();
$Layout_cb -> nav_cb();
?>

<h2>Wie erreicht der verkaufte Artikel den Käufer?</h2>

<fieldset class="section well">
    <label for="inputShippingMethod"> Versandarten</label>
    <div class="row-fluid js-shipping-element">
        <div class="span12">

            <form action="#" method="post" class="form-inline">
                <select name="inputShippingMethod" class="js-shipping-method">
                    <option value="-1" selected="selected">Versandart wählen ...</option>
                    <option value="1" data-target="js-shipping-letter-priority-type">Brief A-Post</option>
                    <option value="2" data-target="js-shipping-letter-economy-type">Brief B-Post</option>
                    <option value="3" data-target="js-shipping-package-priority-weight">Paket A-Post</option>
                    <option value="4" data-target="js-shipping-package-economy-weight">Paket B-Post</option>
                    <option value="5" data-price="5.00">Einschreiben</option>
                    <option value="6" data-price="18.00">Nachnahme (nur für Firmen möglich)</option>
                    <option value="7" data-price="...">Spediteur</option>
                    <option value="8" data-price="...">Kurier</option>
                    <option value="9" data-price="...">Versand aus dem Ausland</option>
                    <option value="10" data-price="0.00">Abholung durch Käufer</option>
                    <option value="11" data-price="...">Lieferung durch Verkäufer</option>
                    <option value="12" data-target="js-shipping-custom">Andere Versandart ...</option>
                </select>
                <select name="ShippingLetterTypeB" class="select-wide js-shipping-letter-economy-type js-shipping-addon hide">
                    <option value="1" data-price="0.85" selected="selected">Standardbrief (bis B5 / bis 100g)</option>
                    <option value="2" data-price="1.10">Midibrief (bis B5 / 101 bis 250g)</option>
                    <option value="3" data-price="1.80">Grossbrief (bis B4 / bis 500g)</option>
                    <option value="4" data-price="3.60">Grossbrief (bis B4 / 501 bis 1000g)</option>
                </select>
                <select name="ShippingLetterTypeA" class="select-wide js-shipping-letter-priority-type js-shipping-addon hide">
                    <option value="1" data-price="1.00" selected="selected">Standardbrief (bis B5 / bis 100g)</option>
                    <option value="2" data-price="1.30">Midibrief (bis B5 / 101 bis 250g)</option>
                    <option value="3" data-price="2.00">Grossbrief (bis B4 / bis 500g)</option>
                    <option value="4" data-price="4.00">Grossbrief (bis B4 / 501 bis 1000g)</option>
                </select>
                <select name="ShippingPackageTypeA" class="js-shipping-package-priority-weight js-shipping-addon hide">
                    <option value="1" data-price="9.00" selected="selected">Paket bis 2 kg</option>
                    <option value="2" data-price="11.00">Paket bis 5 kg</option>
                    <option value="3" data-price="12.00">Paket bis 10 kg</option>
                    <option value="4" data-price="18.00">Paket bis 20 kg</option>
                    <option value="5" data-price="25.00">Paket bis 30 kg</option>
                </select>
                <select name="ShippingPackageTypeB" class="js-shipping-package-economy-weight js-shipping-addon hide">
                    <option value="1" data-price="7.00" selected="selected">Paket bis 2 kg</option>
                    <option value="2" data-price="9.00">Paket bis 5 kg</option>
                    <option value="3" data-price="10.00">Paket bis 10 kg</option>
                    <option value="4" data-price="15.00">Paket bis 20 kg</option>
                    <option value="5" data-price="22.00">Paket bis 30 kg</option>
                </select>
                <input name="ShippingCustom" class="js-shipping-custom js-shipping-addon hide" placeholder="Hier Versandart eintragen">
                <div class="js-shipping-costs form-inline-component hide">
                    <div class="input-prepend">
                        <span class="add-on">CHF</span>
                        <input class="inputShippingCosts js-input-shipping-costs input-number" name="inputShippingCosts" type="text" class="span10">
                    </div>
                    <label class="checkbox inline">
                        <input class="js-shipping-free" type="checkbox">
                        Kostenloser Versand <i class="icon-info-sign" data-toggle="tooltip" data-placement="top" title="Wenn Sie „Kostenloser Versand“ wählen, wird in der Spalte „Versand“ in den Suchergebnissen  und auf Ihrer Artikelseite „kostenlos“ angezeigt. Es fallen keine Porto-, Versicherungs-, Verpackungs- und Bearbeitungsgebühren an.">
                        </i></label>
                </div>
                <a href="#" class="form-inline-component btn btn-square-icon shipping-delete-btn js-delete-additional-shipping hide"><i class="icon-remove"></i></a>
            </form>
        </div>
    </div>
    <div class="row-fluid">
        <a class="btn btn-link js-add-additional-shipping"> <i class="icon-plus "></i> Versandart hinzufügen </a>
    </div>
    <div class="section">
        <a class="btn btn-link" data-toggle="collapse" data-target="#additional-shipping-notes">Zusätzliche Angaben zum Versand <span class="optionalField">(optional)</span></a>
        <div class="row-fluid collapse" id="additional-shipping-notes">
            <textarea class="span8" rows="3"></textarea>
        </div>
    </div>
</fieldset>
<fieldset class="section well">
    <div class="row-fluid">
        <div class="span12">
            <label for="productAvailability"> Verfügbarkeit des Artikels </label>

            <select>
                <option>sofort lieferbar</option>
                <option>lieferbar in 1 - 5 days</option>
                <option>lieferbar in 6 - 10 days</option>
                <option>lieferbar in 11 - 14 days</option>
                <option>lieferbar in 15 - 20 days</option>
                <option>lieferbar in 60 days</option>
            </select>
        </div>
    </div>
</fieldset>

<div class="form-actions">
    <a href="step5.php" class="btn btn-primary toNext">Weiter zu &laquo;<?php echo $Layout->formNav[4]["title"]; ?>&raquo;</a>
    <a href="step6.php" class="btn toOverview">Weiter zu &laquo;<?php echo $Layout_cb->formNav[5]["title"]; ?>&raquo;</a>
</div>
<?php $Layout -> end(); ?>