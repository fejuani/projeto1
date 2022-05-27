<?php

namespace APP\Model;

class Validation
{
    public static function validateId(int $id)
    {
        return $id > 0;
    }
    public static function validateName(string $name): bool
    {
        return strlen($name) > 2 && !is_numeric($name);
    }

    public static function validatePhone(string $phone)
    {
        return preg_match("/^\(?\d{2}\)?[\s-]?\d{5}-?\d{4}$/", $phone);
    }

    public static function validateEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    public static function validatePassword(string $password)
    {
        return strlen($password) > 6 ;
    }
    public static function validateProduct(string $product): bool
    {
        return strlen($product) > 2 && !is_numeric($product);
    }
    public static function validateDescription(string $description): bool
    {
        return strlen($description) <=500;
    }
    public static function validateValor(float $valor): bool
    {
        return preg_match("/^\d*[0-9](\,\d*[0-9])?$/", $valor);
    
    }
}

