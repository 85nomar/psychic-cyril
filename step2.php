<?php
require ('inc/layout.php');
$Layout->title='Selling';
$Layout->start();
?>
<h2>Wie möchten Sie Ihren Artikel beschreiben?</h2>

<form>
    <div class="row-fluid">
        <div class="span12 well">
            <label class="checkbox swissIcons">
                <input type="checkbox">
                Ihr Produkt zweisprachig erfassen
            </label>
            <div id="swissIcons">
                <img src="img/de_schweiz_icon.png" />
                <img src="img/plus.png" />
                <img src="img/fr_schweiz_icon.png" />
                <img src="img/gleich.png" />
                <img src="img/ganze_schweiz_icon.png" />
            </div>

        </div>
    </div>
        <div class="row-fluid langs">
        <div class="span12 well">
            <div class="span6 float de-row">
            <label for="inputTitle">
                Titel
            </label>
            <input class="span7" type="text" id="inputTitle" placeholder="Tragen Sie hier die Produktbezeichnung ein">
            <label for="inputSubtitle">
                Untertitel <span class="optionalField">NEU: Gratis! <span style="text-decoration:line-through;">CHF 0.90</span> (optional)</span>
            </label>
            <input class="span7" type="text" id="inputSubtitle" placeholder="Bewerben Sie ihr Produkt mit einem kurzen Satz">
            <label for="inputProductCondition">
                            Zustand des Produkts
            </label>
            <select id="productCondition">
                <option>Neu</option>
                <option>Fabrikneu und ungeöffnet</option>
                <option>Neuwertig</option>
                <option selected>Gebraucht</option>
                <option>Antik</option>
                <option>Defekt</option>
            </select>
            <label for="inputNumber">
            Stückzahl
            </label>
            <input class="span1" type="number" id="inputNumber" placeholder="1">
            
            <label for="inputDescription">
                Wie möchten Sie Ihren Artikel beschreiben?
            </label>
        </div>
        <div class="span6 float fr-row">
            <label for="inputTitle">
                Titre de l'article
            </label>
            <input class="span7" type="text" id="inputTitle" placeholder="Entrez le nom du produit ici">
            <label for="inputSubtitle">
                Sous-titre <span class="optionalField">NOUVEAU: gratuit! <span style="text-decoration:line-through;">CHF 0.90</span> (optional)</span>
            </label>
            <input class="span7" type="text" id="inputSubtitle" placeholder="Appliquez votre produit avec une courte phrase">  
            <label for="inputProductCondition">
                            Zustand des Produkts
            </label>
            <select id="productCondition">
                <option>Neu</option>
                <option>Fabrikneu und ungeöffnet</option>
                <option>Neuwertig</option>
                <option selected>Gebraucht</option>
                <option>Antik</option>
                <option>Defekt</option>
            </select>
            <label for="inputNumber">
            Stückzahl
            </label>
            <input class="span1" type="number" id="inputNumber" placeholder="1">
          
            <label for="inputDescription">
                Wie möchten Sie Ihren Artikel beschreiben?
            </label>
        </div>
            
            <div id="multieditors">
                <div id="DualEditorDE" class="span12 de">
                      <textarea class="tinyman" rows="4" placeholder="Beschreiben Sie ihr Produkt hier"></textarea>
                </div>

                <div id="DualEditorFR" class="span6 fr">
                    <textarea class="tinyman" rows="4" placeholder="Beschreiben Sie ihr Produkt hier"></textarea>
                </div>
            </div>
            
            <label for="inputPictures">
                Bilder hinzufügen <span class="optionalField">NEU: Galeriebild gratis! <span style="text-decoration:line-through;">CHF 0.30</span> (optional)</span></span>
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
                    <div class="pull-left mainProductImageTitle optionalField">Dieses Bild wird als Vorschaubild für Ihren Artikel auf Suchresultat-Seiten verwendet</div>
                    
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
    <div class="accordion step2" id="accordion2">
        <div class="accordion-group">
            <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"> Weitere Eigenschaften <small class="muted">(optional)</small><i class="icon-chevron-down"></i></a>
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
    <a href="step3.php" class="btn btn-primary pull-right">Weiter zu &laquo;Preis & Dauer festlegen&raquo;</a>
</div>
<?php $Layout -> end(); ?>
