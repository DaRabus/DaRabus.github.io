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
            <li class="toc-entry toc-h2"><a href="#rechenoperationen">Rechenoperationen</a></li>
            <li class="toc-entry toc-h2"><a href="#skalarprodukt">Skalarprodukt</a></li>
            <li class="toc-entry toc-h2"><a href="#vektorprodukt">Vektorprodukt</a></li>
            <li class="toc-entry toc-h2"><a href="#vektorraeume">Vektorräume</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Vektoren</h1>

          <p class="bd-lead">Im allgemeinen Sinn versteht man in der linearen Algebra unter einem Vektor ein Element eines Vektorraums, das heißt ein Objekt, das zu anderen Vektoren addiert und mit Zahlen, die als Skalare bezeichnet werden, multipliziert werden kann. </p>


          <br><br><h5 id="rechenoperationen">Rechenoperationen</h5>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col" width=20%>Bezeichnung</th>
                    <th scope="col" width=42%>Formel</th>
                    <th scope="col">Grafik</th>
                  </tr>
                </thead>
                <tbody>
                  <tr >
                    <td id="add_und_sub">Addition und Subtraktion</td>
                    <td>$$ \vec{a} \pm \vec{b} = \begin{pmatrix}a_{x}\\ a_{y}\\ a_{z}\end{pmatrix}\pm\begin{pmatrix}b_{x}\\ b_{y}\\ b_{z}\end{pmatrix}=\begin{pmatrix}a_{x} \pm b_{x}\\ a_{y} \pm b_{y}\\ a_{z} \pm b_{z}\end{pmatrix} $$</td>
                    <td><img src="bilder/vektor/rechenoperationen/addition_subtraktion.png"style="max-height:30%; max-width:100%"></td>
                  </tr>
                  <tr id="mult_mit_skalar">
                    <td>Multiplikation mit einem Skalar</td>
                    <td>$$ k \cdot  \vec{a} = k\cdot  \begin{pmatrix} a_{x}\\  a_{y}\\  a_{z} \end{pmatrix} = 
                      \begin{pmatrix} ka_{x}\\  ka_{y}\\  ka_{z} \end{pmatrix} \qquad \text{mit} \; \; k\in \mathbb{R}$$</td>
                    <td><img src="bilder/vektor/rechenoperationen/multiplikation_mit_einem_skalar.png"style="max-height:30%; max-width:100%"></td>
                  </tr>
                  <tr id="laenge_eines_vektors" >
                    <td>Länge (Betrag) eines Vektors</td>
                    <td>$$ \left | \vec{a} \right | = a = \left | \overrightarrow{P_{1}P_{2}} \right | = 
                    \overline{P_{1}P_{2}} = \sqrt{a_{x}^{2}+a_{y}^{2}+a_{z}^{2}} $$</td>
                    <td><img src="bilder/vektor/rechenoperationen/laenge.png"style="max-height:50%; max-width:100%"></td>
                  </tr>
                    </tbody>
                </table>


                <br><br><h5 id="skalarprodukt">Skalarprodukt</h5>
                <table class="table">
                <thead>
                  <tr>
                    <td width=20% >Skalarprodukt</td>
                    <td width=42%>$$ \langle \vec{a},\vec{b} \rangle = \langle \begin{pmatrix} a_{x}\\  a_{y}\\  a_{z} \end{pmatrix}, \begin{pmatrix} b_{x}\\  b_{y}\\  b_{z} \end{pmatrix} \rangle = a_{x}b_{x} + a_{y}b_{y} + a_{z}b_{z}$$</td>
                    <td><img src="bilder/vektor/rechenoperationen/skalarprodukt.png"style="max-height:30%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>Spezialfall</td>
                    <td>$$ \text{Für} \; \vec{a} \neq \vec{0}, \; \vec{b} \neq \vec{0}\newline \langle a,b\rangle =0 \hArr \vec{a} \bot \vec{b}$$</td>
                    <td><img src="bilder/vektor/rechenoperationen/spezialfall.png"style="max-height:30%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>Winkel zwischen zwei Vektoren</td>
                    <td width=42%>$$ \cos(\varphi ) = \frac{\langle \vec{a},\vec{b}\rangle}{a\cdot b}=\frac{a_{x}b_{x}+a_{y}b_{y}+a_{z}b_{z}}{\sqrt{a_{x}^{2}+a_{y}^{2}+a_{z}^{2}}\sqrt{b_{x}^{2}+b_{y}^{2}+b_{z}^{2}}} $$</td>
                    <td><p></p></td>
                  </tr>
                 
                  </tbody>
                </table>

                <br><br><h5 id="vektorprodukt">Vektorprodukt</h5>
                <table class="table">
                <thead>
                  <tr>
                    <td width=20%>Vektorprodukt</td>
                    <td width=42%>$$ \vec{c}=\vec{a} \times\vec{b} = \begin{pmatrix}a_{x}\\ a_{y}\\ a_{z}\end{pmatrix}\times\begin{pmatrix}b_{x}\\ b_{y}\\ b_{z}\end{pmatrix} = \begin{pmatrix}a_{y}b_{z}-a_{z}b_{y}\\ a_{z}b_{x}-a_{x}b_{z}\\ a_{x}b_{y}-a_{y}b_{x}
                          \end{pmatrix} $$</td>
                    <td><img src="bilder/vektor/rechenoperationen/vektorprodukt.png"style="max-height:20%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>Fläche</td>
                    <td>$$ c = \left | \vec{a} \times \vec{b} \right | = a\cdot b\cdot \sin(\varphi ) $$</td>
                    <td><b>c</b> = Flächeninhalt des von a und b aufgespannten Parallelogramms</td>
                  </tr>
                  <tr>
                    <td rowspan="4">Eigenschaften und Rechenregeln</td>
                    <td>$$ \vec{b} \times \vec{a} = -(\vec{a}\times\vec{b})  $$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>$$ \vec{a} \times \vec{b} = 0  $$</td>
                    <td>Gilt genau dann wenn Vektor a und b <code class="highlighter-rouge">kollinear</code> sind. Das bedeutet einer der beiden Vektoren ist ein vielfaches des anderen Vektors.</td>
                  </tr>
                  <tr>
                    <td>$$ \vec{a}\times (\vec{b}+\vec{c}) = (\vec{a}\times \vec{b})+(\vec{a}\times \vec{c}) $$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>$$ (r\vec{a})\times \vec{b} = \vec{a}\times(r\vec{b})=r(\vec{a}\times\vec{b}) $$</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>

              <table class="table">
                <tr>
                  <td width=20%>Grassmann-Identität</td>
                  <td width=42%>$$ \vec{a} \times (\vec{b} \times \vec{c}) =   \langle \vec{a}, \vec{c} \rangle \vec{b} - \langle \vec{a}, \vec{c} \rangle \vec{c} $$</td>
                  <td></td>
                </tr>
                  <tr>
                    <td>Binet-Cauchy-Identität</td>
                    <td>$$ \langle \vec{a}\times\vec{b},\vec{c}\times\vec{d} \rangle = \langle \vec{a},\vec{c}  \rangle \cdot  \langle \vec{b},\vec{d}  \rangle - \langle \vec{a},\vec{d}  \rangle \cdot  \langle \vec{b},\vec{c}  \rangle $$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Lagrangeidentität</td>
                    <td>$$ \left | \vec{a}\times \vec{b} \right |^2 = \left | \vec{a} \right | \cdot \left |  \vec{b} \right |     \langle \vec{b},\vec{c}  \rangle$$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td width=20%>Einheitsvektor</td>
                    <td width=42%>$$ \hat{a} = \frac{\vec{a}}{\left | \vec{a} \right |} = \frac{\vec{a}}{a} $$</td>
                    <td><p>Alle Vektoren mit der Länge 1 werden als Einheitsvektoren bezeichnet.</p></td>
                  </tr>
                </tbody>
              </table>



              <br><br><h5 id="vektorraeume">Vektorräume</h5>
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

              <table class="table">
                <tr>
                  <td width=20%>Basis</td>
                  <td width=42%>$$ \footnotesize{B = \left \{ e_1=(1,0,0,...,0); \; e_2=(0,1,0,...,0); \; ... , \;e_n=(0,0,0,...,1) \right \}} $$</td>
                  <td>Mit diesem Basisvektor kann man alle Vektoren im Vektorraum machen</td>
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
                  <td>Lineare Hülle</td>
                  <td>$$ \langle x \rangle = \langle \begin{pmatrix}1 \\ 0 \\ 0 \end{pmatrix}\rangle = \left \{ t\cdot  \begin{pmatrix}1 \\ 0 \\ 0 \end{pmatrix} \mid t\in \mathbb{R} \right \}\subseteq\mathbb{R}^3 $$</td>
                  <td></td>
                </tr>
                
                <tr>
                  <td>Lineare Unabhängigkeit</td>
                  <td>$$ \begin{pmatrix}1 \\ 0 \\ 0 \end{pmatrix},\begin{pmatrix}0 \\ 1 \\ 0 \end{pmatrix},\begin{pmatrix}0 \\ 0 \\ 1 \end{pmatrix} $$</td>
                  <td><img src="bilder/vektor/vektorraum/lin_unabhaengig.gif"style="max-height:100%; max-width:40%"></td>
                </tr>
                <tr>
                  <td>Lineare Abhängigkeit</td>
                  <td>$$ \begin{pmatrix}1 \\ 0 \\ 0 \end{pmatrix},\begin{pmatrix}0 \\ 1 \\ 0 \end{pmatrix},\begin{pmatrix}1 \\ 1 \\ 0 \end{pmatrix} $$</td>
                  <td><img src="bilder/vektor/vektorraum/lin_abhaengig.gif"style="max-height:100%; max-width:40%"></td>
                </tr>
              </table>

          

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>