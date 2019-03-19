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

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
            <li class="toc-entry toc-h2"><a href="#sur">Surjektive, injektive und bijektive</a></li>
            <li class="toc-entry toc-h3"><a href="#begriffe">Bild / Urbild</a></li>
			<li class="toc-entry toc-h3"><a href="#begriffe">Vorzeichen Spezialfälle</a></li>
            <li class="toc-entry toc-h3"><a href="#exp_func">Verallgemeinerte Exponentialfunktionen</a></li>
            <li class="toc-entry toc-h3"><a href="#paritaet">Parität</a></li>
            <li class="toc-entry toc-h3"><a href="#lokale_extrema">Lokale Extrema</a></li>
            <li class="toc-entry toc-h3"><a href="#globale_extrema">Globale Extrema</a></li>
            <li class="toc-entry toc-h3"><a href="#wendepunkte">Wendepunkte</a></li>
            <li class="toc-entry toc-h3"><a href="#kruemmung">Krümmung</a></li>
            <li class="toc-entry toc-h3"><a href="#tools">Tools</a></li>
            </ul>
          </div>
        

<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title">Funktionen</h1>

          <p class="bd-lead">Eine Funktion f ist eine Abbildung, die jedem Element x einer Definitionsmenge D genau ein Element y einer Zielmenge Z zuordnet.</p>

          

<br><h2 id="sur">Surjektive, injektive und bijektive</h2>
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
                    <td >Funktion</td>
                    <td>$$ f: D \longrightarrow Z, \; x \mapsto f(x) := x^{2}$$</td>
                    <td><b>A</b> = Definitionsmenge<br><b>B</b> = Zielmenge</td>
                  </tr>
					                    <td >Surjektivität</td>
                    <td>Jedes Element der Zielmenge wird mind. 1x erreicht werden</td>
                    <td></td>
                  </tr>
					<tr>
                    <td >Injektivität</td>
                    <td>Jedes Element der Zielmenge wird maximal 1x erreicht</td>
                    <td></td>
                  </tr>
			<tr>
                    <td >Bijektiv (Eineindeutig)</td>
                    <td>f ist injektiv und surjektiv --> f umkehrbar</td>
                    <td></td>
                  </tr>
                    </tbody>
                </table>
			</div>
		</div>
<br><h2 id="bild">Bild/Urbild</h2>
<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
              <table class="table">
                <tr>
                  <td width=20%>Bild</td>
                  <td width=42%>$$ f(A)= \left \{ f(x) \:| \: x\in A \right \} $$</td>
                  <td><img src="bilder/funktionen/surjektiv/bild.png" style="max-height:50%; max-width:100%"></td>
                </tr>
                <tr>
                  <td >Urbild</td>
                  <td>$$ f^{-1}(N)= \left \{ x \in A \: | \: f(x) \in  N \right \} $$</td>
                  <td><img src="bilder/funktionen/surjektiv/urbild.png" style="max-height:50%; max-width:100%"></td>
                </tr>
				  </table>
				  
				  </div> </div>	
<br><h2 id="begriffe">Vorzeichen Spezialfälle</h2>
<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
		<table class="table">
                <tr>
                  <td >Signum(Vorzeichen</td>
                  <td>$$ \operatorname{sgn}(x)\left\{\begin{matrix}
                        -1 &  \text{falls}& x<0\\ 
                         0&  \text{falls}& x=0\\ 
                         +1&  \text{falls}& x>0
                        \end{matrix}\right. $$
                  </td>
                  <td><img src="bilder/funktionen/sgn/sgn.png" style="max-height:100%; max-width:100%"></td>
                </tr>
              </table>
	</div> </div>
<br><h2 id="exp_func">Verallgemeinerte Exponentialfunktionen</h2>
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
                    <td >Schritt 3</td>
                    <td>$$ N(t)=500 \cdot 2^{\large\frac{t-7h}{3h}} = N_{0} \cdot a^{\large\frac{t-t_{0}}{\Sigma}} $$</td>
                    <td><b>t<sub>0</sub></b> = Referenz-Stelle<br>
                      <b>N<sub>0</sub></b> = Referenz-Wert<br>
                      <b>a</b> = Basis(Faktor)<br>
                      <b>Σ</b> = Schritt-Weite<br>
                    </td>
                  </tr>
              </table>
			</div>
		</div>
<br><h2 id="paritaet">Parität</h2>
<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">

              <table class="table">
                  <tr>
                    <td width=20%>Positive Parität</td>
                    <td width=42%>$$ f(-x) = f(x) $$</td>
                    <td rowspan="2"><img src="bilder/funktionen/par/par.png" style="max-height:100%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>Negative Parität</td>
                    <td>$$ f(-x) = -f(x) $$</td>
                  </tr>
              </table>
			</div>
		</div>
<br><h2 id="lokale_extrema">Lokale Extrema</h2>
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
                <td width=42%>$$ f''(x_{k})< 0 \Rightarrow f \text{ hat Hochpunkt bei }x_{k} $$</td>
                <td rowspan="3"><img src="bilder/kurvendiskussion/lokale_extrema_2.png"style="max-height:50%; max-width:85%"></td>
              </tr>
              <tr><td>$$ f''(x_{k})> 0 f\Rightarrow f \text{ hat Tiefpunkt bei }x_{k} $$</td></tr>
              <tr><td>$$ f''(x_{k})= 0 \text{ und } f'''(x_{k})\not = 0\Rightarrow f \text{ hat Sattelpunkt bei }x_{k} $$</td></tr>
              </table>

              <table class="table">
              <tr>
                <td>Erweiterte kriterien</td>
                <td>$$ f'(x_{k})= f''(x_{k}) = ... = f^{(m-1)}(x_{k}) = 0 \\ f^{(m)} \not = 0 $$</td>
                <td><b>m</b> ist die Anzahl, die man Ableitet, bis der Wert ≠ 0 ist.</td>
              </tr>
              <tr>
                <td rowspan="3" width=20%>Falls:</td>
                <td width=42%>$$ \text{m gerade und }f^{(m)}(x_{k})< 0 \Rightarrow f \text{ hat Hochpunkt bei }x_{k} $$</td>
                <td>Anhand dieser Zahl kann man sagen, was für ein Punkt das ist.</td>
              </tr>
              <tr><td>$$ \text{m gerade und }f^{(m)}(x_{k})> 0 \Rightarrow f \text{ hat Tiefpunkt bei }x_{k} $$</td><td></td></tr>
              <tr><td>$$ \text{m ungerade} \Rightarrow f \text{ hat Sattelpunkt bei }x_{k} $$</td><td></td></tr>
            </table>
	</div>
		</div>
<br><h2 id="kurven">Beispiel einer Bestimmung der Extremalstellen</h2>
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
         <li><b>In die Funktion f(x) einsetzten:</b></li>

			  <li>$$f(x_1) = 2(-2)^3 + 3(-2)^2 - 12(-2) + 1$$</li>
			  <li>$$f(x_1) = 21$$</li>
			  <li>$$f(x_2) = 2(1)^3 + 3(1)^2 - 12(1) + 1$$</li>
			  <li>$$f(x_2) = -6$$</li>
         <li><b>In die Zweite Ableitung einsetzten:</b></li>
			  <li>$$f''(x_1) = 12(-2) + 6$$</li>
			  <li>$$f''(x_1) = -18$$</li>
			  <li>$$f''(x_2) = 12(1) + 6$$</li>
			  <li>$$f''(x_1) = 18$$</li>
   </li>
</ol>
		<b>Anschliessend das ganze als Tabelle aufführen:</b>
		<table class="table">
              <tr>
                <td><b>k</b></td>
                <td><b>x<sub>k</sub></b></td>
                <td><b>f(x<sub>k</sub>)</b></td>
				<td><b>f'(x<sub>k</sub>)</b></td>
				<td><b>f''(x<sub>k</sub>)</b></td>
                <td><b>Typ</b></td>
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
<br><h2 id="globale_extrema">Globale Extrema</h2>
<div class="pre-spoiler">
<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
<div class="spoiler" style="display: none;">
	
	<table class="table">
              <tr>
                <td rowspan="2" width=20%>Geschlossene Intervalle</td>
                <td width=42%>$$ 0 = f'(x)  \Rightarrow x_{1},...,x_{2} \Rightarrow f(x_{1}), ..., f(x_{n})$$</td>
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
<br><h2 id="wendepunkte">Wendepunkte</h2>
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
<br><h2 id="kruemmung">Krümmung</h2>
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
                <td>$$\text{Falls} \quad sgn(K_A(x)) = sgn(K_g(x)) \quad = \quad  \text{negativ}$$</td>
				  <td>Parabel nach unten zeigend</td>
				  <td>$$\text{Grundsätzlich, wenn} \quad y = -x^2$$</td>
              </tr>
			<tr>
                <td>$$\text{Falls} \quad sgn(K_A(x)) = sgn(K_g(x)) \quad = \quad  \text{positiv}$$</td>
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
<br><h2 id="tools">Tools</h2>
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
                    <td><figure class="highlight"><pre><code class="language-html" data-lang="html">extrema -(x^3)/80.0+20*x </code></pre></figure></td>
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
          

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>