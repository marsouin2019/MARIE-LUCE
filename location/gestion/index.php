<?php

// c'est un comentaire

/*
c'est un comentaire sur plusieurs lignes
*/

/*echo "Bonjour c'est la D-WEB";
echo 'Bonjour c\'est la D-WEB'; // altgr+8
echo"<p>Bonjour c'est la D-WEB</p>";
?>
<h1>mon titre</h1>
*/
//phpinfo();


//une variable est un espace de mémoire


//comment decmarer une varible en php
$nom_variable ="";
$_nomVariable =""; //camelCase
$nomVariable ="";
$NomVariable =""; //je ne le vous conseille pas
$nomVariable;

/*$nomFiliere = "D-WEB";
//comment afficher la variable

echo "bonjour la $nomFiliere";
echo 'Bonjor la $nomFiliere'; // A NE PAS FAIRE!!
echo "Bonjour la ".$nomFiliere;
echo 'bonjour la'.$nomFiliere."c'est l'heure de manger";
*/

// variables et les chffres / nombres / additions

/*
$a = 1;
$b = 100;
$c = $a + $b;
echo $c;
echo"le résultat est :$c";

$c += $a;
echo $c;

echo$c += $c;


// les comparaisons

if ($a <=> $b)
{
    echo 1;
    echo'true';
}else{
    echo 0;
    echo 'false';
}
*/

// affichier contenu d'une variable
/*
var_dump($nomFiliere);
var_dump($e);

//affichier information d'une variable lisible

print_r($nomFiliere);
print_r($e);
*/

//tableaux
$tab = array();
$tab = [];

// donnes dans un tableau

$tab = array("d-web", "pmspa");
//var_dump($tab);
//br colonne // index /: valeur correspondant index + longueurde chaine

$tab2=array($tab, $c,$e);
//var_dump($tab2);
//tableau d e3 elements = array(3) qui sont
/*
-index 0 = un tableau
-index 1 = une variable
-index 2 = une variable
*/

// pour afficher un tableau
//echo $tab2[0][0];

// afficher toutes les valeurs d'un tableau

//compter le nombre elements dans un tableau
$nbrElement = count($tab);

//boucle for
for($i=0;$i<$nbrElement;$i++)
{
    echo$i;
    //echo $tab[$i];
}

//boucle foreach

foreach($tab as $filiere){
    //afficher valeur tableau
    //echo $filiere;
}
//afficher les valeurs avec index
foreach($tab as $index => $filiere)
{
  //echo "L'index : $index, correspond a la filiere : $filiere.";
}
  
//afficher contenu tab2

foreach($tab2 as $filiere){
  //print_r($filiere);
}

//autre type de boucle

$tab3 = ["un","deux","trois","quatre","stop"];

foreach($tab3 as $value)
{
   //afficher l'un des elements du tableau
   // echo
}

//Déclarer un tableau dans une variable
// qui contient les elements suivants
/*
Janvier, fevrier, mars,2019,2018,2017,"fin","stop",recommencer"
*/
$tablo=array();
$tablo = array("janvier", "fevrier", "mars", "juin", "juillet", "aout", "septembre","octobre","novembre","decembre");

foreach ($tablo as $valeur)
{
  //echo $valeur;
}

//Choisir, parametrer, personalisé un index de tableau
/*
$tabVS =["id-850"=>"VERROUX","id-851"=>"RENAY","id-852"=>"VITULIN","id-853"=>"TERRINE"];

  foreach($tabVS as $ID => $nomVS)
{
    // affihcher id et nomVS
    echo"<pre>";
    echo "L'identifiant : $ID est attribué au VS $nomVS";
    echo "</pre>";
}

// une variable constante
*/
// déclarer une variable constante 
define("JOURNEE", "24h");
echo JOURNEE;

echo "a la fin de cette journée nous aurons JOURNEE de plus";
echo "a la fin de cette journée nous aurons ".JOURNEE." de plus";
//addition de variable contantes
define("NBR1",50);
define("NBR2",150);
$resultat = NBR1 + NBR2
echo $resultat;

defini("info", NBR1);
echo info;
 
define("URL", "https://www.nomdedomaine.com")
echo URL. "/css/fichierStyle.css";

// strucutures de controle
$a = 10;
$b = -15;
$c = 0.50;
$e = $a+ $c;

//IF
if( $a == $e)
{
  //si c'est vrai, affiche une réponse 
  echo "La réponse est vrai";

  // et mettre d'zautres actions 
  $e = $a;
// si c'est faut il se passe rien
}
//else
if($a ==$e)
{
  // si c'est vrai affiche quelque chose 

} else{
  // si c'est faut affiche autre chose 
  echo " la réponse est fause.";
  // mettre des action 
  $e = 0;
}
 if( $a>$b)
 {
// si c'est vrai 
echo "a est plus grand que b ";
}elseif($a ==b){
  echo "a est égal à b";
} else{
  echo "a est plus petit que b";
}

// syntaxe alternative
/*
?>
<?php if ( $a == 5 ) : ?>
<p> A est égal 5</p>
<?php endif; ?>

<?php
if  ( $a ==5)
      echo " a égale 5"
      echo "..."
elseif ($a == 6)
echo " a égale 6"
echo "!!!"
else:
  echo " a ne vaut ni 5 ni 6"
endif;
?>

 // operateur ternaire = condition ternaire
 //?

 // resultat ? si c'est vrai : si c'est vrai : si c'est faux 
 echo$ result ? $a ==$b : "c'est faux";

// c'est egal
if ( $a==$b)
{
  //affiche rien 

}else{
  //affiche 
  echo $result = "cest faux";
}
*/

// exercices

- Mettre en place un script autoriser les hommes d'un âge supérieur à 35 ans à écrire un livre

- Mettre en place un script permettant de lister
les personnes ayant  réussie l'examen du code de la route. Voici les notes 35,37,25,4,40,12,34,22,20,10,10

<?php>
$age = 40;

if( $age > 35)
{
    echo "autoriser";
}
else
{

    echo $age = "refuser";
}

$tabcode= array [35,37,25,4,40,12,34,22,20,10,10];
