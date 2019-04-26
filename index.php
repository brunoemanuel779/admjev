<?php
require_once("config.php");
$banco = new Sql();
$usuario=$banco->select("SELECT * FROM tb_usuario");
var_dump($usuario);
?>