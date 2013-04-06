<?php
class Layout
{
    public $anonym=false;
    public $title='';
    // Main Navigation
    public $formNav=array(
        array(
            'url'=>'step1',
            'title'=>'Choose Category',
        ),
        array(
            'url'=>'step2',
            'title'=>'Describe your product',
        ),
        array(
            'url'=>'step3',
            'title'=>'Set pricing and duration',
        ),
        array(
            'url'=>'step4',
            'title'=>'Define shipping',
        ),
        array(
            'url'=>'step5',
            'title'=>'Review before publishing',
        )
    );
    public $navTitle='';
    public $prependScript='';
    public $appendScript='';
    public $prependCSS='';
    public $appendCSS='';
    public $isAdmin=false;
    function __construct() {
        date_default_timezone_set('UTC');
        $this->navTitle=basename($_SERVER['PHP_SELF'],".php");
    }

    // Layout listed Contructor
    public function start() {
        require ('head.php');
        require ('header.php');
        require ('formnav.php');
    }

    public function end() {
        require ('footer.php');
    }

}

$Layout=new Layout();
?>