<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Review your listing</h2>

<div class="row-fluid">
    <div class="span10">
        <ul class="breadcrumb">
            <li>
                <a href="#">Art</a><span class="divider">/</span>
            </li>
            <li>
                <a href="#">Stamps</a><span class="divider">/</span>
            </li>
            <li class="active">
                Antique
            </li>
        </ul>
    </div>
    <div class="span2">
        <a href="#" class="btn btn-small">Change Category</a>
    </div>
</div>

<div class="row-fluid">
    <div class="span3">
        <div class="row-fluid section">
            <div class="span12 text-center">
                <img src="img/img_placeholder_140.jpg" class="img-polaroid">
            </div>
        </div>
        <div class="row-fluid section">
            <div class="span12 text-center">
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                <a href="#" class"btn btn-link">Add another photo</a>
            </div>
        </div>
    </div>
    <div class="span9">
        <form class="form-horizontal">
            <fieldset class="well editmode">
                <legend>
                    Product details
                </legend>
                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <table class="table table-condensed table-first-column-title">
                                <tbody>
                                    <tr>
                                        <td class="span5">Language</td>
                                        <td class="span7">
                                            <input class="input-block-level" type="text" value="German">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Title</td>
                                        <td>
                                            <input class="input-block-level" type="text" value="i-Phone 3 GS 16GB black">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sub-Title</td>
                                        <td>
                                            <input class="input-block-level" type="text" value="Brand new i-Phone 3 GS the one and only">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td><textarea class="input-block-level">Lorum ipsum dolores Lorum ipsum dolores Lorum ipsum dolores Lorum ipsum doloresLorum ipsum dolores Lorum ipsum dolores</textarea></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <a href="#" class="btn btn-success">Save</a>
            </fieldset>
            <fieldset class="well">
                <legend>
                    Pricing & duration
                </legend>
                <div class="row-fluid">
                    <div class="span10">
                        <div class="row-fluid">
                            <table class="table table-condensed table-first-column-title">
                                <tbody>
                                    <tr>
                                        <td class="span5">List as</td>
                                        <td class="span7">Auction</td>
                                    </tr>
                                    <tr>
                                        <td>Start at</td>
                                        <td>CHF 150.-</td>
                                    </tr>
                                    <tr>
                                        <td>Increase each bid by</td>
                                        <td>CHF 1.-</td>
                                    </tr>
                                    <tr>
                                        <td>Buy now price</td>
                                        <td>CHF 300.-</td>
                                    </tr>
                                    <tr>
                                        <td>Accepted payment conditions</td>
                                        <td>Pay in advance | Pay at pickup</td>
                                    </tr>
                                    <tr>
                                        <td>Accepted payment methods</td>
                                        <td>Ricardo Pay, Cash</td>
                                    </tr>
                                    <tr>
                                        <td>Starts at</td>
                                        <td>4. April 2013 13:45 | lasts 7 days</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="span2 text-right">
                        <button class="btn">
                            Edit
                        </button>
                    </div>
                </div>
            </fieldset>
            <fieldset class="well">
                <legend>
                    Shipping
                </legend>
                <div class="row-fluid">
                    <div class="span10">
                        <div class="row-fluid">
                            <table class="table table-condensed table-first-column-title">
                                <tbody>
                                    <tr>
                                        <td class="span5">Available within</td>
                                        <td class="span7">immediately after ordering</td>
                                    </tr>
                                    <tr>
                                        <td>Offered shipping types</td>
                                        <td>Letter A-Post (2.40 CHF) | Letter B-Post (1.50 CHF)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="span2 text-right">
                        <button class="btn">
                            Edit
                        </button>
                    </div>
                </div>
            </fieldset>
            <h3>Fees</h3>
            <table class="table table-condensed table-striped">
                <tbody>

                    <tr>
                        <td><label for="categoryFeatureBronze" class="checkbox">
                            <input type="checkbox" id="categoryFeatureBronze">
                            Category Feature bronze</label></td>
                        <td><span class="label label-info">Up to 5x visitors</span> | only CHF 5.00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label for="categoryFeatureSilver" class="checkbox">
                            <input type="checkbox" id="categoryFeatureSilver">
                            Category Feature silver</label></td>
                        <td><span class="label label-info">Up to 15x visitors</span> | only CHF 15.00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label for="categoryFeatureGold" class="checkbox">
                            <input type="checkbox" id="categoryFeatureGold">
                            Category Feature gold</label></td>
                        <td><span class="label label-info">Up to 20x visitors</span> | only CHF 20.00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label for="frontpageTopOffer" class="checkbox">
                            <input type="checkbox" id="frontpageTopOffer">
                            Frontpage Top-Offer</label></td>
                        <td><span class="label label-info">Up to 200x visitors</span> | only CHF 40.00</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-condensed table-striped table-sum">
                <tbody>
                    <tr>
                        <td>Listing fees</td>
                        <td colspan="2">0.05 CHF</td>
                    </tr>
                    <tr>
                        <td>Buy now option</td>
                        <td colspan="2">1.00 CHF</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td colspan="2">1.05 CHF</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<div class="form-actions">
    <a href="#" class="btn btn-success">List your item</a>
    <span class="separator muted"> | </span>
    <a href="#" class="btn">Preview</a>
    <span class="separator muted"> | </span>
    <a href="#" class="btn btn-link">Back to set Shipping Options</a>
</div>

<?php $Layout -> end();
?>