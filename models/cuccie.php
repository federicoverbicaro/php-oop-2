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

    private $disponibile = [
        "cucciaCane1" => true,
        "cucciaGatto1" => true,
    ];

    public function __construct($_price, $disponibilita)
    {
       
        $this->prezzi[$this->id] = $_price;
        $this->disponibile[$this->id] = $disponibilita;
    }

    public function getPrezzi()
    {
        return $this->prezzi;
    }

    public function getDisponibilita()
    {
        return $this->disponibile;
    }
}

