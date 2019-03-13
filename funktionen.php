<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "mathe";
    ?>
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
            <li class="toc-entry toc-h3"><a href="#begriffe">Begriffe</a></li>
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

          <p class="bd-lead">In der Mathematik ist eine Funktion oder Abbildung eine Beziehung zwischen zwei Mengen, die jedem Element der einen Menge, unabhängige Variable, genau ein Element der anderen Menge zugeordnet.</p>

          

          <br><br><h5 id="sur">Surjektive, injektive und bijektive</h5>

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
                    <td >Funktion</td>
                    <td>$$ f: A \longrightarrow B, \; x \mapsto f(x) := x^{2}$$</td>
                    <td><b>A</b> = Definitionsmenge<br><b>B</b> = Zielmenge</td>
                  </tr>
                  <tr>
                    <td>Abzählbar</td>
                    <td><p>
                      Eine Menge ist <b>abzählbar</b>, wenn sie die gleiche Mächtigkeit wie die natürlichen Zahlen hat.  Dies bedeutet, dass es eine Bijektion zwischen A und der Menge der natürlichen Zahlen gibt.<br>
                      Die Menge der Primzahlen ist abzählbar unendlich, da sie eine Teilmenge der natürlichen Zahlen und nach dem Satz von Euklid auch unendlich ist.
                    </p></td>
                    <td><img src="bilder/funktionen/abzaehlbar/abzaehlbar.png" style="max-height:60%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td >Argument</td>
                    <td>$$ f(\textbf{x} )$$</td>
                    <td>Das Argument einer Funktion ist die unabhängige Variable, also z. B.  das „x“ im Funktionsterm f(x) = 3x + 2.</td>
                  </tr>
                </tbody>
              </table>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" width=20%></th>
                    <th scope="col" width=42%>injektiv</th>
                    <th scope="col">nicht injektiv</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td rowspan="3"><b>Surjektiv</b></td>
                    <td><img src="bilder/funktionen/surjektiv/11.png" style="max-height:50%; max-width:100%"></td>
                    <td><img src="bilder/funktionen/surjektiv/12.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>$$ A \coloneqq \mathbb{R}_{0}^{+};\: B \coloneqq \mathbb{R}_{0}^{+}  $$</td>
                    <td>$$ A \coloneqq \mathbb{R};\: B \coloneqq \mathbb{R}_{0}^{+}  $$</td>
                  </tr>
                  <tr>
                    <td>Diese Form nennt man <b>Bijektiv</b>.</td>
                    <td>Jedes Element von B <b>muss</b> erreicht werden.</td>
                  </tr>
                  <tr>
                    <td rowspan="3"><b>nicht Surjektiv</b></td>
                    <td><img src="bilder/funktionen/surjektiv/21.png" style="max-height:50%; max-width:100%"></td>
                    <td><img src="bilder/funktionen/surjektiv/22.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>$$ A \coloneqq \mathbb{R}_{0}^{+};\: B \coloneqq \mathbb{R}  $$</td>
                    <td>$$ A \coloneqq \mathbb{R};\: B \coloneqq \mathbb{R}  $$</td>
                  </tr>
                  <tr>
                    <td>Jedes Element von B wird <b>höchsten</b> einmal erreicht</td>
                    <td></td>
                  </tr>
                    </tbody>
                </table>
            <br><br><h5 id="begriffe">Begriffe</h5>

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
                <tr>
                  <td >Signum</td>
                  <td>$$ \operatorname{sgn}(x)\left\{\begin{matrix}
                        -1 &  \text{falls}& x<0\\ 
                         0&  \text{falls}& x=0\\ 
                         +1&  \text{falls}& x>0
                        \end{matrix}\right. $$
                  </td>
                  <td><img src="bilder/funktionen/sgn/sgn.png" style="max-height:100%; max-width:100%"></td>
                </tr>
              </table>

            <br><br><h5 id="exp_func">Verallgemeinerte Exponentialfunktionen</h5>

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

              <br><br><h5 id="paritaet">Parität</h5>

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

            <br><br><h5 id="lokale_extrema">Lokale Extrema</h5>

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
                <td>heissen <b>kritische Stellen</b> von f</td>
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

            <br><h5 id="kurven">Tabelle</h5>
            <table class="table">
              <tr>
                <td width="10%"><b>k</b></td>
                <td width="10%"><b>x<sub>k</sub></b></td>
                <td width="21%"><b>f(x<sub>k</sub>)</b></td>
                <td width="21%"><b>f'(x<sub>k</sub>)</b></td>
                <td width="15%"><b>f''(x<sub>k</sub>)</b></td>
                <td><b>Typ</b></td>
              </tr>
              <tr>
                <td>1</td>
                <td>-2</td>
                <td>21</td>
                <td>0</td>
                <td>-18 < 0</td>
                <td>lokales Maximum</td>
              </tr>
              <tr>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
              </tr>
            </table>

            <br><br><h5 id="globale_extrema">Globale Extrema</h5>

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

            <br><h5 id="kurven">Kandidatenvergleich</h5>
            <table class="table">
              <tr>
                <td width="20%"><b>k</b></td>
                <td width="20%"><b>x<sub>k</sub></b></td>
                <td width="22%"><b>f(x<sub>k</sub>)</b></td>
                <td><b>Typ</b></td>
              <tr>
                <td>0</td>
                <td>x<sub>0</sub></td>
                <td>y<sub>0</sub></s></td>
                <td>globales Minimum</td>
              </tr>
              <tr>
                <td>...</td>
                <td>...</td>
                <td>...</td>
                <td>...</td>
              </tr>
              <tr>
                <td>E</td>
                <td>x<sub>E</sub></td>
                <td>y<sub>E</sub></td>
                <td>...</td>
              </tr>
            </table>

          

            <br><h5 id="wendepunkte">Wendepunkte</h5>
            <table class="table">
              <tr>
                <td width=20%>Wendepunkte</td>
                <td rowspan="2" width=42%>$$ f''(x) = 0 \text{ und } f'''(x) \not = 0 $$</td>
                <td>Die Wendepunkte von f Liegen an kritischen Stellen von f'.</td>
              </tr>
              <tr>
                <td width=20%>Sattelpunkte</td>
                <td>Sattelpunkte sind Spezialfälle von Wendepunkten. Ein Terassenpunkt ist ein Wendepunkt, an dessen Stelle die Funktion die Steigung Null hat.</td>
              </tr>
            </table>

            <br><h5 id="kruemmung">Krümmung</h5>
            <table class="table">
              <tr>
                <td width=20%>Analytische Krümmung</td>
                <td width=42%>$$ K_{A}(x):=f''(x) $$</td>
                <td>Eine Parabel (Funktion zweiter Ordnung) hat konstante analytische Krümmung!</td>
              </tr>
              <tr>
                <td width=20%>Geometrische Krümmung</td>
                <td width=42%>$$ K_{G}(x):=\frac{1}{\sqrt{(1+(f'(x)^2)^3)}} \cdot K_{A}(x) $$</td>
                <td>Gerade ist unabhängig von der Wahl des Krümmungsbegriffs.</td>
              </tr>
            </table>

            <br><br><h5 id="tools">Tools</h5>

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

          

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>