<?php
/**
 * User: Emirhan
 * Date: 25/3/2020
 * File: Opdracht 5.1
 */

/*dit hoort bij de uitleg van hoofdstuk 5*/
/*//echo "<pre>";
//print_r( $_GET );
//echo "</pre>";

echo $_GET["fullname"];
echo "<br>" . $_GET["reason2quit"];

if (isset($_GET['year'])) {
    echo "<br> Leerjaar:" . $_GET['year'];
} else {
    echo "<br> Leerjaar niet gekozen";
}*/
?>
/*Hier echo ik de gegevens in een table die de gebruiker invult*/
<table>
    <tr>
        <td><?php echo  "Bedrijfsnaam: " ?></td>
        <td><?php echo  "".$_GET["companyname"]; ?></td>
    </tr>
    <tr>
        <td><?php echo  "Voornaam:" ?></td>
        <td><?php echo  "".$_GET["firstname"]; ?></td>
    </tr>
    <tr>
        <td><?php echo  "Achternaam:" ?></td>
        <td><?php echo  "".$_GET["lastname"]; ?></td>
    </tr>
    <tr>
        <td><?php echo  "Telefoon:" ?></td>
        <td><?php echo  "".$_GET["Phonenumber"]; ?></td>
    </tr>
    <tr>
        <td><?php echo  "E-Mail:" ?></td>
        <td><?php echo  "".$_GET["e-mail"]; ?></td>
    </tr>
    <tr>
        <td><?php echo  "Bericht:" ?></td>
        <td><?php echo  "".$_GET["message"]; ?></td>
    </tr>
</table>