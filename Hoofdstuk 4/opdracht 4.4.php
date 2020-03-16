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
<h3> Taak 1</h3>
<div class="well well-lg">
    <?php
    $eendatum = date('d-m-y', strtotime("+1 days"));
    $weekdag = date('w', strtotime("+1 days"));

    $dagenweek = array("zondag", "maandag" ,"dinsdag" ,"woensdag", "donderdag",
"vrijdag", "zaterdag");

    echo "$eendatum is een " .$dagenweek[$weekdag];
    ?>
</div>
