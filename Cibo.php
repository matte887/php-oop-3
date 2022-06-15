<?php
require_once __DIR__ . "/Prodotto.php";
class Cibo extends Prodotto {
    public $specie_animale;
    public $peso_netto;
    public $gusto;

    function __construct($_nome, $_prezzo, $_specie_animale, $_disponibile=true) {
        parent:: __construct($_nome, $_prezzo);
        $this -> specie_animale = $_specie_animale;
        $this-> disponibile = $_disponibile;
    }

    public function stampaCaratt() { ?>
        <h4><?php echo $this -> nome ?></h4>
        <ul>
            <li>Descrizione: <?php echo $this -> descrizione; ?></li>
            <li>Cibo per <?php echo $this -> specie_animale; ?></li>
            <li>Gusto: <?php echo $this -> gusto; ?></li>
            <li>Quantità: <?php echo $this -> peso_netto; ?>kg</li>
            <li>€ / kg = <?php echo $this -> prezzoPerKilo(); ?></li>
            <li><?php echo $this -> prezzo; ?> €</li>
        </ul>
    <?php }
}