<?php

class DiscountAlert extends Exception {}
$scontoVisualizzato = false;
try {
  
    throw new DiscountAlert("Oggi c'è uno sconto!");
} catch (DiscountAlert $e) {
    
    if (!$scontoVisualizzato) {
        $scontoVisualizzato = true;
    }
}