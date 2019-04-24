<!DOCTYPE html>
<html lang="de">
<head>
	<?php include ('includes/top_head.php'); 
    $loc = "linalg";
    ?>
	<link href="spoiler.css" rel="stylesheet" type="text/css">
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
			</div>
                  <!-- Start Formelrad -->
                    <div class="modal fade bd-formelrad-modal-lg" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div align="center" class="modal-content">
                          <br>
                          <img src="Beispiel_Ortho.jpg" width="100%" height="80%" alt=""/><br>
                        </div>
                      </div>
                    </div>
                  <!-- End Formelrad -->



			<main class="col-12 col-md-9 col-xl-8 py-md-3 pl-md-5 bd-content" role="main">
				<h1 class="bd-title" id="content">Lineare Algebra</h1>

				<p class="bd-lead">Grundlagen der Linearen Algebra</p>
				
							<h2>Skalarprodukte </h2>
			<div class="pre-spoiler">
										<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
										<div class="spoiler" style="display: none;">
				<br>

<table cellspacing="50" cellpadding="20" table border="1">
  <tr>
    <th>Begriff</th>
    <th>Erklärung</th>
    <th>Zusatz</th>
  </tr>
	  <tr>
    <td><b>Die Billinearform auf V </b></td>
    <td>$$\text{Zur überprüfung folgende Bedienungen: } \\[1ex]
\text{Für } x, x^{'} , y \in V \text{ gilt } \Phi(x+x^{'} , y) = \Phi(x,y) + \Phi(x^{'},y) \\[1ex]
\text{Für } x , y , y^{'} \in V \text{ gilt } \Phi(x,y + y^{'}) = \Phi(x,y) + \Phi(x,y^{'}) \\[1ex]
\text{Für } x , y  \in V \text{ und } r \in \mathbb{R} \text{ gilt } \Phi(rx,y) = r \Phi(x,y) \\[1ex]
\text{Für } x , y  \in V \text{ und } r \in \mathbb{R} \text{ gilt } \Phi(x,ry) = r \Phi(x,y) \\[4ex]

\text{Schneller gehts so: } \\[1ex]
\rightarrow \text{ Für } x,x^{'},y,y^{'} \in V \text{ und } r,s \in \mathbb{R} \text{ gilt} \\[1ex]
\Phi (rx+x^{'},sy + y^{'}) = rs \Phi (x,y) + r \Phi (x,y^{'}) + s \Phi (x^{'},y) + \Phi (x^{'},y^{'}) \\[1ex]
$$</td>
    <td>                      
	  </td>
  <tr>
	  	  <tr>
    <td><b>Bilinearformen und Matrizen </b></td>
    <td>$$\text{Die Matrix von } \Phi \text{ bezüglich E:}  \\[1ex]
M_{\Phi}^{E} = (\Phi(e_i,e_j))_{1\leq i, j\leq n} = \begin{bmatrix}
\Phi(e_1,e_1) & \Phi(e_1,e_2) & ... & \Phi(e_1,e_n)\\ 
\Phi(e_2,e_1) & \Phi(e_2,e_2) & ... & \Phi(e_2,e_n) \\ 
... & ... & ... & ... \\ 
\Phi(e_n,e_1) & \Phi(e_n,e_2) & ... & \Phi(e_n,e_n) 
\end{bmatrix} 
 \in M(n) \\[4ex]

\text{Gleichzeitig auch die Bilinearform von M auf E} \\[1ex]

\Phi_{M}^{E} : V \times V \rightarrow \mathbb{R} , (x,y) \mapsto (x^E)^t \cdot M \cdot y^E
$$</td>
    <td>                      
	  </td>
  <tr>
	  	  	  <tr>
    <td><b>Die euklidische Bilinearformen </b></td>
    <td>$$\Phi (x,y) = x_+y_1 + ... + x_ny_n \\[4ex]
		\text{Beispield dazu:} \\[1ex]
\Phi_1 : \mathbb{R}^2 \rightarrow \mathbb{R} , (x,y) \mapsto (x^E)^t \cdot M_1 \cdot y^E \\[1ex]
((x_1,x_2),(y_1,y_2)) \mapsto [x_1,x_2] \cdot \begin{bmatrix}
1 & 2\\ 
1 & 0
\end{bmatrix} \cdot \begin{bmatrix}
y_1 \\
y_2 \\
\end{bmatrix} \\[1ex]
\rightarrow x_1y_2 + 2x_1y_2 + x_2y_1 \\[1ex]

\Phi_1 ((3,1),(2,-5)) = 6-30+2 = -22 \\[1ex]

$$</td>
    <td> Die normale Form                     
	  </td>
  <tr>
	  	  	  	  <tr>
    <td><b>Die minkowskische Bilinearformen </b></td>
    <td>$$\Phi (x,y) = x_1y_1 - ... - x_ny_n \\[4ex]
		\text{Beispield dazu:} \\[1ex]
\Phi_1 : \mathbb{R}^2 \rightarrow \mathbb{R} , (x,y) \mapsto (x^E)^t \cdot M_1 \cdot y^E \\[1ex]
((x_1,x_2),(y_1,y_2)) \mapsto [x_1,x_2] \cdot \begin{bmatrix}
1 & 2\\ 
1 & 0
\end{bmatrix} \cdot \begin{bmatrix}
y_1 \\
y_2 \\
\end{bmatrix} \\[1ex]
\rightarrow x_1y_2 - 2x_1y_2 - x_2y_1 \\[1ex]

\Phi_1 ((3,1),(2,-5)) = 6+30-2 = 34 \\[1ex]

$$</td>
    <td> Gleiche aber negative                     
	  </td>
  <tr>
	  	  	  	  	  <tr>
    <td><b>Basiswechsel der Bilinearformen </b></td>
    <td>$$\text{Seien } \Phi \text{ eine Bilinearform auf V und E und D zwei Basen von V} \\[1ex]
M_{\Phi}^{D} = (M^{ED})^t \cdot M_{\Phi}^{E} \cdot M^{ED}

$$</td>
    <td> Transponierte Matrix nicht inverse.                    
	  </td>
  <tr>
	  
	  	  	  	  	  	  <tr>
    <td><b>Symmetrie der Bilinearformen </b></td>
    <td>$$\text{ Symmetrisch wenn:} \\[1ex]
\Phi (x,y) = \Phi (y,x) \\[4ex]

\text{Im euklidischen:} \\[1ex]
x_1 y_1 + ... + x_n y_n =  y_1 x_1 + ... +  y_n x_n \\[4ex]

\text{Im minkowskischen:} \\[1ex]
x_1 y_1 - ... - x_n y_n =  y_1 x_1 - ... -  y_n x_n \\[4ex]
		
		
\text{Zusätzlich gilt:}  \\[1ex]
\rightarrow \Phi \text{ ist symmetrisch} \\[1ex]
\rightarrow \text{ Für jede Basis von E von V ist } M_{\Phi}^{E} \text{ symmetrisch} \\[1ex]
$$</td>
    <td>                    
	  </td>
  <tr>
	  	  	  	  	  	  	  <tr>
    <td><b>Orthogonalität der Bilinearformen </b></td>
    <td>$$\text{Orthogonalität wird wie folgt ausgedrückt:} \\[1ex]
 x \perp_{\Phi} y \\[4ex]

\text{Es gilt falls:} \\[1ex]
\Phi(x,y) = 0 \\[4ex]

\text{euklidisches Beispiel:} \\[1ex]
\Phi((1,-1,1)(1,1,0)) = 0 \\[4ex]

\text{minkowskischesBeispiel:} \\[1ex]
\Phi((1,-1,1)(1,1,2)) = 0 \\[4ex]
$$</td>
    <td>                   
	  </td>
  <tr>
	  	  	  	  	  	  	  	  <tr>
    <td><b>Orthogonalbasen der Bilinearformen </b></td>
    <td>$$\text{Für die Orthogonalbasis gilt:} \\[1ex]
\Phi (e_i,e_j) = 0 \quad i = \not  j \\[4ex]
\rightarrow \text{Diagonalmatrizen} \\[1ex]
$$</td>
    <td>                  
	  </td>
  <tr>
	  	  	  	  	  	  	  	  	  <tr>
    <td><b>Isotropie der Bilinearformen </b></td>
    <td>$$\text{Eine Billinearform ist isotrop wenn:} \\[1ex]
x \perp x \\[1ex]
$$</td>
    <td>                   
	  </td>
  <tr>
	  	  	  	  	  	  	  	  	  	  <tr>
    <td><b>Degenerierte Bilinearformen </b></td>
    <td>$$\text{Eine Billinearform ist degeneriert wenn:} \\[1ex]
x^{\perp} = V  \quad \Leftrightarrow  \quad x = 0\\[4ex]

\text{Für nicht degenerierte Billinearformen gilt: } \\[1ex]
\rightarrow \text{ Sie sind invertierbar}

$$</td>
    <td>                   
	  </td>
  <tr>
	  	  	  	  	  	  	  	  	  	  	  <tr>
    <td><b>Positivität von Bilinearformen </b></td>
    <td>$$\text{Eine Billinearform ist positiv wenn:} \\[1ex]
\Phi(x,y) \geq 0 \quad x \in V \\[4ex]

\text{Eine Billinearform ist positiv definit wenn:} \\[1ex]
\Phi(x,y) > 0 \quad x \in V  \quad x \neq 0\\[4ex]

\text{Für 2 positive symmetrische BilF gilt:} \\[1ex]
\text{Ungleichheit von Chauchy - Schwarz:} \\[1ex]
\Phi(x,y)^2 \leq  \Phi(x,x) \Phi(y,y)\\[4ex]


$$</td>
    <td>                   
	  </td>
  <tr>
	  	  	  	  	  	  	  	  	  	  	  	  <tr>
    <td><b>Orthogonalisierungsverfahren </b></td>
    <td>$$\text{Vorraussetzungen:} \\[1ex]
\Phi \rightarrow \text{ symmetrische Billinearform auf } V \\[1ex]
E=\{e_1,...,e_n\} \rightarrow \text{Basis von V} \\[4ex]

\text{Wir setzen ein: } \\[1ex]
\rightarrow D_{11} = 1; \\[1ex]
\rightarrow D_{ji} = (-1)^{j+i} \ det(\widehat{M(i)_{ji}}) \quad | i \in {2,...,n} \quad j\in{1,...,n} \quad j\leq i ; \\[1ex]
\rightarrow D_{n+1,n+1} = det(M_{\Phi}^{E}); \\[1ex]
\rightarrow b_i = \sum_{j=1}^{i} \frac{D_{ji}}{D_{ii}}e_j \quad | i\in \{1,...,n\}; \\[1ex]
\rightarrow B = \{b_1,...,b_n\}; \\[4ex]

\text{Dann gilt: }\\[1ex]
M_{\Phi}^{B} = diag(\frac{D_{22}}{D_{11}} ,\frac{D_{33}}{D_{22}},..., \frac{D_{n+1,n+1}}{D_{nn}})



$$</td>
    <td> von Gram-Schmidt  hier ein Beispiel:  <a href="#bannerformmodal" data-toggle="modal" data-target=".bd-formelrad-modal-lg">
<font color="black"><i class="fas fa-dharmachakra"></font></i></a>                
	  </td>
  <tr>
	  
											</table>
				</div>
				</div>
				
				<br>
				<h2>Lineare Abbildungen + Matrizen</h2>

				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<ol style="list-style-type:none">
							<br><br>
							<li><b>Von einer Linearen Abbildung zur Matrize</b>
							</li>
						</ol>

						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<ol style="list-style-type:none">

									<li>$$ \text{Die Spalten von} \quad M^{ED}_f \quad \text{sind die Bilder der Basisvektoren} $$</li>
									<br> <br>
									<li>$$\text{Beispiel:}$$</li>
									<li>$$f : \mathbb{R}^2 \rightarrow \mathbb{R}^3 , (x,y) \mapsto (2x,x+y,3y-x)$$</li>
									<br><br>
									<li>$$D = {d_1,d_2} \qquad \text{Kanonische Basis von} \mathbb{R}^2 \qquad $$</li>
									<li>$$E = {e_1,e_2,e_3} \qquad \text{Kanonische Basis von} \mathbb{R}^3 \qquad $$</li>
									<br><br>
									<li>$$f(d_1) = f(1,0) = 2,1,-1$$</li>
									<li>$$f(d_2) = f(0,1) = 0,1,3$$</li>
									<br><br>
									<li>$$M^{ED}_f = \begin{bmatrix} 2 & 0\\ 1 & 1\\ -1 & 3 \\ \end{bmatrix}$$
									</li>
									<br><br>
									<li>$$\text{Den Funktionsterm errechnet man nun so:} \quad f(3,5)$$</li>
									<br><br>
									<li>$$f(v)^E = M^{ED}_f \cdot v^D = \begin{bmatrix} 2 & 0\\ 1 & 1\\ -1 & 3 \\ \end{bmatrix} \cdot \begin{bmatrix} 3 \\ 5 \\ \end{bmatrix} = \begin{bmatrix} 6 \\ 8 \\ 12 \\ \end{bmatrix}$$
									</li>

								</ol>
							</div>
						</div>

						<br><br>
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
									<td>Rang</td>
									<td>Eine obere Dreiecksmatrix vom Typ m x n hat den Rang n <br>Ist eine Matrix in Treppenform so ist rg(A) = der von 0 verschiedenen Zeilen</td>
									<td></td>
								</tr>
								<tr>
									<td></td>
									<td>$$\text{Elementare Zeilenumfornung verändern den Rang einer Matrix nicht!}$$</td>
									<td></td>
								</tr>
								<tr>
									<td>Inverse einer Matrize</td>
									<td>$$A^{-1} = \frac{1}{det(A)} \cdot \breve{A}$$</td>
									<td></td>
								</tr>
								<tr>

									<td></td>
									<td>$$\begin{bmatrix} a & b\\ c & d \end{bmatrix}^{-1} = \frac{1}{ad-bc} \cdot \begin{bmatrix} d & -b\\ -c & a \end{bmatrix}$$
									</td>
									<td></td>
								</tr>


						</table>
						<ol style="list-style-type:none">
							<li><b>Diagonalisierbarkeit mit Beispiel in R4</b>
							</li>
						</ol>

						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								  <ol style="list-style-type:none">
									  <li><b>Folgende Schritte sind das Rezept:</b></li>
									  <li>$$\text{ 1. Wir wählen eine Basis E von V und bestimmen die Matrix } M_f^{EE}$$</li>
									  <li>$$\text{2. Wir bestimmen das charakteristische Polynom } \\[1ex]
\hspace*{10mm} \chi_f(x) = det(x \cdot \mathbb{I}_n - M_f^{EE}) \\[1ex]$$</li>
									  <li>$$\text{3. Wir bestimmen die Nullstellen: } \\[1ex]$$</li>
									  <li>$$\text{4. Die Lösungsmenge des Gleichungssystem: } \\[1ex]$$</li>
									  <li>$$\text{5. Die Summe der Geometrischen Vielfalt aller Eigenwerte: } \\[1ex]$$</li>
									  <li>$$\text{6. Zu jedem Eigenwert die Basis berechnen: } \\[1ex]$$</li>
									  <li>$$\text{7. Die Basen aus Schritt 6 zu einer Matrix formen: } \\[4ex]$$</li>
									  <br>
									  <li>$$\text{Beispiel anhand einer } \mathbb{R}^4 \quad \text{Matrize}$$</li>
									  <li>$$\hspace*{14mm} M_f^{EE} = \begin{bmatrix}
1 & 1 & 1 & -1\\ 
2 & 0 & 1 & -1 \\ 
-4 & 4 & 3 & -4 \\ 
0 &0  & 0 &-1 
\end{bmatrix} \\[4ex]

\text{Das Charakterische Polynom berechnet sich wie folgt: } \\[1ex]
\chi_f(x) = det(\begin{bmatrix}
x-1 & -1 & -1 & 1\\ 
-2 & x & -1 & 1 \\ 
4 & -4 & x-3 & 4 \\ 
0 &0  & 0 &x+1 
\end{bmatrix}) = x^4 -3x^3 -3x^2 +7x + 6 \\[1ex]
\hspace*{12mm} Spec(f) = \{-1,2,3\}  \\[4ex]

\text{Die Bestimmung des Eigenraums von -1 } \\[1ex]
Eig(f,-1) = \begin{bmatrix}
-2 & -1 & -1 & 1\\ 
-2 & -1 & -1 & 1 \\ 
4 & -4 & -4 & 4 \\ 
0 &0  & 0 &0 
\end{bmatrix}
\cdot
\begin{bmatrix}
x_1\\ 
x_2 \\ 
x_3 \\ 
x_4
\end{bmatrix} = 
\begin{bmatrix}
0\\ 
0 \\ 
0 \\ 
0
\end{bmatrix} \\[2ex]
										  
\text{Mit Gauss erhält mal folgendes System:} \\[1ex]
x_1 + \frac{1}{2}x_2 + \frac{1}{2} x_3 - \frac{1}{2} x_4 = 0 \\[1ex]
x_2 + x_3 - x_4 = 0 \\[3ex]

\text{Daraus folgen 2 freie Variablen, wir parametisieren die Lösungsmenge.} \\[1ex]
a = x_3 \quad b = x_4  \quad \text{somit folgt: } Eig(f,-1) = \{(0,b-a,a,b) \mid a,b \in \mathbb{R} \} \\[3ex]

\text{Mit den Eigenvektoren erhalten wir die Basen: } \\[1ex]
(a,b) = (1,0) \quad (a,b) = (0,1) \rightarrow \  d_1^1 = (0,-1,1,0) \quad d_2^1 = (0,1,0,1)\\[4ex]
										  
										  \text{Die Bestimmung des Eigenraums von 2 } \\[1ex]
Eig(f,2) = \begin{bmatrix}
1 & -1 & -1 & 1\\ 
-2 & 2 & -1 & 1 \\ 
4 & -4 & -3 & 4 \\ 
0 &0  & 0 &3 
\end{bmatrix}
\cdot
\begin{bmatrix}
x_1\\ 
x_2 \\ 
x_3 \\ 
x_4
\end{bmatrix} = 
\begin{bmatrix}
0\\ 
0 \\ 
0 \\ 
0
\end{bmatrix} \\[2ex]

\text{Mit Gauss erhält mal folgendes System:} \\[1ex]
x_1 - x_2 - x_3 = 0 \\[1ex]
x_3 = 0 \\[1ex]
x_4 = 0 \\[3ex]

\text{Daraus folg eine freie Variable, wir parametisieren die Lösungsmenge.} \\[1ex]
a = x_3  \quad \text{somit folgt: } Eig(f,2) = \{(a,a,0,0) \mid a,b \in \mathbb{R} \} \\[3ex]

\text{Mit den Eigenvektoren erhalten wir die Basen: } \\[1ex]
a = 1 \rightarrow \  d_1^2 = (1,1,0,0) \\[4ex]
										  \text{Die Bestimmung des Eigenraums von 3 } \\[1ex]
Eig(f,2) = \begin{bmatrix}
2 & -1 & -1 & 1\\ 
-2 & 3 & -1 & 1 \\ 
4 & -4 & 0 & 4 \\ 
0 &0  & 0 &4 
\end{bmatrix}
\cdot
\begin{bmatrix}
x_1\\ 
x_2 \\ 
x_3 \\ 
x_4
\end{bmatrix} = 
\begin{bmatrix}
0\\ 
0 \\ 
0 \\ 
0
\end{bmatrix} \\[2ex]

\text{Mit Gauss erhält mal folgendes System:} \\[1ex]
x_1 - x_2  = 0 \\[1ex]
x_2 - x_3 = 0 \\[1ex]
x_4 = 0 \\[3ex]

\text{Daraus folg eine freie Variable, wir parametisieren die Lösungsmenge.} \\[1ex]
a = x_3  \quad \text{somit folgt: } Eig(f,3) = \{(a,a,a,0) \mid a,b \in \mathbb{R} \} \\[3ex]

\text{Mit den Eigenvektoren erhalten wir die Basen: } \\[1ex]
a = 1 \rightarrow \  d_1^2 = (1,1,1,0) \\[4ex]
										  
										  \text{Wir nehmen nun alle Eigenvekoren zusammen: } \\[1ex]

D = \{d_1^1,d_2^1.d_1^2.d_1^3\} = \{(0,-1,1,0),(0,1,0,1),(1,1,0,0),(1,1,1,0)\} \\[1ex]

M^{ED} = \begin{bmatrix}
0 & 0 & 1 & 1\\ 
-1 & 1 & 1 & 1 \\ 
1 & 0 & 0 & 1 \\ 
0 &1  & 0 & 0 
\end{bmatrix} \\[2ex]

\text{Wir benötigen nun das Inverse der Basiswechselmatrix} \\[1ex]

M^{DE} = (M^{DE})^{-1} \begin{bmatrix}
1 & -1 & 0 & 1\\ 
0 & 0 & 0 & 1 \\ 
2 & -1 & -1 & 1 \\ 
-1 &1  & 1 & -1 
\end{bmatrix} \\[2ex]

\text{Somit errechnet sich die Diagonalisierte Matrix: } \\[1ex]
M_f^{DD} = M^{DE} \cdot M_f^{EE} \cdot  M^{ED} =  \\[1ex]


\begin{bmatrix}
1 & -1 & 0 & 1\\ 
0 & 0 & 0 & 1 \\ 
2 & -1 & -1 & 1 \\ 
-1 &1  & 1 & -1 
\end{bmatrix}
\cdot 
\begin{bmatrix}
1 & 1 & 1 & -1\\ 
2 & 0 & 1 & -1 \\ 
-4 & 4 & 3 & -4 \\ 
0 &0  & 0 &-1 
\end{bmatrix}
 \cdot \begin{bmatrix}
0 & 0 & 1 & 1\\ 
-1 & 1 & 1 & 1 \\ 
1 & 0 & 0 & 1 \\ 
0 &1  & 0 & 0 
\end{bmatrix} \\[1ex]
=
\begin{bmatrix}
-1 & 0 & 0 & 0\\ 
0 & -1 & 0 & 0 \\ 
0 & 0 & 2 & 0 \\ 
0 & 0  & 0 & 3 
\end{bmatrix} \\[1ex]
										  
										  $$</li>
								</ol>
							
									  </div>
							</div>
<br>
						<ol style="list-style-type:none">
							<li><b>Charakteristische Polynome</b>
							</li>
						</ol>

						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<ol style="list-style-type:none">
									<li><b>Wir Subtrahieren eine Einheitsmatrix welche wir mit X Multiplizieren von einer Matrix unserer Wahl um die Eigenwerte/vektoren zu erhalten.</b>
									</li>


									<li>$$\text{Wir betrachten folgende Matrix}: M=\begin{bmatrix} 1 &2 \\ 1 & 3 \end{bmatrix}$$
									</li>
									<br>
									<li>$$x \cdot \mathbb{I}_2 - M=\begin{bmatrix} x-1 &-2 \\ -1 & x-3 \end{bmatrix}$$

									</li> <br>
									<li>$$\text{Anschliessend berechnen wir die Determinante}$$</li>

									<li>$$\chi_f (x) = det(\begin{bmatrix} x-1 &-2 \\ -1 & x-3 \end{bmatrix}) = (x-1)(x-3)-(-1)(-2) = x^2-4x+1 $$

									</li>
									<br>
									<li>$$\text{Daraus folgen folgende Quadratische Lösungen welche somit die Eigenwerte sind:}$$
									</li>
									<li>$$\text{Spec}(f) = \{2-\sqrt{3},2+\sqrt{3}\}$$</li>
									<br>
									<li>$$\text{Nun geht es an den Eigenvektoren von: } \lambda = 2- \sqrt{3}$$</li>
									<li>$$\lambda \cdot \mathbb{1}_n - M_f^{EE} \begin{bmatrix} \lambda &0 \\ 0 & \lambda \end{bmatrix} - \begin{bmatrix} 1 &2 \\ 1 & 3 \end{bmatrix} \rightarrow \begin{bmatrix} \lambda-1 &-2 \\ -1 & \lambda-3 \end{bmatrix} \cdot \begin{bmatrix} x_1 \\ x_2 \end{bmatrix} = \begin{bmatrix} 0 \\ 0 \end{bmatrix}$$

									</li>
									<br>
									<li>$$ \text{Daraus folgt folgender Eigenvektor:} x_2 = 1$$</li>
									<li>$$ v = (-1-\sqrt{3},1)$$</li>
									<br>
									<li>$$ \text{Das überprüfen wir wie folgt:}$$</li>
									<li>$$f(v) = \begin{bmatrix} 1 &2 \\ 1 & 3 \end{bmatrix} \cdot \begin{bmatrix} -1-\sqrt{3} \\ 1 \end{bmatrix} = \begin{bmatrix} 1-\sqrt{3} \\ 2- \sqrt{3} \end{bmatrix}$$
									</li>
									<li>$$\lambda \cdot v = (2-\sqrt{3}) \cdot \begin{bmatrix} -1-\sqrt{3} \\ 1 \end{bmatrix} = \begin{bmatrix} (2-\sqrt{3})(-1-\sqrt{3}) \\ 2-\sqrt{3} \end{bmatrix} = \begin{bmatrix} 1-\sqrt{3} \\ 2-\sqrt{3} \end{bmatrix} $$
									</li>

									<li>$$\text{folglich: } f(v) = \lambda v$$</li>
								</ol>
							</div>
						</div>

						<br><br>
						<ol style="list-style-type:none">
							<li><b>Eigenwerte und Eigenvektoren</b>
							</li>
						</ol>

						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<ol style="list-style-type:none">
									<li><b>Die Menge aller Eigenwerte von f definiert sich wie folgt:</b>
									</li>
									<li>$$\text{Spec}(f) := \{ \lambda \in \mathbb{R} \mid \lambda \quad \text{ist Eigenwert von} f \}$$</li>
									<br>
									<li>$$\text{Für die Nullabbildung } 0: \quad \mathbb{R}^2 \rightarrow \mathbb{R}^2 \quad \text{gelten:} $$

									</li>
									<li>$$\text{Spec}(0) = \{0\} \quad \text{und} \quad \text{Eig}(0,0) = \mathbb{R}$$</li>
									<br>
									<li>$$\text{Für die Identität } Id_{\mathbb{R}^2}: \quad \mathbb{R}^2 \rightarrow \mathbb{R}^2 \quad \text{gelten:} $$

									</li>
									<li>$$\text{Spec}(Id_{\mathbb{R}^2}) = \{ 1 \} \quad \text{und} \quad \text{Eig}(Id_{\mathbb{R}^2},1) = \mathbb{R}$$
									</li><br>
									<li>$$\text{Für die Projektion } P_x : \mathbb{R}^2 \rightarrow \mathbb{R}^2 \quad \text{auf der X-Achse gelten:} $$

									</li>
									<li>$$\text{Spec}(P_x) = \{ 0,1 \} \quad \text{Eig}(P_x,0) = \langle (0,1) \rangle \quad \text{Eig}(P_x,1) = \langle (1,0) \rangle$$</li>
									<br>
									<li>$$\text{Für die Drehung } R_{\frac{\pi}{2}} : \mathbb{R}^2 \rightarrow \mathbb{R}^2 \quad \text{um den Ursprung} \quad \frac{\pi}{2} \quad \text{gilt:}$$

									</li>
									<li>$$ \text{Spec}(R_{\frac{\pi}{2}}) = \varnothing $$</li>
								</ol>
							</div>
						</div>


						<br><br>
						<ol style="list-style-type:none">
							<li><b>Basiswechsel mit Beispiel</b>
							</li>
						</ol>

						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<ol style="list-style-type:none">



									<li>$$ \text{Wir betrachten den Vektorraum:} \mathbb{R}^3, \text{und darin folgende Vektoren:} $$</li>
									<br>
									<li>$$d_1 = (1,0,0) , d_2 = (1,1,0) , d_3 = (1,1,1) , e_1 = (1,2,3) , e_2 = (3,2,1) , e_3 = (0,1,0)$$</li>
									<li>$$\text{Basen sind somit:} \quad D = {d_1,d_2,d_3} \quad \text{und} \quad E = {e_1,e_2,e_3}$$</li>
									<br><br>
									<li>$$v \in \mathbb{R}^3 = 2d_1 + d_2 - 3d_3 $$</li>
									<li>$$ v^D = \begin{bmatrix} 2 \\ 1 \\ -3 \\ \end{bmatrix}$$
									</li>
									<br><br>
									<li>$$\text{Nun stellen wir es mit den Basen von e dar}$$</li>
									<li>$$d_1 = \begin{bmatrix} 1\\ 0\\ 0 \end{bmatrix} = x \cdot \begin{bmatrix} 1\\ 2\\ 3 \end{bmatrix} + y \cdot \begin{bmatrix} 3\\ 2\\ 1 \end{bmatrix} + z \cdot \begin{bmatrix} 0\\ 1\\ 0 \end{bmatrix} = \begin{bmatrix} -\frac{1}{8}\\ \frac{3}{8}\\ -\frac{1}{2} \end{bmatrix} $$
									</li>
									<br><br>
									<li>$$v=a_1e_1+a_2e_2+a_3e_3 \rightarrow \text{Gleichungssystem lösen}$$</li>
									<br><br>
									<li>$$M^{ED} = (d_1)^E (d_2)^E (d_3)^E \rightarrow \begin{bmatrix} -\frac{1}{8} & -\frac{1}{8} & \frac{1}{4}\\ \frac{3}{8} & \frac{3}{8} & \frac{1}{4}\\ -\frac{1}{2} & \frac{1}{2} & 0 \\ \end{bmatrix} $$
									</li>
									<br><br>
									<li>$$\text{Die neue Basis errichnet sich somit mit der Basiswechselmatrix M:} \quad $$</li>
									<br><br>
									<li>$$v^E = M^{ED} \cdot v^D = \begin{bmatrix} -\frac{1}{8} & -\frac{1}{8} & \frac{1}{4}\\ \frac{3}{8} & \frac{3}{8} & \frac{1}{4}\\ -\frac{1}{2} & \frac{1}{2} & 0 \\ \end{bmatrix} \cdot \begin{bmatrix} 2 \\ 1 \\ -3 \\ \end{bmatrix} = \begin{bmatrix} -\frac{9}{8} \\ \frac{3}{8} \\ -\frac{1}{2} \\ \end{bmatrix}$$
									</li>

								</ol>
							</div>
						</div>
						<br><br>
						<ol style="list-style-type:none">
							<li><b>Anwendung auf lineare Gleichungsysteme</b>
							</li>
						</ol>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<ol style="list-style-type:none">

									<li>$$ \text{Wir betrachten ddas 2 x 2 LGS}$$</li>
									<br>
									<li>$$\begin{matrix} 2x_1 + 3x_2 = 1 \\ x_1 -2x_2 = -2 \end{matrix}$$
									</li>
									<li>$$\text{Die Koeffizientenmatrix ist somit:} \begin{bmatrix} 3 & 2 \\ 1 & -2 \end{bmatrix}$$
									</li>
									<li>$$\text{Der Konstantevektor ist somit:} \begin{bmatrix} 1 \\ -2 \end{bmatrix}$$
									</li>
									<li>$$ \text{Die Determinante von A ist somit:} det(A) = -7 $$</li>
									<br><br>
									<li>$$\text{Das Inverse von A ist} A^{-1} = -\frac{1}{7} \begin{bmatrix} -2 & -3 \\ -1 & 2 \end{bmatrix} = \begin{bmatrix} -\frac{2}{7} & \frac{3}{7} \\ \frac{1}{7} & -\frac{2}{7} \end{bmatrix}$$
									</li>
									<br><br>
									<li>$$\text{Die Lösungsmenge ergibt sich demnach wie folgt:}$$</li>
									<br><br>
									<li>$$x = A^{-1}\cdot b = \begin{bmatrix} -\frac{2}{7} & \frac{3}{7} \\ \frac{1}{7} & -\frac{2}{7} \end{bmatrix} \begin{bmatrix} 1 \\ -2 \end{bmatrix} = \begin{bmatrix} -\frac{4}{7} \\ \frac{5}{7} \end{bmatrix} $$
									</li>
									<br><br>
									<li>$$x_1 = -\frac{4}{7} \qquad x_2 = \frac{5}{7}$$</li>


								</ol>
							</div>
						</div>
					</div>
				</div>
				<br>
				<h2>Lineare Abbildungen</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<table>
							<tr>
								<td>Identität</td>
								<td>$$ E\rightarrow E, \;x \mapsto x $$</td>
								<td>Die Abbildung, die jedes Element von E auf sich abbildet, heisst die Identität von E oder identische Abbildung von E und wird mit Id<sub>E</sub> bezeichnet.</td>
							</tr>
							<tr>
								<td>Komposition</td>
								<td>$$ f:E\rightarrow F \; \small \text{ und } \normalsize \; g:F\rightarrow G \\ \text{ } \\ g \circ f: E\rightarrow G,x \mapsto g (f(x)) $$</td>
								<td>Wenn der Wertevorrat von f gleich dem Definitionsbereich von g ist, dann kann eine neue Abbildung definiert werden. Es wird gelesen als g nach f.</td>
							</tr>
							<tr>
								<td></td>
								<td>$$\text{ Kompositione sind assoziativ: } (h \circ g) \circ f = h \circ (g \circ f) $$</td>
								<td></td>
							</tr>
							<tr>
								<br>
								<td></td>
								<td>$$\text{ Eine Abbildung heisst Linear falls: } f: V \rightarrow W $$</td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td>$$ f(rx+y) = rf(x)+f(y)\quad \text{ für alle } x,y \in \mathbb{V} \quad \text{ und alle } r \in \mathbb{R}$$</td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td>$$ f:G \rightarrow H \quad \text{ ist Homomorph falls} \quad f(x \cdot y)=f(x) \cdot f(y) \quad x,y \in G $$</td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td>$$\text{bijektiver Homomorphismus = Isomorphismus } $$</td>
								<td></td>
							</tr>
							<br> <br>
							<tr>
								<td>Kern</td>
								<td>$$ \text{Ker}(f) := f^{-1}(0) = \left \{ x\in V \mid f(x)=0 \right \} $$</td>
								<td>Die Menge aller Elemente von V, welche nach 0 abgebildet werden. heisst der Kern von f.</td>
							</tr>
							<tr>
								<td></td>
								<td>$$ \text{Injektiv wenn:} \quad \text{Ker}(f) = 0 \qquad \text{Surjektiv wenn:} \quad \text{rg}(f) = \text{dim}(W)$$</td>
								<td></td>
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
								<td>Die Maximale Anzahl linear unabhängiger Zeilen einer Matrize</td>
							</tr>
							<tr>
								<td></td>
								<td>$$ \text{def}(f) + \text{rg}(f) = \text{dim}(v) $$</td>
								<td></td>
							</tr>
						</table>

					</div>
				</div>
				<br>
				<h2>Matritzen</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<ol style="list-style-type:none">
							<table class="table">
								<thead>
									<tr>
										<th>Bezeichnung</th>
										<th>Formel</th>
										<th>Grafik</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td></td>
										<td>$$ A = \begin{bmatrix}7 &5 &0 \\ 2 &2 & 1 \end{bmatrix} \qquad A_{(i),(j)} = A_{23} = 1 $$</td>
										<td>Allgemein sprechen wir vom Eintrag mit Index ij einer Matrix A und schreiben dafür A<sub>ij</sub><br> <b>Zeilen x Spalten</b> </td>
									</tr>
									<tr>
										<td></td>
										<td>$$ \text{Typ}(A) = (m,n) $$</td>
										<td>Ist A eine Matrix mit <b>m</b> Zeilen und <b>n</b> Spalten, so ist es eine m-kreuz-n Matrix.</td>
									</tr>
									<tr>
										<td>Untermatrizen</td>
										<td>$$A = \footnotesize \begin{bmatrix}1 &3 & \color{grey}2 &1 &1 &0 \\ \color{grey} 2& \color{grey}2 & \color{grey}0 & \color{grey}0 & \color{grey}0 & \color{grey}1 \\3 &2 & \color{grey}1 &3 &2 &1 \\ 1 &0 & \color{grey}0 &1 &1 &0 \end{bmatrix} \; \:\normalsize \hat{A}_{23} = \footnotesize \begin{bmatrix}1 &3 &1 &1 &0 \\ 3 &2 &3 &2 &1 \\ 1 &0 &1 &1 &0\end{bmatrix} $$</td>
										<td>Lässt man in A die zweite Zeile und die dritte Spalte weg, so erhält man eine neue Matrix vom Typ 3x5. <br> Die neue Matritze wird Untermatritze gennant und mit <sub>ij</sub> werden die weggelassenen Zeilen/Spalten angeben.</td>
									</tr>
									<tr>
										<td>Transposition</td>
										<td>$$ A=\begin{bmatrix}1 &2 \\ 3 &-1 \end{bmatrix} \: \; A^t=\begin{bmatrix}1 &3 \\ 2 &-1 \end{bmatrix} \qquad (A^t)_{ij}=A_{ji} \text{ und }(A^t)^t = A $$</td>
										<td>Die Einträge von A<sup>t</sup> sind dieselben jedoch werden Zeilen und Spalten vertauscht.</td>
									</tr>
									<tr>
										<td></td>
										<td>$$ (A+B)^t = A^t + B^t \text{ und } (rA)^t = rA^t $$</td>
										<td></td>
									</tr>
									<tr>
										<td>Nullmatrix</td>
										<td>$$ 0_{2,3} =\begin{bmatrix}0 &0 &0 \\ 0&0 &0 \end{bmatrix} = 0 $$</td>
										<td>Die Matrix vom Typ (m,n), deren Einträge alle 0 sind, nennen wir die Nullmatrix vom Typ (m,n).</td>
									</tr>
									<tr>
										<td>Standardmatrix</td>
										<td>$$ E_{[12]}=\begin{bmatrix}0 &1 \\ 0&0 \end{bmatrix} $$</td>
										<td>Eine Standardmatrix ist eine Matrix die genau einen Eintrag 1 und sonst lauter Einträge 0 hat.</td>
									</tr>
									<tr>
										<td></td>
										<td>$$ dim(\mathbb{M}(m,n)) = m \cdot n $$</td>
										<td>Die Standardmatrizen vom Typ (m,b) vilden eine Basis des Vektorraums M(m,n)</td>
									</tr>
									<tr>
										<td>Diagonalmatrizen</td>
										<td>$$ \text{diag}(1,2,3) = \begin{bmatrix}1 &0 &0 \\ 0 &2 &0 \\ 0 &0 &3 \end{bmatrix} $$</td>
										<td>Falls alle Einträge 0 sind abgesehen von der Diagonale.</td>
									</tr>
									<tr>
										<td>Obere Dreiecksmatrix</td>
										<td>$$ \begin{bmatrix}35 & 65 & 70 & 51 \\ 0 & 97 & 48 & 88 \\ 0 & 0 & 22 & 88 \\ 0 & 0 & 0 & 40 \\\end{bmatrix} $$</td>
										<td>Falls alle Einträge oberhalb der Diagonale 0 sind, ist es eine obere Dreiecksmatrix.</td>
									</tr>
									<tr>
										<td>Untere Dreiecksmatrix</td>
										<td>$$ \begin{bmatrix}8 & 0 & 0 & 0 \\ 37 & 93 & 0 & 0 \\ 13 & 64 & 41 & 0 \\65 & 10 & 93 & 46 \\\end{bmatrix} $$</td>
										<td>Falls alle Einträge unterhalb der Diagonale 0 sind, ist es eine untere Dreiecksmatrix.</td>
									</tr>
									<tr>
										<td>Symmetrisch/Schiefsymmetrisch</td>
										<td>$$ \begin{bmatrix}1 &2 &3 \\ 2& 5 &6 \\ 3 &6 &8 \end{bmatrix} \quad A^t = A \qquad \begin{bmatrix}0 &2 &3 \\ -2& 0 &6 \\ -3 &-6 &0 \end{bmatrix} \quad A^t = -A $$</td>
										<td></td>
									</tr>
									<tr>
										<td></td>
										<td>$$ \text{Eine Quadratische Matrize ist genau dann Symmetrisch und schiefsymmetrisch} \\ \text{ wenn sie eine Nullmatrix ist.} \\ \text{Diagonalmatrizen sind symmetrisch} \\ \text{Dreiecksmatrizen sind symmetrisch wenn sie Diagonalmatrizen sind}$$</td>
										<td></td>
									</tr>
									<tr>
										<td>Einheitsmatrizen</td>
										<td>$$ \mathbb{I}_3 = \text{diag}(1,1,1) =\begin{bmatrix}1 &0 &0 \\ 0 &1 &0 \\ 0 &0 &1 \end{bmatrix} $$</td>
										<td>Einheitsmatrizen sind symmetrische Diagonalmatrizen</td>
									</tr>
									<tr>
										<td>Spur</td>
										<td>$$ \text{tr}(\begin{bmatrix}2 &3 \\ 5 &7 \end{bmatrix}) = 2+7 = 9 $$</td>
										<td>Die Spur einer quadratischen Matrix ist die Summe der Einträge auf der Diagonalen.</td>
									</tr>
									<tr>
										<td></td>
										<td>$$ \text{tr}(A^t) = \text{tr}(A) \qquad \text{tr}(AB) = \text{tr}(BA)$$</td>
										<td></td>
									</tr>
									<tr>
										<td>Dimension</td>
										<td>$$ \dim(\mathbb{M}(2,2)) = 4 $$</td>
										<td>Die Anzahl möglicher Einträge in eine Matrix, geben die Dimension an.</td>
									</tr>



							</table>
							<li><b>Determinante</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<table>
										<tr>
											<td>Determinante</td>
											<td>$$ \text{det}(\begin{bmatrix}2 &3 \\ 5 &7 \end{bmatrix})=2\cdot 7 - 5\cdot 3 = -1 $$</td>
											<td>Für nicht quadratische Matrizen ist die Determinante nicht definiert.</td>
										</tr>
										<tr>
											<td></td>
											<td>$$ \scriptsize \text{det}(\begin{bmatrix}4 &6 &1 \\ 10 &8 &5 \\ 0 &0 &1 \end{bmatrix}) = 4\cdot \text{det}\begin{bmatrix}8 &5 \\ 0 &1 \end{bmatrix}-10\cdot \text{det}\begin{bmatrix}6 &1 \\ 0 &1 \end{bmatrix}+0\cdot \text{det}\begin{bmatrix}6 &1 \\ 8 &5 \end{bmatrix} \\ =4(8-0)-10(6-0)+0(30-8)=32-60+0=-28 $$</td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td>$$ \text{Bei einer oberen/unteren Dreiecksmatrize ist die det(A) wie folgt definiert:}$$</td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td>$$ det(A) = a_{11} \cdot a_{22} ... \cdot a_{nn}$$</td>
											<td></td>
										</tr>
										<tr>
											<td>Elementare Zeilenumformung:</td>
											<td>
												<ol style="list-style-type:none">
													<li><b>Zwei Zeilen Miteinader vertauschen</b>
													</li>
													<ul>
														<li>Die Determinante ändert sich um den Faktor "-1"</li>
													</ul>
													<li><b>Eine Zeile mit einer reelen Zahl (r) multiplizieren</b>
													</li>
													<ul>
														<li>Die Determinante ändert sich um den Faktor "r"</li>
													</ul>
													<li><b>Ein reelles Vielfaches einer anderen Zeile addieren</b>
													</li>
													<ul>
														<li>Die Determinante ändert sich nicht</li>
													</ul>
											</td>
											<td></td>
										</tr>

									</table>
								</div>
							</div>

							<li><b>Rechnen mit Matritzen</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<table>
										<tr>
											<td></td>
											<td>$$ \begin{bmatrix}2 &1 \\ -1 &3 \end{bmatrix} + \begin{bmatrix}0 &5 \\ -2 &-2\end{bmatrix} = \begin{bmatrix}2 &6 \\ -3 &1 \end{bmatrix} $$</td>
											<td>Funktioniert nur mit Matritzen vom selbem Typ <br> Subtraktion ist genau gleich!</td>
										</tr>
										<tr>
											<td></td>
											<td>$$ 2 \cdot \begin{bmatrix}2 &1 \\ -1 &3 \end{bmatrix} = \begin{bmatrix}4 &2\\ -2 &6 \end{bmatrix} $$</td>
											<td>Multiplikation mit einem Faktor</td>
										</tr>
										<tr>
											<td rowspan="3" width=20%>Matrizenmultiplikation</td>
											<td width=42%>$$ \small \begin{bmatrix}2 &3 \\ 5 &7 \end{bmatrix} \cdot \begin{bmatrix}4 &6 \\ 10 &8 \end{bmatrix} = \begin{bmatrix}2\cdot 4+3\cdot 10 &2\cdot 6+3\cdot 8 \\ 5\cdot 4+7\cdot 10 &5\cdot 6+7\cdot 8 \end{bmatrix} = \begin{bmatrix}38 &36 \\ 90 &86 \end{bmatrix} $$</td>
											<td><img src="bilder/matrizen/multiplikation.jpeg" style="max-height:35%; max-width:80%">
											</td>
										</tr>
										<tr>
											<td>$$ \scriptsize \begin{bmatrix}1 &2 &3 \\ 5 &1 &2 \\ 1 &0 &2 \end{bmatrix} \cdot\begin{bmatrix}3 &1 &1 \\ 0 &5 &1 \\ 2 &4 &1\end{bmatrix}=\begin{bmatrix}0+3+6 &1+10+12 &1+2+3 \\ 15+0+4 &5+5+8 &5+1+2 \\ 3+0+4 &1+0+2 &1+0+2 \end{bmatrix} $$</td>
											<td><img src="bilder/matrizen/multiplikation_3x3.jpeg" style="max-height:30%; max-width:80%">
											</td>
										</tr>
										<tr>
											<td>$$ \small \begin{bmatrix}2 &3 &-1 &5 \end{bmatrix} \cdot \begin{bmatrix}7\\ 6\\ 0\\ 2\end{bmatrix} = 2\cdot 7+3\cdot 6+(-1)\cdot 0+5\cdot 2 = 42 $$</td>
											<td>Liefert eine 1x1-Matrix, was einfach eine Zahl ist.</td>
										</tr>
										<tr>
											<td></td>
											<td>$$\text{Matrizenmultiplikation ist nicht kommutativ} $$</td>
											<td></td>
										</tr>
										<tr>
											<td></td>
											<td>$$\text{Die Einheitsmatrize} \quad \mathbb{I}_n \quad \text{ist das multiplikative Neutralelemnt von} \quad \mathbb{M}(n)$$</td>
											<td></td>
										</tr>


									</table>

								</div>
							</div>

							</ol>
					</div>
				</div>
				<br>
				<h2>Komplexe Zahlen</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<ol style="list-style-type:none">

							<table>
								<tr>
									<th>Bezeichnung</th>
									<th>Erklärung</th>
									<th>Zusatz</th>
								</tr>
								<tr>
									<td>Jede Komplexe Zahl hat einen Imanigären Teil und einen Realen Teil</td>
									<td>$$\mathbb{C} = \{(x,y) \vert x,y \epsilon \mathbb{R}\} \\ z = (\Re(z),\Im(z))$$</td>
									<td></td>
								</tr>
							</table>

							<li><b>Addition / Subtraktion von Komplexen Zahlen</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<li>$$(x,y) + (v,w) = (x + v , y + w) \\ \Re(z \pm w) = Re(z) \pm Re(w)\; und\; Im(z \pm w) = Im(z) \pm Im(w)$$</li>
									<li>Die Addition / Subtraktion ist assoziativ und kommutativ</li>
									<li>Die komplexe Zahl (0,0) ist das Neutralelement</li>
									<li>Jede komplexe Zahl (x,y) hat ein additives Inverses, (-x,-y) </li>
								</div>
							</div>
							<li><b>Multiplikation von Komplexen Zahlen</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<li>$$(x,y) \cdot (v,w) = (x\cdot v-y\cdot w , x\cdot w+y\cdot v)$$</li>
									<li>Die Multiplikation ist assoziativ und kommutativ</li>
									<li>Die komplexe Zahl (1,0) ist das Neutralelement</li>
									<li>Jede komplexe Zahl ausser (0,0) hat ein multiplikatives Inverses </li>
								</div>
							</div>
							<li><b>Konjugation von Komplexen Zahlen</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<li>$$Re(\overline{z}) = Re(z)$$</li>
									<li>$$Im(\overline{z}) = - Im(z)$$</li>
									<li>$$(\overline{\overline{z}}) = z$$</li>
									<li>$$\frac{1}{2}(z+\overline{z}) = Re(z)$$</li>
									<li>$$\frac{1}{2}(z-\overline{z}) = Im(z)(0,1)$$</li>
									<li>$$z \cdot \overline{z} = Re(z)^2 + Im(z)^2$$</li>
									<li><b>Daraus folgen folgende Regeln:</b>
									</li>
									<li>$$\overline{z\pm w} = \overline{z} \pm \overline{w}$$</li>
									<li>$$\overline{z \cdot w} = \overline{z} \cdot \overline{w}$$</li>
									<li>$$\overline{(\frac{z}{w})} = \frac{\overline{z}}{\overline{w}} \quad falls w \quad \not = (0,0)$$</li>
								</div>
							</div>
							<li><b>Betrag von Komplexen Zahlen</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<li><b>$$\vert (x,y)\vert = \sqrt{x^2+y^2}$$</b>
									</li>
									<li>$$\vert \overline{z} \vert = \vert z \vert$$</li>
									<li>$$\vert \overline{z} \vert = \sqrt{Re(z)^2 + Im(z)^2}$$</li>
									<li>$$ z\overline{z} = \vert z \vert ^2$$</li>
									<li>$$ \frac{1}{z} = \frac{\overline{z}}{\vert z \vert ^2} \text{falls} z \not = (0,0)$$</li>

									<li><b>Bei 2 Zahlen gilt somit:</b>
									</li>
									<li>$$\vert z \cdot w \vert = \vert z \vert \cdot \vert w \vert $$</li>
									<li>$$ \vert \frac{z}{w} \vert = \frac{\vert z \vert}{\vert w \vert} \quad \text{falls} \quad w \quad \not = (0,0)$$</li>

								</div>
							</div>
							<li><b>Die Imanigäre Einheit i</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<li>$$i = (0,1) \epsilon \mathbb{C}$$</li>
									<li>$$\overline{i} = -i$$</li>
									<li>$$\vert i \vert = 1$$</li>
									<li>$$ i^2 = -1$$</li>
									<li>$$ e^{i\pi} = -1$$</li>
									<li>$$ e^{ix} = cis(x)$$</li>
									<li>$$cis(\phi) = cos(\phi) + i\cdot sin(\phi)$$</li>
								</div>
							</div>
							<li><b>Rechnen in kartesischer Darstellung</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<li><b>$$x+yi \quad und v+wi$$</b>
									</li>
									<li>$$\vert x + yi \vert = \sqrt{x^2 + y^2}$$</li>
									<li>$$\overline{x+yi} = x-yi$$</li>
									<li>$$(x+yi) \pm (v+wi) = x \pm v + (y \pm w)i$$</li>
									<li>$$(x+yi) \cdot (v+wi) = xv - yw + (xw + yv)i$$</li>
									<li>$$\frac{x+yi}{v+wi} = \frac{xv+yw}{v^2+w^2} + \frac{yv - xw}{v^2 +w^2} \text{falls} v+wi \not = 0$$</li>

								</div>
							</div>
							<li><b>Umwandlung von Polar + Kartesischen Koordinaten</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<li><b>$$ \text{Der Punkt mit den Polarkoodinaten} \quad (r,\phi) \quad \text{wird zu} $$</b>
									</li>
									<li>$$(r\cdot cos(\phi),r\cdot sin(\pi))$$</li>
									<li>$$\text{Kartesisch: (x,y)}$$</li> <br>

									<li><b>Der Punkt mit den kartesischen Koordinaten (x,y) wird zu</b>
									</li>
									<li>$$(\sqrt{x^2+y^2},\phi), \phi \epsilon [0,2\pi[$$</li>
									<li>$$\frac{x+yi}{v+wi} = \frac{xv+yw}{v^2+w^2} + \frac{yv - xw}{v^2 +w^2} \quad \text{falls} \quad v+wi \quad \not = \quad 0$$</li>
									<li><b>Bedienungen</b>
									</li>
									<li>$$\text{Falls} \quad x > 0 \; \text{und}\; y \geq 0, \;\text{so gilt} \;\phi = arctan(\frac{y}{x}) $$</li>
									<li>$$\text{Falls} \quad x > 0 \; \text{und}\; y
										< 0, \; \text{so gilt}\; \phi=a rctan(\frac{y}{x}) + 2\pi $$</li>
											<li>$$\text{Falls} \quad x
												< 0 , \;\text{so gilt}\; \phi=a rctan(\frac{y}{x}) + \pi $$</li>
													<li>$$\text{Falls} \quad x = 0 \;\text{und}\; y > 0, \; \text{so gilt}\; \phi = \frac{\pi}{2} $$</li>
													<li>$$\text{Falls} \quad x = 0 \;\text{und}\; y
														< 0, \; \text{so gilt}\; \phi=\ frac{3\pi}{2} $$</li>
															<li>$$ \text{Polar:} \quad (\vert z \vert, arg(z))$$</li>

								</div>
							</div>
							<li><b>Rechnen in Polardarstellung</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<li><b>$$r\cdot cis(\phi) \quad und \quad s\cdot cis(\gamma)$$</b>
									</li>
									<li>$$\vert r\cdot cis(\phi) \vert = r$$</li>
									<li>$$\overline{r\cdot cis(\phi)} = r\cdot cis(-\phi)$$</li>
									<li>$$r\cdot cis(\phi) \cdot s\cdot cis(\gamma) = r\cdot s\cdot cis(\phi + \gamma)$$</li>
									<li>$$(r\cdot cis(\phi))^{-1} =\frac{1}{r} \cdot cis(-\gamma) ;\ \text{falls} \; r\cdot cis(\phi) \not = 0$$</li>
									<li>$$ \frac{r\cdot cis(\phi)}{s\cdot cis(\gamma)} = \frac{r}{s} \cdot cis(\phi - \gamma) \; \text{falls} \; s\cdot cis(\gamma) \not = 0 $$</li>

								</div>
							</div>
							<li><b>Rechnen in Exponentialdarstellung</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<li><b>Wir betrachen die komplexen Zahlen </b>
									</li>
									<li><b>$$re^{i\phi} \quad und \quad se^{i\gamma}$$</b>
									</li>
									<li>$$Re(r\cdot e^{i\phi}) = cos(x)$$</li>
									<li>$$Im(r\cdot e^{i\phi}) = sin(x)$$</li> <br>

									<li>$$\vert r\cdot e^{i\phi} \vert = r$$</li>
									<li>$$\overline{r\cdot e^{i\phi}} = r\cdot e^{-i\phi}$$</li>
									<li>$$r\cdot e^{i\phi} \cdot s\cdot e^{i\gamma} = r\cdot s\cdot e^{(\phi + \gamma)}$$</li>
									<li>$$(r\cdot e^{i\phi})^{-1} =\frac{1}{r} \cdot e^{-i\phi} \; \text{falls} \; r\cdot e^{i\phi} \not = 0$$</li>
									<li>$$ \frac{r\cdot e^{i\phi}}{s\cdot e^{i\gamma}} = \frac{r}{s} \cdot e^{(\phi - \gamma)} \; \text{falls} \; s\cdot e^{i\gamma} \not = 0 $$</li>

								</div>
							</div>
							<li><b>Umformungen nach Moivre</b>
							</li>
							<div class="pre-spoiler">
								<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
								<div class="spoiler" style="display: none;">
									<li><b>$$ \text{Für} \quad z= r\cdot e^{i\phi} = r\cdot cis(\phi) \epsilon \mathbb{C} \; \text{und} \; n \epsilon\; \mathbb{Z} \quad gilt:$$ </b>
									</li>
									<li>$$ z^n = r^n\cdot e^{in\phi} = r^n\cdot cis(n\phi)$$></li>

								</div>
							</div>

					</div>
				</div>
				<br>
				<h2>Gleichungen</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<table>
							<tr>
								<th>Definition</th>
								<th>Gleichung</th>
								<th>Zusatz</th>
							</tr>
							<tr>
								<td>Funktion 1. Grades</td>
								<td>$$x + y = 1 \rightarrow p = 1$$</td>
								<td>Lineare Gleichung</td>
							</tr>
							<tr>
								<td>Funktion 2. Grades</td>
								<td>$$x^2 + y = 1 \rightarrow p = 2$$</td>
								<td>Quadratische Gleichung</td>
							</tr>
							<tr>
								<td>Funktion 3. Grades</td>
								<td>$$x^2 + y^3 = 1 \rightarrow p = 3$$</td>
								<td>Kubische Gleichung</td>
							</tr>
							<tr>
								<td>Gleichungen mit einer Variablen</td>
								<td>$$ \qquad \mathbb{L} \quad von \quad ax + b = cx + d \qquad$$ </td>
								<td>$$a \quad \not = \quad c, \text{so gilt:}\; \mathbb{L} = \{\frac{d - b}{a - c}\} \\ a = c \;\text{und}\; b = d, \text{so gilt:}\; \mathbb{L} = \{\mathbb{R}\} \\ a = c\; \text{und}\; b \not = d, \text{so gilt:}\; \mathbb{L} = \{\emptyset\} $$
								</td>
							</tr>
							<tr>
								<td>Degenerierte Gleichung</td>
								<td>Eine Gleichung ist degeneriert falls alle Koeffizienten 0 sind. </td>
								<td>$$0x_1 + 0x_2 + .... 0x_n = b$$</td>
							</tr>
							<tr>
								<td>Quadratische Gleichung</td>
								<td>$$\mathbb{L} \quad von \quad ax^2 + bx + c = 0 \\ D = b^2 - 4ac$$</td>
								<td>$$D
									< 0, \text{so gilt:} \; \mathbb{L}=\ emptyset \\ D=0 , \text{so gilt:} \; \mathbb{L}=\ {\frac{-b}{2a}\} \\ D> 0, \text{so gilt} \; \mathbb{L} = \{\frac{-b+\sqrt{D}}{2a},\frac{-b-\sqrt{D}}{2a}\} $$</td>
							</tr>
						</table>
						<li><b>Gleichungssysteme</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<ol style="list-style-type:none">
									<li><b>Lineare Gleichungssysteme</b>
										<ul>
											<li>Falls in einem Gleichungssystem eine degenerierte Gleichung vorkommt, kann diese weggelassen werden.</li>
											<li>Hat das Gleichungssystem eine degenerierte Gleichung <br> mit 0 verschiedener Konstanten, so hat das System keine Lösung.</li>
										</ul>
									</li>
									<li><b>Dreiecksform</b>
										<ul>
											<li>Ein Gleichungssystem mit gleich vielen Variablen wie Gleichungen.</li>
											<li>Einfach mit Rücksubstitution zu lösen</li>
										</ul>
									</li>
									<li><b>Treppenform</b>
										<ul>
											<li>Leitvariable --> erste Variable welche nicht 0 ist</li>
											<li>Das System kann man gleich viele Gleichungen wie Variablen haben</li>
											<li>Eine Variable welche keine Leitvariable ist wird "freie Variable" genannt.</li>
										</ul>
									</li>
									<li><b>Homogene Systeme</b>
										<ul>
											<li>Ein Gleichungssystem ist homogen wenn alle Gleichungen = 0 sind.</li>
											<li>Jedes Gleichungssystem hat die Banale Lösung 0</li>
											<ul>
												<li>Falls m(Gleichunge) = n(Variablen) --> nur banale Lösung</li>
												<li> Falls m ungleich n --> mehrere Lösungen</li>
											</ul>
										</ul>
									</li>
								</ol>


							</div>
						</div>

					</div>
				</div>
				<br>
				<h2>Vektoren</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<table>
							<tr>
								<th>Definition</th>
								<th>Gleichung</th>
								<th>Zusatz</th>
							</tr>
							<tr>
								<td>Betrag eines Vektors</td>
								<td>$$\vert \vec{a} \vert = \sqrt{(a_1)^2+(a_2)^2}$$</td>
								<td></td>
							</tr>
							<tr>
								<td>Addition / Subtraktion</td>
								<td>$$ \vec{a} \pm \vec{b} = \begin{pmatrix}a_{x}\\ a_{y}\\ a_{z}\end{pmatrix}\pm\begin{pmatrix}b_{x}\\ b_{y}\\ b_{z}\end{pmatrix}=\begin{pmatrix}a_{x} \pm b_{x}\\ a_{y} \pm b_{y}\\ a_{z} \pm b_{z}\end{pmatrix} $$</td>
								<td>Das gleiche Gilt auch für die Multiplikation</td>
							</tr>
							<tr>
								<td>Das Skalarpordukt</td>
								<td>$$\langle \vec{a}, \vec{b} \rangle = a_1 \cdot b_1 + a_2 \cdot b_2 + a_3 \cdot b_3$$</td>
								<td>$$\langle \vec{a}, \vec{b} \rangle = \mid \vec{a} \mid \cdot \mid \vec{b} \mid \cdot cos(\alpha) \\ cos(\alpha) = \frac{\vec{a}\cdot \vec{b}}{\vert \vec{a} \vert\cdot \vert \vec{b} \vert}$$</td>
							</tr>
							<tr>
								<td></td>
								<td>$$\text{Fläche eines Parallelogramms ist somit:} \qquad \mid \langle \vec{a},\vec{b}\rangle \mid = A$$ </td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td>$$\text{Fläche eines Dreiecks ist somit:} \qquad \mid \langle \vec{a},\vec{b}\rangle \mid = \frac{A}{2}$$ </td>
								<td></td>
							</tr>
							<tr>
								<td></td>
								<td>$$\text{Es ist antikommutativ:} \qquad \vec{b} \cdot \vec{a} = - (\vec{a} \cdot \vec{b})$$ </td>
								<td></td>
							</tr>
							<tr>
								<td>Das Vektorprodukt oder Kreuzprodukt</td>
								<td>$$ \vec{c}=\vec{a} \times\vec{b} = \begin{pmatrix}a_{x}\\ a_{y}\\ a_{z}\end{pmatrix}\times\begin{pmatrix}b_{x}\\ b_{y}\\ b_{z}\end{pmatrix} = \begin{pmatrix}a_{y}b_{z}-a_{z}b_{y}\\ a_{z}b_{x}-a_{x}b_{z}\\ a_{x}b_{y}-a_{y}b_{x} \end{pmatrix} $$</td>
								<td>$$\mid \vec{a}\times \vec{b} \mid = \mid \vec{a} \mid \cdot \mid \vec{b} \mid \cdot sin(\alpha)$$</td>
							</tr>

							<tr>
								<td></td>
								<td>$$\text{Vektoren stehen senkrecht aufeinenader wenn gilt:} \qquad (a\times b) = 0 $$</td>
								<td></td>
							</tr>
						</table>
						<li><b>Verschiedene Vektoridenditäten</b>
						</li>
						<div class="pre-spoiler">
							<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Zuklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Aufklappen';}" value="Aufklappen">
							<div class="spoiler" style="display: none;">
								<table>
									<tr>
										<th>Idenditäten</th>
									</tr>
									<tr>
										<td>$$ \text{Grassmannidentität} \qquad \vec{a} \times (\vec{b} \times \vec{c}) = \langle \vec{a},\vec{c} \rangle \cdot \vec{b} - \langle \vec{a}, \vec{b} \rangle \cdot \vec{c}$$</td>
									</tr>
									<tr>
										<td>$$ \text{Korollarität} \qquad (\vec{a} \times \vec{b}) \times \vec{c} = \langle\vec{a}, \vec{c} \rangle \cdot \vec{b} - \langle \vec{b} , \vec{c} \rangle \cdot \vec{a}$$</td>
									</tr>
									<tr>
										<td>$$ \text{Jacobiidentität} \qquad \vec{a} \times (\vec{b} \times \vec{c}) - (\vec{a} \times \vec{b}) \times \vec{c} = \vec{b} \times (\vec{a} \times \vec{c})$$</td>
									</tr>
									<tr>
										<td>$$ \text{Korollarität} \qquad \vec{a} \times (\vec{b} \times \vec{c}) + \vec{b} \times (\vec{c} \times \vec{a}) + \vec{c} \times (\vec{a} \times \vec{b}) = 0$$</td>
									</tr>
									<tr>
										<td>$$ \text{Binet - Cauchy Identität:} \qquad \langle \vec{a} \times \vec{b} , \vec{c} \times \vec{d} \rangle = \langle \vec{a}, \vec{c} \rangle \cdot \langle \vec{b} , \vec{d} \rangle - \langle \vec{a}, \vec{d} \rangle \cdot \langle \vec{b} , \vec{c} \rangle$$</td>
									</tr>
									<tr>
										<td>$$ \text{Korollarität (Lagrangeidentität)} \qquad \vert \vec{a} \times \vec{b} \vert^2 = \vert \vec{a} \vert^2 \cdot \vert \vec{b} \vert^2 - \langle \vec{a} , \vec{b} \rangle^2$$</td>
									</tr>

								</table>
							</div>
						</div>


					</div>
				</div>
				<br>
				<h2>Vektorräume</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<table class="table">
							<tr>
								<td width=20%>Vektorraum</td>
								<td width=80% colspan="2"> Jede Menge, in der eine <b>Addition</b> und eine <b>Multiplikation mit Zahlen</b> definiert ist, die nicht aus der Menge herausführen und für die die Regeln 1. bis 8. gelten, ist ein <b>Vektorraum</b>.
								</td>
							</tr>
							<tr>
								<td width=20%>1.</td>
								<td width=42%>$$ (x + y) + z = x+(y+z) $$</td>
								<td>Assoziativgesetz der Addition</td>
							</tr>
							<tr>
								<td>2.</td>
								<td>$$ x+y=y+x $$</td>
								<td>Kommutativgesetz der Addition</td>
							</tr>
							<tr>
								<td>3.</td>
								<td>$$ x+o=x$$</td>
								<td><b>Gesetz der Null:</b><br> Es gibt ein Element o in V, so dass für alle x aus V gilt:</td>
							</tr>
							<tr>
								<td>4.</td>
								<td>$$ x+(-x) = 0 $$</td>
								<td><b>Gesetz des Inversen:</b><br> Zu jedem x aus V gibt es ein Element -x aus V, so dass gilt:</td>
							</tr>
							<tr>
								<td>5.</td>
								<td>$$ a(bx) = (ab)x $$</td>
								<td>Assoziativgesetz der Multiplikation</td>
							</tr>
							<tr>
								<td>6.</td>
								<td>$$ 1x = x $$</td>
								<td>Für alle a ∈ V gilt:</td>
							</tr>
							<tr>
								<td>7.</td>
								<td>$$ a(x+y) = ax + ay $$</td>
								<td>Erstes distributives Gesetz</td>
							</tr>
							<tr>
								<td>8.</td>
								<td>$$ (a+b)x = ax+bx $$</td>
								<td>Zweites distributives Gesetz</td>
							</tr>
						</table>
					</div>
				</div>
				<br>
				<h2>Unter-Vektorräume</h2>
				<div class="pre-spoiler">
					<input name="button" type="button" onClick="if (this.parentNode.getElementsByTagName('div')[0].style.display != 'none') { this.parentNode.getElementsByTagName('div')[0].style.display = 'none'; this.value = 'Aufklappen'; } else { this.parentNode.getElementsByTagName('div')[0].style.display = 'block'; this.value = 'Zuklappen';}" value="Aufklappen">
					<div class="spoiler" style="display: none;">
						<table class="table">
							<tr>
								<td width=20%>Untervektorraum</td>
								<td width=80% colspan="2">
									<p>Ein Untervektorraum ist in der Mathematik eine Teilmenge eines Vektorraums, die selbst wieder einen Vektorraum darstellt. Dabei werden die Vektorraum Operationen Vektoraddition und Skalarmultiplikation von dem Ausgangsraum auf den Untervektorraum vererbt.</p>
								</td>
							</tr>
							<tr>
								<td width=20%>1.</td>
								<td width=42%>$$ U \not = \varnothing \longleftrightarrow \vec{0} \in U $$</td>
								<td>Objekt nichtleer?</td>
							</tr>
							<tr>
								<td>2.</td>
								<td>$$ \forall \; \vec{x}, \vec{y}\in U:\vec{x}+'\vec{y}\in U $$</td>
								<td>Abgeschlossen bezüglich der Vektoraddition</td>
							</tr>
							<tr>
								<td>3.</td>
								<td>$$ \forall \; a\in K, \vec{x}\in U:a \cdot'\vec{y}\in U $$</td>
								<td>Abgeschlossen bezüglich der skalaren Multiplikation</td>
							</tr>
						</table>
					</div>
				</div>
				<br>
				<h2>Wichtige Begriffe</h2>
				<table class="table">
					<tr>
						<td width=20%>Basis</td>
						<td width=42%>$$ \footnotesize{B = \left \{ e_1=(1,0,0,...,0); \; e_2=(0,1,0,...,0); \; ... , \;e_n=(0,0,0,...,1) \right \}} $$</td>
						<td>Mit diesem Basisvektor kann man alle Vektoren im Vektorraum erstellen</td>
					</tr>
					<tr>
						<td>Dimension</td>
						<td>$$ \text{dim = }n $$</td>
						<td>Man zählt alle Basisvektoren zusammen und erhält die Dimension.</td>
					</tr>
					<tr>
						<td>Erzeugendenmenge</td>
						<td>$$ e_1, e_2, ...\; e_n $$</td>
						<td>Die Vektoren in der Basis sind das Erzeugendensystem oder Erzeugendenmenge. </td>
					</tr>
					<tr>
						<td>Linearkombination</td>
						<td>$$ r\cdot \vec{a} + s\cdot \vec{b} = \vec{c} $$</td>
						<td><img src="bilder/vektor/vektorraum/linearkombination.jpg" style="max-height:100%; max-width:40%">
						</td>
					</tr>

					<tr>
						<td>Lineare Unabhängigkeit</td>
						<td>$$ \begin{pmatrix}1 \\ 0 \\ 0 \end{pmatrix},\begin{pmatrix}0 \\ 1 \\ 0 \end{pmatrix},\begin{pmatrix}0 \\ 0 \\ 1 \end{pmatrix} $$</td>
						<td>Kein Element ist überflüssig. Lineare Abhängige Mengen haben ein überflüssiges Element.</td>
					</tr>
				</table>










		</div>
	</div>
	</main>
	</div>
	</div>
	<?php include ('includes/footer.php'); ?>

</body>
</html>