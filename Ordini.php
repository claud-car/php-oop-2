<?php 

class Ordine
{
    private $prodotti =[];
    private $totale;

    public function __construct($prodotti)
    {
        $this->prodotti = $prodotti;
        $this->totale = $this->contatotale($prodotti);
    }

    private function contatotale($prodotti)
    {
        $totale = 0;
        for ($i=0; $i < count($prodotti); $i++) { 
            $totale = $prodotti[$i]['quantita'] * $prodotti[$i]['prodotto']->getPrezzo();
        }
    }
}



?>