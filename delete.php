<?php
include 'connection.php';

$inpid_nome = $_POST['inpid_nome'];
$inpnome = $_POST['inpnome'];
$inpfone = $_POST['inpfone'];
$inpemail = $_POST['inpemail'];
$inpcomentario = $_POST['inpcomentario'];

$sql = "DELETE FROM `formulario` WHERE `formulario`.`id_nome` = $inpid_nome";

$resultado = mysqli_query($conn,$sql) or die ('erro');
header("Location: crud.php"); 
//echo $inpid_nome;


/*
$sql = "INSERT INTO formulario (nome,fone,email,comentario)
VALUES ('$nome','$fone','$email','$comentario')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
*/
?>