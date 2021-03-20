<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Animal\AnimalInterface;

class AnimalActionController extends Controller
{
    public $animal;

    public function __construct(AnimalInterface $animal)
    {
        $this->animal = $animal;
    }

    public function execute()
    {
        $sound = $this->animal->cry();

        return view('animal.index', compact('sound'));
    }
}
