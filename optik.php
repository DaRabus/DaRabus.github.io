<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "optik";?>
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
          <h1 class="bd-title" id="optik">Optik</h1>
          <p class="bd-lead">Die Optik, auch Lehre vom Licht genannt, ist ein Gebiet der Physik und beschäftigt sich mit der Ausbreitung von Licht sowie dessen Wechselwirkung mit Materie, insbesondere im Zusammenhang mit optischen Abbildungen.</p>
			
			
			<h2>Optik 2 </h2>
			<div class="pre-spoiler">
										<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
										<div class="spoiler" style="display: none;">
				<br>

<table cellspacing="50" cellpadding="20" table border="1">
  <tr>
    <th>Begriff</th>
    <th>Erklärung</th>
    <th>Zusatz</th>
  </tr>
	  <tr>
    <td><b>Wichtige Beziehungen </b></td>
    <td>$$f= \frac{1}{t} \qquad \omega = 2\pi f$$</td>
    <td>                      <b>f</b> = Frequenz in [Hz]<br>
                      <b>w</b> = Winkelgeschwindigkeit [m/s] <br>
                      <b>t</b> = Zeit [s] <br>
	  </td>
  <tr>
    <td><b>Die Feder </b></td>
    <td>$$E_F = \frac{D}{2} \cdot s^2 \\[1ex]
F_F = - D \cdot s \\[1ex] $$</td>
    <td>                      <b>D</b> = Federkonstante [N/m]<br>
                      <b>s</b> = Auslenkung in [m] <br>
                      <b>t</b> = Zeit [s] <br>
		                <b>E<sub>F</sub></b> = Energie in der Feder [J]<br>
					<b>F<sub>F</sub></b> = Federkraft [N]<br>
	  </td>

	</tr>
	  <tr>
    <td><b>Harmonische Schwingungen </b></td>
    <td>$$\text{Grundform der Amplitude } \\[1ex]
y(t) = \hat{y} \cdot sin(\omega \cdot t + \phi ) \\[4ex]

\text{Ungedämpfte Beziehungen: } \\[1ex]
\text{Federpendel: } T = 2 \pi \sqrt{\frac{m}{D}} \qquad \omega =\sqrt{\frac{D}{m}} \\[1ex]
\text{Fadenpendel: } T = 2 \pi \sqrt{\frac{l}{G}} \qquad \omega =\sqrt{\frac{g}{l}} \\[1ex]
\text{Drehpendel: } T = 2 \pi \sqrt{\frac{J}{D}} \qquad \omega =\sqrt{\frac{D}{J}} \\[4ex]
 $$</td>
    <td>                      <b>D</b> = Federkonstante [N/m]<br>
                      <b>m</b> = MAsse in [kg] <br>
		<b>g</b> = Gravitation [kg/m^2] <br>
		<b>l</b> = Fadenlänge in [m] <br>
                      <b>t</b> = Zeit [s] <br>
		<b>J</b> = Trägheitsmoment [kg * m^2] <br>
		                <b>E<sub>F</sub></b> = Energie in der Feder [J]<br>
					<b>F<sub>F</sub></b> = Federkraft [N]<br>
	  </td>

	</tr>
		  <tr>
    <td><b>Gedämpfter Federschwinger </b></td>
    <td>$$y(t) = \hat{y} \cdot e^{-\delta t} \cdot sin(\omega_d \cdot t + \phi ) \\[1ex]
\omega_d = \sqrt{\omega_0^2 - \delta^2  } \\[3ex]

\text{Zudem gilt: } \\[1ex]
F_D = k \cdot v \qquad  \delta= \frac{k}{2m} \qquad \omega_0 = \frac{D}{m} \\[1ex]
 $$</td>
    <td>                      <b>D</b> = Federkonstante [N/m]<br>
                      <b>k</b> = Wellenanzahl <br>
		<b>m</b> = Masse in [kg] <br>
		<b>v</b> = Ausbereitungsgeschwindigkeit in [m/s^2] <br>
					<b>F<sub>D</sub></b> = Federkraft [N]<br>
	  </td>

	</tr>
			  <tr>
    <td><b>Wellen </b></td>
    <td>$$T = \frac{1}{f} \qquad \omega = 2 \pi f \\[1ex]
v = \frac{ \lambda}{T}  = \lambda \cdot f \qquad k = \frac{2 \pi}{\lambda} \\[4ex]

\text{Harmonische Welle in 1D} \\[1ex]
y(x,t) = \hat{y} \cdot sin(kx-\omega t + \varphi ) \\[4ex]

\text{Energiestromdiche: } \\[1ex]
j_W = \frac{dI_W}{dA} \\[4ex]

\text{Intensität: } \\[1ex]
\text{allgemein:} I = \overline{j_W} \\[1ex]
\text{harmonsiche Welle: } I \sim \hat{y}^2 \\[1ex]
\text{mech. harmonsiche Welle: } I \sim \hat{y}^2 \cdot \omega^2\\[1ex]
 $$</td>
    <td>                      <b>f</b> = Frequenz<br>
                      <b>k</b> = Wellenanzahl <br>
		<b>w</b> = Kreisfrequenz <br>
		<b>v</b> = Ausbereitungsgeschwindigkeit in [m/s^2] <br>
	  </td>

	</tr>
				  <tr>
    <td><b>Elektromagnetische Wellen </b></td>
    <td>$$\text{Wellengleichung in 1D} \\[1ex]
\frac{\partial^2 y}{\partial x^2} = \frac{1}{v^2} \cdot \frac{\partial^2 y}{\partial t^2} \\[4ex]

\text{Intensität mit Polarfilter: } \\[1ex]
I_2 = I_1 \cdot cos^2(\theta ) \\[4ex]

\text{Umrechnung Fotometrie(F) / Radiometrie(R): } \\[1ex]
F = R \cdot K_m \cdot V(\lambda ) \\[4ex]
 $$</td>
    <td>                      
		<b>v</b> = Ausbereitungsgeschwindigkeit in [m/s^2] <br>
		<b>K<sub>m</sub></b> = photometrische Strahlungsäquivalent 638 [lm/W] <br>
		<b>V</b> = relative Hellempfindlichkeitskurve<br>
	  </td>

	</tr>
					  <tr>
    <td><b>Interferenz</b></td>
    <td>$$\text{Konstruktive} \\[1ex]
\Delta s = n \cdot \lambda \quad (n \in \mathbb{Z}) \\[4ex]

\text{Destruktive} \\[1ex]
\Delta s = \frac{\lambda}{2} +n \cdot \lambda \quad (n \in \mathbb{Z}) \\[4ex]

\text{Phasendifferenz <--> Gangunterschied} \\[1ex]
\delta  = k \cdot \Delta x = \frac{2\pi}{\lambda} \Delta x \\[4ex]

\text{Schwebungsfrequenz} \\[1ex]
f_s = \Delta f \\[4ex]

\text{Eigenfrequenzen} \\[1ex]
\text{beidseitig fest/frei: } f_n = (n+1) \cdot f_0 \\[1ex]
\text{beidseitig offen/geschlossen: } f_n = (n+1) \cdot f_0 \\[1ex]
\text{einseitig offen/frei: } f_n = (2n+1) \cdot f_0 \\[4ex]

\text{Optische Weglänge:} \\[1ex]
L = n \cdot x\\[4ex]
 $$</td>
    <td>                      
		<b>v</b> = Ausbereitungsgeschwindigkeit in [m/s^2] <br>
		<b>f<sub>0</sub></b> = Grundfrequenz <br>
		<b> λ</b> = Wellenlänge<br>
	  </td>

	</tr>
	
	
						</table>

				<br>
	</div>
				</div>

        

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>