<?php

namespace APP\Controller;

require_once "../../vendor/autoload.php";

use APP\Model\Client;
use APP\Model\DAO\ClientDAO;
use APP\Model\Uteis;
use APP\Model\Validation;

session_start();

if (empty($_POST) && empty($_GET)) {
    Uteis::redirect(message: "Requisição inválida!!!");
}

if (empty($_GET["operation"])) {
    Uteis::redirect("Operação não informada!!!");
}

switch ($_GET["operation"]) {
    case "insert":
        insertClient();
        break;
    case "update":
        // updateClient();
        break;
    case "remove":
        removeClient();
        break;
    case "findall":
        findAllUsers();
    default:
        Uteis::redirect("Operação inválida!!!");
}

function insertClient()
{
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];

    $error = array();

    if (!Validation::validateName($name)) {
        array_push($error, "Nome inválido!!!");
    }

    if (!Validation::validateEmail($email)) {
        array_push($error, "Email inválido!!!");
    }

    if (!Validation::validatePhone($phone)) {
        array_push($error, "Telefone inválido!!!");
    }

    // Se existir algum erro, faça o IF
    if (count($error) > 0) {
        Uteis::redirect(message: $error, session_name: "msg_validation_erro");
    } else {
        $client = new Client($name, $phone, $email);
        // Salvaria no banco de dados
        $result = ClientDAO::insertClient($client);
        if ($result) {
            Uteis::redirect(message: "Usuário cadastrado com sucesso!!!", session_name: "msg_confirm");
        } else {
            Uteis::redirect("Não foi possível cadastrar o cliente!!!");
        }
    }
}
function removeClient()
{
    if (empty($_GET["codigo"])) {
        Uteis::redirect("Código não localizado!!!");
    }
    if (!Validation::validateId($_GET["codigo"])) {
        Uteis::redirect("O código informado é inválido!!!");
    }
    $result = ClientDAO::deleteClient($_GET["codigo"]);
    if ($result) {
        Uteis::redirect(message: "Usuário removido com sucesso!!!", session_name: "msg_confirm");
    } else {
        Uteis::redirect("Não foi possível remover o usuário!!!");
    }
}
function findAllUsers()
{
    $clients = ClientDAO::findAll();
    if ($clients) {
        Uteis::redirect($clients, session_name: "list_of_users", url: "../View/list_users.php");
    } else {
        Uteis::redirect("Nenhum usuário cadastrado no sistema");
    }
}
