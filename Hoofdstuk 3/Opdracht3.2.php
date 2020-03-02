<?php
/**
 *User:Emirhan Alakmak
 *Date: 1-3-2020
 *Time: 21:25
 *File: Opdracht3.2.php
 */
?>
<?php
$trafficLightColor ="rood";
$ambulanceComing = true;


?>
<!doctype HTML>
<a href="../Hoofdstuk%202/index.php">Home</a>
<br>
<html>
<head>
</head>
<link href="3.2.css" type="text/css" rel="stylesheet">
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen:</h2>
    <p>
        <?php
        $trafficLightColor = "groen";
        $ambulanceComing = false;

        if($trafficLightColor== "groen" && $ambulanceComing == false)
        {
            echo("<p id='groen'>U mag doorrijden </p>");
        }
        else
        {
            echo("<p id = 'rood'>U moet stoppen</p>");
        }

        ?>
    </p>
    <p>
        <?php
        $countryName = "België";
        $currentAge = 16;

        if($countryName == "België" && $currentAge >=16 )
        {
            echo "jij woont in België en je leeftijd is ".$currentAge;
            echo "<br>je mag hier alleen zwakke alcohol drinken ";
        }
        else if($countryName == "België" && $currentAge >=18 )
        {
            echo "jij woont in België en je leeftijd is ".$currentAge;
            echo "<br>je mag hier alle alcohol drinken ";
        }
        else if($countryName == "Bulgarije" && $currentAge >=18 )
        {
            echo "jij woont in België en je leeftijd is ".$currentAge;
            echo "<br>je mag hier alle alcohol drinken ";
        }
        else if($countryName == "Cyprus" && $currentAge >=17 )
        {
            echo "jij woont in Cyprus en je leeftijd is ".$currentAge;
            echo "<br>je mag hier alle alcohol drinken ";
        }
        else if($countryName == "Nederland" && $currentAge >=18 )
        {
            echo "jij woont in Nederland en je leeftijd is ".$currentAge;
            echo "<br>je mag hier alle alcohol drinken ";
        }
        else if($countryName == "Zweden" && $currentAge >=18 )
        {
            echo "jij woont in Zweden en je leeftijd is ".$currentAge;
            echo "<br>je mag hier alleen zwakke alcohol drinken";
        }
        else if($countryName == "Zweden" && $currentAge >=20 )
        {
            echo "jij woont in Zweden en je leeftijd is ".$currentAge;
            echo "<br>je mag hier alleen zwakke alcohol drinken";
        }
        else
        {
            echo "jij mag niet drinken";
        }
        ?>
    </p>
</main>
</body>
</html>
