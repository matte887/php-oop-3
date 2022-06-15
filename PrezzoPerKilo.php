<?php
trait prezzoPerKilo {
    public $prezzo;

    public function prezzoPerKilo() {
        $prezzoKilo= $this -> prezzo / $this -> peso_netto;
        return round($prezzoKilo, 2, PHP_ROUND_HALF_UP);
    }
}