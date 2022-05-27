<?php

namespace APP\Controller;

require_once "../../vendor/autoload.php";

use APP\Model\Product;
use APP\Model\DAO\ProductDAO;
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
        insertProduct();
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
function insertProduct()
{
    $product = $_POST["product"];
    $valor = (float) $_POST["valor"];
    $description = $_POST["description"];
    $image = $_POST["image[]"];


    $error = array();

    if (!Validation::validateProduct($product)) {
        array_push($error, "produto inválido!!!");
    }

    if (!Validation::validateValor($valor)) {
        array_push($error, "valor inválido!!!");
    }

    if (!Validation::validateDescription($description)) {
        array_push($error, "descrição inválida!!!");
    }

    // Se existir algum erro, faça o IF
    if (count($error) > 0) {
        Uteis::redirect(message: $error, session_name: "msg_validation_erro");
    } else {
        $produto = new Product($product, $description, $valor, $image);
        // Salvaria no banco de dados
        $result = ProductDAO::insertProduct($produto);
        if ($result) {
            Uteis::redirect(message: "Produto cadastrado com sucesso!!!", session_name: "msg_confirm");
        } else {
            Uteis::redirect("Não foi possível cadastrar o cliente!!!");
        }
    }
}

    $produto = new Product(
        product: $_POST["product"],
        description: $_POST["description"],
        value: $_POST["value"],
        image: $_POST["image"] 
    );
    $result = ProductDAO::update($produto);

    if($result){
        Uteis::redirect(message: "Cliente atualizado com sucesso", session_name:"msg_confirm");
    }else{
        uteis::redirect("Não foi possivel atualizar a conta");
    }


