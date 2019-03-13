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
            <li class="toc-entry toc-h2"><a href="#rechenoperationen">Trigonometrie</a></li>
              <ul><li class="toc-entry toc-h3"><a href="#definition_der_winkelfunktion">Definition der Winkelfunktionen</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#berechnung_allgemeines_dreieck">Berechnung allgemeines Dreieck</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#beziehungen_zwischen_den_winkelfunktionen">Beziehungen zwischen den Winkelfunktionen</a></li></ul>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Trigonometrie</h1>

          <p class="bd-lead">Die Grundaufgabe der Trigonometrie besteht darin, aus drei Grössen eines gegebenen Dreiecks andere Grössen dieses Dreiecks zu berechnen.</p>

          <br><br><h5 id="definition_der_winkelfunktion">Definition der Winkelfunktionen</h5>

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
                    <td >Sinus von α</td>
                    <td>$$ \sin(\alpha) = \frac{\text{Gegenkathete}}{\text{Hypotenuse}} = \frac{{\color{#0C9D51} g}}{{\color{#DD262C} h}} $$</td>
                    <td rowspan="3"><img src="bilder/trigonometrie/winkelfunktionen/rechtwinklige_dreiecke.png"style="max-height:30%; max-width:100%"></td>
                  </tr>
                  <tr id="laenge_eines_vektors" >
                    <td>Kosinus von α</td>
                    <td>$$ \cos(\alpha) = \frac{\text{Ankathete}}{\text{Hypotenuse}} = \frac{{\color{#0FA9E3} a}}{{\color{#DD262C} h}}$$</td>
                  </tr>
                  <tr >
                    <td>Tangens von α</td>
                    <td>$$ \tan(\alpha) = \frac{\text{Gegenkathete} }{\text{Ankathete}} = \frac{{\color{#0C9D51} g}}{{\color{#0FA9E3} a}} $$</td>
                  </tr>
                  <tr >
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

                <table class="table">
                <tbody>
                  <tr id="mult_mit_skalar">
                    <td width=20%>Spezielle Winkel</td>
                    <td width=42%>
                        <table class="table table-borderless">
                          <thead vertical-align="right">
                            <tr align="center">
                              <th align="left">Grad</th>
                              <th >0</th>
                              <th >30</th>
                              <th >45°</th>
                              <th >60°</th>
                              <th >90°</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr >
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
                    <td><img src="bilder/trigonometrie/winkelfunktionen/spezielle_dreiecke.png"style="max-height:38%; max-width:100%"></td>
                  </tr>
            </tbody>
          </table>

          <table class="table">
                <tbody>
                  <tr id="mult_mit_skalar">
                    <td width=20% >Sinussatz</td>
                    <td  width=42%>$$ \frac{{\color{#0C9D51} a}}{\sin({\color{#0C9D51} \alpha})} = \frac{{\color{#0FA9E3} b}}{\sin({\color{#0FA9E3} \beta})} = \frac{{\color{#DD262C} c}}{\sin({\color{#DD262C} \gamma })} = 2r $$</td>
                    <td><img src="bilder/trigonometrie/berechnung/sinussatz.png"style="max-height:30%; max-width:100%"></td>
                  </tr>
                  <tr id="laenge_eines_vektors" >
                    <td>Kosinussatz</td>
                    <td>$$ {\color{#0C9D51} a^{2}} = {\color{#0FA9E3} b^{2}} +  {\color{#0FA9E3} c^{2}} - 2bc\cos({\color{#0C9D51} \alpha}) $$</td>
                    <td><img src="bilder/trigonometrie/berechnung/cosinussatz.png"style="max-height:30%; max-width:100%"></td>
                  </tr>
                </tbody>
            </table>

          <table class="table">
                <tbody>
                  <tr id="mult_mit_skalar">
                    <td width=20% >Trigonometrischer Pythagoras</td>
                    <td  width=42%>$$ \sin^{2}(\alpha)+\cos^{2}(\alpha) = 1 $$</td>
                    <td></td>
                  </tr>
                  
                </tbody>
            </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>