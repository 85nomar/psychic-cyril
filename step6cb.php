<?php
require ('inc/layout.php');
require ('inc/layout_cb.php');
$Layout -> title = 'Selling';
$Layout -> start();
$Layout_cb -> nav_cb();
?>

<h2>Und so wird es aussehen. Sind Sie damit einverstanden?</h2>

<div class="row-fluid">
    <div class="span3">
        <div id="articlePreview" class="row-fluid">
            <div class="span12">
                <img src="img/articlePreview_cars_tmb.jpg">
                <a href="#" class="btn"><i class="icon-share"></i> Vorschau anzeigen</a>
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
                <h3> Details </h3>
                <div class="row-fluid">
                    <div class="span10">
                        <div class="row-fluid">
                            <table class="table table-condensed table-first-column-title">
                                <tbody>
                                    <tr>
                                        <td class="span5">Aufbauart</td>
                                        <td class="span7">Limousine </td>
                                    </tr>
                                    <tr>
                                        <td>Treibstoff</td>
                                        <td>Benzin bleifrei </td>
                                    </tr>
                                    <tr>
                                        <td>Türen</td>
                                        <td> 5 </td>
                                    </tr>
                                    <tr>
                                        <td>Leistung PS</td>
                                        <td>115 PS</td>
                                    </tr>
                                    <tr>
                                        <td class="span5">Getriebeart</td>
                                        <td class="span7">Schaltgetriebe </td>
                                    </tr>
                                    <tr>
                                        <td>Erstzulassung</td>
                                        <td>02.2012</td>
                                    </tr>
                                    <tr>
                                        <td>Typenschein-Nummer</td>
                                        <td>1VD227</td>
                                    </tr>
                                    <tr>
                                        <td>Kilometerstand</td>
                                        <td>73'000</td>
                                    </tr>
                                    <tr>
                                        <td class="span5">Fahrzeugart</td>
                                        <td class="span7">Occasion </td>
                                    </tr>
                                    <tr>
                                        <td>Aussenfarbe</td>
                                        <td>blue</td>
                                    </tr>
                                    <tr>
                                        <td>Innenfarbe</td>
                                        <td>black</td>
                                    </tr>
                                    <tr>
                                        <td>Garantie</td>
                                        <td>12 Monate</td>
                                    </tr>
                                    <tr>
                                        <td>ab Mfk</td>
                                        <td>03.2013</td>
                                    </tr>
                                    <tr>
                                        <td>Zusätzliche Informationen</td>
                                        <td>Tuning, Set mit 8 Reifen, Nichtraucher-Fahrzeug</td>
                                    </tr>
                                    <tr>
                                        <td>Standard Ausstattung</td>
                                        <td><a href="step2cb.php">Siehe Auswahl in Schritt 2</a></td>
                                    </tr>
                                    <tr>
                                        <td>Optionale Ausstattung</td>
                                        <td><a href="step2cb.php">Siehe Auswahl in Schritt 2</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="span2 text-right">
                        <a href="step2cb.php" class="btn"> Bearbeiten </a>
                    </div>
                </div>
            </fieldset>
            <fieldset class="well">
                <h3> Beschreibung </h3>
                <div class="row-fluid">
                    <div class="span10">
                        <div class="row-fluid">
                            <table class="table table-condensed table-first-column-title">
                                <tbody>
                                    <tr>
                                        <td class="span5">Sprache</td>
                                        <td class="span7">Deutsch</td>
                                    </tr>
                                    <tr>
                                        <td>Titel</td>
                                        <td>Gold 1.6 FSI Comfort</td>
                                    </tr>
                                    <tr>
                                        <td>Untertitel</td>
                                        <td>Lorum ipsum doloresLorum ipsum dolores Lorum ipsum dolores</td>
                                    </tr>
                                    <tr>
                                        <td>Beschreibung</td>
                                        <td>Lorum ipsum doloresLorum ipsum dolores Lorum ipsum dolores</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="span2 text-right">
                        <a href="step2.php" class="btn"> Bearbeiten </a>
                    </div>
                </div>
            </fieldset>
            <fieldset class="well">
                <h3> Preis & Dauer des Angebots </h3>
                <div class="row-fluid">
                    <div class="span10">
                        <div class="row-fluid">
                            <table class="table table-condensed table-first-column-title">
                                <tbody>
                                    <tr>
                                        <td class="span5">Art der Anzeige</td>
                                        <td class="span7">Auktion </td>
                                    </tr>
                                    <tr>
                                        <td >Startpreis</td>
                                        <td >CHF 19'000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Erhöhungsschritt</td>
                                        <td>CHF 1.00</td>
                                    </tr>
                                    <tr>
                                        <td>Sofortkaufenpreis</td>
                                        <td>CHF 25'000.00</td>
                                    </tr>
                                    <tr>
                                        <td>Akzeptierte Zahlungskonditionen</td>
                                        <td>Zahlung im Voraus | Zahlung bei Abholung</td>
                                    </tr>
                                    <tr>
                                        <td>Akzeptierte Zahlungsmittel</td>
                                        <td>Bar</td>
                                    </tr>
                                    <tr>
                                        <td>Startet am</td>
                                        <td>3. May 2013 13:45</td>
                                    </tr>
                                    <tr>
                                        <td>Endet am</td>
                                        <td>10. May 2013 13:45</td>
                                    </tr>
                                    <tr>
                                        <td>Reaktivierung</td>
                                        <td>Nein</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="span2 text-right">
                        <a href="step3.php" class="btn"> Bearbeiten </a>
                    </div>
                </div>
            </fieldset>
            <h3>Gebühren</h3>
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
                        <td colspan="2">00.05 CHF</td>
                    </tr>
                    <tr>
                        <td>Option Top-Angebot Resultatseite</td>
                        <td colspan="2">05.00 CHF</td>
                    </tr>
                    <tr>
                        <td>Option Farbiger Hintergrund</td>
                        <td colspan="2">10.00 CHF</td>
                    </tr>
                    <tr>
                        <td>Option Startseite</td>
                        <td colspan="2">60.00 CHF</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td colspan="2">75.05 CHF</td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
</div>

<div class="form-actions">
    <a href="#" class="btn btn-success pull-right btn-large">online stellen</a>
    <span class="separator muted pull-right separatorFloated"> | </span>
    <label class="checkbox inline pull-right">Ich akzeptiere die AGBs von ricardo.ch
        <input type="checkbox">
    </label>
</div>

<div id="modalPreview" class="modal hide fade">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
            &times;
        </button>
        <h3>Artikel-Vorschau</h3>
    </div>
    <div class="modal-body">
        <!-- Modal-Body Start-->

        <img src="img/articlePreview_cars.jpg">

        <!-- Modal-Body End-->
        <span class="clear"></span>
    </div>
    <!--<div class="modal-footer">
    <a href="#" class="btn">Close</a>
    <a href="#" class="btn btn-primary">Save changes</a>
    </div>-->
</div>

<?php $Layout -> end(); ?>