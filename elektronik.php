<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "elektronik";?>
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
          <h1 class="bd-title" id="optik">Elektronik</h1>
          <p class="bd-lead">Elektronik, whatever</p>
			
			
			<br>

<table cellspacing="50" cellpadding="20" table border="1">
  <tr>
    <th>Begriff</th>
    <th>Erklärung</th>
    <th>Zusatz</th>
  </tr>
	  <tr>
    <td><b>Halbleiter</b></td>
    <td>Halbleiter sind Isolatoren, welche durch Erwärmung elektrisch leitfähig werden. Zu den bekanntesten Halbleitern gehören folgende Stoffe: <br>
		<ol>
		<li>Silizium (Si,14)</li>
			<li>Germanium (Ge,32</li>
			<li>GaP,GaAs(Gallium-Arsenid,CdS(Cadium-Sulfid)</li>
		</ol> <br>
		
		Desto wärmer Halbleiter werden desto besser leiten sie, auch als <b>NTC(Negative Temperature Coefficient) - Wiederstand</b> bezeichnet. <br>
		
		Grundsätzlich gibt es <b>KRistalline</b> und <b>amorphe</b> Halbleiter. <br>	
		
		Silizium hat somit 4 Valenzelektronen, dies führt dazu das Silizium eigentlich 8 Elektronen haben wollen würde, im Kristallgitter teilen sich 2 Si-Atoma ein Valenzelektron, dies führ zu Löchern im Gitter, das ist dann die Leitfähigkeit. <br><br>
		
		<b>Dotierung</b> <br>
		Bei der Dortierung gibt es 2 verschiedene Varianten, die N-Dortierung und die P-Dotierung: <br>
		<ol>
		<li>N-Dotierung:</li>
		<ul><li>Hinzufügen von höherwertigen Atomin mit 5 Valenzelektronen(Donatoren) dies führt zu Elektronenüberschuss</li></ul>
		<li>P-Dotierung:</li>
		<ul><li>Hinzufügen von tieferwertigen Atomin mit 3 Valenzelektronen(Akzeptoren) dies führt zu Elektronenlöchern</li></ul>
		</ol></td>
    <td>      <img src="bilder/halbleiter.gif" width="160%" height="160%" alt=""/></td>
		  <tr>
    <td><b>Dioden</b></td>
    <td>Eine Diode besteht aus einer N-Schicht und einer P-Schicht, die Anode also der Pluspol ist somit an der P-Schicht, der Minuspol die Kathode ist an der N-Schicht. <br><br>
		Zwischen diesen Beiden Schichten gibt es noch die <b>Raumladungszone(RLZ)</b>, in diesem Ort zwischen den Schichten gibt es keine freien Elektroen, sobald man Spannung anlegt wird dieser Bereich kleiner somit kann anschliessend ein Fluss entstehen. <br>
		
		  <img src="diode.jpg" width="30%" height="30%" alt=""/> <br><br>
		
		Für die Diode gibt es eine Diodenkennline, diese beschreibt das Verhalten der Diode in verschiedenen Abschnitten. <br>
		
		<table cellspacing="50" cellpadding="20" table border="1"> 
			<tr>
			<td><b>Durchbruchbereich</b><br> Durchbruchspannung: U<sub>D,BR</sub> <br> Durchbruchstrom I<sub>D,BR</sub></td>
				<td>Ab einer bestimmten Sperrspannung U<sub>BR</sub> werden die Elektronen aus dem Gitter gelöst und der Stri steigt schlagartig zu steigen und die Diode ist zerstört.</td>
			<td rowspan="3"><img src="kennl.png" width="160%" height="160%" alt=""/></td>	
			</tr>
			<tr>
			<td><b>Sperrbereich</b> <br> Sperrspannung U<sub>R</sub> <br> Sperrstrom I<sub>S</sub></td>
				<td>Bei einer Diode gibt es einen sehr kleinen Sperrstrom(meist bis 0.7V) Die Sperrschicht ist jetzt noch sehr gross und es fliesst nur ein ganz kleiner Strom.</td>
			</tr>
			<tr>
			<td><b>Durchlassbereich</b> <br> Schwellenspannung U<sub>S</sub> <br> Flussspannung U<sub>F</sub> <br> Durchlassstrom I<sub>F</sub> <br> <br> U<sub>S</sub> Silizium 0.7V <br> U<sub>S</sub> Germanium 0.3V <br> U<sub>S</sub> Selen 0.6V <br> </td>
				<td>Bei einer kleinen Durchlassspannung U<sub>f</sub> fliesst nur ein sehr kleiner Strom, der Durchlassstrom. Die Sperrschicht durch die Elektronen ist noch sehr gross, die Diode ist hochohmig. Steigt der Strom und die Spannung an erreicht man langsam die Schwellenspannung und man erreicht den Durchlassbereich, dann wird die Diode niedrigohmig und der Durchfluss muss durch einen Wiederstand begrenzt werden, ansonsten wird die Diode zerstört.</td>
			</tr>
		
		</table>
	<br> <br>
		
		<b>Spezielle Diodentypen:</b><br>
		<table cellspacing="50" cellpadding="20" table border="1"> 
			<tr><td>Germanium-Diode</td> <td>Die Germaniumdiode hat eine kleiner Schwellspannung und ist stark temperaturabhängig <br> Keine Praxisbedeutung</td> <td> <img src="bilder/german.svg" width="220" height="94" alt=""/></td></tr>
			<tr><td>PIN-Diode</td> <td>Für die höhere Spannungsfestigkeit wird eine eigenleitende Halbleiter (Intrinsic-Zone) zwischen p und n gelegt.</td> <td><img src="bilder/pin-diode.png" width="220" height="94" alt=""/></td>
			</tr>
			<tr><td>Kapazitätsdiode</td> <td>Sie werden in Sperrrichtung betrieben. Gebraucht um Schwingfrequenzen bei Oszillatoren einzustellen</td> <td><img src="bilder/kapa.png" width="220" height="94" alt=""/></td></tr>
			<tr><td>Schottky-Diode</td> <td>Anstatt der p-Schicht hat diese Diode eine Metallschicht. Dadurch bekommt sie ein schnelles Schaltverhalten und eine kleine Flussspannung</td> <td><img src="bilder/schottky.png" width="220" height="94" alt=""/></td></tr>
			
			<tr> <td>Leuchtdioden</td> <td>Leuchtdioden werden aus verschiedenen Halbleitern hergestellt um verschiedene Farben zu produzieren</td> <td><img src="bilder/led.png" width="220" height="94" alt=""/></td></tr>
			
			<tr><td>Photodioden</td> <td>Photodioden werden in Sperrrichtung betrieben. Der Sperrstrom erhöht sich bei Lichteinfall</td> <td><img src="bilder/photo.png" width="220" height="94" alt=""/></td> 
			</tr>
			<tr> <td>Zenerdiode</td> <td>Die Z-Diode wird in Sperrrichtung betrieben. In Durchlassrichtung wie normale Diode. In Sperrrichtung bei hoher Spannung die Elektronen aus dem Gitter gelöst und beschleunigt (Zener-Effekt), diese lösen weitere Elektronen bis die Sperrschicht mit Ladungsträger überflutet wird (Lawineneffekt).Der Strom steigt stark an, jedoch wird diese dabei nicht zerstört.</td> <td><img src="bilder/zener.png" width="220" height="94" alt=""/></td></tr>
		</table>
			
			
			<tr>
			<td><b>Transistoren</b></td>
				<td>Der Transistor besteht aus drei dünnen Halbleiterschichten. Für die Funktionsweise muss man mit der Elektronenstromrichtung (Minus zu Puls) arbeiten. Durch das Anlegen einer Spannung 𝑈<sub>𝐵𝐸</sub>=0.7𝑉 wird die untere Diode leitend. Die Elektronen gelangen in die p-Schicht und werden dort vom Pluspol der Spannung 𝑈<sub>𝐵𝐸</sub> angezogen (ca. 1% Elektronen). Da diese nur sehr klein ist wandern die Elektronen in die obere Schicht und werden dort vom Pluspol der Spannung 𝑈<sub>𝐶𝐸</sub> angezogen (ca. 99% Elektronen). Es fliesst der Strom 𝐼𝐶.<br>
<br>
<img src="bilder/transuebgs.jpg" width="80%" height="80%"><br>
<br>
<ol>
					<li>Der Kollektorstrom 𝐼<sub>𝐶</sub> fliesst nur wenn der Basisstrom 𝐼<sub>𝐵</sub> auch fliesst. Ändert der Basisstrom ändert auch der Kollektorstrom. Der Basisstrom und Kollektorstrom hängen exponentiell zusammen</li>
	<li>Der Kollektorstrom ist um ein vielfaches höher als der Basisstrom. Grund Aufteilung des Elektronenfluss.</li>
	<li>Der Basisstrom fliesst erst wenn die Schwellspannung 𝑈<sub>𝐵𝐸</sub> erreicht ist</li>
	<li>Fliesst kein Basisstrom sperrt der Transistor. Unendlich Grosser Widerstand</li>
	<li>𝑈<sub>𝐶𝐸</sub> &lt; 𝑈<sub>𝐵𝐸</sub> befindet sich der Transistor in Sättigung d.h. der Basisstrom überflutet den Transistor, somit kann der Kollektorstrom nicht mehr weiter steigen.</li>
	<li>𝑈<sub>𝐶𝐸</sub> = 𝑈<sub>𝐵𝐸</sub> der Transistor ist übersteuert, an der Basis-Kollektor-Strecke ist keine Spannung</li>
	<li>Die Spannung 𝑈<sub>𝐵𝐸</sub> wird als Steuerkreis bezeichnet, die Spannung 𝑈<sub>𝐶𝐸</sub> wird als Lastkreis bezeichnet</li>
					</ol>
				<br>
<br>
<b>Betriebszustände eines Transistors:</b> <br>

					<img src="bilder/betrieb.jpg" width="60%" height="60%">
				</td>
				<td><img src="bilder/trans.gif" width="380" height="120" alt=""/><br><br>
<br>

					 <img src="bilder/trans2d.jpg" width="100%" height="100%"></td>
			</tr>

		
		
</td>
    <td>      </td>

					</table>

	<tr>
			<td>Bipolar Transistoren</td>
			<td></td>
			<td></td>
			
			</tr>
	
		</table>


        

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>