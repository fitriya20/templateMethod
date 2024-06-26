// index.php

<?php

require_once 'TelurDadar.php';
require_once 'Sandwich.php';

$telurDadar = new TelurDadar();
echo "Telur Dadar:\n";
$telurDadar->buatSarapan();
echo "\n";

$sandwich = new Sandwich();
echo "Sandwich:\n";
$sandwich->buatSarapan();
echo "\n";

?>
