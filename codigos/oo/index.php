<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
</html>

<body>

<?php
require_once('seriado.php');
$seriado = new Seriado('Shadow Hunter', 'Caçador das sombras');
//print_r($seriado);
$seriado->addTemporada(1,'Caçador de ossos');
$seriado->addEpisodio(1, 1, 'Piloto', 48.4, 'bla bla bla 1');
$seriado->addEpisodio(1, 2, 'Um novo episódio', 49.1, 'bla bla bla 2');

$seriado->addTemporada(2,'Moedor de carne');
$seriado->addEpisodio(2, 1, 'Assassino 1', 48.4, 'bla bla bla 1');
$seriado->addEpisodio(2, 2, 'Assassino 2', 49.1, 'bla bla bla 2');
$seriado->addEpisodio(2, 2, 'Assassino 3 ', 49.1, 'bla bla bla 2');

echo "<pre>";
print_r($seriado->getTemporadas());
echo "<br>Episodios da 1ª temporada<br>";
print_r($seriado->getEpisodios(1));
echo "</pre>";
?>
</body>