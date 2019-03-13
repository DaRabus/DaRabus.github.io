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
            <li class="toc-entry toc-h2"><a href="#darstellung">Darstellung</a></li>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Darstellung komplexer Zahlen</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Konjugation</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Betrag</a></li></ul>
            <li class="toc-entry toc-h2"><a href="#umrechnung">Umrechnung zwischen Darstellungsformen</a></li>
            <li class="toc-entry toc-h2"><a href="#grundrechenarten">Grundrechenarten</a></li>
              <ul><li class="toc-entry toc-h3"><a href="#grundrechenarten">Addition</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#grundrechenarten">Subtraktion</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#grundrechenarten">Multiplikation</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#grundrechenarten">Division</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#grundrechenarten">Potenzen</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#grundrechenarten">Wurzel</a></li></ul>
              
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title">Komplexe Zahlen</h1>

          <p class="bd-lead">Die komplexen Zahlen erweitern den Zahlenbereich der reellen Zahlen derart, dass die Gleichung <br>x<sup>2</sup> + 1 = 0  lösbar wird. </p>

          

          <br><br><h5 id="darstellung">Darstellung</h5>

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
                    <td >imaginäre Einheit </td>
                    <td>$$ i = -i^{-1}$$</td>
                    <td>Die <b>imaginäre Einheit</b> erlaubt die Erweiterung des Körpers der reellen Zahlen zum Körper der komplexen Zahlen.</td>
                  </tr>
                  <tr>
                    <td >Kartesische Darstellung</td>
                    <td>$$ z = x + yi $$</td>
                    <td><img src="bilder/komplexe_zahlen/darstellung/kartesische_form.jpeg" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td >Polardarstellung</td>
                    <td>$$ z = r(\cos( \varphi ) + i\: \sin (\varphi )) $$</td>
                    <td><img src="bilder/komplexe_zahlen/darstellung/tregonometrische_form.jpeg" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td >Exponentialdarstellung</td>
                    <td>$$ z = re^{i\varphi } $$</td>
                    <td><img src="bilder/komplexe_zahlen/darstellung/exponentialform.jpeg" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td >Eulersche Formel</td>
                    <td>$$ e^{i\varphi } = \operatorname{cis}(\varphi)$$</td>
                    <td>$$ e^{i\varphi } = \cos( \varphi ) + i\: \sin (\varphi ) $$</td>
                  </tr>
                  <tr>
                    <td rowspan="2">Wichtige Formen</td>
                    <td>$$ e^{i \frac{ \pi}{2}}=i $$</td>
                    <td rowspan="2"></td>
                  </tr>
                  <tr>
                    <td>$$ e^{i\pi}=-1 $$</td>
                  </tr>
                    </tbody>
                </table>
          

              <table class="table">
                <tbody>
                  <tr>
                    <td rowspan="3" width=20%>Konjugation</td>
                    <td width=42%>$$ \overline{x+yi} = x-yi $$</td>
                    <td rowspan="3"><img src="bilder/komplexe_zahlen/darstellung/konjugation.jpeg" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr><td width=42%>$$ \overline{r\operatorname{cis}(\varphi )} = r\operatorname{cis}(-\varphi ) $$</td></tr>
                  <tr><td width=42%>$$ \overline{re^{i\varphi }} = re^{-i\varphi } $$</td></tr>
                    </tbody>
                </table>

                <table class="table">
                <tbody>
                  <tr>
                    <td rowspan="3" width=20%>Betrag</td>
                    <td width=42%>$$ \left | x+yi \right | = \sqrt{x^{2}+y^{2}} $$</td>
                    <td rowspan="3"><img src="bilder/komplexe_zahlen/darstellung/betrag.jpeg" style="max-height:60%; max-width:100%"></td>
                  </tr>
                  <tr><td width=42%>$$ \left | r\operatorname{cis}(\varphi ) \right | = r $$</td></tr>
                  <tr><td width=42%>$$ \left | re^{i\varphi } \right | = r $$</td></tr>
                    </tbody>
                </table>

                <br><br><h5 id="umrechnung">Umrechnung zwischen Darstellungsformen</h5>
                <table class="table">
                <tbody>
                  <tr>
                    <td width=20% rowspan="2">Polar → Kartesisch</td>
                    <td width=42%>$$ \underbrace{r\cdot \cos(\varphi }_{\text{x}}) + i\cdot\underbrace{r\cdot \sin(\varphi}_{\text{y}}) = x+yi $$</td>
                    <td><p>Die Umrechnung aus der Polarform in die kartesische Form geschieht mittels <b>ausmultiplizieren</b>.</p></td>
                  </tr>
                  <tr>
                    <td align="center">
                      <p><b>CASIO</b> <kbd><kbd>shift</kbd></kbd> + <kbd><kbd>-</kbd></kbd> → Rec(<code class="highlighter-rouge">r</code>&nbsp;
                        <kbd><kbd>shift</kbd></kbd> + <kbd><kbd>)</kbd></kbd><code class="highlighter-rouge">, φ</code>)</p>
                    </td>
                    <td><b>DEG</b> oder <b>RAD</b> beachten!</td>
                  </tr>
                  <tr>
                    <td width=20% rowspan="3">Kartesisch → Polar</td>
                    <td width=42%>$$ r = \left | z \right | = \sqrt{x^{2}+y^{2}} \\ \varphi = \arctan(\frac{y}{x})   $$</td>
                    <td rowspan="3"><img src="bilder/komplexe_zahlen/darstellung/rec_to_pol.jpeg" style="max-height:60%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td align="center">
                      Unbedingt Quadranten mit berücksichtigen
                    </td>
                  </tr>
                  <tr>
                    <td align="center">
                      <p><b>CASIO</b> <kbd><kbd>shift</kbd></kbd> + <kbd><kbd>+</kbd></kbd> → Pol(<code class="highlighter-rouge">x</code>&nbsp;
                        <kbd><kbd>shift</kbd></kbd> + <kbd><kbd>)</kbd></kbd><code class="highlighter-rouge">, y</code>)</p>
                    </td>
                  </tr>
                    </tbody>
                </table>

                <br><br><h5 id="grundrechenarten">Grundrechenarten</h5>
                <table class="table">
                <tbody>
                  <tr>
                    <td width=20%>Addition</td>
                    <td width=42%>$$ (x+yi)+(v+wi) = x+v + (y+w)i $$</td>
                    <td rowspan="2"><img src="bilder/komplexe_zahlen/darstellung/add.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td width=20%>Subtraktion</td>
                    <td width=42%>$$ (x+yi)-(v+wi) = x-v + (y-w)i $$</td>
                  </tr>
                    </tbody>
                </table>

                <table class="table">
                <tbody>
                  <tr>
                    <td rowspan="2" width=20%>Multiplikation</td>
                    <td width=42%>$$ r\operatorname{cis}(\varphi )\cdot s\operatorname{cis}(\psi )= rs\operatorname{cis}(\varphi +\psi ) $$</td>
                    <td rowspan="4"><img src="bilder/komplexe_zahlen/darstellung/mult.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr><td width=42%>$$ re^{i\varphi }\cdot se^{i\psi }=rse^{i(\varphi +\psi )} $$</td></tr>
                  <tr>
                    <td rowspan="2" width=20%>Division</td>
                    <td width=42%>$$  \frac{r\operatorname{cis}(\varphi )}{s\operatorname{cis}(\psi )}= \frac{r}{s}\operatorname{cis}(\varphi -\psi ) $$</td>
                  </tr>
                  <tr><td>$$\frac{re^{i\varphi }}{se^{i\psi }}=\frac{r}{s}e^{i(\varphi -\psi )}$$</td></tr>
                    </tbody>
                </table>

                <table class="table">
                <tbody>
                  <tr>
                    <td rowspan="2" width=20%>Potenzen</td>
                    <td width=42%>$$ z^{n} = r^{n}\operatorname{cis}(n\cdot \varphi ) $$</td>
                    <td rowspan="2"></td>
                  </tr>
                  <tr><td>$$z^{n} = r^{n}e^{in\varphi }$$</td></tr>
                  <tr>
                    <td rowspan="2" width=20%>Wurzeln</td>
                    <td width=42%>$$ \sqrt[n]{z} = r^{\frac{1}{n}}\operatorname{cis}(\tfrac{1}{n}\cdot \varphi ) $$</td>
                    <td rowspan="2"></td>
                  </tr>
                  <tr><td>$$\sqrt[n]{z} = r^{\frac{1}{n}}e^{i\frac{1}{n}\varphi }$$</td></tr>
                    </tbody>
                </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>