<?php

namespace models;

class Random
{  

    public $random;
    public $alumnos;

public function __construct($random, $alumnos)
{
    $this->random = random;
    $this->alumnos = alumnos;
}
    
        public function alumno_random()
        {
            $posicion_alumno=rand(0, sizeof($alumnos));
            if (condition) 
            {
                $alumno = $alumno[$posicion_alumno];
                $alumnos[$posicion_alumno]=" ";
            }
        }

}
