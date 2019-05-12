var mdp1v=false;
var mdp2v=false;
var mdpv = false;
var nomv = false;
var prenomv = false;

var nomv1 = true;
var prenomv1 = true;
var formation1 =true;
var university1=true;

function verifMail(){
var mail =$("#email").val();
    if (mail.length==0){
      $("#email").css({"border": "solid", "border-width": "0.1px"});
    $("#email").css("border-color", "red");
    }
}
function verifnom() {

    var nom =$("#nom").val();

    if(nom.length==0){
        $("#nom").css({"border": "solid", "border-width": "0.1px"});
        $("#nom").css("border-color", "red");
        nomv=false;
        nomv1=false;
        return;
    }
    if (nom.length <= 2) {
        nomv = false;
        nomv1=false;
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'le nom est trop court !',
        })
        $("#nom").css({"border": "solid", "border-width": "0.1px"});
        $("#nom").css("border-color", "red");
        return;
    }
    var res = 0;
    for (var i = 0; i < nom.length; i++)
        if ((nom.charAt(i) >= 'a' && nom.charAt(i) <= 'z') || (nom.charAt(i) >= 'A' && nom.charAt(i) <= 'Z'))
            res++;

    if (res != nom.length) {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'le nom doit etre constitué seulement des lettre alphabetique !',
        })
        $("#nom").css({"border": "solid", "border-width": "0.1px"});
        $("#nom").css("border-color", "red");
        nomv = false;
        nomv1 = false;
    }
    else {
        $("#nom").css({"border": "solid", "border-width": "1px"});
        $("#nom").css("border-color", "#C2C2C2");
        nomv = true;
        nomv1 = true;
    }

}

function verifprenom() {
    var prenom = $("#prenom").val();
    if(prenom.length==0){
    $("#prenom").css({"border": "solid", "border-width": "0.1px"});
    $("#prenom").css("border-color", "red");
        prenomv=false;
        prenomv1=false;
        return;
    }
    if (prenom.length <= 2) {
        prenomv = false;
        prenomv1=false;
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'le prenom est trop court !',
        })
        $("#prenom").css({"border": "solid", "border-width": "0.1px"});
        $("#prenom").css("border-color", "red");

        return;
    }
    var res = 0;
    for (var i = 0; i < prenom.length; i++)
        if ((prenom.charAt(i) >= 'a' && prenom.charAt(i) <= 'z') || (prenom.charAt(i) >= 'A' && prenom.charAt(i) <= 'Z'))
            res++;

    if (res != prenom.length) {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'le prenom doit etre constitué seulement des lettre alphabetique !',
        })
        $("#prenom").css({"border": "solid", "border-width": "0.1px"});
        $("#prenom").css("border-color", "red");
        prenomv = false;
        prenomv1=false;

    }
    else {
        $("#prenom").css({"border": "solid", "border-width": "0.1px"});
        $("#prenom").css("border-color", "#C2C2C2");
        prenomv = true;
        prenomv1=true;
    }


    return;
}




function verifFormation(){

    var formation =$("#formation").val();

    if(formation.length==0){
        formation1=true;
        return;
    }
    if (formation.length <= 2) {
        formation1 = true;
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'le nom est trop court !',
        })

        return;
    }
    var res = 0;
    for (var i = 0; i < formation.length; i++)
        if ((formation.charAt(i) >= 'a' && formation.charAt(i) <= 'z') || (formation.charAt(i) >= 'A' && formation.charAt(i) <= 'Z')|| (univ.charAt(i) >= '1' && univ.charAt(i) <= '9') || (univ.charAt(i) ==' ' ))
            res++;

    if (res != formation.length) {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'le nom doit etre constitué seulement des lettre alphabetique !',
        })

        formation1 = false;
        return;
    }
    else {
      formation1=true;
    }

}

function verifUniv() {
    var univ =$("#university").val();

    if(univ.length==0){
        university1=true;
        return;
    }
    if (univ.length <= 2) {
        university1 = false;
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'le nom est trop court !',
        })

        return;
    }
    var res = 0;
    for (var i = 0; i < univ.length; i++)
        if ((univ.charAt(i) >= 'a' && univ.charAt(i) <= 'z') || (univ.charAt(i) >= 'A' && univ.charAt(i) <= 'Z')|| (univ.charAt(i) >= '1' && univ.charAt(i) <= '9') || (univ.charAt(i) ==' ' ))
            res++;

    if (res != univ.length) {
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'le nom doit etre constitué seulement des lettre alphabetique !',
        })

        university1 = false;
        return;
    }
    else {
      university1=true;
    }

}







function verifmdp() {
   var mdp1 = $("#mdp").val();
   if(mdp1.length==0){
        $("#mdp").css({"border": "solid", "border-width": "0.1px"});
        $("#mdp").css("border-color", "red");
        mdp1v=false;
        return;
   }

   if (mdp1.length < 7) {

        $("#mdp").css({"border": "solid", "border-width": "0.1px"});
        $("#mdp").css("border-color", "red");
        mdp1v = false;
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'le mot de passe doit contenir au moins 7 caractères !',
        })
     return ;
    }

        $("#mdp").css({"border": "solid", "border-width": "1px"});
        $("#mdp").css("border-color", "#C2C2C2");
        mdp1v = true;
        return ;


}
function verifmdpMatch() {
    if(!mdp1v){
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'le mot de passe doit contenir au moins 7 caractères !',
        })
        mdpv=false;
        return;
    }

    var mdp1 = $("#mdp").val();
    var mdp2 = $("#mdpc").val();

    if (mdp1 != mdp2) {
        $("#mdpc").css({"border": "solid", "border-width": "0.1px"});
        $("#mdpc").css("border-color", "red");
        mdpv = false;
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'les mots de passe saisis ne sont pas identiques !',
        })
        return;
    }



        $("#mdpc").css({"border": "solid", "border-width": "1px"});
        $("#mdpc").css("border-color", "#C2C2C2");
        mdpv = true;

    return;
}

function validateForm() {
    // alert(mdp+" "+" "+nom+" "+prenom);
    if (mdpv  && nomv && prenomv) {
        return true;
    }
    else {

        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'veuillez vérifier votre saisie'
        });
        return false;

    }

}
function validateForm2() {
//alert("nom="+nomv1+"  prenom="+prenomv1+"  formation="+formation1+"  university="+university1);
    if ( nomv1 && prenomv1 && formation1 && university1) {
        return true;
    }
    else {
  //alert(" nom="+nomv1+"  prenom="+prenomv1);
        Swal.fire({
            type: 'error',
            title: 'Oops...',
            text: 'veuillez vérifier votre saisie'
        });
        return false;

    }

}
