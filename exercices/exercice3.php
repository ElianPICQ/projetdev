<div class="exercice_container">
	<h3 id="exercice3_anchor">Exercice 3</h3>

	<h4>Énoncé</h4>

	<p>Calculer le nombre d'années pour que l'âge d'un père devienne le double de celui de son fils</p>

	<div class="reponse_container">
		<div class="exercice_reponse exercice_algo">
			<h4>Algo</h4>

			<!-- display Algo -->
			<pre>
Algo: age_pere_fils
Déclarations
	ageP, ageF, result: entier
Début
	Afficher("Veuillez rentrer l'âge du père")
	Saisir(ageP)
	Afficher("Veuillez rentrer l'âge du fils")
	Saisir(ageF)

	result <- ageP - 2 * ageF
	Afficher("le nombre d'année est de ", result)
Fin age_pere_fils
			</pre>
		</div>
		<div class="exercice_reponse exercice_c">
			<h4>C</h4>

			<!-- display C Code -->
			<pre>
#include &lt;stdio.h&gt;

int main (){
  int ageP, ageF, x;

  printf("Donner age pere : ");
  scanf("%d", & ageP); 
  printf("Donner age fils : ");
  scanf("%d", & ageF);

  x = ageP - 2 * ageF; 
  printf("Le nb d'annees est de : %d", x);
  
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
&lt;h1&gt;Diff age père/fils&lt;/h1&gt;
&lt;form method="post"&gt;
    Age pere :
    &lt;input type="text" name="n1"&gt;
    Age fils :
    &lt;input type="text" name="n2"&gt;
    &lt;input type="submit" name="Valider" value="Valider"&gt;
&lt;/form&gt;

&lt;?php
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $result = $n1 - 2 * $n2;
    printf("Résulat : %f", $result);
?&gt;

</center>
			</pre>

	    <center>
			<p>Résultat:</p>
	    <h1>Diff age père/fils</h1>
	    <form method="post">
	        Age pere : <br>
	        <input type="text" name="n1"> <br/>
	        Age fils : <br>
	        <input type="text" name="n2"> <br/>
	        <input type="submit" name="Valider" value="Valider">
	    </form>

	    <?php
	        $n1 = $_POST['n1'];
	        $n2 = $_POST['n2'];
	        $result = $n1 - 2 * $n2;
	        printf("Résulat : %f", $result);
	    ?>
	    
	    </center>

		</div>
		</div>

	</div>
</div>