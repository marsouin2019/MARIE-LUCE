// traitement champs formulaire obligatoire 
$(document).ready(function(){
    //   le form, champs,type
    $("#frmInscription input[type='text']").blur(function){
       //verifier si donnee saisie
       if( ! $(this).val() ){
           //faire quelque chose
        $(this).addClass("error");
       }else{
           //faire autre chose
           $(this).removeClass("error")
       }



    });
    $(document).ready(function(){
        //   le form, champs,type
        $("#frmInscription input[type='email']").blur(function){
           //verifier si donnee saisie
           if( ! $(this).val() ){
               //faire quelque chose
            $(this).addClass("error");
           }else{
               //faire autre chose
               $(this).removeClass("error")
           }
    
    
    
        });

        $(document).ready(function(){
            //   le form, champs,type
            $("#frmInscription input[type='password']").blur(function){
               //verifier si donnee saisie
               if( ! $(this).val() ){
                   //faire quelque chose
                $(this).addClass("error");
               }else{
                   //faire autre chose
                   $(this).removeClass("error")
               }
        
        
        
            });
});




