<?php
class Layout
{
    public $anonym=false;
    public $title='';
    // Main Navigation
    public $formNav=array(
        array(
            'url'=>'step1',
            'title'=>'Step1',
        ),
        array(
            'url'=>'step2',
            'title'=>'Step2',
        ),
        array(
            'url'=>'step3',
            'title'=>'Step3',
        ),
        array(
            'url'=>'step4',
            'title'=>'Step4',
        ),
        array(
            'url'=>'step5',
            'title'=>'Step5',
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