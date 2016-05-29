/**
 * Created by cuong on 29/05/2016.
 */
$( document ).ready(function() {
   var validator = $("#form_register").kendoValidator().data("kendoValidator");

    $("#btnRegister").click(function () {
       if(validator.validate()){
          alert("Ok");
       }
    });
});