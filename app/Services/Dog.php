<?php
namespace App\Services;

use App\Animal\AnimalInterface;

class Dog implements AnimalInterface
{
    public function cry()
    {
        return get_class($this) . ': 　　Wooooooo!!!!!!!';
    }
}
