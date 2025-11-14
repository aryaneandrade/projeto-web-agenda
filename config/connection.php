<?php 

// conexão com o banco de dados mysql utilizando PDO


$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "Admin@123";

try{

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // Ativar modo de erros 
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){   

     // Erro na conexão 
    $error = $e->getMessage();
    echo "Erro: ". $error;
}

?>