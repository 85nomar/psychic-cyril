<?php require('inc/layout.php');
$Layout->title = 'Selling';
$Layout->start(); ?>

<h2>Welchen Prototypen möchten Sie testen?</h2>

<div class="row-fluid" id="protoTypeSelector" style="text-align:center;">
	<a href="step1.php" data-view="core" class="btn btn-large btn-warning setCookie span3 offset3">ricardo.ch</a>
	<a href="step1.php" data-view="cars" class="btn btn-large btn-primary setCookie span3">autoricardo.ch</a>
</div>

<script type="text/javascript">
	setCookie('catg','',-1);
</script>

<?php $Layout->end(); ?>