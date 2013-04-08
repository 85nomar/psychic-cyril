<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Set pricing and time for your listing</h2>

<form>
    <section class="section">
        <fieldset class="row-fluid" id="listingType">
            <div class="span12 well">
                <label for="auctionType"> Type of Auction </label>
                <div class="btn-group">
                    <input class="toggle" type="radio" name="toggle" id="toggle-auction" value="option1" checked>
                    <label class="btn" for="toggle-auction">Auction</label>
                    <input class="toggle" type="radio" name="toggle" id="toggle-fixedPriceOffer" value="option2">
                    <label class="btn" for="toggle-fixedPriceOffer">Fixed Price</label>
                </div>
            </div>
        </fieldset>
        <fieldset class="row-fluid" id="listingStartPrice">
            <div class="span12 well">
                <label for="auctionStartPrice"> Auction start price </label>
                <div class="row-fluid">
                    <div class="span3">
                        <div class="input-prepend">
                            <span class="add-on">CHF</span>
                            <input class="span10" id="inputStartPrice" type="text" placeholder="Set a price">
                        </div>
                    </div>
                    <div class="span9">
                        <a href="#" class="btn btn-link">Add a buy now option</a><small class="label label-warning">+ CHF 1.00</small>
                    </div>
                </div>
                <label for="auctionIncrementPrice"> Increment price </label>
                <div class="input-prepend">
                    <span class="add-on">CHF</span>
                    <input class="span10" id="inputIncrementPrice" type="text" value="0.05">
                </div>
            </div>
        </fieldset>
        <fieldset class="row-fluid" id="listingPaymentConditions">
            <div class="span12 well">
                <label for="paymentConditions"> Accepted Payment Conditions </label>
                <label class="checkbox inline checkbox-label-btn btn btn-success">
                    <input type="checkbox" checked>
                    In Advance </label>
                <label class="checkbox inline checkbox-label-btn btn">
                    <input type="checkbox">
                    At Pickup </label>
                <label class="checkbox inline checkbox-label-btn btn">
                    <input type="checkbox">
                    After Receipt </label>
            </div>
        </fieldset>
        <fieldset id="listingPaymentMethods" class="well">
            <div class="row-fluid">
                <div class="span12">
                    <label for="paymentConditions"> Accepted Payment Methods </label>
                    <label class="checkbox inline checkbox-label-btn btn-ricardoPay btn">
                        <input type="checkbox" checked>
                        RicardoPay </label>
                    <label class="checkbox inline checkbox-label-btn btn btn-small">
                        <input type="checkbox">
                        Bank / Post </label>
                    <label class="checkbox inline checkbox-label-btn btn btn-small">
                        <input type="checkbox">
                        Cash </label>
                </div>
            </div>
            <div class="row-fluid section">
                <div class="span12">
                    <a href="#" class="btn btn-link">Add additional payment notes</a><small class="muted">(optional)</small>
                </div>
            </div>
        </fieldset>
    </section>
    <section class="section">
        <fieldset class="well" id="listingStartTimeAndDuration">
            <div class="row-fluid">
                <div class="span4">
                    <label for="startTime"> Listing start time </label>
                    <div class="row-fluid">
                        <div id="datetimepicker" class="input-append date">
                            <input id="startTime" data-format="dd.MM.yyyy hh:mm" type="text" placeholder="immediately">
                            <span class="add-on"> <i class="icon-calendar" data-time-icon="icon-time" data-date-icon="icon-calendar"> </i> </span>
                        </div>
                    </div>
                </div>
                <div class="span2">
                    <label for="duration">Duration</label>
                    <input id="duration" type="text" class="input-small">
                </div>
                <div class="span6">
                    <div class="noUiSlider"></div>
                </div>
            </div>
        </fieldset>
        <fieldset class="row-fluid" id="listingsReactivation">
            <div class="span12 well">
                <label for="reactivationOption"> Reactivation </label>
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
                <span class="help-inline">reactivate</span>
            </div>
        </fieldset>
    </section>
</form>

<div class="form-actions">
    <a href="step4.php" class="btn btn-primary">Forward to set Shipping Conditions</a><span class="separator muted"> | </span><a href="#" class="btn btn-link">Back to describe your product</a>
</div>
<?php $Layout -> end(); ?>