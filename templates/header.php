<?php
include_once("config/url.php");
include_once("config/process.php");

// limpar a mensagem de sessao 

if(isset($_SESSION['msg'])){
    $printmsg = $_SESSION['msg'];
    $_SESSION['msg'] = '';
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.8/css/bootstrap.min.css"
        integrity="sha512-2bBQCjcnw658Lho4nlXJcc6WkV/UxpE/sAokbXPxQNGqmNdQrWqtw26Ns9kFF/yG792pKR1Sx8/Y1Lf1XN4GKA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS do PROJETO -->
    <link rel="stylesheet" href="<?= $BASE_URL ?>css/styles.css">
</head>

<body>

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

            <a href="<?= $BASE_URL ?>index.php" class="navbar-brand">
                <img src="<?= $BASE_URL ?>img/logo-agenda.png" alt="Agenda">
            </a>

            <div>
                <div class="navbar-nav">
                    <a href="<?= $BASE_URL ?>index.php" id="home-link" class="nav-link active">Agenda</a>
                    <a href="<?= $BASE_URL ?>create.php"  class="nav-link active">Adicionar Contato</a>
                </div>
            </div>
        </nav>
    </header>