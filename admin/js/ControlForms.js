$(function() {
  $("#bt_enr").click(function() {
valid = true;

    if ($("#cin").val() == "") {
     $("#cin").next(".Err_msg").fadeIn().text("Veuillez entrer votre Cin");
     valid = false;
    }
    else {
      $("#cin").next(".Err_msg").fadeOut();
    }
    if ($("#non").val() == "") {
     $("#non").next(".Err_msg").fadeIn().text("Veuillez entrer votre non");
     valid = false;
    }
    else {
      $("#non").next(".Err_msg").fadeOut();
    }
    if ($("#prenom").val() == "") {
     $("#prenom").next(".Err_msg").fadeIn().text("Veuillez entrer votre prenom");
     valid = false;
    }
    else {
      $("#prenom").next(".Err_msg").fadeOut();
    }
    if ($("#adresse").val() == "") {
     $("#adresse").next(".Err_msg").fadeIn().text("Veuillez entrer votre adresse");
     valid = false;
    }
    else {
      $("#adresse").next(".Err_msg").fadeOut();
    }
    if ($("#telephone").val() == "") {
       $("#telephone").next(".Err_msg").fadeIn().text("Veuillez entrer votre telephone");
     valid = false;
    }
    else {
        $("#telephone").next(".Err_msg").fadeOut();
    }
    if ($("#age").val() == "") {
     $("#age").next(".Err_msg").fadeIn().text("Veuillez entrer votre age");
     valid = false;
    }
    else {
      $("#age").next(".Err_msg").fadeOut();
    }
    if ($("#dip").val() == "") {
     $("#dip").next(".Err_msg").fadeIn().text("Veuillez entrer votre diplome");
     valid = false;
    }
    else {
      $("#dip").next(".Err_msg").fadeOut();
    }
    if ($("#email").val() == "") {
     $("#email").next(".Err_msg").fadeIn().text("Veuillez entrer votre Email");
     valid = false;
    }
    else {
      $("#email").next(".Err_msg").fadeOut();
    }
    if ($("#sal").val() == "") {
   $("#sal").next(".Err_msg").fadeIn().text("Veuillez entrer votre salaire par plats");
     valid = false;
    }
    else {
      $("#sal").next(".Err_msg").fadeOut();
    }

return valid;
  });
});
$(function(){
 $("#cin").keyup(function(){
 if(!$("#cin").val().match(/[0-9]/)) {
   $("#cin").next(".Err_msg").show().text("Veuiller entrer Le Numero de cin valide ");
 }
 else {
   $("#cin").next(".Err_msg").hide().text("");
 }
 });
});
$(function() {
 $("#telephone").keyup(function(){
   if(!$("#telephone").val().match(/[0-9]/)) {
     $("#telephone").next(".Err_msg").show().text("Veuiller entrer un Numero valide ");
   }
   else {
     $("#telephone").next(".Err_msg").hide().text("");
   }
 });
});
$(function() {
 $("#age").keyup(function() {
   if(!$("#age").val().match(/[0-9]/)) {
     $("#age").next(".Err_msg").show().text("Veuiller entrer un age valide ");
   }
   else {
     $("#age").next(".Err_msg").hide().text("");
   }
 });
});
$(function() {
 $("#sal").keyup(function () {
   if(!$("#sal").val().match(/[0-9]/)) {
     $("#sal").next(".Err_msg").show().text("Veuiller entrer un salaire valide ");
   }
   else {
     $("#sal").next(".Err_msg").hide().text("");
   }
 });
});
$(function() {
 $("#Nume_tab").keyup(function () {
   if(!$("#Nume_tab").val().match(/[0-9]/)) {
     $("#Nume_tab").next(".Err_msg").show().text("Veuiller entrer un numéro valide ");
   }
   else {
     $("#Nume_tab").next(".Err_msg").hide().text("");
   }
 });
});
