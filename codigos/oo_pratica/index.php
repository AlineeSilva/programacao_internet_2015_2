<?php
include('seriado.php');
    
$serie= new Seriado();
$serie->addIdioma('portugures br');
print_r($serie->getIdiomas());
echo "www";
?>