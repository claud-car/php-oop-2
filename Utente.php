<?php 

require_once 'Autenticazione.php';

class utente
{
    use Autenticazione;

    private $nome;
    private $cognome;
    private $data_nascita;
    private $carta_credito;

    private $carrello = [];

    public function __construct($nome, $cognome,$data_nascita,$username,$password)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->data_nascita= $data_nascita;
        $this->username= $username;
        $this->password = $password;
    }

    public function setCartaCredito($carta_credito)
    {
        $this->carta_credito= $carta_credito;
    }

    public function addCarrello($prodotto,$quantita)
    {
        $this->carrello[] = [
            'prodotto' => $prodotto,
            'quantita' => $quantita,
        ];
    }

    public function getCarrello()
    {
        return $this->carrello;
    }
    
}

?>