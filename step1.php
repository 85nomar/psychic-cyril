<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Kategorie für das einzustellende Produkt bestimmen</h2>

<div class="row-fluid">
    <form class="form-search span12">
        <fieldset id="categoryFinder" class="well">
            <div class="input-append">
                <input class="span12" id="appendedInputButton" type="text" placeholder="z.B i-Phone 3 GS">
                <button class="btn" type="button">
                    Kategorie vorschlagen lassen!
                </button>
            </div>
        </fieldset>
    </form>
</div>
<div class="row-fluid">
    <div class="controls controls-row span12">
        <select size="26" multiple="multiple" class="span2">
            <option>Antiquitäten &amp; Kunst</option>
            <option>Audio, TV & Video</option>
            <option>Auto &amp; Motorrad</option>
            <option>Briefmarken</option>
            <option>Bücher &amp; Comics</option>
            <option>Büro & gewerbe</option>
            <option>Computer & Netzwerk</option>
            <option>Filme & DVD</option>
            <option>Foto & Optik</option>
            <option>Games & Spielkonsolen</option>
            <option>Handwerk & Garten</option>
            <option>Handy, Festnetz, Funk</option>
            <option>Haushalt & Wohnen</option>
            <option>Kind & Baby</option>
            <option>Kleidung & Accessoires</option>
            <option>Kosmetik & Pflege</option>
            <option>Modellbau & Hobby</option>
            <option>Münzen</option>
            <option>Musik & Instrumente</option>
            <option>Sammeln & Seltenes</option>
            <option>Spielzeug & Basteln</option>
            <option>Sport</option>
            <option>Tickets & Gutscheine</option>
            <option>Tierzubehör</option>
            <option>Uhren & Schmuck</option>
            <option>Wein & Genuss</option>
        </select>
        <select size="26" multiple="multiple" class="span2">

        </select>
        <select size="26" multiple="multiple" class="span2">

        </select>
        <select size="26" multiple="multiple" class="span2">

        </select>
        <select size="26" multiple="multiple" class="span2">

        </select>
    </div>
</div>

<div class="form-actions">
    <a href="step2.php" class="btn btn-primary pull-right">Weiter um das Produkt zu beschreiben</a>
</div>

<?php $Layout -> end(); ?>