<?php

$alumnos = array( 
    'Alexis',
    'David',
    'Fran',
    'Jordi',
    'Jose',
    'Julia',
    'Luis',
    'Petro',
    'Jorge',
    'Alejandro',
    'Mateo',
    'Jaume',
    'Adrian',
    'Lolo',
    'Cristian',
    'Toni'
);


//  echo (rand(5,15));
foreach($alumnos as $valor){

    echo $alumnos[rand(0, count($alumnos) -1)] . '-' . $alumnos[rand(0, count($alumnos) -1)] . '<br>';
   
}
//  foreach($alumnos as $valor){

//     $valor[rand(0,16)];
//  };

