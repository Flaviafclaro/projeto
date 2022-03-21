<?php
session_start();
ob_start();
include('connection.php');
include ('verifica2.php');
if(empty($_POST['usuario']) || empty($_POST['senha']) ){
    header('location: login.php');
    //echo('usuario ou senha não podem estar em branco');
    exit();
}

$usuario = mysqli_real_escape_string($conn, $_POST['usuario']);
$senha = mysqli_real_escape_string($conn, $_POST['senha']);

$sql = "select usuario_id, usuario from usuario where usuario = '{$usuario}' and senha = '{$senha}' limit 1";

$result = mysqli_query($conn,$sql);
$row = mysqli_num_rows($result);
//echo $row;exit;

if($row ==1){
    $_SESSION ['usuario'] = $usuario;
    header('Location:crud.php');
    exit();
}else{
    header('Location: login.php');
    exit();

}

?>

