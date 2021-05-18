<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Prodotto.php';
require_once 'Utente.php';
require_once 'Carta_di_credito.php';
require_once 'Ordini.php';

$felpa = new prodotto('felpa','una felpa',15,true,'F4321');
$scarpe = new prodotto('scarpe','nike',20,true,'F4321');

$utente1 = new Utente('Claudio','Carchietti','1990-08-00','claud','pippo');
$carta_credito = new Carta_credito('1111111111111','nike','Claudio','2023-12-08','999');
$utente1->setCartaCredito($carta_credito);

$utente1->addCarrello($felpa,1);
$utente1->addCarrello($scarpe,1);

$ordine1 = new Ordine ($utente1->getCarrello());

var_dump($ordine1);


?>