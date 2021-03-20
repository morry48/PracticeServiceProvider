<?php
namespace App\Services;

use App\Animal\AnimalInterface;

class Cat implements AnimalInterface
{
    public function cry()
    {
        return get_class($this) . ':　　にゃん';
    }
}
