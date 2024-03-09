<?php
class Cibo extends Shop
{
    public $id;
    private $price;
    public $disponibilita;


    private $prezzi_cibo = [

        "ciboCane1" => 19.99,
        "ciboCane2" => 29.99,
        "ciboGatto1" => 39.99,
        "ciboGatto2" => 49.99,
    ];

    public function __construct($_price, $disponibilita)

    {

        $this->prezzi_cibo[$this->id] = $_price;
        $this->disponibilita = $disponibilita;
    }

    public function getPrezzi_Cibo()
    {
        return $this->prezzi_cibo;
    }
}
