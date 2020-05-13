<?php
/**
 * User: Emirhan alakmak
 * Date: 7-5-2020
 * Time: 20:59
 * File: login.php
 */
?>
<?php include '../Includes/header.php'; ?>
<?php
$users = Array
(
    "Emirhan"=> "Kebab",
    "Raoel"=> "suriname",
    "Emir"=> "31420",
    "Ilyah"=> "whiteshark"
);
//post slaat de gegevens op en session haalt de details op van de gebruiker waardoor
foreach ($users as $key => $value)
{
    if ($_POST['username'] ==  $key && $_POST['password'] == $value)
    {
        session_start();
        $_SESSION['username'] = $_POST['username'];
        header('location: resultaat.php');
    }
    else
    {
        $message = "Ongeldige username/wachtwoord//{$_POST['username']}, probeer het nog eens.";


    }
}
echo $message; ?>
<?php include '../Includes/footer.php'; ?>
<?php include '../Includes/variable.php'; ?>
