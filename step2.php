<?php require('inc/layout.php');
$Layout->title = 'Selling';
$Layout->start(); ?>

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
    <form class="form-horizontal">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"> Basic attributes </a>
            </div>
            <div id="collapseOne" class="accordion-body collapse in">
                <div class="accordion-inner">
                    <div class="row-fluid">
                        <div class="span12">

                            <div class="control-group">
                                <div class="controls">
                                    <label class="checkbox">
                                        <input type="checkbox">
                                        Setup your listing in two languages </label>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputTitle">Title</label>
                                <div class="controls">
                                    <input type="text" id="inputTitle" placeholder="Insert the name of your product here">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputSubtitle">Sub-Title</label>
                                <div class="controls">
                                    <input type="text" id="inputSubtitle" placeholder="Tease your product here">
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="inputDescription">Description</label>
                                <div class="controls">
                                    <textarea rows="4">Describe your product here</textarea>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label" for="inputPictures">Pictures</label>
                                <div class="controls">
                                    <img src="#" class="img-polaroid" style="width:140px;height:140px;">
                                    <img src="#" class="img-polaroid" style="width:90px;height:90px;">
                                    <img src="#" class="img-polaroid" style="width:90px;height:90px;">
                                    <img src="#" class="img-polaroid" style="width:90px;height:90px;">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> Advanced attributes </a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                    <div class="row-fluid">
                        <div class="span12">
                            <div class="control-group">
                                <label class="control-label" for="inputNumber">Number of Products</label>
                                <div class="controls">
                                    <input type="number" id="inputNumber" placeholder="1">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<?php $Layout->end(); ?>
