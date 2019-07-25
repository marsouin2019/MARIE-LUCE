var marsouins= [
    "VERROUX","RENAY","VITULAIN","TERRINE","ROBINEL","MAXIMIN","MARIE-LUCE","RENARD","NEY","THOME"
];
var copie= [];
console.log(marsouins);
console.log(marsouins[4]);
console.log(marsouins.length);
var nbr= marsouins.length;
for(var i=0;i<nbr;i++)
{ copie.push (marsouins[i]);
console.log(copie);
}
var last= marsouins[marsouins.length-1];
document.write[last];
 
marsouins.forEach(function(item,index,array){
console.log(item,index);
document.write(item,index);
});
var addNewMarsouin = marsouins.push("POPOTTE");
//document.write(marsouins);

var deleteLastMarsouin = marsouins.pop();
//document.write(marsouins);

var deleteFirstMarsouin = marsouins.shift();
//document.write(marsouins);

var question = prompt("Est-ce que Monsieur RENARD, a compris le cour ?");
 
if(question !=null){
document.getElementById("reponse").innerHTML = question;
}

var renay = prompt(" Comment monsieur renay a fait pour s'échapper de jurasik park?");

if (renay !=null){
    document.getElementById("oui").innerHTML = question;
}

var genre = prompt(" Poser la question sur le type de genre");

if (genre!=null){
    document.getElementById("homme").innerHTML = question;
    alert(genre)
} else{
    alert(" vous n'avez pas répondu")
}
