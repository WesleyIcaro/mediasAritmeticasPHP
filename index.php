<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    $valor1 = $_GET['valor1'] ?? 0;
    $valor2 = $_GET['valor2'] ?? 0;
    $peso1 = $_GET['peso1'] ?? 1;
    $peso2 = $_GET['peso2'] ?? 1;

    $media = number_format(($valor1 + $valor2) / 2, 2, ',', '.');

    $media_ponderada = number_format((($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2), 2, ',', '.');
    ?>

    <main>
        <h1>Médias Aritméticas</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1º Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?= $valor1 ?>" step="0.1" required>
            <label for="peso1">1º Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?= $peso1 ?>" min="1" required>
            <label for="valor2">2º Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?= $valor2 ?>" step="0.1" required>
            <label for="peso2">2º Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?= $peso2 ?>" min="1" required>
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section>
        <h1>Cálculo das Médias</h1>

        <?=
        "<p>Analisando os valores $valor1 e $valor2:</p>";


        echo "<ul>
                <li>A <strong>Média Aritmética Simples</strong> entre os valores igual a $media</li>
                <li>A <strong>Média Aritmética Ponderada</strong>com pesos $peso1 e $peso2 é igual a $media_ponderada</li>
              </ul>"
        ?>
    </section>
</body>

</html>