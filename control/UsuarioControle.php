<!--5-->
<?php
include_once "../model/Usuario.php";
include_once "../model/UsuarioManipula.php";
session_start();
session_unset();

$u = new Usuario();

$u->login=$_GET['login'];
$u->senha=$_GET['senha'];
$u->tipo=$_GET['tipo'];
    
$um=new UsuarioManipula();
$um->cadastrarUsuario($u);
$_SESSION['usuario']= serialize($u);
header('location:../view/Resposta.php');