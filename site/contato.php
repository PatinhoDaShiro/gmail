<?php
error_reporting(E_ALL ^ E_NOTICE);
require "config.php";
include TEMPLATE_BASE."/header.php";
include TEMPLATE_BASE."/nav.php";
?>

<main>
<div> 
<h2>Fale conosto!</h2>
            
        <form  action="contato.php" method="post" enctype="multipart/form-data">
            <label>Nome de usuario.</label><br>
              <input type="text" name="usuario" placeholder="Nome de usuario"/><br />
            <label>Assunto do E-mail.</label><br>
              <input type="text" name="assunto" placeholder="assunto" /><br />
            <label>Escreva sua mensagem</label><br>
                <textarea type="text" name='mensagem' placeholder="Digite sua mensagem aqui."></textarea><br>
            <input type="submit" name="submit" value="Enviar!" id="enviar" />
        </form>
            </div>
            <?php
                $para=GMAIL;
                $assunto= $_POST['assunto'];
                $corpo=$_POST['mensagem'];
                $usuario=$_POST['usuario'];
                if(empty($assunto && $corpo)==false){
                    if(mail($para,$assunto,$corpo)){
                        echo $usuario." o email foi enviado para o administrador do site com sucesso. Aguarde sua resposta.";
                    } else{
                        echo "Falha no envio. Tente novamente ".$usuario;
                    }
                } else{
                    echo "Falha no envio. Tente novamente";
                }
            ?>     


            </main>
<?php
include TEMPLATE_BASE."/footer.php";
?>