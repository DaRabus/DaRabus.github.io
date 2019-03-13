<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "mathe";?>
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
            <li class="toc-entry toc-h2"><a href="#ableitung">Ableitung</a></li>
              <ul><li class="toc-entry toc-h3"><a href="#ableitungsregeln">Ableitungsregeln</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#trigo">Trigo</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#trigo">Exponentialfunktion</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#trigo">Logarithmus</a></li></ul>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Differentialrechnung</h1>

          <p class="bd-lead">Die Differential- bzw. Differenzialrechnung ist ein wesentlicher Bestandteil der Analysis und damit ein Gebiet der Mathematik. Sie ist eng verwandt mit der Integralrechnung, mit der sie gemeinsam unter der Bezeichnung Infinitesimalrechnung zusammengefasst wird.</p>

          <br><br><h5 id="ableitung">Ableitung</h5>
          
          <table class="table">
                <thead>
                  <tr id="add_und_sub">
                    <th scope="col" width=20%>Bezeichnung</th>
                    <th scope="col" width=42%>Formel</th>
                    <th scope="col">Grafik / Text</th>
                  </tr>
                </thead>
                <tbody>
                  <tr id="mult_mit_skalar">
                    <td rowspan="2" >Differenzenquotient / mittlere Änderungsrate</td>
                    <td>$${\color{#0BACE8}\frac{\Delta y}{\Delta x} } = \frac{\Delta f}{\Delta x} \coloneqq \frac{f(x_{0}+\Delta x)-f(x_{0})}{\Delta x}$$</td>
                    <td rowspan="2"><img src="bilder/differentialrechnung/ableitung/differenzenquotient.png"style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td><p>Der Differenzenquotient gibt die Steigung der <t style="color:#18A45A";>Sekante</t> PQ an.</p></td>
                  </tr>
            </tbody>
            </table>

            <table class="table">
                <tbody>
                  <tr>
                    <td width=20%>Monom-Ableitung</td>
                    <td width=42%>$$ f(x) = x^{p} \\f'(x) = p \cdot x^{p-1} $$</td>
                    <td>Die Ableitung der quadratischen Standard-Funktion. </td>
                  </tr>
                  <tr>
                    <td width=20%>Summenregel</td>
                    <td width=42%>$$ (f(x)+g(x))' = f'(x)+g'(x) $$</td>
                    <td>Die Ableitung einer konstanten Funktion ist null. </td>
                  </tr>
                  <tr>
                    <td width=20%>Faktorregel</td>
                    <td width=42%>$$ (c\cdot f(x))' = c\cdot f'(x) $$</td>
                    <td>Ein konstanter Faktor bleibt beim Differenzieren erhalten.</td>
                  </tr>
                  <tr>
                    <td width=20%>Produktregel</td>
                    <td width=42%>$$ (f(x)\cdot g(x))' = f'(x)\cdot g(x)+f(x)\cdot g'(x) $$</td>
                    <td></td>
                  </tr>
                  <tr>
                    <td width=20%>Quotientenregel</td>
                    <td width=42%>$$ \left (  \frac{f(x)}{g(x)}\right )'=\frac{f'(x)\cdot g(x)-f(x)\cdot g'(x)}{g^{2}(x)} $$</td>
                    <td>g(x) ≠ 0</td>
                  </tr>
                  <tr>
                    <td width=20%>Kettenregel</td>
                    <td width=42%>$$ (f(g(x)))'=f'(g(x))\cdot g'(x) $$</td>
                    <td>Äussere Ableitung mal innere Ableitung.</td>
                  </tr>
                  <tr>
                    <td width=20%>Ableitung der Logarithmusfunktion</td>
                    <td width=42%>$$ f'(x)= \frac{1}{ln(a) \cdot x} $$</td>
                    <td>$$ f(x) = \log_{a}(x) $$</td>
                  </tr>
                  <tr>
                    <td width=20%>Ableitung der Exponentialfunktion</td>
                    <td width=42%>$$ f'(x)= a^{x} \cdot ln(a) $$</td>
                    <td>$$ f(x) = a^{x} $$</td>
                  </tr>
            </tbody>
            </table>

            <table class="table">
                <tbody>
                  <tr id="mult_mit_skalar">
                    <td width=20%>Betrag in Funktion</td>
                    <td width=42%>$$ f(x) = g(\left | x \right |) \Rightarrow f'(x) = g'(\left | x \right |)\cdot \left | x \right |' = g'(\left | x \right |) \cdot \operatorname{sgn}(x) $$</td>
                    <td rowspan="2"> Die <code class="highlighter-rouge">Signumfunktion</code> ordnet den positiven Zahlen den Wert +1, den negativen Zahlen den Wert −1 und der 0 den Wert 0 zu.</td>
                  </tr>
                  <tr id="mult_mit_skalar">
                    <td width=20%>Betrag über Funktion</td>
                    <td width=42%>$$ f(x) = \left | h(x) \right | \Rightarrow f'(x) =  \operatorname{sgn}(h(x))\cdot h'(x) $$</td>
                  </tr>
            </tbody>
          </table>

            <table class="table">
              <tr>
                <td width=20%>Sinus</td>
                <td width=42%>$$ \sin'(x) = \cos(x) $$</td>
                <td rowspan="2"><img src="bilder/differentialrechnung/ableitung/kreis.gif"style="max-height:100%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>Cosinus</td>
                <td width=42%>$$ \cos'(x) = -sin(x) $$</td>
              </tr>
              <tr>
                <td width=20%>Tangens</td>
                <td width=42%>$$ \tan'(x) = \frac{1}{\cos^{2}(x)} $$</td>
                <td rowspan="2"><img src="bilder/differentialrechnung/ableitung/tangens.png"style="max-height:100%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>Cotangens</td>
                <td width=42%>$$ \cos'(x) = -\frac{1}{\sin^{2}(x)} $$</td>
              </tr>
            </table>

            <table class="table">
              <tr>
                <td rowspan="2" width=20%>Exponentialfunktion</td>
                <td width=42%>$$ \operatorname{exp}(x) := e^{x} $$</td>
                <td rowspan="4">Definition der Natürlichen Funktionen und ihre Ableitungen</td>
              </tr>
              <tr>
                <td>
                  $$ \operatorname{exp}'(x) = \operatorname{exp}(x) $$
                </td>
              </tr>
              <tr>
                <td rowspan="2" width=20%>Logarithmus</td>
                <td width=42%>$$ \operatorname{ln}(x) := \log_{e} (x)$$</td>
              </tr>
              <tr>
                <td>
                  $$ \operatorname{ln}'(x) = \frac{1}{x} $$
                </td>
              </tr>
            </table>

            <br><br><h5 id="tools">Tools</h5>

              <table class="table">
                  <tr>
                    <td width=20%>Mathematica</td>
                    <td width=42%><figure class="highlight"><pre><code class="language-html" data-lang="html">D[2 x^2, x]</code></pre></figure></td>
                    <td>Oder X derivative nach einer berechnung im Menü auswählen</td>
                  </tr>
                  <tr>
                    <td>Wolframalpha</td>
                    <td><figure class="highlight"><pre><code class="language-html" data-lang="html"></code></pre></figure></td>
                    <td></td>
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