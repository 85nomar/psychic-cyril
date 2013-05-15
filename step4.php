<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Wie erreicht der verkaufte Artikel den Käufer?</h2>

<fieldset class="section well">
    <label for="inputShippingMethod"> Versandarten <i class="icon-info-sign" data-toggle="tooltip" data-placement="right" title="Wenn Sie „Kostenloser Versand“ wählen, wird in der Spalte „Versand“ in den Suchergebnissen  und auf Ihrer Artikelseite „kostenlos“ angezeigt. Es fallen keine Porto-, Versicherungs-, Verpackungs- und Bearbeitungsgebühren an."></i> </label>
    <div class="row-fluid shipping-element">
        <div class="span12">
            
            <form action="#" method="post" class="form-inline">

                <!-- <li id="ShippingConditionsBox" class="">
<div class="pre">Lieferkonditionen CH *</div>
<div class="content">
<select class="n_Select" name="ShippingConditions" id="ShippingConditions" style="width: 167px" onchange="checkSelectConditions(this, 2, 'DivShipDesc')" shippingcost="0"><option value="-1" selected="">Bitte wählen Sie...</option><option value="0">Gemäss Beschreibung</option><option value="1" price="1">Brief A-Post</option><option value="2" price="0.7">Brief B-Post</option><option value="3">Paket A-Post</option><option value="4">Paket B-Post</option><option value="5">Einschreiben</option><option value="6">Nachnahme (ab 1.1.2010 nur noch für Firmen möglich!)</option><option value="7">Spediteur oder Kurier</option><option value="8">Abholung durch Käufer</option><option value="9">Lieferung durch Anbieter</option></select><div id="DivShipDescTitle" name="DivShipDescTitle" style="display: none;"><span class="n_Label">Beschreibung Lieferkonditionen *</span><br></div><div id="DivShipDescBody" name="DivShipDescBody" style="display: none;"><div id="DivShipDescLang" name="DivShipDescLang" style="display: block"><span class="flag_de" style="display: none;"></span>
<textarea id="it_txtShipDesc" class="n_Textarea" name="ShippingDesc" rows="9" cols="59"></textarea></div><div id="DivShipDescLangFrench" name="DivShipDescLangFrench" style="display: none"><span class="flag_fr" style="display: none;"></span>
<textarea id="it_txtShipDescFrench" class="n_Textarea" name="ShippingDescFrench" rows="9" cols="59"></textarea></div></div><select id="ShippingPacketWeight" name="ShippingPackageSize" onchange="checkSelectConditions(this, 2, 'DivShipDesc')" style="display: none;" changed="changed"><option value="1" shipping="3" price="9" style="display: none;">Paket bis 2 kg</option><option value="2" shipping="3" price="11" style="display: none;">Paket bis 5 kg</option><option value="3" shipping="3" price="12" style="display: none;">Paket bis 10 kg</option><option value="4" shipping="3" price="18" style="display: none;">Paket bis 20 kg</option><option value="5" shipping="3" price="25" style="display: none;">Paket bis 30 kg</option><option value="1" shipping="4" price="7" style="display: none;">Paket bis 2 kg</option><option value="2" shipping="4" price="9" style="display: none;">Paket bis 5 kg</option><option value="3" shipping="4" price="10" style="display: none;">Paket bis 10 kg</option><option value="4" shipping="4" price="15" style="display: none;">Paket bis 20 kg</option><option value="5" shipping="4" price="22" style="display: none;">Paket bis 30 kg</option></select></div>
<div class="post"></div>
</li>
                <li id="ShippingCost" class="n_FormLink">
<div class="pre">Lieferkosten CH:</div>
<div class="content">
<span class="currency">CHF </span><input type="text" class="n_Input" name="ShippingCost" size="20" maxlength="20" style="text-align: right" value=""><b>.</b><input type="text" class="n_Input" name="ShippingCostCents" size="2" maxlength="2" value="">&nbsp;</div>
<div class="post"><p><a class="fancyhelplink" data-section="lieferkosten-de" href="http://www.ch.devqxl.com/ueber-uns/onlinehilfe#category=457" target="_blank">Übersicht Portokosten Post Schweiz</a></p></div>
</li> -->

                <a href="#" class="delete-additional-shipping hide" data-placement="top" data-toggle="tooltip" data-original-title="Lieferoption entfernen"><i class="icon-remove"></i></a>
                <select class="inputShippingMethod" name="inputShippingMethod">
                    <option selected="selected">Abholung</option>
                    <option data-value="1.00">Brief A-Post</option>
                    <option data-value="0.80">Brief B-Post</option>
                    <option data-value="10.00">Packet A-Post</option>
                    <option data-value="5.00">Packet B-Post</option>
                    <option>Kurier</option>
                </select>
                <div class="input-prepend">
                    <span class="add-on">CHF</span>
                    <input class="inputShippingCosts" name="inputShippingCosts" type="text" value="0.00" class="span10">
                </div>
                <label class="checkbox inline">
                    <input type="checkbox">
                    Gratis anbieten </label>
            </form>
        </div>
    </div>
    <div class="row-fluid">
        <button class="btn btn-small btn-rounded add-additional-shipping">
            <i class="icon-plus"></i>
        </button>
    </div>
    <div class="section">
        <a class="btn btn-link" data-toggle="collapse" data-target="#additional-shipping-notes">Zusätzliche Angaben zum Versand</a>
        <div class="row-fluid collapse" id="additional-shipping-notes">
            <textarea class="span8" rows="3" placeholder="Notieren Sie Bemerkungen zum Versand"></textarea>
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
    <a href="step5.php" class="btn btn-primary pull-right">Weiter zu "Promotions Optionen"</a>
</div>
<?php $Layout -> end(); ?>