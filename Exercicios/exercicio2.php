<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Criar</title>

    <!-- CSS Interno -->
    <style>
        .destaque {color: blue;}
        .purple {color: purple;}
        .pink {color: pink;}
        .orange {color: orange;}
        .red {color: red}
        .yellow {color: yellow}
    </style>
</head>
<body>
    <h1 class="purple">Trabalhando com PHP</h1>
    <p class="destaque">Programador: Isabela da Silva Gomes</p>
    <hr>

    <?php
        // Geração de texto (string)
        echo "<h2><span class='red'>Não sei o que escrever.</h2>"; 

        /* Geração de texto estruturado (com tags, atributos) */
        echo "<h2><span class='orange'>Eu não tenho ideia do que eu tô escrevendo.</h2>";
        echo "<h1><span class=\"yellow\">Vou testar as cores</span></h1>";

    ?>

    <h1 class= "pink">HTML e PHP mesclados</h1>
    <p class= "purple">Parágrafo HTML</p>

    <?php
        $linguagem = "Linguagem PHP.";
    ?>
    <p class= "destaque">Parágrafo mesclando HTML com <?=$linguagem?> </p>
</body>
</html>