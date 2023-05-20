<?php

class DatosPersona{

    Public $Nombre ;
    Public $Apellido ;
    Public  $Email;
    Public  $Edad;
    

    Public function MostrarDatos(){

        echo 'Nombre :' . $this-> Nombre . '<br>';
        echo 'Apellido :' . $this-> Apellido . '<br>';
        echo 'Email :' . $this-> Email . '<br>';
        echo 'Edad :' . $this-> Edad . '<br>';
        

    }
}