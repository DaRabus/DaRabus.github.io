<!DOCTYPE html>
<html lang="de">
<head>
	<?php include ('includes/top_head.php'); 
    $loc = "Analysis";
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
				<h1 class="bd-title" id="content">Analysis</h1>

				<p class="bd-lead">Grundlagen der Analysis</p>

				<br>
				<h2>Wichtige Kennzahlen und Formeln</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<ol style="list-style-type:none">
							<li><b>Wichtige Zahlen</b>
							</li>
							<li>$$\sqrt{2} = 1,41421 \quad e = 2,71828 \quad \pi = 3,14159$$</li>
							<li><b>Fakulität</b>
							</li>
							<li>$$n! = 1 \cdot 2 \cdot 3 \cdot \ldots \cdot n \quad 0! = 1! = 1$$</li>
							<li><b>Potenzregel negativ</b>
							</li>
							<li>$$0^{-x} = \frac{x}{0} \rightarrow \text{undef.} $$</li>
							<li><b>Ganze Zahlen</b>
							</li>
							<li>$$\mathbb Q=\{\frac{p}{q}\ \mid\ p\in\mathbb Z; q\in\mathbb N\}$$</li>
							<li><b>Komplexe Zahlen</b>
							</li>
							<li>$$\mathbf{i}=\sqrt{-1}$$</li>
							<li>$$i^2 = -1 \quad i^4 = 1$$</li>
							<li><b>Mitternachtsformel</b>
							</li>
							<li>$$x_{1/2}=\frac{-b\pm\sqrt{b^2-4ac}}{2a}$$</li>
							<li>$$D = b^2-4ac$$</li>
							<li>$$D
								< 0 \rightarrow \text{keine Lösung}$$</li>
									<li>$$D > 0 \rightarrow \text{zwei Lösungen}$$</li>
									<li>$$D = 0 \rightarrow \text{eine Lösung} \rightarrow \frac{-b}{2a}$$</li>

					</div>
				</div>
				<br>
				<h2>Mengenlehre</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">

						<p class="bd-lead">Eine Zusammenfassung von Elementen zu einer Menge die explizite Angabe sieht wie folgt aus: $$A=\{1,2,3\}$$ </p>
						<p class="bd-lead">
							Angabe durch Eigenschaft: $$A = \{n \in \mathbb{N} \mid 0
							< n < 4 \}$$ </p>



								<br><br>
								<h5 id="allgemien">Allgemein</h5>

								<table class="table">
									<thead>
										<tr>
											<th scope="col" width=20%>Bezeichnung</th>
											<th scope="col" width=42%>Formel</th>
											<th scope="col">Grafik</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td rowspan="2">Menge</td>
											<td>$$ b \in A$$</td>
											<td rowspan="2"><img src="bilder/mengenlehre/menge.png" style="max-height:50%; max-width:50%">
											</td>
										</tr>
										<tr>
											<td>$$ A = \left \{ a, b, c \right \} $$</td>
										</tr>
										<tr>
											<td rowspan="2">Echte Teilmenge</td>
											<td>$$A\subset B \: \text{oder} \: A \subseteq B $$</td>
											<td rowspan="2"><img src="bilder/mengenlehre/teilmenge.png" style="max-height:50%; max-width:50%">
											</td>
										</tr>
										<tr>
											<td>$$A = \left \{ b, d \right \}, B = \left \{ a, b, c, d, e \right \} $$</td>
										</tr>
										<tr>
											<td rowspan="2">Teilmenge</td>
											<td>$$A \subseteq B $$</td>
											<td rowspan="2"><img src="bilder/mengenlehre/teilmenge_necht.png" style="max-height:50%; max-width:50%">
											</td>
										</tr>
										<tr>
											<td>$$A = \left \{ a, b, c, d, e \right \}, B = \left \{ a, b, c, d, e \right \} $$</td>
										</tr>
										<tr>
											<td>Durchschnittsmenge</td>
											<td>$$ A\cap B $$</td>
											<td><img src="bilder/mengenlehre/schnittmenge.png" style="max-height:50%; max-width:50%">
											</td>
										</tr>
										<tr>
											<td>Vereinigungsmenge</td>
											<td>$$ A\cup B $$</td>
											<td><img src="bilder/mengenlehre/vereinigungsmenge.png" style="max-height:50%; max-width:50%">
											</td>
										</tr>
										<tr>
											<td>Differenzmenge</td>
											<td>$$ A \setminus B $$</td>
											<td><img src="bilder/mengenlehre/differenzmenge.png" style="max-height:50%; max-width:50%">
											</td>
										</tr>
										<tr>
											<td>Symmetrische Differenz</td>
											<td>$$ A \bigtriangleup B $$</td>
											<td><img src="bilder/mengenlehre/symmetrische_differenz.png" style="max-height:50%; max-width:50%">
											</td>
										</tr>
										<tr>
											<td>Komplementärmenge</td>
											<td>$$ \bar{A}:=G \setminus A $$</td>
											<td><img src="bilder/mengenlehre/komplement.png" style="max-height:50%; max-width:50%">
											</td>
										</tr>
									</tbody>
								</table>
					</div>
				</div>
				<br>
				<h2>Funktionen</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<p class="bd-lead">Eine Funktion f ist eine Abbildung, die jedem Element x einer Definitionsmenge D genau ein Element y einer Zielmenge Z zuordnet.</p>

						<li><b>Tabelle für wichtige Ableitungen/Aufleitungen</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<table>
									<tr>
										<th>Stammfunktion</th>
										<th>Funktion</th>
										<th>Ableitung</th>
									</tr>
									<tr>
										<td>$$\frac{a^x}{ln a}$$</td>
										<td>$$a^x$$</td>
										<td>$$ln(a) \cdot a^x$$</td>
									</tr>
									<tr>
										<td>$$e^x$$</td>
										<td>$$e^x$$</td>
										<td>$$e^x$$</td>
									</tr>
									<tr>
										<td>$$\frac{e^{nx}}{n}$$</td>
										<td>$$e^{nx}$$</td>
										<td>$$n \cdot e^{nx}$$</td>
									</tr>
									<tr>
										<td>$$ln \mid x \mid $$</td>
										<td>$$\frac{1}{x}$$</td>
										<td>$$-\frac{1}{x^2}$$</td>
									</tr>
									<tr>
										<td>$$\frac{1}{q+1} x^{q+1}$$</td>
										<td>$$ x^q$$</td>
										<td>$$qx^{q-1}$$</td>
									</tr>
									<tr>
										<td>$$\frac{2x^{\frac{3}{2}}}{3}$$</td>
										<td>$$ \sqrt{x}$$</td>
										<td>$$\frac{1}{2 \cdot \sqrt{x}}$$</td>
									</tr>
									<tr>
										<td>$$x ln(ax) - x $$</td>
										<td>$$ln(ax)$$</td>
										<td>$$ \frac{1}{x} $$</td>
									</tr>
									<tr>
										<td>$$-cos(x)$$</td>
										<td>$$ sin(x)$$</td>
										<td>$$ cos(x) $$</td>
									</tr>
									<tr>
										<td>$$sin(x) $$</td>
										<td>$$ cos(x) $$</td>
										<td>$$ -sin(x) $$</td>
									</tr>
									<tr>
										<td>$$-ln \mid cos(x) \mid $$</td>
										<td>$$ tan(x) $$</td>
										<td>$$ \frac{1}{cos^2(x)}$$</td>
									</tr>
									<tr>
										<td>$$ln\mid sin(x) \mid $$</td>
										<td>$$ cot(x) $$</td>
										<td>$$\frac{-1}{sin^2(x)}$$</td>
									</tr>
									<tr>
										<td>$$x arcsin(x) + \sqrt{1-x^2} $$</td>
										<td>$$ arcsin(x) $$</td>
										<td>$$\frac{1}{\sqrt{1-x^2}} $$</td>
									</tr>
									<tr>
										<td>$$x arccos(x) - \sqrt{1-x^2} $$</td>
										<td>$$ arccos(x)$$</td>
										<td>$$ -\frac{1}{\sqrt{1+x^2}} $$</td>
									</tr>
									<tr>
										<td>$$x arctan(x) - \frac{1}{2} ln \mid 1+x^2 \mid $$</td>
										<td>$$arctan(x) $$</td>
										<td>$$ \frac{1}{1+x^2} $$</td>
									</tr>
									<tr>
										<td>$$x arccot(x) + \frac{1}{2} ln \mid 1+x^2 \mid $$</td>
										<td>$$arccot(x)$$</td>
										<td>$$- \frac{1}{1+x^2}$$</td>
									</tr>
									<tr>
										<td>$$sinh(x)$$</td>
										<td>$$ cosh(x) $$</td>
										<td>$$ sinh(x)$$</td>
									</tr>
									<tr>
										<td>$$cosh(x)$$</td>
										<td>$$ sinh(x)$$</td>
										<td>$$ cosh(x) $$</td>
									</tr>
								</table>

							</div>
						</div>
						
						<li><b>Ableitungen + Regeln</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">

								<table class="table">
									<thead>
										<tr id="add_und_sub">
											<th scope="col" width=20%>Bezeichnung</th>
											<th scope="col" width=42%>Formel</th>
											<th scope="col">Grafik / Text</th>
										</tr>
									</thead>
									<tr>
										<td>Spezialfälle</td>
										<td>$$f(x) = c \rightarrow \text{konstant} \Rightarrow f'(x) = 0 \qquad f(x) = m \cdot x + q \Rightarrow f'(x) = m $$</td>
										<td>Bei Konstanten Funktionen ist die Ableitung in jedem Fall 0</td>
									</tr>
									<tr id="mult_mit_skalar">
										<td rowspan="2">Differenzenquotient / mittlere Änderungsrate</td>
										<td>$${\color{#0BACE8}\frac{\Delta y}{\Delta x} } = \frac{\Delta f}{\Delta x} \coloneqq \frac{f(x_{0}+\Delta x)-f(x_{0})}{\Delta x}$$</td>
										<td rowspan="2"><img src="bilder/differentialrechnung/ableitung/differenzenquotient.png" style="max-height:50%; max-width:80%">
										</td>
									</tr>
									<tr>
										<td>
											<p>Der Differenzenquotient gibt die Steigung der
												<t style="color:#18A45A" ;>Sekante</t> PQ an.</p>
										</td>
									</tr>
									<tr>
										<td width=20%>Monom-Ableitung</td>
										<td width=42%>$$ f(x) = x^{p} \\f'(x) = p \cdot x^{p-1} $$</td>
										<td>Die Ableitung der quadratischen Standard-Funktion. </td>
									</tr>
									<tr>
										<td width=20%>Summenregel</td>
										<td width=42%>$$ (f(x)+g(x))' \\ = f'(x)+g'(x) $$</td>
										<td>Die Ableitung einer konstanten Funktion ist null. </td>
									</tr>
									<tr>
										<td width=20%>Faktorregel</td>
										<td width=42%>$$ (c\cdot f(x))' \\ = c\cdot f'(x) $$</td>
										<td>Ein konstanter Faktor bleibt beim Differenzieren erhalten.</td>
									</tr>
									<tr>
										<td width=20%>Produktregel</td>
										<td width=42%>$$ (f(x)\cdot g(x))' \\ = f'(x)\cdot g(x)+f(x)\cdot g'(x) $$</td>
										<td></td>
									</tr>
									<tr>
										<td width=20%></td>
										<td width=42%>$$ \text{Betrag als innere Funktion} \quad f(x) = g(\mid x \mid)\qquad f'(x) = g'(\mid x \mid) \cdot sgn(x)  $$</td>
										<td></td>
									</tr>
									<tr>
										<td width=20%></td>
										<td width=42%>$$ \text{Betrag als innere Funktion} \quad f(x) = g(\mid x \mid)\qquad f'(x) = g'(\mid x \mid) \cdot sgn(x) $$</td>
										<td></td>
									</tr>
									<tr>
										<td width=20%></td>
										<td width=42%>$$ \text{Betrag über der Funktion} \quad f(x) = \mid g(x) \mid \qquad f'(x) = sgn(g(x)) \cdot g'(x) $$</td>
										<td></td>
									</tr>
									<tr>
										<td width=20%>Kettenregel</td>
										<td width=42%>$$ (f(g(x)))'=f'(g(x))\cdot g'(x) $$</td>
										<td>Äussere Ableitung mal innere Ableitung.</td>
									</tr>
									<tr>
										<td width=20%>Quadrat - Regel</td>
										<td width=42%>$$ f(x) = h^2(x) = (h(x))^2 \qquad f'(x) = 2 \cdot h(x) \cdot h'(x) $$</td>
										<td></td>
									</tr>
									<tr>
										<td width=20%>Reziproken - Regel</td>
										<td width=42%>$$ f(x) = \frac{1}{h(x)} \qquad f'(x) = -\frac{h'(x)}{(h(x))^2}$$</td>
										<td></td>
									</tr>

									<tr>
										<td width=20%>Quotientenregel</td>
										<td width=42%>$$f(x) = \frac{g(x)}{h(x)} \qquad f'(x) = -\frac{g'(x) \cdot h(x) - g(x) \cdot h'(x)}{(h(x))^2} $$</td>
										<td>g(x) ≠ 0</td>
									</tr>
									<tr>
										<td width=20%>Ableitung der Logarithmusfunktion</td>
										<td width=42%>$$f(x) = \log_{a}(x) \qquad f'(x)= \frac{ln(x)}{ln(a) \cdot x} $$</td>
										<td></td>
									</tr>
									<tr>
										<td width=20%>Ableitung der Exponentialfunktion</td>
										<td width=42%>$$f(x) = a^{x} \qquad f'(x)= a^{x} \cdot ln(a) $$</td>
										<td>
											<td>
									</tr>
								</table>


							</div>
						</div>
						
						<li><b>Vektoranalysis</b>
									</li>
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
    <td><b>Funktionen mit mehreren Variablen</b></td>
    <td>$$ f: \mathbb{R}^2 \longrightarrow \mathbb{R}, \; (x_1; \; ... \; ; x_n) \mapsto f(x_1; \; ... \; ; x_n)  $$</td>
    <td>Der Faktor "n" gibt dabei die Anzahl der Variablen an.</td>
  </tr>
												<tr>
    <td><b></b></td>
    <td>$$\text{Falls } A = \mathbb{R}^n \quad \text{und} \quad n>1 \rightarrow f \quad  \text{surjektiv}$$</td>
    <td></td>
												</tr>
													<tr>
    <td><b>Abstand zum Ursprungspunkt</b></td>
    <td>$$
\begin{matrix}
n = 2 \rightarrow r(x;y) := \sqrt{x^2+y^2} \\[1.5ex]
n = 3 \rightarrow r(x;y;z) := \sqrt{x^2+y^2+z^2} \\
\end{matrix}$$</td>
    <td>Die kann man für Berechnungen verwenden um einen Punkt im Feld zu beschrieben.</td>
  </tr>
												<tr>
    <td><b>Die Levelmenge</b></td>
    <td>$$ f^{-1}(\left \{ L \right \}) :=\left \{ p\in A\mid f(p) = L \right \} $$</td>
    <td>Man beschreibt hiermit verschiedene Punkte im Feld</td>
  </tr>
												<tr>
    <td><b>Vektorfelder</b></td>
                    <td>$$ \vec{v}: \mathbb{R}^n \rightarrow \mathbb{R}^n \\(x_1; \; ... \; ;x_n )x \mapsto \vec{v} (x_1; \; ... \; ;x_n ) = \begin{bmatrix}v_1 (x_1; \; ... \; ;x_n )\\ \text{ } \\ \vdots \\ v_n (x_1; \; ... \; ;x_n )\end{bmatrix} $$</td>

    <td>Jede Komponente des Vektorfeldes ist eine Funktion in n Variablen</td>
  </tr>
												<tr>
                    <td><b>Vektorbegriffe:</b></td>
                    <td>$$\begin{matrix}
\text{Homogen: }\vec{v} (x_1; \; ... \; ;x_n ) \equiv \text{konstant.}   \\[1ex]
\text{Einheitsvektorfeld: }\mid \vec{v} (x_1; \; ... \; ;x_n ) \mid = 1  \\
\end{matrix}$$</td>
                    <td>Einheitsvektorfeld --> Richtungsvektor <br> Homogene Felder --> Plattenkondensator</td>
                  </tr>
												<tr>
                    <td><b>Parameterisierte Kurven:</b></td>
                    <td>$$\text{Allgemein  Defintion: } \vec{s} : [\tau_0 , \tau_E] \rightarrow \mathbb{R}^n \\[1ex]
\tau \rightarrow \vec{s}(t) = \begin{bmatrix}
s_1(\tau)\\ 
s_...(\tau)\\ 
s_n(\tau)
\end{bmatrix} \\[4ex]
\text{Geschwindigkeitsvektor } \vec{v}(\tau) : =  \dot{\vec{s}}(\tau) \\[1ex]
 \text{Bahngeschwindigkeit:  } v(\tau) : =  \mid \vec{v}(\tau) \mid  \\[1ex]
\text{Beschleunigungsvektor:  } \vec{a}(\tau) : =  \dot{\vec{v}}(\tau) \\[1ex]
\text{Bahnvektor:  }ê(\tau) : = \hat{v}(\tau) = \frac{1}{v(\tau)} \cdot \vec{v}(\tau) \\[1ex]
\text{Bahn:  } \rightarrow \text{Bildmenge von} \quad \vec{s}([\tau_0,\tau_E]) \\[1ex]
\text{Kurvenlänge:  }  \Delta s := \int_{\tau_0}^{\tau_E}  v(\tau) \; \text{d}\tau  \\[1ex]  $$</td>
                    <td>Es sollte möglichst Injektiv sein!</td>
                  </tr>
												
												
												<tr>
                    <td><b>Strecken von A nach B </b></td>
                    <td>$$ \vec{s}(\tau) = \vec{A}+ \tau \cdot (\vec{B}-\vec{A}) \small \; \text{ mit }\; \normalsize \tau \in \left [ 0,1 \right ] $$</td>
                    <td></td>
                  </tr>
												<tr>
                    <td><b>Kreis in 2D mit Radius r und Mittelpunkt am Ursprung </b></td>
                    <td>$$ \vec{s}(\tau) = \begin{bmatrix}r\cdot \cos(\tau)\\ r\cdot \sin(\tau)\end{bmatrix} \small \; \text{ mit }\; \normalsize \tau \in \left [ 0,2 \pi \right [ $$</td>
                    <td></td>
                  </tr>
												
												<tr>
                    <td><b>Linienintegrale</b></td>
                    <td>$$\text{Allgemein gilt: } I := \int_{\tau_0}^{\tau_E}\left \langle \vec{w},\vec{v} \right \rangle  \ \text{d} \tau  \\[2ex]
  \text{Masseinheit: } [I] = [\vec{w}]\cdot[\vec{s}] \\[4ex]

  \text{Parametrisierung durch Bogenlänge: } \\[1ex]
  \tau = s \Rightarrow \vec{v} = \hat{v} = \hat{e} \\[1ex]
  I := \int_{s_0}^{s_E}\left \langle \vec{w},\hat{e} \right \rangle \text{d} s \\[4ex]
						
						

  \text{Vorgehen in 2D: } \vec{s} \ \text{ist gegeben}  \\[1ex]
\vec{s}(\tau) = \begin{bmatrix}
s_x(\tau)\\ 
s_y(\tau)
\end{bmatrix}
= 
\begin{bmatrix}
x(\tau)\\ 
y(\tau)
\end{bmatrix}
 \quad \vec{w}(x;y) = \begin{bmatrix}
w_x(x;y)\\ 
w_y(x;y)
\end{bmatrix} \\[1ex]

  1 . \ \text{Partielle Ableitung} \\[1ex]
  \vec{v}(\tau) = \begin{bmatrix}
\dot{x}(\tau)\\ 
\dot{y}(\tau)
\end{bmatrix} \\[1ex]
  1 . \ \text{Integral Aufstellen: } \\[1ex]
I = \int_{\tau_0}^{\tau_e} \langle \vec{w}(x(\tau);y(\tau)),\vec{v}(\tau) \rangle \ d\tau \\[1ex]
= \int_{\tau_0}^{\tau_e} \langle \begin{bmatrix}
w_x(x(\tau);y(\tau))\\ 
w_y(x(\tau);y(\tau))
\end{bmatrix} , \begin{bmatrix}
\dot{x}(\tau)\\ 
\dot{y}(\tau)
\end{bmatrix} \rangle \ d\tau \\[4ex]



  \text{Bei Konstanter Länge: } \Delta s \quad \text{gilt:} \\[1ex]
  I = \int_{s_0}^{s_E}\left \langle \vec{w},\hat{e} \right \rangle \text{d} s = \left \langle \vec{w},\hat{e} \right \rangle \cdot \Delta s \\[1ex]
$$</td>
                    <td></td>
                  </tr>
												
												<tr>
                    <td><b>Mehrfachintegration</b></td>
                    <td>$$\text{Allgemein gilt: } I := \int_{G}f d V  \\[2ex]
  = I := \int_{...}^{...}\int_{...}^{...}\int_{...}^{...}f(x_1;x_2... x_n) dx_1 dx_2 ... dx_n  \\[4ex]

  \text{Doppelintegral für Flächen: } \\[1ex]
   \int_{y_0}^{y_E}\int_{x_0}^{x_E}f \quad dx dy \\[2ex]

  \text{Dreifachintegral für Volumen: }\\[1ex]
  \int_{z_0}^{z_E}\int_{y_0}^{y_E}\int_{x_0}^{x_E} f \quad dx dy dz  \\[4ex]

  \text{Integrationsregeln: } \\[1ex]
   \text{Faktorregel: } \int_{G} a \cdot f \quad dA  = a \cdot \int_{G}  f \quad dA  \\[1ex]
   \text{Summenregel: } \int_{G}(f+g) \quad dA  = \int_{G}  f \quad dA + \int_{G}  g \quad dA \\[1ex]
   \text{Gebietsregel: } \int_{G_1 \cup G_2}f \quad dA  = \int_{G_1}  f \quad dA + \int_{G_2}  f \quad dA - \int_{G_1 \cap  G_2}f \quad dA \\[1ex]
   \text{Separationssatz: } \int_{y_0}^{y_E}\int_{x_0}^{x_E}g(x) \cdot h(y) \quad dx  dy  =\int_{x_0}^{x_E} g(x) dx  \cdot \int_{y_0}^{y_E} h(y) dy \\[1ex]
   \text{Fubini: } \int_{y_0}^{y_E}\int_{x_0}^{x_E}f(x;y) dx  dy  = \int_{x_0}^{x_E}\int_{y_0}^{y_E}f(x;y) dy  dx\\[4ex]

  \text{Falls f = 1 dann:} \\[1ex]
   \int_{G}f \quad dA = \int_{G}1 \quad dA \\[1ex]
  \text{Ist dies der Flächeninhalt von G geschrieben als: } M(G) \\[1ex]
$$</td>
                    <td></td>
                  </tr>
												<tr>
                    <td><b>Parametrisierte Flächen</b></td>
                    <td>$$\text{Allgemein gilt: } \vec{P}: U \rightarrow \mathbb{R}^3 \\[1ex]
 (u;v) \mapsto \vec{P}(u;v) = \begin{bmatrix}
x(u;v)\\ 
y(u;v)\\ 
z(u;v)
\end{bmatrix} \\[4ex]

 \text{Koordinatenbasis - Vektorfelder: } \\[1ex]
\vec{e}_1 := \vec{e}_u := \vec{P},u \equiv \vec{P}(u,v)  \quad \text{abgeleitet nach u} \\[1ex]
\vec{e}_2 := \vec{e}_v := \vec{P},v \equiv \vec{P}(u,v)  \quad \text{abgeleitet nach v} \\[4ex]

\text{Die Metrik oder Gram-Matrix errechnet sich wie folgt: } \\[1ex]
[g_{\mu v}]:= \begin{bmatrix}
g_{11} & g_{12} \\ 
g_{21} & g_{22}
\end{bmatrix}
 := \begin{bmatrix}
\langle \vec{e}_1,\vec{e}_1 \rangle \langle \vec{e}_1,\vec{e}_2> \\ 
\langle \vec{e}_2,\vec{e}_1 \rangle & \langle \vec{e}_2,\vec{e}_2>
\end{bmatrix} \\[1ex]
 \text{Die Matrix ist symmetrisch: }  [g_{\mu v}]^T = [g_{\mu v}] \\[4ex]
	


  \text{Die Gram-Determinante / Massfunktion: } \\[1ex]
  g:= det([g_{\mu v}]) = g_{11} \cdot g_{22} - g_{21} \cdot g_{12} \\[1ex]
  \sqrt{g} \equiv \quad \text{Massfunktion} \\[1ex]
  \text{Es gilt: } \mid \vec{n} \mid = \sqrt{g}  \\[4ex]

  \text{Der Normalenvektor: } \\[1ex]
  \vec{n} := \pm  \vec{e}_1 \times \vec{e}_2 \\[1ex]
  \text{Der Normalenvektor sollte immer nach "aussen" zeigen } \\[1ex]
  \text{Ausserdem gilt: } \\[1ex]
 \hat{n} := \frac{1}{\mid \vec{n} \mid} \cdot \vec{n} = \frac{1}{\sqrt{g}} \cdot \vec{n} \\[4ex]

  \text{Der Flächeninhalt ergibt sich somit: } \\[1ex]
  A = \int _M 1 \; dA = \int _U \sqrt{g} \; dU
$$</td>
                    <td></td>
                  </tr>
	
	<tr>
                    <td><b>Flussintegrale</b></td>
                    <td>$$
\text{Der Fluss oder Flux des Vektorfeldes } \vec{v} \ \text{durch die Fläche M ist: } \\[1ex]
  \Phi_{\vec{v}} :=  \int_M \langle \vec{v} , \vec{n} \rangle dA \\[4ex]
  \text{Falls } \langle \vec{v},\vec{n}> = \text{konstant entlang M ist: } \\[1ex]
  \Phi_{\vec{v}} :=  \   \langle \vec{v} , \vec{n} \rangle \cdot A \\[4ex]
  \text{Falls } \langle \vec{v},\vec{n} \rangle  = 0 \text{ also } \vec{v} \ || M \ \\[1ex]
  \Phi_{\vec{v}} = 0 \\[4ex]
						
  \text{Der Vorgehen ist folgendes:} \\[1ex]
  1. \text{Fläche Parametisieren} \\[1ex]
\vec{P}(u;v) = \begin{bmatrix}
x(u;v)\\ 
y(u;v)\\ 
z(u;v)
\end{bmatrix}
\quad 
\hat{n}(u;v) = \begin{bmatrix}
n_x(u;v)\\ 
n_y(u;v)\\ 
n_z(u;v)
\end{bmatrix}
\quad 
\sqrt{g} = \sqrt{g(u;v)} \\[1ex]
  2.  \ \vec{v} \ \text{entlang M berechnen} \\[1ex]
  \vec{v} = \begin{bmatrix}
v_x(x(u;v);y(u;v);z(u;v)) \\ 
v_y(x(u;v);y(u;v);z(u;v))\\ 
v_z(x(u;v);y(u;v);z(u;v))
\end{bmatrix} \\[1ex]
						
  3. \text{Integral Bilden} \\[1ex]
  \Phi_{\vec{v}} :=  \int_M \langle \vec{v} , \vec{n} \rangle dA = \int \int \langle \vec{v} , \vec{n} \rangle \sqrt{g} \ du \ dv \\[4ex]

  \text{Für Homogene Vektorfelder gilt:} \\[1ex]
\Phi_{\vec{v}} = \int_M \langle \vec{v} , \vec{n} \rangle dA = 0 \\[4ex]

  \text{Hauptanwendung Elektrodynamik:} \\[1ex]
  \Phi_{\vec{E}} = \oint_M \langle \vec{E} , \hat{n} \rangle \ dA = \frac{1}{\epsilon_0} \cdot Q_{eg} \\[1ex]
   \Phi_{\vec{B}} = \oint_M \langle \vec{B} , \hat{n} \rangle \ dA = 0 \\[4ex]
$$</td>
                    <td></td>
                  </tr>
							<tr>
                    <td><b>Partielle Ableitungen</b></td>
                    <td>$$


  \text{Der Gradient von f ist das Vektorfeld }  \\[1ex]
  \vec{\nabla}f := \vec{grad }(f) := \begin{bmatrix}
f,1\\ 
f,2\\ 
... \\
f,n
\end{bmatrix}\\[4ex]

  \text{Beispiel }  \\[1ex]
  f(x,y) = x^2 \cdot y^2 \\[1ex]
  \vec{\nabla}f = \begin{bmatrix}
f,1\\ 
f,2\\ 
\end{bmatrix} = \begin{bmatrix}
2x \cdot y^2\\ 
x^2\cdot 2y\\ 
\end{bmatrix} \\[4ex]
						

  \text{Rechenregeln: } \\[1ex]
   \text{Summenregel: } \vec{\nabla}(g+h) = \vec{\nabla}g + \vec{\nabla}h\\[1ex]
   \text{Faktorregel: }  \vec{\nabla}(a \cdot g) = a \cdot \vec{\nabla}g \\[1ex]
   \text{Produktregel: }  \vec{\nabla}(g \cdot h) = ( \vec{\nabla}g) \cdot h + g \cdot ( \vec{\nabla}h) \\[1ex]
   \text{Kettenregel: } \vec{\nabla} f = g'(h(x^1,...,x^n)) \cdot \vec{\nabla}h \\[1ex]
   \text{Parametrisierte Kurven: } G(\tau) = f(\vec{s}(\tau)) = \dot{G}(\tau) = \langle \vec{\nabla}f,\vec{v} \rangle \\[4ex]

  \text{Die Hesse - Matrix: } \\[1ex]
\vec{\nabla}^2 f = \begin{bmatrix}
f,1,1 & f,1,2 & ... & f,1,n\\ 
f,2,1 & f,2,2 & ... & f,2,n\\ 
f,n,1 & f,n,2 & ... & f,n,n\\ 
\end{bmatrix} \\[2ex]

  \text{Beispiel dazu: } \\[1ex]
f(x;y) = x^2y^2 \\[1ex]
\vec{\nabla}f = \begin{bmatrix}
f,1\\ 
f,2\\ 
\end{bmatrix}
= 
\begin{bmatrix}
2x \cdot y^2\\ 
x^2\cdot 2y\\ 
\end{bmatrix} \\[1ex]
\vec{\nabla}^2f = 
\begin{bmatrix}
f,1,1 & f,1,2\\ 
f,2,1 & f,2,2\\ 
\end{bmatrix}
=
\begin{bmatrix}
2y^2 & 4xy\\ 
4xy & 2x^2\\ 
\end{bmatrix} \\[4ex]

  \text{Die Hesse - Matrix ist symmetrisch: } \\[1ex]
 f,\mu,v = f,v,\mu \qquad (\vec{\nabla}^2f)^T = \vec{\nabla}^2f \\[4ex]

  \text{Die Laplace - Ableitung von f ist: } \\[1ex]
\Delta f = tr(\vec{\nabla}^2f) = f,1,1 + f,2,2 + ... + f,n,n \\[4ex]
$$</td>
                    <td></td>
                  </tr>
						<tr>
                    <td><b>Divergenz von Vektorfeldern</b></td>
                    <td>$$

  \text{Die Divergenz ist ein Mass für die Quellendichte: } \\[1ex]
  \text{Wir gehen von einem folgendem Vektorfeld aus: } \\[1ex]
  \vec{v}(x^1;...;x^n) = \begin{bmatrix}
v^1(x^1;...;x^n)\\ 
.... \\
v^n(x^1;...;x^n)\\ 
\end{bmatrix} \\[4ex]

 	\text{Die Divergenz ist somit:} \\[1ex]
  div(\vec{v}):= v^1_{,1} + v^2_{,2} + ... + v^n_{,n} \\[4ex]

\text{Beispiel: } \\[1ex]
\vec{v} (x;y) = \begin{bmatrix}
x\cdot y^2\\ 
x^3 \cdot y^3
\end{bmatrix} \\[1ex]
div(\vec{v}) = (x \cdot y^2)_{,x} + (x^3 \cdot y^3)_{,y} \\[1ex]
= y^2+x^3\cdot 3y^2 \\[4ex]
						
\text{Rechenregeln: } \\[1ex]
a) \quad div(\vec{v} + \vec{w}) = div(\vec{v}) + div(\vec{w}) \\[1ex]
b) \quad div(a \cdot \vec{v}) = a \cdot div(\vec{v}) \\[1ex]
c) \quad div(f \cdot \vec{v}) = \ \langle \vec{\nabla}f,\vec{v} \rangle + f \cdot div(\vec{v}) \\[4ex]
						
						
						$$</td>
                    <td></td>
                  </tr>
						<tr>
                    <td><b>Rotation von Vektorfeldern</b></td>
                    <td>$$ \text{Die Rotation ist ein Mass für die Wirbeldichte: } \\[1ex]
  \text{Für 2D gilt folgendes: } \\[1ex]
  \vec{v}(x^1;x^2) = \begin{bmatrix}
v^1(x^1;x^2)\\ 
v^2(x^1;x^2)\\ 
\end{bmatrix} \\[4ex]

 	\text{Die Rotation im 2D:} \\[1ex]
  rot(\vec{v}):= v^2,1 - v^1,2 \\[4ex]

  \text{Für 3D gilt folgendes: } \\[1ex]
  \vec{v}(x^1;x^2;x^3) = \begin{bmatrix}
v^1(x^1;x^2;x^3)\\ 
v^2(x^1;x^2;x^3)\\ 
v^3(x^1;x^2;x^3)\\ 
\end{bmatrix} \\[4ex]

 	\text{Die Rotation im 3D:} \\[1ex]
  rot(\vec{v}):= \begin{bmatrix}
v^3,2 - v^2,3 \\ 
v^1,3 - v^3,1 \\ 
v^2,1 - v^1,2 
\end{bmatrix} \\[4ex]
	
\text{Rechenregeln: } \\[1ex]
a) \quad rot(\vec{v} + \vec{w}) = rot(\vec{v}) + rot(\vec{w}) \\[1ex]
b) \quad rot(a \cdot \vec{v}) = a \cdot rot(\vec{v}) \\[1ex]
c) \quad \text{3D: } rot(f \cdot \vec{v}) =  \langle \vec{\nabla}f,\vec{v} \rangle + f \cdot rot(\vec{v}) \\[1ex]
d) \quad \text{nD: }  \quad div(\vec{\nabla}f) = \Delta f \\[1ex]
e) \quad \text{2D/3D: } rot(\vec{\nabla}f) = 0 \\[1ex]
f) \quad \text{3D: } \quad div(rot( \vec{v})) = 0 \\[1ex]
g) \quad \text{3D: } \quad rot(rot( \vec{v})) = \vec{\nabla}div(\vec{v}) - \Delta \vec{v} \\[4ex]						

\text{Kreuzproduktregeln in 3D: } \\[1ex]
a) \quad div(\vec{v} \times \vec{w}) = \langle rot( \vec{v} ), \vec{w} \rangle - \langle \vec{v}, rot(\vec{w}) \rangle \\[1ex]
b) \quad rot(\vec{v} \times \vec{w}) = \vec{\nabla}_{\vec{w}} \vec{v} - \vec{\nabla}_{\vec{v}} \vec{w} + div(\vec{w}) \cdot \vec{v} - div(\vec{v}) \cdot \vec{w} \\[1ex]
c)\quad  div(\vec{\nabla} g \times \vec{\nabla} h ) = 0 \\[1ex] $$
						</td>
                    <td></td>
                  </tr>
						<tr>
                    <td><b>Anwendungen Vektorfelder</b></td>
                    <td>$$
\text{Einen Quellenfreies Vektorfeld ist:} \\[1ex]
  div(\vec{v}) = 0 \\[2ex]
 \text{Einen Wirbelfreies Vektorfeld ist:} \\[1ex]
  rot(\vec{v}) = 0 \\[4ex]

\text{Anwendungen in der Hydrodynamik:} \\[1ex]
\vec{v} \rightarrow \ \text{Geschwindigkeitsfeld des Wassers} \\[1ex]
\text{Inkompressität von Wasser } \rightarrow div(\vec{v}) = 0 \\[4ex]


\text{Anwendungen in der Elektrodynamik:} \\[1ex]
\begin{matrix}
div(\vec{E}) = \frac{1}{\epsilon_0} & rot(\vec{E}) = - \dot{\vec{B}}\\ 
div(\vec{B}) = 0 & rot(\vec{B}) = \mu_0 \vec{J} + \epsilon_0 \cdot \mu_0 \dot{\vec{E}}
\end{matrix} \\[1ex]
\text{Ladungs-Erhaltung: } \dot{\delta}  + div(\vec{J}) = 0 \\[1ex]
\text{Vektorpotential: } \vec{B} = rot(\vec{A}) \\[1ex]
						$$</td>
                    <td></td>
                  </tr>
						<tr>
                    <td><b>Richtungsableitungen</b></td>
                    <td>$$
\text{Die Steigung eines Weges auf dem Funktionsgraphen in Richtung: } \\[1ex]
  \hat{e} \ \text{am Punkt: } (x_0;y_0) \ \text{beträgt:} \\[1ex]
  m = \langle \hat{e} , \vec{\nabla} f (x_0 ; y_0) \rangle \\[4ex]

\text{Die Richtungsableitung beträgt demnach: } \\[1ex]
  \vec{\nabla}_{\hat{e}} f = \langle \hat{e} , \vec{\nabla} f  \rangle \\[2ex]


\text{Für den Zwischenwinkel gilt: } \\[1ex]
  \vec{\nabla}_{\hat{e}} f = \langle \hat{e} , \vec{\nabla} f  \rangle = cos(\alpha) \cdot \mid \vec{\nabla} f \mid \\[4ex]
\text{Eigenschaften des Gradienten: } \\[1ex]
  \vec{\nabla}_{\hat{e}} f  \in [-\mid  \vec{\nabla} f \mid , \mid  \vec{\nabla} f \mid] \\[1ex]
  \alpha = 0 \rightarrow  \hat{e} \ // \ \vec{\nabla}f \rightarrow \vec{\nabla}_{\hat{e}}f = \ \mid  \vec{\nabla} f \mid \ \text{maximal}  \\[1ex]
  \alpha = \pi \rightarrow  \hat{e} \ // \ - \vec{\nabla}f \rightarrow \vec{\nabla}_{\hat{e}}f = \ - \mid  \vec{\nabla} f \mid \ \text{minimal}  \\[1ex]
  \alpha \in \{\frac{\pi}{2}, \frac{3\pi}{2}\} \rightarrow \hat{e} \perp \vec{\nabla} f \rightarrow \vec{\nabla}_{\hat{e}}f = 0 \\[1ex]
  \rightarrow \vec{\nabla}f \perp \ \text{Level -  Linien} \\[4ex]
						
						$$</td>
                    <td></td>
                  </tr>
						<tr>
                    <td><b>Gauss - Integralsatz</b></td>
                    <td>$$
\text{Es gilt in allen Dimensionen: } \\[1ex]
  \oint_{\delta K} < \vec{v} , \vec{n} > \ dA = \Phi_{\vec{v}} = \int_K div(\vec{v}) \ dV   \\[4ex]

\text{Anwendung in der MaxwellG:} \\[1ex]
div(\vec{E}) = \frac{1}{\epsilon_0} \cdot \delta \\[1ex]
div(\vec{B}) = 0 \\[2ex]


\text{Für jede Oberfläche } \delta K \ \text{gilt somit:} \\[1ex]
\Phi_B = \oint_{\delta L} <\vec{B}, \hat{n} > \ dA = \int_K div(\vec{B}) \ dV = 0 \\[1ex] 
\Phi_E = \oint_{\delta L} <\vec{E}, \hat{n} > \ dA = \int_K div(\vec{E}) \ dV = \int_K \frac{1}{\epsilon_0} \delta \ dV  = \frac{1}{\epsilon_0} \cdot Q_{eg} \\[1ex] 

						
						$$</td>
                    <td></td>
                  </tr>
						<tr>
                    <td><b>Stokes - Integralsatz</b></td>
                    <td>$$
\text{Es gilt im 3D: } \\[1ex]
  \oint_{\delta K} < \vec{v} , \hat{e}_s > \ ds = \Upsilon_{rot(\vec{v})} = \int_G <  rot(\vec{v}), \hat{n} > \ dA   \\[4ex]
\text{Anwendung in der MaxwellG:} \\[1ex]
rot(\vec{E}) = -\dot{\vec{E}} \\[1ex]
rot(\vec{B}) = \mu_0 \cdot \vec{J} + \mu_0 \cdot \epsilon_0 \cdot \dot{\vec{E}} \\[4ex]

\text{Statische Sitouationen: } \dot{\vec{E}} = \dot{\vec{B}} = 0 \\[1ex]
rot(\vec{E}) = 0 \\[1ex]
rot(\vec{B}) = \mu_0 \cdot \vec{J}  \\[4ex]

												
\text{Für jede geschlossene Kurve gilt:} \\[1ex]
\Upsilon_{\vec{E}} = \oint_{\delta G} < \vec{E}, \hat{e}_s > \ ds = \int_G < rot(\vec{E}), \hat{n} > \ dA = 0 \rightarrow \text{Maschensatz} \\[1ex] 
\Upsilon_{\vec{B}} = \oint_{\delta G} < \vec{B}, \hat{n} > \ ds = \int_G < rot(\vec{E}), \hat{n} > \ dA =  \mu_0 \cdot I_{eg} \\[1ex] 

$$</td>
                    <td></td>
                  </tr>
						<tr>
                    <td><b>Potentialsätze</b></td>
                    <td>$$


\text{Zur Errinerung, es gilt:} \\[1ex]
rot(\vec{\nabla}f) = 0 \\[1ex]
div(rot(\vec{v})) = 0 \\[4ex]

\text{Skalarer Potentialsatz für ein Vektorfeld v mit rot = 0 } \\[1ex]
\text{Die Skalare Funktion ist dann: } \\[1ex]
  \vec{v} = \vec{\nabla} \phi  \\[4ex]


\text{Bemerkungen dazu:} \\[1ex]
\rightarrow \text{Jedes wirbelfreie Feld ist ein Gradientenfeld} \\[1ex]
\rightarrow \phi \  \text{heisst Potential von } \vec{v} \\[1ex]
\rightarrow \text{Es gibt unendliche viele Varianten von } \phi  \\[4ex]

\text{Vektor Potentialsatz für ein Vektorfeld v mit div = 0 } \\[1ex]
\text{Das Vektorfeld A ist dann: } \\[1ex]
  \vec{v} = rot(\vec{A})  \\[4ex]


\text{Bemerkungen dazu:} \\[1ex]
\rightarrow \text{Jedes quellenfreie Vektorfeld ist eine Rotation} \\[1ex]
\rightarrow \vec{A} \  \text{heisst Vektorpotential von } \vec{v} \\[1ex]
\rightarrow \text{Es gibt unendliche viele Varianten von } \vec{A} \\[4ex]


\text{Anwendung Elektrodynamik:} \\[1ex]
div(\vec{B}) = 0 \rightarrow \vec{B} = rot(\vec{A})						
						$$</td>
                    <td></td>
                  </tr>
						
						<tr>
                    <td><b>Zerlegungssatz</b></td>
                    <td>$$
\text{Jedes Vektorfeld ist schriebbar als: } \\[1ex]
  \vec{v} = \vec{w} + \vec{q} + \vec{h}  \\[1ex]
\rightarrow div(\vec{w}) = 0 \rightarrow rot(\vec{q}) = 0 \rightarrow \vec{h} = konstant \\[4ex]

\text{Daraus folgt:} \\[1ex]
  \vec{v} = rot(\vec{A}) + \vec{\nabla} \phi  + \vec{h} \\[1ex]				
						$$</td>
                    <td></td>
                  </tr>
						<tr>
                    <td><b>Quellen bzw. Wirbelfreie Felder</b></td>
                    <td>$$
\text{Ein Vektorfeld ist Quellenfrei falls:: } \\[1ex]
  div(\vec{v}) = 0  \\[1ex]
  \Phi_{\vec{v}} = \oint_{\delta K} <\vec{v}, \hat{n} > \ dA  = 0 \\[1ex]
  \vec{v} = rot(\vec{A}) \\[4ex]

\text{Ein Vektorfeld ist Wirbelfrei falls:: } \\[1ex]
  rot(\vec{v}) = 0  \\[1ex]
  \Upsilon_{\vec{v}} = \oint_{\delta G} <\vec{v}, \hat{e} > \ ds  = 0 \\[1ex]
  \vec{v} = \vec{\nabla} f = - \vec{\nabla} \phi \\[1ex]
  I = \int_{s_0}^{s_e} <\vec{v}, \hat{e} > \ ds = f(s_e) - f(s_0) \\[1ex]				
						$$</td>
                    <td></td>
                  </tr>
											
  
  </table>
										</div>
									</div>
						
						<li><b>Integral + Regeln</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<h3>Integral ist die Fläche unter einer Kurve zwischen einem Intervall oder unbestimmt.</h3>
								<ol style="list-style-type:none">
									<li><b>Grundform eines Integrals</b>
									</li>
									<li>$$\int_{x_0}^{x_e}f(x) dx$$</li>
									<li><b>Summenregel</b>
									</li>
									<li>$$\int(g(x) + h(x)) dx = \int g(x) dx + \int h(x) dx$$</li>
									<li><b>Faktorregel</b>
									</li>
									<li> $$\int a \cdot g(x) dx = a \cdot \int g(x) dx$$ </li>
									<li><b>Zerlegungsregel</b>
									</li>
									<li> $$\int_{x_0}^{x_e} g(x) dx = \int_{x_0}^{x_1} g(x) dx + \int_{x_1}^{x_e} g(x) dx$$</li>
									<li><b>Grenzen vertauschen dreht das Vorzeichen um</b>
									</li>
									<li>$$ \int_{x_{E}}^{x_{0}}f(x) \:dx = -\int_{x_{0}}^{x_{E}}f(x) \:dx$$</li>
									
									<li><b>Integrationsmethoden</b>
									</li>
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
    <td><b>Substitution: </b></td>
    <td>$$\text{Sei folgendes Gegeben: } F'(u) = f(u) \quad \text{dann gilt für die Funktion } u(x) \\[1ex]
\int f(u(x)) \cdot u'(x) \ dx = \int f(u) \ du = F (u(x)) + c \\[1ex]
\int_{x_0}^{x_e} f(u(x)) \cdot u'(x) \ dx = \int_{u(x_0)}^{u(x_e)} f(u) \ du = F (u(x_e))-F (u(x_0)) \\[4ex]

\text{Beispiel: } \\[1ex]
\int x \cdot cos(x^2) \ dx \\[1ex]
\text{Substitution } u(x) = x^2 \rightarrow u'(x) = 2x \\[1ex]
\frac{dU}{dx} = u'(x) \rightarrow dx = \frac{1}{2x} \cdot dU \\[1ex]
\int \frac{1}{2x} \cdot x \cdot cos(u) \ du \\[1ex]
\frac{1}{2} sin(x^2) + c \\[1ex]
 $$</td>
      <td>Die Idee ist die Umkehrung der Kettenregel</td>
  </tr>
	 <tr>
    <td><b>Partielle Integration: </b></td>
    <td>$$\int \overset{\downarrow}{g(x)} \cdot \overset{\uparrow}{h'(x)} \ dx = g(x) \cdot h(x) - \int g'(x) \cdot h(x) \ dx \\[1ex]
\int_{x_0}^{x_e} \overset{\downarrow}{g(x)} \cdot \overset{\uparrow}{h'(x)} = [g(x) \cdot h(x)]|^{x_E}_{x_0} - \int_{x_0}^{x_e} g'(x) \cdot h(x) \ dx \\[4ex] 

\text{Beispiel: } \\[1ex]
\int \overset{\downarrow}{ln(x)} \cdot \overset{\uparrow}{1} \ dx  = ln(x) \cdot x - \int \frac{1}{x} \cdot x \ dx \\[1ex] 
\rightarrow ln(x) \cdot x - x + c \\[4ex]

\text{Der 1-er Trick: } \\[1ex]
\int f(x) \ dx = \int \overset{\downarrow}{f(x)} \cdot \overset{\uparrow}{1} \ dx = f(x) \cdot x - \int f'(x) \cdot x \ dx \\[1ex]


 $$</td>
      <td>Die Idee ist die Umkehrung der Produkt - Regel</td>
  </tr>
	 <tr>
    <td><b>Uneigentliche Integrale: </b></td>
    <td>$$\text{Integrale in die Richtung } \infin \\[1ex]
I = \int_{x_0}^{\infin} f(x) \ dx = \underset{s \rightarrow \infin}{\lim} \int_{x_0}^{s} f(x) dx \\[4ex]

\text{Vorgehen: } \\[1ex]
1. \text{f Aufleiten} \rightarrow F \\[1ex]
2. \text{Einsetzen von } x_0 / s \rightarrow F(s) - F(x_0) \\[1ex]
3. \text{Grenzwert berechnen für }s \rightarrow \infin \\[4ex]

\text{Beispiel:} \\[1ex]
I = \int_{2}^{\infin} \frac{1}{x^2} \ dx = \underset{s \rightarrow \infin}{\lim} \int_{2}^{s} \frac{1}{x^2} \ dx \\[1ex]
\underset{s \rightarrow \infin}{\lim} [-\frac{1}{x}]|^s_2 = 0+ \frac{1}{2} = \frac{1}{2} \\[4ex]
		
		\text{Sei: } x_0 > 0 \quad \text{dann gilt:} \\[1ex]
		\boxed{
		\int_{x_0}^{\infin} \frac{1}{x^p} \ dx = \begin{cases}
   \frac{1}{p-1} \cdot \frac{1}{x_0^{p-1}} &| p > 1 \\
   \text{divergent} & | p \leq 1
\end{cases} }\\[4ex]
		
		\text{Analoger Fall: } \\[1ex]
I = I = \int_{-\infin}^{x_e} f(x) \ dx = \underset{s \rightarrow \infin}{\lim} \int_{-s}^{x_e} f(x) dx \\[4ex]
		
		\text{Bei Integration über ganz } \mathbb{R} \\[1ex]
I = I = \int_{-\infin}^{\infin} f(x) \ dx = \underset{r \rightarrow \infin}{\lim} \int_{-r}^{x_0} f(x) \ dx + \int_{x_0}^{s} f(x) \  dx  \\[1ex] 
\rightarrow x_0 \in \mathbb{R} \\[4ex]

 $$</td>
      <td>Unendliche Grenzen und soooo </td>
  </tr>
											</table>
											</div>
									</div>

									<li><b>Newton-Leibniz Formel</b>
									</li>
									<div class="pre-spoiler">
										<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
										<div class="spoiler" style="display: none;">
											<table class="table">
												<tr>
													<td width=20%>Newton-Leibniz-Formel</td>
													<td width=42%>$$ \int_{x_{E}}^{x_{0}}f(x) \:dx = F(x_{E})-F{(x_{0})} $$</td>
													<td>Falls die Funktion keine Sprünge hat, gilt die Formel mit:<br> <b>f(x) = F'(x)</b>.</td>
												</tr>
												<tr>
													<td width=20%>Beispiel 1</td>
													<td width=42%>$$ \int_{-1}^{1}x^{3} \:dx = \frac{1}{4}x^{4} \mid _{-1}^{1} = \frac{1}{4}1^{4} -\frac{1}{4}(-1)^{4} = \frac{1}{4}-\frac{1}{4}= 0 $$</td>
													<td><img src="bilder/integral/beispiel_1.png" style="max-height:35%; max-width:50%">
													</td>
												</tr>
												<tr>
													<td width=20%>Beispiel 2</td>
													<td width=42%>$$ \int_{0}^{\pi}\sin(x)\:dx = -\cos(x)\mid _{0}^{\pi} \;= -\cos(\pi)+\cos(0) \\= -(-1)+1 = 1+1 = 2 $$</td>
													<td><img src="bilder/integral/beispiel_2.png" style="max-height:35%; max-width:50%">
													</td>
												</tr>
											</table>

										</div>
									</div>
									<li><b>Lineare Modifikation</b>
									</li>
									<div class="pre-spoiler">
										<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
										<div class="spoiler" style="display: none;">
											<table class="table">
												<thead>
													<tr>
														<th scope="col" width=20%></th>
														<th scope="col" width=42%>unmodifiziert</th>
														<th scope="col">modifiziert</th>
													</tr>
												</thead>
												<tr>
													<td width=20%>Lineare Modifikation</td>
													<td width=42%>$$ \int f(m\cdot x+q) \; dx $$</td>
													<td>$$ \frac{1}{m}\cdot F(m\cdot x+q)+c$$</td>
												</tr>
												<tr>
													<td rowspan="4" width=20%>Beispiele</td>
													<td width=42%>$$ \int \cos(8x-3) \; dx $$</td>
													<td>$$ \frac{1}{8}\cdot \sin(8x-3) + c $$</td>
												</tr>
												<tr>
													<td>$$ \int 3^{2x+9} \; dx $$</td>
													<td>$$ \frac{1}{2}\cdot \frac{1}{\ln(3)} \cdot 3^{2x+9} + c $$</td>
												</tr>
												<tr>
													<td>$$ \int x^{13} \; dx $$</td>
													<td>$$ \frac{1}{14}\cdot x^{14} + c $$</td>
												</tr>
												<tr>
													<td>$$ \int f(G \cdot a^{\frac{x-x_0}{\varepsilon}}) \; dx $$</td>
													<td>$$ G \cdot \frac{1}{\ln(a)}\cdot \varepsilon \cdot a^{\frac{x-x_0}{\varepsilon}} $$</td>
												</tr>
											</table>
										</div>
									</div>
									<li><b>ACR-Prozess Grundsatz</b>
									</li>
									<div class="pre-spoiler">
										<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
										<div class="spoiler" style="display: none;">
											<table>
												<tr>
													<td width=20%>Konzept</td>
													<td width=42%>Archimedes-Cauchy-Riemann Approximationsprozess</td>
													<td><img src="bilder/integral/acr/acr.png" style="max-height:35%; max-width:50%">
													</td>
												</tr>
												<tr>
													<td rowspan="2" width=20%>Vorgehen</td>
													<td width=42%><b>Lokal:</b><br>$$ \delta A \approx f(x) \cdot \delta x$$</td>
													<td rowspan="2"><img src="bilder/integral/acr/lokal.png" style="max-height:35%; max-width:50%">
													</td>
												</tr>
												<tr>
													<td><b>Global:</b><br> $$ A = \int_{x_0}^{x_E}f(x)\; dx = F(x_E)-F(x_0) $$</td>
												</tr>
											</table>
										</div>
									</div>
									


							</div>
						</div>
						<li><b>Verallgemeinerte Exponentialfunktionen</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">

								<table class="table">
									<tr>
										<td width=20%>Schritt 1</td>
										<td width=42%>
											<img src="bilder/funktionen/exp_func/exp_1.png" style="max-height:50%; max-width:100%">
										</td>
										<td>Informationen aus Text in Tabelle übertragen.</td>
									</tr>
									<tr>
										<td>Schritt 2</td>
										<td>$$ N(13h)=500 \cdot 2^{\large\frac{13h-7h}{3h}} = 500 \cdot 2^{2} = 2000$$</td>
										<td></td>
									</tr>
									<tr>
										<td>Schritt 3</td>
										<td>$$ N(t)=500 \cdot 2^{\large\frac{t-7h}{3h}} = N_{0} \cdot a^{\large\frac{t-t_{0}}{\Sigma}} $$</td>
										<td><b>t<sub>0</sub></b> = Referenz-Stelle<br>
											<b>N<sub>0</sub></b> = Referenz-Wert<br>
											<b>a</b> = Basis(Faktor)<br>
											<b>Σ</b> = Schritt-Weite<br>
										</td>
									</tr>
									<tr>
										<td>Umkehrfunktion der Exponentialfunktion</td>
										<td>$$f^{-1}(y) = t_0 + \Sigma + \log_a\frac{y}{y_0}$$</td>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
						<li><b>Beispiel einer Bestimmung der Extremalstellen</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">


								Ausgangslage ist folgende Funktion: $$f(x) = 2x^3 + 3x^2 - 12x + 1$$
								<ol style="list-style-type:none">
									<li><b>1. Ableitung formen:</b>
										<li>$$f(x) = 2x^3 + 3x^2 - 12x + 1$$</li>
										<li>$$f'(x) = 6x^2 + 6x -12$$</li>
										<li>$$f''(x) = 12x + 6$$</li>
										<li>$$f'''(x) = 12$$</li>
									</li>
									<li><b>Erste Ableitung = 0 setzen</b>
										<li>$$6x^2 + 6x -12 = 0$$</li>
										<li>$$ x_1 = -2$$ </li>
										<li>$$x_2 = 1$$</li>
									</li>
									<li><b>Werte einsetzen und berechnen</b>
										<br>
										<li><b>In die Funktion f(x) einsetzten:</b>
										</li>

										<li>$$f(x_1) = 2(-2)^3 + 3(-2)^2 - 12(-2) + 1$$</li>
										<li>$$f(x_1) = 21$$</li>
										<li>$$f(x_2) = 2(1)^3 + 3(1)^2 - 12(1) + 1$$</li>
										<li>$$f(x_2) = -6$$</li>
										<li><b>In die Zweite Ableitung einsetzten:</b>
										</li>
										<li>$$f''(x_1) = 12(-2) + 6$$</li>
										<li>$$f''(x_1) = -18$$</li>
										<li>$$f''(x_2) = 12(1) + 6$$</li>
										<li>$$f''(x_1) = 18$$</li>
									</li>
								</ol>
								<b>Anschliessend das ganze als Tabelle aufführen:</b>
								<table class="table">
									<tr>
										<td><b>k</b>
										</td>
										<td><b>x<sub>k</sub></b>
										</td>
										<td><b>f(x<sub>k</sub>)</b>
										</td>
										<td><b>f'(x<sub>k</sub>)</b>
										</td>
										<td><b>f''(x<sub>k</sub>)</b>
										</td>
										<td><b>Typ</b>
										</td>
										<tr>
											<td>1</td>
											<td>-2</td>
											<td>21</td>
											<td>0</td>
											<td>-18</td>
											<td>lokales Maximum</td>
										</tr>
										<tr>
											<td>2</td>
											<td>1</td>
											<td>-6</td>
											<td>0</td>
											<td>18</td>
											<td>lokales Minimum</td>
										</tr>
								</table>
							</div>
						</div>
						<li><b>Funktionsmodifikationen und Verschiebungen</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<ol style="list-style-type:none">
									<li><b>Modifikationen</b>
									</li>
									<li>$$\text{Sei} \quad g:A\rightarrow \mathbb{R}$ mit $A \subseteq \mathbb{R}$$ </li><br>

									<li>$$\text{nach rechts um} \delta x : f(X) = g(x -\delta x)$$</li>
									<li>$$\text{nach links um} \delta x : f(X) = g(x +\delta x)$$</li>
									<li>$$\text{nach oben um} \delta x : f(X) = g(x) + \delta y$$</li>
									<li>$$\text{nach unten um} \delta x : f(X) = g(x) - \delta y$$</li>

									<li><b>Skalierungen</b>
									</li>
									<li>$$\text{Sei} \quad g:A\rightarrow \mathbb{R}$ mit $A \subseteq \mathbb{R}$$ </li><br>
									<li>$$\text{entlang der X - Achse um} \quad \delta : f(X) = g(\frac{x}{\delta} )$$</li>
									<li>$$\text{entlang der Y - Achse um} \quad \delta : f(X) = g(x) \cdot \delta$$</li>

									<li><b>Spiegelungen</b>
									</li>
									<li>$$\text{Sei} \quad g:A\rightarrow \mathbb{R}$ mit $A \subseteq \mathbb{R}$$ </li><br>
									<li>$$\text{an der Y - Achse: } \quad f(X) = g(-x) \Leftrightarrow$$</li>
									<li>$$\text{an der X - Achse: } \quad f(X) = - g(x)$$</li>
								</ol>
							</div>
						</div>
						<li><b>Surjektive, injektive und bijektive</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">

								<table class="table">
									<thead>
										<tr>
											<th scope="col" width=20%>Bezeichnung</th>
											<th scope="col" width=42%>Formel</th>
											<th scope="col">Defintion</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Funktion</td>
											<td>$$ f: D \longrightarrow Z, \; x \mapsto f(x) := x^{2}$$</td>
											<td><b>A</b> = Definitionsmenge<br><b>B</b> = Zielmenge</td>
										</tr>
										<td>Surjektivität</td>
										<td>Jedes Element der Zielmenge wird mind. 1x erreicht werden</td>
										<td></td>
										</tr>
										<tr>
											<td>Injektivität</td>
											<td>Jedes Element der Zielmenge wird maximal 1x erreicht</td>
											<td></td>
										</tr>
										<tr>
											<td>Bijektiv (Eineindeutig)</td>
											<td>f ist injektiv und surjektiv --> f umkehrbar</td>
											<td></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<li><b>Betrag und Vorzeichen</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<ol style="list-style-type:none">
									<li>$$\mid-2\mid = 2 \qquad ; sgn(-2) = - 1 $$</li>
									<li>$$ \mid 2 \mid = 2 ;\qquad sgn(2) = 1 $$</li>
									<li>$$ \mid 0 \mid = 0 ;\qquad sgn(0) = 0 $$</li>
									<li><b>Für alle x von R gilt:</b>
									</li>
									<li>$$x = sgn(x) \cdot \mid x \mid $$</li>
									<li> $$ \mid x \mid = sgn(x) \cdot x $$ </li>
									<li> $$ x \neq 0 \rightarrow sgn(x) = \frac{1}{sgn(x)}$$</li>

									<table class="table">
										<tr>
											<td>Signum(Vorzeichen</td>
											<td>$$ \operatorname{sgn}(x)\left\{\begin{matrix} -1 & \text{falls}& x
												<0\\ 0& \text{falls}& x=0\\ +1& \text{falls}& x>0 \end{matrix}\right. $$
											</td>
											<td><img src="bilder/funktionen/sgn/sgn.png" style="max-height:100%; max-width:100%">
											</td>
										</tr>
									</table>
							</div>
						</div>
						<li><b>Bild/Urbild</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<table class="table">
									<tr>
										<td width=20%>Bild</td>
										<td width=42%>$$ f(A)= \left \{ f(x) \:| \: x\in A \right \} $$</td>
										<td><img src="bilder/funktionen/surjektiv/bild.png" style="max-height:50%; max-width:100%">
										</td>
									</tr>
									<tr>
										<td>Urbild</td>
										<td>$$ f^{-1}(N)= \left \{ x \in A \: | \: f(x) \in N \right \} $$</td>
										<td><img src="bilder/funktionen/surjektiv/urbild.png" style="max-height:50%; max-width:100%">
										</td>
									</tr>
								</table>

							</div>
						</div>
						<li><b>Parität</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<ol style="list-style-type:none">
									<li><b>negative Parität</b>
									</li>
									<li>$$f(-x) = - f(x) \Leftrightarrow$$</li>
									<li><b>positive Parität</b>
									</li>
									<li>$$f(-x) = f(x) $$</li>

									<li><b>Wichtige Paritäten:</b>
									</li>
									<li>cos(x), cosh(x) --> positive Parität</li>
									<li>sin(x), sinh(x) --> negative Parität</li>
									<li>tan(x), tanh(x) --> negative Parität</li>
									<li>a^x hat keine Parität</li>
								</ol>
							</div>
						</div>
						<li><b>Lokale Extrema</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<table class="table">
									<thead>
										<tr id="add_und_sub">
											<th scope="col" width=20%>Bezeichnung</th>
											<th scope="col" width=42%>Formel</th>
											<th scope="col">Grafik / Text</th>
										</tr>
									</thead>
									<tr>
										<td>Kritische Stellen</td>
										<td>$$ f'(x)=0 $$</td>
										<td>heissen <b>kritische Stellen</b> von f und die erste Ableitung ist die Steigung der Funktion</td>
									</tr>
									<tr>
										<td rowspan="3" width=20%>Einfache kriterien<br>Falls:</td>
										<td width=42%>$$ f''(x_{k})
											< 0 \Rightarrow f \text{ hat Hochpunkt bei }x_{k} $$</td>
												<td rowspan="3"><img src="bilder/kurvendiskussion/lokale_extrema_2.png" style="max-height:50%; max-width:85%">
												</td>
									</tr>
									<tr>
										<td>$$ f''(x_{k})> 0 f\Rightarrow f \text{ hat Tiefpunkt bei }x_{k} $$</td>
									</tr>
									<tr>
										<td>$$ f''(x_{k})= 0 \text{ und } f'''(x_{k})\not = 0\Rightarrow f \text{ hat Sattelpunkt bei }x_{k} $$</td>
									</tr>
								</table>

								<table class="table">
									<tr>
										<td>Erweiterte kriterien</td>
										<td>$$ f'(x_{k})= f''(x_{k}) = ... = f^{(m-1)}(x_{k}) = 0 \\ f^{(m)} \not = 0 $$</td>
										<td><b>m</b> ist die Anzahl, die man Ableitet, bis der Wert ≠ 0 ist.</td>
									</tr>
									<tr>
										<td rowspan="3" width=20%>Falls:</td>
										<td width=42%>$$ \text{m gerade und }f^{(m)}(x_{k})
											< 0 \Rightarrow f \text{ hat Hochpunkt bei }x_{k} $$</td>
												<td>Anhand dieser Zahl kann man sagen, was für ein Punkt das ist.</td>
									</tr>
									<tr>
										<td>$$ \text{m gerade und }f^{(m)}(x_{k})> 0 \Rightarrow f \text{ hat Tiefpunkt bei }x_{k} $$</td>
										<td></td>
									</tr>
									<tr>
										<td>$$ \text{m ungerade} \Rightarrow f \text{ hat Sattelpunkt bei }x_{k} $$</td>
										<td></td>
									</tr>
								</table>
							</div>
						</div>
						<li><b>Globale Extrema</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">

								<table class="table">
									<tr>
										<td rowspan="2" width=20%>Geschlossene Intervalle</td>
										<td width=42%>$$ 0 = f'(x) \Rightarrow x_{1},...,x_{2} \Rightarrow f(x_{1}), ..., f(x_{n})$$</td>
										<td>Kritische Stellen in ]x<sub>0</sub>,x<sub>E</sub>[</td>
									</tr>
									<tr>
										<td>$$ x_{0},x_{E} \Rightarrow f(x_{0}), f(x_{E}) $$</td>
										<td>Randstellen</td>
									</tr>
									<tr>
										<td width=20%>Offene Intervalle</td>
										<td width=42%>Im vergleich zu den geschlossenen Intervallen gibt es <b>nie</b> ein globales Minimum und Maximum.</td>
										<td>Bei den Geschlossenen Intervallen muss es ein globales Minimum und ein globales Maximum haben.</td>
									</tr>
								</table>
							</div>
						</div>
						<li><b>Wendepunkte</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<h3>Wendepunkte sind die Punkte mit der höchsten Steigung in einer Funktion. <br>
Um die Punkte zu finden muss man die <b>f''(x) = 0</b> setzten </h3>
								<table class="table">
									<tr>
										<td>Wendepunkt nach rechts</td>
										<td>Hochpunkt von f'</td>
									</tr>
									<tr>
										<td>Wendepunkt nach links</td>
										<td>Tiefpunkt von f'</td>
									</tr>
									<td>Die Wendepunkte von f liegen somit an:</td>
									<td>Kritischen Stellen von f' <br> Flachstellen von f</td>
								</table>
							</div>
						</div>
						<li><b>Krümmung</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<table class="table">
									<tr>
										<td width=20%>Analytische Krümmung</td>
										<td width=42%>$$ K_{A}(x):=f''(x) $$</td>
										<td>Eine Parabel (Funktion zweiter Ordnung) hat konstante analytische Krümmung!(ist jedoch Geometrischer Bullshit)</td>
									</tr>
									<tr>
										<td width=20%>Geometrische Krümmung</td>
										<td width=42%>$$ K_{G}(x):=\frac{1}{\sqrt{(1+(f'(x)^2)^3)}} \cdot K_{A}(x) = \frac{1}{r} \quad \text{eines Kreises} $$ </td>
										<td>Gerade ist unabhängig von der Wahl des Krümmungsbegriffs.</td>
									</tr>
									<tr>
										<td width=20%>Spezialfall</td>
										<td width=42%> $$\text{Falls} \quad 0 = f''(x) = K_A(x)$$</td>
										<td>Das sind Flachstellen von f, gleichzeitig sind das kritische Stellen.</td>
									</tr>
								</table>
								<h3>Vorzeichenkonvention für Kurven anhand der Krümmung</h3>
								<table class="table">
									<tr>
										<td>$$\text{Falls} \quad sgn(K_A(x)) = sgn(K_g(x)) \quad = \quad \text{negativ}$$</td>
										<td>Parabel nach unten zeigend</td>
										<td>$$\text{Grundsätzlich, wenn} \quad y = -x^2$$</td>
									</tr>
									<tr>
										<td>$$\text{Falls} \quad sgn(K_A(x)) = sgn(K_g(x)) \quad = \quad \text{positiv}$$</td>
										<td>Parabel nach oben zeigend</td>
										<td>$$\text{Grundsätzlich, wenn} \quad y = +x^2$$</td>
									</tr>
									<tr>
										<td>$$\text{Falls} \quad sgn(K_A(x)) = sgn(K_g(x)) \quad = \quad 0$$</td>
										<td>Lineare Funktion</td>

									</tr>

								</table>


							</div>
						</div>
						<li><b>Tools</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">

								<table class="table">
									<tr>
										<td width=20%>Mathematica</td>
										<td width=42%></td>
										<td></td>
									</tr>
									<tr>
										<td>Wolframalpha</td>
										<td>
											<figure class="highlight"><pre><code class="language-html" data-lang="html">extrema -(x^3)/80.0+20*x </code></pre>
											</figure>
										</td>
										<td>Gibt die lokalen so wie die globalen extremstellen an. Wird auch angezeigt, wenn nur die Funktion eingegeben wird. </td>
									</tr>
									<tr>
										<td>Matlab</td>
										<td></td>
										<td></td>
									</tr>
								</table>
							</div>
						</div>

					</div>
				</div>
				<br>
				<h2>Folgen und Reihen</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<br>
						<h3>Folgen, Konvergenz Divergenz und Monotmomie</h3>
						<ol style="list-style-type:none">
							<li><b>Arimetrische Folgen</b>
							</li>
							<li>$$\text{Definition:} \qquad a_0=... ; a_{k+1} = a_k +c \rightarrow \text{konstant} \qquad \text{Entspricht einer linearen Funktion}$$</li>
							<li><b>Geometrische Folgen</b>
							</li>
							<li>$$\text{Definition:} \qquad a_0=... ; a_{k+1} = a_k \cdot c \rightarrow \text{konstant} \qquad \text{Entspricht einer exponentiellen Funktion}$$</li>

							<li><b>Monotone Folgen</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<ol style="list-style-type:none">
										<li><b>Man setzte ein beliebiges Element ein und vergleicht das Folgeglied dazu.</b>
										</li><br>
										<li>monton steigend: $$\qquad a_{n+1}\geq a_n$$</li>
										<li>streng monoton steigend: $$\qquad a_{n+1} > a_n$$</li>
										<li>monton fallend: $$\qquad a_{n+1}\leq a_n$$ </li>
										<li>streng monoton fallend: $$\qquad a_{n+1}
											< a_n$$</li>
												<br>
								</div>
							</div>
							<li><b>Beschränktheit von  Folgen</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<ol style="list-style-type:none">
										<li><b>Eine Funktion kann auch in beide Richtungen beschränkt sein. <br>
		Man sucht nach der grössten unteren Schrank oder kleinsten oberen Schranke</b>
										</li>
										<li>nach oben beschränktränkt $$\qquad a_n \leqq a_o$$</li>
										<li>nach unten beschränkt: $$\qquad a_n \geqq a_u$$</li>
										<li>beschränkt: $$\qquad a_n \epsilon [a_o,a_u]$$</li>
										<br>
								</div>
							</div>
							<li><b>Konvergenz von Folgen</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<ol style="list-style-type:none">
										<li><b>Grundsätzlich ist Konvergenz die Grenzwert findung einer Funktion <br>
		Eine (streng) monotone beschränkte Folge ist immer konvergent. <br> $$a:\ $(a_n) \overset{n \rightarrow \infty}{\longrightarrow} a$$</b>
										</li>
										<li>$$a_n = \frac{1}{n}\overset{n \rightarrow \infty}{\longrightarrow} 0 \quad \text{konvergent}$$ </li>
										<li>$$a_n = 3n \overset{n \rightarrow \infty}{\longrightarrow} \infty \quad \text{divergent} $$ </li>
										<li>$$a_n = (-1)^n \overset{n \rightarrow \infty}{\longrightarrow} ? \quad \text{divergent}$$</li>
										<li>$$a_n = \frac{5n}{n^2+1} \overset{n \rightarrow \infty}{\longrightarrow} 0 \quad \text{konvergent}$$ </li>
								</div>
							</div>
							<br>
							<h2>Reihen, Konvergenz Divergenz und Monotmomie</h2>

							<ol style="list-style-type:none">
								<li><b>Arimetrische Summenformel</b>
								</li>
								<li>$$\sum\limits_{k = 1}^{n}k = \frac{n (n+1)}{2}$$</li>
								<li><b>Geometrische Reihen</b>
								</li>
								<li>$$G_{(m;n)} (x) = \sum\limits_{k = m}^{n}x^k = \frac{x^m-x^{n+1}}{1-x}$$</li>
								<li>$$G_{(3+m;3+n)} (x) =x^3 \cdot G_{(m;n)} (x)$$</li>
								<li><b>Regeln dazu</b>
								</li>
								<li>$$\sum\limits_{k = a}^{b}C \cdot f(k) = C \cdot \sum\limits_{k = a}^{b} f(k) $$</li>
								<li>$$\sum\limits_{k = a}^{b} f(k) =\sum\limits_{k = a+c}^{b+c} f(k-c) $$</li>
								<li>$$\sum\limits_{k = a}^{b} f(k) \quad \text{hat} \quad (b-a+1) \text{Terme}$$</li>
								<br>
								<h2>Konvergenzregeln von Reihen</h2>
								<div class="pre-spoiler">
									<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
									<div class="spoiler" style="display: none;">
										<li>$$\sum_{k=1}^\infty \frac{1}{k} = 1 + \frac{1}{2} + \frac{1}{3} + \frac{1}{4} .... \rightarrow \infty \text{divergent}$$</li>
										<li>$$\sum_{k=1}^\infty \frac{1}{k^2} = 1 + \frac{1}{4} + \frac{1}{9} + \frac{1}{16} = \frac{\pi^2}{6} \rightarrow \text{konvergent}$$</li>
									</div>
								</div>

					</div>
				</div>
				<br>
				<h2>Definition der Winkelfunktionen</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<table class="table">
							<thead>
								<tr id="add_und_sub">
									<th scope="col" width=20%>Bezeichnung</th>
									<th scope="col" width=42%>Formel</th>
									<th scope="col">Grafik</th>
								</tr>
							</thead>
							<tbody>
								<tr id="mult_mit_skalar">
									<td>Sinus von α</td>
									<td>$$ \sin(\alpha) = \frac{\text{Gegenkathete}}{\text{Hypotenuse}} = \frac{{\color{#0C9D51} g}}{{\color{#DD262C} h}} $$</td>
									<td rowspan="3"><img src="bilder/trigonometrie/winkelfunktionen/rechtwinklige_dreiecke.png" style="max-height:30%; max-width:50%">
									</td>
								</tr>
								<tr id="laenge_eines_vektors">
									<td>Kosinus von α</td>
									<td>$$ \cos(\alpha) = \frac{\text{Ankathete}}{\text{Hypotenuse}} = \frac{{\color{#0FA9E3} a}}{{\color{#DD262C} h}}$$</td>
								</tr>
								<tr>
									<td>Tangens von α</td>
									<td>$$ \tan(\alpha) = \frac{\text{Gegenkathete} }{\text{Ankathete}} = \frac{{\color{#0C9D51} g}}{{\color{#0FA9E3} a}} $$</td>
								</tr>
								<tr>
									<td>Kotangens von α</td>
									<td>$$ \cot(\alpha) = \frac{\text{Ankathete}}{\text{Gegenkathete}} = \frac{{\color{#0FA9E3} a}}{{\color{#0C9D51} g}} $$</td>
									<td>$$ \cot(\alpha) = \frac{1}{\tan(\alpha)} $$</td>
								</tr>
								<tr id="mult_mit_skalar">
									<td>Winkelfunktionen am Einheitskreis</td>
									<td>$$ {\color{#DD262C}\tan(\alpha)} = \frac{{\color{#0C9D51}\sin(\alpha)}}{{\color{#0FA9E3}\cos(\alpha)}} $$</td>
									<td>α ≠ 90°</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<br>
				<h2>Oft gebrauchte Winkel</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<table class="table">
							<tbody>
								<tr id="mult_mit_skalar">
									<td width=20%>Spezielle Winkel</td>
									<td width=42%>
										<table class="table table-borderless">
											<thead vertical-align="right">
												<tr align="center">
													<th align="left">Grad</th>
													<th>0</th>
													<th>30</th>
													<th>45°</th>
													<th>60°</th>
													<th>90°</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>$$ {\color{#0C9D51}\sin(\alpha)} $$</td>
													<td>$$ 0 $$</td>
													<td>$$ \frac{1}{2} $$</td>
													<td>$$ \frac{\sqrt{2}}{2} $$</td>
													<td>$$ \frac{\sqrt{3}}{2} $$</td>
													<td>$$ 1 $$</td>
												</tr>
												<tr>
													<td>$$ {\color{#0FA9E3}\cos(\alpha)} $$</td>
													<td>$$ 0 $$</td>
													<td>$$ \frac{1}{2} $$</td>
													<td>$$ \frac{\sqrt{2}}{2} $$</td>
													<td>$$ \frac{\sqrt{3}}{2} $$</td>
													<td>$$ 1 $$</td>
												</tr>
												<tr>
													<td>$$ {\color{#DD262C}\tan(\alpha)} $$</td>
													<td>$$ 0 $$</td>
													<td>$$ \frac{1}{2} $$</td>
													<td>$$ \frac{\sqrt{2}}{2} $$</td>
													<td>$$ \frac{\sqrt{3}}{2} $$</td>
													<td>$$ 1 $$</td>
												</tr>
											</tbody>
										</table>
									</td>
									<td><img src="bilder/trigonometrie/winkelfunktionen/spezielle_dreiecke.png" style="max-height:38%; max-width:50%">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<br>
				<h2>Allgemeiner Sinus/Kosinussatz</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<table class="table">
							<tbody>
								<tr id="mult_mit_skalar">
									<td width=20%>Sinussatz</td>
									<td width=42%>$$ \frac{{\color{#0C9D51} a}}{\sin({\color{#0C9D51} \alpha})} = \frac{{\color{#0FA9E3} b}}{\sin({\color{#0FA9E3} \beta})} = \frac{{\color{#DD262C} c}}{\sin({\color{#DD262C} \gamma })} = 2r $$</td>
									<td><img src="bilder/trigonometrie/berechnung/sinussatz.png" style="max-height:30%; max-width:40%">
									</td>
								</tr>
								<tr id="laenge_eines_vektors">
									<td>Kosinussatz</td>
									<td>$$ {\color{#0C9D51} a^{2}} = {\color{#0FA9E3} b^{2}} + {\color{#0FA9E3} c^{2}} - 2bc\cos({\color{#0C9D51} \alpha}) $$</td>
									<td><img src="bilder/trigonometrie/berechnung/cosinussatz.png" style="max-height:30%; max-width:40%">
									</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
				<br>
				<h2>Additionstherme</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">

						<ol style="list-style-type:none">
							<li><b>Trigonometrische Funktionen</b>
								<li>$$\sin (-x) = -\sin (x) \quad \quad \cos (-x) = \cos (x)$$</li>
								<li>$$\sin^2 x + \cos^2 x = 1 \quad \quad \tan x = \frac{\sin x}{\cos x}$$</li>
								<li>$$e^{ix}=\cos(x)+i\sin(x) \quad \quad e^{-ix}=\cos(x)-i\sin(x)$$</li>
								<li>$$\sin(x)=\frac{1}{2i}(e^{ix}-e^{-ix}) \quad \quad \cos(x)=\frac{1}{2}(e^{ix}+e^{-ix})$$</li>
								<li>$$\sinh(x)=\frac{1}{2}(-e^{-x}+e^x) \quad \quad \cosh(x)=\frac{1}{2}(e^{-x}+e^x)$$</li>
							</li>
							<li><b>Additionstheoreme</b>
								<li>$$\cos (x + y) = \cos x \cdot \cos y - \sin x \cdot \sin y$$</li>
								<li>$$\cos (x - \frac{\pi}{2}) = \sin x \quad \quad \sin (x + \frac{\pi}{2}) = \cos x$$</li>
								<li>$$\sin (x + y) = \sin x \cdot \cos y + \cos x \cdot \sin y $$</li>
								<li>$$\sin 2x = 2 \sin x \cdot \cos x $$</li>
								<li>$$ \cos 2x = \cos^2 x - \sin^2 x = 2\cos^2 (x - 1)$$</li>
							</li>
					</div>
				</div>
			</main>
		</div>
	</div>
	<?php include ('includes/footer.php'); ?>

</body>
</html>