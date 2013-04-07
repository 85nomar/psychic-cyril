<?php
require ('inc/layout.php');
$Layout->title='Selling';
$Layout->start();
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

<div class="form-actions">
<a href="#" class="btn btn-success">List your item</a><span class="separator muted"> | </span><a href="#" class="btn btn-link">Back to set Shipping Options</a>
</div>

<?php $Layout->end(); ?>