<?php
/**
 * User: Emirhan
 * Date: 23/5/2020
 * File: Opdracht 7.2
 */

include "../Includes/header.php";
include "../Includes/variable.php";
$opdracht = "Opdracht 7.2";?>
<?php
try //de code in het try is het enige die wordt uitgevoerd
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
    // de code in het catch wordt alleen uitgevoerd als er een fout ontstaat bij de try
catch (PDOException $e)
{
    echo "<h1>Database Error:</h1>";
    echo $e->getMessage();
    die();
}
//door de code hierboven te maoken heb ik ze in een variabele $pdo gestopt
// hierdoor kan ik een query uitvoeren op de database van het type object
// array aanmaken voor resultaten
$aJokes = array();
echo "database connectie gelukt";

// bij $sql kies ik waar vandaan ik de grap wil halen
// en dankzij de $pdo connectie-handler (het gene wat de connectie vasthoudt)
//dus ik moet de query wel op deze manier uitvoeren
$sql = 'SELECT * FROM joke';
$result = $pdo->query($sql);
while ($row = $result->fetch(PDO::FETCH_ASSOC))
{
    // omdat row een associatieve array is kan worden gebruikt als een lijst (net als een lijst van telefoon nummers)
    // en kan ik het uit een rij halen
    $aJokes[] = $row;
}

// er word een HTML tabel gegenereert met de waardes van een SQL database genaamd ijdb.
// Die jokes laat zien op volgorde van de id, het begin, de mop, en de jokedatum
echo "<br><br><table>";
echo "<tr><th class='JokeCSS'>ID</th><th class='JokeCSS'>Joketext</th><th class='JokeCSS'>Joketext2</th><th class='JokeCSS'>Jokedate</th></tr>";
foreach($aJokes as $jokee)
{
    echo "<tr><td>".$jokee['id']."</td><td>".$jokee['joketext']."</td><td>".$jokee['jokeclou']."</td><td>".$jokee['jokedate']."</td></tr>";
}
echo "</table>";
include "../Includes/footer.php";
?>

