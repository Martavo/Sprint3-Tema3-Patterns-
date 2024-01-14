<?php
class Tigger {

    private static $instance; //la variable instance para almacenar la unica instancia del objeto
    private $counter = 0; //variable del contador de grr

    private function __construct() { //lo declaro privado para que no se pueda acceder y hacer instancias con new
        echo "Building character..." . PHP_EOL;
    }

    public static function getInstance() { //creará el objeto si comprueba que aún no se ha creado ninguno
        if (!isset(self::$instance)) {
            self::$instance = new Tigger();
        }
        return self::$instance;
    }

    public function roar() { //función para hacer el grrr
        echo "Grrr!" . PHP_EOL;
        $this->counter++;
    }

    public function getCounter() {  //funcion para imprimir la variable del contador
        return $this->counter;
    }
}

?>


