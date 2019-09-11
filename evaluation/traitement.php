<?php
if(isset($_POST[valider])){
    $frmPrenom=$_POST['frmPrenom'];
    $frmNom=$_POST['frmNom'];
    $frmEmail=$_POST['frmEmail'];
    $frmpass=$_POST['frmpass'];
    $frmpassb=$_POST['frmpassb'];
    echo 'salut '. $frmPrenom. $frmNom. 'Bienvenue'

}

$().ready(fucntion(){
    $("frmregister").validate({
        rules:{
            frmPrenom:"required",
            frmNom:"required",
            
        },
        frmEmail:{
            required: true,
            email:true,
        },
        frmpass:{
            required:true,
            minlength:6,
        },
        frmpassb:{
            required:true,
            minlength:6,
            equalTo: "#frmpass"
        },
        message: {
            frmnom:"Rentrer votre nom",
            frmprenom:"Rentrer votre prénom",
            frmpass: {
                required: "Rentrer votre mot de passe",
                minlenght: "Mot de passe trop court minimum 6 caractères"
            },
            frmpassb: {
                required: "confirmer votre mot de passe",
                minlenght: "Mot de passe trop court minimum 6 caractères"
                equelTo:"Veuiller mettre le mëme mot de passe"
            },
        }
    })
    
}
