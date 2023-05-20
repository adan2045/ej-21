<?php
require_once 'modelo/DatosPersona.php';

$p= new DatosPersona();
$p->Nombre= 'Luis';
$p->Apellido= 'Grosso';
$p->Email='adan.gros@gmail.com';
$p->Edad= '34 años';


$p-> MostrarDatos();
