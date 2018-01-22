<?php
    include_once("Radiozender.php");
    include_once("Liedje.php");

    $ditprogramma = new Radiozender();
    $ditprogramma->setNaam("Mijn eerste programma Radiozender"."<br>");
    $ditprogramma->setOmschrijving("Even testen"."<br>");

    foreach ($ditprogramma->getProgramma() as $p) {
    echo $p. "<br>";
}

    $nieuwliedje  =  new Liedje("Ed Sheeran", "Perfect");
    $nieuwliedje2 = new Liedje("Eminem", "River");
    $nieuwliedje3 = new Liedje("Rita Ora", "Anywhere");
    $nieuwliedje4 = new Liedje("Post Malone", "Rockstar");
    $nieuwliedje5 = new Liedje("P!nk", "What about us");


$ditprogramma->voegLiedjeToe($nieuwliedje);
$ditprogramma->voegLiedjeToe($nieuwliedje2);
$ditprogramma->voegLiedjeToe($nieuwliedje3);
$ditprogramma->voegLiedjeToe($nieuwliedje4);
$ditprogramma->voegLiedjeToe($nieuwliedje5);

    foreach($ditprogramma->getLiedjes() as $liedje) {
        echo $liedje->getTitel()." - ".$liedje->getArtiest()."<br>";
    }

