<?php
class Layout
{
    public $anonym=false;
    public $title='';
    // Main Navigation
    public $formNav=array(
        array(
            'url'=>'step1',
            'title'=>'1. Kategorisieren',
        ),
        array(
            'url'=>'step2',
            'title'=>'2. Beschreiben',
        ),
        array(
            'url'=>'step3',
            'title'=>'3. Preis und Dauer',
        ),
        array(
            'url'=>'step4',
            'title'=>'4. Versand-Optionen',
        ),
        array(
            'url'=>'step5',
            'title'=>'5. Promotions-Optionen',
        ),
        array(
            'url'=>'step6',
            'title'=>'Zusammenfassung',
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