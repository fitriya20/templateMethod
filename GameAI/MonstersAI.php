// MonstersAI.php

<?php

// Concrete subclass representing MonstersAI
class MonstersAI extends GameAI {
    protected function takeTurn() {
        echo "MonstersAI: Taking a turn\n";
    }

    protected function collectResources() {
        echo "MonstersAI: Collecting resources\n";
    }

    protected function buildStructures() {
        echo "MonstersAI: Building structures\n";
    }

    protected function buildUnits() {
        echo "MonstersAI: Building units\n";
    }

    protected function attack() {
        echo "MonstersAI: Attacking\n";
    }

    protected function sendScouts($position) {
        echo "MonstersAI: Sending scouts to $position\n";
    }

    protected function sendWarriors($position) {
        echo "MonstersAI: Sending warriors to $position\n";
    }
}
?>
