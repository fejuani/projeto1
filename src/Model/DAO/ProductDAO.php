<?php

namespace APP\Model\DAO;

use APP\Model\Product;
use APP\Model\Connection;
use PDO;

class ProductDAO
{
    public static function insertProduct(Product $produto): bool
    {
        $connection = Connection::getConnection();
        $stmt = $connection->prepare("INSERT INTO object VALUES (null,?,?,?,?)");
        $stmt->bindParam(1, $produto->product, PDO::PARAM_STR);
        $stmt->bindParam(2, $produto->value, PDO::PARAM_STR);
        $stmt->bindParam(3, $produto->image, PDO::PARAM_STR);
        $stmt->bindParam(4, $produto->description, PDO::PARAM_STR);
        return $stmt->execute();
 
    }
    public static function deleteProduct(int $id): bool
    {
        $connection = Connection::getConnection();
        $stmt = $connection->prepare("delete from object where id_object=?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    public static function update(Product $produto)
{
    $connection = Connection::getConnection();
    $stmt = $connection->prepare("update object set product=?, description=?, value=? where id_object=?");
    $stmt->bindparam(1, $produto->name,PDO::PARAM_STR);
    $stmt->bindparam(2, $produto->phone,PDO::PARAM_STR);

    return $stmt->execute();
}
}
