<?php

class Giochi extends Shop{

    public $id;
    private $price;
    public $disponibilita;


    private $prezzi_giochi = [

        "giocoCane1" => 99,
        "gicoGatto1" => 9.99,
        
    ];

    public function __construct($_price, $disponibilita)

    {

        $this->prezzi_giochi[$this->id] = $_price;
        $this->disponibilita = $disponibilita;
    }

    public function getPrezzi_Cibo()
    {
        return $this->prezzi_giochi;
    }

}