<?php
session_start();
unset($_SESSION["nome_usuario"]);
unset($_SESSION["id_usuario"]);
session_unset();
session_destroy();
header("Location:../../home.php");
?>
