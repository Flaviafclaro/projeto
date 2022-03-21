<html>
<?php
session_start();
ob_start();
include 'menu.php';
if(!isset($_SESSION['usuario'])){
   $_SESSION['msg'] = 'necessario logar';
   header("Location: login.php");   
}

?>
<div class="background">
Olá, <?php echo $_SESSION['usuario'] ?>!<br>

                <?php

                include 'connection.php';
                
                echo "<table border=1>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>Nome</th>";
                echo "<th>Email</th>";
                echo "<th>Fone</th>";
                echo "<th>Comentario</th>";
                echo "<th>Alterar</th>";
                echo "<th>Deletar</th>";
                echo "</tr>";
                
                $sql = "SELECT * FROM formulario";
                $resultado = mysqli_query($conn,$sql) or die ('erro');
                
                while ($registro = mysqli_fetch_array($resultado))
                {
                $id_nome = $registro['id_nome'];
                $nome = $registro['nome'];
                $fone = $registro['fone'];
                $email = $registro['email'];
                $comentario = $registro['comentario'];
                echo "<tr>";
                echo "<td>".$id_nome."</td>";
                echo "<td>".$nome."</td>";
                echo "<td>".$fone."</td>";
                echo "<td>".$email."</td>";
                echo "<td>".$comentario."</td>";
                echo '<td><form method ="post" action="update.php"><input type="submit" name="Alterar" value="alterar"></form></td>';
                echo '<td><form method ="post" action="index.php"><input type="submit" name="Excluir" value="excluir"></form></td>';
                echo "</tr>";
                }
                mysqli_close($conn);
                echo "</table>";
                ?>
                <p>
                   <a href="sair.php">logout</a>
                </p>
             </div>
</html>