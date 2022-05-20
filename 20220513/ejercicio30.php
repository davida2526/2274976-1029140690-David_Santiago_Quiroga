<?php
session_start();
$_SESSION["usuario"]="devolteca";
$_SESSION["estatus"]="logeado";

     echo "Sesion iniciada".":<br/>";
       echo "usuario: ".$_SESSION["usuario"]."estatus: ".$_SESSION["usuario"];


?>