<html>
<?php
include 'menu.php';
echo('CRUD');
?>
<div class="background">
                <?php

                $servername = "127.0.0.1";
                $username = "root";
                $password = "2flavia2";
                $dbname = "db_database";
                
                // Create connection
                $conn = mysqli_connect($servername,$username,$password,$dbname) or die ('nao rolou');
                // Check connection
                if ($conn->connect_error) {
                  die("Connection failed: " . $conn->connect_error);
                }
                
                
                
                echo "<table border=1>";
                echo "<tr>";
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
                $nome = $registro['nome'];
                $fone = $registro['fone'];
                $email = $registro['email'];
                $comentario = $registro['comentario'];
                echo "<tr>";
                echo "<td>".$nome."</td>";
                echo "<td>".$fone."</td>";
                echo "<td>".$email."</td>";
                echo "<td>".$comentario."</td>";
                echo '<td><form method ="post" action="index.php"><input type="submit" name="Alterar" value="alterar"></form></td>';
                echo '<td><form method ="post" action="index.php"><input type="submit" name="Excluir" value="alterar"></form></td>';
                echo "</tr>";
                }
                mysqli_close($conn);
                echo "</table>";
                
                ?>
                <p>
                </p>
             </div>
</html>