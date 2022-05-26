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
        updateClient();
        break;
    case "edit":
        editClient();
        break;

    default:
        Uteis::redirect("Operação inválida!!!");
}
// switch($_GET["exit"]){
//     case "login":
//         loginClient($email, $password);
//         break;
//     case "logout":
//         logoutClient();
//         break;

// }

function insertClient()
{
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $password = $_POST["password"];


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
    if (!Validation::validatePassword($password)) {
        array_push($error, "Senha inválida!!!");
    }

    // Se existir algum erro, faça o IF
    if (count($error) > 0) {
        Uteis::redirect(message: $error, session_name: "msg_validation_erro");
    } else {
        $client = new Client($name, $phone, $email, $password);
        // Salvaria no banco de dados
        $result = ClientDAO::insertClient($client);
        if ($result) {
            Uteis::redirect(message: "Usuário cadastrado com sucesso!!!", session_name: "msg_confirm");
        } else {
            Uteis::redirect("Não foi possível cadastrar o cliente!!!");
        }
    }
}
// function loginClient($email, $password)
// {
//     if(!Validation::validateEmail($_POST["email"])){
//         array_push($error, "Email do usuário inválido");
//     }

//     if(!Validation::validatePassword($_POST["password"])){
//         array_push($error, "Senha do usuário inválido");
//     }

//         if (count($error) > 0) {
//         Uteis::redirect(message: $error, session_name: "msg_validation_erro");} 
//         else {
//              $client = new Client($email, $password);
//              // Salvaria no banco de dados
//                //$result = ClientDAO::insertClient($client);
//      }

//         // if (count($error) > 0) {
//         //     Uteis::redirect(message: $error, session_name: "msg_validation_erro");
//         // } else {
//         //     $client = new Client($name, $phone, $email, $password);
//         //     // Salvaria no banco de dados
//         //     $result = ClientDAO::insertClient($client);
//         //     if ($result) {
//         //         Uteis::redirect(message: "Usuário cadastrado com sucesso!!!", session_name: "msg_confirm");
//         //     } else {
//         //         Uteis::redirect("Não foi possível cadastrar o cliente!!!");
//         //     }
//         // }
// }
// function logoutClient()
// {

// }

function editClient()
{
    if(!Validation::validateId($_GET["codigo"])){
        Uteis::redirect("Código do usuário inválido");
    }
    $client = ClientDAO::findClient($_GET["codigo"]);
    if($client){
        Uteis::redirect(message: $client, session_name:"client_data", url:"../View/form_edit_client.php");
    }else{
        Uteis::redirect("Cliente não localizado");
    }
}
function updateClient()
{
    $error = array();
    if(!Validation::validateId($_POST["code"]));{
        array_push($error, "Código do usuário inválido");

    }
    if(!Validation::validateName($_POST["name"])){
        array_push($error, "Nome do usuário inválido"); 
    }
    if(!Validation::validateEmail($_POST["email"])){
        array_push($error, "Email do usuário inválido");
    }
    if(!Validation::validatePhone($_POST["phone"])){
        array_push($error, "Telefone do usuário inválido");
    }
    if(!Validation::validatePassword($_POST["password"])){
        array_push($error, "Senha do usuário inválido");
    }
    $client = new Client(
        id: $_POST["code"],
        name: $_POST["name"],
        phone: $_POST["phone"],
        email: $_POST["email"],
        password: $_POST["password"]
    );
    $result = ClientDAO::update($client);

    if($result){
        Uteis::redirect(message: "Cliente atualizado com sucesso", session_name:"msg_confirm");
    }else{
        uteis::redirect("Não foi possivel atualizar a conta");
    }
}

