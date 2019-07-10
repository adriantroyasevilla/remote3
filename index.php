<?php
$alumnos=[
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
];


function alumno_random(){
    $posicion_alumno=rand(0,sizeof($alumnos));
    if (condition) {
    $alumno=$alumno[$posicion_alumno];
    $alumnos[$posicion_alumno]=" ";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random</title>
</head>
<body>
    
</body>
</html>