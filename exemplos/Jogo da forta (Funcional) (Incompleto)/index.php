<?php require_once "header.php"; ?>

    <div class="box-area game-s2">
            <div class="container">
                
                <div class="game-box ptb--100">
                    <div id="eoq"></div>
                    <form style="width: 500px;" method="post" action="javascript:newgame()">
                       
                        <div style="padding: 0px;" class="game-form-body">
                            <div class="submit-btn-area">
                                <button id="form_submit"  style="background-color: #bbbbbb" type="submit">Iniciar Novo Jogo <i class="ti-arrow-right"></i></button>
                            </div>
                            
                            <div class="form-footer">
                                
                            </div>
                        </div>
                        <div id="dica"></div>
                    </form>

                    <script type="text/javascript">
                        
                        function newgame(){
                            var game = "game";
                            $('#form_submit').prop("disabled", true);
                             $('#message').fadeOut(300, function(){
                                $(this).remove();
                                });
                            $.post('getnewgame.php', {game: game}, function(resposta){
                                $('.game-form-body').html(resposta);
                            });
                        }

                        function sendalp(letra){
                            $("#" + letra).prop("disabled", true);
                            $.post('sendalp.php', {letra: letra},function(resposta){     
                                                     
                                $('#eoq').html(resposta); 

                                if (resposta.status == "correto") {
                                    if (resposta.sub == "fim") {
                                        $('#letras').html("");
                                        
                                        $('#dica').html("");
                                        
                                        msg(resposta.msg, "success", 500000);
                                        
                                        for(var i = 0; i < resposta.casas.length; ++i){
                                            $('#' + resposta.casas[i] + '').val(letra);
                                        }
                                        setTimeout(function() {
                                            $('.game-form-body').html('<div class="submit-btn-area"><button id="form_submit"  style="background-color: #bbbbbb" type="submit">Iniciar Novo Jogo <i class="ti-arrow-right"></i></button></div>');
                                        }, 5000);
                                    }
                                    if(resposta.sub == "normal"){
                                        
                                        msg("Letra correta Jovem!", "success", 1000);
                                        
                                        for(var i = 0; i < resposta.casas.length; ++i){
                                            $('#' + resposta.casas[i] + '').val(letra);
                                        }

                                    }
                                }
                                if (resposta.status == "errado") {
                                    if (resposta.sub == "lose") {
                                        
                                        $('#letras').html("");
                                        
                                        $('#dica').html("");
                                        
                                        $('#ss').html('<img src="gif/forca' + resposta.quant + '.gif" alt="Forca" border="0" name="status" style="float: left;" width="100" height="150">');
                                        
                                        msg(resposta.msg, "danger", 500000);
                                                
                                        setTimeout(function() {

                                            $('.game-form-body').html('<div class="submit-btn-area"><button id="form_submit"  style="background-color: #bbbbbb" type="submit">Iniciar Novo Jogo <i class="ti-arrow-right"></i></button></div>');

                                                          
                                        }, 5000);
                                                 
                                    }
                                    if (resposta.sub == "dica") {
                                        
                                        msg("Letra incorreta tente novamente!", "danger", 1000);
                                        
                                        $('#ss').html('<img src="gif/forca' + resposta.quant + '.gif" alt="Forca" border="0" name="status" style="float: left;" width="100" height="150">');
                                        
                                        $('#dica').html("<br><br> <center><input class='btn btn-success' type='submit' disabled value='" + resposta.dica + "'><center>");
                                    }
                                    if (resposta.sub == "normal"){
                                        
                                        msg("Letra incorreta tente novamente!", "danger", 1000);
                                        
                                        $('#ss').html('<img src="gif/forca' + resposta.quant + '.gif" alt="Forca" border="0" name="status" style="float: left;" width="100" height="150">');
                                    
                                    }
                                } 

                            },'json');
                        }
                    </script>
                </div>
            </div>
        </div>
</html>