// index.php

<?php

require_once 'AbstractGameAI.php';
require_once 'OrcsAI.php';
require_once 'MonstersAI.php';

// Example usage
$orcsAI = new OrcsAI();
echo "Orcs AI Gameplay:\n";
$orcsAI->playGame();
echo "\n";

$monstersAI = new MonstersAI();
echo "Monsters AI Gameplay:\n";
$monstersAI->playGame();
echo "\n";

?>
