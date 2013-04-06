<?php
require ('inc/layout.php');
$Layout->title='Selling';
$Layout->start();
?>

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
<div class="accordion" id="accordion2">
    <form>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> Basic attributes </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                    <div class="row-fluid">
                        <div class="span12">
                            <label class="checkbox">
                                <input type="checkbox">
                                Setup your listing in two languages </label>
                            <label for="inputTitle">Title</label>
                            <input class="span6" type="text" id="inputTitle" placeholder="Insert the name of your product here">
                            <label for="inputSubtitle">Sub-Title</label>
                            <input class="span6" type="text" id="inputSubtitle" placeholder="Tease your product here">
                            <label for="inputDescription">Description</label>
                            <textarea class="span12" rows="4" placeholder="Describe your product here"></textarea>
                            <label for="inputPictures">Pictures</label>
                            <div class="row-fluid">
                                <div class="span3">
                                    <img src="img/img_placeholder_140.jpg" class="img-polaroid" style="width:140px;height:140px;">
                                </div>
                                <div class="span9">
                                    <img src="img/img_placeholder_90.jpg" class="img-polaroid" style="width:90px;height:90px;">
                                    <img src="img/img_placeholder_90.jpg" class="img-polaroid" style="width:90px;height:90px;">
                                    <img src="img/img_placeholder_90.jpg" class="img-polaroid" style="width:90px;height:90px;">
                                    <img src="img/img_placeholder_90.jpg" class="img-polaroid" style="width:90px;height:90px;">
                                    <img src="img/img_placeholder_90.jpg" class="img-polaroid" style="width:90px;height:90px;">
                                    <img src="img/img_placeholder_90.jpg" class="img-polaroid" style="width:90px;height:90px;">
                                    <img src="img/img_placeholder_90.jpg" class="img-polaroid" style="width:90px;height:90px;">
                                    <img src="img/img_placeholder_90.jpg" class="img-polaroid" style="width:90px;height:90px;">
                                    <img src="img/img_placeholder_90.jpg" class="img-polaroid" style="width:90px;height:90px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> Advanced attributes <span class="muted">(optional)</span></a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                    <div class="row-fluid">
                        <div class="span12">
                            <label for="inputNumber">Number of Products</label>
                            <input class="span1" type="number" id="inputNumber" placeholder="1">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<a href="#" class="btn btn-primary">Forward to set Pricing & Duration</a><span class="separator muted"> | </span><a href="#" class="btn btn-link">Back to choose category</a>

<?php $Layout->end(); ?>
