<?php
require_once __DIR__ . "/Prodotto.php";
class Cura extends Prodotto {
    public $peso_netto;
    public $specie_animale;

    function __construct($_nome, $_prezzo, $_peso_netto, $_specie_animale) {
        parent::__construct($_nome, $_prezzo);
        $this -> peso_netto = $_peso_netto;
        $this -> specie_animale = $_specie_animale;
    }

    public function stampaCaratt() { ?>
        <h4><?php echo $this -> nome ?></h4>
        <ul>
            <li>Descrizione: <?php echo $this -> descrizione; ?></li>
            <li>Per <?php echo $this -> specie_animale; ?></li>
            <li>Quantità: <?php echo $this -> peso_netto; ?></li>
            <li>€ / kg = <?php echo $this -> prezzoPerKilo(); ?>kg</li>
            <li><?php echo $this -> prezzo; ?> €</li>
        </ul>
    <?php }
}