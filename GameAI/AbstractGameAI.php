// AbstractGameAI.php

<?php

// Abstract class representing the GameAI
abstract class GameAI {
    // Template method that defines the overall algorithm
    public function playGame() {
        $this->takeTurn();
        $this->collectResources();
        $this->buildStructures();
        $this->buildUnits();
        $this->attack();
        $this->sendScouts("some position");
        $this->sendWarriors("some position");
    }

    // Abstract methods to be overridden by subclasses
    abstract protected function takeTurn();
    abstract protected function collectResources();
    abstract protected function buildStructures();
    abstract protected function buildUnits();
    abstract protected function attack();
    abstract protected function sendScouts($position);
    abstract protected function sendWarriors($position);
}
?>
