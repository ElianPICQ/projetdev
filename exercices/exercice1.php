<div class="exercice_container">
	<h3 id="exercice1_anchor">Exercice 1</h3>

	<h4>Énoncé</h4>

	<p>Calculer le périmètre & l'aire d'un champs rectangulaire</p>

	<div class="reponse_container">
		<div class="exercice_reponse exercice_algo">
			<h4>Algo</h4>

			<!-- display Algo -->
			<pre>
<span class="algo_title">Algo</span>: calcul_perimetre_surface
<span class="algo_title">Déclarations</span>
	l, L, perimetre, surface: entier
<span class="algo_title">Début</span>
	<span class="func_call">Afficher</span>("Rentrer la longueur")
	<span class="func_call">Saisir</span>(l)
	<span class="func_call">Afficher</span>("Rentrer la largeur")
	<span class="func_call">Saisir</span>(L)

	perimetre <- l * 2 + L * 2
	surface <- l * L

	<span class="func_call">Afficher</span>("Le périmètre est de:", perimetre, "et la surface est de:", surface)
<span class="algo_title">Fin</span> calcul_perimetre_surface

			</pre>
		</div>
		<div class="exercice_reponse exercice_c">
			<h4>C</h4>

			<!-- display C Code -->
			<pre>
#include &lt;stdio.h&gt;

<span class="c_var_declaration">int</span> main()
{
	<span class="c_var_declaration">int</span> l, L, perimetre, surface;

	<span class="func_call">printf</span>(<span class="c_characters">"Veuillez rentrer la longueur"</span>);
	<span class="func_call">scanf</span>(<span class="c_characters">"<span class="c_symbols">%d</span>"</span>, &l);
	<span class="func_call">printf</span>(<span class="c_characters">"Veuillez rentrer la largeur"</span>);
	<span class="func_call">scanf</span>(<span class="c_characters">"<span class="c_symbols">%d</span>"</span>, &L);

	perimetre = l * <span class="c_int">2</span> + L * <span class="c_int">2</span>;
	surface = l * L;

	<span class="func_call">printf</span>(<span class="c_characters">"La surface est de <span class="c_symbols">%d\n</span>Le perimetre est de <span class="c_symbols">%d\n</span>"</span>, surface, perimetre);

	return (<span class="c_int">0</span>);
}
			</pre>

			<span>Copiez/Collez ce code dans <a href="https://www.onlinegdb.com/online_c_compiler" target="_blank">ce compilateur en ligne</a> pour le tester.</span>
		</div>
		<div class="exercice_reponse">

			<h4>PHP</h4>

			<div id="exercice_php">

			<!-- display PHP Code -->
			<pre>
&lt;<span class="html_tag">center</span>&gt;
&lt;<span class="html_tag">h1</span>&gt;Périmètre & Aire rectangle&lt;/<span class="html_tag">h1</span>&gt;
&lt;<span class="html_tag">form</span> method="post"&gt;
    Longueur :
    &lt;<span class="html_tag">input</span> type="text" name="n1"&gt;
    Largeur :
    &lt;<span class="html_tag">input</span> type="text" name="n2"&gt;
    &lt;<span class="html_tag">input</span> type="submit" name="Valider" value="Valider"&gt;
&lt;<span class="html_tag">form</span>&gt;

&lt;?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $s = $n1 * 2 + $n2 * 2;
    $a  = $n1 * $n2;
    printf("La surface est de : %f", $s);
    printf("L'aire est de : %f", $a);
?&gt;
&lt;/<span class="html_tag">center</span>&gt;
			</pre>

			<center>
				<p>Résultat:</p>
				<h1>Périmètre & Aire rectangle</h1>
				<form method="post">
				    Longueur : <br>
				    <input type="text" name="n1"> <br/>
				    Largeur : <br>
				    <input type="text" name="n2"> <br/>
				    <input type="submit" name="Valider" value="Valider">
				</form>

				<?php
				    $n1 = $_POST['n1'];
				    $n2 = $_POST['n2'];
				    $s = $n1 * 2 + $n2 * 2;
				    $a  = $n1 * $n2;
				    printf("La surface est de : %f", $s);
				    printf("L'aire est de : %f", $a);
				?>

			</center>

		</div>
		</div>

	</div>
</div>