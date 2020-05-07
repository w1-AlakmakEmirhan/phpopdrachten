<?php
/**
 * User: Emirhan alakmak
 * Date: 7-5-2020
 * Time: 21:15
 * File: loguit.php
 */
?>
<?php include '../Includes/header.php'; ?>
<?php

session_start();
session_destroy();
header('location: opdracht 6.1.php');
?>
<br>
<br>
<a href="../Hoofdstuk%202/index.php">Home</a>
<?php include '../Includes/footer.php'; ?>
<?php include '../Includes/variable.php'; ?>
