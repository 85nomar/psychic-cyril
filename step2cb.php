<?php
require ('inc/layout.php');
require ('inc/layout_cb.php');
$Layout -> title = 'Selling';
$Layout -> start();
$Layout_cb -> nav_cb();
?>

<h2>Welche Eigenschaften besitzt ihr Fahrzeug?</h2>
<form>
  <section id="userSelection" class="step2 row-fluid">
    <div class="collapse-group">
      <div class="collapse-heading"> <a href="#userSelectionDetail" data-parent="#userSelection" data-toggle="collapse" class="collapse-toggle collapsed"><strong>Ihre Auswahl:</strong> VW Golf V 1.6 Comfort <small class="pull-right">Techische Details anzeigen</small><i class="icon-chevron-down pull-right"></i></a> </div>
      <div class="collapse-body collapse" id="userSelectionDetail">
        <div class="collapse-inner">
          <div class="row-fluid">
            <dl>
              <dt>Aufbauart</dt>
              <dd>Limousine</dd>
              <dt>Sitze</dt>
              <dd>5</dd>
              <dt>Türen</dt>
              <dd>5</dd>
              <dt>Leistung</dt>
              <dd>102 PS</dd>
              <dt>Getriebeart</dt>
              <dd>Schaltgetriebe</dd>
              <dt>Treibstoff</dt>
              <dd>Benzin bleifrei</dd>
              <dt>Zulassungsdatum</dt>
              <dd>04.2008</dd>
              <dt>Typenschein-Nummer</dt>
              <dd>1VD242</dd>
            </dl>
            <a href="step1.php" class="btn btn-small pull-right">zurück zur Auswahl</a> </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ++++++++++ NEXT SECTION ++++++++++ -->
  
  <section class="row-fluid">
    <div class="span12 well">
      <div class="control-group span3">
        <label for="KMEutx" class="control-label">Kilometer</label>
        <div class="controls">
          <input type="text" size="11">
        </div>
      </div>
      <div class="control-group span3">
        <label class="control-label">Aussenfarbe</label>
        <div class="controls">
          <select>
            <option value="-">Bitte wählen Sie...</option>
            <option value="10">schwarz</option>
            <option value="1">anthrazit</option>
            <option value="8">grau</option>
            <option value="2">silber</option>
            <option value="4">weiss</option>
            <option value="5">blau</option>
            <option value="15">türkis</option>
            <option value="16">grün</option>
            <option value="11">gold</option>
            <option value="9">gelb</option>
            <option value="3">beige</option>
            <option value="12">orange</option>
            <option value="13">rosarot</option>
            <option value="17">violett</option>
            <option value="14">rot</option>
            <option value="6">bordeaux</option>
            <option value="7">braun</option>
            <option value="41">Sonstiges</option>
          </select>
        </div>
      </div>
      <div class="control-group span3">
        <label class="control-label">Innenfarbe <span class="optionalField">(optional)</span></label>
        <div class="controls">
          <select>
            <option value="-">Bitte wählen Sie...</option>
            <option value="10">schwarz</option>
            <option value="1">anthrazit</option>
            <option value="8">grau</option>
            <option value="2">silber</option>
            <option value="4">weiss</option>
            <option value="5">blau</option>
            <option value="15">türkis</option>
            <option value="16">grün</option>
            <option value="11">gold</option>
            <option value="9">gelb</option>
            <option value="3">beige</option>
            <option value="12">orange</option>
            <option value="13">rosarot</option>
            <option value="17">violett</option>
            <option value="14">rot</option>
            <option value="6">bordeaux</option>
            <option value="7">braun</option>
            <option value="41">Sonstiges</option>
          </select>
        </div>
      </div>
      <div class="control-group span3">
        <label class="control-label">Fahrzeugart</label>
        <div class="controls">
          <select>
            <option value="-1">Bitte wählen Sie...</option>
            <option value="1">Occasion</option>
            <option value="2">Oldtimer</option>
            <option value="3">Neuwagen</option>
            <option value="4">Vorführwagen</option>
            <option value="7">Sonstiges</option>
          </select>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ++++++++++ NEXT SECTION ++++++++++ -->
  
  <section class="row-fluid">
    <div class="well span12">
      <div class="control-group span5">
        <label class="control-label span4"><strong>Letzte Inspektion</strong></label>
        <div class="controls span8">
          <select class="span7" name="monthMOTEutx" id="monthMOTEutx" tabindex="41">
            <option value="-" selected="selected">Monat</option>
            <option value="01">Januar</option>
            <option value="02">Februar</option>
            <option value="03">März</option>
            <option value="04">April</option>
            <option value="05">Mai</option>
            <option value="06">Juni</option>
            <option value="07">Juli</option>
            <option value="08">August</option>
            <option value="09">September</option>
            <option value="10">Oktober</option>
            <option value="11">November</option>
            <option value="12">Dezember</option>
          </select>
          <select class="span5" name="yearMOTEutx" id="yearMOTEutx" tabindex="42">
            <option value="-" selected="selected">Jahr</option>
            <option value="2013">2013</option>
            <option value="2012">2012</option>
            <option value="2011">2011</option>
            <option value="2010">2010</option>
            <option value="2009">2009</option>
            <option value="2008">2008</option>
            <option value="2007">2007</option>
            <option value="2006">2006</option>
            <option value="2005">2005</option>
            <option value="2004">2004</option>
            <option value="2003">2003</option>
            <option value="2002">2002</option>
            <option value="2001">2001</option>
            <option value="2000">2000</option>
            <option value="1999">1999</option>
            <option value="1998">1998</option>
            <option value="1997">1997</option>
            <option value="1996">1996</option>
            <option value="1995">1995</option>
            <option value="1994">1994</option>
            <option value="1993">1993</option>
            <option value="1992">1992</option>
            <option value="1991">1991</option>
            <option value="1990">1990</option>
            <option value="1989">1989</option>
            <option value="1988">1988</option>
            <option value="1987">1987</option>
            <option value="1986">1986</option>
            <option value="1985">1985</option>
            <option value="1984">1984</option>
            <option value="1983">1983</option>
            <option value="1982">1982</option>
            <option value="1981">1981</option>
            <option value="1980">1980</option>
          </select>
        </div>
      </div>
      <div class="control-group span5 offset1">
        <label class="control-label span4"><strong>Ab MFK</strong> <a href="#" data-toggle="tooltip" title="De letscht Inspektion is vo maximal eim Johr gsi"><i class="icon-info-sign"></i></a></label>
        <div class="controls span8">
          <input type="radio" name="fromInspection" checked="checked">
          Nein
          <input type="radio" name="fromInspection">
          Ja </div>
      </div>
    </div>
  </section>
  
  <!-- ++++++++++ NEXT SECTION ++++++++++ -->
  
  <section class="row-fluid" id="additionalEquipement">
    <div class="well">
      <div class="control-group">
        <label class="control-label"><strong>Zusätzliche Informationen</strong> <span class="optionalField">(optional)</span></label>
        <div class="controls">
          <ul class="optionList">
            <li> <i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Tuning</label>
            </li>
            <li> <i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Für Export</label>
            </li>
            <li> <i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Unfallfahrzeug</label>
            </li>
            <li> <i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Anhängerkupplung</label>
            </li>
            <li> <i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Serviceheft vorhanden</label>
            </li>
            <li> <i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Nichtraucher-Fahrzeug</label>
            </li>
            <li> <i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">WIR akzeptiert</label>
            </li>
            <li> <i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">8fach bereift<br />
                <small>Sommer + Winter</small></label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  
  <!-- ++++++++++ NEXT SECTION ++++++++++ -->
  
  <section class="row-fluid" id="standardEquipement">
    <div class="collapse-group">
    <div class="collapse-heading"><a href="#standardFeature" data-parent="#standardEquipement" data-toggle="collapse" class="collapse-toggle collapsed"><strong>Serienausstattung gemäss Hersteller</strong> <span title="Gerade bei Importfahrzeugen kann die tatsächliche Ausstattung von der für das Verkaufsland vorgesehenen Ausstattung abweichen!" data-toggle="tooltip"><i class="icon-info-sign"></i></span><i class="icon-collapse"></i></a> </div>
    
    <!-- START STANDARD-FEATURES -->
    
    <div id="standardFeature" class="collapse-body collapse">
      <div class="collapse-inner">
        <div class="row-fluid">
          <div class="span9">
            <h4>Antrieb / Fahrwerk <i class="icon-collapse"></i></h4>
            <ul class="optionList">
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Auspuffendrohr Sport Design</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Auspuffblende</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Komfortfahrwerk</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Antriebsschlupfregelung (ASR)</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Fahrdynamik Paket</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Elektronisches Stabilitäts-Programm (ESP) mit Berganfahrassistent</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">4 Rad Lenkung</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Motorschutzblech</label>
              </li>
            </ul>
            <h4> Audio / Kommunikation / Instrumente <i class="icon-collapse"></i></h4>
            <ul class="optionList">
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Multifunktionslenkrad mit Tempomat</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Farbige Zifferblätter</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Multifunktionsanzeige 'Plus'</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Bordinstrumente mit weisser Beleuchtung<BR>
                  und Multifunktionsdisplay</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Tempomat inkl. SPEEDTRONIC</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Instrumentenbeleuchtung, regelbar</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Bordcomputer im Fond</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Media Interface</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Parksensoren vorne und hinten lackiert</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Parkassistent vorne und hinten</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Aussentemperaturanzeige</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Voltmeter, Oeldruck-, Oeltemperatur-<BR>
                  anzeige</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Reifendruck-Kontrollanzeige</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Gurtstatusanzeige fnr Fondsitze</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">iPod + USB Anschluss</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">7 Premium Lautsprecher</label>
              </li>
            </ul>
            <h4> Komfort/Innen & Aussen <i class="icon-collapse"></i></h4>
            <ul class="optionList">
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Servolenkung</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Dach in Wagenfarbe</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Colorverglasung</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Heckscheibenheizung</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Aussenspiegelpaket</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Blinker in Aussenspiegel</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Elektrisches Schiebe-/Hebedach</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Heckklappe mit Scheibenwischer</label>
              </li>
            </ul>
            <h4> Laden/Ziehen/Transport <i class="icon-collapse"></i></h4>
            <ul class="optionList">
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Komfortschlüssel inklusive sensorgesteuerter Gepäckraumentriegelung</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Beifahrersitz-Rückenlehne umklappbar</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Rücksitze geteilt abklappbar</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Kofferraummatte</label>
              </li>
            </ul>
            <h4> Optik/Tuning <i class="icon-collapse"></i></h4>
            <ul class="optionList">
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Verchromtes Auspuffendrohr</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Leichtmetallräder im 6-Speichen-Design</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Seitenschutzleisten in Wagenfarbe</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Chrom-Paket</label>
              </li>
            </ul>
            <h4> Sicherheit <i class="icon-collapse"></i></h4>
            <ul class="optionList">
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">ABS, EBD<BR>
                  mit elektronischer Bremskraftverteilung</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Automatische StabilitSts-Control (ASC)</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Wegfahrsperre</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Winterkomplettradsatz</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Nebelscheinwerfer</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Fernlichtassistent</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Bi-Xenon-Lichtanlage mit automatischer<BR>
                  Leuchtweitenregulierung inkl.Kurvenlicht</label>
              </li>
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Drittes Bremslicht LED</label>
              </li>
            </ul>
            <h4> Diverses <i class="icon-collapse"></i></h4>
            <ul class="optionList">
              <li> <i class="icon-select"></i>
                <input type="checkbox" checked="checked">
                <label class="control-label">Winter-Paket</label>
              </li>
            </ul>
          </div>
          <div class="collapse-control span3"><a href="#" class="btn btn-small"><i class="icon-edit"></i> Ausstattung anpassen></a></div>
        </div>
      </div>
    </div>
    
    <!-- END STANDART-FEATURES --> 
  </section>
  
  <!-- ++++++++++ NEXT SECTION ++++++++++ -->
  
  <section class="row-fluid" id="optionalEquipement">
    <div class="collapse-group">
      <div class="collapse-heading"> <a href="#optionalFeature" data-parent="#optionalEquipement" data-toggle="collapse" class="collapsed"><strong>Optionale Ausstattung</strong><i class="icon-collapse"></i></a> </div>
      <div id="optionalFeature" class="collapse-body collapse in">
        <div class="collapse-inner">
          <div class="row-fluid"> 
            <!-- START OPTIONAL-FEATURES -->
            <div class="span9">
              <div class="collapse-group">
                <div class="collapse-heading"> <a data-toggle="collapse" data-parent="#optionalFeature" href="#collapse21">Antrieb / Fahrwerk <i class="icon-collapse"></i></a></div>
                <div id="collapse21" class="collapse-body collapse in">
                  <div class="collapse-inner">
                    <div class="row-fluid">
                      <ul class="optionList">
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Auspuffendrohr Sport Design</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Auspuffblende</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Komfortfahrwerk</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Antriebsschlupfregelung (ASR)</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Fahrdynamik Paket</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Elektronisches Stabilitäts-Programm (ESP) mit Berganfahrassistent</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">4 Rad Lenkung</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Motorschutzblech</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="collapse-group">
                <div class="collapse-heading"> <a data-toggle="collapse" data-parent="#optionalFeature" href="#collapse22">Audio / Kommunikation / Instrumente <i class="icon-collapse"></i></a></div>
                <div id="collapse22" class="collapse-body collapse">
                  <div class="collapse-inner">
                    <div class="row-fluid">
                      <ul class="optionList">
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Multifunktionslenkrad mit Tempomat</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Farbige Zifferblätter</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Multifunktionsanzeige 'Plus'</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Bordinstrumente mit weisser Beleuchtung<BR>
                            und Multifunktionsdisplay</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Tempomat inkl. SPEEDTRONIC</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Instrumentenbeleuchtung, regelbar</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Bordcomputer im Fond</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Media Interface</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Parksensoren vorne und hinten lackiert</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Parkassistent vorne und hinten</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Aussentemperaturanzeige</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Voltmeter, Oeldruck-, Oeltemperatur-<BR>
                            anzeige</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Reifendruck-Kontrollanzeige</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Gurtstatusanzeige fnr Fondsitze</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">iPod + USB Anschluss</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">7 Premium Lautsprecher</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="collapse-group">
                <div class="collapse-heading"> <a data-toggle="collapse" data-parent="#optionalFeature" href="#collapse23">Komfort/Innen & Aussen <i class="icon-collapse"></i></a></div>
                <div id="collapse23" class="collapse-body collapse">
                  <div class="collapse-inner">
                    <div class="row-fluid">
                      <ul class="optionList">
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Servolenkung</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Dach in Wagenfarbe</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Colorverglasung</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Heckscheibenheizung</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Aussenspiegelpaket</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Blinker in Aussenspiegel</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Elektrisches Schiebe-/Hebedach</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Heckklappe mit Scheibenwischer</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="collapse-group">
                <div class="collapse-heading"> <a data-toggle="collapse" data-parent="#optionalFeature" href="#collapse24">Laden/Ziehen/Transport <i class="icon-collapse"></i></a></div>
                <div id="collapse24" class="collapse-body collapse">
                  <div class="collapse-inner">
                    <div class="row-fluid">
                      <ul class="optionList">
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Komfortschlüssel inklusive sensorgesteuerter Gepäckraumentriegelung</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Beifahrersitz-Rückenlehne umklappbar</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Rücksitze geteilt abklappbar</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Kofferraummatte</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="collapse-group">
                <div class="collapse-heading"> <a data-toggle="collapse" data-parent="#optionalFeature" href="#collapse25">Optik/Tuning <i class="icon-collapse"></i></a></div>
                <div id="collapse25" class="collapse-body collapse">
                  <div class="collapse-inner">
                    <div class="row-fluid">
                      <ul class="optionList">
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Verchromtes Auspuffendrohr</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Leichtmetallräder im 6-Speichen-Design</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Seitenschutzleisten in Wagenfarbe</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Chrom-Paket</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="collapse-group">
                <div class="collapse-heading"> <a data-toggle="collapse" data-parent="#optionalFeature" href="#collapse26">Sicherheit <i class="icon-collapse"></i></a></div>
                <div id="collapse26" class="collapse-body collapse">
                  <div class="collapse-inner">
                    <div class="row-fluid">
                      <ul class="optionList">
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">ABS, EBD<BR>
                            mit elektronischer Bremskraftverteilung</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Automatische StabilitSts-Control (ASC)</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Wegfahrsperre</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Winterkomplettradsatz</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Nebelscheinwerfer</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Fernlichtassistent</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Bi-Xenon-Lichtanlage mit automatischer<BR>
                            Leuchtweitenregulierung inkl.Kurvenlicht</label>
                        </li>
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Drittes Bremslicht LED</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="collapse-group">
                <div class="collapse-heading"> <a data-toggle="collapse" data-parent="#optionalFeature" href="#collapse27">Diverses <i class="icon-collapse"></i></a></div>
                <div id="collapse27" class="collapse-body collapse">
                  <div class="collapse-inner">
                    <div class="row-fluid">
                      <ul class="optionList">
                        <li> <i class="icon-select"></i>
                          <input type="checkbox">
                          <label class="control-label">Winter-Paket</label>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="collapse-control span3 pull-right"> <a href="#" class="showall btn btn-small"><i class="icon-chevron-down"></i> alle anzeigen</a> <a href="#" class="hideall hidden btn btn-small"><i class="icon-chevron-up"></i> alle ausblenden</a> </div>
          </div>
        </div>
        
        <!-- END OPTIONAL-FEATURES --> 
        
      </div>
    </div>
  </section>
  
  <!-- ++++++++++ NEXT SECTION ++++++++++ -->
  
  <section class="form-actions"> <a href="step2.php" class="btn btn-primary toNext">Weiter</a> <a href="step6.php" class="btn toOverview">Zurück zur &laquo;<?php echo $Layout_cb->formNav[5]["title"]; ?>&raquo;</a> </section>
</form>
<?php $Layout -> end(); ?>
