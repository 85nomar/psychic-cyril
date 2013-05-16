<?php
require ('inc/layout.php');
$Layout -> title = 'Selling';
$Layout -> start();
?>

<h2>Und so wird es aussehen. Sind Sie damit einverstanden?</h2>

<div class="row-fluid">
    <div class="span10">
        <ul class="breadcrumb">
            <li>
                <a href="#">Computer & Elektronik</a><span class="divider">/</span>
            </li>
            <li>
                <a href="#">Smartphones</a><span class="divider">/</span>
            </li>
            <li class="active">
                I-Phone
            </li>
        </ul>
    </div>
    <div class="span2">
        <a href="step1.php" class="btn btn-small">Kategorie ändern</a>
    </div>
</div>

<div class="row-fluid">
    <div class="span3">
        <div id="articlePreview" class="row-fluid section">
            <div class="span12">
                <img src="img/articlePreview_tmb.png">
                <a href="#" class="btn"><i class="icon-share icon-blue"></i> Vorschau anzeigen</a>
            </div>
        </div>
       <!-- <div class="row-fluid section">
            <div class="span12 text-center">
                <img src="img/img_placeholder_140.jpg" class="img-polaroid">
            </div>
        </div>
        <div class="row-fluid section">
            <div class="span12 text-center">
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                <img src="img/img_placeholder_90.jpg" class="img-polaroid">
                <a href="#" class"btn btn-link">Weiteres Foto hinzufügen</a>
            </div>
        </div>-->
    </div>
    <div class="span9">
        <form class="form-horizontal">
            <fieldset class="well">
                <h3>
                    Produkt-Details
                </h3>
                <div class="row-fluid">
                    <div class="span10">
                        <div class="row-fluid">
                            <table class="table table-condensed table-first-column-title">
                                <tbody>
                                    <tr>
                                        <td class="span5">Sprache</td>
                                        <td class="span7">
                                        Deutsch
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Titel</td>
                                        <td>
                                        i-Phone 3 GS black 16 GB
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Untertitel</td>
                                        <td>
                                        Neues I-Phone, das einzig wahre
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Beschreibung</td>
                                        <td>Lorum ipsum dolores Lorum ipsum dolores Lorum ipsum dolores Lorum ipsum doloresLorum ipsum dolores Lorum ipsum dolores</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="span2 text-right">
                        <a href="step2.php" class="btn">
                            Bearbeiten
                        </a>
                    </div>
                </div>
            </fieldset>
            <fieldset class="well">
                <h3>
                    Preis & Dauer des Angebots
                </h3>
                <div class="row-fluid">
                    <div class="span10">
                        <div class="row-fluid">
                            <table class="table table-condensed table-first-column-title">
                                <tbody>
                                    <tr>
                                        <td class="span5">Einstellen als</td>
                                        <td class="span7">Auktion</td>
                                    </tr>
                                    <tr>
                                        <td>Startpreis</td>
                                        <td>CHF 150.-</td>
                                    </tr>
                                    <tr>
                                        <td>Erhöhungsschritt</td>
                                        <td>CHF 1.-</td>
                                    </tr>
                                    <tr>
                                        <td>Sofortkaufenpreis</td>
                                        <td>CHF 300.-</td>
                                    </tr>
                                    <tr>
                                        <td>Akzeptierte Zahlungskonditionen</td>
                                        <td>Zahlung im Voraus | Zahlung bei Abholung</td>
                                    </tr>
                                    <tr>
                                        <td>Akzeptierte Zahlungsmittel</td>
                                        <td>Ricardo Pay, Bar</td>
                                    </tr>
                                    <tr>
                                        <td>Startet am und endet am</td>
                                        <td>4. April 2013 13:45 | 10. April 2013 15:20</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="span2 text-right">
                        <a href="step3.php" class="btn">
                            Bearbeiten
                        </a>
                    </div>
                </div>
            </fieldset>
            <fieldset class="well">
                <h3>
                    Versand-Optionen
                </h3>
                <div class="row-fluid">
                    <div class="span10">
                        <div class="row-fluid">
                            <table class="table table-condensed table-first-column-title">
                                <tbody>
                                    <tr>
                                        <td class="span5">Lieferbar </td>
                                        <td class="span7">sofort</td>
                                    </tr>
                                    <tr>
                                        <td>Mögliche Versand-Optionen</td>
                                        <td>Brief A-Post (2.40 CHF) | Brief B-Post (1.50 CHF)</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="span2 text-right">
                        <a href="step1.php" class="btn">
                            Bearbeiten
                        </a>
                    </div>
                </div>
            </fieldset>
            <h3>Gebühren-Zusammenstellung</h3>
            <table class="table table-condensed table-striped" style="display:none;">
                <tbody>
                    <tr>
                        <td><label for="categoryFeatureBronze" class="checkbox">
                            <input type="checkbox" id="categoryFeatureBronze">
                            Gallerie-Promotion silber </label></td>
                        <td><span class="label label-info">Bis zu 5x mehr Besucher</span> | only CHF 5.00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label for="categoryFeatureSilver" class="checkbox">
                            <input type="checkbox" id="categoryFeatureSilver">
                            Category Feature silver </label></td>
                        <td><span class="label label-info">Up to 15x visitors</span> | only CHF 15.00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label for="categoryFeatureGold" class="checkbox">
                            <input type="checkbox" id="categoryFeatureGold">
                            Category Feature gold </label></td>
                        <td><span class="label label-info">Up to 20x visitors</span> | only CHF 20.00</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td><label for="frontpageTopOffer" class="checkbox">
                            <input type="checkbox" id="frontpageTopOffer">
                            Frontpage Top-Offer </label></td>
                        <td><span class="label label-info">Up to 200x visitors</span> | only CHF 40.00</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
            <table class="table table-condensed table-striped table-sum">
                <tbody>
                    <tr>
                        <td>Einstellgebüren</td>
                        <td colspan="2">0.05 CHF</td>
                    </tr>
                    <tr>
                        <td>Sofortkaufen-Option</td>
                        <td colspan="2">1.00 CHF</td>
                    </tr>
                                        <tr>
                        <td>Gallery-Promotion silber</td>
                        <td colspan="2">20.00 CHF</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td colspan="2">21.05 CHF</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<div class="form-actions">
    <a href="#" class="btn btn-success pull-right">List your item</a>
    <span class="separator muted pull-right separatorFloated"> | </span>
    <label class="checkbox inline pull-right">Ich akzeptiere die AGBs von ricardo.ch <input type="checkbox"></label>
</div>

<div id="modalPreview" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Artikel-Vorschau</h3>
	</div>
	<div class="modal-body">
	<!-- Modal-Body Start-->  
  	
    <img src="img/articlePreview.png"> 
	
	<!-- Modal-Body End-->
	<span class="clear"></span>
	</div>
	<!--<div class="modal-footer">
		<a href="#" class="btn">Close</a>
		<a href="#" class="btn btn-primary">Save changes</a>
	</div>-->
</div>

<?php $Layout -> end(); ?>