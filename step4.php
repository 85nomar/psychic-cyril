<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Versand-Optionen bestimmen</h2>

<form>
    <fieldset class="section well">
        <label for="shippingOptions"> Versand-Optionen </label>
        <div class="row-fluid shipping-element">
            <div class="span3">
                <select name="inputShippingMethod[]">
                    <option selected="selected">Abholung</option>
                    <option>Brief A-Post</option>
                    <option>Brief B-Post</option>
                    <option>Packet A-Post</option>
                    <option>Packet B-Post</option>
                    <option>Kurier</option>
                </select>
            </div>
            <div class="span3">
                <div class="input-prepend">
                    <span class="add-on">CHF</span>
                    <input name="inputShippingCosts[]" type="text" value="0.00" class="span10">
                </div>
            </div>
            <div class="span6">
                <label class="checkbox checkbox-label-btn-wide inline btn btn-small">
                    <input type="checkbox">
                    Gratis anbieten </label>
                <button class="btn btn-small btn-rounded add-additional-shipping">
                    <i class="icon-plus"></i>
                </button>

            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <a class="btn btn-link" data-toggle="collapse" data-target="#additional-shipping-notes">Zusätzliche Bemerkungen zum Versand</a>
            </div>
        </div>
        <div class="row-fluid collapse" id="additional-shipping-notes">
            <textarea class="span8" rows="3" placeholder="Notieren Sie Bemerkungen zum Versand"></textarea>
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
</form>

<div class="form-actions">
    <a href="step5.php" class="btn btn-primary">Weiter zu "Promotions Optionen"</a>
</div>
<?php $Layout -> end(); ?>