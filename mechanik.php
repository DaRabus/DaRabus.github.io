<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ('includes/top_head.php'); 
    $loc = "physik";
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
          <?php include ('includes/nav_physik.php'); ?>
        </div>

        
          <div class="d-none d-xl-block col-xl-2 bd-toc">
            <ul class="section-nav">
            <li class="toc-entry toc-h2"><a href="#impuls">Impuls und Kraft</a></li>
            <li class="toc-entry toc-h2"><a href="#prinzipien">Newton-Prinzipien</a></li>
            <li class="toc-entry toc-h2"><a href="#reibungskraefte">Reibungskräfte</a></li>
            <li class="toc-entry toc-h2"><a href="#elastizitätskraefte">Elastizitäts Kräfte</a></li>
            <li class="toc-entry toc-h2"><a href="#stroemungswiderstand">Strömungswiderstand</a></li>
            <li class="toc-entry toc-h2"><a href="#arbeit">Arbeit und Energie</a></li>
            <li class="toc-entry toc-h2"><a href="#leistung">Leistung</a></li>
            <li class="toc-entry toc-h2"><a href="#wirkungsgrad">Wirkungsgrad</a></li>
            <li class="toc-entry toc-h2"><a href="#kinematik">Kinematik</a></li>
            <li class="toc-entry toc-h2"><a href="#drehmoment">Drehmoment</a></li>

            <li class="toc-entry toc-h2"><a href="#analogie">Analogie Translation & Rotation</a></li>
            <li class="toc-entry toc-h2"><a href="#newton">Newton-Noether-Tabelle</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Mechanik</h1> 

          <p class="bd-lead">Die Mechanik beschäftigt sich mit Grundeigenschaften von Körpern und Stoffen (Volumen, Masse, Dichte), mit dem Aufbau von Stoffen, mit der Bewegung von Körpern sowie mit Kräften und deren Wirkungen.</p>

        <br><br><h5 id="impuls">Impuls und Kraft</h5>

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
              <td>Impuls</td>
              <td>$$  p = m \cdot v$$</td>
              <td><p>Unter dem Impuls eines Körpers versteht man das Produkt aus seiner Masse und seiner Geschwindigkeit.</p></td>
            </tr>
            <tr>
              <td>Impuls allgemein</td>
              <td>$$  \vec{p} = m \cdot \vec{v} $$</td>
              <td><b>p</b> = Impuls des Körpers [Ns] = [kg·m/s]<br>
                  <b>m</b> = Masse des Körpers [kg]<br>
                  <b>v</b> = Geschwindigkeit des Körpers [m/s]<br>
              </td>
            </tr>
            <tr>
              <td rowspan="2">Impulserhaltung</td>
              <td>$$  m_{1} \cdot v_{1}  + m_{2} \cdot v_{2} = m_{1,E} \cdot v_{1,E}  + m_{2,E} \cdot v_{2,E}$$</td>
              <td rowspan="2"><img src="bilder/mechanik/impuls/impuls.jpeg"style="max-height:50%; max-width:50%"></td>
            </tr>
            <tr>
              <td>
                <p>Körper erfahren keine bleibenden Verformungen, da die Energiesumme vor und nach dem Stoss gleich ist.</p>
              </td>
            </tr>
            <tr>
              <td>t-v Diagramm</td>
              <td><p>Geschwindigkeiten in Gegenrichtung erhalten einen negativen Zahlenwert.<br> </p></td>
              <td><img src="bilder/mechanik/impuls/impuls_diagramm.jpeg"style="max-height:60%; max-width:60%"></td>
            </tr>
            <tr>
              <td>t-F Diagramm</td>
              <td>$$ \Delta \vec{p} = m \cdot \Delta \vec{v}  = \vec{F} \cdot \Delta t = \int_{t_{1}}^{t_{2}}\vec{F} \; \text{d}t $$</td>
              <td><img src="bilder/mechanik/impuls/ft_diagramm.jpeg"style="max-height:100%; max-width:100%"></td>
            </tr>
            <tr>
              <td>Kraft-Definition </td>
              <td>$$ F := \frac{\Delta p}{\Delta t} \equiv \frac{\text{Impulsübertragung}}{\text{benötigte Zeit}} $$</td>
              <td><b>F</b> = Kraft [N] = [kg·m/s<sup>2</sup>]<br>
                  <b>p</b> = Impuls des Körpers [Ns] = [kg·m/s]<br>
                  <b>t</b> = Dauer der Krafteinwirkung [s]
              </td>
            </tr>
              </tbody>
          </table>

          <br><br><h5 id="prinzipien">Newton-Prinzipien</h5>
          <table class="table">
            <tr>
              <td width=20%>Trägheitsprinzip</td>
              <td width=42%>$$ \text{keine Kräfte} \rArr \text{konstante Geschwindigkeit} $$</td>
              <td><p>Jeder Körper verharrt im Zustand der Ruhe oder gleichförmig geradliniger Bewegung, solange keine Kraft auf ihn wirkt.</p></td>
            </tr>
            <tr>
              <td>Aktionsprinzip</td>
              <td>$$ \frac{\Delta \vec{p}}{\Delta t}=\vec{F} = \vec{F}_1 +...+\vec{F}_n $$</td>
              <td><p>Wirkt auf einen Körper eine Kraft, so wird er in Richtung der Kraft beschleunigt.</p></td>
            </tr>
            <tr>
              <td>Aktionsprinzip</td>
              <td>$$ F_{\text{Res}1} = -F_{\text{Res}2} $$</td>
              <td><p>Besteht zwischen zwei Körpern A und B eine Kraftwirkung, so ist die Kraft, welche von A auf B ausgeübt wird, der Kraft, die B auf A ausübt entgegengesetzt gleich.<br>("Actio = Reactio")</p>
              </td>
            </tr>
          </table>

          <table class="table">
            <tr>
              <td rowspan="2" width=20%>Anwendung Aktionsprinzip</td>
              <td width=42%>$$ m\cdot \vec{a} = \vec{F} = \vec{F}_g + \vec{F}_N+\vec{F}_{ela}+\vec{F}_p $$</td>
              <td rowspan="2"><img src="bilder/mechanik/impuls/aktionsprinzip.png"style="max-height:100%; max-width:100%"></td>
            </tr>
            <tr>
              <td><p>- linke Seite Wirkung <br>- rechte Seite äussere Einflüsse<br> <b>Auflösen nach der gesuchten Grösse</b></p></td>
            </tr>
          </table>

          <br><br><h5 id="reibungskraefte">Reibungskräfte</h5>
          <table class="table">
            <tr>
              <td rowspan="2" width=20%>Haftreibung</td>
              <td width=42%>$$ F_{R,H} \leq \mu_H \cdot F_N $$</td>
              <td rowspan="4"><img src="bilder/mechanik/reibung/reibung.jpeg"style="max-height:100%; max-width:70%"></td>
            </tr>
            <tr>
              <td><p><b>µ<sub>H</sub></b> = Haftreibungskoeffizient = [-]</p></td>
            </tr>
            <tr>
              <td rowspan="2" width=20%>Gleitreibung</td>
              <td width=42%>$$ F_{R,G} = \mu_G \cdot F_N $$</td>
            </tr>
            <tr>
              <td><p><b>µ<sub>G</sub></b> = Gleitreibungskoeffizient = [-]</p></td>
            </tr>
            <tr>
              <td>Rollreibung</td>
              <td>$$ F_{R,R} = \mu_R \cdot F_N $$</td>
              <td><p><b>µ<sub>R</sub></b> = Rollreibungskoeffizient = [-]</p></td>
            </tr>
          </table>

          <br><br><h5 id="elastizitätskraefte">Elastizitäts Kräfte</h5>
          <table class="table">
            <tr>
              <td width=20%>Federkonstante D</td>
              <td width=42%><p>Innerhalb der Elastizitätsgrenze des Materials sind Kraft und Deformierung proportional.</p></td>
              <td><img src="bilder/mechanik/feder/d.jpeg"style="max-height:100%; max-width:50%"></td>
            </tr>
            <tr>
              <td rowspan="2" width=20%>Federkraft</td>
              <td width=42%>$$ F_{ela} = D \cdot x = D \cdot (s-s_M) $$</td>
              <td rowspan="2"><img src="bilder/mechanik/feder/situation.png"style="max-height:100%; max-width:100%"></td>
            </tr>
            <tr><td><p><b>s</b> bzw. <b>x</b> kann mit Vorzeichen verwendet werden.</p></td></tr>
          </table>

          <br><br><h5 id="stroemungswiderstand">Strömungswiderstand</h5>
          <table class="table">
            <tr>
              <td width=20%>Laminare Strömung<br>(ohne Wirbel)</td>
              <td width=42%>$$ F_v = \frac{1}{2} \cdot C_v \cdot \eta \cdot L \cdot v $$</td>
              <td><img src="bilder/mechanik/stroemung/laminar.png"style="max-height:100%; max-width:100%">
                <b>F<sub>v</sub></b> = laminarer Strömungswiderstand  = [N]<br>
                <b>C<sub>v</sub></b> = Laminarer Widerstandsbeiwert [-]<br>
                <b>η</b> = Viskosität des Mediums = [kg/m·s]<br>
                <b>L</b> = Länge = [m]<br>
                <b>v</b> = Geschwindigkeit = [m/s]
              </td>
            </tr>
            <tr>
              <td width=20%>Turbulente Strömung<br>(mit Wirbel)</td>
              <td width=42%>$$ F_w = \frac{1}{2} \cdot C_w \cdot \varrho \cdot A \cdot v^2 $$</td>
              <td><img src="bilder/mechanik/stroemung/turbulent.png"style="max-height:100%; max-width:100%">
                  <b>F<sub>w</sub></b> = Turbulenter Strömungswiderstand  = [N]<br>
                  <b>C<sub>w</sub></b> = Turbulenter Widerstandsbeiwert [-]<br>
                  <b>ϱ</b> = Dichte des Mediums = [kg/m<sup>3</sup>]<br>
                  <b>A</b> = Körperquerschnitt max. = [m<sup>2</sup>]<br>
                  <b>v</b> = Geschwindigkeit = [m/s]
              </td>
            </tr>
          </table>

          <br><br><h5 id="arbeit">Arbeit und Energie</h5>
          <table class="table">
            <tr>
              <td rowspan="3" width=20%>Arbeit</td>
              <td width=42%>$$ \Delta W = \vec{F} \cdot (S_E - S_0)  =\vec{F} \cdot \Delta \vec{s} $$</td>
              <td ><img src="bilder/mechanik/arbeit/konst.jpeg"style="max-height:100%; max-width:50%"><br><b>W</b> = Arbeit [N·m] = [J]</td>
            </tr>
            <tr>
              <td width=42%>$$ \Delta W := \int_{S_1}^{S_2}F \; \text{d}s $$</td>
              <td rowspan="2"><img src="bilder/mechanik/arbeit/n_konst.jpeg"style="max-height:100%; max-width:50%"></td>
            </tr>
            <tr><td><p>Die Arbeit ist das Wegintegral der Kraft.</p></td></tr>
            <tr>
              <td>Energiebegriff</td>
              <td>$$ \Delta E = W = [Nm] =  [J]  $$</td>
              <td>Die Idee ist es Arbeit in einem System zu speichern. Vergleichen kann man es mit <br><b>Arbeit</b> vgl. Zahlung, Umsatz <br><b>Energie</b> vgl. Vermögen, Kapital </td>
            </tr>
            <tr>
              <td>Potentielle Energie</td>
              <td>$$ E_{pot} = m \cdot g \cdot h  $$</td>
              <td>
                <b>E<sub>pot</sub></b> = Hubarbeit = [J]<br>
                <b>m</b> = Masse  = [Kg]<br>
                <b>g</b> = Fallbeschleunigung (Erde: g≈9.81) [m/s<sup>2</sup>]<br>
                <b>h</b> = Höhe über Bezugsniveau = [m]
              </td>
            </tr>
            <tr>
              <td>Kinetische Energie</td>
              <td>$$ E_{kin} = \frac{1}{2} \cdot m \cdot v^2 $$</td>
              <td>
                <b>E<sub>kin</sub></b> = Beschleunigungsarbeit = [J]<br>
                <b>m</b> = Masse  = [Kg]<br>
                <b>v</b> = Geschwindigkeit [m/s]
              </td>
            </tr>
            <tr>
              <td>Elastische Energie</td>
              <td>$$ E_{ela} = \frac{1}{2} \cdot D \cdot (s-s_M)^2 $$</td>
              <td>
                <b>E<sub>ela</sub></b> = Energie einer gespannten Feder = [J]<br>
                <b>D</b> = Federkonstante  = [N/m]<br>
                <b>s</b> = Strecke [m]
              </td>
            </tr>
            <tr>
              <td>Reibungsenergie</td>
              <td>$$ E_{r} = \mu \cdot F_N \cdot s $$</td>
              <td>
                <b>E<sub>r</sub></b> = Reibungsarbeit = [J]<br>
                <b>μ</b> = Haftreibung <br>
                <b>F<sub>N</sub></b> = Normalkraft [N]<br>
                <b>s</b> = Strecke [m] <br>
              </td>
            </tr>
          </table>
          <table class="table">
            <tr>
              <td rowspan="5" width=20%>Beispiel Arbeit und Energie<br>(Verlustfrei)</td>
              <td width=42%>$$ E(h_E,v_E) = E(h_0, v_0) $$</td>
              <td rowspan="5"><img src="bilder/mechanik/arbeit/beispiel.png"style="max-height:100%; max-width:100%"><br><br>
                <b>h<sub>E</sub></b> = Höhe am Ende [m]<br>
                <b>h<sub>0</sub></b> = Höhe am Anfang [m]<br>
                <b>v<sub>E</sub></b> = Geschwindigkeit am Ende [m/s]<br>
                <b>v<sub>0</sub></b> = Geschwindigkeit am Anfang [m/s]
              </td>
            </tr>
            <tr>
              <td>
                $$ E_{pot}(h_{E}) + E_{kin}(v_{E}) = E_{pot}(h_{0}) + E_{kin}(v_{0}) $$
              </td>
            </tr>
            <tr>
              <td>
                $$ m \cdot g \cdot h_E + \frac{m}{2} \cdot v_{E}^{2} = m \cdot g \cdot h_0 + \frac{m}{2} \cdot v_{0}^{2} \left.\begin{matrix}& \\ & \end{matrix}\right|:m $$
              </td>
            </tr>
            <tr>
              <td>
                $$ g \cdot h_E + \frac{v_{E}^{2}}{2}  = g \cdot h_0 + \frac{v_{0}^{2}}{2} $$
              </td>
            </tr>
            <tr>
              <td>Dann nach gesuchter Grösse auflösen.</td>
            </tr>
          </table>

          <table class="table">
                <thead>
                  <tr>
                    <td width=20% >Dokumente</td>
                    <td width=42%>Potentielle und kinetische Energie</td>
                    <td width=19% align="center"><a href="/dokumente/mechanik/Ekin_Epot.pdf" download><font color="000000"><i class="far fa-file-pdf"></font></i></a></td>
                    <td align="center"><a href="#bannerformmodal" data-toggle="modal" data-target=".bd-Dokument1-modal-lg">
                      <font color="black"><i class="far fa-eye"></i></a></td>
                  </tr>
                </tbody>
              </table>
                  <!-- Start Dokument -->
                    <div class="modal fade bd-Dokument1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div align="center" class="modal-content">
                          <img src="/dokumente/mechanik/Ekin_Epot.png"style="max-height:100%; max-width:80%"><br><p>1 von 1 Seiten</p>
                        </div>
                      </div>
                    </div>
                  <!-- End Dokument -->

          <br><br><h5 id="leistung">Leistung</h5>
          <table class="table">
            <tr>
              <td rowspan="2" width=20%>Mittlere Leistung</td>
              <td width=42%>$$ P := \frac{\Delta E}{\Delta t}  \equiv \frac{\text{Zugeführte Energie}}{\text{benötigte Zeit}} $$</td>
              <td rowspan="2"><img src="bilder/mechanik/leistung/konstant.jpeg"style="max-height:100%; max-width:60%"><br><b>P</b> = Leistung (Watt) = [W] = [J/s]</td>
            </tr>
            <tr>
              <td width=42%>$$ P := \frac{\Delta W}{\Delta t}  \equiv \frac{\text{Arbeit}}{\text{benötigte Zeit}} $$</td>
            </tr>
            <tr>
              <td>Leistung vektoriell</td>
              <td>$$ P = \;< \vec{F}_k,\vec{v}>  $$</td>
              <td></td>
            </tr>
          </table>


          <br><br><h5 id="wirkungsgrad">Wirkungsgrad</h5>
          <table class="table">
            <tr>
              <td width=20%>Wirkungsgrad</td>
              <td width=42%>$$ \eta := \frac{P_{Nutz}}{P_{Verb}} \equiv \frac{\text{Nutzen}}{\text{Aufwand}} $$</td>
              <td><img src="bilder/mechanik/wirkungsgrad/situation.png"style="max-height:100%; max-width:100%"></td>
            </tr>
          </table>


        <br><br><h5 id="kinematik">Kinematik</h5>
          <table class="table">
          <tr>
            <td width="20%">Bewegungsfunktion</td>
            <td width="42%">$$ s:[t_0,t_E] \rightarrow [s_a,s_b] \\ \; \\t\mapsto s(t) $$</td>
            <td rowspan="4"><img src="bilder/mechanik/kinematik/translation.jpeg"style="max-height:100%; max-width:60%"></td>
          </tr>
            <tr>
              <td width="20%">Geschwindigkeitsfunktion</td>
              <td>$$ v:[t_0,t_E] \rightarrow \mathbb{R}[m/s] \\ \; \\t\mapsto v(t) :=\dot{s}(t)  $$</td>
            </tr>
            <tr>
              <td width="20%">Beschleunigungsfunktion</td>
              <td>$$ a:[t_0,t_E] \rightarrow \mathbb{R}[m/s^2] \\ \; \\t\mapsto a(t) :=\dot{v}(t)  $$</td>
            </tr>
            <tr>
              <td width="20%">Ruckfunktion</td>
              <td>$$ j:[t_0,t_E] \rightarrow \mathbb{R}[m/s^3] \\ \; \\t\mapsto j(t) :=\dot{a}(t)  $$</td>
            </tr>

            <tr>
              <td>Position Zuwachs</td>
              <td>$$  s = \int_{t_1}^{t_2}v \; \text{d}t $$</td>
              <td><img src="bilder/mechanik/kinematik/s.jpeg"style="max-height:100%; max-width:60%"></td>
            </tr>
            <tr>
              <td>Geschwindigkeitszuwachs</td>
              <td>$$  v = \int_{t_1}^{t_2}a \; \text{d}t $$</td>
              <td><img src="bilder/mechanik/kinematik/v.jpeg"style="max-height:100%; max-width:60%"></td>
            </tr>
        </table>

          <table class="table">
            <tr >
             <th align="left" width="20%">Geradlinige Bewegung</th>
             <td align="center" width=20%><img src="bilder/mechanik/kinematik/1.jpeg"style="max-height:50%; max-width:40%"><br>a = 0<br>v = konstant</td>
             <td align="center" width=30%><img src="bilder/mechanik/kinematik/2.jpeg"style="max-height:50%; max-width:50%"><br>a = konstant<br>v<sub>0</sub> = 0</td>
             <td align="center"><img src="bilder/mechanik/kinematik/3.jpeg"style="max-height:50%; max-width:63%"><br>a = konstant<br>v<sub>0</sub> > 0</td>
            </tr>
            <tr>
              <td>s: Strecke [m]</td>
              <td>$$ v \cdot  t $$</td>
              <td>$$ \frac{v \cdot t}{2} = \frac{a \cdot t^2}{2} = \frac{v^2}{2a} $$</td>
              <td>$$ \frac{t}{2} = (v_0 + v) = v_0 \cdot t+\frac{1}{2}a\cdot t^2 $$</td>
            </tr>
            <tr>
              <td>v: Geschwindigkeit [m/s] </td>
              <td>$$ \frac{s}{t} $$</td>
              <td>$$ \sqrt{2as} = \frac{2 s}{t} = a \cdot t $$</td>
              <td>$$ v_0 + a \cdot t = \sqrt{v^{2}_{0} + 2as} $$</td>
            </tr>
            <tr>
              <td>v<sub>0</sub>: Anfangsgeschwindigkeit [m/s]</td>
              <td>$$ \text{konstant} $$</td>
              <td>$$ 0 $$</td>
              <td>$$ v - a\cdot t = \sqrt{v^2-2as} $$</td>
            </tr>
            <tr>
              <td>a: Beschleunigung [m/s<sup>2</sup>] </td>
              <td>$$ 0 $$</td>
              <td>$$ \frac{v}{t} = \frac{2\cdot s}{t^2} = \frac{v^2}{2 s} $$</td>
              <td>$$ \frac{v-v_0}{t} = \frac{v^2 - v^{2}_{0}}{2 s} $$</td>
            </tr>
            <tr>
              <td>t: Zeit [s] </td>
              <td>$$ \frac{s}{v}$$</td>
              <td>$$ \sqrt{\frac{2s}{a}} = \frac{v}{a} = \frac{2s}{v} $$</td>
              <td>$$ \frac{v-v_0}{a} = \frac{2s}{v_0 + v} $$</td>
            </tr>
          </table>

          <br><br><h5 id="drehmoment">Drehmoment</h5>
          <table class="table">
            <tr >
             <th align="left" width="20%">Drehbewegung um eine feste Achse</th>
             <td align="center" width=20%><img src="bilder/mechanik/drehmoment/1.jpeg"style="max-height:50%; max-width:40%"><br>α = 0<br>ω = konstant</td>
             <td align="center" width=30%><img src="bilder/mechanik/drehmoment/2.jpeg"style="max-height:50%; max-width:50%"><br>α = konstant<br>ω<sub>0</sub> = 0</td>
             <td align="center"><img src="bilder/mechanik/drehmoment/3.jpeg"style="max-height:50%; max-width:70%"><br>α = konstant<br>ω<sub>0</sub> > 0</td>
            </tr>
            <tr>
              <td><img src="bilder/mechanik/drehmoment/phi.svg">: Drehwinkel [rad]</td>
              <td>$$ \omega \cdot  t $$</td>
              <td>$$ \frac{\omega \cdot t}{2} = \frac{\alpha \cdot t^2}{2} = \frac{\omega^2}{2\alpha}  $$</td>
              <td>$$ \frac{t}{2} = (\omega_0 + \omega) = \omega_0 \cdot t+\frac{1}{2}a\cdot t^2 $$</td>
            </tr>
            <tr>
              <td>ω: Winkelgeschwindigkeit [1/s] </td>
              <td>$$ \frac{ \varphi }{t} = \frac{2\pi}{\small T=\text{Umlaufzeit}} $$</td>
              <td>$$ \sqrt{2a \varphi } = \frac{2  \varphi }{t} = \alpha \cdot t $$</td>
              <td>$$ \omega_0 + \alpha \cdot t = \sqrt{\omega^{2}_{0} + 2\alpha  \varphi } $$</td>
            </tr>
            <tr>
              <td>ω<sub>0</sub>: Anfangsgeschwindigkeit [1/s]</td>
              <td>$$ \text{konstant} $$</td>
              <td>$$ 0 $$</td>
              <td>$$ \omega - \alpha \cdot t = \sqrt{\omega^2-2 \alpha \varphi} $$</td>
            </tr>
            <tr>
              <td>α: Winkelbeschleunigung [1/s<sup>2</sup>] </td>
              <td>$$ 0 $$</td>
              <td>$$ \frac{\omega}{t} = \frac{2 \cdot \varphi }{t^2} = \frac{\omega^2}{2 \varphi} $$</td>
              <td>$$ \frac{\omega-\omega_0}{t} = \frac{\omega^2 - \omega^{2}_{0}}{2 \varphi} $$</td>
            </tr>
            <tr>
              <td>t: Zeit [s] </td>
              <td>$$ \frac{\varphi}{\omega}$$</td>
              <td>$$ \sqrt{\frac{2 \varphi}{\alpha}} = \frac{\omega}{\alpha} = \frac{2\varphi}{\omega} $$</td>
              <td>$$ \frac{\omega-\omega_0}{\alpha} = \frac{2 \varphi}{\omega_0 + \omega} $$</td>
            </tr>
          </table>


            <table class="table">
            <tr>
              <td width=20%>Bahngeschwindigkeit</td>
              <td width=42%>$$ v(t) := \left | \vec{v}(t) \right | = r\cdot \left | \dot{\varphi }(t) \right | $$</td>
              <td></td>
            </tr>
            
            <tr>
              <td>Bahnbeschleunigung</td>
              <td>$$ a(t) := \left | \vec{a}(t) \right | = r\cdot \left | \ddot{\varphi }(t) \right | $$</td>
              <td></td>
            </tr>
            <tr>
              <td>Bahngeschwindigkeit <br>(ω = konstant)</td>
              <td>$$ v = r\cdot \omega   $$</td>
              <td rowspan="3"><img src="bilder/mechanik/drehmoment/bahnbeschleunigung.jpeg"style="max-height:100%; max-width:70%"></td>
            </tr>
            <tr>
              <td>Bahnbeschleunigung <br>(ω = konstant)</td>
              <td>$$ a_{sp} = \omega \cdot v = \omega^2 \cdot r = \frac{1}{2}\cdot v^2  $$</td>
            </tr>
            <tr>
              <td>Zentripetalbeschleunigung</td>
              <td>$$ a_{z} = \frac{v^2}{r} = r\cdot \omega^2  $$</td>
            </tr>
            <tr>
              <td>Zentripetalkraft (Radialkraft)</td>
              <td>$$ \vec{F}_{z,p} = \frac{m}{r} \cdot v^2 \hat{a}$$</td>
              <td rowspan="2"><img src="bilder/mechanik/drehmoment/kraefte.jpeg"style="max-height:100%; max-width:40%"></td>
            </tr>
            <tr>
              <td>Zentrifugalkraft (Fliehkraft)</td>
              <td>$$ \vec{F}_{z,f} = - \vec{F}_{z,p} $$</td>
            </tr>
            
            </table>

            <table class="table">
            <tr>
              <td width=20% rowspan="3">Drehimpuls</td>
              <td width=42%>$$\vec{L}(t) := \vec{s}(t) \times  \vec{p}(t)  $$</td>
              <td rowspan="3">
                <b>L</b> = Drehimpuls [Kg⋅m<sup>2</sup>/s]<br>
                <b>s</b> = Hebelarm (Strecke) [m] <br>
                <b>p</b> = Impuls [Kg⋅m/s]<br>
                <b>I</b> = Trägheitsmoment [Kg⋅m<sup>2</sup>]<br>
                <b>ω</b> = Winkelgeschwindigkeit [1/s]<br>
                <b>M</b> = Drehmoment [Nm] = [Kg⋅m<sup>2</sup>/s<sup>2</sup>]<br>
                <b>t</b> = Dauer der Beschleunigung [s]
              </td>
            </tr>
            <tr>
              <td>$$ \vec{L} = I \cdot \vec{\omega} $$</td>
            </tr>
            <tr>
              <td>$$ \Delta \vec{L} = I \cdot \Delta \vec{\omega} = \vec{M} \Delta t$$</td>
            </tr>
            <tr>
              <td rowspan="2">Drehmoment</td>
              <td>$$\vec{M}(t) := \vec{s}(t) \times \vec{F}(t) $$</td>
              <td rowspan="2">
                <b>M</b> = Drehmoment [Nm] = [Kg⋅m<sup>2</sup>/s<sup>2</sup>]<br>
                <b>s</b> = Hebelarm (Strecke) [m] <br>
                <b>F</b> = Kraftarm (Kraft) [N] = [Kg⋅m/s<sup>2</sup>]<br>
                <b>I</b> = Trägheitsmoment [Kg⋅m<sup>2</sup>]<br>
                <b>α</b> = Winkelbeschleunigung [1/s<sup>2</sup>]<br>
                <b>r</b> = Kraftarm [m]<br>
                <b>F</b> = wirkende Kraft [N]
              </td>
            </tr>
            <tr>
              <td>
                $$\vec{M} =I \cdot \vec{\alpha} = r \cdot F $$
              </td>
            </tr>
            <tr>
              <td>Trägheitsmoment</td>
              <td>$$ I:= m \cdot r^2 $$</td>
              <td>
                <b>I</b> = Trägheitsmoment [Kg⋅m<sup>2</sup>]<br>
                <b>m</b> = Masse [Kg] <br>
                <b>r</b> = Radius [m]
              </td>
            </tr>
            <tr>
              <td>Energie eines Massenpunktes auf der Kreisbahn</td>
              <td>$$ E_{rot} = \frac{I}{2} \cdot \omega^2 = \frac{L^2}{2\cdot I}  $$</td>
              <td>
                <b>E<sub>rot</sub></b> = Energie eines rotierenden Körpers = [J] = [Kg⋅m<sup>2</sup>/s<sup>2</sup>]<br>
                <b>I</b> = Trägheitsmoment [Kg⋅m<sup>2</sup>]<br>
                <b>ω</b> = Winkelgeschwindigkeit [1/s]<br>
                <b>L</b> = Drehimpuls [Kg⋅m<sup>2</sup>/s]
              </td>
            </tr>
          </table>

          <table class="table">
            <tr>
                <td rowspan="2" width=20%>Drehimpuls-Erhaltung</td>
                <td width=42%>$$ L_0 + \tilde{L}_0 = L_E + \tilde{L}_E $$</td>
                <td rowspan="2"><p>Wechselwirken zwei Objekte ausschliesslich miteinander, dann bleibt ihr Gesamtdrehimpuls erhalten.</p></td>
            </tr>
            <tr>
              <td>$$ I_0 \cdot \omega_0 + \tilde{I}_0 \cdot \tilde{\omega}_0 = I_E \cdot \omega_E + \tilde{I}_E \cdot \tilde{\omega}_E $$</td>
            </tr>
          </table>

          <table class="table">
            <tr>
                <td width=20%>Satz von Steiner</td>
                <td width=42%>$$ I_A = I_S + m \cdot s^2 $$</td>
                <td><p>
                  <b>I<sub>S</sub></b> = Trägheitsmoment eines Körpers, bezogen auf eine durch den Schwehrpunkt gehende Drehachse [Kg⋅m<sup>2</sup>]<br>
                  <b>I<sub>A</sub> </b> = Trägheitsmoment des gleichen Körpers, bezogen auf eine Drehachse [Kg⋅m<sup>2</sup>]<br>
                  <b>m</b> = Masse [Kg]<br>
                  <b>s</b> = Abstand beider parallel zueinander verlaufender Achsen [m] <br>
                </p></td>
            </tr>
            <tr>
                    <td width=20% >Dokumente</td>
                    <td width=42%>Massenträgheitsmoment I<sub>S</sub> einiger Körper</td>
                    <td align="center"><a href="#bannerformmodal" data-toggle="modal" data-target=".bd-Dokument2-modal-lg">
                      <font color="black"><i class="far fa-eye"></i></a></td>
                  </tr>
          </table>

                  <!-- Start Dokument -->
                    <div class="modal fade bd-Dokument2-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div align="center" class="modal-content">
                          <img src="bilder/mechanik/drehmoment/tabelle.jpeg"style="max-height:100%; max-width:80%"><br><p>1 von 1 Seiten</p>
                        </div>
                      </div>
                    </div>
                  <!-- End Dokument -->




          <table class="table">
            <tr>
              <td width=20%>Bewegungsfunktion</td>
              <td width=42%>$$ \vec{s}(t)\begin{bmatrix}x(t)\\ y(t)\\ z(t)\end{bmatrix} = \begin{bmatrix} r\cdot \cos(\varphi (t)) \\ r\cdot \sin(\varphi (t)) \\ 0 \end{bmatrix}  $$</td>
              <td rowspan="2"><img src="bilder/mechanik/drehmoment/situation.png"style="max-height:100%; max-width:100%"></td>
            </tr>
            <tr>
              <td width=20%>Geschwindigkeitsfunktion</td>
              <td width=42%>$$ \vec{v}(t)= \dot{\vec{s}}(t) = \begin{bmatrix} - r\cdot \sin(\varphi (t)) \cdot \dot{\varphi}(t) \\ r\cdot \cos(\varphi (t)) \cdot \dot{\varphi}(t) \\ 0 \end{bmatrix}  $$</td>
            </tr>
             </table>

        <br><br><h5 id="analogie">Analogie zwischen Translation & Rotation</h5>
          <table class="table">
            <thead>
              <tr>
                <th width=25% colspan="2" width=50%>Translation</th>
                <th colspan="2" width=50%>Rotation</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td width=25%>Position:</td><td >$$ s(t) $$</td>
                <td width=25%>Drehwinkel:</td><td >$$ \varphi(t) $$</td>
              </tr>
              <tr>
                <td width=25%>Geschwindigkeit:</td><td >$$ v(t) = \dot{s}(t) $$</td>
                <td width=25%>Winkelgeschwindigkeit:</td><td >$$ \omega (t) = \dot{\varphi}(t) $$</td>
              </tr>
              <tr>
                <td width=25%>Beschleunigung:</td><td >$$ a(t) = \dot{v}(t) $$</td>
                <td width=25%>Winkel-Beschleunigung:</td><td >$$ \alpha (t) = \dot{\omega}(t) $$</td>
              </tr>
            </tbody>
        </table>
        <table class="table">
            <tbody>
              <tr>
                <td width=25%>Masse:</td><td width=25%>$$ m \equiv  konst. $$</td>
                <td width=25%>Trägheitsmoment:</td><td width=25%>$$ I \equiv  konst. $$</td>
              </tr>
              <tr>
                <td width=25%>Impuls:</td><td width=25%>$$ P=m \cdot v $$</td>
                <td width=25%>Drehmoment:</td><td width=25%>$$ L = I \cdot \omega $$</td>
              </tr>
            </tbody>
        </table>

        <br><br><h5 id="newton">Newton-Noether-Tabelle</h5>

          <table class="table">
            <tr>
              <th width=25%>Symmetrietransformation</th>
              <th width=25%>Erhaltungsgrösse</th>
              <th width=25%>Strom</th>
              <th width=25%>Bilanzgleichung</th>
            </tr>
            <tr>
              <td>Zeitverschiebung</td>
              <td>Energie E</td>
              <td>Leistung P</td>
              <td>$$ \dot{E}= P_{1} + ... + P_{n} $$</td>
            </tr>
            <tr>
              <td>Translation</td>
              <td>Impuls <b>p</b></td>
              <td>Kraft <b>F</b></td>
              <td>$$ \dot{p}= F_{1} + ... + F_{n} $$</td>
            </tr>
            <tr>
              <td>Rotation</td>
              <td>Drehimpuls <b>L</b></td>
              <td>Drehmoment <b>M</b></td>
              <td>$$ \dot{L}= M_{1} + ... + M_{n} $$</td>
            </tr>
            <tr>
              <td>U (1) − Eichtransformation</td>
              <td>Elektr. Ladung Q</td>
              <td>Elektr. Strom I</td>
              <td>$$ \dot{Q}= I_{1} + ... + I_{n} $$</td>
            </tr>
          </table>

          

        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>