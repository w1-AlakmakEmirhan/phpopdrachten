<?php
/**
 * User: Emirhan
 * Date: 29/3/2020
 * File: Opdracht 5.1
 */
/*samen gemaakt in les bij uitleg*/
//echo "<pre>";
//print_r( $_GET );
//echo "</pre>";

echo $_GET["fullname"];
echo "<br>" . $_GET["reason2quit"];

if (isset($_GET['year'])) {
    echo "<br> Leerjaar:" . $_GET['year'];
}
else
    {
    echo "<br> Leerjaar niet gekozen";
    }
?>