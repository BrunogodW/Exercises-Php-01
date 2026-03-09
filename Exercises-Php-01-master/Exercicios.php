<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Resultados dos Exercícios de PHP</h1>

        <?php

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 1</h3>";
        $num1 = 1;
        $num2 = 2;
        $soma = $num1 + $num2;
        echo "<p>Valor 1: <code>$num1</code></p>";
        echo "<p>Valor 2: <code>$num2</code></p>";
        echo "<div class='resultado'>A soma dos números é: <strong>$soma</strong></div>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 2</h3>";
        $nota1 = 10;
        $nota2 = 8;
        $nota3 = 9;
        $media = ($nota1 + $nota2 + $nota3) / 3;
        echo "<p>Nota 1: <code>$nota1</code></p>";
        echo "<p>Nota 2: <code>$nota2</code></p>";
        echo "<p>Nota 3: <code>$nota3</code></p>";
        echo "<div class='resultado'>A média das notas é: <strong>$media</strong></div>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 3</h3>";
        $metros = 3;
        $centimetros = $metros * 100;
        echo "<p>Metros: <code>$metros</code></p>";
        echo "<p>Centímetros: <code>$centimetros</code></p>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 4</h3>";
        $base = 5;
        $altura = 10;
        $area = $base * $altura;
        echo "<p>Base: <code>$base</code></p>";
        echo "<p>Altura: <code>$altura</code></p>";
        echo "<div class='resultado'>A área do retângulo é: <strong>$area</strong></div>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 5</h3>";
        $inteiro = -1;
        if ($inteiro > 0) {
            $tipo = "positivo";
        } elseif ($inteiro < 0) {
            $tipo = "negativo";
        } else {
            $tipo = "zero";
        }
        echo "<p>Valor: <code>$inteiro</code></p>";
        echo "<div class='resultado'>O número é: <strong>$tipo</strong></div>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 6</h3>";
        $idade = 20;
        if ($idade >= 18) {
            $status = "maior de idade";
        } else {
            $status = "menor de idade";
        }
        echo "<p>Idade: <code>$idade</code></p>";
        echo "<div class='resultado'>O usuário é: <strong>$status</strong></div>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 7</h3>";
        $media = 7.5;
        if ($media >= 6) {
            $resultado = "aprovado";
        } else {
            $resultado = "reprovado";
        }
        echo "<p>Média: <code>$media</code></p>";
        echo "<div class='resultado'>O aluno está: <strong>$resultado</strong></div>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 8</h3>";
        $n1 = 5;
        $n2 = 2;
        if ($n1 > $n2) {
            $maior = $n1;
        } elseif ($n2 > $n1) {
            $maior = $n2;
        } else {
            $maior = "ambos são iguais";
        }
        echo "<p>Valor 1: <code>$n1</code></p>";
        echo "<p>Valor 2: <code>$n2</code></p>";
        echo "<div class='resultado'>O maior número é: <strong>$maior</strong></div>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 9</h3>";
        $numeroSemana = 3;
        switch ($numeroSemana) {
            case 1:
                $diaSemana = "Domingo";
                break;
            case 2:
                $diaSemana = "Segunda-feira";
                break;
            case 3:
                $diaSemana = "Terça-feira";
                break;
            case 4:
                $diaSemana = "Quarta-feira";
                break;
            case 5:
                $diaSemana = "Quinta-feira";
                break;
            case 6:
                $diaSemana = "Sexta-feira";
                break;
            case 7:
                $diaSemana = "Sábado";
                break;
        }
        echo "<p>Número da semana: <code>$numeroSemana</code></p>";
        echo "<div class='resultado'>O dia da semana é: <strong>$diaSemana</strong></div>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 10</h3>";
        $letra = 'a';
        switch (strtolower($letra)) {
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
                $tipoLetra = "vogal";
                break;
            default:
                $tipoLetra = "consoante";
        }
        echo "<p>Letra: <code>$letra</code></p>";
        echo "<div class='resultado'>A letra é: <strong>$tipoLetra</strong></div>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 11</h3>";
        $status = "aguardando";
        switch ($status) {
            case "em_preparacao":
                $mensagem = "Em preparação, por favor aguarde.";
                break;
            case "enviado":
                $mensagem = "Enviado com sucesso!";
                break;
            case "concluido":
                $mensagem = "Seu resultado está aguardando avaliação.";
                break;
            case "aguardando":
                $mensagem = "Aguardando, por favor aguarde.";
                break;
        }
        echo "<p>Status: <code>$status</code></p>";
        echo "<div class='resultado'>Mensagem: <strong>$mensagem</strong></div>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 12</h3>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>Contagem: <code>$i</code></p>";
        }
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 13</h3>";
        for ($i = 1; $i <= 20; $i++) {
            if ($i % 2 == 0) {
                echo "<p>Contagem dos pares: <code>$i</code></p>";
            }
        }
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 14</h3>";
        $nTabuda = "7";
        for ($i = 1; $i <= 10; $i++) {
            $resultadoTabuada = $nTabuda * $i;
            echo "<p>Tabuada de <code>$nTabuda x $i</code>: <code>$resultadoTabuada</code></p>";
        }
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 15</h3>";
        $cr = 10;
        while ($cr > 0) {
            echo "<p>Contagem regressiva: <code>$cr</code></p>";
            $cr--;
        }
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 16</h3>";
        $count = 1;
        $ac = 0;

        while ($count <= 100) {
            $ac += $count;
            $count++;
        }
        echo "<p>Soma dos números de 1 a 100: <code>$ac</code></p>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 17</h3>";
        $c = 0;
        do {
            $nSort = rand(1, 10);
            $c++;
        } while ($nSort != 5);
        echo "<p>Quantidade de sorteios: <code>$c</code></p>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 18</h3>";
        $frutas = ["maçã", "banana", "laranja", "uva", "abacaxi"];
        echo "<ul>";
        foreach ($frutas as $fruta) {
            echo "<li><code>$fruta</code></li>";
        }
        echo "</ul>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 19</h3>";
        $listaNumeros = [1, 2, 3, 4, 5];
        $somaNumeros = array_sum($listaNumeros);

        echo "<p>Soma dos números: <code>$somaNumeros</code></p>";
        echo "</div>";

        echo "<div class='exercicio'>";
        echo "<h3>Exercício 20</h3>";
        $aluno = [
            "nome" => "Vitor",
            "idade" => 17,
            "curso" => "Informática"
        ];
        echo "<p>Nome: <code>{$aluno['nome']}</code></p>";
        echo "<p>Idade: <code>{$aluno['idade']}</code></p>";
        echo "<p>Curso: <code>{$aluno['curso']}</code></p>";


        echo "</div>";


        ?>
        <div>

</body>

</html>