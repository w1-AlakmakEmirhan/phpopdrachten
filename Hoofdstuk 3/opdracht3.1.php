<?php
/**
 * User: Emirhan
 * Date: 5/2/2020
 * Time: 11:56
 * File: Opdracht 3.1
 */
?>
<!DOCTYPE html>
<a href="../Hoofdstuk%202/index.php">Home</a>
<br>
<?php
$event = "Elfstedentocht";
$translate = "Alvestêdetocht";
$distance = "200";
$sport = "schaatstocht";
$material = "natuurijs";
$organizer = "Koninklijke Vereniging De Friesche Elf Steden";
$capital = "Leeuwarden";
$country = "Friesland";
$times = "15";
$firsttime = "1909";
$max = "1";
$verhaal1 = "De " .$event. " (Fries: " .$translate. ") is een " .$distance. " kilometer<br>lange " .$sport. " over "  .$material. " die wordt georganiseerd door<br>
de" .$organizer. ". " .$capital. ", <br>de hoofdstuk van " .$country. ",  is start- en aankomstplaats. De<br> " .$event. " is inmiddels " .$times. " maal verreden en werd voor het<br>
eerste in " .$firsttime. " gereden en wordt maximaal " .$max. " keer per winter<br>gehouden.";
$verhaal2 = "De $event (Fries: $translate) is een $distance kilometer<br>lange $sport over $material die wordt georganiseerd door<br>de $organizer. $capital, <br>de hoofdstuk van $country, is start- en aankomstplaats. De<br>$event is inmiddels $times maal verreden en werd voor het<br>eerst in $firsttime gereden en wordt maximaal $max keer per winter<br>gehouden.";
?>
<html>
<body>
<?PHP
echo $verhaal1;
?>
<br>
<br>
<?php
echo $verhaal2;
?>
</body>
</html>