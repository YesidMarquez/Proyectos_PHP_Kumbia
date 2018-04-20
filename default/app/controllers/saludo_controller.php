<?php
/**
 * Controller Saludo
 */
class SaludoController extends AppController {
    /**
     * método para saludar
     */
    public function hola() {
        $this->fecha = date("Y-m-d H:i"); 
    }
}
