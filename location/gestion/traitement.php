<?php

//traitement du formulaire register

//print_r($_POST) (tableau de valeur);

var_dump($_POST["frmNom"]);

foreach($_POST as $key => $value)
{
  echo $key . "valeur". htmlspecialchars$value . "<br />"; 
}

foreach($_POST as $key => $value)
  {
       /*

        if(str_word_count(htmllentities(strip_tags($value)) ) < 25)
            {
               echo "$key valeur".htmllentities(strip_tags($value))."br/>";
            } else{
                 echo "la chaine corespondant à $key, n'est pas valide <br />";}

       */
  }
    