<?php
require_once __DIR__ . "/PrezzoPerKilo.php";
class Prodotto {
    public $nome;
    public $descrizione;
    // public $prezzo;
    public $disponibile = true;
    use prezzoPerKilo;

    function __construct($_nome, $_prezzo) {
        $this -> nome = $_nome;
        $this -> prezzo = $_prezzo;
    }

    // public function prezzoPerKilo() {
    //     $prezzoKilo= $this -> prezzo / $this -> peso_netto;
    //     return round($prezzoKilo, 2, PHP_ROUND_HALF_UP);
    // }
}