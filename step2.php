<?php
require ('inc/layout.php');
require ('inc/layout_cb.php');
$Layout -> title = 'Selling';
$Layout -> start();
$Layout_cb -> nav_cb();
?>

<h2>Wie möchten Sie Ihren Artikel beschreiben?</h2>
<form>
    
  <div class="row-fluid core accessory">
    <div class="span12 well">
    
      <div class="span2 control-group defaultLang">  
        <label for="inputNumber" class="control-label"><strong>Stückzahl</strong></label>
        <div class="controls">
          <input class="span10 core accessory" type="number" id="inputNumber" placeholder="1">
        </div>
      </div>
      
      <div class="span3 control-group defaultLang">        
        <label for="inputProductCondition" class="control-label"><strong>Zustand des Produkts</strong></label>
        <div class="controls">
          <select class="span12 required" id="productCondition" >
            <option selected>Neu</option>
            <option>Fabrikneu und ungeöffnet</option>
            <option>Neuwertig</option>
            <option>Gebraucht</option>
            <option>Antik</option>
            <option>Defekt</option>
          </select>
        </div>
      </div>
    
    </div>    
  </div>
      
  <div class="row-fluid">
    <div class="span12 well">
      <label class="checkbox swissIcons">
        <input type="checkbox">
        Ihr Produkt zweisprachig erfassen
      </label>
      <div id="swissIcons"> <img src="img/de_schweiz_icon.png" /> <img src="img/plus.png" /> <img src="img/fr_schweiz_icon.png" /> <img src="img/gleich.png" /> <img src="img/ganze_schweiz_icon.png" /> </div>
    </div>
  </div>
  
  <div class="row-fluid langs">
    <div class="span12 well">      
      <div class="row-fluid">
      
<!-- START DEFAULT LANG -->
      
        <div class="span12 defaultLang">
          
          <div class="control-group core accessory">
            <label for="inputTitle" class="control-label"><strong>Titel</strong></label>
            <div class="conrols">
              <input class="span7 charsCount required onlyNumber" type="text" id="inputTitle" placeholder="Tragen Sie hier die Produktbezeichnung ein" maxlength="60" >
            </div>
          </div>
          
          <div class="control-group cars">
            <label for="inputTitle" class="control-label"><strong>Titel</strong></label>
            <div class="controls input-prepend cars">
              <span class="add-on">Golf 1.6 FSI Comfort</span>
              <input class="charsCount" type="text" id="inputTitle" placeholder="..." maxlength="40">
            </div>
          </div>
          
          <div class="control-group">
            <label for="inputSubtitle" class="control-label"><strong>Untertitel</strong> <span class="optionalField">(optional) <span class="markNew core accessory">NEU: Gratis!</span></span></label>
            <div class="controls">
              <input class="span7 charsCount required" type="text" id="inputSubtitle" placeholder="Bewerben Sie ihr Produkt mit einem kurzen Satz" maxlength="40">
            </div>
          </div>
        </div>
      
<!-- START SECOND LANG -->
      
        <div class="span6 secondLang hidden">      
          
          <div class="control-group core accessory">
            <label for="inputTitle" class="control-label"><strong>Titre de l'article</strong></label>
            <div class="conrols">
              <input class="span7 charsCount required" type="text" id="inputTitle" placeholder="Entrez le nom du produit ici" maxlength="60">
            </div>
          </div>
          
          <div class="control-group cars">
            <label for="inputTitle" class="control-label"><strong>Titre de l'article</strong></label>
            <div class="controls input-prepend">
              <span class="add-on">Golf 1.6 FSI Comfort</span>
              <input class="charsCount" type="text" id="inputTitle" placeholder="..." maxlength="40">
            </div>
          </div>          
          
          <div class="control-group">
            <label for="inputSubtitle" class="control-label"><strong>Sous-titre</strong> <span class="optionalField">(optional) <span class="markNew core accessory">NOUVEAU: gratuit!</span></span> </label>
            <div class="controls">
              <input class="span7 charsCount required" type="text" id="inputSubtitle" placeholder="Appliquez votre produit avec une courte phrase" maxlength="40">
            </div>
        </div>
        
      </div>
      
      </div>
<!-- START DESCRIPTION-EDITORS -->
      
      <div id="multieditors" class="row-fluid">
        <div id="DualEditorDE" class="span12 defaultLang control-group">
          <label for="inputDescription" class="control-label"><strong>Wie möchten Sie Ihren Artikel beschreiben?</strong></label>
          <div class="controls">
            <textarea class="tinyman" rows="4" placeholder="Beschreiben Sie ihr Produkt hier"></textarea>
          </div>
        </div>
        <div id="DualEditorFR" class="span6 secondLang control-group hidden">
          <label for="inputDescription" class="control-label"><strong>Wie möchten Sie Ihren Artikel beschreiben?</strong></label>
          <div class="controls">
          	<textarea class="tinyman" rows="4" placeholder="Beschreiben Sie ihr Produkt hier"></textarea>
          </div>
        </div>
      </div>
      
    </div>
  </div>
  
  <div class="row-fluid langs">
    <div class="span12 well">  
    
<!-- START PICTURE UPLOAD -->  

      <label for="inputPictures"><strong>Bilder hinzufügen</strong> <span class="optionalField">(optional) <span class="markNew core accessory">NEU: Galeriebild gratis!</span></span> </label>
      <div class="row-fluid section productImages">
        <div class="span3">
          <div class="mainProductImageTitle optionalField">Dieses Bild wird als Vorschaubild für Ihren Artikel auf Suchresultat-Seiten verwendet</div>
          <div class="multiHint">Sie können mehrere Bilder <strong>gleichzeitig</strong> hochladen. Halten Sie dazu bei der Bild-Auswahl die "<strong>Shift-Taste</strong>" gedrückt.</div>
        </div>
        <div class="span9">
          <div class="productImage img-polaroid mainProductImage">
            <div class="uploadProgressOverlay">
              <button class="uploadCancelBtn btn btn-mini"> Cancel Upload </button>
              <div class="uploadProgressSpinner"></div>
              <div class="progress progress-striped">
                <div class="bar"></div>
              </div>
            </div>
            <div class="removeImageOverlay"> <a href="#" class="text-error"><i class="icon-trash"></i></a>
              <div class="image-movers">
                <div class="btn move-left"></div>
                <div class="btn move-right"></div>
              </div>
            </div>
            <div class="addProductImagesOverlay">
              <label for="fileupload" class="fileinput-button">
                <input id="fileupload" type="file" name="files[]" multiple>
                <a href="#" class="addProductImageLink btn btn-link"> <img class="productImagePlaceholder" src="img/camera.png"> hochladen </a> </label>
            </div>
            <img src="img/img_placeholder_90.jpg"> </div>
          <div class="productImage img-polaroid"> <img src="img/img_placeholder_90.jpg"> </div>
          <div class="productImage img-polaroid"> <img src="img/img_placeholder_90.jpg"> </div>
          <div class="productImage img-polaroid"> <img src="img/img_placeholder_90.jpg"> </div>
          <div class="productImage img-polaroid"> <img src="img/img_placeholder_90.jpg"> </div>
          <div class="productImage img-polaroid"> <img src="img/img_placeholder_90.jpg"> </div>
          <div class="productImage img-polaroid"> <img src="img/img_placeholder_90.jpg"> </div>
          <div class="productImage img-polaroid"> <img src="img/img_placeholder_90.jpg"> </div>
          <div class="productImage img-polaroid"> <img src="img/img_placeholder_90.jpg"> </div>
          <div class="productImage img-polaroid"> <img src="img/img_placeholder_90.jpg"> </div>
        </div>
      </div>
    </div>
  </div>
  <!--<div class="accordion step2 core accessory" id="accordion2">-->
  <div class="accordion step2" id="accordion2">
    <div class="accordion-group">
      <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"><strong>Weitere Eigenschaften</strong> <small class="muted">(optional)</small></a> </div>
      <div id="collapseTwo" class="accordion-body collapse">
        <div class="accordion-inner">
          <div class="control-group row-fluid" id="guaranteeControl"> 
            <script type="text/javascript">
							$(document).ready(function(e) {
								$('#guaranteeControl input').click(function(){
									if($('input[name=hasGuarantee]:checked', 'form').val()=='yes'){
										$('#guaranteeText').fadeIn();
									}
									else {
										$('#guaranteeText').fadeOut();
									}
								});
							});
						</script>
            <div class=" row-fluid controls">
              <label for="inputWarranty" class="control-label span2"><strong>Garantie</strong></label>
              <div class="span10">
                <input type="radio" name="hasGuarantee" value="no" checked="checked">
                Nein
                <input type="radio" name="hasGuarantee" value="yes">
                Ja </div>
            </div>
            <div class="row-fluid controls hidden" id="guaranteeText">
            	<div class="span10 offset2">
                <div class="defaultLang span12 control-group">
                	<label for="" class="control-label">Garantie-Text <span class="secondLang hidden">in deutsch</span></label>
                	<div class="controls">
                  	<textarea class="span12" rows="3" placeholder="Beschreiben Sie die Garantie hier."></textarea>
                  </div>
                </div>
                <div class="secondLang span6 control-group hidden">
                	<label for="" class="control-label">Garantie-Text in französisch</label>
                	<div class="controls">
                    <textarea class="span12" rows="3" placeholder="Describe your Guarantee here in french"></textarea>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="control-group row-fluid">
            <label class="control-label span2" for="inputUPCnumber"><strong>Persönliche Referenznummer</strong></label>
            <div class="controls span10">
              <input class="span4" type="text" id="inputUPCnumber" placeholder="z.B für ihr eigenes Shop-System">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="form-actions"> <a href="step3.php" class="submit btn btn-primary toNext core accessory">Weiter</a> <a href="step3.php" class="btn btn-primary toNext cars">Weiter</a> <a href="step6.php" class="btn toOverview">Zurück zur <?php echo $Layout_cb->formNav[5]["title"]; ?></a> </div>
<div id="urlSaver"></div>
<?php $Layout -> end(); ?>
