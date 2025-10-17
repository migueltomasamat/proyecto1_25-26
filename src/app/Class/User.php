<?php

namespace App\Class;

use App\Enum\UserType;

class User
{
    private string $username;
    private string $email;
    private string $password;
    private UserType $type;
    private \DateTime $birthdate;
    private float $viewedHours;

}