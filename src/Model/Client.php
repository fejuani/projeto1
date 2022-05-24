<?php

namespace APP\Model;

class Client
{
    private int $id;
    private string $name;
    private string $phone;
    private string $email;
    private bool $active;

    public function __construct(string $name, string $phone, string $email, int $id=0)
    {
        $this->id = $id;
        $this->name = $name;
        $this->phone = $phone;
        $this->email = $email;
        $this->active = true;
    }

    // Getter
    public function __get($attribute)
    {
        return $this->$attribute;
    }

    // Setter
    public function __set($attribute, $value)
    {
        $this->$attribute = $value;
    }
}
