<?php

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
?>