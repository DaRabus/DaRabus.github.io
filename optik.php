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
            <li class="toc-entry toc-h2"><a href="#lichtausbreitung">Lichtausbreitung</a></li>
            <li class="toc-entry toc-h2"><a href="#reflexion">Reflexion</a></li>
            <li class="toc-entry toc-h2"><a href="#brechung">Brechung</a></li>
            <li class="toc-entry toc-h2"><a href="#linsen">Linsen</a></li>
            <li class="toc-entry toc-h2"><a href="#spaerische_oberflaechen">Sphärische Oberflächen</a></li>
            <li class="toc-entry toc-h2"><a href="#optische_geraete">Optische Geräte</a></li>
            <li class="toc-entry toc-h2"><a href="#zerlegung_des_lichts">Zerlegung des Lichts</a></li>
            </ul>
          </div>


        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="optik">Optik</h1>
          <p class="bd-lead">Die Optik, auch Lehre vom Licht genannt, ist ein Gebiet der Physik und beschäftigt sich mit der Ausbreitung von Licht sowie dessen Wechselwirkung mit Materie, insbesondere im Zusammenhang mit optischen Abbildungen.</p>

        <br><br><h5 id="lichtausbreitung">Lichtausbreitung</h5>
        <table class="table">
          <tr>
            <td width=20%>Divergent</td>
            <td width=42%><p>Strahlen, die von einem gemeinsamen Punkte radial ausstrahlen, sind divergent.</p></td>
            <td><img src="bilder/optik/lichtausbreitung/divergent.jpeg"style="max-height:50%; max-width:30%"></td>
          </tr>
          <tr>
            <td>Konvergent</td>
            <td><p>Strahlen, die auf einen gemeinsamen Schnittpunkt zulaufen, sind konvergent.</p></td>
            <td><img src="bilder/optik/lichtausbreitung/konvergent.jpeg"style="max-height:50%; max-width:30%"></td>
          </tr>
          <tr>
            <td>Diffus</td>
            <td><p>Strahlen, die weder einen gemeinsamen Ausgangspunkt noch einen gemeinsamen Zielpunkt haben, sind diffus.</p></td>
            <td><img src="bilder/optik/lichtausbreitung/diffus.jpeg"style="max-height:50%; max-width:30%"></td>
          </tr>
          <tr>
            <td>Lichtgeschwindigkeit</td>
            <td>$$ c = 299792458 \: \tfrac{m}{s}  $$</td>
            <td><b>c</b> = Lichtgeschwindigkeit [m/s]</td>
          </tr>
        </table>

        <br><br><h5 id="reflexion">Reflexion</h5>
        <table class="table">
            <tr>
              <td width=20%>Reflexionsgesetz</td>
              <td width=42%><p>Einfallswinkel = Reflexionswinkel<br><br>Zudem werden alle Winkel zwischen dem Strahl und dem Einfallslot gemessen.</p></td>
              <td><img src="bilder/optik/reflexion/lot.jpeg"style="max-height:50%; max-width:30%"></td>
            </tr>
            <tr>
              <td>Ebener Spiegel</td>
              <td><p>Der ebene Spiegel erzeugt <b>virtuelle</b> (scheinbare) Bilder, die symmetrisch mit dem Gegenstand zum Spiegel liegen.<br><br>Ein betrachter hat den Eindruck, als kämen die Strahlen von einem Punkt hinter dem Spiegel.</p></td>
              <td><img src="bilder/optik/reflexion/spiegel.jpeg"style="max-height:50%; max-width:35%"></td>
            </tr>
            <tr>
              <td rowspan="2">Konkavspiegel<br>(Hohlspiegel)</td>
              <td><p>Parallel zur optischen Achse auf einen Hohlspiegel fallende Strahlen werden im Brennpunkt F gesammelt.<br><br>Der Brennpunkt halbiert die Strecke:<br> Mittelpunkt M - Scheitelpunkt S.</p></td>
              <td><img src="bilder/optik/reflexion/konkavspiegel.jpeg"style="max-height:50%; max-width:45%"></td>
            </tr>
            <tr>
              <td>$$ f = \frac{r}{2} $$</td>
              <td>
                <b>f</b> = Brennweite [m]<br>
                <b>r</b> = Krümmungsradius [m]<br>
              </td>
            </tr>
            <tr>
              <td rowspan="3">Konstruktion des Spiegelbildes</td>
              <td><p>(1) der Parallelstrahl wird zum Brennpunktstrahl</p></td>
              <td rowspan="3"><img src="bilder/optik/reflexion/spiegelbild.jpeg"style="max-height:60%; max-width:60%"></td>
            </tr>
            <tr>
              <td>(2) Der Brennpunktstrahl wird zum Parallelstrahl</td>
            </tr>
             <tr>
              <td>(3) Der Mittelpunktstrahl wird in sich reflektiert.</td>
            </tr>
            <tr>
              <td rowspan="2">Berechnung des Spiegelbildes</td>
              <td><p>Reelle Bilder sind stets umgekehrt, virtuelle Bilder dagegen aufrecht. Im unteren Fall hat b einen negativen Zahlenwert.</p></td>
              <td rowspan="2"><img src="bilder/optik/reflexion/berechnung.jpeg"style="max-height:50%; max-width:80%"></td>
            </tr>
            <tr>
              <td>$$ G : B = g : b $$</td>
            </tr>
            <tr>
              <td>Abbildungsgleichung</td>
              <td>$$ \frac{1}{f} = \frac{1}{g} + \frac{1}{b} $$</td>
              <td>
                <b>f</b> = Brennweite [m]<br>
                <b>g</b> = Gegenstandsweite [m]<br>
                <b>b</b> = Bildweite [m]<br>
                <b>G</b> = Gegenstandsgrösse [m]<br>
                <b>B</b> = Bildgrösse [m]<br>
              </td>
            </tr>
            <tr>
              <td>Konvexspiegel<br>(Wölbspiegel)</td>
              <td><p>Parallel zur optischen Achse auf einem Wölbspiegel fallende Strahlen werden so reflektiert, als kämen sie vom Zerstreuungspunkt F her.</p></td>
              <td><img src="bilder/optik/reflexion/konvexspiegel.jpeg"style="max-height:50%; max-width:50%"></td>
            </tr>
            <tr>
              <td>Konstruktion Konvexspiegel</td>
              <td><p>Der Konvexspiegel erzeugt stets virtuelle, aufrechte und verkleinerte Bilder.</p></td>
              <td><img src="bilder/optik/reflexion/kspiegel.jpeg"style="max-height:50%; max-width:70%"></td>
            </tr>
          </table>

          <br><br><h5 id="brechung">Brechung</h5>
          <table class="table">
            <tr>
              <td width=20%>Brechung</td>
              <td width=42%><p>An der Grenzoberfläche zweier Medien wird ein LIchtstrahl nicht nur reflektiert, sondern er tritt mit einem Teil seiner Energie in anderer Richtung in das neue Medium über, er wird gebrochen.</p></td>
              <td><img src="bilder/optik/brechung/brechung.jpeg"style="max-height:50%; max-width:50%"></td>
            </tr>
            <tr>
              <td>Brechungsgesetz</td>
              <td>$$ \frac{\sin(\alpha)}{\sin(\beta)} = \frac{c_1}{c_2} = \frac{n_2}{n_1} $$</td>
              <td>
                <b>α</b> = Einfallswinkel [DEG]<br>
                <b>β</b> = Brechungswinkel [DEG]<br>
                <b>c<sub>1</sub></b> = Lichtgeschwindigkeit im Medium 1 [m/s]<br>
                <b>c<sub>2</sub></b> = Lichtgeschwindigkeit im Medium 2 [m/s]<br>
                <b>n<sub>1</sub></b> = Brechzahl im Medium 1 [-]<br>
                <b>n<sub>2</sub></b> = Brechzahl im Medium 2 [-]
              </td>
            </tr>
            <tr>
              <td rowspan="2" width=20%>Übergänge</td>
              <td width=42%>$$ n > 1$$</td>
              <td><p>Übergänge vom optisch dünneren zum dichteren Medium, erfolgt die Brechung zum Lote hin.</p></td>
            </tr>
            <tr>
              <td>$$ n< 1 $$</td>
              <td>Übergänge vom optisch dichteren zum dünneren Medium, erfolgt die Brechung vom Lote weg.</td>
            </tr>
            <tr>
              <td rowspan="3">Totalreflexion</td>
              <td><p>Beim Übergang dichteres - dünneres Medium kann der Einfallswinkel einen bestimmten Grenzwert (α<sub>G</sub>) nicht überschreiten.</p></td>
              <td><img src="bilder/optik/brechung/tr1.jpeg"style="max-height:50%; max-width:80%"></td>
            </tr>
            <tr>
              <td><p>Wenn der Einfallswinkel grösser dem Grenzwert ist (α > α<sub>G</sub>), tritt Totalreflexion ein.</p></td>
              <td><img src="bilder/optik/brechung/tr2.jpeg"style="max-height:50%; max-width:80%"></td>
            </tr>
            <tr>
              <td>$$ \sin(\alpha_G) = \frac{c_1}{c_2} = \frac{n_2}{n_1} = n $$</td>
              <td>
                <b>α<sub>G</sub></b> = Grenzwinkel [DEG] oder [RAD]<br>
                <b>c<sub>1</sub></b> = Lichtgeschwindigkeit in dichteren Medium [m/s]<br>
                <b>c<sub>2</sub></b> = Lichtgeschwindigkeit im dünneren Medium [m/s]<br>
                <b>n<sub>1</sub></b> = Brechzahl im Medium 1 [-]<br>
                <b>n<sub>2</sub></b> = Brechzahl im Medium 2 [-]<br>
                <b>n</b> = Brechzahl [-]
              </td>
            </tr>
            <tr>
              <td rowspan="2">Planparallele Platte</td>
              <td>Beim Durchgang durch eine planparallele Platte erfährt ein Lichtstrahl keine Richtungsänderung, sonder nur eine Parallelverschiebung.<br><br>Wenn das Medium beiderseits der Platte gleich ist, dann gilt folgende Formel:</td>
              <td><img src="bilder/optik/brechung/platte.jpeg"style="max-height:50%; max-width:70%"></td>
            </tr>
            <tr>
              <td>$$ a = \frac{d \cdot \sin(\alpha - \beta)}{\cos(\beta)} $$</td>
              <td>
                <b>a</b> = Parallelverschiebung des Strahls [m]<br>
                <b>d</b> = Diche der Platte [m]<br>
                <b>α</b> = Einfallswinkel an der 1. Grenzfläche [DEG]<br>
                <b>β</b> = Brechungswinkel an der 1. Grenzfläche [DEG]<br>
              </td>
            </tr>
            <tr>
              <td rowspan="2">Scheinbare Dicke</td>
              <td><p>Infolge der Strahlenbrechung erscheint eine planparallele platte beim Hindurchblicken von einer geringeren Dicke.</p></td>
              <td><img src="bilder/optik/brechung/dicke.jpeg"style="max-height:50%; max-width:70%"></td>
            </tr>
            <tr>
              <td>$$ d' = \frac{d}{n} $$</td>
              <td>
                <b>d'</b> = Scheinbare Dicke [m]<br>
                <b>d</b> = Diche der Platte [m]<br>
                <b>n</b> = Brechzahl der Platte [-]
              </td>
            </tr>
          </table>


          <br><br><h5 id="linsen">Linsen</h5>
          <table class="table">
            <tr>
              <td rowspan="2" width=20%>Konvexlinse</td>
              <td width=42%><p>(a) bikonvex<br>(b) plankonvex<br>(c) konkavkonvex</p></td>
              <td rowspan="2"><img src="bilder/optik/brechung/konvexlinse_achse.jpeg"style="max-height:50%; max-width:100%"></td>
            </tr>
            <tr>
              <td><p>Parallel zur optischen Achse druch eine Konvexlinse tretende Strahlen werden im Brennpunkt F gesammelt. Sein Abstand von der Linse ist die Brennweite f.</p></td>
            </tr>
            <tr>
              <td rowspan="2" width=20%>Konkavlinse</td>
              <td width=42%><p>(a) bikonkav<br>(b) plankonkav<br>(c) konvexkonkav</p></td>
              <td rowspan="2"><img src="bilder/optik/brechung/konkavlinse.jpg"style="max-height:50%; max-width:100%"></td>
            </tr>
            <tr>
              <td><p>Parallel zur optischen Achse durch eine Konkavlinse tretende Strahlen werden so gebrochen, als kämen sie von einem vor der Linse liegenden Brennpunkt F. Sein abstand ist die Brennweite f, die hier einen negativen Zahlenwert besitzt.<br>Die Brechzahl von Zerstreuungslinsen ist <b>negativ</b>.</p></td>
            </tr>
            <tr>
              <td>Brechkraft</td>
              <td>$$ D = \frac{1}{f} $$</td>
              <td>
                <b>D</b> = Brechkraft (Dioptrie dpt) [1/m]<br>
                <b>f</b> = Brennweite [m]
              </td>
            </tr>
            <tr>
              <td rowspan="2">Konstruktion des Linsenbildes</td>
              <td rowspan="2">Zur Bildkonstruktion benutzt man mindestens 2 oder 3 "ausgezeichneten Strahlen". Diese sind:
                <br><br>- der <b>Parallelstrahl</b>, er wird zum Brennpunktstrahl;<br>
                - der <b>Brennpunktstrahl</b>, er wird zum Parallelstrahl;<br>
                - der <b>Mittelpunktstrahl</b>, er geht ohne Richtungsänderung durch die Linse.
              </td>
              <td><img src="bilder/optik/brechung/konstruktion1.jpeg"style="max-height:50%; max-width:100%"></td>
            </tr>
            <tr>
              <td><img src="bilder/optik/brechung/konstruktion2.jpeg"style="max-height:50%; max-width:90%"></td>
            </tr>
            <tr>
              <td>Abbildungsgesetze</td>
              <td>$$ D = \frac{1}{f} $$</td>
              <td><img src="bilder/optik/brechung/abbildung.jpeg"style="max-height:50%; max-width:100%"></td>
            </tr>
            <tr>
              <td>Lateralvergrösserung</td>
              <td>$$ V = \frac{B}{G} = -\frac{b}{g} $$</td>
              <td>
                <b>V</b> = Vergrösserung [-]<br>
                <b>B</b> = Bildgrösse [m]<br>
                <b>G</b> = Gegenstandsgrösse [m]<br>
                <b>b</b> = Bildweite [m]<br>
                <b>g</b> = Gegenstandsweite [m]
              </td>
            </tr>
            <tr>
              <td>System dünner Linsen<br>Brennweite (zwei sphärische Linsen, d = 0) </td>
              <td>$$ \frac{1}{f} = \frac{1}{f_1} + \frac{1}{f_2}  $$</td>
              <td>
                <img src="bilder/optik/geometrische_optik/system_duenner_linsen.jpeg"style="max-height:50%; max-width:70%"><br>
                <b>f</b> = Brennweite des Systems [m]<br>
                <b>f<sub>1</sub></b> = Brennweite der Linse 1 [m]<br>
                  <b>f<sub>2</sub></b> = Brennweite des Linse 2 [m]
              </td>
            </tr>
            <tr>
              <td width=20%>Bestimmung der Brennweite <br>(dünne Linsen)</td>
              <td>$$ \frac{1}{f} = (\frac{n_{\text{Linse}}}{n_{\text{Umgebung}}}-1)(\frac{1}{r_{1}}-\frac{1}{r_{2}}) $$</td>
              <td>
                <b>f</b> = Brennweite [m]<br>
                <b>n<sub>Linse</sub></b> = Brechzahl Linse [-]<br>
                <b>n<sub>Umgebung</sub></b> = Brechzahl Umgebung [-]<br>
                <b>r<sub>1</sub></b> = Radius [m]<br>
                <b>r<sub>2</sub></b> = Radius [m]
              </td>
            </tr>
            <tr>
              <td>Dicke Linsen</td>
              <td><p>Linsen, deren Dicke nicht klein genug gegenüber ihrer Brennweite ist, heissen dicke Linsen. Bei dünnen Linsen kann man die beiden Brechungen an den Oberflächen durch eine in der Mittelebene ersetzen.</p></td>
              <td><img src="bilder/optik/brechung/dick_duenn.jpeg"style="max-height:50%; max-width:80%"></td>
            </tr>
            <tr>
              <td width=20%>Bestimmung der Brennweite <br>(dünne Linsen)</td>
              <td>$$ \frac{1}{f} = (\frac{n_{Linse}}{n_{Umgebung}}-1)(\frac{1}{r_{1}}-\frac{1}{r_{2}}+(1-\frac{n_{Umgebung}}{n_{Linse}})\frac{d}{r_{1}r_{2}}) $$</td>
              <td>
                <b>f</b> = Brennweite [m]<br>
                <b>n<sub>Linse</sub></b> = Brechzahl Linse [-]<br>
                <b>n<sub>Umgebung</sub></b> = Brechzahl Umgebung [-]<br>
                <b>r<sub>1</sub></b> = Radius [m]<br>
                <b>r<sub>2</sub></b> = Radius [m]<br>
                <b>d</b> = Durchmesser [m]
              </td>
            </tr>
            <tr>
              <td>Chromatische Aberration</td>
              <td><p>Die Bilder bekommen Farbsäume, weil Licht unterschiedlicher Wellenlänge verschieden stark gebrochen wird.<br>z.B. Blau stärker als Rot</p></td>
              <td><img src="bilder/optik/brechung/chrom.jpeg"style="max-height:50%; max-width:50%"></td>
            </tr>
            <tr>
              <td>Sphärischer Fehler</td>
              <td><p>Unschärfe im Bild, weil die durch die Randzonen der Linse gehenden Strahlen stärker gebrochen werden.</p></td>
              <td><img src="bilder/optik/brechung/sph.jpeg"style="max-height:50%; max-width:45%"></td>
            </tr>
          </table>


        <br><br><h5 id="spaerische_oberflaechen">Sphärische Oberflächen</h5>
        <table class="table">
          <tr>
            <td width=20%>Brechung an einer einzelnen Oberfläche</td>
            <td>$$ \frac{n_{1}}{g} + \frac{n_{2}}{b} = \frac{n_{2}-n_{1}}{r} $$</td>
            <td width=42%>
              <b>n<sub>1</sub></b> = Brechzahl vom Medium 1 [-]<br>
              <b>n<sub>2</sub></b> = Brechzahl vom Medium 2 [-]<br>
              <b>r</b> = Radius [m]<br>
              <b>b</b> = Bildweite [m]<br>
              <b>g</b> = Gegenstandsweite [m]
            </td>
          </tr>
          <tr>
            <td>Lateralvergrösserung für sphärische Oberflächen</td>
            <td>$$ V = \frac{B}{G} = - \frac{n_{1}\:b}{n_{2} \:g} $$</td>
            <td>
              <b>n<sub>1</sub></b> = Brechzahl vom Medium 1 [-]<br>
              <b>n<sub>2</sub></b> = Brechzahl vom Medium 2 [-]<br>
              <b>B</b> = Bildgrösse [m]<br>
              <b>G</b> = Gegenstandsgrösse [m]<br>
              <b>b</b> = Bildweite [m]<br>
              <b>g</b> = Gegenstandsweite [m]
            </td>
          </tr>
        </table>


          <br><br><h5 id="optische_geraete">Optische Geräte</h5>
          <table class="table">
            <tbody>
              <tr>
                <td width=20%>Auge</td>
                <td width=42%><p>Es besitzt eine Konvexlinse, die sogenannte Kristalline. Das Anpassen der Brennweite an die jeweilige Gegenstandsweite geschieht unbewusst und heisst <b>Akkommodation</b>.<br> Die kleinste Entfernung, auf die das Auge ermüdungsfrei akkomodieren kann, nennt man <b>deutliche Sehweite</b> s. Sie beträgt bei normalsichtigen etwa s = 25cm</p></td>
                <td><img src="bilder/optik/optische_geraete/auge.jpeg"style="max-height:50%; max-width:32%"></td>
              </tr>
              <tr>
                <td>Weitsichtig</td>
                <td><p>Der Brennpunkt liegt zu weit hinten.</p></td>
                <td><img src="bilder/optik/optische_geraete/weitsichtig.jpeg"style="max-height:50%; max-width:30%"></td>
              </tr>
              <tr>
                <td>Kurzsichtig</td>
                <td><p>Der Brennpunkt liegt zu weit vorn.</p></td>
                <td><img src="bilder/optik/optische_geraete/kurzsichtig.jpeg"style="max-height:50%; max-width:33%"></td>
              </tr>
              <tr>
                <td>Sehwinkel</td>
                <td>$$ \tan(\delta_0)= \frac{G}{g}  $$</td>
                <td><img src="bilder/optik/optische_geraete/sehwinkel_2.jpeg"style="max-height:50%; max-width:80%"><br>
                  <b>δ<sub>0</sub></b> = Sehwinkel ohne Instrument [DEG]<br>
                  <b>G</b> = Gegenstandsgrösse [m]<br>
                  <b>g</b> = Gegenstandsweite [m]
                </td>
              </tr>
              <tr>
                <td>Auflösung des Auges</td>
                <td><p>Zwei Gegenstandspunkte können nur dann getrennt wahrgenommen werden, wenn ihre beiden Bildpunkte auf zwei verschiedene Zäpfchen (oder Stäbchen) fallen. Das entspricht einem Sehwinkel von <b>mindesten 1'</b>.</p></td>
                <td></td>
              </tr>
              <tr>
                <td>Vergrösserung</td>
                <td>$$ \tan(\delta) = \frac{B}{b} $$</td>
                <td>
                  <b>δ</b> = Sehwinkel mit Instrument [DEG]<br>
                  <b>B</b> = Bildgrösse [m]<br>
                  <b>b</b> = Bildweite [m]<br>
                </td>
              </tr>
              <tr>
                <td>Vergrösserung eines Instruments</td>
                <td>$$ V = \frac{\delta}{\delta_0} $$</td>
                <td>
                  <b>V</b> = Vergrösserung [-]<br>
                  <b>δ</b> = Sehwinkel mit Instrument [DEG]<br>
                 <b>δ<sub>0</sub></b> = Sehwinkel ohne Instrument [DEG]
                </td>
              </tr>
              <tr>
                <td rowspan="2">Lupe</td>
                <td>$$ V = \frac{s}{f} $$</td>
                <td>
                  <b>V</b> = Vergrösserung [-]<br>
                  <b>s</b> = Deutliche Sehweite (25cm) [m]<br>
                  <b>f</b> = Brennweite [m]
                </td>
              </tr>
              <tr>
                <td>Vielfach wird bei Blick durch die Lupe das Auge auf die deutliche Sehweite s akkommodiert. Das Bild entsteht dann nicht im Unendlichen, sondern im Abstand s = -b.</td>
                <td><img src="bilder/optik/optische_geraete/lupe.jpeg"style="max-height:50%; max-width:80%"><br>
              </tr>
              <tr>
                <td rowspan="2">Mikroskop</td>
                <td>$$ V = V_1 \cdot V_2 = - \frac{l}{f_1} \frac{s}{f_2} $$</td>
                <td>
                  <b>V</b> = Vergrösserung [-]<br>
                  <b>V<sub>1</sub></b> = Vergrösserung des Objektivs [-]<br>
                  <b>V<sub>2</sub></b> = Vergrösserung des Okulars [-]<br>
                  <b>l</b> = Abstand der inneren Brennpunkte F<sub>1</sub>' und F<sub>2</sub> [m]<br>
                  <b>s</b> = Deutliche Sehweite (25cm) [m]<br>
                  <b>f<sub>1</sub></b> = Brennweite des Objektivs [m]<br>
                  <b>f<sub>2</sub></b> = Brennweite des Okulars [m]
                </td>
              </tr>
              <tr>
                <td>Es besteht auf zwei konvexen Linsensystemen, dem <b>Objektiv</b> und dem <b>Okular</b>. Der Gegenstand befindet sich unmittelbar vor dem Brennpunkt F<sub>1</sub> des Okulars. Mehr als zwei Brennweiten hinter dem Objektiv entsteht ein reelles, vergrössertes Zwischenbild. Es liegt unmittelbar hinter dem Brennpunkt F<sub>2</sub> des Okulars. Das Endbild ist vergrössert und umgekehrt.</td>
                <td><img src="bilder/optik/optische_geraete/mikroskop.jpeg"style="max-height:50%; max-width:90%"><br>
              </tr>

              <tr>
                <td rowspan="2">Teleskop</td>
                <td>$$ V = V_1 \cdot V_2 = - \frac{f_1}{f_2} \\ \text{ }\\l = f_1 + f_2$$</td>
                <td>
                  <b>V</b> = Vergrösserung [-]<br>
                  <b>V<sub>1</sub></b> = Vergrösserung des Objektivs [-]<br>
                  <b>V<sub>2</sub></b> = Vergrösserung des Okulars [-]<br>
                  <b>f<sub>1</sub></b> = Brennweite des Objektivs [m]<br>
                  <b>f<sub>2</sub></b> = Brennweite des Okulars [m]<br>
                  <b>l</b> = Länge des fernrohrs, Abstand Objektiv - Okular [m]
                </td>
              </tr>
              <tr>
                <td>Das Teleskop oder auch Fernrohr, besteht aus zwei konvexen Linsensstemen, dem Objektiv und dem Okular. Der Gegenstand befindet sich sehr Weit vor dem Objektiv. Das Zwischenbild entsteht unmittelbar hinter dem Brennpunkt des Objektivs und gleichzeitig innerhalb der Brennweite des Okulars.</td>
                <td><img src="bilder/optik/optische_geraete/fernrohre.jpeg"style="max-height:50%; max-width:100%"><br>
              </tr>
            </tbody>
            </table>

            <br><br><h5 id="zerlegung_des_lichts">Zerlegung des Lichts</h5>
            <table class="table">
              <tr>
                <td width=20%>Lichtzerlegung</td>
                <td width=42%><p>Die Ursache ist die unterschiedliche Geschwindigkeit der einzelnen Wellenlängen im neuen Medium des Prismas. Wird weisse Licht zerlegt, also Licht, das alle Wellenlängen enthält, so entsteht ein als Spektrum bezeichnetes Farbband. Die einzelnen farben nennt man Spektralfarben.</p></td>
                <td align="center"><img src="bilder/optik/zerlegung_des_lichts/farben.jpeg"style="max-height:50%; max-width:60%"></td>
              </tr>
              <tr>
                <td>Wellenlängen der einzelnen Farbbereiche</td>
                <td><p>Jede Farbe umfasst einen Wellenlängenbereich, siehe Übersicht!</p></td>
                <td><img src="bilder/optik/zerlegung_des_lichts/wellenlaengen.jpeg"style="max-height:100%; max-width:100%"></td>

              </tr>
            </table>

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>