<?php

namespace APP\Model\DAO;

use APP\Model\Client;
use APP\Model\Connection;
use PDO;

class ClientDAO
{
    public static function insertClient(Client $client): bool
    {
        $connection = Connection::getConnection();
        $stmt = $connection->prepare("insert into client values(null,?,?,?,1)");
        $stmt->bindParam(1, $client->name, PDO::PARAM_STR);
        $stmt->bindParam(2, $client->phone, PDO::PARAM_STR);
        $stmt->bindParam(3, $client->email, PDO::PARAM_STR);
        return $stmt->execute();
    }
    public static function deleteClient(int $id): bool
    {
        $connection = Connection::getConnection();
        $stmt = $connection->prepare("delete from client where id_client=?");
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    public static function findAll()
    {
        $connection = Connection::getConnection();
        $sql = "select * from client";
        $stmt = $connection->query($sql);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
