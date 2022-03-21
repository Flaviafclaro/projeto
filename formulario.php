<html>
<?php
include 'menu.php';
?>
             <div class="background">
                <form name="meu_form" method="post" action="recebe.php">

                    <h1 class="paragrafo">Formulário de Contato</h1>
                    <p>
                    <label class="paragrafo" for="nome">Nome</label><br>
                    <input class="paragrafoinput" type="text" id="nomeid" placeholder="Seu Nome" required="required" name="nome" />
                    </p>
                    <p>
                    <label class="paragrafo" for="fone">Fone</label><br>
                    <input class="paragrafoinput" type="tel" id="foneid" placeholder="(xx)xx-xxxx-xxxx" name="fone" />
                    </p>
                    <p> 
                    <label class="paragrafo" for="email">Email</label><br>
                    <input class="paragrafoinput" type="email" id="emailid" placeholder="seuemail@maildominio" name="email" />
                    
                    </p>
                    <label class="paragrafo" for="submit">Seu Comentário</label><br>
                    <textarea class="textarea" placeholder="Deixe seu comentário" name="comentario"></textarea>
                    <p>
                    <input  type="submit" class="enviar" onclick="Enviar();" value="Enviar" />
                    </p>
                    <br>
                  </form>
                <p>
             </div>