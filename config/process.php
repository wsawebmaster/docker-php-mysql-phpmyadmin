<?php
session_start();

// include_once("connection.php");
include_once("url.php");

// // Mensagens após ações
// $create = "Contato criado com sucesso!";
// $update = "Contato atualizado com sucesso!";
// $delete = "Contato removido com sucesso!";

// $data = $_POST;
// // MODIFICAÇÕES NO BANCO
// if (!empty($data)) {
//   // Criar contato
//   if ($data["type"] === "create") {
//     $name = $data["name"];
//     $phone = $data["phone"];
//     $email = $data["email"];
//     $observations = $data["observations"];
//     $query = "INSERT INTO clients (name, phone, email, observations) VALUES (:name, :phone, :email, :observations)";
//     $stmt = $conn->prepare($query);
//     $stmt->bindParam(":name", $name);
//     $stmt->bindParam(":phone", $phone);
//     $stmt->bindParam(":email", $email);
//     $stmt->bindParam(":observations", $observations);
//     try {
//       $stmt->execute();
//       $_SESSION["msg"] = $create;
//     } catch (PDOException $e) {
//       // erro na conexão
//       $error = $e->getMessage();
//       echo "Erro: $error";
//     }
//   } else if ($data["type"] === "edit") {
//     $name = $data["name"];
//     $phone = $data["phone"];
//     $email = $data["email"];
//     $observations = $data["observations"];
//     $id = $data["id"];
//     $query = "UPDATE clients 
//                 SET name = :name, phone = :phone, email = :email, observations = :observations 
//                 WHERE id = :id";
//     $stmt = $conn->prepare($query);
//     $stmt->bindParam(":name", $name);
//     $stmt->bindParam(":phone", $phone);
//     $stmt->bindParam(":email", $email);
//     $stmt->bindParam(":observations", $observations);
//     $stmt->bindParam(":id", $id);
//     try {
//       $stmt->execute();
//       $_SESSION["msg"] = $update;
//     } catch (PDOException $e) {
//       // erro na conexão
//       $error = $e->getMessage();
//       echo "Erro: $error";
//     }
//   } else if ($data["type"] === "delete") {
//     $id = $data["id"];
//     $query = "DELETE FROM clients WHERE id = :id";
//     $stmt = $conn->prepare($query);
//     $stmt->bindParam(":id", $id);
//     try {
//       $stmt->execute();
//       $_SESSION["msg"] = $delete;
//     } catch (PDOException $e) {
//       // erro na conexão
//       $error = $e->getMessage();
//       echo "Erro: $error";
//     }
//   }
//   // Redirect HOME
//   header("Location:" . $BASE_URL . "../dashboard.php");
//   // SELEÇÃO DE DADOS
// } else {
//   $id;
//   if (!empty($_GET)) {
//     $id = $_GET["id"];
//   }
//   // Retorna o dado de um contato
//   if (!empty($id)) {
//     $query = "SELECT * FROM clients WHERE id = :id";
//     $stmt = $conn->prepare($query);
//     $stmt->bindParam(":id", $id);
//     $stmt->execute();
//     $contact = $stmt->fetch();
//   } else {
//     // Retorna todos os contatos
//     $clients = [];
//     $query = "SELECT * FROM clients";
//     $stmt = $conn->prepare($query);
//     $stmt->execute();
//     $clients = $stmt->fetchAll();
//   }
// }
// // FECHAR CONEXÃO
// $conn = null;
