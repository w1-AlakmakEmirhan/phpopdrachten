<?php
/**
 * User: Emirhan alakmak
 * Date: 7-5-2020
 * Time: 20:59
 * File: opdracht 6.1.php
 */
?>
<?php include '../Includes/header.php'; ?>
<body>
<form method="post" action="login.php">
    <label>
        Username:
    </label>
    <input type="text" id="username" name="username">
    <br>
    <label>
        Wachtwoord:
    </label>
    <input type="password" id="password" name="password">
    <br>
    <br>
    <input type="submit" name="submit" value="verzend">
</form>
<br>
<br>
<a href="../Hoofdstuk%202/index.php">Home</a>
<br>
<?php include '../Includes/footer.php'; ?>
<?php include '../Includes/variable.php'; ?>
