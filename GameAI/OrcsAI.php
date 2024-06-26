// OrcsAI.php

<?php

// Concrete subclass representing OrcsAI
class OrcsAI extends GameAI {
    protected function takeTurn() {
        echo "OrcsAI: Taking a turn\n";
    }

    protected function collectResources() {
        echo "OrcsAI: Collecting resources\n";
    }

    protected function buildStructures() {
        echo "OrcsAI: Building structures\n";
    }

    protected function buildUnits() {
        echo "OrcsAI: Building units\n";
    }

    protected function attack() {
        echo "OrcsAI: Attacking\n";
    }

    protected function sendScouts($position) {
        echo "OrcsAI: Sending scouts to $position\n";
    }

    protected function sendWarriors($position) {
        echo "OrcsAI: Sending warriors to $position\n";
    }
}
?>
