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
            <li class="toc-entry toc-h2"><a href="#druck">Druck und Temperatur</a></li>
            <li class="toc-entry toc-h2"><a href="#laengenausdehnung">Längenausdehnung fester Körper</a></li>
            <li class="toc-entry toc-h2"><a href="#waermekapazitaet">Wärmekapazität</a></li>
            <li class="toc-entry toc-h2"><a href="#kalorimetrie">Kalorimetrie</a></li>
            <li class="toc-entry toc-h2"><a href="#ideale_gase">Ideale Gase</a></li>
            <li class="toc-entry toc-h2"><a href="#waermekapazitaeten">Wärmekapazitäten</a></li>
            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Kalorik</h1>

          <p class="bd-lead">Die Kalorik auch „Thermodynamik“ oder  "Wärmelehre" ist die Wissenschaft der Zustandsänderungen von Körpern durch Zufuhr oder Abgabe von Wärme, sowie der Energieumwandlungen, bei denen Wärme beteiligt ist.</p>


          <br><br><h5 id="druck">Druck und Temperatur</h5>
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
                <td>Kolbendruck</td>
                <td>$$  p := \frac{F_1}{A_1} = \frac{F_2}{A_2} \equiv \frac{\text{Kraft}}{\text{Fläche}} $$</td>
                <td><img src="bilder/kalorik/druck/def.jpeg"style="max-height:100%; max-width:60%"><br><b>p</b> = Kolbendruck [Pa] = [N/m<sup>2</sup>]</td>
              </tr>
              <tr>
                <td>1 bar</td>
                <td>$$  1 bar = 10^5 Pa $$</td>
                <td><p>Beides sind SI_Einheiten</p></td>
              </tr>
              <tr>
                <td>Isotropie</td>
                <td>Flüssigkeiten</td>
                <td><p>Der Druck wirkt in alle Richtungen gleichermassen.</p></td>
              </tr>
              <tr>
                <td>Inkompressibilität</td>
                <td>Flüssigkeiten</td>
                <td><p>Die Dichte ist in sehr guter Näherung unabhängig von Druck.</p></td>
              </tr>
              <tr>
                <td>Schweredruck in Flüssigkeiten</td>
                <td>$$ p = \varrho \cdot g \cdot h $$</td>
                <td>
                  <b>p</b> = Schweredruck [Pa] = [N/m<sup>2</sup>]<br>
                  <b>ϱ</b> = Dichte [Kg/m<sup>3</sup>]<br>
                  <b>g</b> = Fallbeschleunigung (Erde: g≈9.81) [m/s<sup>2</sup>]<br>
                  <b>h</b> = Höhe der Flüssigkeitssäule [m]
                </td>
              </tr>
              <tr>
                <td>Barometrische Höhenformel</td>
                <td>$$ p(h) = p_0 \cdot a^{\large{\frac{h-h_0}{\varepsilon}}} $$</td>
                <td>
                  <b>p(h)</b> = Luftdruck auf der Höhe h [Pa] = [N/m<sup>2</sup>] <br>
                  <b>p<sub>0</sub></b> = Referenzpunkt, meist Meereshöhe ≈ 1.0 bar <br>
                  <b>h</b> = aktuelle Höhe [m] <br>
                  <b>a</b> = Abnahme a = p<sub>1</sub>/p<sub>0</sub> ≈ 1/2 <br>
                  <b>ε</b> = Höhenunterschied = h<sub>1</sub>-h<sub>0</sub> ≈ 5.5 km
                </td>
              </tr>
              <tr>
                <td>Luftdruck auf Meereshöhe</td>
                <td>$$ P_n := 1.01325 bar $$</td>
                <td>Für den Luftdruck auf Meereshöhe wird der Normwert verwendet.</td>
              </tr>
              <tr>
                <td width="20%">Kelvin</td>
                <td width="42%">$$  273.15 \; \text{K} = 0°\text{C} $$</td>
                <td><p>Temperaturdifferenzen sind in Celsius und Kelvin gleich!</p></td>
              </tr>
              </tbody>
          </table>

          <br><br><h5 id="laengenausdehnung">Längenausdehnung fester Körper</h5>
          <table class="table">
          <tr>
            <td width="20%">Längenausdehnung</td>
            <td width="42%">$$  \Delta l = l_0 \cdot \alpha \cdot \Delta T $$</td>
            <td>
                  <b>Δl</b> = Längenänderung = [m] <br>
                  <b>l<sub>0</sub></b> = Anfangslänge [m] <br>
                  <b>α</b> = Längenausdehnungskoeffizient [1/K] <br>
                  <b>Δt</b> = Temperaturänderung t<sub>2</sub> - t<sub>1</sub> [K] oder [C]
                </td>
          </tr>
          <tr>
            <td width="20%">Flächenausdehnung</td>
            <td width="42%">$$  \Delta A = A_0 \cdot 2\alpha \cdot \Delta T $$</td>
            <td>
                  <b>ΔA</b> = Flächenänderung = [m] <br>
                  <b>A<sub>0</sub></b> = Fläche vor der Temperaturänderung [m<sup>2</sup>] <br>
                  <b>α</b> = Längenausdehugskoeffizient [1/K] <br>
                  <b>ΔT</b> = Temperaturänderung t<sub>2</sub> - t<sub>1</sub> [K] oder [C]
                </td>
          </tr>
          <tr>
            <td width="20%">Raumausdehnung</td>
            <td width="42%">$$  \Delta V \approx  V_0 \cdot 3\alpha \cdot \Delta T $$</td>
            <td>
                  <b>ΔV</b> = Volumenänderung = [m] <br>
                  <b>V<sub>0</sub></b> = Anfangsvolumen [m<sup>3</sup>] <br>
                  <b>α</b> = Längenausdehugskoeffizient [1/K] <br>
                  <b>Δt</b> = Temperaturänderung t<sub>2</sub> - t<sub>1</sub> [K] oder [C]
                </td>
          </tr>
        </table>

        <br><br><h5 id="waermekapazitaet">Wärmekapazität</h5>
          <table class="table">
          <tr>
            <td width="20%">Wärmekapazität</td>
            <td width="42%">$$  c^* := \frac{\Delta Q}{\Delta t} $$</td>
            <td>
              <b>C</b> = Wärmekapazität [C*] = [J/K] <br>
              <b>Q</b> = Energiezufuhr [J] <br>
              <b>ΔT</b> = Temperaturänderung t<sub>2</sub> - t<sub>1</sub> [K] oder [C]
            </tr>
          <tr>
            <td width="20%">Spezifische Wärmekapazität</td>
            <td width="42%">$$  c := \frac{1}{m} \cdot \frac{\Delta Q}{\Delta T} $$</td>
            <td>
                  <b>c</b> = spezifische Wärmekapazität [C] = [J/(Kg·K)] <br>
                  <b>m</b> = Masse [Kg]
                </td>
          </tr>
          <tr>
            <td width="20%">molare Wärmekapazität</td>
            <td width="42%">$$  C := \frac{1}{n} \cdot \frac{\Delta Q}{\Delta T} $$</td>
            <td>
                  <b>C</b> = molare Wärmekapazität [C]= [J/(K·mol)] <br>
                  <b>n</b> = Stoffmenge [mol] 
                </td>
          </tr>
        </table>

        <br><br><h5 id="kalorimetrie">Kalorimetrie</h5>
          <table class="table">
          <tr>
            <td rowspan="2" width="20%">Energie-Erhaltung</td>
            <td width="42%">$$  0 = \Delta Q_{zu} + \Delta Q_{ab} $$</td>
            <td rowspan="2"><img src="bilder/kalorik/kalorimetrie/a.png"style="max-height:100%; max-width:100%"></td>
            </tr>
            <tr>
                <td>$$  0 = \Delta Q_{K} + \Delta Q_{W} + \Delta Q_{kal} $$</td>
            </tr>
            <tr>
            <td rowspan="2" width="20%">Energie-Erhaltung</td>
            <td width="42%">$$  0 = m_k c_k (T_m-T_k) + m_w  c_w (T_m-T_w) + W_{kal}  (T_m - T_w) \\ 0 = n_k C_k (T_m-T_k) + n_w  C_w (T_m-T_w) + W_{kal}  (T_m - T_w) $$</td>
            <td rowspan="2"><img src="bilder/kalorik/kalorimetrie/e.png"style="max-height:100%; max-width:100%"></td>
            </tr>
            <tr>
                <td>Einmal mit molarer Wärmekapazität und einmal mit spezifischer Wärmekapazität <br><br>Auflösen nach gesuchter Grösse! </td>
            </tr>
            <tr>
              <td>Latenz-Wärme</td>
              <td><p>Im <b>TP</b>, dem sogenannten Tripelpunkt ist es für Wasser möglich, in allen drei Aggregatzuständen zu sein. </p></td>
              <td><img src="bilder/kalorik/kalorimetrie/phasendiagramm.jpeg"style="max-height:100%; max-width:100%"></td>
          </tr>
          <tr>
              <td>spezifische Schmelzwärme</td>
              <td>$$ s = \frac{Q_{sm}}{m} $$</td>
              <td><img src="bilder/kalorik/kalorimetrie/schmelzweraerme.jpeg"style="max-height:100%; max-width:66%"></td>
          </tr>
          <tr>
              <td>spezifische Verdampfungswärme</td>
              <td>$$ v = \frac{Q_{sd}}{m} $$</td>
              <td><img src="bilder/kalorik/kalorimetrie/verdampfungswaerme.jpeg"style="max-height:100%; max-width:70%"></td>
          </tr>
        </table>

        <br><br><h5 id="ideale_gase">Ideale Gase</h5>
          <table class="table">
          <tr>
            <td width="20%">Zustandsgleichung</td>
            <td width="42%">$$  p V = N  k  T = n  R T $$</td>
            <td >
              <b>p</b> = Druck [Pa] = [N/m<sup>2</sup>] <br>
              <b>V</b> = Volumen [m<sup>3</sup>] <br>
              <b>N</b> = Teilchenzahl [-] <br>
              <b>k</b> = Boltzmann-Konstante [J/K] <br>
              <b>n</b> = Stoffmenge [mol] <br>
              <b>R</b> = Gaskonstante [C]= [J/(mol·K)] <br>
              <b>T</b> = Absolute Temperatur [K] 
            </td>
            </tr>
            <tr>
              <td>Stoffmenge in Mol</td>
              <td>$$ n = \frac{N}{N_A} = \frac{m}{M} $$</td>
              <td >
              <b>n</b> = Stoffmenge [mol] <br>
              <b>N</b> = Teilchenzahl [-] <br>
              <b>N<sub>A</sub></b> = Avogadro-Konstante [1/mol] <br>
              <b>m</b> = Gasmasse [Kg]= [J/(mol·K)] <br>
              <b>M</b> = Molare Masse [Kg/mol] 
            </td>
            </tr>
            <tr>
              <td>Universelle Gaskonstante</td>
              <td>Unabhängig von der chemischen Zusammensetzung des Gases findet man:</td>
              <td><figure class="highlight">
                  <pre>
<code class="language-html" data-lang="html"><font color="#30c0d1">(* Universelle Gaskonstante *)</font>
R = 8.314462; </code>
                  </pre>
                </figure></td>
            </tr>
            <tr>
              <td>Boltzmann-Konstante</td>
              <td>Die Boltzmann-Konstante ist eine Naturkonstante, die in der statistischen Mechanik eine zentrale Rolle spielt.</td>
              <td><figure class="highlight">
                  <pre>
<code class="language-html" data-lang="html"><font color="#30c0d1">(* Boltzmann-Konstante *)</font>
k = 1.3806488*10^23; </code>
                  </pre>
                </figure></td>
            </tr>
            <tr>
              <td>Avogadro-Konstante</td>
              <td>Sie gibt an, wie viele Teilchen (etwa Atome eines Elements oder Moleküle einer chemischen Verbindung) in einem Mol enthalten sind. Der aktuell empfohlene Wert[1][2] beträgt</td>
              <td><figure class="highlight">
                  <pre>
<code class="language-html" data-lang="html"><font color="#30c0d1">(* Avogadro-Konstante *)</font>
N<sub>a</sub> = 6.022140857*10^23; </code>
                  </pre>
                </figure></td>
            </tr>
            
            <tr>
              <td>Freiheitsgrade</td>
              <td>1-atomiges Gas (Edelgase)<br>2-atomige Gase (N<sub>2</sub>, O<sub>2</sub>, H<sub>2</sub>, Luft)<br>mehratomige nichtlineare Gase (H<sub>2</sub>O)</td>
              <td><img src="bilder/kalorik/verteilung/freiheitsgrade.jpeg"style="max-height:100%; max-width:100%"></td>
            </tr>
            <tr>
              <td>Innere Wärme-Energie</td>
              <td>$$ U = \frac{\text{f}}{2}NkT=\frac{\text{f}}{2}nRT = \frac{\text{f}}{2}pV $$</td>
              <td >
              <b>U</b> = Innere Wärme-Energie [J] <br>
              <b>f</b> = Gesamtzahl Freiheitsgrade [-] <br>
              <b>N</b> = Teilchenzahl [-] <br>
              <b>k</b> = Boltzmann-Konstante [J/K] <br>
              <b>T</b> = Absolute Temperatur [K] <br>
              <b>n</b> = Stoffmenge [mol] <br>
              <b>R</b> = Gaskonstante [C]= [J/(mol·K)] <br>
              <b>p</b> = Druck [Pa] = [N/m<sup>2</sup>] <br>
              <b>V</b> = Volumen [m<sup>3</sup>]
            </td>
            </tr>
            <tr>
              <td>Mittlere Bewegungsenergie eines Teilchens</td>
              <td>$$E_{kin} = \frac{\text{f}_{T}}{2}kT = \frac{3}{2}kT$$</td>
              <td>Gilt für die kinetische Energie der Moleküle (Translation).</td>
            </tr>
            
        </table>

        <br><br><h5 id="waermekapazitaeten">Wärmekapazitäten</h5>
          <table class="table">
          <tr>
            <td width="20%">Isochore Wärmekapazität <br>(Volumen konstant)</td>
            <td width="42%">$$  C_V := \frac{f}{2}\cdot R $$</td>
            <td><img src="bilder/kalorik/w_kapazitaet/vn_konst.png"style="max-height:100%; max-width:60%"><br>Heizen bei <b>V,n konst.</b></td>
            </tr>
            <tr>
              <td>Isobare Wärmekapazität <br>(Druck konstant)</td>
              <td>$$  C_p := (\frac{f}{2}+1) \cdot R $$</td>
              <td><img src="bilder/kalorik/w_kapazitaet/pn_konst.png"style="max-height:100%; max-width:60%"><br>Heizen bei <b>p,n konst.</b></td>
            </tr>
        </table>



        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>