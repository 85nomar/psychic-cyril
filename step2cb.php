<?php
require ('inc/layout.php');
$Layout->title='Selling';
$Layout->start();
?>
<h2>Welche Eigenschaften besitzt ihr Fahrzeug?</h2>

<div id="userSelection" class="accordion step2">
    <div class="accordion-group">
        <div class="accordion-heading">
            <a href="#userSelectionDetail" data-parent="#userSelection" data-toggle="collapse" class="accordion-toggle collapsed"><strong>Ihre Auswahl:</strong> VW Golf V 1.6 Comfort <span class="small pull-right">Techische Details anzeigen</span><i class="icon-chevron-down pull-right"></i></a>
        </div>
        <div class="accordion-body collapse" id="userSelectionDetail">
            <div class="accordion-inner">
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
                </div>
            </div>
        </div>
    </div>
</div>

<form>
  <div class="row-fluid">
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
  </div>
  
  <div class="row-fluid">
    <div class="span12 well">
      <div class="control-group span6">
        <label class="control-label">Ab MFK</label>
        <div class="controls">
        	<div class="span3">
            <input type="radio" name="fromInspection"> Nein
            <input type="radio" name="fromInspection"> Ja
          </div>
          <div class="span9">
          	<span class="span4 optionalField">Letzte Inspection</span>
            <select class="span5" name="monthMOTEutx" id="monthMOTEutx" tabindex="41">
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
            <select class="span3" name="yearMOTEutx" id="yearMOTEutx" tabindex="42">
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
       </div>
       <div class="control-group span6">
        <label class="control-label">Garantie <span class="optionalField">(optional)</span></label>
        <div class="controls">
        	<div class="span3">
            <input type="radio" name="hasGuarantee"> Nein
            <input type="radio" name="hasGuarantee"> Ja
           </div>
           <div class="span9">
           	<textarea class="span12" rows="3" placeholder="Beschreiben Sie die Garantie hier."></textarea>
           </div>
        </div>
      </div>
    </div>
  </div>
  <script>
		function customCheckList(target){
			$(target).find('.optionList input:checked').parent().addClass('selected');
			$(target).find('.optionList label').each(function(){
				$(this).click(function(){
					$(this).parent().toggleClass('selected').find('input').attr('checked','checked');
				});
			});
		}
		
		function limitList(target,limit,threshold){
			
			var listTarget = $(target).find('ul');
			
			listTarget.each(function(){
				var listLength = $(this).children('li').size();				
				if (listLength > threshold) {				
					for (i=0;i < listLength;i++){
						if(i>=limit){
							$(this).children('li').eq(i).addClass('hiddenFirst');
						}
					}					
					$(this).after('<div class="listLimiter"> <a href="#" class="btn btn-small pull-right"><i class="icon-chevron-down"></i> alle anzeigen ('+listLength+')</a></div>');
				}			
			});
			$('.listLimiter .btn').click(function(event) {
				event.preventDefault();
				hiddenList = $(this).parent().prev();				
				hiddenList.find('li.hiddenFirst').each(function(index) {
					$(this).delay(100 * index - 3).fadeIn(150);
				});
				$(this).parent().hide();
				
      });
		}
		
  	$(document).ready(function(e) {
      customCheckList('#additionalEquipement, #standardEquipement, #standardFeatureAcc, #optionalEquipement, #optionalFeatureAcc');
			//limitList('#standardEquipement',2,2);
			//limitList('#optionalEquipement',4,6);
    });
  </script>
  <div class="row-fluid" id="additionalEquipement">
    <div class="span12 well">
   		<div class="control-group">
        <label class="control-label">Zusätzliche Ausstattung <span class="optionalField">(optional)</span></label>
        <div class="controls">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Tuning</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Für Export</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Unfallfahrzeug</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">8fach bereift</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Anhängerkupplung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Serviceheft vorhanden</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Nichtraucher-Fahrzeug</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">WIR akzeptiert</label>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row-fluid" id="standardEquipement">
    <div class="span12 well">
   		<div class="control-group">
        <label class="control-label">Standard Ausstattung <span class="optionalField">(optional)</span></label>
        
        <div class="controls">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Komfortfahrwerk</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Antriebsschlupfregelung (ASR)</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Fahrdynamik Paket</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Elektronisches Stabilitäts-Programm (ESP) mit Berganfahrassistent</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">4 Rad Lenkung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Multifunktionslenkrad mit Tempomat</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Tempomat inkl. SPEEDTRONIC</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Bordcomputer im Fond</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Media Interface</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Parkassistent vorne und hinten</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Servolenkung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Dach in Wagenfarbe</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Aussenspiegelpaket</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Elektrisches Schiebe-/Hebedach</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Komfortschlüssel inklusive sensorgesteuerter Gepäckraumentriegelung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Leichtmetallräder im 6-Speichen-Design<</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Seitenschutzleisten in Wagenfarbe</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Chrom-Paket</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">ABS, EBD<BR>mit elektronischer Bremskraftverteilung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Winterkomplettradsatz</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Fernlichtassistent</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Bi-Xenon-Lichtanlage mit automatischer<BR>Leuchtweitenregulierung inkl.Kurvenlicht</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Winter-Paket</label>
            </li>
          </ul>
        </div>
        
        <a href="#modalStandardFeatures" role="button" class="btn btn-small pull-right" data-toggle="modal">alle anzeigen</a>
          
      </div>
    </div>
  </div>
  
  <div class="row-fluid" id="optionalEquipement">
    <div class="span12 well">
   		<div class="control-group">
        <label class="control-label">Optionale Ausstattung <span class="optionalField">(optional)</span></label>
        
        <h4>Antrieb / Fahrwerk</h4>
        <div class="controls">
          <ul class="optionList">
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Fahrdynamik Paket</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Motorschutzblech</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Auspuffendrohr Sport Design</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Antriebsschlupfregelung (ASR)</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Instrumentenbeleuchtung, regelbar</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Farbige Zifferblätter</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Multifunktionsanzeige 'Plus'</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Bordinstrumente mit weisser Beleuchtung<BR>und Multifunktionsdisplay</label>
            </li>            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Parksensoren vorne und hinten lackiert</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Gurtstatusanzeige fnr Fondsitze</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">iPod + USB Anschluss</label>
            </li>    
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Blinker in Aussenspiegel</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Elektrisches Schiebe-/Hebedach</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Dach in Wagenfarbe</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Colorverglasung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Rücksitze geteilt abklappbar</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Seitenschutzleisten in Wagenfarbe</label>
            </li> 
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Fernlichtassistent</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Drittes Bremslicht LED</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Automatische StabilitSts-Control (ASC)</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Winterkomplettradsatz</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Leder-Paket</label>
            </li>
          </ul>
        </div>
        
        <a href="#modalOptionalFeatures" role="button" class="btn btn-small pull-right" data-toggle="modal">alle anzeigen</a>
          
      </div>
    </div>
  </div>
  
<div id="modalStandardFeatures" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Standard Austattung</h3>
	</div>
	<div class="modal-body">
	<!-- Modal-Body Start-->
  
  	<div class="accordion" id="standardFeatureAcc">
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#standardFeatureAcc" href="#collapse11">Antrieb / Fahrwerk</a>
      </div>
      <div id="collapse11" class="accordion-body collapse in">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Auspuffendrohr Sport Design</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Auspuffblende</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Komfortfahrwerk</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Antriebsschlupfregelung (ASR)</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Fahrdynamik Paket</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Elektronisches Stabilitäts-Programm (ESP) mit Berganfahrassistent</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">4 Rad Lenkung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Motorschutzblech</label>
            </li>
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#standardFeatureAcc" href="#collapse12">Audio / Kommunikation / Instrumente</a>
      </div>
      <div id="collapse12" class="accordion-body collapse">
        <div class="accordion-inner">
         <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Multifunktionslenkrad mit Tempomat</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Farbige Zifferblätter</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Multifunktionsanzeige 'Plus'</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Bordinstrumente mit weisser Beleuchtung<BR>und Multifunktionsdisplay</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Tempomat inkl. SPEEDTRONIC</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Instrumentenbeleuchtung, regelbar</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Bordcomputer im Fond</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Media Interface</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Parksensoren vorne und hinten lackiert</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Parkassistent vorne und hinten</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Aussentemperaturanzeige</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Voltmeter, Oeldruck-, Oeltemperatur-<BR>anzeige</label>
            </li>            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Reifendruck-Kontrollanzeige</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Gurtstatusanzeige fnr Fondsitze</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">iPod + USB Anschluss</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">7 Premium Lautsprecher</label>
            </li>            
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#standardFeatureAcc" href="#collapse13">Komfort/Innen & Aussen</a>
      </div>
      <div id="collapse13" class="accordion-body collapse">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Servolenkung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Dach in Wagenfarbe</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Colorverglasung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Heckscheibenheizung</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Aussenspiegelpaket</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Blinker in Aussenspiegel</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Elektrisches Schiebe-/Hebedach</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Heckklappe mit Scheibenwischer</label>
            </li>            
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#standardFeatureAcc" href="#collapse14">Laden/Ziehen/Transport</a>
      </div>
      <div id="collapse14" class="accordion-body collapse">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Komfortschlüssel inklusive sensorgesteuerter Gepäckraumentriegelung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Beifahrersitz-Rückenlehne umklappbar</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Rücksitze geteilt abklappbar</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Kofferraummatte</label>
            </li>
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#standardFeatureAcc" href="#collapse15">Optik/Tuning</a>
      </div>
      <div id="collapse15" class="accordion-body collapse">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Verchromtes Auspuffendrohr</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Leichtmetallräder im 6-Speichen-Design<</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Seitenschutzleisten in Wagenfarbe</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Chrom-Paket</label>
            </li>
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#standardFeatureAcc" href="#collapse16">Sicherheit</a>
      </div>
      <div id="collapse16" class="accordion-body collapse">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">ABS, EBD<BR>mit elektronischer Bremskraftverteilung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Automatische StabilitSts-Control (ASC)</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Wegfahrsperre</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Winterkomplettradsatz</label>
            </li>  
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Nebelscheinwerfer</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Fernlichtassistent</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Bi-Xenon-Lichtanlage mit automatischer<BR>Leuchtweitenregulierung inkl.Kurvenlicht</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Drittes Bremslicht LED</label>
            </li>
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#standardFeatureAcc" href="#collapse17">Diverses</a>
      </div>
      <div id="collapse17" class="accordion-body collapse">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox" checked="checked">
              <label class="control-label">Winter-Paket</label>
            </li>
          </ul>
        </div>
      </div>
     </div>    
    
  	</div>    
	
	<!-- Modal-Body End-->
	<span class="clear"></span>
	</div>
	<!--<div class="modal-footer">
		<a href="#" class="btn">Close</a>
		<a href="#" class="btn btn-primary">Save changes</a>
	</div>-->
</div>
  
<div id="modalOptionalFeatures" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h3>Optionale Austattung</h3>
	</div>
	<div class="modal-body">
	<!-- Modal-Body Start-->
  
  	<div class="accordion" id="optionalFeatureAcc">
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#optionalFeatureAcc" href="#collapse21">Antrieb / Fahrwerk</a>
      </div>
      <div id="collapse21" class="accordion-body collapse in">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Auspuffendrohr Sport Design</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Auspuffblende</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Komfortfahrwerk</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Antriebsschlupfregelung (ASR)</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Fahrdynamik Paket</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Elektronisches Stabilitäts-Programm (ESP) mit Berganfahrassistent</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">4 Rad Lenkung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Motorschutzblech</label>
            </li>
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#optionalFeatureAcc" href="#collapse22">Audio / Kommunikation / Instrumente</a>
      </div>
      <div id="collapse22" class="accordion-body collapse">
        <div class="accordion-inner">
         <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Multifunktionslenkrad mit Tempomat</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Farbige Zifferblätter</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Multifunktionsanzeige 'Plus'</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Bordinstrumente mit weisser Beleuchtung<BR>und Multifunktionsdisplay</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Tempomat inkl. SPEEDTRONIC</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Instrumentenbeleuchtung, regelbar</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Bordcomputer im Fond</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Media Interface</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Parksensoren vorne und hinten lackiert</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Parkassistent vorne und hinten</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Aussentemperaturanzeige</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Voltmeter, Oeldruck-, Oeltemperatur-<BR>anzeige</label>
            </li>            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Reifendruck-Kontrollanzeige</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Gurtstatusanzeige fnr Fondsitze</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">iPod + USB Anschluss</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">7 Premium Lautsprecher</label>
            </li>            
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#optionalFeatureAcc" href="#collapse23">Komfort/Innen & Aussen</a>
      </div>
      <div id="collapse23" class="accordion-body collapse">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Servolenkung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Dach in Wagenfarbe</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Colorverglasung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Heckscheibenheizung</label>
            </li>
            
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Aussenspiegelpaket</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Blinker in Aussenspiegel</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Elektrisches Schiebe-/Hebedach</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Heckklappe mit Scheibenwischer</label>
            </li>            
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#optionalFeatureAcc" href="#collapse24">Laden/Ziehen/Transport</a>
      </div>
      <div id="collapse24" class="accordion-body collapse">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Komfortschlüssel inklusive sensorgesteuerter Gepäckraumentriegelung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Beifahrersitz-Rückenlehne umklappbar</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Rücksitze geteilt abklappbar</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Kofferraummatte</label>
            </li>
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#optionalFeatureAcc" href="#collapse25">Optik/Tuning</a>
      </div>
      <div id="collapse25" class="accordion-body collapse">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Verchromtes Auspuffendrohr</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Leichtmetallräder im 6-Speichen-Design<</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Seitenschutzleisten in Wagenfarbe</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Chrom-Paket</label>
            </li>
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#optionalFeatureAcc" href="#collapse26">Sicherheit</a>
      </div>
      <div id="collapse26" class="accordion-body collapse">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">ABS, EBD<BR>mit elektronischer Bremskraftverteilung</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Automatische StabilitSts-Control (ASC)</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Wegfahrsperre</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Winterkomplettradsatz</label>
            </li>  
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Nebelscheinwerfer</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Fernlichtassistent</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Bi-Xenon-Lichtanlage mit automatischer<BR>Leuchtweitenregulierung inkl.Kurvenlicht</label>
            </li>
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Drittes Bremslicht LED</label>
            </li>
          </ul>
        </div>
      </div>
     </div>
    
     <div class="accordion-group">
      <div class="accordion-heading">
        <a class="accordion-toggle" data-toggle="collapse" data-parent="#optionalFeatureAcc" href="#collapse27">Diverses</a>
      </div>
      <div id="collapse27" class="accordion-body collapse">
        <div class="accordion-inner">
          <ul class="optionList">
            <li>
            	<i class="icon-select"></i>
              <input type="checkbox">
              <label class="control-label">Winter-Paket</label>
            </li>
          </ul>
        </div>
      </div>
     </div>    
    
  	</div>    
	
	<!-- Modal-Body End-->
	<span class="clear"></span>
	</div>
	<!--<div class="modal-footer">
		<a href="#" class="btn">Close</a>
		<a href="#" class="btn btn-primary">Save changes</a>
	</div>-->
</div>
  
</form>
<div class="form-actions">
    <a href="step2.php" class="btn btn-primary pull-right">Weiter zu &laquo;Artikelbeschreibung&raquo;</a>
</div>
<?php $Layout -> end(); ?>
