<!DOCTYPE html>
<html lang="FR-fr">
<head>
	<meta charset="utf-8" />
	<title>GROUPE CFA | COURS</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover" />
	<link rel="stylesheet" type="text/css" href="./cours.css" />
	<link rel="stylesheet" type="text/css" href="./style.css" />

<!-- Import fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
  <style> @import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap'); </style>

</head>
<body>
  <?php include("header.php"); ?>

  <main id="cours-page">
  	<h2>Cours de développement informatique</h2>

  	<pre>
			L’algorithmique

			Premier Chapitre : Notions générales

		1) Phases de production d’un programme

Un programme avant son introduction en production, passe par 5 étapes :

	- phase d’analyse
	- phase de spécification
	- phase de traduction
	- phase d’exécution
	- phase de maintenance

énoncé du problème → Analyse → Modèle conceptuel d’analyse

Modèle MCA → Spécification → Algorithme

Algorithme → traduction → Programme

Programme → Exécution → Résultats

1.1) Phase d’analyse

Cette phase consiste à élaborer un modèle conceptuel d’analyse MCA à partir de l’énoncé du problème en informatique. Ce modèle décrit la solution sous forme d’une suite d’étapes et d’actions avec des termes non précis (non informatiques).

Deux méthodes normalisé qui peuvent être utiliser pour aboutir à l’élaboration d’un MCA :

1.A) La méthode ascendante

A partir d’un ensemble d’algorithmes élémentaires, le concepteur du programme compose la solution du problème posé en informatique et aboutit à un arbre subdivisé en niveaux de difficulté montante.

Cette méthode nécessite du concepteur une expérience confirmé et une bonne maîtrise des outils

1.B) La méthode descendante

Le concepteur subdivise le problème posé en plusieurs sous problèmes. Si ces derniers n’ont pas une solution facile ou connue, ils seront de nouveau subdivisés. On obtient alors un arbre constitué de niveaux de difficulté descendante.

Les nœuds de l’arbre sans les étapes du MCA et les feuilles ou bien les terminaisons sont les actions du MCA

Le programme (algorithme) sera composé des actions dégagées dans le MCA.




		2) L’algorithmique pur et dûr

Syntaxe général d’un algo :
algo : nomAlgo
déclaration
	variables
début
	traitement
Fin nomAlgo

Les commentaires :	// sur une seul ligne
		        				/* sur plusieurs lignes*/

Les types		:	ensemble de valeurs que prendre une variable
	Entier		:	valeur ± appartenant à l’ensemble Z
	Réel			:	valeur ± appartenant à l’ensemble R
	caractère :	lettre / chiffre / symbole
	chaine		:	ensemble de caractères
	booléen		:	vrai ou faux

Déclaration d’une variable :
	nomVariable : type

Exemple :
	surface : réel
	heure : entier

Opérations :
	arithmétiques : +, -, *, /, %
	test : >, >=, <, <=, =, !=
	logique : et, ou, non

Actions :
	Affichage : afficher(« texte ») ou bien afficher (nomVariable)
	Saisie : saisir (nomVariable)
	Affectation : nomVariable ← expression

Exemple : calcul de la moyenne de trois notes

Algo : moyenne
Déclaration
	n1, n2, n3, s, m : réel

Début
	Afficher (« Donner la note 1 : »)
	saisir (n1)
	Afficher (« Donner la note 2 : »)
	saisir (n2)
	Afficher (« Donner la note 3 : »)
	saisir (n3)
	s ← n1+n2+n3
	m ← s/3
	Affichage (« La moyenne est de : », m)
Fin moyenne





		3) Phase de traduction

Algo → traduction → programme

Cette phase traduit l’algorithme en un programme élaboré dans un langage évolué compréhensible par la machine (C, PHP, Java, Android etc)
Pour cela, il faut maîtriser le formalisme du langage (syntaxe et sémanthie).

3.1) Introduction

Le langage C est né de l’expérience de Mr Denis Ritchie qui travaillait dans les laboratoires AT et T de Thomson sur le système d’exploitation Unix (la bible du C).

Les ancêtres du C :
	algol → 1960
	basic → 1966
	C→→ 1972

Le C existe sur toutes les plates-formes et est gratuit :
	MSDOS → TurboC
	Windows → Dev C++, Code Blocs, Visuals Studio C++
	Mac / Linux ; gcc de GNU

Plusieurs langages  respectent la syntaxe C : C++ (1980), Java, Python, PHP, Perl, C#, etc

Le C dispose de fonctions de bas niveau qui manipulent l’architecture de la machine : mémoire, registres, les interruptions, assembleur, etc

De même, il dispose de fonctions qui font abstraction de l’architecture de la machine.

3.1) Les types et les variables

Algo				Langage C
Entier			int, short int, long int, unsigned (toujours positif)
réel				float (6 décimales), double (12 décimales)
caractère		char
chaine			tableau de caractère char chaine[taille]

booléen	assimilé à un int (0,1)
		En C++, bool (true, false)

Déclaration de la variable :

	type nomVariable;
	type nomVariable = valeur;

Exemple :
	int ageP, ageF, x;
	float salaire;

Le nom de la variable ne doit pas contenir des espaces, ou ou des lettres accentuées ou des symboles.

	A ne pas utiliser						A utiliser

	L’année										annee, L_annee
	Age du père								age_pere, agePere


Déclaration d’une constante :
	
	const type constante = valeur;

Exemple : const float tva = 20;


3.3) Les opérations

	opérations arithmétiques : +, -, *, /, %
		incrémentation ++ 			décrémentation --
		x = x + 1 => x++				x = x - 1 => x--
		la différence entre x++ et ++x :
		les 2 notations donnent x =x +1 mais leur utilisation diffère :
			y = x++ ;	[ Affectation puis incrémentation]
			y = ++x ;	[ Incrémentation puis affectation]

		Les raccourcis : +=, -=, *=, /=
			x = x + 5 	=>	 x + = 5
			x = x % 2		=>	 x % = 2

Opérations logiques :
	et (&&), ou (||), non (!)

Opérations de test :
	>, >=, <, <=, ==, !=

Attention :
	Affectation	test égalité
algo	←		=
C     ←	  ==

3.4) Les actions

	Afficher → printf

Syntaxe : 	printf (« texte ») ;
		printf (« format », nomVariable) ;
		format :
		%d → entier, %f → réel, %c → caractère, %s → chaine

Exemple : printf (« Le salaire est de :%f », s) ;

	Saisir → scanf
Syntaxe : scanf (« format », & nomVariable) ;

	Format : %d, %f, %c, %s
	& : opérateur d’adresse mémoire

Exemple :
	saisir (heure) => scanf («%d», & heure) ;


3.5) Exemple complet


#include &lt;stdio.h&gt;

int main() {
  int ageP, ageF, x;

  printf("Donner age pere :");
  scanf("%d", & ageP); 
  printf("Donner age fils :");
  scanf("%d", & ageF);

  x = ageP - 2 * ageF; 
  printf("Le nb d'annees est de : %d", x);
  
  return (0);
}












LE LANGAGE PHP



Le langage PHP a été créé pour le développement web avec une architecture trois tiers :
	- un serveur web
	- un serveur de base de données
	- un client (mon ordinateur)

Le PHP est inspiré du langage C dans ses premières versions, puis de C++ avec l’orienté objet (version 3 et 4) puis de java dans les versions (5 et 7)

Le PHP est open source et fonctionne avec plusieurs serveurs web gratuit (xampp, lamp, mamp, wamp, …)

Les codes / scripts PHP sont compilés côté serveur puis envoyés sous forme de pages html côté client.

Objets de données et types
Le langage PHP est un langage non typé (pas d’obligation de spécifier un type lors de la déclaration de la variable – comme le C)

Les types des variables peuvent être connus par les valeurs que prennent les variables.

Donc, en PHP, on utilise la variable sans obligation de la déclarer.

En PHP toutes variables est précédée par le symboles $.

Syntaxe :

	$nomVariable = valeur ;

Les opérations :
En PHP, on utilise les mêmes opérateurs que le langage C :

Opérations arithmétiques : +, -, *, /, %
	Opérations incrémentations : ++, --
Opérateurs de tests : >, <, >=, <=, !=, ==
Opérations logiques : et (&&, and), ou (||, or), non ( !, not).

Les actions :
	- Affectation :
		$nomVariable = valeur ;

	- Affichage :
		printf : comme le C
		printf(«texte») ;
		printf(«texte format», $nomVariable) ;
		format : %d (entier), %f (réel), %c (caractère), %s (chaine)

		echo «texte» ; echo («texte») ;
		echo $nomVariable ;
		echo « texte ».$nomVariable
. Point de concaténation

-Saisie : il n’a pas de fonction de saisie comme scanf en C. On doit passer par un formulaire HTML et récupérer les données en PHP.

La gestion des données se fait par des tableaux associatifs :
	- $_Post : récupération des données d’un formulaire côté serveurs
	- $_Get : récupérer les données de l’URL
	- $_Cookie : récupération des données dans les cookies (côté client)
	- $_Session : stockage des données dans des variables de sessions (côté serveur)




  	</pre>
  </main>

  <?php include("footer.php"); ?>


<script src=".js"></script>
</body>
</html>