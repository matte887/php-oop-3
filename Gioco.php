<?php
require_once __DIR__ . "/Prodotto.php";
class Gioco extends Prodotto {
    public $materiale;
    public $colore;
    public $specie_animale;

    function __construct($_nome, $_prezzo) {
        parent:: __construct($_nome, $_prezzo);
    }

    public function stampaCaratt() { ?>
        <h4><?php echo $this -> nome ?></h4>
        <ul>
            <li>Descrizione: <?php echo $this -> descrizione; ?></li>
            <li>Adatto ai <?php echo $this -> specie_animale; ?></li>
            <li><?php echo $this -> prezzo; ?> €</li>
        </ul>
    <?php }
}