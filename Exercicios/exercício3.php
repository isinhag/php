<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 3</title>

    <!-- CSS Interno -->
    <style>
        .destaque {color: purple;}
    </style>
</head>
<body>
    <p>Programador: Isabela da Silva Gomes</p>
    <hr>

   <!-- Exemplo de código PHP para números inteiros. -->
   <p class= "destaque">Código PHP para número inteiro - tipo int</p>
   <?php
        echo 2;
        echo "- Valor inteiro. <br>";

    ?>

    <!-- Código PHP para função is_int -->
    <p class= "destaque">Código PHP para função is_int - verificação</p>
    <?php
        echo 4;
        if(is_int(10)) { // true
            echo "- É um inteiro <br>";
        }

    ?>

    <!-- Código PHP para números tipo float -->
    <p class= "destaque">Código PHP para números - tipo float</p>
   <?php
        $a = 1.12;
        echo $a;
        echo "<br>";

    ?>

    <!-- Código PHP para verificação de float -->
    <p class= "destaque">Código PHP para verificação de float</p>
    <?php

        $a = "teste";
        $b = 17.5;

        if(is_float($b)) {
            echo "É float 2! <br>";
        }

    ?>
    <hr>

    <!-- Código PHP para tipos de string -->
    <p class= "destaque">Código PHP para tipos de string</p>
    <?php

        $idade = 20;

        echo "Ele tem $idade anos <br>";
    ?>


    <!-- Código PHP para verificar strings -->
    <p class= "destaque">Código PHP para verificar strings</p>
    <?php

        $str = "texto";


        if(is_string($str)) { 
            echo "$str- é uma string <br>";
    }

    ?>
    <hr>

    <!-- Código PHP para booleanos -->
    <p class= "destaque">Código PHP para booleanos</p>
    <?php

        echo true;
        echo "<br>";
        echo false;

        if(9 > 8) { // true
            echo "É verdadeiro! (1 = verdadeiro) <br>";
        }

    ?>

    <!-- Código PHP para verificar booleanos -->
    <p class= "destaque">Código PHP para verificar booleanos</p>
    <?php

        $a = true;

        if(is_bool($a)) {
            echo "É um booleano <br>";
        }


    ?>
    <hr>
    

    <!-- Código PHP para arrays -->
    <p class= "destaque">Código PHP para arrays</p>
    <?php
        $a = array (20, 40, 60, 80);

        print_r($a);
        echo "<br>";

        echo "<p>O primeiro valor da lista é:  $a[0]</p>";

    ?>

</body>
</html>