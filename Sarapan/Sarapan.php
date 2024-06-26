// Sarapan.php

<?php

abstract class Sarapan {

    public function buatSarapan() {
        $this->siapkanAlatBahan();
        $this->memasak();
        $this->menyajikan();
    }

    public function siapkanAlatBahan() {
        echo "Menyiapkan alat dan bahan...\n";
    }

    abstract public function memasak();

    public function menyajikan() {
        echo "Menyajikan makanan...\n";
    }
}

?>
