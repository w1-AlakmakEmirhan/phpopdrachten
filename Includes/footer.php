<?php
/**
 * User: Emirhan
 * Date: 5/2/2020
 * Time: 11:56
 * File: footer
 */

$jaar = date("Y");
$hournow = date('G');
$minutesnow = date('i');

/*echo "
<footer>&copy; $jaar $hournow:$minutesnow $morning $name</footer>
</body>
</html>";*/
?>
<?php
include '../Includes/variable.php';
?>

<footer>
    <?php

    echo $year." ".$greeting." op dit moment is het ".$hournow.":".$minutesnow;


    ?>
</footer>
</body>
</html>
