<?php

//mettre a jour mot de passe dans la table logins 
/*
-uptdate.


*/
$resultat = $this->connectDB->query("UPDATE logins SET password '".$this->password."' WHERE email='".this->email."');

// testlongueur 
 $lenght = ($lenght == 8) ? 8 : 12;
 

 // chaine

  $chaine =

  // melanger 
   $melanger = str_shuffle ($chaine)

   // retourner
   return $passwd = substr($melanger, 0 $lenght );

//echo $newpassword = $this -> genePasswd (8);

public function envoi_password($passwd)
{
  $to      = 'marsouins2019@gmail.com';
  $subject = 'New Password localhost';
  $message = 'Bonjour!,voici votre nouveau mot de pass,'
  .$psswd.'.'."\r\n";
  $headers ='FROM: hostmaster@gmail.com' . "\r\n" .
  ' Reply-To: noreply@gmail.com' . "\r\n" .
  'X-Mailer: PHP/ . phpversion();

  if (mail($to, $subject, $message, $headers))
  {
      return "Le message est envoyé.";

  }else{
      return "Le message n'est pas envoyé";

  }

}

// test mail 
echo $this->envoi_password($nePassword);
exit;



public function delete_personne(int$ id)
{
$requete = this->connectDB->query (DELETE FROM loggins WHERE id = '".$id"')
}