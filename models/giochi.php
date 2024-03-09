<?php

class Giochi extends Shop{

    public $id;
    private $price;
    public $disponibilita;


    private $prezzi_giochi = [

        "giocoCane1" => 12.99,
        "gicoGatto1" => 9.99,
        
    ];
    private $disponibile_giochi = [
        "giocoCane1" => true,
        "gicoGatto1" => false,
    ];

    public function __construct($_price, $disponibilita)

    {

        $this->prezzi_giochi[$this->id] = $_price;
        $this->disponibile_giochi[$this->id] = $disponibilita;
    }

    public function getPrezzi_Giochi()
    {
        return $this->prezzi_giochi;
    }

    public function getDisponibilita_Giochi()
    {
        return $this->disponibile_giochi;
    }

}