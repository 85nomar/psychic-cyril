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
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
            </div>
        </div>
    </div>
    <div class="span9">
        <form class="form-horizontal">
            <fieldset>
                <legend>
                    Product details
                </legend>
                <div class="row-fluid">
                    <div class="span10">
                        <div class="row-fluid">
                        <table class="table table-condensed">
                            <tbody>
                                <tr>
                                    <td class="span3">Language</td>
                                    <td class="span9">German</td>
                                </tr>
                                <tr>
                                    <td>Title</td>
                                    <td>i-Phone 3 GS 16GB black</td>
                                </tr>
                                <tr>
                                    <td>Sub-Title</td>
                                    <td>Brand new i-Phone 3 GS the one and only</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>Lorum ipsum dolores Lorum ipsum dolores Lorum ipsum dolores Lorum ipsum doloresLorum ipsum dolores Lorum ipsum dolores
                                    Lorum ipsum dolores Lorum ipsum dolores Lorum ipsum doloresLorum ipsum dolores</td>
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
            <fieldset>
                <legend>
                    Pricing & duration
                </legend>
                <div class="row-fluid">
                    <div class="span10"></div>
                    <div class="span2 text-right">
                        <button class="btn">
                            Edit
                        </button>
                    </div>
                </div>
            </fieldset>
            <fieldset>
                <legend>
                    Shipping
                </legend>
                <div class="row-fluid">
                    <div class="span10"></div>
                    <div class="span2 text-right">
                        <button class="btn">
                            Edit
                        </button>
                    </div>
                </div>
            </fieldset>
            <h4>Fees</h4>
            <table class="table table-condensed table-striped table-sum">
                <tbody>
                    <tr>
                        <td>Listing fees</td>
                        <td>0.05 CHF</td>
                    </tr>
                    <tr>
                        <td>Buy now option</td>
                        <td>1.00 CHF</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>1.05 CHF</td>
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