<?php

// inciando a sessão 

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

// verfica se veio algum dado no POST

if (!empty($data)) {

    // CRIAR CONTATO 

    if ($data["type"] === "create") {

        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];

        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations) ";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);


        try {
            $stmt->execute();

            $_SESSION["msg"] = "Contato criado com sucesso!";

        } catch (PDOException $e) {

            // Erro na conexão 
            $error = $e->getMessage();
            echo "Erro: " . $error;
        }


        // EDITAR CONTATO 
    } elseif ($data["type"] === "edit") {

        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts 
                  SET name = :name, phone = :phone, observations = :observations
                  WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);
        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();

            $_SESSION["msg"] = "Contato Atualizado com sucesso!";

        } catch (PDOException $e) {

            // Erro na conexão 
            $error = $e->getMessage();
            echo "Erro: " . $error;
        }
    } elseif ($data["type"] === "delete") {

        $id = $data["id"];
        $query = "DELETE FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try {
            $stmt->execute();

            $_SESSION["msg"] = "Contato Removido com sucesso!";

        } catch (PDOException $e) {

            // Erro na conexão 
            $error = $e->getMessage();
            echo "Erro: " . $error;
        }

    }
    // redirect home 
    header("Location:" . $BASE_URL . "../index.php");

} else {

    $id;
    // verifica se veio algum dado no GET 
    if (!empty(($_GET))) {
        $id = $_GET["id"];
    }

    if (!empty($id)) {

        // Retorna dado de um contato 

        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);
        $stmt->bindParam(":id", $id);

        $stmt->execute();

        $contact = $stmt->fetch();

    } else {
        // Retorna todos os contatos:

        // selecionando dados 
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

}

// FECHAR CONEXÃO 

$conn = null;

?>