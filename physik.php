<!DOCTYPE html>
<html lang="de">
<head>
	<?php include ('includes/top_head.php'); 
    $loc = "mathe";
    ?>
	<link href="spoiler.css" rel="stylesheet" type="text/css">
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
				<?php include ('includes/search.php'); ?>
				<?php include ('includes/nav_mathe.php'); ?>
			</div>



			<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
				<h1 class="bd-title" id="content">Physik</h1>

				<p class="bd-lead">Grundlagen der Physik</p>

				<br>
				<h2>Wichtige Kennzahlen und Formeln</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
<table cellspacing="50" cellpadding="20" table border="1">
  <tr>
    <th>Begriff</th>
    <th>Erklärung</th>
    <th>Zusatz</th>
  </tr>
  <tr>
    <td><b>Ladung eines Elektrons: </b></td>
    <td>$$ q_{e^{-}} = -1.602 \ 176 \ 634 \cdot 10^{-19} C \\[1ex] $$</td>
    <td></td>
  </tr>
	<tr>
    <td><b>Ladungsstrom </b></td>
    <td>$$I := \frac{\Delta Q}{ \Delta t} = \frac{\text{geflossene Ladung}}{\text{Zeit}} $$</td>
    <td>
                      <b>I</b> = Strom [A]<br>
                      <b>Q</b> = Ladung [C] = [A·s]<br>
                      <b>t</b> = Zeit [s]
                    </td>
  </tr>
	<tr>
    <td><b>Aufladung </b></td>
    <td>$$I(t) := \dot{Q} (t) \\[1ex]
\Delta Q = \int_{t_0}^{t_e} I(t) dt \\[1ex] $$</td>
    <td>Q(t) = Ladung im System zur Zeit t</td>
  </tr>
	<tr>
    <td><b>Coulomb - Gesetz </b></td>
    <td>$$\vec{F}_E = \gamma_E \cdot \frac{Q_1 \cdot Q_2}{r^2} \cdot \hat{r} = \frac{1}{4 \pi \cdot \epsilon_0  } \cdot \frac{Q_1 \cdot Q_2}{r^2} \cdot \hat{r} \\[3ex]
\text{Vorzeichentabelle: } \\[1ex]
\def\arraystretch{1.5}
   \begin{array}{c:c:c}
   Q_1 & Q_2 & Kraft \\ \hline
   + & + & \leftrightarrow  \\
   + & - & \rightleftarrows  \\
- & + & \rightleftarrows  \\
- & - & \leftrightarrow  \\
\end{array}$$</td>
    <td><b>F<sub>E</sub></b> = Elektrische Kraft [N]<br>
                      <b>γ<sub>E</sub></b> = Coulomb Konstante [A·s/(V·m)] = [A<sup>2</sup>·s<sup>4</sup>/(kg·m<sup>3</sup>)]<br>
                      <b>Q<sub>1</sub></b> = Ladung 1 [C] = [A·s]<br>
                      <b>Q<sub>2</sub></b> = Ladung 2 [C] = [A·s]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante (Vakuum) [A·s/(V·m)] = [F/m] <br>
                      <b>r</b> = Abstand der Massenmittelpunkte [m]<br> 
                      <b>r</b> = Richtungsvektor [-]<br>
                      <b>γ</b> = Konstante [1]</td>
  </tr>
		<tr>
    <td><b>Ampère- Gesetz </b></td>
    <td>$$\vec{F}_B = \gamma_B \cdot \frac{2l}{r} \cdot I_1 \cdot I_2 \cdot \hat{r} = \mu_0 \cdot \frac{l}{2 \pi r} \cdot I_1 \cdot I_2 \cdot \hat{r} \\[3ex]
\text{Vorzeichentabelle: } \\[1ex]
\def\arraystretch{1.5}
   \begin{array}{c:c:c}
   Q_1 & Q_2 & Kraft \\ \hline
   + & + & \rightleftarrows   \\
   + & - &  \leftrightarrow \\
- & + & \leftrightarrow \\
- & - &  \rightleftarrows \\
\end{array}$$</td>
    <td><b>F<sub>B</sub></b> = Magnetische Kraft [N]<br>
                      <b>γ<sub>B</sub></b> = Ampere Konstante ≈ 10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                      <b>I<sub>1</sub></b> = Strom 1 [A]<br>
                      <b>I<sub>2</sub></b> = Strom 2 [A]<br>
                      <b>l</b> = Abschnittslänge [m]<br>
                      <b>μ<sub>0</sub></b> = Magnetische Feldkonstante 4·π·10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                      <b>r</b> = Abstand der Massenmittelpunkte [m]<br>
                      <b>r</b> = Richtungsvektor [-]</td>
  </tr>
	<tr>
    <td><b>Maxwell - Relation </b></td>
    <td>$$\frac{\gamma_E}{\gamma_B} = \frac{1}{\epsilon_0 \cdot \mu_0} = c^2 \\[1ex]$$</td>
    <td><b>γ<sub>E</sub></b> = Coulomb Konstante [A·s/(V·m)] = [A<sup>2</sup>·s<sup>4</sup>/(kg·m<sup>3</sup>)]<br>
                      <b>γ<sub>B</sub></b> = Ampere Konstante ≈ 10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
                      <b>μ<sub>0</sub></b> = Magnetische Feldkonstante = 4·π·10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                      <b>c</b> = Lichtgeschwindigkeit [m/s]</td>
  </tr>
		<tr>
    <td><b>Elektrisches Feld </b></td>
    <td>$$ \vec{E}(t;x;y;z) := \frac{1}{q} \cdot \vec{F}_E (t;x;y;z) \\[4ex]
\text{Allgemeine Kraftgleichung im E-Feld: } \\[1ex]
\hspace*{6mm} \vec{F}_E = Q \cdot \vec{E} \\[1ex]$$</td>
<td>
                    <b>E</b> = Elektrisches Feld [N/C]<br>
                    <b>F<sub>E</sub></b> = Elektrische Kraft [N]<br>
                    <b>q</b> = Probeladung [C] = [A·s]
	<b>Q</b> = Ladung im E-Feld [C] = [A·s]
                  </td>
  </tr>
			<tr>
    <td><b>Magnetisches Feld (B-Feld) </b></td>
    <td>$$ \vec{F}_B (t;x;y;z) = q \cdot \vec{v} \times \vec{B}(t;x;y;z)\\[4ex]

\text{Feststellungen: } \\[1ex]

\vec{F}_B \sim q \\[1ex]
\vec{F}_B \sim \ \mid \vec{v} \mid  \\[1ex]
\vec{F}_B \perp \vec{v} \\[1ex]
\vec{F}_B \perp \hat{n}(t;x;y;z)  \\[4ex]

\text{Allgemeine Kraftgleichung im B-Feld: } \\[1ex]
\vec{F}_B = Q \cdot \vec{v} \times \vec{B} \\[4ex]



\text{Lorenz Gleichung: } \\[1ex]
\vec{F}_{EB} = Q \cdot (\vec{E}+\vec{v}\times \vec{B}) \\[1ex]
P_{EB} = Q \cdot \left \langle \vec{v},\vec{E} \right \rangle \\[1ex]
P_{EB} = \left \langle \vec{v},\vec{F}_{EB} \right \rangle \\[1ex]$$</td>
                  <td>
					<b>F<sub>EB</sub></b> = Kraft des E-B-Feldes [N]<br>
                    <b>P<sub>EB</sub></b> = Leistung des E-B-Feldes [W]<br>
					<b>B</b> = Magnetisches Feld (Tesla) [T] = [N/(A·m)] <br>
                    <b>Q</b> = Ladung [C] = [A·s]<br>
                    <b>E</b> = Elektrisches Feld [N/C]<br>
                    <b>v</b> = Geschwindigkeit [m/s]<br>
                    <b>F<sub>EB</sub></b> = Kraft des E-B_Feldes [N]<br>
                  </td>
  </tr>
	<tr>
    <td><b>E-Feld einer Punktladung </b></td>
    <td>$$  \vec{E} = \frac{1}{4\pi\varepsilon _0}\cdot \frac{Q}{r^2}\cdot \hat{r} = \frac{1}{4\pi \varepsilon _0} \cdot \frac{Q}{r^3}\cdot \vec{r} \\[4ex]

\text{Die Elektrische Kraft definiert sich somit:} \\[1ex]
\vec{F}_E = \frac{1}{4\pi\varepsilon _0} \cdot \frac{Q \cdot q}{r^2} \cdot \hat{r} \\[4ex]

\text{Bei n Punktladungen gilt:} \\[1ex]
 \vec{E} = \frac{1}{4\pi\varepsilon _0} \sum_{K=1}^{n}  \cdot \frac{Q_k}{r^3_k} \cdot \vec{r}_k \\[1ex]
$$</td>
                  <td>
 						<b>E</b> = Elektrisches Feld [N/C]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
                      <b>Q</b> = Ladung [C] = [A·s]<br>
                      <b>r</b> = Abstand der Massenmittelpunkte [m]<br>
                      <b>r^</b> = Richtungsvektor [-]
                  </td>
  </tr>
		<tr>
    <td><b>Elektrische Spannung </b></td>
    <td>$$ \text{Grundform} \\[1ex]
U := \frac{1}{q} \cdot \Delta W  \\[4ex]

\text{Als Linienintegral: } \\[1ex]
U := \int_{s_0}^{s_E}\left \langle \vec{E},\hat{e} \right \rangle \text{d}s \\
$$</td>
                  <td>
<b>U</b> = Spannung [N·m/C] = [V]<br>
                      <b>q</b> = Probeladung [C] = [A·s]<br>
                      <b>W</b> = Arbeit [N·m] = [J]<br>
					                        <b>E</b> = Elektrisches Feld [N/C]<br>
                      <b>ê</b> = Bahnvektor (Einheitsvektor) [-]<br>
                      <b>s</b> = Strecke [m]<br>
                  </td>
  </tr>
			<tr>
    <td><b>Elektrisches Potential </b></td>
    <td>$$ \phi (r) = \frac{1}{4\pi\varepsilon _0}\frac{Q}{r}
$$</td>
                  <td>
<b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
					  <b>Q</b> = Ladung [C] <br>
                      <b>r</b> = Abstand [m]<br>
                  </td>
  </tr>
	
	
						</table>

					</div>
				</div>
				<br>

			</main>
		</div>
	</div>
	<?php include ('includes/footer.php'); ?>

</body>
</html>