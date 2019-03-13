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
            
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title">Lineare Abbildungen</h1>

          <p class="bd-lead">Eine lineare Abbildung ist in der linearen Algebra ein wichtiger Typ von Abbildung zwischen zwei Vektorräumen über demselben Körper.</p>

          

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
                    <td>Identität</td>
                    <td>$$ E\rightarrow E, \;x \mapsto x^2 x  $$</td>
                    <td>Die Abbildung, die jedes Element von E auf sich abbildet, heisst die Identität von E oder identische Abbildung von E und wird mit Id<sub>E</sub> bezeichnet.</td>
                  </tr>
                  <tr>
                    <td>Komposition</td>
                    <td>$$ f:E\rightarrow F \; \small \text{ und } \normalsize \; g:F\rightarrow  G \\ \text{ } \\ g \circ f: E\rightarrow G,x \mapsto g (f(x)) $$</td>
                    <td>Wenn der Wertevorrat von f gleich dem Definitionsbereich von g ist, dann kann eine neue Abbildung definiert werden. Es wird gelesen als g nach f.</td>
                  </tr>
                  <tr>
                    <td>Invertierbar</td>
                    <td>$$ f^{-1} $$</td>
                    <td>Eine Abbildung ist genau dann invertierbar, wenn sie <a href="http://localhost:8888/funktionen.php#sur">bijektiv</a> ist.</td>
                  </tr>
                  <tr>
                    <td rowspan="2">Linear</td>
                    <td>$$ f(x+y) = f(x)+ f(y) \small \; \text{ für alle } \;\normalsize x,y \in V $$</td>
                    <td rowspan="2">Diese zwei Bedingungen müssen erfüllt sein, damit die Abbildung linear ist.</td>
                  </tr>
                  <tr>
                    <td>$$ f(rx) = rf(x) \small \; \text{ für alle } \;\normalsize x \in V \small \; \text{ und alle } \;\normalsize r \in \mathbb{R}$$</td>
                  </tr>
                  <tr>
                    <td>Homomorphismen</td>
                    <td>$$ \text{Hom}(V,W) $$</td>
                    <td>Seien V und W Vektorräume, dann wird die Menge aller linearen Abbildungen von V nach W mit Hom(V,W) bezeichnet.</td>
                  </tr>
                  <tr>
                    <td>Isomorphismen</td>
                    <td>$$  $$</td>
                    <td>Isomorphismen sind genau die linearen Abbildungen, welche lineare Inverse besitzen.</td>
                  </tr>
                  <tr>
                    <td>Kern</td>
                    <td>$$ \text{Ker}(f) := f^{-1}(0) = \left \{  x\in V \mid f(x)=0 \right \} $$</td>
                    <td>Die Menge aller Elemente von V, welche nach 0 abgebildet werden. heisst der Kern von f.</td>
                  </tr>
                  <tr>
                    <td>Bild</td>
                    <td>$$ \text{Im}(f) $$</td>
                    <td>Die Menge aller Werte von f heisst das Bild von f.</td>
                  </tr>
                  <tr>
                    <td>Defekt</td>
                    <td>$$ \text{def}(f) := \text{dim}(\text{Ker}(f))$$</td>
                    <td>Wenn der Untervektorraum endlichdimensional ist, nennt man seine Dimension den Defekt von f</td>
                  </tr>
                  <tr>
                    <td>Rang</td>
                    <td>$$ \text{rg}(f) := \text{dim}(\text{Im}(f)) $$</td>
                    <td>Ist der Untervektorraum endlichdimensional, so nennen wir seine Dimension den Rang von f.</td>
                  </tr>
            </tbody>
          </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>