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
          <h1 class="bd-title" id="content">Lineare Algebra</h1>

          <p class="bd-lead">Grundlagen der Linearen Algebra</p>

<br><h2>Komplexe Zahlen</h2>
<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<ol style="list-style-type:none">
	
	<table>
  <tr>
    <th>Bezeichnung</th>
    <th>Erklärung</th>
    <th>Zusatz</th>
  </tr>
  <tr>
    <td>Jede Komplexe Zahl hat einen Imanigären Teil und einen Realen Teil</td>
    <td>$$\mathbb{C} = \{(x,y) \vert x,y \epsilon \mathbb{R}\} \\ z = (\Re(z),\Im(z))$$</td>
    <td></td>
  </tr>
		</table>
		
		<li><b>Addition / Subtraktion von Komplexen Zahlen</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<li>$$(x,y) + (v,w) = (x + v , y + w) \\
\Re(z \pm w) = Re(z) \pm Re(w)\; und\; Im(z \pm w) = Im(z) \pm Im(w)$$</li>
	<li>Die Addition / Subtraktion ist assoziativ und kommutativ</li>
	<li>Die komplexe Zahl (0,0) ist das Neutralelement</li>
	<li>Jede komplexe Zahl (x,y) hat ein additives Inverses, (-x,-y) </li>
		</div>
		</div>
		<li><b>Multiplikation von Komplexen Zahlen</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<li>$$(x,y) \cdot  (v,w) = (x\cdot  v-y\cdot  w , x\cdot  w+y\cdot  v)$$</li>
	<li>Die Multiplikation ist assoziativ und kommutativ</li>
	<li>Die komplexe Zahl (1,0) ist das Neutralelement</li>
	<li>Jede komplexe Zahl ausser (0,0) hat ein multiplikatives Inverses </li>
		</div>
		</div>
		<li><b>Konjugation von Komplexen Zahlen</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<li>$$Re(\overline{z}) = Re(z)$$</li>
	<li>$$Im(\overline{z}) = - Im(z)$$</li>
	<li>$$(\overline{\overline{z}}) = z$$</li>
	<li>$$\frac{1}{2}(z+\overline{z}) = Re(z)$$</li>
	<li>$$\frac{1}{2}(z-\overline{z}) = Im(z)(0,1)$$</li>
	<li>$$z \cdot  \overline{z} = Re(z)^2 + Im(z)^2$$</li>
	<li><b>Daraus folgen folgende Regeln:</b></li>
	<li>$$\overline{z\pm w} = \overline{z} \pm \overline{w}$$</li>
	<li>$$\overline{z \cdot  w} = \overline{z} \cdot  \overline{w}$$</li>
	<li>$$\overline{(\frac{z}{w})} = \frac{\overline{z}}{\overline{w}} \quad falls w  \quad \neq (0,0)$$</li>
		</div>
		</div>
		<li><b>Betrag von Komplexen Zahlen</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<li><b>$$\vert (x,y)\vert = \sqrt{x^2+y^2}$$</b></li>
	<li>$$\vert \overline{z} \vert = \vert z \vert$$</li>
	<li>$$\vert \overline{z} \vert = \sqrt{Re(z)^2 + Im(z)^2}$$</li>
	<li>$$ z\overline{z} = \vert z \vert ^2$$</li>
	<li>$$ \frac{1}{z} = \frac{\overline{z}}{\vert z \vert ^2} \text{falls} z \neq (0,0)$$</li>
	
	<li><b>Bei 2 Zahlen gilt somit:</b></li>
	<li>$$\vert z \cdot  w \vert = \vert z \vert \cdot  \vert w \vert $$</li>
	<li>$$ \vert \frac{z}{w} \vert = \frac{\vert z \vert}{\vert w \vert} \quad \text{falls} \quad w \quad \neq (0,0)$$</li>
	
		</div>
		</div>
		<li><b>Die Imanigäre Einheit i</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<li>$$i = (0,1) \epsilon \mathbb{C}$$</li>
	<li>$$\overline{i} = -i$$</li>
	<li>$$\vert i \vert = 1$$</li>
	<li>$$ i^2 = -1$$</li>
	<li>$$ e^{i\pi} = -1$$</li>
	<li>$$ e^{ix} = cis(x)$$</li>
	<li>$$cis(\phi) = cos(\phi) + i\cdot  sin(\phi)$$</li>
		</div>
		</div>
		<li><b>Rechnen in kartesischer Darstellung</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<li><b>$$x+yi \quad und v+wi$$</b></li>
	<li>$$\vert x + yi \vert = \sqrt{x^2 + y^2}$$</li>
	<li>$$\overline{x+yi} = x-yi$$</li>
	<li>$$(x+yi) \pm (v+wi) = x \pm v + (y \pm w)i$$</li>
	<li>$$(x+yi) \cdot  (v+wi) = xv - yw + (xw + yv)i$$</li>
	<li>$$\frac{x+yi}{v+wi} = \frac{xv+yw}{v^2+w^2} + \frac{yv - xw}{v^2 +w^2} \text{falls} v+wi \neq 0$$</li>
	
		</div>
		</div>
		<li><b>Umwandlung von Polar + Kartesischen Koordinaten</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<li><b>$$ \text{Der Punkt mit den Polarkoodinaten} \quad (r,\phi) \quad \text{wird zu} $$</b></li>
	<li>$$(r\cdot  cos(\phi),r\cdot  sin(\pi))$$</li>
	<li>$$\text{Kartesisch: (x,y)}$$</li> <br>
	
	<li><b>Der Punkt mit den kartesischen Koordinaten (x,y) wird zu</b></li>
	<li>$$(\sqrt{x^2+y^2},\phi), \phi \epsilon [0,2\pi[$$</li>
	<li>$$\frac{x+yi}{v+wi} = \frac{xv+yw}{v^2+w^2} + \frac{yv - xw}{v^2 +w^2} \quad \text{falls} \quad v+wi \quad \neq \quad 0$$</li>
	<li><b>Bedienungen</b></li>
	<li>$$\text{Falls} \quad x > 0 \; \text{und}\; y \geq 0,  \;\text{so gilt} \;\phi = arctan(\frac{y}{x}) $$</li>
	<li>$$\text{Falls} \quad x > 0 \; \text{und}\; y < 0, \; \text{so gilt}\; \phi = arctan(\frac{y}{x}) + 2\pi $$</li>
	<li>$$\text{Falls} \quad x < 0 , \;\text{so gilt}\; \phi = arctan(\frac{y}{x}) + \pi $$</li>
	<li>$$\text{Falls} \quad x = 0 \;\text{und}\; y > 0, \; \text{so gilt}\; \phi = \frac{\pi}{2} $$</li>
	<li>$$\text{Falls} \quad  x = 0 \;\text{und}\; y < 0, \; \text{so gilt}\; \phi = \frac{3\pi}{2} $$</li>
		<li>$$ \text{Polar:} \quad (\vert z \vert, arg(z))$$</li>
	
		</div>
		</div>
		<li><b>Rechnen in Polardarstellung</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<li><b>$$r\cdot cis(\phi) \quad und \quad s\cdot cis(\gamma)$$</b></li>
	<li>$$\vert r\cdot cis(\phi) \vert = r$$</li>
	<li>$$\overline{r\cdot cis(\phi)} = r\cdot cis(-\phi)$$</li>
	<li>$$r\cdot cis(\phi) \cdot  s\cdot cis(\gamma) = r\cdot s\cdot cis(\phi + \gamma)$$</li>
	<li>$$(r\cdot cis(\phi))^{-1}  =\frac{1}{r} \cdot  cis(-\gamma) ;\ \text{falls} \; r\cdot cis(\phi) \neq 0$$</li>
	<li>$$ \frac{r\cdot cis(\phi)}{s\cdot cis(\gamma)} = \frac{r}{s} \cdot  cis(\phi - \gamma) \; \text{falls} \; s\cdot cis(\gamma) \neq 0 $$</li>
	
		</div>
		</div>
	<li><b>Rechnen in Exponentialdarstellung</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<li><b>Wir betrachen die komplexen Zahlen </b></li>
	<li><b>$$re^{i\phi} \quad und \quad se^{i\gamma}$$</b></li>
	<li>$$Re(r\cdot e^{i\phi}) = cos(x)$$</li>
	<li>$$Im(r\cdot e^{i\phi}) = sin(x)$$</li> <br>
	
	<li>$$\vert r\cdot e^{i\phi} \vert = r$$</li>
	<li>$$\overline{r\cdot e^{i\phi}} = r\cdot e^{-i\phi}$$</li>
	<li>$$r\cdot e^{i\phi} \cdot  s\cdot e^{i\gamma} = r\cdot s\cdot e^{(\phi + \gamma)}$$</li>
	<li>$$(r\cdot e^{i\phi})^{-1}  =\frac{1}{r} \cdot  e^{-i\phi} \; \text{falls} \; r\cdot e^{i\phi} \neq 0$$</li>
	<li>$$ \frac{r\cdot e^{i\phi}}{s\cdot e^{i\gamma}} = \frac{r}{s} \cdot  e^{(\phi - \gamma)} \; \text{falls} \; s\cdot e^{i\gamma} \neq 0 $$</li>
	
		</div>
		</div>
		<li><b>Umformungen nach Moivre</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<li><b>$$ \text{Für} \quad z= r\cdot e^{i\phi} = r\cdot cis(\phi) \epsilon \mathbb{C} \; \text{und} \; n \epsilon\; \mathbb{Z} \quad gilt:$$ </b></li>
	<li>$$ z^n = r^n\cdot e^{in\phi} = r^n\cdot cis(n\phi)$$></li>
	
		</div>
		</div>
	
	</div>
			</div>
<br><h2>Gleichungen</h2>
<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<table>
  <tr>
    <th>Definition</th>
    <th>Gleichung</th>
    <th>Zusatz</th>
  </tr>
  <tr>
    <td>Funktion 1. Grades</td>
    <td>$$x + y = 1 \rightarrow p = 1$$</td>
    <td>Lineare Gleichung</td>
  </tr>
		<tr>
    <td>Funktion 2. Grades</td>
    <td>$$x^2 + y = 1 \rightarrow p = 2$$</td>
    <td>Quadratische Gleichung</td>
  </tr>
		<tr>
    <td>Funktion 3. Grades</td>
    <td>$$x^2 + y^3 = 1 \rightarrow p = 3$$</td>
    <td>Kubische Gleichung</td>
  </tr>
		<tr>
    <td>Gleichungen mit einer Variablen</td>
    <td>$$  \qquad \mathbb{L} \quad von \quad ax + b = cx + d \qquad$$ </td>
    <td>$$a \quad \neq \quad c, \text{so gilt:}\;  \mathbb{L} = \{\frac{d - b}{a - c}\} \\
		a = c \;\text{und}\; b = d, \text{so gilt:}\;  \mathbb{L} = \{\mathbb{R}\} \\
		a = c\; \text{und}\; b \neq d, \text{so gilt:}\;  \mathbb{L} = \{\emptyset\}
		$$</td>
  </tr>
		<tr>
    <td>Degenerierte Gleichung</td>
    <td>Eine Gleichung ist degeneriert falls alle Koeffizienten 0 sind. </td>
    <td>$$0x_1 + 0x_2 + .... 0x_n = b$$</td>
  </tr>
		<tr>
    <td>Quadratische Gleichung</td>
    <td>$$\mathbb{L} \quad von \quad ax^2 + bx + c = 0 \\ D = b^2 - 4ac$$</td>
    <td>$$D < 0, \text{so gilt:} \; \mathbb{L} = \emptyset \\
				D = 0, \text{so gilt:} \; \mathbb{L} = \{\frac{-b}{2a}\} \\
				D > 0, \text{so gilt} \; \mathbb{L} = \{\frac{-b+\sqrt{D}}{2a},\frac{-b-\sqrt{D}}{2a}\} $$</td>
  </tr>
	</table>
		<li><b>Gleichungssysteme</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<ol style="list-style-type:none">
   <li><b>Lineare Gleichungssysteme</b>
	   <ul>
         <li>Falls in einem Gleichungssystem eine degenerierte  Gleichung vorkommt, kann diese weggelassen werden.</li>
         <li>Hat das Gleichungssystem eine degenerierte Gleichung <br> mit 0 verschiedener Konstanten, so hat das System keine Lösung.</li>
		   </ul>
   </li>
		<li><b>Dreiecksform</b>
	   <ul>
         <li>Ein Gleichungssystem mit gleich vielen Variablen wie Gleichungen.</li>
         <li>Einfach mit Rücksubstitution zu lösen</li>
		   </ul>
   </li>
		<li><b>Treppenform</b>
	   <ul>
         <li>Leitvariable --> erste Variable welche nicht 0 ist</li>
         <li>Das System kann man gleich viele Gleichungen wie Variablen haben</li>
		   <li>Eine Variable welche keine Leitvariable ist wird "freie Variable" genannt.</li>
		   </ul>
   </li>
		<li><b>Homogene Systeme</b>
	   <ul>
         <li>Ein Gleichungssystem ist homogen wenn alle Gleichungen = 0 sind.</li>
         <li>Jedes Gleichungssystem hat die Banale Lösung 0</li>
		   <ul>
			   <li>Falls m(Gleichunge) = n(Variablen) --> nur banale Lösung</li>
			   <li> Falls m ungleich n --> mehrere Lösungen</li>
		   </ul>
		   </ul>
   </li>
	</ol>

		
		</div>
		</div>
		
	</div>
	</div>
<br><h2>Vektoren</h2>
<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<table>
  <tr>
    <th>Definition</th>
    <th>Gleichung</th>
    <th>Zusatz</th>
  </tr>
  <tr>
    <td>Betrag eines Vektors</td>
    <td>$$\vert \vec{a} \vert = \sqrt{(a_1)^2+(a_2)^2}$$</td>
    <td></td>
  </tr>
		<tr>
    <td>Addition / Subtraktion</td>
    <td>$$ \vec{a} \pm \vec{b} = \begin{pmatrix}a_{x}\\ a_{y}\\ a_{z}\end{pmatrix}\pm\begin{pmatrix}b_{x}\\ b_{y}\\ b_{z}\end{pmatrix}=\begin{pmatrix}a_{x} \pm b_{x}\\ a_{y} \pm b_{y}\\ a_{z} \pm b_{z}\end{pmatrix} $$</td>
    <td>Das gleiche Gilt auch für die Multiplikation</td>
  </tr>
		<tr>
    <td>Das Skalarpordukt</td>
    <td>$$\langle \vec{a}, \vec{b} \rangle = a_1 \cdot b_1 + a_2 \cdot b_2 + a_3 \cdot b_3$$</td>
    <td>$$\langle \vec{a}, \vec{b} \rangle = \mid \vec{a} \mid \cdot  \mid \vec{b} \mid \cdot  cos(\alpha) \\
		cos(\alpha) = \frac{\vec{a}\cdot \vec{b}}{\vert \vec{a} \vert\cdot \vert \vec{b} \vert}$$</td>
  </tr>
		<tr>
    <td></td>
    <td>$$\text{Fläche eines Parallelogramms ist somit:} \qquad \mid \langle \vec{a},\vec{b}\rangle \mid  = A$$ </td>
    <td></td>
  </tr>
		<tr>
    <td></td>
    <td>$$\text{Fläche eines Dreiecks ist somit:} \qquad \mid \langle \vec{a},\vec{b}\rangle \mid  = \frac{A}{2}$$ </td>
    <td></td>
  </tr>
		<tr>
    <td></td>
    <td>$$\text{Es ist antikommutativ:} \qquad \vec{b} \cdot  \vec{a} = - (\vec{a} \cdot  \vec{b})$$ </td>
    <td></td>
  </tr>
		<tr>
    <td>Das Vektorprodukt oder Kreuzprodukt</td>
    <td>$$ \vec{c}=\vec{a} \times\vec{b} = \begin{pmatrix}a_{x}\\ a_{y}\\ a_{z}\end{pmatrix}\times\begin{pmatrix}b_{x}\\ b_{y}\\ b_{z}\end{pmatrix} = \begin{pmatrix}a_{y}b_{z}-a_{z}b_{y}\\ a_{z}b_{x}-a_{x}b_{z}\\ a_{x}b_{y}-a_{y}b_{x}
                          \end{pmatrix} $$</td>
    <td>$$\mid \vec{a}\times \vec{b} \mid = \mid \vec{a} \mid \cdot \mid \vec{b} \mid \cdot sin(\alpha)$$</td>
  </tr>
		
		<tr>
    <td></td>
    <td>$$\text{Vektoren stehen senkrecht aufeinenader wenn gilt:} \qquad (a\times b) = 0 $$</td>
    <td></td>
  </tr>
	</table>
	<li><b>Verschiedene Vektoridenditäten</b></li>
	<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
<table>
  <tr>
    <th>Idenditäten</th>
  </tr>
  <tr>
    <td>$$ \text{Grassmannidentität} \qquad \vec{a} \times (\vec{b} \times \vec{c}) = \langle \vec{a},\vec{c} \rangle \cdot  \vec{b} - \langle \vec{a}, \vec{b} \rangle \cdot  \vec{c}$$</td>
  </tr>
	<tr>
    <td>$$ \text{Korollarität} \qquad (\vec{a} \times \vec{b}) \times \vec{c} = \langle\vec{a}, \vec{c} \rangle \cdot  \vec{b} - \langle \vec{b} , \vec{c} \rangle \cdot  \vec{a}$$</td>
  </tr>
	<tr>
    <td>$$ \text{Jacobiidentität} \qquad \vec{a} \times (\vec{b} \times \vec{c}) - (\vec{a} \times \vec{b}) \times \vec{c} = \vec{b} \times (\vec{a} \times \vec{c})$$</td>
  </tr>
	<tr>
    <td>$$ \text{Korollarität} \qquad \vec{a} \times (\vec{b} \times \vec{c}) + \vec{b} \times (\vec{c} \times \vec{a}) + \vec{c} \times (\vec{a} \times \vec{b}) = 0$$</td>
  </tr>
	<tr>
    <td>$$ \text{Binet - Cauchy Identität:} \qquad \langle \vec{a} \times \vec{b} , \vec{c} \times \vec{d} \rangle = \langle \vec{a}, \vec{c} \rangle \cdot  \langle \vec{b} , \vec{d} \rangle - \langle \vec{a}, \vec{d} \rangle \cdot  \langle \vec{b} , \vec{c} \rangle$$</td>
  </tr>
	<tr>
    <td>$$ \text{Korollarität (Lagrangeidentität)} \qquad \vert \vec{a} \times \vec{b} \vert^2 = \vert \vec{a} \vert^2 \cdot  \vert \vec{b} \vert^2 - \langle \vec{a} , \vec{b} \rangle^2$$</td>
  </tr>
	
	</table>
		</div>
	</div>

		
		</div>
		</div>
<br><h2>Vektorräume</h2>
<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<table class="table">
                <tr>
                  <td width=20%>Vektorraum</td>
                  <td width=80% colspan="2"> Jede Menge, in der eine <b>Addition</b> und eine <b>Multiplikation mit Zahlen</b> definiert ist, die nicht aus der Menge herausführen und für die die Regeln 1. bis 8. gelten, ist ein <b>Vektorraum</b>.
                  </td>
                </tr>
                <tr>
                  <td width=20%>1.</td>
                  <td width=42% >$$ (x + y) + z = x+(y+z) $$</td>
                  <td>Assoziativgesetz der Addition</td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>$$ x+y=y+x $$</td>
                  <td>Kommutativgesetz der Addition</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>$$ x+o=x$$</td>
                  <td><b>Gesetz der Null:</b><br> Es gibt ein Element o in V, so dass für alle x aus V gilt:</td>
                </tr>
                <tr>
                  <td>4.</td>
                  <td>$$ x+(-x) = 0 $$</td>
                  <td><b>Gesetz des Inversen:</b><br> Zu jedem x aus V gibt es ein Element -x aus V, so dass gilt:</td>
                </tr>
                <tr>
                  <td>5.</td>
                  <td>$$ a(bx) = (ab)x $$</td>
                  <td>Assoziativgesetz der Multiplikation</td>
                </tr>
                <tr>
                  <td>6.</td>
                  <td>$$ 1x = x $$</td>
                  <td>Für alle a ∈ V gilt:</td>
                </tr>
                <tr>
                  <td>7.</td>
                  <td>$$ a(x+y) = ax + ay $$</td>
                  <td>Erstes distributives Gesetz</td>
                </tr>
                <tr>
                  <td>8.</td>
                  <td>$$ (a+b)x = ax+bx $$</td>
                  <td>Zweites distributives Gesetz</td>
                </tr>
              </table>
		</div>
	</div>
<br><h2>Unter-Vektorräume</h2>
<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	<table class="table">
                <tr>
                  <td width=20%>Untervektorraum</td>
                  <td width=80% colspan="2"><p>Ein Untervektorraum ist in der Mathematik eine Teilmenge eines Vektorraums, die selbst wieder einen Vektorraum darstellt. Dabei werden die Vektorraum Operationen Vektoraddition und Skalarmultiplikation von dem Ausgangsraum auf den Untervektorraum vererbt.</p>
                  </td>
                </tr>
                <tr>
                  <td width=20%>1.</td>
                  <td width=42% >$$ U \neq  \varnothing \longleftrightarrow \vec{0} \in U $$</td>
                  <td>Objekt nichtleer?</td>
                </tr>
                <tr>
                  <td>2.</td>
                  <td>$$ \forall \; \vec{x}, \vec{y}\in U:\vec{x}+'\vec{y}\in U $$</td>
                  <td>Abgeschlossen bezüglich der Vektoraddition</td>
                </tr>
                <tr>
                  <td>3.</td>
                  <td>$$ \forall \; a\in K, \vec{x}\in U:a \cdot'\vec{y}\in U $$</td>
                  <td>Abgeschlossen bezüglich der skalaren Multiplikation</td>
                </tr>
              </table>
		</div>
	</div>
<br><h2>Wichtige Begriffe</h2>
<table class="table">
                <tr>
                  <td width=20%>Basis</td>
                  <td width=42%>$$ \footnotesize{B = \left \{ e_1=(1,0,0,...,0); \; e_2=(0,1,0,...,0); \; ... , \;e_n=(0,0,0,...,1) \right \}} $$</td>
                  <td>Mit diesem Basisvektor kann man alle Vektoren im Vektorraum erstellen</td>
                </tr>
                <tr>
                  <td>Dimension</td>
                  <td>$$ \text{dim = }n $$</td>
                  <td>Man zählt alle Basisvektoren zusammen und erhält die Dimension.</td>
                </tr>
                <tr>
                  <td>Erzeugendenmenge</td>
                  <td>$$ e_1, e_2, ...\; e_n $$</td>
                  <td>Die Vektoren in der Basis sind das Erzeugendensystem oder Erzeugendenmenge. </td>
                </tr>
                <tr>
                  <td>Linearkombination</td>
                  <td>$$ r\cdot \vec{a} + s\cdot \vec{b} = \vec{c} $$</td>
                  <td><img src="bilder/vektor/vektorraum/linearkombination.jpg"style="max-height:100%; max-width:40%"></td>
                </tr>
                
                <tr>
                  <td>Lineare Unabhängigkeit</td>
                  <td>$$ \begin{pmatrix}1 \\ 0 \\ 0 \end{pmatrix},\begin{pmatrix}0 \\ 1 \\ 0 \end{pmatrix},\begin{pmatrix}0 \\ 0 \\ 1 \end{pmatrix} $$</td>
                  <td>Kein Element ist überflüssig. Lineare Abhängige Mengen haben ein überflüssiges Element.</td>
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