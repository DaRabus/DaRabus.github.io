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
            <li class="toc-entry toc-h2"><a href="#folgen">Folgen</a></li>
            <li class="toc-entry toc-h2"><a href="#reihen">Reihen</a></li>
              
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title">Folgen und Reihen</h1>

          <p class="bd-lead">Als Folge oder Sequenz wird in der Mathematik eine Auflistung von endlich oder unendlich vielen fortlaufend nummerierten Objekten bezeichnet.</p>

          

          <br><br><h5 id="folgen">Folgen</h5>

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
                    <td rowspan="2">Folge</td>
                    <td>$$  (a_{n}) = a_{1}, a_{2}, a_{4}, \dotsc, a_{n}, \dotsc$$</td>
                    <td rowspan="2">Ordnet man jeder natürlichen Zahl eine reelle Zahl eindeutig zu, so entsteht eine unendliche (reelle) Folge.</td>
                  </tr>
                  <tr>
                    <td>
                      $$ a: \mathbb{N} \longrightarrow B, n \mapsto a(n)$$
                    </td>
                  </tr>
                  <tr>
                    <td>Arithmetische Folgen</td>
                    <td>$$ a_{0} = ... \; ;a_{k+1}=a_{k} + c $$</td>
                    <td>lineare Funktion</td>
                  </tr>
                  <tr>
                    <td>Geometrische Folgen</td>
                    <td>$$a_{0} = ... \; ;a_{k+1}=a_{k} \cdot c$$</td>
                    <td>Exponentialfunktion</td>
                  </tr>
                  <tr>
                    <td>Alternierende Folgen</td>
                    <td>$$a_{0} = ... \; ;a_{k+1}=a_{k} \cdot c^{n-1}$$</td>
                    <td>Wenn der Exponent geradzahlig ist, wird die Potenz positiv. Ist der Exponent ungerade, ist auch der Wert der Potenz negativ.</td>
                  </tr>

                  <tr>
                    <td rowspan="3">Beschränkte Folge</td>
                    <td>$$a_{n} \leq a_{0}$$</td>
                    <td>nach oben beschränkt<br>a<sub>o</sub> = obere Schranke</td>
                  </tr>
                  <tr>
                    <td>$$a_{n} \geq a_{u}$$</td>
                    <td>nach unten beschränkt<br>a<sub>u</sub> = untere Schranke</td>
                  </tr>
                  <tr>
                    <td>$$a_{n} \in [a_{u}, a_{o}]$$</td>
                    <td>beschränkt</td>
                  </tr>

                  <tr>
                    <td rowspan="4">Monotone Folge</td>
                    <td>$$a_{n+1}\geq a_{n}$$</td>
                    <td>monoton steigend</td>
                  </tr>
                  <tr>
                    <td>$$a_{n+1} > a_{n}$$</td>
                    <td>streng monoton steigend</td>
                  </tr>
                  <tr>
                    <td>$$a_{n+1} \leq  a_{n}$$</td>
                    <td>monoton fallend</td>
                  </tr>
                  <tr>
                    <td>$$a_{n+1} < a_{n}$$</td>
                    <td>streng monoton fallend</td>
                  </tr>

                  <tr>
                    <td rowspan="2">Konvergenz</td>
                    <td>$$ \lim_{n\rightarrow \infty} \frac{1}{n} = 0 $$</td>
                    <td>Besitzt eine Folge einen Grenzwert, so nennt man sie konvergent. Die Folge läuft auf einen Punkt zu.<br><b>Jede konvergente Folge ist beschränkt.</b></td>
                  </tr>
                  <tr>
                    <td>$$ a_{n} = \frac{1}{n} \xrightarrow{n \rarr \infin} 0 $$</td>
                    <td>Alternative Schreibweise</td>
                  </tr>
                  
                  <tr>
                    <td rowspan="2">Divergenz</td>
                    <td>$$ a_{n} = 2n \xrightarrow{n \rarr \infin} \infin $$</td>
                    <td rowspan="2">Die Folge läuft auseinander.<br>Eine Folge <b>divergiert</b>, falls sie nicht konvergiert.</td>
                  </tr>
                  <tr>
                    <td>$$ \lim_{n\rightarrow \infty} a_{n} = (-1)^{n} $$</td>
                  </tr>
                </tbody>
              </table>
            <br><br><h5 id="reihen">Reihen</h5>

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
                    <td>Schreibweise</td>
                    <td>$$  7+8+9+ \dotso +118 = \sum_{k=7}^{118}k $$</td>
                    <td>Die Summe der Glieder einer Folge (oder eines Teils der Folgenglieder) wird als Reihe bezeichnet.</td>
                  </tr>
                  <tr>
                    <td>In Teilsummen zerlegen</td>
                    <td>$$  \sum_{i=1}^{n}a_{i} = \sum_{i=1}^{k} a_{i}+ \sum_{i=k+1}^{n} a_{i} $$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Ausklammern</td>
                    <td>$$  \sum_{k=a}^{b}c \cdot f(k) = c \cdot \sum_{k=a}^{b} f(k) $$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Verschiebung</td>
                    <td>$$  \sum_{k=a}^{b} f(k) = \sum_{k=a+c}^{b+c} f(k-c) $$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td>Berechnung der Summanden</td>
                    <td>$$  \sum_{k=a}^{b} \cdot c = (b-a+1)\cdot c $$</td>
                    <td>Hier wird nur die Anzahl an Summanden ermittelt und nicht das Resultat der Summe.</td>
                  </tr>
                  <tr>
                    <td>Geometrische Reihen</td>
                    <td>$$  G_{(m;n)}(x)=\sum_{k=m}^{n}x^{k} = \frac{x^{m}-x^{n+1}}{1-x} $$</td>
                    <td><p>Addiert man alle Glieder einer geometrischen Folge, also eine Folge von Zahlen, die sich untereinander stets um den gleichen Faktor k unterscheiden, so ergibt sich eine geometrische Reihe. </p></td>
                  </tr>
                </tbody>
              </table>

              <table class="table">
                <tbody>
                  <tr>
                    <td width=20%>Geometrische Reihen</td>
                    <td width=42%>$$ \lim_{n\rightarrow \infin} \frac{x^{m}-x^{n+1}}{1-x} =\frac{x^{m}}{1-x} $$</td>
                    <td>divergent</td>
                  </tr>
                  <tr>
                    <td width=20%>Reziproken-Reihe</td>
                    <td width=42%>$$ \sum_{k=1}^{\infty} \frac{1}{k}=1+\frac{1}{2}+\frac{1}{3}+\frac{1}{4}+\frac{1}{5}+ \dotso + \longrightarrow \infty$$</td>
                    <td>divergent</td>
                  </tr>
                  <tr>
                    <td width=20%>Reziproken-Quadrat-Reihe</td>
                    <td width=42%>$$\sum_{k=1}^{\infty} \frac{1}{k^{2}}=1+\frac{1}{4}+\frac{1}{9}+\frac{1}{16}+\frac{1}{25}+ \dotso = \frac{\pi^{2}}{6} $$</td>
                    <td>konvergent</td>
                  </tr>
                    </tbody>
                </table>
          

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>