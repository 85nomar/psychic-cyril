<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Describe your shipping options</h2>

<form>
    <fieldset class="section well">
        <label for="shippingOptions"> Shipping options </label>
        <div class="row-fluid shipping-element">
            <div class="span3">
                <select name="inputShippingMethod[]">
                    <option selected="selected">Pick-up</option>
                    <option>Letter A-Post</option>
                    <option>Letter B-Post</option>
                    <option>Package A-Post</option>
                    <option>Package B-Post</option>
                    <option>Courier</option>
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
                    Offer for free </label>
                <button class="btn btn-small btn-rounded add-additional-shipping">
                    <i class="icon-plus"></i>
                </button>

            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <a class="btn btn-link" data-toggle="collapse" data-target="#additional-shipping-notes">Add additional shipping infos</a>
            </div>
        </div>
        <div class="row-fluid collapse" id="additional-shipping-notes">
            <textarea class="span8" rows="3" placeholder="Insert shipping notes here"></textarea>
        </div>
    </fieldset>
    <fieldset class="section well">
        <div class="row-fluid">
            <div class="span12">
                <label for="productAvailability"> Availability </label>
                <label class="radio">
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    on Stock </label>
                <label class="radio">
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    <select>
                        <option>within 1 - 5 days</option>
                        <option>within 6 - 10 days</option>
                        <option>within 11 - 14 days</option>
                        <option>within 15 - 20 days</option>
                        <option>within 60 days</option>
                    </select> </label>
            </div>
        </div>
    </fieldset>
</form>

<div class="form-actions">
    <a href="step5.php" class="btn btn-primary">Proceed to the last step</a><span class="separator muted"> | </span><a href="#" class="btn btn-link">Back to set Pricing and Duration</a>
</div>
<?php $Layout -> end(); ?>