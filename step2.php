<?php
require ('inc/layout.php');
$Layout->title='Selling';
$Layout->start();
?>

<h2>Produkt beschreiben</h2>

<form>
    <div class="row-fluid">
        <div class="span12 well">
            <label class="checkbox">
                <input type="checkbox">
                Ihr Produkt zweisprachig erfassen
            </label>
        </div>
    </div>
    <div class="row-fluid">
        <div class="span12 well">
            <label for="inputTitle">
                Titel
            </label>
            <input class="span5" type="text" id="inputTitle" placeholder="Tragen Sie hier die Produktbezeichnung ein">
            <label for="inputSubtitle">
                Untertitel <span style="color:rgb(0, 153, 255);">(Kostenlos)</span>
            </label>
            <input class="span7" type="text" id="inputSubtitle" placeholder="Bewerben Sie ihr Produkt mit einem kurzen Satz">
            <label for="inputNumber">
            Anzahl zu verkaufende Exemplare insgesamt
            </label>
            <input class="span1" type="number" id="inputNumber" placeholder="1">
            <label for="inputProductCondition">
                            Zustand des Produkts
            </label>
            <select id="productCondition">
                <option>Neu</option>
                <option>Original</option>
                <option selected>Gebraucht</option>
                <option>Defekt</option>
            </select>
            <label for="inputDescription">
                Beschreibung
            </label>
            <div class="editor-toolbar pull-right">§
                <a href="#">mehr</a>
                <i class="icon-bold"></i><i class="icon-italic"></i><i class="icon-list"></i>
            </div>
            <textarea class="span12 tinymce" rows="4" placeholder="Beschreiben Sie ihr Produkt hier"></textarea>
            <label for="inputPictures">
                Bilder hinzufügen <small>(bis zu 10 Bilder)</small>
            </label>
            <div class="row-fluid section productImages">
                <div class="span3">
                    <div class="productImage img-polaroid mainProductImage">
                        <div class="uploadProgressOverlay">
                            <button class="uploadCancelBtn btn btn-mini">
                                Cancel Upload
                            </button>
                            <div class="uploadProgressSpinner"></div>
                            <div class="progress progress-striped">
                                <div class="bar"></div>
                            </div>
                        </div>
                        <div class="removeImageOverlay">
                            <a href="#" class="text-error"><small>Löschen &times;</small></a>
                            <div class="image-movers">
                                <div class="btn move-left"></div>
                                <div class="btn move-right"></div>
                            </div>
                        </div>
                        <div class="addProductImagesOverlay">
                            <label for="fileupload" class="fileinput-button">
                                <input id="fileupload" type="file" name="files[]" multiple>
                                <a href="#" class="addProductImageLink btn btn-link"> <img class="productImagePlaceholder" src="img/camera.png"> hochladen </a>
                            </label>
                        </div>
                        <img src="img/img_placeholder_90.jpg">
                    </div>
                    <h6 class="pull-left mainProductImageTitle">Haupt-Bild</h6>
                    
                </div>
                <div class="span9">
                    <div class="productImage img-polaroid">
                        <img src="img/img_placeholder_90.jpg">
                    </div>
                    <div class="productImage img-polaroid">
                        <img src="img/img_placeholder_90.jpg">
                    </div>
                    <div class="productImage img-polaroid">
                        <img src="img/img_placeholder_90.jpg">
                    </div>
                    <div class="productImage img-polaroid">
                        <img src="img/img_placeholder_90.jpg">
                    </div>
                    <div class="productImage img-polaroid">
                        <img src="img/img_placeholder_90.jpg">
                    </div>
                    <div class="productImage img-polaroid">
                        <img src="img/img_placeholder_90.jpg">
                    </div>
                    <div class="productImage img-polaroid">
                        <img src="img/img_placeholder_90.jpg">
                    </div>
                    <div class="productImage img-polaroid">
                        <img src="img/img_placeholder_90.jpg">
                    </div>
                    <div class="productImage img-polaroid">
                        <img src="img/img_placeholder_90.jpg">
                    </div>

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
                        <label for="inputWarranty">
                            Garantie
                        </label>
                        <select id="warranty">
                            <option>Keine Garantie</option>
                            <option>Gemäss Beschreibung</option>
                        </select>
                        <label for="inputUPCnumber">
                            Persönliche Referenznummer
                        </label>
                        <input class="span4" type="text" id="inputUPCnumber" placeholder="z.B für ihr eigenes Shop-System">
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
<div class="form-actions">
    <a href="step3.php" class="btn btn-primary pull-right">Weiter zu "Preis und Dauer"</a>
</div>
<?php $Layout -> end(); ?>
