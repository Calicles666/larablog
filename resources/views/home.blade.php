<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi primera vista</title>
</head>
<body>
    <h1>Mi primera vista de Laravel - <?php 
    echo "Mi vista php soy: $name $surname" 
    ?> - 
    {{"Hola mundo $name - $surname"}}</h1>

    @forelse ($posts as $item)
    <ul>
        <li>
            @if ($loop->first)
             Primero :    
            @elseif ($loop->last)
             Último :                
            @else
            Medio : 
            @endif
            {{ $item }}
        </li>
    </ul>
    @empty
    <li>
        Vacío.
    </li>
    @endforelse 

    
</body>
</html>