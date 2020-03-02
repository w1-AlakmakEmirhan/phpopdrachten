<?php
date_default_timezone_set("Europe/Amsterdam");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd hier in Nederland is: $vandaag";
?>
<br>
<?php
date_default_timezone_set("Asia/Tokyo");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd in Japan is nu : $vandaag";
?>
<br>
<?php
date_default_timezone_set("EST/New York");
$vandaag = date("d-m-Y H:i");
echo "De datum en tijd in New York (USA) is nu : $vandaag";
?>
