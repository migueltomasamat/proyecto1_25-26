<?php

namespace App\Class;

use DateTime;

class Director implements \JsonSerializable
{
    private string $name;
    private DateTime $birthdate;

    private array $awards;

    public function __construct(string $name)
    {
        $this->name=$name;
        $this->awards=[];

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): Director
    {
        $this->name = $name;
        return $this;
    }

    public function getBirthdate(): string
    {
        return $this->birthdate;
    }

    public function setBirthdate(DateTime $birthdate): Director
    {
        $this->birthdate = $birthdate;
        return $this;
    }

    public function getAwards(): array
    {
        return $this->awards;
    }

    public function setAwards(array $awards): Director
    {
        $this->awards = $awards;
        return $this;
    }

    public static function createDirectorFromArray(array $directorData):Director{

        return new Director("Directorazo");
    }

    public function jsonSerialize(): mixed
    {
        return [
            "name"=>$this->name,
            "bithdate"=>$this->birthdate,
            "awards"=>$this->awards
        ];
    }
}