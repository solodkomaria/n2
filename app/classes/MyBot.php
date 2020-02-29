<?php


namespace App\classes;


use PhpParser\Builder\Function_;

class MyBot extends Bot implements iBot
{
    public function __construct()
    {
        $this->age = 1;
        $this->name = 'Cat_1';
        $this->price = 1111;
        $this->img = "https://simple-fauna.ru/wp-content/uploads/2018/09/donskoj-sfinks.jpg";
        $this->color = "red";
    }

    public $color;

    public function setCoplor($c)
    {
        $this->color = $c;
    }

    public function setColor($c)
    {
        // TODO: Implement setColor() method.
    }

    public function say()
    {
        // TODO: Implement say() method.

        return $this->color;
    }
}