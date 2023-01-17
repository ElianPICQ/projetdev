<div class="exercice_container">
	<h3 id="exercice4_anchor">Exercice 4</h3>

	<h4>Énoncé</h4>

	<p>Calculer le périmètre, la surface et le volume d'un parallelepipede</p>

	<div class="reponse_container">
		<div class="exercice_reponse exercice_algo">
			<h4>Algo</h4>

			<!-- display Algo -->
			<pre>
<span class="algo_title">Algo</span>: calcul_perimetre_surface
<span class="algo_title">Déclarations</span>
	l, L, h, perimetre, surface, volume: entier
<span class="algo_title">Début</span>
	<span class="func_call">Afficher</span>("Rentrer la longueur")
	<span class="func_call">Saisir</span>(l)
	<span class="func_call">Afficher</span>("Rentrer la largeur")
	<span class="func_call">Saisir</span>(L)
	<span class="func_call">Afficher</span>("Rentrer la hauteur")
	<span class="func_call">Saisir</span>(h)

	perimetre <- l * 4 + L * 4 + h * 4
	surface <- (l * L) * 2 + (l * h) * 2 + (L * h) * 2
	volume <- l * L * h

	<span class="func_call">Afficher</span>("Le périmètre est de:", perimetre, ", la surface est de:", surface, " et le volume est:", volume)
<span class="algo_title">Fin</span> calcul_perimetre_surface
			</pre>
		</div>
		<div class="exercice_reponse exercice_c">
			<h4>C</h4>

			<!-- display C Code -->
			<pre>
#include &lt;stdio.h&gt;

int main()
{
	float l, L, h, perimetre, surface, volume;


	printf("Veuillez rentrer la longueur");
	scanf("%f", &l);

	printf("Veuillez rentrer la largeur");
	scanf("%f", &L);

	printf("Veuillez rentrer la hauteur");
	scanf("%f", &h);

	perimetre = l * 4 + L * 4 + h * 4;
	surface = (l * L) * 2 + (l * h) * 2 + (L * h) * 2;
	volume = l * L * h;

	printf("La surface est de %f\n\
Le perimetre est de %f\n\
Le volume est de %f\n", surface, perimetre, volume);

	return (0);
}
			</pre>

			<span>Copiez/Collez ce code dans <a href="https://www.onlinegdb.com/online_c_compiler" target="_blank">ce compilateur en ligne</a> pour le tester.</span>
		</div>
		<div class="exercice_reponse">

			<h4>PHP</h4>

			<div id="exercice_php">

			<!-- display PHP Code -->
			<pre>
&lt;center&gt;
&lt;h1&gt;Périmètre, Surface & Volume&lt;/h1&gt;
&lt;form method="post"&gt;
    Longueur :
    &lt;input type="text" name="n1"&gt;
    Largeur :
    &lt;input type="text" name="n2"&gt;
    Hauteur :
    &lt;input type="text" name="n3"&gt;
    &lt;input type="submit" name="Valider" value="Valider"&gt;
&lt;/form&gt;

&lt;?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $p = $n1 * 4 + $n2 * 4 + $n3 * 4;
    $s = ($n1 * $n2) * 2 + ($n1 * $n3) * 2 + ($n3 * $n2) * 2;
    $v  = $n1 * $n2 * $n3;
    printf("La surface est de : %f", $s);
    printf("Le périmètre est de : %f", $p);
    printf("Le volume est de : %f", $v);
?&gt;

&lt;/center&gt;
			</pre>

	    <center>
			<p>Résultat:</p>
	    <h1>Périmètre, Surface & Volume</h1>
	    <form method="post">
	        Longueur : <br>
	        <input type="text" name="n1"> <br/>
	        Largeur : <br>
	        <input type="text" name="n2"> <br/>
	        Hauteur : <br>
	        <input type="text" name="n3"> <br/>
	        <input type="submit" name="Valider" value="Valider">
	    </form>

	    <?php
	        $n1 = $_POST['n1'];
	        $n2 = $_POST['n2'];
	        $n3 = $_POST['n3'];

	        $p = $n1 * 4 + $n2 * 4 + $n3 * 4;
	        $s = ($n1 * $n2) * 2 + ($n1 * $n3) * 2 + ($n3 * $n2) * 2;
	        $v  = $n1 * $n2 * $n3;
	        printf("La surface est de : %f", $s);
	        printf("Le périmètre est de : %f", $p);
	        printf("Le volume est de : %f", $v);
	    ?>
	    
	    </center>

		</div>
		</div>

	</div>
</div>