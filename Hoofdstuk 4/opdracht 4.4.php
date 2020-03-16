<?php
/**
 * User: Emirhan
 * Date: 5/2/2020
 * Time: 11:56
 * File: Opdracht 3.1
 */
include "../Includes/header.php";
include "../Includes/variable.php";
?>
<?php
$eendatum = date('d-m-Y', strtotime("0 days"));
$eenweek = date('w', strtotime("0 days"));

$dagNamen = array("zondag", "maandag" ,"dinsdag" ,"woensdag", "donderdag",
    "vrijdag", "zaterdag");


// hier maak ik een variable aan en een forloop
for ($eendatum = 0; $eendatum <7 ; $eendatum++)
{
    $eenweek = strtotime("+$eendatum days");
    echo "<br>";
    echo date('d-m-Y', $eenweek);
    echo " en dit is dag ";
    echo $idxweek = date('w', $eenweek);
    echo " in deze week ".$dagNamen[$idxweek];;
}
?>