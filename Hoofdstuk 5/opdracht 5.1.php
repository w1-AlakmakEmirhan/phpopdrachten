<?php
/**
 * User: Emirhan
 * Date: 25/3/2020
 * File: Opdracht 5.1
 */

include "../Includes/header.php";
include "../Includes/variable.php";
?>
<h3>Taak 1</h3>
<div class="well well-lg">
    <label>Voor en Achternaam:</label>
    <input name="fullname" type="text">

    <label>Reden uitschrijven:</label>
    <select name="reason2quit">
        <option value="slechte leraar">slechte leraar</option>
        <option value="yonis is weg">yonis is weg</option>
        <option value="opleiding is kut">opleiding is kut</option>
        <option value="php sucks">php sucks</option>
    </select>

    <label>Leerjaar:</label>
    <input type="radio" name="year" value="1">1
    <input type="radio" name="year" value="2">2
    <input type="radio" name="year" value="3">3

    <input type="submit" name="verzend" value="verzend">
</div>

<?php
include "../Includes/footer.php";
?>