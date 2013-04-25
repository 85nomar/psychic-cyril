<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<form>
    <div class="row-fluid">
        <div class="span12 well">
            <label class="checkbox">
                <input type="checkbox">
                Ihr Produkt zweisprachig erfassen </label>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12 well">
            <label for="inputTitle"> Titel </label>
            <input class="span5" type="text" id="inputTitle" placeholder="Tragen Sie hier die Produktbezeichnung ein">
            <label for="inputSubtitle"> Untertitel </label>
            <input class="span7" type="text" id="inputSubtitle" placeholder="Bewerben Sie ihr Produkt mit einem kurzen Satz">
            <label for="inputDescription"> Beschreibung </label>
            <div class="editor-toolbar pull-right">
                <a href="#">mehr</a>
                <i class="icon-bold"></i><i class="icon-italic"></i><i class="icon-list"></i>
            </div>
            <textarea class="span12" rows="4" placeholder="Beschreiben Sie ihr Produkt hier"></textarea>
            <label for="inputPictures"> Bilder </label>
            <div class="row-fluid">
                <div class="span3">
                    <img src="img/img_placeholder_140.jpg" class="img-polaroid">
                </div>
                <div class="span9">
                    <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                    <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                    <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                    <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                    <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                </div>
            </div>
        </div>
    </div>
    <div class="accordion" id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> Weitere Eigenschaften <small class="muted">(optional)</small></a>
            </div>
            <div id="collapseTwo" class="accordion-body collapse">
                <div class="accordion-inner">
                    <div class="row-fluid">
                        <label for="inputProductCondition"> Zustand des Produkts </label>
                        <select id="productCondition">
                            <option>Neu</option>
                            <option>Original</option>
                            <option>Gebraucht</option>
                            <option>Defekt</option>
                        </select>
                        <label for="inputNumber"> Anzahl zu verkaufende Exemplare insgesamt </label>
                        <input class="span1" type="number" id="inputNumber" placeholder="1">
                        <label for="inputUPCnumber"> Persönliche Referenznummer </label>
                        <input class="span4" type="text" id="inputUPCnumber" placeholder="z.B für ihr eigenes Shop-System">
                        <label for="inputWarranty"> Garantie </label>
                        <select id="warranty">
                            <option>Keine Garantie</option>
                            <option>Gemäss Beschreibung</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="form-actions">
    <a href="step3.php" class="btn btn-primary">Weiter zu "Preis und Dauer"</a><span class="separator muted">
</div>
<?php $Layout -> end(); ?>
