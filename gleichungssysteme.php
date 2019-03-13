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
            <li class="toc-entry toc-h2"><a href="#gleichungssystem">Gleichungssysteme</a></li>
            <li class="toc-entry toc-h2"><a href="#gauss">Gauss'sche Eliminationsalgorithmus</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="gleichungssystem">Gleichungssysteme</h1>

          <p class="bd-lead">Ein lineares Gleichungssystem (kurz LGS) ist in der linearen Algebra eine Menge linearer Gleichungen mit einer oder mehreren Unbekannten, die alle gleichzeitig erfüllt sein sollen.</p>

          <br><br><h5 id="rechenoperationen">Lineare Gleichungssysteme</h5>
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
                  <td>Standardform</td>
                  <td>$$ a_{1}x_{1}+a_{2}x_{2}+ \mathellipsis +a_{n}x_{n}=b $$</td>
                  <td><b>a</b> sind die Koeffizienten<br><b>b</b> die Konstante<br>Immer mit + schreiben. Also 3x + (-5)y</td>
                </tr>
                <tr >
                  <td>Normiert</td>
                  <td>$$ 3x^{2}-15x+18=0 \\x^{2}-5x+6 $$</td>
                  <td>Normiert bedeutet, dass der Koeffizient von x gleich 1 ist. </td>
                </tr>
                <tr >
                  <td>Drei Fälle</td>
                  <td>$$ ax=b \: \; \text{mit} \: \; a,b \isin \Complex $$</td>
                  <td>a) Falls a ≠ 0, so gilt L = {b/a}<br>
                      b) Falls a = 0 und b ≠ 0, so gilt L= {}<br>
                      c) Falls a = 0 und b = 0, so gilt L = C</td>
                </tr>
                <tr >
                  <td>Degenerierte lineare Gleichungen</td>
                  <td>$$ 0 = b $$</td>
                  <td>Falls die Standardform 0=b ergibt, also alle ihre Koeffizienten 0 sind, heisst sie degeneriert.<br> 
                    a) Falls b ≠ 0, so gilt L = {}<br>
                  b) falls b = 0, so gilt L = C</td>
                </tr>
                <tr >
                  <td>Nicht Degenerierte lineare Gleichungen</td>
                  <td>$$  $$</td>
                  <td>Es gibt mindestens eine ariable mit von 0 verschiedenem Koeffizienten.</td>
                </tr>
                </tbody>
            </table>

              <table class="table"><thead>
                  <tr>
                    <td width=20%>Lösungsarten</td>
                    <td width=42%>1) Eine Lösung<br>2) Keine Lösung<br> 3) Unendliche viele Lösungen </td>
                    <td><img src="bilder/gleichungssystem/loesungen/grafik.jpg"style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td width=20% rowspan="3">2 x 2 System<br>nicht degeneriert<br> Anzahl Lösungen:</td>
                    <td width=42% rowspan="3">$$ a_{1}x+b_{1}y = c_{1} \\ a_{2}x+b_{2}y = c_{2}$$</td>
                    <td>$$  a_{1}b_{2}-a_{2}b_{1} = 0 \: \text{(keine oder unendlich)}$$</td>
                  </tr>
                  <tr>
                    <td>$$  a_{1}c_{2}-a_{2}c_{1} \neq  0 \: \text{(keine)}$$</td>
                  </tr>
                  <tr>
                    <td>$$  a_{1}c_{2}-a_{2}c_{1} =  0 \: \text{(unendlich)}$$</td>
                  </tr>
              </table>

            <br><br><h5 id="gauss">Gauss'sche Eliminationsalgorithmus</h5>
            <table class="table"><thead>
                  <tr>
                    <td width=20%>System in Dreiecksform</td>
                    <td width=42%>Es wird zuerst Treppenform erstellt. Falls es mehr Variablen als Gleichungen hat, müssen Parameter gesetzt werden.
                      <br><br><b>Pivot</b> Element sind zuerst 1 dann -1 und zum schluss -2.</td>
                    <td><img src="bilder/gleichungssystem/gauss/gauss.png"style="max-height:50%; max-width:100%"></td>
                  </tr>
              </table>
              <table class="table"><thead>
                  <tr>
                    <td width=20%>Freie Variablen</td>
                    <td width=42%></td>
                    <td>Eine Variable, welche nicht ein Pivot-Element ein Gleichung eines Systems in Treppenform ist, heisst eine freie Variable des Systems.</td>
                  </tr>
                  
              </table>


        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>