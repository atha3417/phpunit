<?php

namespace App\Models;

class Pokemon
{
    public $firstname;
    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
    }

    public function getFirstName()
    {
        return $this->firstname;
    }
}