<?php
require_once __DIR__ . '/../traits/Amount.php';
require_once __DIR__ . '/Shop.php';
class Cibo extends Shop
{
    public $id;
    private $price;
    public $disponibilita;

    use Amount;


    private $prezzi_cibo = [

        "ciboCane1" => 16.99,
        "ciboCane2" => 14.99,
        "ciboGatto1" => 22.99,
        "ciboGatto2" => 39.99,
    ];

    private $disponibile_Cibo = [
        "ciboCane1" => false,
        "ciboCane2" => true,
        "ciboGatto1" => true,
        "ciboGatto2" => false,
    ];
   

    public function __construct($_id,$_price, $disponibilita)

    {
        $this->id = $_id;
        $this->prezzi_cibo[$this->id] = $_price;
        $this->disponibile_Cibo[$this->id] = $disponibilita;
        $this->setQuantita($_id, 0);
    }

    public function getPrezzi_Cibo()
    {
        return $this->prezzi_cibo;
    }

    public function getDisponibilita_Cibo()
    {
        return $this->disponibile_Cibo;
    }
}
