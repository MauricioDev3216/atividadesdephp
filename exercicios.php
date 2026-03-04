<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exercícios de PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        h1 {
            background-color: #007bff;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
        }
        h2 {
            background-color: #343a40;
            color: white;
            padding: 8px 15px;
            border-radius: 5px;
            margin-top: 30px;
        }
        .exercicio {
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 15px 20px;
            margin-top: 10px;
        }
        .exercicio h3 {
            color: #0056b3;
            margin-top: 0;
        }
        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px;
            border-radius: 5px;
            margin-top: 8px;
        }
    </style>
</head>
<body>

<h1>Exercícios de PHP</h1>

<?php
// ============================================================
// SEQUENCIAIS
// ============================================================
?>
<h2>Sequenciais — Variáveis e Operadores</h2>

<!-- Exercício 1 -->
<div class="exercicio">
    <h3>Exercício 1 — Soma</h3>
    <?php
    $num1 = 10;
    $num2 = 5;
    $soma = $num1 + $num2;
    echo "<p>Números: $num1 e $num2</p>";
    echo "<div class='resultado'>Resultado da soma: <strong>$soma</strong></div>";
    ?>
</div>

<!-- Exercício 2 -->
<div class="exercicio">
    <h3>Exercício 2 — Média</h3>
    <?php
    $nota1 = 7;
    $nota2 = 8;
    $nota3 = 6;
    $media = ($nota1 + $nota2 + $nota3) / 3;
    echo "<p>Notas: $nota1, $nota2 e $nota3</p>";
    echo "<div class='resultado'>Média: <strong>$media</strong></div>";
    ?>
</div>

<!-- Exercício 3 -->
<div class="exercicio">
    <h3>Exercício 3 — Metros para Centímetros</h3>
    <?php
    $metros = 3;
    $centimetros = $metros * 100;
    echo "<p>Metros: $metros</p>";
    echo "<div class='resultado'>Em centímetros: <strong>$centimetros cm</strong></div>";
    ?>
</div>

<!-- Exercício 4 -->
<div class="exercicio">
    <h3>Exercício 4 — Área do Retângulo</h3>
    <?php
    $base = 8;
    $altura = 4;
    $area = $base * $altura;
    echo "<p>Base: $base | Altura: $altura</p>";
    echo "<div class='resultado'>Área: <strong>$area</strong></div>";
    ?>
</div>

<?php
// ============================================================
// CONDICIONAIS — IF / ELSE
// ============================================================
?>
<h2>Condicionais — If / Else</h2>

<!-- Exercício 5 -->
<div class="exercicio">
    <h3>Exercício 5 — Positivo, Negativo ou Zero</h3>
    <?php
    $numero = -4;
    echo "<p>Número: $numero</p>";
    if ($numero > 0) {
        $resultado = "Positivo";
    } elseif ($numero < 0) {
        $resultado = "Negativo";
    } else {
        $resultado = "Zero";
    }
    echo "<div class='resultado'>O número é: <strong>$resultado</strong></div>";
    ?>
</div>

<!-- Exercício 6 -->
<div class="exercicio">
    <h3>Exercício 6 — Maioridade</h3>
    <?php
    $idade = 17;
    echo "<p>Idade: $idade</p>";
    if ($idade >= 18) {
        $resultado = "Maior de idade";
    } else {
        $resultado = "Menor de idade";
    }
    echo "<div class='resultado'>Situação: <strong>$resultado</strong></div>";
    ?>
</div>

<!-- Exercício 7 -->
<div class="exercicio">
    <h3>Exercício 7 — Aprovação</h3>
    <?php
    $mediaFinal = 5.5;
    echo "<p>Média final: $mediaFinal</p>";
    if ($mediaFinal >= 6) {
        $resultado = "Aprovado";
    } else {
        $resultado = "Reprovado";
    }
    echo "<div class='resultado'>Situação: <strong>$resultado</strong></div>";
    ?>
</div>

<!-- Exercício 8 -->
<div class="exercicio">
    <h3>Exercício 8 — Maior de Dois</h3>
    <?php
    $a = 12;
    $b = 25;
    echo "<p>Números: $a e $b</p>";
    if ($a > $b) {
        $resultado = $a;
    } else {
        $resultado = $b;
    }
    echo "<div class='resultado'>O maior número é: <strong>$resultado</strong></div>";
    ?>
</div>

<?php
// ============================================================
// CONDICIONAIS — SWITCH / CASE
// ============================================================
?>
<h2>Condicionais — Switch / Case</h2>

<!-- Exercício 9 -->
<div class="exercicio">
    <h3>Exercício 9 — Dia da Semana</h3>
    <?php
    $dia = 4;
    echo "<p>Número do dia: $dia</p>";
    switch ($dia) {
        case 1: $nomeDia = "Domingo";  break;
        case 2: $nomeDia = "Segunda";  break;
        case 3: $nomeDia = "Terça";    break;
        case 4: $nomeDia = "Quarta";   break;
        case 5: $nomeDia = "Quinta";   break;
        case 6: $nomeDia = "Sexta";    break;
        case 7: $nomeDia = "Sábado";   break;
        default: $nomeDia = "Inválido";
    }
    echo "<div class='resultado'>Dia da semana: <strong>$nomeDia</strong></div>";
    ?>
</div>

<!-- Exercício 10 -->
<div class="exercicio">
    <h3>Exercício 10 — Vogal ou Consoante</h3>
    <?php
    $letra = "E";
    $letraMin = strtolower($letra);
    echo "<p>Letra: $letra</p>";
    switch ($letraMin) {
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
            $resultado = "Vogal";
            break;
        default:
            $resultado = "Consoante";
    }
    echo "<div class='resultado'>A letra é: <strong>$resultado</strong></div>";
    ?>
</div>

<!-- Exercício 11 -->
<div class="exercicio">
    <h3>Exercício 11 — Status do Pedido</h3>
    <?php
    $status = "enviado";
    echo "<p>Status: $status</p>";
    switch ($status) {
        case "aguardando":
            $mensagem = "Seu pedido está aguardando confirmação.";
            break;
        case "em_preparacao":
            $mensagem = "Seu pedido está sendo preparado.";
            break;
        case "enviado":
            $mensagem = "Seu pedido foi enviado e está a caminho!";
            break;
        case "concluido":
            $mensagem = "Seu pedido foi entregue. Obrigado!";
            break;
        default:
            $mensagem = "Status desconhecido.";
    }
    echo "<div class='resultado'>Mensagem: <strong>$mensagem</strong></div>";
    ?>
</div>

<?php
// ============================================================
// LAÇOS — FOR
// ============================================================
?>
<h2>Laços de Repetição — For</h2>

<!-- Exercício 12 -->
<div class="exercicio">
    <h3>Exercício 12 — Contagem de 1 a 10</h3>
    <div class="resultado">
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "<strong>$i</strong> ";
        }
        ?>
    </div>
</div>

<!-- Exercício 13 -->
<div class="exercicio">
    <h3>Exercício 13 — Pares de 1 a 20</h3>
    <div class="resultado">
        <?php
        for ($i = 2; $i <= 20; $i = $i + 2) {
            echo "<strong>$i</strong> ";
        }
        ?>
    </div>
</div>

<!-- Exercício 14 -->
<div class="exercicio">
    <h3>Exercício 14 — Tabuada do 7</h3>
    <?php
    $numero = 7;
    echo "<p>Tabuada do $numero:</p>";
    echo "<div class='resultado'>";
    for ($i = 1; $i <= 10; $i++) {
        $resultado = $numero * $i;
        echo "$numero x $i = <strong>$resultado</strong><br>";
    }
    echo "</div>";
    ?>
</div>

<?php
// ============================================================
// LAÇOS — WHILE
// ============================================================
?>
<h2>Laços de Repetição — While</h2>

<!-- Exercício 15 -->
<div class="exercicio">
    <h3>Exercício 15 — Contagem Regressiva</h3>
    <div class="resultado">
        <?php
        $i = 10;
        while ($i >= 1) {
            echo "<strong>$i</strong> ";
            $i = $i - 1;
        }
        ?>
    </div>
</div>

<!-- Exercício 16 -->
<div class="exercicio">
    <h3>Exercício 16 — Soma de 1 até 100</h3>
    <?php
    $soma = 0;
    $i = 1;
    while ($i <= 100) {
        $soma = $soma + $i;
        $i = $i + 1;
    }
    echo "<div class='resultado'>Soma de 1 até 100: <strong>$soma</strong></div>";
    ?>
</div>

<?php
// ============================================================
// LAÇOS — DO WHILE
// ============================================================
?>
<h2>Laços de Repetição — Do While</h2>

<!-- Exercício 17 -->
<div class="exercicio">
    <h3>Exercício 17 — Sorteio Simples</h3>
    <?php
    $tentativas = 0;
    $sorteado = 0;
    do {
        $sorteado = rand(1, 10);
        $tentativas = $tentativas + 1;
    } while ($sorteado != 5);
    echo "<div class='resultado'>O número 5 foi sorteado em <strong>$tentativas tentativa(s)</strong>.</div>";
    ?>
</div>

<?php
// ============================================================
// ARRAYS
// ============================================================
?>
<h2>Arrays (Vetores)</h2>

<!-- Exercício 18 -->
<div class="exercicio">
    <h3>Exercício 18 — Lista de Frutas</h3>
    <?php
    $frutas = ["Maçã", "Banana", "Laranja", "Uva", "Manga"];
    echo "<div class='resultado'><ul>";
    foreach ($frutas as $fruta) {
        echo "<li>$fruta</li>";
    }
    echo "</ul></div>";
    ?>
</div>

<!-- Exercício 19 -->
<div class="exercicio">
    <h3>Exercício 19 — Soma de Array</h3>
    <?php
    $numeros = [10, 20, 30, 40, 50];
    $soma = 0;
    foreach ($numeros as $num) {
        $soma = $soma + $num;
    }
    echo "<p>Números: 10, 20, 30, 40, 50</p>";
    echo "<div class='resultado'>Soma total: <strong>$soma</strong></div>";
    ?>
</div>

<!-- Exercício 20 -->
<div class="exercicio">
    <h3>Exercício 20 — Array Associativo</h3>
    <?php
    $aluno = [
        "nome"  => "Carlos Silva",
        "idade" => 20,
        "curso" => "Desenvolvimento Web"
    ];
    echo "<div class='resultado'>";
    echo "Nome: <strong>" . $aluno["nome"] . "</strong><br>";
    echo "Idade: <strong>" . $aluno["idade"] . "</strong><br>";
    echo "Curso: <strong>" . $aluno["curso"] . "</strong>";
    echo "</div>";
    ?>
</div>

</body>
</html>