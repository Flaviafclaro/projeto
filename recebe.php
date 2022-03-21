<html>
    <head>
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
        <body>
             <header class="menu-principal">
                 <main>
                 <div class="header-1">
                 <div class="logo">
                     <img src="img/logof50.png">
                 </div>
                 <div class="redes-sociais">
                     <ul>
                         <li><a href=" https://www.linkedin.com/in/flavia-claro-06565456/" target="_blank"><img src="img/Li25x25.png"></a></li>
                         <li><a href="https://github.com/Flaviafclaro" target="_blank"><img src="img/github25x25.png"></a></li>
                     </ul>

                 </div>
             </div>
             </main>
             </header>
             <main class="col-100">
                 <div class="header-2">
                     <div class="menu">
                         <ul>
                             <li><a href="index.html">home</a></li>
                             <li><a href="formulario.html">Formulario</a></li>
                             <li><a href="consulta.php">CRUD</a></li>
                             <li><a href="">LINK 5</a></li>
                         </ul>
                     </div>
                     <div class="busca">
                         <input placeholder="Search" type="text" />
                     </div>
                 </div>
             </main>
             <div class="background">
             <?php

include 'connection.php';

$nome = $_POST['nome'];
$fone = $_POST['fone'];
$email = $_POST['email'];
$comentario = $_POST['comentario'];



$sql = "INSERT INTO formulario (nome,fone,email,comentario)
VALUES ('$nome','$fone','$email','$comentario')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
             </div>
             
        </body>
    
</html>



