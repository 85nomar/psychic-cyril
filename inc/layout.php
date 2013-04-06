<?php

	class Layout {
		public $anonym = false;
		public $title = '';


		// Main Navigation
		public $formNav = array(
			'Form step 1' => array(
				'url' => '#'
			),
			'Form step 2' => array(
				'url' => '#'
			),
			'Form step 3' => array(
				'url' => '#'
			),
			'Form step 4' => array(
				'url' => '#'
			),
			'Form step 5' => array(
				'url' => '#'
			)


		);


		public $navTitle = '';

		public $prependScript = '';
		public $appendScript = '';

		public $prependCSS = '';
		public $appendCSS = '';

		public $isAdmin = false;

		function __construct() {
			date_default_timezone_set('UTC'); 
			$this->navTitle = basename($_SERVER['PHP_SELF'], ".php");
		}


		// Layout listed Contructor
		public function start() {
			require('head.php');
			require('header.php');
			require('formnav.php');
		}

		public function end() {
			require('footer.php');
		}

	} 

	$Layout = new Layout();
?>