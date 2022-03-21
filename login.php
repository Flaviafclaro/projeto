<html>
<?php
include 'menu.php';
session_start();
ob_start();
if(isset($_SESSION['usuario'])){
    header("Location: crud.php");   
 }
?>
             <div class="background">
             <form name="meu_form" method="post" action="valida.php">

             <label class="paragrafo">Acesso Restrito</label>
             <p>
             <label class="paragrafo" for="usuario">Usuário</label><br>
             <input class="paragrafoinput" type="text" id="usuarioid" placeholder="usuario" required="required" name="usuario" />
             </p>
             <p>
             <label class="paragrafo" for="senha">Senha</label><br>
             <input class="paragrafoinput" type="password" id="senhaid" placeholder="senha" name="senha" />
            </p>
            <p>
            <input  type="submit" class="enviar" onclick="Enviar();" value="Entrar" />
            </p>
            <br>
            </form>  
             </div>
    
</html>