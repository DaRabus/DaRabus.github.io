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
            <li class="toc-entry toc-h2"><a href="#allgemien">Allgemein</a></li>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Darstellung komplexer Zahlen</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Menge</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Echte Teilmenge</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Teilmenge</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Durchschnittsmenge</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Vereinigungsmenge</a></li></ul>
              <ul><li class="toc-entry toc-h3"><a href="#darstellung">Differenzmenge</a></li></ul>
            
              
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title">Mengenlehre</h1>

          <p class="bd-lead">Die Mengenlehre ist ein grundlegendes Teilgebiet der Mathematik, das sich mit der Untersuchung von Mengen, also von Zusammenfassungen von Objekten, beschäftigt. </p>

          

          <br><br><h5 id="allgemien">Allgemein</h5>

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
                    <td rowspan="2" >Menge</td>
                    <td>$$  b \in A$$</td>
                    <td rowspan="2"><img src="bilder/mengenlehre/menge.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>$$ A = \left \{ a, b, c \right \} $$</td>
                  </tr>
                  <tr>
                    <td rowspan="2" >Echte Teilmenge</td>
                    <td>$$A\subset B  \: \text{oder} \: A \subseteq B $$</td>
                    <td rowspan="2"><img src="bilder/mengenlehre/teilmenge.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>$$A = \left \{ b, d \right \}, B = \left \{ a, b, c, d, e \right \}  $$</td>
                  </tr>
                  <tr>
                    <td rowspan="2">Teilmenge</td>
                    <td>$$A \subseteq  B $$</td>
                    <td rowspan="2"><img src="bilder/mengenlehre/teilmenge_necht.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>$$A = \left \{ a, b, c, d, e \right \}, B = \left \{ a, b, c, d, e \right \}  $$</td>
                  </tr>
                  <tr>
                    <td >Durchschnittsmenge</td>
                    <td>$$ A\cap B $$</td>
                    <td><img src="bilder/mengenlehre/schnittmenge.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td >Vereinigungsmenge</td>
                    <td>$$ A\cup B $$</td>
                    <td><img src="bilder/mengenlehre/vereinigungsmenge.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td >Differenzmenge</td>
                    <td>$$ A \setminus B $$</td>
                    <td><img src="bilder/mengenlehre/differenzmenge.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td >Symmetrische Differenz</td>
                    <td>$$ A \bigtriangleup B $$</td>
                    <td><img src="bilder/mengenlehre/symmetrische_differenz.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td >Komplementärmenge</td>
                    <td>$$ \bar{A}:=G \setminus A $$</td>
                    <td><img src="bilder/mengenlehre/komplement.png" style="max-height:50%; max-width:100%"></td>
                  </tr>
                    </tbody>
                </table>
          


        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>