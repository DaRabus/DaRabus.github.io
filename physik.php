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

			</div>



			<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
				<h1 class="bd-title" id="content">Physik</h1>

				<p class="bd-lead">Grundlagen der Physik</p>
				
				<h2>Grundlagen der Elektronik</h2>
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
    <td><b>Einheiten in der Elektrik: </b></td>
    <td>$$\text{Ladung des Elektrons: } q_{e^{-}} = -1.602 \ 176 \ 634 \cdot 10^{-19} C \\[4ex]

\text{System von Gauss: } \\[1ex]
 \gamma_E = 1 \qquad \gamma_B = 10^{-7} \frac{N}{A^2} \qquad \gamma_B = \frac{\gamma_E}{c^2} = \frac{1}{c^2} \\[1ex]
\varepsilon_0 = \frac{1}{4\pi \gamma_E} = \frac{1}{4 \pi} \qquad \mu_0 = 4 \pi \gamma_B = \frac{4 \pi}{c^2} \qquad \frac{\gamma_E}{\gamma_B} = c^2 \\[3ex]

\mu_0 = 4 \pi \cdot 10^{-7} \frac{N}{A^2} \\[1ex]
\varepsilon_0 = 8.854 \ 187 \ 817 \ 620 \ 39 \cdot 10^{-12} \frac{C^2}{Nm^2} \\[1ex]
Q_A = N_A \cdot e =  9,649 \cdot 10^{4} \frac{C}{mol}  \\[1ex]
\rightarrow N_A = 6,022 \ 140 \ 76 \cdot 10^{-23} \frac{1}{mol} \\[1ex]
		\rightarrow e = 1,602 \ 176 \ 634 \cdot 10^{-19} C \\[4ex]
		
		\text{Masse Proton: } m_p \approx 1.673 \cdot 10^{-27} KG \\[1ex]
\text{Masse Elektron: } m_e \approx 9.109 \cdot 10^{-31} KG \\[1ex]

 $$</td>
      <td><b>γ<sub>E</sub></b> = Coulomb Konstante [A·s/(V·m)] = [A<sup>2</sup>·s<sup>4</sup>/(kg·m<sup>3</sup>)]<br>
                      <b>γ<sub>B</sub></b> = Ampere Konstante ≈ 10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
		  <b>Q<sub>A</sub></b> = Faraday-konstante [C/mol] <br>
		  <b>N<sub>A</sub></b> = Avogadro Zahl [1/mol] <br>
		  <b>e</b> = Elementarladung [C] <br>
                      <b>μ<sub>0</sub></b> = Magnetische Feldkonstante = 4·π·10<sup>-7</sup> [N/A<sup>2</sup>]<br>
                      <b>c</b> = Lichtgeschwindigkeit [m/s]</td>
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
    <td><b>Der Bahnvektor </b></td>
    <td>$$  
		\text{Bahnvektor:  }\hat{r} : = \hat{r} = \frac{1}{\mid r \mid } \cdot \vec{r} \\[1ex]
$$</td>
                  <td>
 				Um den Bahnvektor zu berechnen benötigt man die Formel
                  </td>
  </tr>
	<tr>
    <td><b>E-Feld einer Punktladung </b></td>
    <td>$$  
		
		\vec{E} = \frac{1}{4\pi\varepsilon _0}\cdot \frac{Q}{r^2}\cdot \hat{r} = \frac{1}{4\pi \varepsilon _0} \cdot \frac{Q}{r^3}\cdot \vec{r} \\[4ex]

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
    <td>$$ \phi (r) = \frac{1}{4\pi\varepsilon _0}\frac{Q}{r} \\[1ex]

\text{Für n Ladungen gilt: } \\[1ex]
\frac{1}{4\pi\varepsilon _0} \cdot \sum_{k=1}^{n} \frac{Q_k}{r_k}
$$</td>
                  <td>
<b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
					  <b>Q</b> = Ladung [C] <br>
                      <b>r</b> = Abstand [m]<br>
                  </td>
  </tr>
				<tr>
    <td><b>Elementarladung</b></td>
    <td>$$\text{Die Elementarladung ist die Basis aller elektrischen Ladungen} \\[1ex]
e = 1.602 \ 176 \ 634 \cdot 10^{-19} \\[4ex]

\text{Mit der Ladungszahl Z erhält man die Gesamtladung: } \\[1ex]
Q = Z \cdot e \\[4ex]

\text{Die Faraday - Konstante ist: } \\[1ex]
Q_A := N_A \cdot e \approx 9.649 \cdot 10^4 \ \frac{C}{mol} \\[1ex]
\rightarrow N_A = 6 \cdot 10^{23} \ \frac{1}{mol} \\[4ex]


\text{Verschiedene Elementarteilchen: } \\[1ex]
\text{Elektron: } e^{-} \ ; \ Z_{e^{-}} \ = \ -1 \ \rightarrow \ q_{e^{-}} = -e \\[1ex]
\text{Positron: } e^{+} \ ; \ Z_{e^{+}} \ = \ +1 \ \rightarrow \ q_{e^{+}} = +e \\[1ex]
\text{Photon: } \gamma \ ; \ Z_{\gamma} \ = \ 0 \ \rightarrow \ q_{\gamma} = 0 \\[1ex]
\text{Proton: } p^{+} \ ; \ Z_{p^{+}} \ = \ 1 \ \rightarrow \ q_{p^{+}} = +e \\[1ex]
\text{Neutron: } n \ ; \ Z_{n} \ = \ 0 \ \rightarrow \ q_{n} = 0 \\[4ex]

\text{Ein Elektronenvolt ist definiert als: } \\[1ex]
1 eV := e \cdot 1V \approx 1.602 \cdot 10^{-19} J
$$</td>
                  <td>
<b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
					  <b>Q<sub>A</sub></b> = beschreibt die Ladung eines Mols Protonen [C] <br>
                      <b>eV</b> = Energieeinheit in J<br>
                  </td>
  </tr>
	  </tr>
				<tr>
    <td><b>Satz von Gauss</b></td>
    <td>$$\text{Das E-Feld definiert sich: } \\[1ex]
\Phi_{\vec{E}} = \oint_M < \vec{E} , \hat{n} > \ dA = \frac{1}{\epsilon_0} \cdot Q_{eg} \\[4ex]

\text{Alternativ mit Ladungsdichte: } \\[1ex]
\Phi_{\vec{E}} = \oint_M < \vec{E} , \hat{n} > \ dA = \frac{1}{\epsilon_0} \cdot \int_V \delta \ dV \\[4ex]
$$</td>
                  <td>
<b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
					  <b>Q<sub>eg</sub></b>= Total eingeschlossene Ladung <br>
                      <b>E</b>= E-Feld<br>
					  <b>^n</b>= Normvektor im E-Feld<br>
                  </td>
  </tr>
		<tr>
    <td><b>Der Kondensator</b></td>
    <td>$$\text{Die Kapazität C ist: } \\[1ex]
C := \frac{Q}{U} = \frac{\text{verschobene Ladung}}{\text{angelegte Spannung}} \\[4ex]

\text{Energie eines Kondensators: } \\[1ex]
W_c = \frac{1}{2} \cdot C \cdot U^2 = \frac{1}{2C} \cdot Q^2 \\[4ex]

\text{Der Plattenkondensator mit: } d^2 << A \\[1ex]
E = \frac{1}{\epsilon_0} \cdot \frac{Q}{A} \qquad U = E \cdot d  \\[1ex]
C = \epsilon_0 \cdot \frac{A}{d} \\[4ex]


\text{Die Energiedichte ist: } \\[1ex]
W_E = \frac{1}{2} \cdot \epsilon_0 \cdot E^2  \\[1ex]
W  = \int_V W_E \ dV = \frac{1}{2} \epsilon_0 \int_V E^2 \ dV \\[1ex]
$$</td>
                  <td>
					  <b>Q</b> = verschobene Ladung <br>
					  <b>d</b>= Abstand der Platten <br>
					  <b>A</b>= Fläche der Platte <br>
					  <b>E</b>= Energie zwischen den Platten <br>
					  <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante [A·s/(V·m)] = [F/m] <br>
                      <b>C</b>= Kapazität in [C/V] oder [F]<br>
					  <b>U</b>= Spannung in [V]<br>
					  <b>W<sub>E</sub></b>= Energiedichte [J/m^3] <br>
                  </td>
  </tr>
					<tr>
    <td><b>Amère - Durchflutungsgesetz </b></td>
    <td>$$ \text{Im B-Feld gilt: } \\[1ex]
\Upsilon_{vec{B}} = \oint_{\gamma} < \vec{B} , \hat{e} > \ ds = \mu_0 \cdot I_{eg}  \\[1ex]
\rightarrow \text{gilt nur für } \dot{\vec{E}} = 0 \\[4ex]

\text{Anwendung auf Langen geraden Strom:} \\[1ex]
B(r) = \frac{\mu_0}{2 \pi} \cdot \frac{I}{r} \\[4ex]

\text{Anwendung auf Lange dünne Spule: } \\[1ex]
B \approx \mu_0 \cdot N \cdot \frac{I}{l}
$$</td>
                  <td>
					<b>B</b> = Magnetisches Feld (Tesla) [T] = [N/(A·m)] <br>
                    <b>ê</b> = Richtungsvektor <br>
                    <b>&mu;</b> = Magnetische Feldkonstante<br>
                    <b>r</b> = Abstand zum Mittelpunkt [m] <br>
					  <b>l</b> = Länge der Spule [m] <br>
					  <b>N</b> = Windungen [m] <br>
                    <b>I<sub>eg</sub></b> = Total eingeschlossener Strom [I]<br>
                  </td>
  </tr>
							<tr>
    <td><b>Biot - Savat - Gesetz </b></td>
    <td>$$\text{Der Betrag eines kleinen Stücks des Stroms } \\[1ex]
\text{mit der Länge ds zum B-Feld am Punkt P ist: } \\[1ex]
\delta \vec{B} = \frac{\mu_0}{4 \pi} \cdot I \cdot \frac{1}{r^2} \cdot \hat{e}_s \times \hat{r} \cdot \ ds \\[1ex]
\delta \vec{B} = \frac{\mu_0}{4 \pi} \cdot I \cdot \frac{1}{r^2} \cdot \vec{v} \times \hat{r} \cdot \ d\tau \\[1ex]
\delta \vec{B} = \frac{\mu_0}{4 \pi} \cdot I \cdot \frac{1}{r^3} \cdot \vec{v} \times \vec{r} \cdot \ ds \\[1ex]
\delta \vec{B} = \frac{\mu_0}{4 \pi} \cdot I \cdot \frac{1}{r^3} \cdot \vec{v} \times \vec{r} \cdot \ d\tau \\[4ex] 

\text{Es gilt vor allem: } \\[1ex]
d\vec{B} \sim \frac{1}{r^2} \\[1ex]
\vec[B] \sim \frac{1}{a}  \\[1ex]
$$</td>
                  <td>
					<b>I</b> = Stromstärke [I] <br>
                    <b>ê</b> = Richtungsvektor <br>
                    <b>&mu;</b> = Magnetische Feldkonstante<br>
                    <b>r</b> = Abstand zum Mittelpunkt [m] <br>
					  <b>^r</b> = Richtungsvektor <br>

                  </td>
  </tr>
	
	
						</table>

				<br>
	</div>
				</div>
				
				<h2>Elektrodynamik</h2>
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
    <td><b>Grundgleichungen: </b></td>
    <td>$$\text{Maxwell - Gleichungen: } \\[1ex]
div (\vec{E}) = \frac{1}{\epsilon_0 } \cdot \varrho  \qquad div(\vec{B}) = 0 \\[1ex]
rot(\vec{E}) = - \dot{\vec{B}} \qquad rot(\vec{B}) = \epsilon_0 \mu_0 \cdot \dot{\vec{E}} + \mu_0 \cdot \vec{J} \\[4ex]

\text{Lorentz- Gleichungen: } \\[1ex]
\vec{F}_{EB} = Q \cdot (\vec{E} + \vec{v} \times \vec{B}) \\[1ex]
P_{EB} = Q \cdot  \langle \vec{E} , \vec{v} \rangle \\[4ex]

\text{Maxwell - Relation: } \\[1ex]
\frac{1}{\sqrt{\epsilon_0 \cdot \mu_0}} = c $$</td>
    <td>                      <b>ϱ</b> = Ladungsdichte roh<br>
                      <b>J</b> = Stromdichte<br>
                      <b>E</b> = Elektrisches Feld <br>
		<b>B</b> = Magnetisches Feld<br>
		<b>ε<sub>0</sub></b> = Elektrische Feldkonstante<br>
		<b>μ<sub>0</sub></b> = Magnetische Feldkonstante<br>
		<b>Q</b> = Ladung<br>
		<b>v</b> = Geschwindigkeit<br>
		<b>c</b> = Lichtgeschwindigkeit<br>
	  
	  </td>
  </tr>  <tr>
    <td><b>Ruhende Leiterschleife: </b></td>
    <td>$$\text{Trafo Spannung: } \\[1ex]
U_{ind} = \oint_{\delta G} \langle \vec{E} , \hat{e} \rangle \ ds = \Upsilon_E = \int_G \langle rot(\vec{E}) , \hat{n} \rangle \ dA = - \dot{\Phi}_B \\[4ex]

\text{Spule mit N Windungen: } \\[1ex]
U_{ind} = -N \cdot \dot{\Phi}_B \\[1ex]$$</td>
    <td>                      
		<b>N</b> = Windungen<br>
		<b>ε<sub>0</sub></b> = Elektrische Feldkonstante<br>
		<b>μ<sub>0</sub></b> = Magnetische Feldkonstante<br>
		<b>Q</b> = Ladung<br>
		<b>^n</b> = Normvektor<br>
		<b>B</b> = Magnetisches Feld<br>
		<b>Φ</b> = Flussdichte<br>
	  
	  </td>
  </tr>
	<tr>
    <td><b>Gerade bewegter Leiter: </b></td>
    <td>$$\text{Induktionsspannung: } \\[1ex]
U_{ind} = \frac{1}{q} \cdot \Delta W = \frac{1}{q} \int_{s_0}^{s_e} \langle \vec{F}_B , \hat{e} \rangle \ ds = \int_{s_0}^{s_e} \langle \vec{v} \times \vec{B} , \hat{e} \rangle \ ds \\[4ex]

\text{Falls: } \vec{v} \perp \vec{B} \quad \hat{e} \perp \vec{B} \quad \hat{e} \perp \vec{v} \\[1ex]
U_{ind} = l \cdot v \cdot B \\[4ex]

\text{Falls: } v \ll c \\[1ex]
\vec{E} = \vec{v} \times \vec{B} \\[1ex]
U_{ind} = \int_{s_0}^{s_e} \langle \vec{E} , \hat{e} \rangle \ ds \\[1ex]$$</td>
    <td>                      
		<b>l</b> = Leiter Länge in [m]<br>
		<b>q</b> = Ladung in [C]<br>
		<b>^e</b> = Bahnvektor <br>
		<b>B</b> = Magnetisches Feld<br>
		<b>v</b> = Geschwindigkeit<br>
	  
	  </td>
  </tr>
	
		<tr>
    <td><b>Bewegte Spule mit N Windungen im <br> zeitlich veränderlichem Magnetfeld: </b></td>
    <td>$$\text{Faraday: } \\[1ex]
U_{ind} = - N \cdot \dot{\Phi}_B \\[4ex]$$</td>
    <td>                      
		<b>N</b> = Windungen<br>
		<b>B</b> = Magnetisches Feld<br>
		<b>U</b> = Spannung<br>
	  
	  </td>
  </tr>
			<tr>
    <td><b>Spule im Stromkreis: </b></td>
    <td>$$l , A , N = \ \text{Konstant} \\[1ex]
I(t) \sim B(t) \sim \Phi_B  \rightarrow U_{ind} (t) \sim \dot{\Phi}_B(t) \\[4ex]

\text{Es gilt somit: } \\[1ex]
U_{ind} (t) \sim \dot{\Phi}_B(t) \sim \dot{B} (t) \sim \dot{I}(t) \\[1ex]
U_{ind} = - L \cdot \dot{I}(t) \\[4ex]

\text{Basiselemente: } \\[1ex]
\text{Spannung über Wiederstand : } U_R = R \cdot I \\[1ex]
\text{Spannung über Kondensator: } U_C = \frac{Q}{C} \\[1ex]
\text{Spannung über Induktion: } U_L = L \cdot \dot{I} \\[1ex]

$$</td>
    <td>                      
		<b>L</b> = Kenngrösse in [Vs/A] oder [H] <br>
		<b>B</b> = Magnetisches Feld<br>
		<b>U</b> = Spannung<br>
	  
	  </td>
  </tr>
	<tr>
    <td><b>Lange dünne Spule: </b></td>
    <td>$$\text{Es gilt: } \\[1ex]
L \approx \mu_0 \cdot N^2 \cdot \frac{A}{l} \\[4ex]

\text{Der Magnetische Fluss ist demnach: } \\[1ex]
\Phi_B (t) = B(t) \cdot A \approx \mu_0 \cdot N \cdot \frac{1}{l} \cdot I(t) \cdot A \\[4ex]

\text{Die Induktionsspannung ist demnach: } \\[1ex]
U_{ind} = - N \cdot \dot{\Phi}_B(t) = - \mu_0 \cdot N^2 \cdot \frac{A}{l}  \cdot \dot{I}(t) \\[4ex]


\text{Somit folgt: } \\[1ex]
L \approx \mu_0 \cdot N^2 \cdot \frac{A}{l} \\[4ex]
$$</td>
    <td>                      
		<b>L</b> = Kenngrösse in [Vs/A] oder [H] <br>
		<b>B</b> = Magnetisches Feld<br>
		<b>U</b> = Spannung<br>
		<b>A</b> = Querschnittsfläche in [m^2]<br>
		<b>N</b> = Windungen<br>
		<b>l</b> = Länge der Spule in [m]<br>
	  
	  </td>
  </tr>
		<tr>
    <td><b>Induktivität an Wechselspannung: </b></td>
    <td>$$\text{Es gilt: } \\[1ex]
U(t) = U_a \cdot sin(wt + \varphi) \\[4ex]

\text{Die Spannung über der Spule: } \\[1ex]
U_L(t) = U(t) = L \cdot \dot{I}(t) \\[1ex]
\rightarrow \dot{I}(t) = \frac{U(t)}{L} \\[4ex]

\text{Die Phasenverscheibung erklärt sich so: } \\[1ex]
I(t) = \frac{1}{L} \int U(t) dt = -\frac{U_a}{wL} \cdot cos(wt+ \varphi) + I_0 \\[4ex]

\text{Daraus folgt für Amplituden oder Effektiwerte:} \\[1ex]
\rightarrow I_a = \frac{U_a}{wL} \\[1ex]
\rightarrow I_{eff} = \frac{U_{eff}}{wL} \\[1ex]
\rightarrow \text{Strom und Spannung sind verschoben um: } \frac{\pi}{2} \\[1ex]
$$</td>
    <td>                      
		<b>L</b> = Kenngrösse in [Vs/A] oder [H] <br>
		<b>B</b> = Magnetisches Feld<br>
		<b>U</b> = Spannung<br>
		<b>I</b> = Strom<br>
	  
	  </td>
  </tr>
	</table>
	</div>
					</div>
					<h2>Elektrostatik</h2>
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
    <td><b>Grundgleichungen: </b></td>
    <td>$$\text{Maxwell - Gleichungen: } \\[1ex]
div (\vec{E}) = \frac{1}{\epsilon_0 } \cdot \varrho  \qquad div(\vec{B}) = 0 \\[1ex]
rot(\vec{E}) = - \dot{\vec{B}} \qquad rot(\vec{B}) = \epsilon_0 \mu_0 \cdot \dot{\vec{E}} + \mu_0 \cdot \vec{J} \\[4ex]

\text{Lorentz- Gleichungen: } \\[1ex]
\vec{F}_{EB} = Q \cdot (\vec{E} + \vec{v} \times \vec{B}) \\[1ex]
P_{EB} = Q \cdot  \langle \vec{E} , \vec{v} \rangle \\[4ex]

\text{Maxwell - Relation: } \\[1ex]
\frac{1}{\sqrt{\epsilon_0 \cdot \mu_0}} = c $$</td>
	  
    <td>                      <b>ϱ</b> = Ladungsdichte roh<br>
                      <b>J</b> = Stromdichte<br>
                      <b>E</b> = Elektrisches Feld <br>
		<b>B</b> = Magnetisches Feld<br>
		<b>ε<sub>0</sub></b> = Elektrische Feldkonstante<br>
		<b>μ<sub>0</sub></b> = Magnetische Feldkonstante<br>
		<b>Q</b> = Ladung<br>
		<b>v</b> = Geschwindigkeit<br>
		<b>c</b> = Lichtgeschwindigkeit<br>
	  
	  </td>
  </tr>
	<tr>
    <td><b>Geladene Leitende Hohlkugel: </b></td>
    <td>$$\text{Der Innenraum ist ladungsfrei: } \\[1ex]
\rightarrow \text{ Man rechnet über den Rand mit Gauss: } \\[4ex]

\Phi_E = \oiint_{K} \vec{E} \ d\vec{f} = 4 \pi r^2 \cdot \vert \vec{E} \vert \\[4ex]

\text{Für das Potential folgt: } \\[1ex]
\phi(r) = - \int_{\infty}^{r} \vec{E} \ dr = \frac{Q}{4 \pi \varepsilon_0} \cdot \frac{1}{r} \\[4ex]

\text{Für diesen Fall gilt somit: } \\[1ex]
\vert \vec{E} \vert = \frac{\phi}{r} $$</td>
	  
    <td>                      <b>&#x03C6</b> = Potential<br>
                      <b>E</b> = Elektrisches Feld <br>
		<b>ε<sub>0</sub></b> = Elektrische Feldkonstante<br>
		<b>μ<sub>0</sub></b> = Magnetische Feldkonstante<br>
		<b>Q</b> = Ladung<br>
		<b>r</b> = Radius um die Kugel<br>
		<b>K</b> = Rand der Kugel<br>
	  
	  </td>
  </tr>
		<tr>
    <td><b>Geladener Leitender Hohlzylinder: </b></td>
    <td>$$\text{Der Innenraum ist ladungsfrei: } \\[1ex]
\rightarrow \text{ Man rechnet über den Rand mit Gauss: } \\[4ex]

\Phi_E = \oiint_{Z} \vec{E} \ d\vec{r} = 2 \pi r \cdot l \cdot \vert \vec{E} \vert \\[4ex]

\text{Es gilt somit: } \\[1ex]
\Phi_E = \frac{Q}{\varepsilon_0} = \frac{\lambda \cdot l}{\varepsilon_0} \\[1ex]
E = \frac{\lambda}{2 \pi \varepsilon_0} \cdot \frac{1}{r} \\[4ex]
		\text{Für das Potential folgt: } \\[1ex]
\phi(r) = - \frac{\lambda}{2 \pi \varepsilon_0} \ln({\vert \frac{r}{R} \vert}) \\[4ex]

\text{Für diesen Fall gilt somit: } \\[1ex]
\vert \vec{E} \vert = \frac{\phi}{r}
		$$</td>
	  
    <td>                      <b>&#x03C6</b> = Potential<br>
                      <b>E</b> = Elektrisches Feld <br>
		<b>l</b> = Zylinderlänge <br>
		<b>&#x03BB</b> = Ladung/Länge [C/m]<br>
		<b>ε<sub>0</sub></b> = Elektrische Feldkonstante<br>
		<b>μ<sub>0</sub></b> = Magnetische Feldkonstante<br>
		<b>Q</b> = Ladung<br>
		<b>r</b> = Radius um den Zylinder<br>
		<b>R</b> = Radius vom Zylinder<br>
		<b>Z</b> = Aussenfläche<br>
	  
	  </td>
  </tr>
	
											</table>
	</div>
			</div>
			<h2>Spezielle Relativität</h2>
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
    <td><b>Minkowsky Metrik: </b></td>
    <td>$$
\text{Die Minkowski Metrik:}\\[1ex]
\begin{bmatrix}
1 & 0 & 0 &0 \\ 
0 & -1 & 0 &0 \\ 
0& 0 & -1 & 0\\ 
0 & 0 & 0 & -1
\end{bmatrix} = g = \mathscr{M} \\[4ex]

		
\text{Die Metrik(Abstand) zwischen 2 Punkten} \\[1ex]
\vec{v} = \begin{bmatrix}
v_0\\ 
v_1\\ 
v_2\\ 
v_3
\end{bmatrix} \quad \vec{w} =  \begin{bmatrix}
w_0\\ 
w_1\\ 
w_2\\ 
w_3
\end{bmatrix} \\[1ex]

\langle \vec{v},\vec{w} \rangle = \vec{v}^T \cdot g \cdot \vec{w} \\[1ex]
\begin{bmatrix}
v_0 & v_1  & v_2  & v_3 
\end{bmatrix} \cdot \begin{bmatrix}
1 & 0 & 0 &0 \\ 
0 & -1 & 0 &0 \\ 
0& 0 & -1 & 0\\ 
0 & 0 & 0 & -1
\end{bmatrix} \cdot \begin{bmatrix}
w_0\\ 
w_1\\ 
w_2\\ 
w_3
\end{bmatrix}  \\[1ex]
= (v_0 \cdot w_0) - (v_1 \cdot w_1) - (v_2 \cdot w_2) - (v_3 \cdot w_3) \\[4ex]
		
		\text{Für die Länge eines Vektors folgt demnach: } \\[1ex]
\vert v \vert = \sqrt{\vert \langle \vec{v} , \vec{v} \rangle \vert} \\[4ex]
		
\text{Teilmengen des Minkowski Raums} \\[1ex]
(R^n)^+ := \{x \in \mathbb{R}^n \vert \Phi (x,x) > 0 \} \\[1ex]
\rightarrow \text{ Zeitartige Vektoren} \\[1ex]
(R^n)^- := \{x \in \mathbb{R}^n \vert \Phi (x,x) < 0 \} \\[1ex]
\rightarrow \text{ RaumartigeVektoren} \\[1ex]
(R^n)^0 := \{x \in \mathbb{R}^n \vert \Phi (x,x) = 0 \} \\[1ex]
\rightarrow \text{ Lichtartige Vektoren} \\[1ex]$$</td>
	  
    <td>                     
	  
	  </td>
  </tr>
	  <tr>
    <td><b>Lorentz Transformation: </b></td>
    <td>$$
\text{Eine Matrix heisst Lorentz-Transformation falls: } \\[1ex]
\mathscr{M}^T \cdot g \cdot \mathscr{M} = g \\[4ex]

	
\text{Der Lorentz Boost ist wie folgt} \\[1ex]
\mathscr{M} = \begin{bmatrix}
cosh(\chi ) & sinh(\chi )  & 0 &0 \\ 
sinh(\chi )  & cosh(\chi )  & 0 &0 \\ 
0& 0 & 1 & 0\\ 
0 & 0 & 0 & 1 \\
\end{bmatrix} = \begin{bmatrix}
\gamma  & \beta \gamma  & 0 &0 \\ 
\beta \gamma  & \gamma  & 0 &0 \\ 
0& 0 & 1 & 0\\ 
0 & 0 & 0 & 1 \\
\end{bmatrix} \quad 

\begin{alignedat}{4}
   \chi = arctanh(\frac{v}{c}) \\
   \beta = \frac{v}{c} = tanh(\chi) \\
\chi = arctanh(\beta) \\
\gamma = \frac{1}{\sqrt{1-\beta^2}} = cosh(\chi)
\end{alignedat} \\[4ex]
		
		$$</td>
	  
    <td>                     
	  
	  </td>
  </tr>
	  <tr>
    <td><b>Relativistische Kinematik: </b></td>
    <td>$$
\tau = \text{Die Zeit aus der Sicht des Bewegten Teilchens} \\[2ex]

\text{Es gilt für } \gamma \\[1ex]
\frac{dt}{d\tau} = \gamma \\[4ex]

\text{Die 4D Formeln folgen somit: } \\[1ex]
\vec{v} = \frac{ds}{d\tau} = \vec{\dot{s}} = \gamma \cdot \begin{bmatrix}
c\\ 
\vec{\dot{s}}
\end{bmatrix} \\[1ex]
\vec{a} = \frac{dv}{d\tau} \\[1ex]
s = v \cdot \gamma \cdot \tau
		
		$$</td>
	  
    <td>   
		<b>E</b> = Energie in [eV]<br>
          <b>p</b> = Impuls in [eV/c]<br>      
	  <b>m</b> = Masse in [eV/c^2]<br>
		<b>P</b> = Leistung in [eV/c]<br>
	  </td>
  </tr>
		  <tr>
    <td><b>Relativistische Dynamik: </b></td>
    <td>$$
\text{Die Dynamik ist wie folgt} \\[2ex]

\vec{p} = m \cdot \gamma \begin{bmatrix}
c\\ 
\vec{v}
\end{bmatrix} = \begin{bmatrix}
m \cdot \gamma \cdot c \\ 
m \cdot \gamma \cdot \vec{v} 
\end{bmatrix} \\[4ex]
		
		\text{Energie - Impuls Beziehung} \\[1ex]
\langle \vec{p}, \vec{p} \rangle = m^2 \cdot c^2 \\[1ex]
E^2 - p^2 \cdot c^2 = m^2 \cdot c^4 \\[4ex]

\text{Für den Erhaltungssatz gilt} \\[1ex]
\vec{p} =m \cdot \gamma \cdot \vec{v} = m \cdot \gamma \begin{bmatrix}
c\\ 
\vec{v}
\end{bmatrix} = \begin{bmatrix}
m \cdot \gamma \cdot c \\ 
m \cdot \gamma \cdot \vec{v} 
\end{bmatrix} = \begin{bmatrix}
\frac{E}{c} \\ 
\vec{P}
\end{bmatrix} \\[4ex]
		
		\text{Aktionsprinzipe} \\[1ex]
\frac{d\vec{P}}{d\tau} = \gamma \cdot \begin{bmatrix}
\frac{\vec{P}}{c} \\ 
\vec{F}
\end{bmatrix} \\[4ex]
		
		
		\text{Ruhende Energie ist wie folgt} \\[1ex]

E_{r} = m \cdot \gamma \cdot c^2 \qquad \gamma = 1\\[4ex]

\text{Für die Kinetische Energie folgt} \\[1ex]
E = E_r + E_k  = m \cdot \gamma \cdot c^2 \\[1ex]
E_k = (\gamma -1) \cdot m \cdot c^2 \\[1ex]
		$$</td>
    <td>   
		<b>E</b> = Energie in [eV]<br>
          <b>p</b> = Impuls in [eV/c]<br>      
	  <b>m</b> = Masse in [eV/c^2]<br>
		<b>P</b> = Leistung in [eV/c]<br>
	  </td>
  </tr>
			  <tr>
    <td><b>Relativistische Elektrodynamik </b></td>
    <td>$$
\text{Die Feldmatrix} \\[1ex]
F = \begin{bmatrix}
O & C^1 & C^2 & C^3 \\ 
C^1 & 0 & B^3 & -B^2 \\ 
C^2 & -B^3  & 0 & B^1\\ 
C^3 & B^2 & -B^1 & 0
\end{bmatrix} \quad \Bigg\vert \begin{aligned}
   \vec{B} = \begin{bmatrix}
B^1\\ 
B^2\\ 
B^3
\end{bmatrix} \\
   \begin{bmatrix}
C^1\\ 
C^2\\ 
C^3
\end{bmatrix} = \frac{1}{c} \begin{bmatrix}
E^1\\ 
E^2\\ 
E^3
\end{bmatrix}
\end{aligned} \\[3ex]
		
		\text{Es gilt:} \\[1ex]
F \cdot \vec{v} = \gamma \cdot \begin{bmatrix}
\frac{1}{c} \cdot \langle \vec{E}, \vec{v} \rangle \\
\vec{E} + \vec{v} \times \vec{B}
\end{bmatrix} \\[3ex]
		\text{Die Lorentzgleichung im 4D} \\[1ex]
\frac{\delta \vec{P}}{\delta \tau} = q \cdot F \cdot \vec{v} \\[3ex]

\text{Aus der Impulsgleichung folgt} \vec{p} = m \cdot \vec{v} \\[1ex]
\frac{\delta \vec{v}}{\delta \tau} = \frac{q}{m} \cdot F \cdot \vec{v} \\[3ex]

		$$</td>
    <td>                     
	  
	  </td>
  </tr>
				  <tr>
    <td><b>Feldtransformation</b></td>
    <td>$$
\text{Die Feldtransformation für 2 Beobachter auf Felder} \\[1ex]
F = \mathscr{M} \cdot \tilde{F} \cdot \mathscr{M}^{-1} \\[1ex]
\tilde{F} = \mathscr{M}^{-1} \cdot F \cdot \mathscr{M} \\[3ex]

\text{Daraus folgt:} \\[1ex]
tr(\tilde{F}) = tr(F) \\[1ex]
det(\tilde{F}) =det(F) \\[1ex]
P_{\tilde{F}}(\lambda) = P_F (\lambda) \\[3ex]

\text{Daraus folgt:} \\[1ex]
tr(F) = 0 \\[1ex]
det(F) = - \frac{1}{c^2} \cdot (\langle \vec{E} , \vec{B} \rangle)^2 \\[1ex]
P_F =  \lambda^4  + (B^2-\frac{1}{c^2} \cdot E^2) \cdot \lambda^2 - \frac{1}{c^2} \cdot (\langle \vec{E} , \vec{B} \rangle)^2\\[3ex]
		\text{Elektromagnetische Invariation} \\[1ex]
I_1 = (\langle \vec{E} , \vec{B} \rangle)^2 \\[1ex]
I_2 = B^2-\frac{1}{c^2} \cdot E^2 \\[1ex]
\rightarrow \text{ In jedem Initialsystem gleich!} \\[3ex]

\text{Für technische Anwendungen gilt } v \rangle \rangle  c \\[1ex]
\vec{B} \approx \tilde{\vec{B}} \\[1ex]
\vec{E} \approx \tilde{\vec{E}} - \vec{v} \times \tilde{\vec{B}} \approx \tilde{\vec{E}} - \vec{v} \times \vec{B}

		$$</td>
    <td>                     
	  
	  </td>
  </tr>

	
											</table>
	</div>
			</div>
			</main>
		</div>
	</div>
	<?php include ('includes/footer.php'); ?>

</body>
</html>