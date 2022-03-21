<html>
<?php
include 'menu.php';
?>
             <div class="background">
                <?php

                include 'connection.php';
                
                echo "<table border=1>";
                echo "<tr>";
                echo "<th>Nome</th>";
                echo "<th>Email</th>";
                echo "<th>Fone</th>";
                echo "<th>Comentario</th>";
                echo "</tr>";
                
                $sql = "SELECT * FROM formulario";
                $resultado = mysqli_query($conn,$sql) or die ('erro');
                
                while ($registro = mysqli_fetch_array($resultado))
                {
                $nome = $registro['nome'];
                $fone = $registro['fone'];
                $email = $registro['email'];
                $comentario = $registro['comentario'];
                echo "<tr>";
                echo "<td>".$nome."</td>";
                echo "<td>".$fone."</td>";
                echo "<td>".$email."</td>";
                echo "<td>".$comentario."</td>";
                echo "</tr>";
                }
                mysqli_close($conn);
                echo "</table>";
                
                ?>
                <p>
                <form name="meu_form" method="post" action="login.php">
                  <input  type="submit" class="enviar" onclick="Enviar();" value="Manipular Dados" />
                </form>
                </p>
             </div>
             
        </body>
    
</html>