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
            <li class="toc-entry toc-h2"><a href="#bit_und_byte">Bit und Byte</a></li>
            <li class="toc-entry toc-h2"><a href="#zahlensysteme">Zahlensysteme und Codierung</a></li>
            <li class="toc-entry toc-h2"><a href="#logik">Logik</a></li>
            <li class="toc-entry toc-h2"><a href="#karnaugh">Karnaugh-Map</a></li>
            <li class="toc-entry toc-h2"><a href="#schaltnetze">Schaltnetze und Schaltwerke</a></li>


            </ul>
          </div>
        

        <main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
          <h1 class="bd-title" id="content">Elektronik</h1>

          <p class="bd-lead">Die Elektronik ist die Wissenschaft von der Steuerung des elektrischen Stromes durch elektronische Schaltungen. Elektronik verarbeitet elektrische Signale informationsmäßig oder erzeugt sie.</p>

          <br><br><h5 id="bit_und_byte">Bit und Byte</h5>
          <table class="table">
            <thead>
              <tr>
                <th scope="col" width=20%>Bezeichnung</th>
                <th scope="col" width=42%>Formel</th>
                <th colspan="2" scope="col">Grafik</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Bit</td>
                <td>$$ H→1 \\ L→0$$</td>
                <td >Das Bit ist die kleinstmögliche Datenheit und kennt nur zwei Zustände.</td>
              </tr>
              <tr>
                <td>Nibble (Halbbyte)</td>
                <td>$$ 4 \text{ Bit} $$</td>
                <td >Ein Nibble kann 2<sup>4</sup>=16 verschiedene Zustände fassen. </td>
              </tr>
              <tr>
                <td>Byte</td>
                <td>$$ 8 \text{ Bit} $$</td>
                <td >Ein Byte umfasst 2<sup>8</sup>=256 verschiedene Zustände. Dargestellt mit den Zahlen 0-255 </td>
              </tr>
                </tbody>
            </table>

          <br><br><h5 id="zahlensysteme">Zahlensysteme und Codierung</h5>
          <table class="table">
              <tr>
                <td width=20%>Dezimal → Binär <br><br>Binär → Dezimal</td>
                <td width=42% align="center"><img src="bilder/elektronik/zahlenbasen/dez_bin.jpeg"style="max-height:50%; max-width:100%"><br><br>Also ist 197d = 11000101b. </td>
                <td ><img src="bilder/elektronik/zahlenbasen/bin_dez.png"style="max-height:50%; max-width:100%"></td>
              </tr>
              <tr>
                <td>Addition und Multiplikation im Binärsystem</td>
                <td align="center">Addition<br><br><img src="bilder/elektronik/zahlenbasen/add.jpeg"style="max-height:50%; max-width:100%"></td>
                <td align="center">Multiplikation<br><br><img src="bilder/elektronik/zahlenbasen/mult.jpeg"style="max-height:50%; max-width:100%"></td>
              </tr>
              <tr>
                <td>2-er Komplement</td>
                <td><p>Die Zweierkomplementdarstellung kann man sich auch so veranschaulichen: <br>Alle Bits haben die gleiche Wertigkeit wie bei positiver Darstellung. Das MSB (most significant bit = höchstwertige bit) allerdings erhält die negative Wertigkeit. Durch Subtraktion dieses Bits lassen sich Zahlen sehr schnell umwandeln.</p></td>
                <td><img src="bilder/elektronik/zahlenbasen/zweier.jpeg"style="max-height:50%; max-width:100%"></td>
              </tr>
              <tr>
                <td>Grey Code</td>
                <td><p>Hier wird von einer zur nächsten Zahl jeweils nur ein Bit geändert. Dies verhindert oft Fehler beim einlesen.</p></td>
                <td align="center"><img src="bilder/elektronik/zahlenbasen/greycode.png"style="max-height:50%; max-width:100%"></td>
              </tr>
              <tr>
                <td>Grey Code Spiegelachse</td>
                <td><p>Ausgehend von einer Kombination der beiden Bits 0 und 1 wird durch wiederholtes Spiegeln der Ausgangsinformation und Hinzufügen von 0- und 1-Werten an der höchstwertigen Stelle der vollständige Gray-Code aufgebaut.</p></td>
                <td align="center"><img src="bilder/elektronik/zahlenbasen/greycode_2.png"style="max-height:50%; max-width:100%"></td>
              </tr>
            </table>

            <br><br><h5 id="logik">Logik</h5>
          <table class="table">
              <tr>
                <td width=20%>NOT gate</td>
                <td width=42%>$$ Y=\overline{X} = \lnot X $$</td>
                <td><img src="bilder/elektronik/logik/not.jpeg"style="max-height:60%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>AND gate</td>
                <td width=42%>$$Y = X_{1} \land X_{2}  = X_{1} \cdot X_{2}$$</td>
                <td align="center"><img src="bilder/elektronik/logik/and.png"style="max-height:60%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>OR gate</td>
                <td width=42%>$$Y = X_{1} \lor X_{2}  = X_{1} + X_{2}$$</td>
                <td align="center"><img src="bilder/elektronik/logik/or.png"style="max-height:60%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>NAND gate</td>
                <td width=42%>$$Y= X_{1}\barwedge X_{2} = \overline{X_{1}X_{2}}$$</td>
                <td align="center"><img src="bilder/elektronik/logik/nand.png"style="max-height:60%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>NOR gate</td>
                <td width=42%>$$Y= X_{1}\bar{\lor } X_{2} = \overline{X_{1}\lor X_{2}}$$</td>
                <td align="center"><img src="bilder/elektronik/logik/nor.png"style="max-height:60%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>XOR gate</td>
                <td width=42%>$$ Y= X_{1}\veebar X_{2} = \overline{X_{1}}X_{2} \lor X_{1}\overline{X_{2}} $$</td>
                <td align="center"><img src="bilder/elektronik/logik/xor.png"style="max-height:60%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>Rangfolge boolscher Operatoren</td>
                <td width=42%><p>Es existieren Regeln, welche der Verknüpfungen Vorrang haben.</p></td>
                <td align="center"><img src="bilder/elektronik/logik/rang.png"style="max-height:60%; max-width:100%"></td>
              </tr>
              <tr>
                <td rowspan="2" width=20%>deMorgan'sche Regeln</td>
                <td width=42%>$$ \lnot(A\wedge B) = \lnot A \vee  \lnot B \\ \lnot(A \vee  B) = \lnot A \wedge   \lnot B $$</td>
                <td>$$ \overline{(AB)} = \overline{A} + \overline{B} \\ \overline{(A+B)}= \overline{A} \cdot \overline{B} $$</td>
              </tr>
              <tr>
                <td width=42%>$$A \vee A = A \\ A \vee \lnot A = 1 \\ A \vee 0 = A \\A \vee 1 = 1$$</td>
                <td>$$A \wedge A = A \\ A \wedge \lnot A = 0 \\ A \wedge 0 = 0 \\A \wedge 1 = A$$</td>
              </tr>
              <tr>
                <td>Sum of Products (SOP)</td>
                <td>$$ E = (A \wedge B) \vee (C \wedge D)  $$</td>
                <td>$$ E = (A  B) +  (C  D)  $$</td>
              </tr>
              <tr>
                <td>Product of Sums (POS)</td>
                <td>$$ F = (A \vee B) \wedge (C \vee D)  $$</td>
                <td>$$ E = (A + B) \cdot  (C + D)  $$</td>
              </tr>
            </table>

          <br><br><h5 id="karnaugh">Karnaugh-Map</h5>
          <table class="table">
              <tr>
                <td width=20%>Karnaugh-Map<br> oder KV-Diagramm</td>
                <td width=42%> Karnaugh-Diagramme bieten einen formalen Weg zur Vereinfachung von logischen Ausdrücken. Sie haben Ähnlichkeiten mit Wahrheitstabellen.
                  <br><br>In diesem fall ist es das gleiche wie die AND Wahrheitstabelle.</td>
                <td><img src="bilder/elektronik/kv_diagramm/beispiel.png"style="max-height:50%; max-width:100%"></td>
              </tr>
              <tr>
                <td width=20%>Karnaugh-Map mit 3 Eingangsvariablen</td>
                <td width=42%> Die Reihenfolge steht im Diagramm mit den Zahlen von 0-7</td>
                <td><img src="bilder/elektronik/kv_diagramm/drei.png"style="max-height:50%; max-width:100%"></td>
              </tr>
            </table>

          <br><br><h5 id="schaltnetze">Schaltnetze und Schaltwerke</h5>
          <table class="table">
            <tr>
                <td width=20%>Schaltwerk</td>
                <td width=42%></td>
                <td><p>Ein Schaltwerk hat eine Rückkopplung und somit einen Speicher.</p></td>
              </tr>
              <tr>
                <td width=20%>Halbaddierer</td>
                <td width=42%><img src="bilder/elektronik/schaltnetze/halbaddierer_tabelle.png"style="max-height:50%; max-width:100%"><p>Er besteht aus zwei Eingängen und zwei Ausgängen. Mit einem Halbaddierer kann man zwei einstellige Binärzahlen addieren. Dabei liefert der Ausgang s (engl. sum – „Summe“) die rechte und der Ausgang c (engl. carry – „Übertrag“) die linke Stelle des Ergebnisses.</p></td>
                <td><img src="bilder/elektronik/schaltnetze/halbaddierer.png"style="max-height:50%; max-width:100%"></td>
              </tr>
              <tr>
                <td>Komperator auf Gleichheit</td>
                <td>Vergleicher (Komparatoren) können Bits auf Gleichheit oder auch Ungleichheit untersuchen. Die Grundlogik für die Untersuchung auf Gleichheit von einem Bit ist das XOR-Gatter.</td>
                <td><img src="bilder/elektronik/schaltnetze/gleichheit.png"style="max-height:50%; max-width:100%"></td>
              </tr>
              <tr>
                <td>Komparator auf Grösse</td>
                <td></td>
                <td><img src="bilder/elektronik/schaltnetze/groesse.png"style="max-height:30%; max-width:100%"></td>
              </tr>
              <tr>
                <td rowspan="2">Multiplexer (MUX)</td>
                <td>$$ a=\overline{s_{0}}e_{0} \lor s_{0}e_{1}$$</td>
                <td rowspan="2"><img src="bilder/elektronik/schaltnetze/mux.png"style="max-height:30%; max-width:100%"></td>
              </tr>
              <tr>
                <td><p>Der einfachste Fall ist der 2-Eingaben-Multiplexer (auch „1-MUX“), der ein Steuersignal s0, 2 Eingänge e0 und e1 und einen Ausgang a hat. Liegt am Steuersignal s0 eine 1 an, so liefert der Ausgang a das Signal, das am Eingang e1 anliegt, andernfalls das von Eingang e0.</p></td>
              </tr>
              <tr>
                <td>Gatterlaufzeit</td>
                <td></td>
                <td>Gatter als diskrete Bauelemente haben Laufzeiten im Bereich weniger Nanosekunden (ns) bis über 100 ns. Die Zeiten werden von den Herstellern in den Datenblättern für bestimmte Bedingungen angegeben, meist für eine dem Fan-Out entsprechende kapazitive Last und eine hohe Temperatur, manchmal getrennt für verschiedene Versorgungsspannungen.</td>
              </tr>
              <tr>
                <td>Fan-In</td>
                <td></td>
                <td><p>Unter Fan-In versteht man zulässige Anzahl an digitalen Eingangsleitungen, die an eine Logik oder an eine andere Digitalschaltung angeschlossen werden kann, ohne dass dadurch die Funktionalität der Schaltung beeinträchtigt wird. Die Zahl an Eingangsleitungen ist begrenzt, weil die betreffende Eingangsschaltung impedanzmäßig belastet wird.</p></td>
              </tr>
              <tr>
                <td>Fan-Out</td>
                <td></td>
                <td><p>Mit Fan-Out wird die Anzahl an Ausgangsleitungen bezeichnet, die an eine Logik, eine Schaltung oder ein Gerät angeschlossen werden dürfen. Die Anzahl ist deshalb begrenzt, weil die betreffende Schaltung oder die Fan-Out-Einheit die notwendige Treiberleistung zur Verfügung stellen muss</p></td>
              </tr>
              <tr>
                <td>Feedback Rückkopplung</td>
                <td><p>Positive Rückkopplung kann in allen Systemen auftreten, in denen Ausgangsgrößen wieder Einfluss auf die Eingangsgrößen haben, unter Umständen in modifizierter Form.</p></td>
                <td>
                  <img src="bilder/elektronik/schaltnetze/feedback.png"style="max-height:100%; max-width:100%">
                </td>
              </tr>
              <tr>
                <td>RS Basis FlipFlop<br>(NOR)</td>
                <td><p>Das RS-Flip-Flop (nicht-taktgesteuert) ist ein bistabiles Element und der Grundbaustein für alle Flip-Flops in der Digitaltechnik. Man kann dieses Flip-Flop aus zwei NOR-Verknüpfungen oder zwei NAND-Verknüpfungen aufbauen. Beim RS-Flip-Flop mit NOR-Gliedern spricht man von einem 1-aktiven Flip-Flop. Beim RS-Flip-Flop mit NAND-Gliedern spricht man vom 0-aktiven Flip-Flop.<br><br>Diese Art von Flip-Flop wird in der Digitaltechnik häufig hinter Schaltern oder Tastern geschaltet um den mechanischen Schaltvorgang prellfrei auswerten zu können.</p></td>
                <td>
                  <img src="bilder/elektronik/flipflop/rs_basis.jpeg"style="max-height:100%; max-width:100%">
                </td>
              </tr>
              <tr>
                <td>RS-Kippglied aus NAND-Gattern</td>
                <td></td>
                <td>
                  <img src="bilder/elektronik/flipflop/rs_kippglied.jpeg"style="max-height:100%; max-width:100%">
                </td>
              </tr>
              <tr>
                <td rowspan="2">Charakteristische Gleichung</td>
                <td>$$ Q_{n+1} = (S\vee \bar{R}\wedge Q)_n \\ (R\wedge S)_n = L$$ </td>
                <td rowspan="2">
                  <img src="bilder/elektronik/flipflop/tt.jpeg"style="max-height:100%; max-width:60%"><br>
                  <b>Q<sub>n</sub></b> = vorhergehende Zustand am Ausgang<br>
                  <b>Q<sub>n+1</sub></b> = nachfolgende Zustand am Ausgang<br>
                </td>
              </tr>
              <tr>
                <td>Die Gleichung gilt für das RS Basis FlipFlop und das RS-Kippglied</td>
              </tr>
            </table>



      
         
        </main>
      </div>
    </div>
    <?php include ('includes/footer.php'); ?>

  </body>
</html>