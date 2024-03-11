<?php
trait Amount{
    public $quantita = [];

    public function setQuantita($id,$quantita){

        $this->quantita[$id] = $quantita;
    }

    public function getQuantita($id){
        return $this->quantita[$id] ?? null;
    }
}