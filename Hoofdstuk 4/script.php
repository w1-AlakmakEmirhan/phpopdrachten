<?php
//taak2
$task2 = "Lancering in:";
$teller = 19;
while ($teller >= 0) {
    $task2 = $task2.$teller;
    if($teller >0)
    {
        $task2.= ", ";
    }
    $teller--;
}

//taak3
$task3 = "Lancering in :";
for($teller=19; $teller>=0; $teller--)
{
    $task3 .= $teller;
    //geen komma na de 0
    if($teller > 0)
    {
        $task3.=", ";
    }
}

//taak 4
//hier maak ik verschillende kopteksten met verschillende grotes
$kop = 1;
$iteratie = 1;
$task4 =  "<h$kop> Dit is de $iteratie e iteratie </h$kop>";
// hier geef ik aan dat die max tot 6 gaat
while ($iteratie <= 6)
{
    $task4 = $task4."<h$kop> Dit is de $iteratie e iteratie </h$kop>";
    $iteratie++;
    $kop++;
}

//taak 5
// hier maak ik een table aan waar alle itters iteraties inkomen
$task5 ="<table><tr>";
//het gaat door tot de 10de
for ($iter=1;$iter <=10; $iter++)
{
    $task5 = $task5. "<td>Dit is de  $iter e iteratie</td>";
}
$task5 = $task5."</tr></table>";

//taak 6
$task6 = "";
$jaartal = "2020";
$leeftijd = 18;

// hier geef ik met mijn whileloop aan hoe oud ik ben in dat jaar
while ($jaartal >= 2002)
{
    $task6 .= "<br>In $jaartal was ik $leeftijd jaar oud";
    $jaartal --;
    $leeftijd --;

}

//taak 7
$task7 = "";
$jaartal = "2020";
$leeftijd = 17;
// hier geef ik met een forloop aan wat ik ben in dat jaar
for ($leeftijd=17; $leeftijd >=0; $leeftijd--)
{

    $jaartal --;


    switch ($leeftijd)
        {
            case 4:
                $lifephase = " In $jaartal was ik $leeftijd  en werd ik een kleuter";
                break;
            case 2:
                $lifephase = " In $jaartal was ik $leeftijd  en werd ik een peuter";
                break;
            case 8:
                $lifephase = " In $jaartal was ik $leeftijd  en werd ik een tiener";
                break;
            case 12:
                $lifephase = " In $jaartal was ik $leeftijd  en werd ik een puber";
                break;
            case 18:
                $lifephase = " In $jaartal was ik $leeftijd  en werd ik een adolescent";
                break;
            case 20:
                $lifephase = " In $jaartal was ik $leeftijd  en werd ik een volwassen";
                break;
            default:

                $lifephase = "In $jaartal was ik $leeftijd";
                break;
    }

    $task7 .=  "<br>".$lifephase;
}

?>
