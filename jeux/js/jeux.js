// déclaration tableau et initialisation a vide 
var joueurs=[];
// déclaration de ma fonction add joueur
function add_joueur(){
    // afficher et stocker les joueurs 
    joueurs.push(prompt("Ecrire un nom de joueur en majuscule"));

    // tester variable joueurs
    if( joueurs != null)
    {
        //mettre en majuscule 
         
        alert(joueurs.length)
        document.getElementById("affiche_joueur").innerHTML = joueurs;
    } else {
        alert (" Vous n'avez pas indiqué de nom de joeur");
    }
}
 
function tirage_au_sort()
{
    //tester la longueur de la chaine 
    if(joueurs.length >0)
{
    /*
    - déclaration d'une variable 
    - méthode mathematique pour mélanger des données 
    - tirage au sort d'une donnée 
    - indication de la longueur de son tableau joueurs comme donnee
    */

var rand = Math.floor(Math.random()*joueurs.length);
alert (rand);
}
}
// afficher le tirage au sort
document.getElementById("affiche_gagnant").innerHTML = "le gagnant est :" <strong> "+joueurs[rand]+" </strong>


