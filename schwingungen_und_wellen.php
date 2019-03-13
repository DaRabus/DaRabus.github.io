<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "physik";?>
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
          <?php include ('includes/nav_physik.php'); ?>
        </div>

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
            <li class="toc-entry toc-h2"><a href="#schwingungen">Schwingungen</a></li>
            </ul>
          </div>


        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="optik">Schwingungen und Wellen</h1>
          <p class="bd-lead">Schwingungen sind Vorgänge, bei denen sich ein physikalischer Zustand zeitlich periodisch verändert, d.h. eine physikalische Größe startet bei einem bestimmten Wert, verändert sich stetig und erreicht nach einiger Zeit wieder diesen Wert.</p>

        <br><br><h5 id="schwingungen">Ungedämpfte harmonische Schwingungen</h5>
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
              <td>Frequenz einer Welle</td>
              <td>$$ f = \frac{1}{T} $$</td>
              <td><img src="bilder/optik/schwingungen/schwingung.jpeg"style="max-height:50%; max-width:100%"><br>
                <br><b>f</b> = Frequenz [1/s]<br>
                <b>T</b> = Schwingungsdauer einer Periode [s]
              </td>
            </tr>
            <tr>
              <td>Ausbreitungsgeschwindigkeit einer Welle</td>
              <td>$$ v = \lambda \cdot f $$</td>
              <td><b>v</b> = Geschwindigkeit [m/s]<br>
                <b>λ</b> = Periodenlänge [m]<br>
                <b>f</b> = Frequenz [1/s]
              </td>
            </tr>
            <tr>
              <td rowspan="2">Harmonische Schwingung</td>
              <td>$$ y= \hat{y} \cdot \sin(\omega \cdot t) $$</td>
              <td>Falls die Projektion wie eine Kreisbewegung mit Sinus oder Cosinus beschrieben werden kann.</td>
            </tr>
            <tr>
              <td>$$ {{ F}_{{\rm{rück}}}}(x) =  - k \cdot x $$</td>
              <td>Oder die rücktreibende Kraft auf den schwingenden Körper ist entgegengesetzt gerichtet und betraglich proportional zur Auslenkung des Körpers aus der Ruhelage.</td>
            </tr>
            <tr>
              <td>Phasenwinkel</td>
              <td>$$ \varphi = ωt  = 2\pi f t  $$</td>
              <td>
                <b><img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"></b> = Phasenwinkel [rad]<br>
                <b>ω</b> = 2πf Kreisfrequenz [1/s]<br>
                <b>f</b> = Frequenz [1/s]<br>
                <b>t</b> = Zeit [s]
              </td>
            </tr>
            <tr>
              <td>Auslenkung</td>
              <td>$$ y = \hat{y}\cdot \sin(\varphi ) $$</td>
              <td>
                <b>y</b> = Auslenkung nach Ablauf der Zeit t [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/y.png" style="max-height:17px; max-width:17px"> = Auslenkungsmaximum [m]<br>
                <img src="bilder/schwingungen_und_wellen/harmonische_schwingung/phi.png" style="max-height:14px; max-width:14px"> = Phasenwinkel [rad]
              </td>
            </tr>
          </tbody>
        </table>


        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>