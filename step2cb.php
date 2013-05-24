<?php
require ('inc/layout.php');
$Layout->title='Selling';
$Layout->start();
?>
<h2>Welche Eigenschaften besitzt ihr Fahrzeug?</h2>

<form>
  <div class="row-fluid">
    <div class="span12 well">
      <div class="control-group">
        <label for="KMEutx" class="control-label">Kilometer *</label>
        <div class="controls">    
          <input type="text" size="11">
        </div>
      </div>
      <div class="control-group">
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
      <div class="control-group">
        <label class="control-label">Innenfarbe</label>
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
      <div class="control-group">
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
  </div>
  
  <div class="row-fluid">
    <div class="span12 well">
      <div class="control-group">
        <label class="control-label">Ab MFK</label>
        <div class="controls">
          <input type="radio" name="adWindow">
          Nein
          <input type="radio" name="adWindow">
          Ja
          <select name="monthMOTEutx" id="monthMOTEutx" tabindex="41">
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
          <select name="yearMOTEutx" id="yearMOTEutx" tabindex="42">
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
       <div class="control-group">
        <label class="control-label">Garantie</label>
        <div class="controls">
          <input type="radio" name="adWindow">
          Nein
          <input type="radio" name="adWindow">
          Ja
          <textarea class="span6" rows="3" placeholder="Beschreiben Sie die Garantie hier."></textarea>
        </div>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="span12 well">
    <div class="control-group">
        <label class="control-label">Zusätzliche Ausstattung</label>
        <div class="controls">
          <ul class="OptCheckLi">
            <li>
              <input type="checkbox">
              <label class="control-label">Tuning</label>
            </li>
            <li>
              <input type="checkbox">
              <label class="control-label">Für Export</label>
            </li>
            <li>
              <input type="checkbox">
              <label class="control-label">Unfallfahrzeug</label>
            </li>
            <li>
              <input type="checkbox">
              <label class="control-label">8fach bereift</label>
            </li>
            <li>
              <input type="checkbox">
              <label class="control-label">Anhängerkupplung</label>
            </li>
            <li>
              <input type="checkbox">
              <label class="control-label">Serviceheft vorhanden</label>
            </li>
            <li>
              <input type="checkbox">
              <label class="control-label">Nichtraucher-Fahrzeug</label>
            </li>
            <li>
              <input type="checkbox">
              <label class="control-label">WIR akzeptiert</label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</form>
<div class="form-actions">
    <a href="step2.php" class="btn btn-primary pull-right">Weiter zu &laquo;Artikelbeschreibung&raquo;</a>
</div>
<?php $Layout -> end(); ?>
