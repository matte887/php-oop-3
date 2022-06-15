<?php
class Prodotto {
    public $nome;
    public $descrizione;
    public $prezzo;
    public $disponibile = true;

    function __construct($_nome, $_prezzo) {
        $this -> nome = $_nome;
        $this -> prezzo = $_prezzo;
    }

    public function prezzoPerKilo() {
        $prezzoKilo= $this -> prezzo / $this -> peso_netto;
        return round($prezzoKilo, 2, PHP_ROUND_HALF_UP);
    }
/*
    public function stampaCaratt() { ?>
        <h4><?php echo $this -> nome ?></h4>
        <ul>
            <li><?php  ?></li>
            <li><?php  ?></li>
            <li><?php  ?></li>
            <li><?php  ?></li>
            <li><?php  ?></li>
            <li></li>
        </ul>
    <?php }
    */
}