<?php
    class Gato {
        public function fazerSom() {
            echo "Miau!". "<hr>";    
        }
    }

    class Cachorro{
        public function fazerSom() {
            echo "Au Au!"."<hr>" ;    
        }
    }

function emitirSom($animal){
        return $animal->fazerSom();
}
?>