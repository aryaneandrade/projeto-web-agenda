<?php 

// arquivo de auxilio pra url principal do projeto

$BASE_URL = "http://" . $_SERVER['SERVER_NAME'] . dirname($_SERVER['REQUEST_URI'] . '?') . '/';
?>