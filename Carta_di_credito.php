<?php 


class Carta_credito
{

    private $numero;
    private $intestatario;
    private $scadenza;
    private $cvc;


    public function __construct($numero,$intestatario,$scadenza,$cvc)
    {
        $this->numero = $numero;
        $this->intestatario = $intestatario;
        $this->scadenza= $scadenza;
        $this->cvc=$cvc;
    }
}

?>