<?php

require_once __DIR__ . '/../traits/Amount.php';

class Shop
{
    public $id;
    public $img;
    public $titolo;
    public $icona;
    public $categoria;


    use Amount;

    

    function __construct($_id, $_img, $_titolo, $_icona,$_categoria)
    {
        $this->id = $_id;
        $this->img = $_img;
        $this->titolo = $_titolo;
        $this->icona = $_icona;
        $this->categoria = $_categoria; 
    }
    public function getId()
    {
        return $this->id;
    }
}

$Prodotti = array(

    new Shop("ciboCane1", "./img/PCane1-Photoroom.png-Photoroom.png", "Monge Monoprotein Dog Lattina 400G", "./icons/dog-solid.svg","cane"),

    new Shop("cucciaGatto1", "./img/gatto cuccia-Photoroom.png-Photoroom.png", "Cuccia Igloo Mimì per Gatto", "./icons/cat-solid.svg","gatto"),

    new Shop("giocoCane1", "./img/gioco cane-Photoroom.png-Photoroom.png", "Gioco per Cane Corda Osso", "./icons/dog-solid.svg","cane"),

    new Shop("ciboCane2", "./img/ciboCane2.png", "Natural Trainer Dog Lattina 400G", "./icons/dog-solid.svg","cane"),

    new Shop("ciboGatto1", "./img/gatto-Photoroom.png-Photoroom.png", "Next Natural Cat Lattina Multipack 6x50G", "./icons/cat-solid.svg","gatto"),

    new Shop("gicoGatto1", "./img/gioco gatto-Photoroom.png-Photoroom.png", "Pallina per Gatto in Peluche Bianca", "./icons/cat-solid.svg","gatto"),

    new Shop("cucciaCane1", "./img/cane cuccia-Photoroom.png-Photoroom.png", "Canile in Legno Habitat", "./icons/dog-solid.svg","cane"),

    new Shop("ciboGatto2", "./img/gatto2-Photoroom.png-Photoroom.png", "Felix Le Ghiottonerie Cat Busta Multipack 80x85G", "./icons/cat-solid.svg","gatto")



);

$Prodotti[0]->setQuantita("ciboCane1", 0);
$Prodotti[1]->setQuantita("cucciaGatto1", 12);
$Prodotti[2]->setQuantita("giocoCane1", 45);
$Prodotti[3]->setQuantita("ciboCane2", 50);
$Prodotti[4]->setQuantita("ciboGatto1", 35);
$Prodotti[5]->setQuantita("gicoGatto1", 0);
$Prodotti[6]->setQuantita("cucciaCane1", 5);
$Prodotti[7]->setQuantita("ciboGatto2", 0);


