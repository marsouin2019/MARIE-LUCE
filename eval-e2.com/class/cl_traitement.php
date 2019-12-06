<?php





// mettre en place la class Personne
class Personne
{

    // attributs
    public $civilite;
    public $nom;
    public $prenom;
    public $adresse;
    public $complementaire;
    public $postale;
    public $ville;
    public $telephone;
    public $email;
    public $password;

    //variable mysqli

    public $connectDB;


    // methodes

    public function __construct($myconnexion)
    {
        // initialisation de la connexion internet
       $this->connectDB = $myconnexion;

       //print_r($this->connectDB);
    }
    public function add_personne(array $data)
    {
        //print_r($data);

        $this->civilite =$data["frmCivilite"];
        if ($this->civilite !="M"|| $this->civilite !="Mme") {
            //return false;
            echo false;
        }

         echo $this->prenom = ltrim(htmlentities(ucfirst($data["frmPrenom"])));
         echo $this->nom = ltrim(htmlentities(strtoupper($data["frmNom"])));
         
           // mise en forme et securite password
         $this->adresse = ltrim(htmlentities($data["frmAdresse"]));
         
         $this->complementaire =ltrim(htmlentities( $data["frmComplementaire"]));
         $this->postale = ltrim(htmlentities($data["frmPostale"]));
         //preg_match();
         /*
         #0-9(5)#
         

         #dweb#
         
         */

        if (preg_match("#a-zA-Z{5}#", $data["frmPostale"]) ); 
        {
            //return false;
            echo false;
        }



         $this->ville = ltrim(htmlentities(ucfirst($data["frmVille"])));
         $this->telephone = htmlentities($data["frmTelephone"]);
        
         $this->email = strtolower($data["frmEmail"]);










         // mise en securite du mot de passe
            
         /*1 ere solution
         $nwpass = password_hash($this->password, PASSWORD_DEFAULT);*/
        
         /* 2 ème solution
         password_hash($this->password, PASSWORD_DEFAULT);*/

         /*3 ème solution*/
         //$this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);

         // mise en securite du mot de passe
         // condition test longueur chaine d emot de passe
         if (strlen($data["frmPass"]) < 8 ) 
         {
             //return false;
             echo false;
         }else {
             if (strlen($data["frmPass"]) > 12 )
              {
                 // return false;
                 echo false;
             } else {
                $this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);
             }
         }
        // echo $this->nom;

        $resultat = $this->connectDB->query( "INSERT INTO personnes (civilite, nom , prenom, adresse , complementaire , postale ,ville ,telephone)VALUES('".$this->civilite ."','".$this->nom."','".$this->prenom."','".$this->adresse."','".$this->complementaire."','".$this->postale."','".$this->ville."','".$this->telephone."')");
        //print_r($resultat);
         
       //requete select lastid
       if ($resultat == 1) 
       {
            //requette pour recuperer id personne
            $idPersonne = $this->connectDB->query("SELECT id,prenom FROM personnes WHERE telephone = '".$this->telephone."' ");
            $row = $idPersonne->fetch_assoc();

            //id
            $idP = $row["id"];
            $_SESSION["prenom"]=$row["prenom"];

            if( !empty($idP))
            {
                // insert login
                $resultat = $this->connectDB->query("INSERT INTO logins( email, password, idpersonne )VALUES('".$this->email."', '".$this->password."' ,'".$idP."')");
                
                //print_r($resultat);
                //redirection vers page connexion
                header('Location: http://localhost/eval-e2.com/login.php', replace);
            }else {
                echo "probleme d'insertion d'une personne";
            }

       } 
       
    
    } //fin de add personne
    public function login(array $data){
        //recuperer les donnees de form connexion--
        //faire une comparaison entre les donnes saisies et celle de notre base de donnees
        //redirection vers un espace admin
        $this->email = $data["frmemail"];
        
        //requete select pour comparer les info login d'une personne
        $login = $this->connectDB->query("SELECT * FROM logins WHERE email = '".$this->email."' ");
        $row = $login->fetch_assoc();

        $personne = $this->connectDB->query ("SELECT prenom FROM personnes WHERE id = '".$idPers."'" );
        $idPers = $row ["idpersonne"];
        $rowP = $personne->fetch_assoc();


        // condition test longueur chaine de mot de passe
        if (strlen($data["frmpass"]) < 8 ) 
        {
            //return false;
            echo false;
        }else {
                if (strlen($data["frmpass"]) > 12 )
                {
                    // return false;
                    echo false;
                } else {
                //$this->password = password_hash($data["frmPass"], PASSWORD_DEFAULT);
                $password = $row["password"];
                 password_verify();   
                if (password_verify($data["frmPass"],$password)) 
                {
                    //redirection vers page admin
                    header("Location : http://localhost/eval-e2.com/admin");  
                    //stocker en session en ptrnom ry email
                    $_SESSION["prenom"] = $rowP["prenom"];
                    $_SESSION["email"] = $row["email"]; 
                }else{
                    //redirection vers page form
                     }
                }
            }

       }

       

       

    // insert data in  database
    // table personnes
    // table logins
    // requete insert data
    

}