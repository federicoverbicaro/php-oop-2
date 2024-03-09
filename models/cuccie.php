<?php

class Cuccie extends Shop 
{
    public $id;
    private $price;
    public $disponibilita;


    private $prezzi = [
        "cucciaCane1" => 69.99,
        "cucciaGatto1" => 49.99,
    ];

    public function __construct($_price, $disponibilita)
    {
       
        $this->prezzi[$this->id] = $_price;
        $this->disponibilita = $disponibilita;
    }

    public function getPrezzi()
    {
        return $this->prezzi;
    }

    public function getDisponibilita()
    {
        return $this->disponibilita;
    }
}

