<?php

	class Layout {
		public $anonym = false;
		public $title = '';


		// Main Navigation
		public $formNav = array(
			'ricardoPay' => array(
				'url' => '#'
			),
			'Buying' => array(
				'url' => '#'
			),
			'Selling' => array(
				'url' => '#'
			),
			'My ricardo' => array(
				'url' => '#'
			),
			'Help' => array(
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