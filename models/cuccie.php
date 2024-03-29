<?php
require_once __DIR__ . '/../traits/Amount.php';
require_once __DIR__ . '/Shop.php';
class Cuccie extends Shop 
{
    public $id;
    private $price;
    public $disponibilita;

    use Amount;

    private $prezzi = [
        "cucciaCane1" => 69.99,
        "cucciaGatto1" => 49.99,
    ];

    private $disponibile = [
        "cucciaCane1" => true,
        "cucciaGatto1" => true,
    ];

  

    public function __construct($_id,$_price, $disponibilita)
    {
        $this->id = $_id;
        $this->prezzi[$this->id] = $_price;
        $this->disponibile[$this->id] = $disponibilita;
        $this->setQuantita($_id, 0);
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

