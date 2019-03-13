<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "mathe";
    ?>
    <style type="text/css">
      .anchor{
        display: block;
        height: 115px; /*same height as header*/
        margin-top: -115px; /*same height as header*/
        visibility: hidden;
      }
    </style>
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
            <li class="toc-entry toc-h2"><a href="#vektorfelder">Vektorfelder</a></li>
            <li class="toc-entry toc-h2"><a href="#parametrisierte_kurven">Parametrisierte Kurven</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Vektoranalysis</h1>

          <p class="bd-lead">Vektoranalysis ist ein Teilgebiet der Mathematik, das sich hauptsächlich mit Vektorfeldern in zwei oder mehr Dimensionen beschäftigt und dadurch die bereits in der Schulmathematik behandelten Gebiete der Differential- und der Integralrechnung wesentlich verallgemeinert.</p>


          <br><br><h5 id="vektorfelder">Vektorfelder</h5>
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
                    <td>Funktionen in mehreren Variablen</td>
                    <td>$$ f: \mathbb{R}^2 \longrightarrow \mathbb{R}, \; (x_1; \; ... \; ; x_n) \mapsto f(x_1; \; ... \; ; x_n)  $$</td>
                    <td>Sowohl die Variablen als auch der Funktionswert können Masseinheiten tragen.<br><br>
                      <img src="bilder/vektoranalysis/vektorfelder/beispiel.gif"style="max-height:60%; max-width:100%"><br></td>
                  </tr>
                  <tr>
                    <td>Level-Mengen</td>
                    <td>$$ f^{-1}(\left \{ L \right \}) :=\left \{ p\in A\mid f(p) = L \right \} $$</td>
                    <td>Wenn man alle Punkte mit einem bestimmten wert sucht. Braucht man zum Beispiel bei für Höhenlinien auf der Karte.</td>
                  </tr>
                  <tr>
                    <td>Vektorfelder</td>
                    <td>$$ \vec{v}: \mathbb{R}^n \rightarrow \mathbb{R}^n \\(x_1; \; ... \; ;x_n )x \mapsto \vec{v} (x_1; \; ... \; ;x_n ) = \begin{bmatrix}v_1 (x_1; \; ... \; ;x_n )\\ \text{ } \\ \vdots \\ v_n (x_1; \; ... \; ;x_n )\end{bmatrix} $$</td>
                    <td><img src="bilder/vektoranalysis/vektorfelder/2d.png"style="max-height:100%; max-width:100%">Vektor <b>v(x<sub>1</sub>; ... ; x<sub>n</sub>)</b> stellt einen Vektor am Punkt <b>(x<sub>1</sub>; ... ; x<sub>n</sub>)</b> dar.</td>
                  </tr>
                  <tr>
                    <td>Homogenes Vektorfeld</td>
                    <td>$$ \vec{v} (x_1; \; ... \; ;x_n ) \equiv \small \text{konstant.} $$</td>
                    <td><img src="bilder/vektoranalysis/vektorfelder/homogen.jpeg"style="max-height:100%; max-width:100%"><br>An jedem Punkt der gleiche Vektor. </td>
                  </tr>
                  <tr>
                    <td>Einheitsvektorfeld / <br>Richtungsvektorfeld</td>
                    <td>$$ \left | \vec{v} (x_1; \; ... \; ;x_n ) \right | = 1 \\ \text{ } \\ \hat{v} (x_1; \; ... \; ;x_n ) =  \vec{v} (x_1; \; ... \; ;x_n ) $$</td>
                    <td>Mit der Länge 1 ohne Masseinheit. </td>
                  </tr>
                  <tr>
                    <td>Quellenfeld</td>
                    <td>$$ \vec{v} (x;y) = \begin{bmatrix}x\\y \end{bmatrix} $$</td>
                    <td><img src="bilder/vektoranalysis/vektorfelder/quellenfeld.jpeg"style="max-height:80%; max-width:75%"></td>
                  </tr>
                  <tr>
                    <td>Wirbelfeld</td>
                    <td>$$ \vec{v} (x;y) = \begin{bmatrix}-y\\x \end{bmatrix} $$</td>
                    <td><img src="bilder/vektoranalysis/vektorfelder/wirbelfeld.jpeg"style="max-height:80%; max-width:80%"></td>
                  </tr>
                </tbody>
              </table>

            <br><br><h5 id="parametrisierte_kurven">Parametrisierte Kurven</h5>
              <table>
                <tr>
                    <td width=20%>Parametrisierte Kurven</td>
                    <td width=42%>$$ \normalsize \vec{s}: \left [ \tau _0,\tau_E \right ]\rightarrow \mathbb{R}^n\\ \text{ } \\ \tau \mapsto \vec{s}(\tau) = \small\begin{bmatrix}S_1(\tau)\\ \vdots \\ S_n(\tau)\end{bmatrix} $$</td>
                    <td><img src="bilder/vektoranalysis/parametrisierte_kurven/beispiel.png"style="max-height:60%; max-width:40%"></td>
                  </tr>
                  <tr>
                    <td width=20%>Kurvenparameter</td>
                    <td width=42%>$$ \tau $$</td>
                    <td>Der Kurvenparameter kann viele bedeutungen haben:<br>- Physikalische Zeit<br>- Winkel<br>- Länge<br>- Beliebige "Absteckung" des Weges</td>
                  </tr>
                  <tr>
                    <td>Geschwindigkeitsvektor</td>
                    <td>$$ \vec{v}(\tau) := \dot{\vec{s}} $$</td>
                    <td>Vektor s(τ) muss nicht injektiv sein, aber er soll so gewählt werden, dass v(τ) > 0</td>
                  </tr>
                  <tr>
                    <td>Bahngeschwindigkeit</td>
                    <td>$$ v(\tau) := \left | \vec{v}(\tau) \right | $$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bahnbeschleunigung</td>
                    <td>$$ \vec{a}(\tau) :=  \dot{\vec{v}}(\tau) $$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Bahnvektor</td>
                    <td>$$ \hat{e}(\tau) := \hat{v}(\tau) = \frac{1}{v(\tau)}\cdot \vec{v}(\tau) $$</td>
                    <td>Der Bahnvektor ist der Einheitsvektor entlang der Bahn und existiert für alle τ element [τ<sub>0</sub>,τ<sub>E</sub>].</td>
                  </tr>
                  <tr>
                    <td>Bahn</td>
                    <td>$$ \small \text{Bildmenge }\; \normalsize \vec{s}(\left [ \tau_0,\tau_E \right ]) $$</td>
                    <td>Die Bahn ist die Menge aller erreichten Punkte und somit die Kurve im klassischen geometrischen Sinn. Es kann sein, dass verschiedene parametrisierte Kurven die gleiche Bahn haben.</td>
                  </tr>
                  <tr>
                    <td>Bogenlänge</td>
                    <td>$$ \Delta s := \int_{\tau_0}^{\tau_E}  v(\tau) \; \text{d}\tau $$</td>
                    <td>Δs ist unabhängig von der Wahl der Parametrisierung und stimmt mit dem klassischen Begriff der Länge aus der Geometrie überein.</td>
                  </tr>
              </table>

              <table>
                <tr>
                    <td width=20%>Strecke zwischen A und B</td>
                    <td width=42%>$$ \vec{s}(\tau) = \vec{A}+ \tau \cdot (\vec{B}-\vec{A}) \small \; \text{ mit }\; \normalsize \tau \in \left [ 0,1 \right ] $$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Kreis in R<sup>2</sup> um Ursprung</td>
                    <td>$$ \vec{s}(\tau) = \begin{bmatrix}r\cdot \cos(\tau)\\ r\cdot \sin(\tau)\end{bmatrix} \small \; \text{ mit }\; \normalsize \tau \in \left [ 0,2 \pi \right [ $$</td>
                    <td>Wie im Beispielbild von Parametrisierte Kurven.</td>
                  </tr>
              </table>

              <table>
                <tr>
                    <td rowspan="2" width=20%>Linienintegral<br>Kurvenintegral</td>
                    <td width=42%>$$ I := \int_{\tau_0}^{\tau_E}\left \langle \vec{w},\vec{v} \right \rangle \text{d} \tau $$</td>
                    <td rowspan="2"><img src="bilder/vektoranalysis/parametrisierte_kurven/linienintegral.png"style="max-height:60%; max-width:100%"><br><br>Linienintegrale sind bis auf Vorzeichen unabhängig von der Wahl der Parametrisierung.</td>
                  </tr>
                  <tr>
                    <td>Masseinheit: $$ [I] = [\vec{w}]\cdot[\vec{s}]$$</td>
                  </tr>
                  <tr>
                    <td>Geschlossene Kurven</td>
                    <td>$$ \oint \small \text{ statt } \normalsize \int $$</td>
                    <td><img src="bilder/vektoranalysis/parametrisierte_kurven/geschlossen.png"style="max-height:60%; max-width:60%"></td>
                  </tr>
                  <tr>
                    <td>Zirkulation</td>
                    <td>$$ \varUpsilon_{\vec{w}} = \oint_{s_0}^{s_E}\left \langle \vec{w},\hat{e} \right \rangle \text{d}s $$</td>
                    <td>Das Linienintegral über einen geschlossenen Weg heisst Zirkulation des Vektorfeldes entlang des Weges. </td>
                  </tr>
              </table>


        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>