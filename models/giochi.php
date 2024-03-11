<?php
require_once __DIR__ . '/../traits/Amount.php';
require_once __DIR__ . '/Shop.php';
class Giochi extends Shop{

    

    public $id;
    private $price;
    public $disponibilita;


    use Amount;

    private $prezzi_giochi = [

        "giocoCane1" => 12.99,
        "gicoGatto1" => 9.99,
        
    ];
    private $disponibile_giochi = [
        "giocoCane1" => true,
        "gicoGatto1" => false,
    ];


    public function __construct($_id,$_price, $disponibilita)

    { 
        
        $this->id = $_id;
        $this->prezzi_giochi[$this->id] = $_price;
        $this->disponibile_giochi[$this->id] = $disponibilita;
        $this->setQuantita($_id, 0);
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