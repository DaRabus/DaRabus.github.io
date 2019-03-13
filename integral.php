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
            <li class="toc-entry toc-h2"><a href="#darstellung">Definition & Eigenschaften</a></li>
              <ul><li class="toc-entry toc-h3"><a href="#folge">Definition</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Schreibweise</a></li></ul>
            <li class="toc-entry toc-h2"><a href="#formeln">Formeln zur Integration</a></li>
            <li class="toc-entry toc-h2"><a href="#modifikation">Lineare Modifikation</a></li>
            <li class="toc-entry toc-h2"><a href="#acr">ACR-Prozess</a></li>
            <li class="toc-entry toc-h2"><a href="#tools">Tools</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title">Integral</h1>

          <p class="bd-lead">Die Integralrechnung ist die Umkehrung der Differentialrechnung und dient zur Berechnung von Flächen.</p>

          

          <br><br><h5 id="begriffe">Definition & Eigenschaften</h5>
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
                    <td >Definition</td>
                    <td>Die Fläche A heisst Integral der Funktion f(x) in den Grenzen x<sub>0</sub>  bis x<sub>E</sub>  über x.</td>
                    <td ><img src="bilder/integral/definition.png"style="max-height:15%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td >Schreibweise</td>
                    <td>$$  A = \int_{x_{0}}^{x_{E}}f(x) \:dx $$</td>
                    <td>
                      <b>x<sub>0</sub></b> = untere Grenze<br>
                      <b>x<sub>0</sub></b> = untere Grenze<br>
                      <b>f(x)</b> = Integrand<br>
                      <b>dx</b> = Mass / Differentialsymbol
                    </td>
                  </tr>
                  <tr>
                    <td >Vorzeichenkonventionen</td>
                    <td>Flächen unterhalb der x-Achse werden negativ verrechnet!</td>
                    <td ><img src="bilder/integral/vorzeichen.png"style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td >Umformung (Grenzen)</td>
                    <td>$$ \int_{x_{E}}^{x_{0}}f(x) \:dx = -\int_{x_{0}}^{x_{E}}f(x) \:dx$$</td>
                    <td></td>
                  </tr>
                </tbody>
              </table>

              <table class="table">
              <tr>
                <td width=20%>Newton-Leibniz-Formel</td>
                <td width=42%>$$ \int_{x_{E}}^{x_{0}}f(x) \:dx = F(x_{E})-F{(x_{0})} $$</td>
                <td>Falls die Funktion keine Sprünge hat, gilt die Formel mit:<br> <b>f(x) = F'(x)</b>.</td>
              </tr>
              <tr>
                <td width=20%>Beispiel 1</td>
                <td width=42%>$$ \int_{-1}^{1}x^{3} \:dx = \frac{1}{4}x^{4} \mid _{-1}^{1} = \frac{1}{4}1^{4} -\frac{1}{4}(-1)^{4} = \frac{1}{4}-\frac{1}{4}= 0 $$</td>
                <td><img src="bilder/integral/beispiel_1.png"style="max-height:35%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>Beispiel 2</td>
                <td width=42%>$$ \int_{0}^{\pi}\sin(x)\:dx = -\cos(x)\mid _{0}^{\pi} \;= -\cos(\pi)+\cos(0) \\= -(-1)+1 = 1+1 = 2 $$</td>
                <td><img src="bilder/integral/beispiel_2.png"style="max-height:35%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>Bestimmtes Integral</td>
                <td width=42%>$$  $$</td>
                <td>Beim bestimmten Integral sind die Integrationsgrenzen angegeben</td>
              </tr>
              <tr>
                <td width=20%>Unbestimmtes Integral</td>
                <td width=42%>$$ \int \! f(x) \, \mathrm{d}x = F(x) + c $$</td>
                <td>Hingegen beim unbestimmten Integral sind keine Grenzen angegeben.<br> <b>c</b> = Integrationskonstante</td>
              </tr>
            </table>

            <table class="table">
              <tr>
                <td width=20%>Summen-Regel</td>
                <td width=42%>$$ \int_{x_{0}}^{x_{E}}(g(x)+h(x)) \:dx = \int_{x_{0}}^{x_{E}}g(x) \:dx + \int_{x_{0}}^{x_{E}}h(x) \:dx $$</td>
                <td></td>
              </tr>
              <tr>
                <td width=20%>Faktor-Regel</td>
                <td width=42%>$$ \int_{x_{0}}^{x_{E}}a \cdot g(x) \:dx = a \cdot \int_{x_{0}}^{x_{E}} g(x)\:dx $$</td>
                <td></td>
              </tr>
              <tr>
                <td width=20%>Zerlegungsregel</td>
                <td width=42%>$$ \int_{x_{0}}^{x_{E}}f(x) \:dx = \int_{x_{0}}^{x_{1}}f(x) \:dx + \int_{x_{1}}^{x_{E}}f(x) \:dx $$</td>
                <td></td>
              </tr>
            </table>

            <br><br><h5 id="formeln">Formeln zur Integration</h5>

            <table class="table">
              <thead>
                  <tr>
                    <th scope="col" width=20%></th>
                    <th scope="col" width=42%>Funktion f(x)</th>
                    <th scope="col">Stammfunktion F(x)</th>
                  </tr>
                </thead>
              <tr>
                <td width=20%>Konstante Funktion</td>
                <td width=42%>$$ k $$</td>
                <td>$$ k \cdot x \color{#AAA}{+ c} $$</td>
              </tr>
              <tr>
                <td width=20%>Potenzfunktion</td>
                <td width=42%>$$ x^n $$</td>
                <td>$$ \frac{1}{n+1}\cdot x^{n+1} \color{#AAA}{+ c} $$</td>
              </tr>
              <tr>
                <td width=20%> e-Funktion </td>
                <td width=42%>$$ e^{x} $$</td>
                <td>$$ e^x \color{#AAA}{+ c} $$</td>
              </tr>
              <tr>
                <td width=20%>Sinus</td>
                <td width=42%>$$ \sin(x) $$</td>
                <td>$$ -\cos(x) \color{#AAA}{+ c} $$</td>
              </tr>
              <tr>
                <td width=20%>Kosinus </td>
                <td width=42%>$$ \cos{x} $$</td>
                <td>$$ \sin(x) \color{#AAA}{+ c} $$</td>
              </tr>
              <tr>
                <td width=20%>Tangens</td>
                <td width=42%>$$ \tan(x) $$</td>
                <td>$$ -\ln(\cos(x)) \color{#AAA}{+ c} $$</td>
              </tr>
              <tr>
                <td width=20%>Hyperbel</td>
                <td width=42%>$$ \frac{1}{x} $$</td>
                <td>$$ \ln|x| \color{#AAA}{+ c} $$</td>
              </tr>
              <tr>
                <td width=20%> Logarithmus naturalis </td>
                <td width=42%>$$ \ln x $$</td>
                <td>$$ x · \ln x - x \color{#AAA}{+ c}\color{#000} \\= x · (\ln x - 1) \color{#AAA}{+ c} $$</td>
              </tr>
            </table>

            <br><br><h5 id="modifikation">Lineare Modifikation</h5>
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
                <td width=42%>$$ \int f(m\cdot x+q) \; dx  $$</td>
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
                <td>$$ \int x^{13} \; dx  $$</td>
                <td>$$ \frac{1}{14}\cdot x^{14} + c $$</td>
              </tr>
              <tr>
                <td>$$ \int f(G \cdot a^{\frac{x-x_0}{\varepsilon}}) \; dx  $$</td>
                <td>$$ G \cdot \frac{1}{\ln(a)}\cdot \varepsilon \cdot a^{\frac{x-x_0}{\varepsilon}} $$</td>
              </tr>
            </table>

            <br><br><h5 id="acr">ACR-Prozess</h5>
              <table>
                <tr>
                <td width=20%>Konzept</td>
                <td width=42%>Archimedes-Cauchy-Riemann Approximationsprozess</td>
                <td><img src="bilder/integral/acr/acr.png"style="max-height:35%; max-width:100%"></td>
              </tr>
              <tr>
                <td rowspan="2" width=20%>Vorgehen</td>
                <td width=42%><b>Lokal:</b><br>$$ \delta A \approx f(x) \cdot \delta x$$</td>
                <td rowspan="2"><img src="bilder/integral/acr/lokal.png"style="max-height:35%; max-width:100%"></td>
              </tr>
              <tr>
                <td><b>Global:</b><br> $$ A = \int_{x_0}^{x_E}f(x)\; dx = F(x_E)-F(x_0) $$</td>
              </tr>
              </table>







             <br><br><h5 id="tools">Tools</h5>
              <table class="table">
                <tr>
                    <td>Wolframalpha & Mathematica</td>
                    <td><figure class="highlight"><pre><code class="language-html" data-lang="html">Integrate[x^2, {x, -1, 1}]</code></pre></figure></td>
                    <td></td>
                  </tr>
                <tr>
                  <td rowspan="2" width=20%>Matlab</td>
                   <!-- Achtung! Positionierung unten nicht verändern !!!! -->
                  <td rowspan="2" width=42%>
                  <figure class="highlight">
                  <pre><code class="language-html" data-lang="html">
<font color="green">% MATLAB initialisieren:</font>
clear <font color="#8A0A8A">all</font>; clc; format <font color="#8A0A8A">compact</font>; format <font color="#8A0A8A">long</font>;

<font color="green">% Paramter:</font>
    x_0=-1; <font color="green">% erster X Wert</font>
    x_E=1; <font color="green">% letzter X Wert</font>
    n=4; <font color="green">% anzahl durchläufe</font>
    N=5; <font color="green">% anzahl Werte, die generiert werden</font>
    fig=1; <font color="green">% Figur 1</font>
    lw=4; <font color="green">% Liniendicke</font>
    
<font color="green">% Funktionen:</font>
f=@(x)x.^2;

<font color="green">% Daten:</font>
<font color="blue">for</font> k=1:n;
    x_data=linspace(x_0,x_E,N);
    y_data=f(x_data);
    I=trapz(x_data,y_data)
    N=2*N;
<font color="blue">end</font>

<font color="green">% Plot:</font>
figure(fig);
plot(x_data,y_data,<font color="#8A0A8A">'-'</font>,<font color="#8A0A8A">'linewidth'</font>,lw);
xlabel(<font color="#8A0A8A">'x'</font>); ylabel(<font color="#8A0A8A">'y'</font>);
grid <font color="#8A0A8A">on</font>;
axis(<font color="#8A0A8A">'image'</font>);</code>
                  </pre>
                </figure></td>
                  <td><b>Funktionen:</b> Bei der Funktion muss darauf geachtet werden, dass der Punkt nicht fehlt. Der Punkt bewirkt, dass es auf jedes Element vom Array angewendet wird.  
                    <br>
                    <br><b>Daten:</b> Hier wird die Variable <b>I</b> mittels berechnet Trapez. Diese Funktion berechnet die Fläche unter der Funktion. Im Bild grün ersichtlich, sieht man den Graf im ersten Durchgang. Dort wurde der Bereich in 5 teile unterteilt. Mit jedem Schleifendurchgang wird die Anzahl unterteilungen verdoppelt. Je mehr unterteilt wird, desto genauer wird die Fläche berechnet. </td>
                </tr>
                <tr>
                  <td>Ergebnis:<br><img src="bilder/integral/matlab/plot_1.png"style="max-height:35%; max-width:100%"></td>
                </tr>
              </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>