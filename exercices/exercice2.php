<div class="exercice_container">
	<h3 id="exercice2_anchor">Exercice 2</h3>

	<h4>Énoncé</h4>

	<p>
		Convertir un temps exprimé en heures, minutes et secondes en un total de secondes
	</p>

	<div class="reponse_container">
		<div class="exercice_reponse exercice_algo">
			<h4>Algo</h4>

			<!-- display Algo -->
			<pre>
<span class="algo_title">Algo</span> convertir_en_secondes
<span class="algo_title">Déclarations</span>
	h, m, s, totalSec: entier
<span class="algo_title">Début</span>
	<span class="func_call">Afficher</span>("Veuillez saisir les heures")
	<span class="func_call">Saisir</span>(h)
	<span class="func_call">Afficher</span>("Veuillez saisir les minutes")
	<span class="func_call">Saisir</span>(m)
	<span class="func_call">Afficher</span>("Veuillez saisir les secondes")
	<span class="func_call">Saisir</span>(s)

	totalSec <- h * 3600 + m * 60 + s

	<span class="func_call">Afficher</span>("le total est de ", totalSec, " secondes")
<span class="algo_title">Fin</span> convertir_en_secondes

			</pre>
		</div>
		<div class="exercice_reponse exercice_c">
			<h4>C</h4>

			<!-- display C Code -->
			<pre>
#include &lt;stdio.h&gt;

<span class="c_var_declaration">int</span> main()
{
	<span class="c_var_declaration">int</span> h, m, s, totalSec;

	<span class="func_call">printf</span>(<span class="c_characters">"Veuillez rentrer les heures"</span>);
	<span class="func_call">scanf</span>(<span class="c_characters">"<span class="c_symbols">%d</span>"</span>, &h);
	<span class="func_call">printf</span>(<span class="c_characters">"Veuillez rentrer les minutes"</span>);
	<span class="func_call">scanf</span>(<span class="c_characters">"<span class="c_symbols">%d</span>"</span>, &m);
	<span class="func_call">printf</span>(<span class="c_characters">"Veuillez rentrer les secondes"</span>);
	<span class="func_call">scanf</span>(<span class="c_characters">"<span class="c_symbols">%d</span>"</span>, &s);

	totalSec = h * 3600 + m * 60 + s;

	<span class="func_call">printf(<span class="c_characters">"Le total en seconde est : <span class="c_symbols">%d\n</span>"</span>, totalSec);

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
&lt;<span class="html_tag">center</span>&gt;
&lt;<span class="html_tag">h1</span>&gt;Convertir en secondes&lt;/<span class="html_tag">h1</span>&gt;
&lt;<span class="html_tag">form</span> method="post"&gt;
    heures :
    &lt;<span class="html_tag">input</span> type="text" name="n1"&gt;
    minutes :
    &lt;<span class="html_tag">input</span> type="text" name="n2"&gt;
    secondes :
    &lt;<span class="html_tag">input</span> type="text" name="n3"&gt;
    &lt;<span class="html_tag">input</span> type="submit" name="Valider" value="Valider"&gt;
&lt;/<span class="html_tag">form</span>&gt;

&lt;?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];

    $secondes = $n1 * 60 * 60 + $n2 * 60 + $n3;
    printf("le résultat est %f secondes", $secondes);
?&gt;

</center>
			</pre>

		    <center>
			<p>Résultat:</p>
		    <h1>Convertir en secondes</h1>
		    <form method="post">
		        heures : <br>
		        <input type="text" name="n1"> <br/>
		        minutes : <br>
		        <input type="text" name="n2"> <br/>
		        secondes : <br>
		        <input type="text" name="n3"> <br/>
		        <input type="submit" name="Valider" value="Valider">
		    </form>

		    <?php
		        $n1 = $_POST['n1'];
		        $n2 = $_POST['n2'];
		        $n3 = $_POST['n3'];

		        $secondes = $n1 * 60 * 60 + $n2 * 60 + $n3;
		        printf("le résultat est %f secondes", $secondes);
		    ?>
		    
		    </center>

		</div>
		</div>

	</div>
</div>