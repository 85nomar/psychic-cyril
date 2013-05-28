<?php
class Layout_cb
{
    public $anonym=false;
    public $title='';
    // Main Navigation
    public $formNav=array(
        array(
            'url'=>'step1',
            'step'=> '1',
            'title'=>'Kategorie',
        ),
        array(
            'url'=>'step2',
            'step'=> '2',
            'title'=>'Beschreibung',
        ),
        array(
            'url'=>'step3',
            'step'=> '3',
            'title'=>'Preis & Dauer',
        ),
        array(
            'url'=>'step4',
            'step'=> '4',
            'title'=>'Versand',
        ),
        array(
            'url'=>'step5',
            'step'=> '5',
            'title'=>'Werbung',
        ),
        array(
            'url'=>'step6',
            'step'=> '6',
            'title'=>'Übersicht',
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
    public function nav_cb() {
        require ('formnav_cb.php');
    }

    public function end() {
        require ('footer.php');
    }

}

$Layout_cb=new Layout_cb();
?>