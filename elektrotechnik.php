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
            <li class="toc-entry toc-h2"><a href="#gleichstrom">Gleichstrom</a></li>
            <li class="toc-entry toc-h2"><a href="#ohmsches_gesetz">Ohm'sches Gesetz</a></li>
            <li class="toc-entry toc-h2"><a href="#elektrische_arbeit_und_leistung">Elektrische Arbeit und Leistung</a></li>
            <li class="toc-entry toc-h2"><a href="#wirkungsgrad">Wirkungsgrad</a></li>
            <li class="toc-entry toc-h2"><a href="#stromkreise">Stromkreise</a></li>
            <li class="toc-entry toc-h2"><a href="#kirchhoffsche_saetze">Kirchhoff'sche Sätze</a></li>
            <li class="toc-entry toc-h2"><a href="#elektrische_feldstaerke">Elektrische Feldstärke</a></li>
            <li class="toc-entry toc-h2"><a href="#kondensatoren">Kondensatoren</a></li>
            <li class="toc-entry toc-h2"><a href="#kraefte_im_elektrischen_feld">Kräfte im elektrischen Feld</a></li>
            <li class="toc-entry toc-h2"><a href="#energie_im_elektrischen_feld">Energie im elektrischen Feld</a></li>
            <li class="toc-entry toc-h2"><a href="#stromdichte">Stromdichte</a></li>
            <li class="toc-entry toc-h2"><a href="#magnetische_feld">Magnetische Feld</a></li>
            <li class="toc-entry toc-h2"><a href="#induktivitaet">Induktivität</a></li>
            <li class="toc-entry toc-h2"><a href="#zweipole_pfeilsysteme">Zweipole, Pfeilsysteme</a></li>
            <li class="toc-entry toc-h2"><a href="#verbundene_zweipole">Verbundene Zweipole</a></li>
            <li class="toc-entry toc-h2"><a href="#passive_vierpole">Passive Vierpole</a></li>
            <li class="toc-entry toc-h2"><a href="#wheatstone">Wheatstone</a></li>
            <li class="toc-entry toc-h2"><a href="#periodische_signale">Periodische Signale</a></li>

            

            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Elektrotechnik</h1>

          <p class="bd-lead">Elektrotechnik ist diejenige Ingenieurwissenschaft, die sich mit der Forschung und der Entwicklung von Elektrogeräten befasst, die zumindest anteilig auf elektrischer Energie beruhen.</p>

          <br><br><h5 id="gleichstrom">Gleichstrom</h5>

          <table class="table">
                <thead>
                  <tr>
                    <th scope="col" width=20%>Bezeichnung</th>
                    <th scope="col" width=42%>Formel</th>
                    <th>Grafik</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Elektrische Ladung</td>
                    <td>$$Q=\lbrack 1C \rbrack \equiv \text{ein Coulomb}$$</td>
                    <td ><img src="bilder/elektrotechnik/ladung/teilchen.jpeg"style="max-height:40%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td  width=20%>Elementarladung</td>
                    <td width=42%>$$ e= 1.602\cdot 10^{-19}C  $$</td>
                    <td >Jede elektrische Ladung ist ein Vielfaches der Elementarladung e.</td>
                  </tr>
                  
                  <tr>
                    <td>Ladungsberechnung</td>
                    <td>$$ Q=N \cdot e  $$</td>
                    <td ><b>N</b> = Anzahl der Ladungen (Elektronen)<br><b>e</b> = Elementarladungen</td>
                  </tr>
                  <tr >
                    <td rowspan="2"id="add_und_sub">Ladung <br>bei Stromstärke I = konstant</td>
                    <td>$$ Q = I\cdot \Delta t $$</td>
                    <td  rowspan="2" ><img src="bilder/elektrotechnik/ladung/strom_konstant.png"style="max-height:40%; max-width:100%"></td>
                  </tr>
                  <tr><td>Glühlampe oder beliebiger anderer Leiter im Gleichstromkreis</td></tr>
                  <tr >
                    <td rowspan="2" id="add_und_sub">Ladung <br>bei Stromstärke I ≠ konstant</td>
                    <td>$$ Q = \int_{t_{1}}^{t_{2}}I(t) \;dt $$</td>
                    <td  rowspan="2"><img src="bilder/elektrotechnik/ladung/strom_nicht_konstant.png"style="max-height:40%; max-width:100%"></td>
                  </tr>
                  <tr><td>Entladen eines Kondensators, Aufladen eines Akkumulators</td></tr>
                  <tr>
                    <td>Elektrischer Strom</td>
                    <td>$$I = \frac{Q}{t}$$</td>
                    <td>
                      <b>I</b> = Strom [A]<br>
                      <b>Q</b> = Ladung [C] = [A·s]<br>
                      <b>t</b> = Zeit [s]
                    </td>
                  </tr>
                  <tr>
                    <td>Quellspannung</td>
                    <td>$$U_q = \frac{W_{zu}}{Q}$$</td>
                    <td>
                      <b>U<sub>q</sub></b> = Quellspannung [V]<br>
                      <b>W</b> = Arbeit [J]<br>
                      <b>Q</b> = Ladung [C] = [A·s]
                    </td>
                  </tr>
                  <tr>
                    <td>Spannungsabfall</td>
                    <td>$$U = \frac{W_{ab}}{Q} = \frac{F \cdot s}{Q}$$</td>
                    <td>
                      <b>U</b> = Spannung [V]<br>
                      <b>W</b> = Arbeit [J]<br>
                      <b>Q</b> = Ladung [C] = [A·s]<br>
                      <b>F</b> = Kraft [N] = [kg·m/s<sup>2</sup>]<br>
                      <b>s</b> = Strecke [m]
                    </td>
                  </tr>
                </tbody>
              </table>

                <br><br><h5 id="ohmsches_gesetz">Ohm'sches Gesetz</h5>

                <table class="table">
                  <tr>
                    <td width=20% >Lineare Widerstände</td>
                    <td width=42%>$$ R= \frac{U}{I} $$</td>
                    <td>
                      <b>R</b> = Widerstand [Ω]<br>
                      <b>U</b> = Spannung [V]<br>
                      <b>I</b> = Strom [A] <br>
                    </td>
                  </tr>
                  <tr>
                    <td width=20% >Spezifischer Widerstand</td>
                    <td width=42%>$$ R= \rho \frac{l}{A} $$</td>
                    <td>
                      <b>R</b> = Widerstand [Ω]<br>
                      <b>ρ</b> = Spezifische elektrische Widerstand [Ω·mm<sup>2</sup>/m]<br>
                      <b>l</b> = Länge des Leiters [m] <br>
                      <b>A</b> = Querschnittsfläche [mm<sup>2</sup>]
                    </td>
                  </tr>
                  <tr>
                    <td width=20% >Leitwert oder Konduktivität</td>
                    <td width=42%>$$ G = \frac{1}{R}=\frac{I}{U} $$</td>
                    <td>
                      <b>G</b> = Leitwert [1/Ω]<br>
                      <b>R</b> = Widerstand [Ω]
                    </td>
                  </tr>
                  <tr>
                    <td width=20% >Serieschaltung</td>
                    <td width=42%>$$ R_{ges}= R_{1}+R_{2} $$</td>
                    <td><img src="bilder/elektrotechnik/widerstaende/serie.jpeg"style="max-height:100%; max-width:43%"></td>
                  </tr>
                  <tr>
                    <td width=20% >Parallelschaltung (2)</td>
                    <td width=42%>$$ R_{ges}= \frac{U}{I_{1}+I_{2}}=\frac{R_{1}R_{2}}{R_{1}+R_{2}} $$</td>
                    <td rowspan="2"><img src="bilder/elektrotechnik/widerstaende/parallel.jpeg"style="max-height:100%; max-width:40%"></td>
                  </tr>
                  <tr>
                    <td width=20% >Parallelschaltung (n)</td>
                    <td width=42%>$$ R = \frac{1}{\frac{1}{R_{1}} + \frac{1}{R_{2}} + \frac{1}{R_{3}} + ... + \frac{1}{R_{n}}} $$</td>
                  </tr>
                  <tr>
                    <td width=20%>Formelrad</td>
                    <td width=42%></td>
                    <td align="center"><a href="#bannerformmodal" data-toggle="modal" data-target=".bd-formelrad-modal-lg">
                      <font color="black"><i class="fas fa-dharmachakra"></font></i></a>
                    </td>
                  </tr>
                </table>
                  <!-- Start Formelrad -->
                    <div class="modal fade bd-formelrad-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div align="center" class="modal-content">
                          <br><img src="bilder/elektrotechnik/ladung/FormelradElektronik.jpg"style="max-height:100%; max-width:70%"><br>
                        </div>
                      </div>
                    </div>
                  <!-- End Formelrad -->

                <br><br><h5 id="elektrische_arbeit_und_leistung">Elektrische Arbeit und Leistung</h5>
                <table class="table">
                  <tr>
                    <td  width=20% >Elektrische Arbeit</td>
                    <td width=42%>$$ W = U\cdot Q $$</td>
                    <td>
                      <b>W</b> = Energie (Arbeit) [J] = [W·s]<br>
                      <b>U</b> = Spannung [V]<br>
                      <b>Q</b> = Ladung [C] = [A·s]
                    </td>
                  </tr>
                  <tr>
                    <td  width=20% >Elektrische Leistung</td>
                    <td width=42%>$$ P = \frac{W}{t} \implies P=U\cdot I$$</td>
                    <td>
                      <b>P</b> = Leistung [W]<br>
                      <b>U</b> = Spannung [V]<br>
                      <b>I</b> = Strom [A]<br>
                      <b>t</b> = Zeitraum [s]
                    </td>
                  </tr>
                </table>


                <br><br><h5 id="wirkungsgrad">Wirkungsgrad</h5>

                <table class="table">
                <thead>
                  <tr>
                    <td width=20% >Wirkungsgrad Leistung</td>
                    <td width=42%>$$ \eta =  \frac{P_{N}}{P_{N}+P_{V}}= \frac{P_{N}}{P_{ges}} $$</td>
                    <td>
                      <b>P<sub>N</sub></b> = Nutzleistung P<sub>N</sub><br>
                      <b>P<sub>V</sub></b> = Verlustleistung <br>
                      <b>P<sub>ges</sub> </b>= zugeführte Gesamtleistung
                    </td>
                  </tr>
                  <tr>
                    <td width=20% >Wirkungsgrad Widerstand</td>
                    <td width=42%>$$ \eta = \frac{R_{L}}{R_{L}+R_{i}} $$</td>
                    <td>
                      <b>R<sub>L</sub></b> = Lastwiderstand <br>
                      <b>R<sub>i</sub></b> = Innenwiderstand 
                    </td>
                  </tr>
                </tbody>
              </table>

              <br><br><h5 id="stromkreise">Stromkreise</h5>

                <table class="table">
                <thead>
                  <tr>
                    <td width=20% ></td>
                    <td colspan="2" width=42%>Ersatzspannungsquellen</td>
                    <td colspan="2">Ersatzstromquellen</td>
                  </tr>
                  <tr>
                    <td>Kurzschluss mit R<sub>L</sub> = 0</td>
                    <td width=21% >$$ U_{0} = 0$$</td><td>$$ I = I_{k}=\frac{U_{i}}{R_{i}} $$</td>
                    <td width=19% >$$ U_{0} = 0 $$</td><td>$$ I=I_{k}=I_{i} \\ \small \text{weil} \normalsize \: I_{i}=0 $$</td>
                  </tr>
                  <tr>
                    <td>Leerlauf mit R<sub>L</sub> = ∞</td>
                    <td width=21% >$$ I = 0 $$</td><td>$$ U_{0} = U_{i}$$</td>
                    <td width=19% >$$ I=0 $$</td><td>$$ U_{0} = I_{i} \cdot R_{i} \\ \small \text{weil} \normalsize \: I_{R_{i}} = I_{i}$$</td>
                  </tr>
                  <tr>
                    <td>Abbildung</td>
                    <td colspan="2"><img src="bilder/elektrotechnik/zweipol/spannungsquelle.png"style="max-height:100%; max-width:90%"></td>
                    <td colspan="2"><img src="bilder/elektrotechnik/zweipol/stromquelle.png"style="max-height:100%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>Spannungsteiler</td>
                    <td width=21% >$$ U_{0} = U_{i} \frac{R_{L}}{R_{i}+R_{L}} $$</td><td>$$ I = \frac{U_{i}}{R_{i}+R_{L}} $$</td>
                    <td colspan="2" width=19% ></td>
                  </tr>
                  <tr>
                    <td>Stromteiler</td>
                    <td colspan="2" width=19% ></td>
                    <td width=21% >$$ I_{L} = I_{i} \frac{R_{i}}{R_{i}+R_{L}} $$</td><td>$$ U = I_{i} \frac{R_{i}R_{L}}{R_{i}+R_{L}} $$</td>
                  </tr>
                  <tr>
                    <td>Abbildung</td>
                    <td colspan="2"><img src="bilder/elektrotechnik/zweipol/diagramm.png"style="max-height:50%; max-width:75%"></td>
                    <td colspan="2"><img src="bilder/elektrotechnik/zweipol/diagramm_strom.png"style="max-height:60%; max-width:84%"></td>
                  </tr>
                </tbody>
              </table>


              <br><br><h5 id="kirchhoffsche_saetze">Kirchhoff'sche Sätze</h5>

                <table class="table">
                <thead>
                  <tr>
                    <td rowspan="2" width=20% >Knotenregel</td>
                    <td width=42%>$$ \sum_{k=1}^{n}I_{k}=0 $$</td>
                    <td rowspan="2"><img src="bilder/elektrotechnik/kirchhoffsche_regel/maschenregel.png"style="max-height:35%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>
                      In jedem Knotenpunkt eines Stromkreises ist die Summe der zufliessenden gleich der Summe der abfliessenden Ströme.
                    </td>
                  </tr>
                  <tr>
                    <td rowspan="2">Maschenregel</td>
                    <td width=19%>$$ \sum_{k=1}^{n}U_{k}=0 $$</td>
                    <td rowspan="2"><img src="bilder/elektrotechnik/kirchhoffsche_regel/knotenregel.png"style="max-height:35%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>
                      Beim umlaufen einer Masche ist die Summe aller Spannungen gleich Null.
                    </td>
                  </tr>
                </tbody>
              </table>

              <br><br><h5 id="elektrische_feldstaerke">Elektrische Feldstärke</h5>

                <table class="table">
                <thead>
                  <tr>
                    <td rowspan="2" width=20% >Elektrisches Feld</td>
                    <td width=42% >$$ E = \frac{U}{l} $$</td>
                    <td>
                      <b>E</b> = Elektrische Feldstärke [V/m]<br>
                      <b>U</b> = Spannung [V]<br>
                      <b>l</b> = Strecke [m]
                    </td>
                  </tr>
                  <tr>
                    <td>Die elektrischen Feldlinien verlaufen stets von der positiven zur negativen Ladung.</td>
                    <td><img src="bilder/elektrotechnik/feld/efeld.jpeg"style="max-height:70%; max-width:70%"></td>
                  </tr>
                  <tr>
                    <td>Kräfte im elektrischen Feld</td>
                    <td>$$\vec{F} = Q \vec{E}$$</td>
                    <td>
                      <b>F</b> = Kraft [N]<br>
                      <b>Q</b> = Ladungen<br>
                      <b>E</b> = Elektrische Feldstärke [N/C] [V/m]
                    </td>
                  </tr>
                  <tr>
                    <td width=20% >Äquipotentioallinien</td>
                    <td width=42% ><p>Linien oder Flächen gleichen Potenzials nennt man Äquipotenziallinien oder Äquipotenzialflächen. Sie stehen stets senkrecht zu den Feldlinien:</p></td>
                    <td><img src="bilder/elektrotechnik/feld/aequipotentiallinien.png"style="max-height:70%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td width=20% >Influenz</td>
                    <td width=42% ><p>Bringt man ein Stück Metall in ein elektrisches Feld ein, so bewirkt dieses eine Verschiebung der frei beweglichen Elektronen zur positiven Platte hin; an der zur negativen Platte hin.<br>
                    Im Inneren des Metalls überlagern sich das äußere und das induzierte elektrische Feld. Da beide Felder gleich groß, aber entgegengesetzt gerichtet sind, bleibt das Innere des Metalls somit feldfrei. Dies gilt nicht nur massive metallische Körper, sondern auch für metallische Hohlkörper. In der Technik stellen beispielsweise Autokarosserien so genannte „Faradayische Käfige“ dar.</p></td>
                    <td><img src="bilder/elektrotechnik/feld/plattenkondensator-influenz.png"style="max-height:35%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>Elektrische Feldkonstante</td>
                    <td>Die elektrische Feldkonstante gibt das Verhältnis der elektrischen Flussdichte zur elektrischen Feldstärke im <b>Vakuum</b> an.</td>
                    <td>
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><font color="#30c0d1">(* Elektrische Feldkonstante *)<br></font>enull = 8.854 * 10^(-12);</code></pre></figure>
                    </td>
                  </tr>
                  <tr>
                    <td>Elektrische Flussdichte</td>
                    <td>$$ D = \frac{Q}{A} = \varepsilon _{0}\varepsilon _{r}E $$</td>
                    <td>
                      <b>D</b> = Flussdichte [C/m<sup>2</sup>] = [A·s/m<sup>2</sup>]<br>
                      <b>Q</b> = Ladung [C] = [A·s]<br>
                      <b>A</b> = Oberfläche [m<sup>2</sup>]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante (Vakuum) [A·s/(V·m)] = [F/m] <br>
                      <b>ϵ<sub>r</sub></b> = Dielektrizitätszahl (je nach Medium, meist 1) [-] <br>
                       <b>E</b> = Elektrische Feldstärke [N/C] [V/m]
                    </td>
                  </tr>
                  <tr>
                    <td>Dielektrikum</td>
                    <td>$$ D = \varepsilon _{0}\varepsilon _{r}E $$</td>
                    <td>
                      <b>D</b> = Flussdichte [C/m<sup>2</sup>] = [A·s/m<sup>2</sup>]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante (Vakuum) [A·s/(V·m)] = [F/m] <br>
                      <b>ϵ<sub>r</sub></b> = Dielektrizitätszahl (je nach Medium, meist 1) [-] <br>
                       <b>E</b> = Elektrische Feldstärke [N/C] [V/m]
                    </td>
                  </tr>
                  </tbody>
              </table> 
              <br><br><h5 id="kondensatoren">Kondensatoren</h5>

                <table class="table">
                  <tr>
                    <td width=20% >Kondensator</td>
                    <td width=42%>Ein Kondensator hat zwei ungleichartig geladene Körper, die einen bestimmten Abstand voneinander besitzen. Die Kapazität des Kondensators hängt von der Grösse der Platten und ihrem Abstand sowie dem Material ab.</td>
                    <td><img src="bilder/elektrotechnik/kondensator/kondensator.jpeg"style="max-height:40%; max-width:40%"></td>
                  </tr>
                  <tr>
                    <td width=20% >Kapazität</td>
                    <td width=42%>$$ C = \frac{Q}{U} = \frac{\varepsilon _{0}\varepsilon _{r}A}{l} $$</td>
                    <td>
                      <b>C</b> = Kapazität (Farad) [F] = [A⋅s/V]  <br>
                      <b>Q</b> = Ladungsmenge [C] <br>
                      <b>U</b> = Spannung [V] <br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante (Vakuum) [A·s/(V·m)] = [F/m] <br>
                      <b>ϵ<sub>r</sub></b> = Dielektrizitätszahl (je nach Medium, meist 1) [-] <br>
                      <b>l</b> = Strecke [m]
                    </td>
                  </tr>
                  <tr>
                    <td width=20% >Reihenschaltung</td>
                    <td width=42%>$$ \frac{1}{C_{ges}} = \frac{1}{C_{1}} + \frac{1}{C_{2}} + ...$$</td>
                    <td><img src="bilder/elektrotechnik/kondensator/reihenschaltung.jpeg"style="max-height:60%; max-width:60%"></td>
                  </tr>
                  <tr>
                    <td width=20% >Parallelschaltung</td>
                    <td width=42%>$$ C_{ges} = C_1 + C_2 + ... $$</td>
                    <td><img src="bilder/elektrotechnik/kondensator/parallelschaltung.jpeg"style="max-height:40%; max-width:40%"></td>
                  </tr>
              </table> 

              <br><br><h5 id="kraefte_im_elektrischen_feld">Kräfte im elektrischen Feld</h5>
                  <table class="table">
                    <tr >
                      <td>Kraft auf eine Punktladung</td>
                      <td>$$ F = Q \cdot E $$</td>
                      <td><img src="bilder/elektrotechnik/kondensator/kraft.jpeg"style="max-height:40%; max-width:40%"><br>Punktladung im homogenen elektrischen Feld</td>
                    </tr>
                    <tr >
                    <td>Coulomb-Kraft<br>Kraft zwischen 2 Punktladungen</td>
                    <td>$$ F = \frac{1}{4\pi\varepsilon_0\varepsilon_r }\frac{Q_{1}\cdot Q_{2}}{r^{2}} $$</td>
                    <td>
                      <b>F</b> = Kraft [N]<br>
                      <b>Q<sub>1</sub></b> = Ladung 1 [C] = [A·s]<br>
                      <b>Q<sub>2</sub></b> = Ladung 2 [C] = [A·s]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante (Vakuum) [A·s/(V·m)] = [F/m] <br>
                      <b>ϵ<sub>r</sub></b> = Dielektrizitätszahl (je nach Medium, meist 1) [-] <br>
                      <b>r</b> = Abstand der Massenmittelpunkte [m]
                    </td>
                  </tr>
                  <tr >
                    <td>Coulomb-Kraft (Vektoriell)</td>
                    <td>$$ \vec{F}_{12}(\vec{r}_{1})=\frac{Q_{1}\cdot Q_{2}}{4\pi \varepsilon_0\varepsilon_r \left | \vec{r}_{1}- \vec{r}_{2}\right |^{2}}
                    \frac{(\vec{r}_{1}- \vec{r}_{2})}{\left | \vec{r}_{1}- \vec{r}_{2} \right |} $$</td>
                    <td>
                      <b>F</b> = Kraft [N]<br>
                      <b>Q<sub>1</sub></b> = Ladung 1 [C] = [A·s]<br>
                      <b>Q<sub>2</sub></b> = Ladung 2 [C] = [A·s]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante (Vakuum) [A·s/(V·m)] = [F/m] <br>
                      <b>ϵ<sub>r</sub></b> = Dielektrizitätszahl (je nach Medium, meist 1) [-] <br>
                      <b>r<sub>1</sub></b> = Vektor zu Ladung q1 [m] <br>
                      <b>r<sub>2</sub></b> = Vektor zu Ladung q2 [m]
                    </td>
                  </tr>
                  <tr>
                    <td width=20%>Coulomb-Gesetz</td>
                    <td width=42%>Das Coulomb-Gesetz gibt an, dass die elektrische Kraft F<sub>E</sub> proportional zu 1/r<sup>2</sup> ist. <br><br>Das heißt: Bei Verdopplung des Abstands r zweier Ladungen, wird die elektrische Kraft zwischen ihnen VIER fach kleiner.</td>
                    <td ><img src="bilder/elektrotechnik/ladung/coulomb-kraft.png"style="max-height:40%; max-width:80%"></td>
                  </tr>
                </table>

                  <br><br><h5 id="energie_im_elektrischen_feld">Energie im elektrischen Feld</h5>
                  <table class="table">
                  <tr>
                    <td width=20%>Elektrisches Feld</td>
                    <td width=42%>$$\vec{E}(\vec{r}_{1})=\frac{Q_{2}}{4\pi\varepsilon_0\varepsilon_r \left | \vec{r}_{1} \right |^{3}} \cdot \vec{r}_{1}$$</td>
                    <td><b>E</b> = Arbeit, Energie [A·s/V] = [W/s]<br>
                      <b>Q<sub>2</sub></b> = Ladung 2 [C] = [A·s]<br>
                      <b>ϵ<sub>0</sub></b> = Elektrische Feldkonstante (Vakuum) [A·s/(V·m)] = [F/m] <br>
                      <b>ϵ<sub>r</sub></b> = Dielektrizitätszahl (je nach Medium, meist 1) [-] <br>
                      <b>r<sub>1</sub></b> = Vektor zu Ladung q1 [m] <br>
                    </td>
                  </tr>
                  
                    </tbody>
                </table>


          <br><br><h5 id="stromdichte">Stromdichte</h5>
                <table class="table">
                  <tr>
                    <td width=20%>Stromdichte</td>
                    <td width=42%>Stromdichte bei unterschiedlichem Leiterquerschnitt.</td>
                    <td><img src="bilder/elektrotechnik/stromdichte/stromdichte.jpeg"style="max-height:40%; max-width:60%"></td>
                  <tr>
                    <td width=20%>Stromdichte <br>(homogenen Feld)</td>
                    <td width=42%>$$ \vec{J} = \frac{\vec{I}}{\vec{A}}$$</td>
                    <td>
                      <b>J</b> = Stromdichte [A/m<sup>2</sup>]<br>
                      <b>I</b> = Strom [A]<br>
                      <b>A</b> = Querschnitt [m<sup>2</sup>]
                    </td>
                  </tr>
                  <tr>
                    <td>Stromdichte</td>
                    <td>$$ \vec{J} = \varrho \vec{v}$$</td>
                    <td>
                        <b>J</b> = Stromdichte [A/m<sup>2</sup>]<br>
                        <b>ϱ</b> = Ladungsdichte (Q/V)<br>
                        <b>v</b> = Geschwindigkeit [m/s]
                    </td>
                  </tr>
                </table>


          

              <br><br><h5 id="magnetische_feld">Magnetische Feld</h5>
                <table class="table">
                  <tr>
                    <td width=20% >Magnetische Feldstärke</td>
                    <td width=42%>Zur symbolischen Darstellung eines Magnetfeldes dienen <b>magnetische Feldlinien</b>. Sie laufen ausserhalb des Magneten von Nord- zum Südpol und innerhalb des Magneten zom Südpol zurück zum Nordpol. Sie sind stets in sich geschlossen.</td>
                    <td><img src="bilder/elektrotechnik/magnet/magnetfeld.jpeg"style="max-height:40%; max-width:60%"></td>
                  </tr>
                  <tr>
                    <td width=20% >Magnetischer Fluss</td>
                    <td width=42%>$$ \Phi = BA $$ </td>
                    <td>
                      <b>Φ</b> = magnetischer Fluss (Weber) [Wb] = [V·s]<br>
                      <b>B</b> = magnetische Flussdichte [T] = [N/(A·m)] = [V·s/m<sup>2</sup>]<br>
                      <b>A</b> = Fläche [m<sup>2</sup>]
                    </td>
                  </tr>
                  <tr>
                    <td width=20% >Kraft auf geradlinige Stromleiter</td>
                    <td width=42%>$$ F  = I\cdot l \cdot B $$</td>
                    <td>
                        <b>F</b> = Kraft [N]<br>
                        <b>I</b> = Strom [A]<br>
                        <b>l</b> = Länge [m]<br>
                        <b>B</b> = magnetische Flussdichte (Tesla) [T] = [N/(A·m)]
                    </td>
                  </tr>
                  <tr>
                    <td width=20% >Magnetische Feldstärke</td>
                    <td width=42%>$$ H = \frac{B}{\mu_0 \mu_r } $$</td>
                    <td>
                        <b>H</b> = Magnetische Feldstärke [A/m]<br>
                        <b>B</b> = magnetische Flussdichte [T] = [N/(A·m)] = [V·s/m<sup>2</sup>]<br>
                        <b>μ<sub>0</sub></b> = magnetische Feldkonstante [N/A<sup>2</sup>]<br>
                        <b>μ<sub>r</sub></b> = Permeabilität (je nach Stoff, meist 1) [-]<br>
                    </td>
                  <tr>
                    <td>Magnetische Feldkonstante</td>
                    <td></td>
                    <td>
                      <figure class="highlight"><pre><code class="language-html" data-lang="html"><font color="#30c0d1">(* Magnetische Feldkonstante *)<br></font>mf = (4*Pi)*10^(-7);</code></pre></figure>
                    </td>
                  </tr>
                  <tr>
                    <td width=20% >Feldstärke im Innern einer Ringspule und Zylinderspule</td>
                    <td width=42%>$$ H = \frac{N \cdot I}{l} $$</td>
                    <td><img src="bilder/elektrotechnik/magnet/ringspule.jpeg"style="max-height:40%; max-width:100%"><br><br>
                        <b>H</b> = Magnetische Feldstärke [A/m]<br>
                        <b>N</b> = Anzahl der Wicklungen [-]<br>
                        <b>I</b> = Strom [A]<br>
                        <b>l</b> = Länge [m]
                    </td>
                  </tr>
              </table> 

              <br><br><h5 id="induktivitaet">Induktivität</h5>

                <table class="table">
                  <tr>
                    <td width=20% >Induktivität</td>
                    <td width=42%>$$ I = \frac{U\cdot t}{L} $$</td>
                    <td>
                      <b>I</b> = Strom [A]<br>
                      <b>U</b> = Spannung [V]<br>
                      <b>t</b> = Zeit [s]<br>
                      <b>L</b> = Induktivität (Henry) [H] = [V·s/A]<br>
                    </td>
                  </tr>
                  <tr>
                    <td width=20% >Ring- oder sehr lange Zylinderspule</td>
                    <td width=42%>$$ L = \frac{N^2 \cdot A \mu_0 \mu_r }{l} $$</td>
                    <td>
                      <b>L</b> = Induktivität (Henry) [H] = [V·s/A]<br>
                      <b>N</b> = Anzahl der Wicklungen [-]<br>
                      <b>μ<sub>0</sub></b> = magnetische Feldkonstante [N/A<sup>2</sup>]<br>
                      <b>μ<sub>r</sub></b> = Permeabilität (je nach Stoff, meist 1) [-]<br>
                      <b>A</b> = Spulenquerschnitt [m<sup>2</sup>]<br>
                      <b>l</b> = Länge [m]
                    </td>
                  </tr>
              </table>

            <br><br><h5 id="zweipole_pfeilsysteme">Zweipole, Pfeilsysteme</h5>

                <table class="table">
                  <tr>
                    <td width=20% >Zweipole</td>
                    <td width=42%>$$ I = f(U)$$</td>
                    <td>Zweipole sind Entitäten mit zwei Anschlüssen, die Teil einer elektrischen Schaltung sind. Die zwei Anschlüsse heissen zusammen auch ein Tor.<br>
                        Ein Zweipol wird dadurch beschrieben, wie sich Strom und Spannung einander gegenüber verhalten.
                    </td>
                  </tr>
                  <tr>
                    <td>Passiver Zweipol<br>Erzeuger-Pfeilsystem</td>
                    <td>Passive Zweipole besitzen keine eigene Energiequelle und geben in keinem Betriebszustand im zeitlichen Mittel elektrische Energie ab. Im Betriebsfall setzen sie von außen zugeführte Leistung um. </td>
                    <td rowspan="2"><img src="bilder/elektrotechnik/zweipol/zaehlpfeilsystem.png"style="max-height:40%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>Aktiver Zweipol<br>Verbraucher-Pfeilsystem</td>
                    <td>Aktive Zweipole können Spannungs- oder Stromquellen sein und weitere passive Baugruppen enthalten. In mindestens einem der möglichen Betriebsfälle können sie an den Klemmen im zeitlichen Mittel elektrische Leistung abgeben.</td>
                  </tr>
                  <tr>
                    <td>Ideale Zweipol</td>
                    <td>Ideale Zweipole sind Zweipole, die -nicht-realen- Bedingungen gehorchen, die die Analyse und das Design im Bereich der Elektrotechnik vereinfachen.</td>
                    <td></td>
                  </tr>
              </table>

              <br><br><h5 id="verbundene_zweipole">Verbundene Zweipole</h5>

                <table class="table">
                <thead>
                  <tr>
                    <td width=20% >Arbeitspunkt</td>
                    <td width=42%><p>Der Arbeitspunkt ist ein schaltungstechnisch festgelegter Spannungs-Strom-Wert für ein elektronisches Bauelement, der für eine elektronische Schaltung festgelegt wurde.</p></td>
                    <td ><img src="bilder/elektrotechnik/zweipol/arbeitspunkt.jpeg"style="max-height:35%; max-width:100%"></td>
                  </tr>
                </tbody>
              </table>

          <br><br><h5 id="passive_vierpole">Passive Vierpole</h5>

                <table class="table">
                <thead>
                  <tr>
                    <td width=20% >Widerstandsform der Vierpolgleichungen</td>
                    <td width=42%>$$ U_{1} = R_{11}\cdot I_{1} + R_{12} \cdot I_{2} \\ U_{2} = R_{21}\cdot I_{1} + R_{22} \cdot I_{2}$$</td>
                    <td><img src="bilder/elektrotechnik/vierpol/vierpol.jpeg"style="max-height:50%; max-width:100%"></td>
                  </tr>
                  <tr>
                    <td>Leerlauf</td>
                    <td width=19%>$$ R_{11} = \frac{U_{1}}{I_{1}} \qquad (I_{2} = 0)$$</td>
                    <td>$$ R_{12} = \frac{U_{1}}{I_{2}} \qquad (I_{1} = 0) $$</td>
                  </tr>
                  <tr>
                    <td>Leerlauf</td>
                    <td width=19%>$$ R_{21} = \frac{U_{2}}{I_{1}} \qquad (I_{2} = 0)$$</td>
                    <td>$$ R_{22} = \frac{U_{2}}{I_{2}} \qquad (I_{1} = 0) $$</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td width=19%>$$ R_{12} = \frac{U_{1}-R_{11}I_{1}}{I_{2}} \qquad (I_{2} \neq  0)$$</td>
                    <td>$$ R_{21} = \frac{U_{2}-R_{22}I_{2}}{I_{1}} \qquad (I_{1} \neq  0) $$</td>
                  </tr>
                  </tbody>
              </table>

              <table class="table">
                <thead>
                  <tr>
                    <td>Beispiele Vierpol</td>
                    <td align="center"><img src="bilder/elektrotechnik/vierpol/t_glied.jpeg"style="max-height:50%; max-width:50%"></td>
                    <td align="center"><img src="bilder/elektrotechnik/vierpol/pi_glied.jpeg"style="max-height:50%; max-width:50%"></td>
                  </tr>
                
                  <tr>
                    <td width=20% >T-Glied</td>
                    <td width=42%>$$ R_{11}  = R_{1}+ R_{3} $$</td>
                    <td> $$ R_{12}  = R_{3} $$</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>$$ R_{21}  = R_{3} $$</td>
                    <td>$$ R_{22}  = R_{2} + R_{3} $$</td>
                  </tr>
                
                  <tr>
                    <td width=20% >Pi-Glied</td>
                    <td width=42%>$$ \frac{R_{1}(R_{2}+R_{3})}{R_{1}+R_{2}+R_{3}} $$</td>
                    <td> $$ \frac{R_{1}+R_{3}}{R_{1}+R_{2}+R_{3}} $$</td>
                  </tr>
                  <tr>
                    <td></td>
                    <td>$$ \frac{R_{1}+R_{3}}{R_{1}+R_{2}+R_{3}} $$</td>
                    <td>$$ \frac{R_{3}(R_{1}+R_{2})}{R_{1}+R_{2}+R_{3}} $$</td>
                  </tr>
                </tbody>
              </table>
              <table class="table">
                <thead>
                  <tr>
                    <td width=20% >Dokumente</td>
                    <td width=42%>Vierpoltheorie</td>
                    <td width=19% align="center"><a href="/dokumente/elektrotechnik/vierpoltheorie.pdf" download><font color="000000"><i class="far fa-file-pdf"></font></i></a></td>
                    <td align="center"><a href="#bannerformmodal" data-toggle="modal" data-target=".bd-Dokument1-modal-lg">
                      <font color="black"><i class="far fa-eye"></i></a></td>
                  </tr>
                </tbody>
              </table>
                  <!-- Start Dokument -->
                    <div class="modal fade bd-Dokument1-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div align="center" class="modal-content">
                          <img src="/dokumente/elektrotechnik/vierpoltheorie.png"style="max-height:100%; max-width:80%"><br><p>1 von 10 Seiten</p>
                        </div>
                      </div>
                    </div>
                  <!-- End Dokument -->

        <br><br><h5 id="wheatstone">Wheatstone</h5>

                <table class="table">
                <thead>
                  <tr>
                    <td width=20% >Parallelschaltung zweier Widerstände</td>
                    <td colspan="2">$$ U_{1},U_{2} = \frac{R_{1} R_{2}}{R_{1}+R_{2}} I_{1} + \frac{R_{1}R_{2}}{R_{1}+R_{2}}I_{2} $$</td>
                  </tr>
                  <tr>
                    <td width=20% rowspan="2">Wheatstone-Brücke</td>
                    <td width=42%>$$ \frac{R_{1}}{R_{2}}=\frac{R_{3}}{R_{4}} $$</td>
                    <td rowspan="2"><img src="bilder/elektrotechnik/vierpol/wheatstone.png"style="max-height:100%; max-width:55%"></td>
                  </tr>
                  <tr>
                    <td>Wenn <b>R<sub>1</sub></b> und <b>R<sub>3</sub></b> gleich gross sind, dann kann man <b>R<sub>x</sub></b> herausfinden. Dafür stellt man den Widerstand <b>R<sub>2</sub></b> so ein, dass bei <b>V<sub>G</sub></b> kein Strom fliesst. Dann ist <b>R<sub>x</sub></b> gleich gross wie <b>R<sub>2</sub></b>.</td>
                  </tr>
                  </tbody>
              </table> 


              <br><br><h5 id="periodische_signale">Periodische Signale</h5>

                <table class="table">
                  <tr>
                    <td width=20% >Periodisches Signal</td>
                    <td width=42%>$$ f = \frac{1}{T} $$</td>
                    <td>Periodische Signale wiederholen sich im Zeitbereich nach einer gegebenen Zeit T immer wieder.</td>
                  </tr>
                  <tr>
                    <td>Begriffe</td>
                    <td><b>1</b> = Scheitelwert, Amplitude<br>
                      <b>2</b> = Schwingungsbreite (peak-to-peak)<br>
                      <b>3</b> = Effektivwert,<br>
                      <b>4</b> = Periodendauer<br></td>
                    <td><img src="bilder/elektrotechnik/periodische_signale/sinus.png"style="max-height:100%; max-width:55%"></td>
                  </tr>
                  <tr>
                    <td rowspan="2">Mittelwert</td>
                    <td>$$ \bar{g} = \frac{1}{T} \int_{t_1}^{t_1+T} \;g\cdot \text{d}g $$</td>
                    <td rowspan="2"><img src="bilder/elektrotechnik/periodische_signale/mittelwert.jpeg"style="max-height:100%; max-width:70%"></td>
                  </tr>
                  <tr><td>Der Mittelwert einer Grösse ist gegeben durch diese Formel. Er entspricht dem arithmetischen Mittel.</td>
                  </tr>
                  <tr>
                    <td rowspan="2">Wechselanteil</td>
                    <td>$$ g_\sim = g-\bar{g} $$</td>
                    <td rowspan="2"><img src="bilder/elektrotechnik/periodische_signale/wechselanteil.jpeg"style="max-height:100%; max-width:65%"></td>
                  </tr>
                  <tr><td>Ist der Mittelwert g = 0, so ist es eine Wechselgrösse. Falls g ≠ 0 so hat die Grösse einen Gleichanteil (DC).</td>
                  </tr>
                  <tr>
                    <td>Effektivwert</td>
                    <td>$$ W_T = I^2 \cdot R \cdot T = R\int_{t_1}^{t_1+T} \; i^2 \text{d}t $$</td>
                    <td>Der Effektivwert ist derjenige Mittelwert eines Wechselstroms, der in einem Widerstand die gleiche Wärmemenge entwickelt wie ein gleiche grosser konstanter Gleichstrom. (Begriffe nr. 3)</td>
                  </tr>
              </table> 


      
         
        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>