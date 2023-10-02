<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clase05</title>
</head>
<body>
    <?php
    
    print "<p>1. Números del 1 al 100.</p>\n";
    for ($i=1; $i <= 100; $i++) { 
        echo "<p>$i</p>";
    }

    print "<p>2. Números del 100 al 1.</p>\n";
    for ($i=100; $i >= 1 ; $i--) { 
        echo "<p>$i</p>";
    }

    print "<p>3. Números par del 1 al 100.</p>\n";
    for ($i = 2; $i <= 100; $i += 2) {
        echo $i, ' ' ;
    }

    print "<p>4. Números inpares del 1 al 100.</p>\n";
    for ($i = 1; $i <= 100; $i += 2) {
        echo $i, ' ' ;
    }

    print "<p>5. Mostrar la suma de los números de 1 a 20.</p>\n";
    $suma = 0;
    for ($i = 1; $i <= 20; $i++) {
        $suma += $i;
    }
    echo "<p>La suma de los numeros es: $suma </p>";


    print "<p>6. Suma de numeros par del 1 al 20.</p>\n";
    $sumaPares = 0;
    for( $i = 2; $i <= 20;  $i += 2 ) {
        $sumaPares += $i;
    }
    echo "<p>La suma de los numeros pares del 1 al 20 es: $sumaPares </p>";


    ?>
</body>
</html>