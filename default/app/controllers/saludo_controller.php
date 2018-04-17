<?php 
class SaludoController extends AppController {
 
    public function hola() 
    {
        //Ver método select[1]
        View::select(NULL); //no mostramos la vista, solo el template
    }
}