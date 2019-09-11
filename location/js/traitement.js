//$("frmRegister").validate();


// verifier taille champs password


$( "#frmPrenom" ).blur(function() {
  if( $(this).val().length == 0 )
  {
   $(this) .addClass("is-invalid");
  }else {
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$( "#frmNom" ).blur(function() {
  if( $(this).val().length == 0 )
  {
   $(this) .addClass("is-invalid");
  }else {
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$( "#frmEmail" ).blur(function() {
  if( $(this).val().length == 0 )
  {
   $(this) .addClass("is-invalid");
  }else {
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$( "#frmPassb" ).blur(function() {
  if( $(this).val().length == 0 )
  {
   $(this) .addClass("is-invalid");
  }else {
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
});

$("#frmPass").blur(function(){
  if($(this).val().length == 0)
{
  $(this).addClass("is-invalid");
}else{
  //teste si chaine plus petite que 6 caractères
  if($(this).val().length < 6)
  {
    $(this).addClass("is-invalid");
  }else{
  //teste si chaine est pluus petite que 12 caractères
  if($(this).val().length > 12)
  {
    $(this).addClass("is-invalid");
  } else{
    $(this).removeClass("is-invalid").addClass("is-valid");
  }
}
}
});

$("#frmPassb").blue(function(){
  if( $(this).val().length == 0 )
})