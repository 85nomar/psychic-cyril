<?php
require ('inc/layout.php');
$Layout->title='Selling';
$Layout->start();
?>

<h2>Choose in which category to sell your product</h2>

<div class="row-fluid">
    <form class="form-search">
        <div id="categoryFinder">
            <div class="input-append">
                <input class="span12" id="appendedInputButton" type="text" placeholder="z.B i-Phone 3 GS">
                <button class="btn" type="button">
                    Help me find a category!
                </button>
            </div>
        </div>
    </form>

    <div class="controls controls-row">
        <select multiple="multiple" class="span2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <select multiple="multiple" class="span2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <select multiple="multiple" class="span2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <select multiple="multiple" class="span2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
        <select multiple="multiple" class="span2">
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
</div>
<hr>
<div id="savedForLater">
    <h4>Previous listings you've started to work on</h4>
    <div class="row-fluid">
        <div class="span4">
            <div class="row-fluid">
                <div class="span5">
                    <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                </div>
                <div class="span7">
                    <h5>I-Phone 4 GS</h5>
                    <small class="muted">Started at 02.04.2012</small>
                    <a href="#" class="btn btn-mini">Finish your listing</a>
                </div>
            </div>
        </div>
        <div class="span4">
            <div class="row-fluid">
                <div class="span5">
                    <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                </div>
                <div class="span7">
                    <h5>Chocolate bunny</h5>
                    <small class="muted">Started at 02.04.2012</small>
                    <a href="#" class="btn btn-mini">Finish your listing</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-actions">
<a href="#" class="btn btn-primary">Forward to describe your product</a><span class="separator muted">
</div>

<?php $Layout->end();
?>