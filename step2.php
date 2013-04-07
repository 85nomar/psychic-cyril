<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Describe what you want to sell</h2>

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
<form>
    <div class="row-fluid">
        <div class="span12 well">
            <label class="checkbox">
                <input type="checkbox">
                Setup your listing in two languages
            </label>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12 well">
            <label for="inputTitle">
                Title
            </label>
            <input class="span5" type="text" id="inputTitle" placeholder="Insert the name of your product here">
            <label for="inputSubtitle">
                Sub-Title
            </label>
            <input class="span7" type="text" id="inputSubtitle" placeholder="Tease your product here">
            <label for="inputDescription">
                Description
            </label>
            <textarea class="span12" rows="4" placeholder="Describe your product here"></textarea>
            <label for="inputPictures">
                Pictures
            </label>
            <div class="row-fluid">
                <div class="span3">
                    <img src="img/img_placeholder_140.jpg" class="img-polaroid">
                </div>
                <div class="span9">
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
    </div>
    <div class="accordion" id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> Advanced attributes <small class="muted">(optional)</small></a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                    <div class="row-fluid">
                        <label for="inputProductCondition">
                            Product condition
                        </label>
                        <select id="productCondition">
                            <option>New</option>
                            <option>Original</option>
                            <option>Used</option>
                            <option>Broken</option>
                        </select>
                        <label for="inputNumber">
                            Number of Products
                        </label>
                        <input class="span1" type="number" id="inputNumber" placeholder="1">
                        <label for="inputUPCnumber">
                            UPC, ISBN or your own product number
                        </label>
                        <input class="span4" type="text" id="inputUPCnumber" placeholder="UPC, ISBN or other product number">
                        <label for="inputWarranty">
                            Warranty description
                        </label>
                        <select id="warranty">
                            <option>No warranty</option>
                            <option>As described</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="form-actions">
    <a href="step3.php" class="btn btn-primary">Forward to set Pricing & Duration</a><span class="separator muted"> | </span><a href="#" class="btn btn-link">Back to choose category</a>
</div>
<?php $Layout -> end(); ?>
