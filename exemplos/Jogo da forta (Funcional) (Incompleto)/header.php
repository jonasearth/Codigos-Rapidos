<?php
	require_once "session.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jogo da Forca</title>

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/styles.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<script src="assets/js/jquery-3.3.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<style type="text/css">
  .modal{

        z-index: 2000000;
    background: rgba(0, 0, 0, 0.5);

  }
</style>
		<script type="text/javascript"> 
    function msg(mensagem, tipo, tempo){
    
    if($("#message").is(":visible")){
        return false;
    }

    if(!tempo){
        var tempo = 3000;
    }

    if(!tipo){
        var tipo = "info";
    }

    var cssMessage = "display: block; position: fixed; top: 0; left: 20%; right: 20%; width: 60%; padding-top: 0px; z-index: 2147483648; text-align:center; -webkit-opacity: 0.8;";
    var cssInner = "margin: 0 auto;  box-shadow: 1px 1px 5px black;";

    var dialogo = "";
    dialogo += '<div id="message" style="'+cssMessage+'">';
    dialogo += '    <div class="alert alert-'+tipo+' alert-dismissable" style="'+cssInner+'">';
    dialogo += '    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>';
    dialogo +=          mensagem;
    dialogo += '    </div>';
    dialogo += '</div>';

    $("body").append(dialogo);
    $("#message").hide();
    $("#message").fadeIn(200);

    setTimeout(function() {
        $('#message').fadeOut(300, function(){
            $(this).remove();
        });
    }, tempo);

}
</script>
</head>