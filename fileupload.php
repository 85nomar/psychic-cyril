<?php
require ('lib/php/UploadHandler_class.php');

$upload_handler = new UploadHandler( array(
	'upload_dir' => "uploads/",
	'upload_url' => "uploads/",
	'image_versions' => array(
		'medium' => array(
			'max_width' => 800,
			'max_height' => 600,
			'jpeg_quality' => 80
		),
		'thumbnail' => array(
			'crop' => true,
			'max_width' => 90,
			'max_height' => 90
		),
	)
));
