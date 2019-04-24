<!DOCTYPE html>
<html>
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "info";?>
</head>
  <body>
    <a id="skippy" class="sr-only sr-only-focusable" href="#content">
  <div class="container">
    <span class="skiplink-text">Skip to main content</span>
  </div>
</a>

  <header class="navbar navbar-expand navbar-dark flex-column flex-md-row bd-navbar">
    <?php include ('includes/head.php'); ?>
  </header>

    <div class="container-fluid">
      <div class="row flex-xl-nowrap">
        <div class="col-12 col-md-3 col-xl-2 bd-sidebar">
         </div>


        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="optik">Informatik</h1>
          <p class="bd-lead">Wichtige Sachen für die Informatik Prüfung.</p>
			
			<h2>Wichtige Informatik Begriffe </h2>
			<div class="pre-spoiler">
										<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
										<div class="spoiler" style="display: none;">
										
											  <ol style="list-style-type:none">
   <li><b>ISP --> In-System-Programming</b>
         <li>Programmierung ohne den Speicher entnehmen zu müssen</li>
												    <li><b>EEPROM --> Electrically-Erasable-Programmable-Read-Only-Memory</b>
         <li>Speicher welcher die Daten auch ohne Strom speichert.</li>
												    <li><b>Pulls</b>
         <li>Je nach Positionierung des Wiederstandes wird es ein Pull-up/down</li>
		 <ul>
         <li>Pull-down</li>
			 		 <ul>
         <li>Setzte die Spanung herunter</li>
		  </ul>
			 <li>Pull-up</li>
			 <ul>
         <li>Setzte die Spanung herauf</li>
		  </ul>
		  </ul>
												   <li><b>I/O --> Input/Output</b>
         <li>Ein/Ausgang für das System um Daten zu senden/empfangen</li>
												   <li><b>PWM --> Pulsemodulation</b>
         <li>Ein oft verwendeter ADC</li>
												  <li><b>CTC --> Clear Timer on Compare Match</b>
         <li>Timer Modus welcher den Timer nach erreichen des Wertes wieder auf 0 setzt.</li>
												  <li><b>ADC --> Analog - Digital - Converter</b>
         <li>Wandelt Analoge Signale zu digitalen um.</li>
												  <ul><li><b>Wichtige Werte</b></li>
												  <ul><li>Resolution</li> <li>Accuracy</li> <li>Sampling Rate</li><li>Relative Speed and precision</li></ul>
												  <li><b>Typische Typen</b></li>
												  <ul><li>Parallel comparator ADC</li> <li>Counter Type ADC</li> <li>Servo Tracking ADC</li></ul>
													  <li><b>DAC --> Digital - Analog - Converter</b>
         <li>Wandelt Digitale Signale zu Analogen um.</li>
												  <ul><li><b>Wichtige Werte</b></li>
												  <ul><li>Resolution</li> <li>Dynamic Range</li> <li>Maximum Sampling Rate</li><li>Monotoicity</li></ul>
												  <li><b>Typische Typen</b></li>
												  <ul><li>PWMs</li> <li>Oversampling DAC</li> </ul>
												  
												  </ul>
   </li>
   </ol>
											
		         </div>
			</div>
			<h2>Pinout Gscheiduino </h2>
			<div class="pre-spoiler">
										<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
										<div class="spoiler" style="display: none;">
			<img src="Pinout.jpg" width="80%" height="70%" alt=""/>
				</div>
			</div>
			
						<h2>Intrrupt Vektor Table </h2>
			<div class="pre-spoiler">
										<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
										<div class="spoiler" style="display: none;">
										
		        <img src="I_V_T.jpg" width="60%" height="60%"  alt="" />
			    <img src="vec_Table.jpg" width="683" height="691"  alt="" /> </div>
			</div>
			<br>
			<h2>Timer 0|1|2 </h2>
			<div class="pre-spoiler">
										<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
										<div class="spoiler" style="display: none;">
			
<h4>Wichtige Register</h4>
<table cellspacing="50" cellpadding="20" table border="1">
    <tr>
        <th>Abk&uuml;rzung</th>
        <th>Bezeichung</th>
        <th>Funktion</th>
    </tr>
    <tr>
        <td>TCNT<b>X</b></td>
        <td>timer / counter</td>
        <td>Z&auml;hlerwert</td>
    </tr>
    <tr>
        <td>OCR<b>X</b>A</td>
        <td>output compare register A</td>
        <td>Vergleichswert</td>
    </tr>
    <tr>
        <td>TIMSK<b>X</b></td>
        <td>timer interrupt mask register</td>
        <td>Interrupt aktivieren</td>
    </tr>
    <tr>
        <td>TCCR<b>X</b>A</td>
        <td>timer control register A</td>
        <td>Interrupt aktivieren</td>
    </tr>
    <tr>
        <td>TCCR<b>X</b>B</td>
        <td>timer control register A</td>
        <td>Prescaler</td>
    </tr>
</table>
</p><br>

<h4>Prescaler</h4>
<table cellspacing="50" cellpadding="20" table border="1">
    <tr>
        <th>CS<b>X</b>2</th>
        <th>CS<b>X</b>1</th>
        <th>CS<b>X</b>0</th>
        <th>Beschreibung</th>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>Timer angehalten</td>
    </tr>
    <tr>
        <td>0</td>
        <td>0</td>
        <td>1</td>
        <td>1:1 (kein Prescaling)</td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td>0</td>
        <td>1:8</td>
    </tr>
    <tr>
        <td>0</td>
        <td>1</td>
        <td>1</td>
        <td>1:64</td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td>0</td>
        <td>1:256</td>
    </tr>
    <tr>
        <td>1</td>
        <td>0</td>
        <td>1</td>
        <td>1:1024</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>0</td>
        <td>externe Taktquelle am Pin T0, Takt bei negativer Taktflanke</td>
    </tr>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>externe Taktquelle am Pin T0, Takt bei positiver Taktflanke</td>
    </tr>
</table>
</p><br>

<h4>Timer zur&uuml;cksetzen</h4>
<pre>
<span style="color: #7E7E7E;">//&nbsp;reset&nbsp;a&nbsp;timer&nbsp;unit&nbsp;(replace&nbsp;X&nbsp;by&nbsp;timer&nbsp;number)</span>
TCCRXA&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set TCCRXA register to 0</span>
TCCRXB&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set TCCRXB register to 0</span>
TCNTX&nbsp;&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// reset counter value</span>

</pre>
</p><br>

<h4>Timer aktivieren</h4>
<pre>
TCCR0A&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;WGM01);&nbsp;<span style="color: #7E7E7E;">// enable timer0 CTC mode</span>
TIMSK0&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;OCIE0A);&nbsp;<span style="color: #7E7E7E;">// enable timer0 compare interrupt</span>

TCCR1B&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;WGM12);&nbsp;<span style="color: #7E7E7E;">// enable timer1 CTC mode</span>
TIMSK1&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;OCIE1A);&nbsp;<span style="color: #7E7E7E;">// enable timer1 compare interrupt</span>

TCCR2A&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;WGM21);&nbsp;<span style="color: #7E7E7E;">// enable timer2 CTC mode</span>
TIMSK2&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;OCIE2A);&nbsp;<span style="color: #7E7E7E;">// enable timer2 compare interrupt</span>

</pre>
Hinweis: Bei Timer1 unterscheidet sich die Bezeichungen teilweise.
</p><br>


<h4>Timer Vergleichswert setzen</h4>
<pre>
OCR0A&nbsp;=&nbsp;124;&nbsp;<span style="color: #7E7E7E;">// set compare match register of timer 0 (max. value: 255 = 2^8 - 1)</span>
OCR1A&nbsp;=&nbsp;20233;&nbsp;<span style="color: #7E7E7E;">// set compare match register of timer 1 (max. value: 65535 = 2^16 - 1)</span>
OCR2A&nbsp;=&nbsp;20;&nbsp;<span style="color: #7E7E7E;">// set compare match register of timer 2 (max. value: 255 = 2^8 - 1)</span>

</pre>
</p><br>

<h4>Prescaler einstellen</h4>
<pre>
<span style="color: #7E7E7E;">//&nbsp;no&nbsp;prescaling&nbsp;for&nbsp;timer0</span>
TCCR0B&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS00);&nbsp;&nbsp;

<span style="color: #7E7E7E;">//&nbsp;1:1024&nbsp;prescaling&nbsp;for&nbsp;timer1</span>
TCCR1B&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS12)&nbsp;|&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS10);&nbsp;&nbsp;&nbsp;

<span style="color: #7E7E7E;">//&nbsp;1:1024&nbsp;prescaling&nbsp;for&nbsp;timer&nbsp;2</span>
TCCR2B&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS22)&nbsp;|&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS20);&nbsp;&nbsp;&nbsp;

</pre>
</p><br>

<h4>Bei Interrupt aufgerufenen Funktion</h4>
<pre>
ISR(TIMER0_COMPA_vect)&nbsp;{&nbsp;<span style="color: #7E7E7E;">// called by timer0</span>
&nbsp;&nbsp;
}

ISR(TIMER1_COMPA_vect)&nbsp;{&nbsp;<span style="color: #7E7E7E;">// called by timer1</span>
&nbsp;&nbsp;
}

ISR(TIMER2_COMPA_vect)&nbsp;{&nbsp;<span style="color: #7E7E7E;">// called by timer2</span>
&nbsp;&nbsp;
}

</pre>

</p><br>


<h4>Beispiel mit Timer1</h4>
<code style="background-color: #eee; ">
    <pre>
<span style="color: #CC6600;">long</span> i = 1;

<span style="color: #CC6600;">void</span> <span style="color: #CC6600;"><b>setup</b></span>() {
&nbsp;&nbsp;cli();&nbsp;<span style="color: #7E7E7E;">// disable interrupts</span>
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #7E7E7E;">// reset</span>
&nbsp;&nbsp;TCCR1A&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set TCCR1A register to 0</span>
&nbsp;&nbsp;TCCR1B&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set TCCR1B register to 0</span>
&nbsp;&nbsp;TCNT1&nbsp;&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// reset counter value</span>
&nbsp;&nbsp;
&nbsp;&nbsp;OCR1A&nbsp;=&nbsp;31249;&nbsp;<span style="color: #7E7E7E;">// compare match register</span>

&nbsp;&nbsp;<span style="color: #7E7E7E;">// set prescaler</span>
&nbsp;&nbsp;TCCR1B&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS12)&nbsp;|&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS10);&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;TCCR1B&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;WGM12);&nbsp;<span style="color: #7E7E7E;">// turn on CTC mode</span>
&nbsp;&nbsp;TIMSK1&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;OCIE1A);&nbsp;<span style="color: #7E7E7E;">// enable timer compare interrupt</span>
&nbsp;&nbsp;
&nbsp;&nbsp;sei();&nbsp;<span style="color: #7E7E7E;">// allow interrupts</span>
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;<span style="color: #CC6600;"><b>Serial</b></span>.<span style="color: #CC6600;">begin</span>(9600); <span style="color: #7E7E7E;">// start serial connection</span>
}

ISR(TIMER1_COMPA_vect)&nbsp;{ <span style="color: #7E7E7E;">// function which will be called when an interrupt occurs at timer 1
</span>
&nbsp;&nbsp;<span style="color: #CC6600;"><b>Serial</b></span>.<span style="color: #CC6600;">println</span>(i); <span style="color: #7E7E7E;">// send current value of i to the pc</span>
}

<span style="color: #CC6600;">void</span> <span style="color: #CC6600;"><b>loop</b></span>() {
&nbsp;&nbsp;i++;&nbsp;<span style="color: #7E7E7E;">// increment i</span>
}

</pre>
    
    </code>
</p><br>

<h4>Beispiel mit allen drei Timern</h4>
<pre>
<span style="color: #7E7E7E;">//&nbsp;timer0&nbsp;will&nbsp;interrupt&nbsp;at&nbsp;2kHz</span>
<span style="color: #7E7E7E;">//&nbsp;timer1&nbsp;will&nbsp;interrupt&nbsp;at&nbsp;1Hz</span>
<span style="color: #7E7E7E;">//&nbsp;timer2&nbsp;will&nbsp;interrupt&nbsp;at&nbsp;8kHz</span>

<span style="color: #CC6600;">void</span> <span style="color: #CC6600;"><b>setup</b></span>() {
&nbsp;&nbsp;cli();&nbsp;<span style="color: #7E7E7E;">// disable interrupts</span>
&nbsp;&nbsp;

&nbsp;&nbsp;<span style="color: #7E7E7E;">// timer0</span>
&nbsp;&nbsp;
&nbsp;&nbsp;TCCR0A&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set TCCR0A register to 0</span>
&nbsp;&nbsp;TCCR0B&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set TCCR0B register to 0</span>
&nbsp;&nbsp;TCNT0&nbsp;&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set counter value to 0</span>
&nbsp;&nbsp;
&nbsp;&nbsp;OCR0A&nbsp;=&nbsp;124;&nbsp;<span style="color: #7E7E7E;">// set compare match register</span>
&nbsp;&nbsp;
&nbsp;&nbsp;TCCR0B&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS01)&nbsp;|&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS00);&nbsp;<span style="color: #7E7E7E;">// Set CS01 and CS00 bits for 1:64 prescaler</span>

&nbsp;&nbsp;TCCR0A&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;WGM01);&nbsp;<span style="color: #7E7E7E;">// turn on CTC mode</span>
&nbsp;&nbsp;TIMSK0&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;OCIE0A);&nbsp;<span style="color: #7E7E7E;">// enable timer compare interrupt</span>
&nbsp;&nbsp;

&nbsp;&nbsp;<span style="color: #7E7E7E;">// timer1</span>
&nbsp;&nbsp;
&nbsp;&nbsp;TCCR1A&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set TCCR1A register to 0</span>
&nbsp;&nbsp;TCCR1B&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set TCCR1B register to 0</span>
&nbsp;&nbsp;TCNT1&nbsp;&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set counter value to 0</span>
&nbsp;&nbsp;
&nbsp;&nbsp;OCR1A&nbsp;=&nbsp;15624;&nbsp;<span style="color: #7E7E7E;">// set compare match register</span>
&nbsp;&nbsp;
&nbsp;&nbsp;TCCR1B&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS12)&nbsp;|&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS10);&nbsp;<span style="color: #7E7E7E;">// Set CS12 and CS10 bits for 1:1024 prescaler</span>

&nbsp;&nbsp;TCCR1B&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;WGM12);&nbsp;<span style="color: #7E7E7E;">// turn on CTC mode</span>
&nbsp;&nbsp;TIMSK1&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;OCIE1A);&nbsp;<span style="color: #7E7E7E;">// enable timer compare interrupt</span>
&nbsp;&nbsp;

&nbsp;&nbsp;<span style="color: #7E7E7E;">// timer2</span>
&nbsp;&nbsp;
&nbsp;&nbsp;TCCR2A&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set TCCR2A register to 0</span>
&nbsp;&nbsp;TCCR2B&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set TCCR2B register to 0</span>
&nbsp;&nbsp;TCNT2&nbsp;&nbsp;=&nbsp;0;&nbsp;<span style="color: #7E7E7E;">// set counter value to 0</span>
&nbsp;&nbsp;
&nbsp;&nbsp;OCR2A&nbsp;=&nbsp;249;&nbsp;<span style="color: #7E7E7E;">// set compare match register</span>
&nbsp;&nbsp;
&nbsp;&nbsp;TCCR2B&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;CS21);&nbsp;<span style="color: #7E7E7E;">// Set CS21 bits for 1:8 prescaler</span>

&nbsp;&nbsp;TCCR2A&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;WGM21);&nbsp;<span style="color: #7E7E7E;">// turn on CTC mode</span>
&nbsp;&nbsp;TIMSK2&nbsp;|=&nbsp;(1&nbsp;&lt;&lt;&nbsp;OCIE2A);&nbsp;<span style="color: #7E7E7E;">// enable timer compare interrupt</span>
&nbsp;&nbsp;
&nbsp;&nbsp;
&nbsp;&nbsp;sei();&nbsp;<span style="color: #7E7E7E;">// allow interrupts</span>

}


ISR(TIMER0_COMPA_vect)&nbsp;{
&nbsp;&nbsp;<span style="color: #7E7E7E;">// timer0 interrupt to-do code here</span>
}

ISR(TIMER1_COMPA_vect)&nbsp;{
&nbsp;&nbsp;<span style="color: #7E7E7E;">// timer1 interrupt to-do code here</span>
}
&nbsp;&nbsp;
ISR(TIMER2_COMPA_vect)&nbsp;{
&nbsp;&nbsp;<span style="color: #7E7E7E;">// timer2 interrupt to-do code here</span>
}


<span style="color: #CC6600;">void</span> <span style="color: #CC6600;"><b>loop</b></span>() {
&nbsp;&nbsp;<span style="color: #7E7E7E;">// other code</span>
}

</pre>
    
</p><br>                <br clear="all" style=" padding: 0; height: 0; width: 0; "/></p>
            </div>
          
</div>

    

			

        

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>