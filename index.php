<?php
/*Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).*/
require_once __DIR__ . "/Cibo.php";
require_once __DIR__ . "/Gioco.php";
require_once __DIR__ . "/Cura.php";
require_once __DIR__ . "/Utente.php";

// PRODOTTI
$crocchette = new Cibo("Cat Chow", 41.5, "gatti");
$crocchette->peso_netto = 10;
$crocchette->gusto = "salmone";
$crocchette->descrizione = "Cat Chow Adult è un alimento secco per gatti adulti che contiene tutti i nutrienti essenziali di cui il tuo gatto ha bisogno per un'età adulta attiva e un benessere generale.";
$crocchette->disponibile = false;
// echo $crocchette -> prezzoPerKilo();
// var_dump($crocchette);

$antipulci = new Cura("Derbe", 7.9, 0.3, "cani");
$antipulci->descrizione = "Sapone Detergente Naturale per Cani è stato realizzato con una base totalmente vegetale di olio di palma e olio di cocco ed è stata arricchito con olio di ricino, olio di germe di grano, argilla verde e zolfo per igienizzare il manto e renderlo pulito, morbido, lucido e profumato, senza compromettere la struttura del pelo.";
// var_dump($antipulci);

$gioco_gatti = new Gioco("Trixie Active", 19.99);
$gioco_gatti->descrizione = "Si ferma al contatto e riprende a muoversi se toccato nuovamente. Cambia direzione da solo se incontra una resistenza.";
$gioco_gatti->specie_animale = "gatti";
// FINE PRODOTTI

// UTENTI
$tizio = new Utente("tizio@gmail.com", true, "09/25");
$tizio->nome = "Tizio";
$tizio->aggiungiAlCarrello($crocchette);
$tizio->aggiungiAlCarrello($antipulci);
$tizio->ottieniTotale();
$tizio->validaPagamento();
// var_dump($tizio);

$caio = new Utente("caio@gmail.com", false, "09/22");
$caio->nome = "Caio";
$caio->aggiungiAlCarrello($crocchette);
$caio->aggiungiAlCarrello($antipulci);
$caio->ottieniTotale();
$caio->validaPagamento();

$sempronio = new Utente("sempronio@gmail.com", false, "02/20");
$sempronio->nome = "Sempronio";
$sempronio->aggiungiAlCarrello($crocchette);
$sempronio->aggiungiAlCarrello($gioco_gatti);
$sempronio->ottieniTotale();
$sempronio->validaPagamento();
// FINE UTENTI
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Negozio prodotti per animali</h1>
    <h2>Prodotti</h2>
    <div>
        <?php $crocchette->stampaCaratt() ?>
    </div>
    <div>
        <?php $antipulci->stampaCaratt() ?>
    </div>
    <div>
        <?php $gioco_gatti->stampaCaratt() ?>
    </div>
    <h2>Pannello utente</h2>
    <div>
        <?php $tizio->stampaUtente() ?>
    </div>
    <div>
        <?php $caio->stampaUtente() ?>
    </div>
    <div>
        <?php $sempronio->stampaUtente() ?>
    </div>
</body>

</html>