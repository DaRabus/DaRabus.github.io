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
            <li class="toc-entry toc-h2"><a href="#impuls">Impuls</a></li>
            <li class="toc-entry toc-h2"><a href="#impulserhaltungssatz">Impulserhaltungssatz</a></li>
            <li class="toc-entry toc-h2"><a href="#kraft">Kraft</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Mechanik</h1>

          <p class="bd-lead">Die Mechanik beschäftigt sich mit Grundeigenschaften von Körpern und Stoffen (Volumen, Masse, Dichte), mit dem Aufbau von Stoffen, mit der Bewegung von Körpern sowie mit Kräften und deren Wirkungen.</p>

          <h2 id="impuls">Impuls</h2>

              <p>Unter dem Impuls eines Körpers versteht man das Produkt aus seiner Masse und seiner geschwindigkeit. Der Impuls ist eine vektorielle Grosse. Er hat die Richtung der Geschwindikgkeit.</p>

              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Bezeichnung</th>
                    <th scope="col">Formel</th>
                    <th scope="col">Parameter</th>
                    <th scope="col">Einheiten</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Impuls</td>
                    <td>$$ p:=m \cdot v $$</td>
                    <td><b>p</b> Impuls des Körpers<br><b>m</b> Masse des Körpers<br><b>v</b> Geschwindigkeit des Körpers</td>
                    <td>$$N\cdot s = kg \frac{ m }{ s }$$</td>
                  </tr>
                </tbody>
              </table>

        <h2 id="impulserhaltungssatz">Impulserhaltungssatz</h2>

          <p>Der Gesamtimpuls eines abgeschlossenen Systems (es wirken keine äusseren Kräfte) ist konstant.</p>

          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Bezeichnung</th>
                    <th scope="col">Formel</th>
                    <th scope="col">Parameter</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Impulserhaltungssatz</td>
                    <td>$$ p= p_1 + p_2 + \cdots + p_n = \sum_{i=1}^{n} p_i = konstant $$</td>
                    <td><b>p</b> Gesamtimpuls<br><b>p1,p2..</b> Impulse der Körper</td>
                  </tr>
                </tbody>
              </table>

          <p>Anwendung bei Kollisionen:</p>

          <table class="table">
                <thead>
                  <tr>
                    <th scope="col">vor dem Zusammenstoss</th>
                    <th scope="col">beim Zusammenstoss</th>
                    <th scope="col">nach dem Zusammenstoss</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><img src="bilder/mechanik/impuls1.png" style="max-height:100%; max-width:100%"></td>
                    <td><img src="bilder/mechanik/impuls2.png" style="max-height:100%; max-width:100%"></td>
                    <td><img src="bilder/mechanik/impuls3.png" style="max-height:100%; max-width:100%"></td>
                  </tr>
                </tbody>
              </table>
              <div class="card text-center">
                <div class="card-header">
                  auflösen nach gesuchter Grösse
                </div>
                <div class="card-body">
                  $$ P_{ 0 } + \tilde{P_{ 0 }} = P_{ E } + \tilde{P_{ E }} $$
                  $$ m_{0} \cdot v_{0} + \tilde{m_{0}} \cdot \tilde{v_{0}} = m_{E} \cdot v_{E} + \tilde{m_{E}} \cdot \tilde{v_{E}} $$
                </div>
              </div>
              <br>

        <h2 id="kraft">Kraft</h2>
        <p>Der physikalische Kraftbegriff geht wesentlich auf Isaac Newton zurück, der im 17. Jahrhundert in den drei newtonschen Gesetzen die Grundlagen der klassischen Mechanik schuf. Dabei definierte er die Kraft als zeitliche Änderung des Impulses und identifizierte sie als Ursache für jede Veränderung des Bewegungszustandes eines Körpers.</p>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">Bezeichnung</th>
              <th scope="col">Formel</th>
              <th scope="col">Parameter</th>
              <th scope="col">Einheiten</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Kraft</td>
              <td>$$ F = \frac{ \Delta p }{ \Delta t } \equiv \frac{ Impulsübertrag }{ benötigte Zeit }$$</td>
              <td><b>F</b> = Newton</td>
              <td>$$ 1 N \coloneqq \frac{ m \cdot kg }{ s^{ 2 } } $$</td>
            </tr>

          </tbody>
        </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>