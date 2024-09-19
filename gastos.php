<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Consulta SQL para selecionar todos os registros da tabela 'gastos'
$sql = "SELECT * FROM gastos";

// Executa a consulta
$result = mysqli_query($conexao, $sql);

// Verifica se a consulta retornou resultados
if (mysqli_num_rows($result) > 0) {
    // Início da tabela HTML
    echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos - Ícaro e Tati</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-3">Gastos</h1>
    </header>

    <section class="container my-5">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Gastos</th>
                        <th>Valor</th>
                    </tr>
                </thead>
                <tbody>';

    // Inicializa o totalizador
    $total = 0;

    // Itera sobre os resultados e cria as linhas da tabela
    while ($row = mysqli_fetch_assoc($result)) {
        // Adiciona o valor ao totalizador
        $total += $row['Valor'];

        // Formata o valor para o formato monetário brasileiro
        $valorFormatado = number_format($row['Valor'], 2, ',', '.');

        echo '<tr>
                <td>' . htmlspecialchars($row['idGastos']) . '</td>
                <td>' . htmlspecialchars($row['Gastos']) . '</td>
                <td>' . htmlspecialchars($valorFormatado) . '</td>
              </tr>';
    }

    // Adiciona a linha do totalizador
    $totalFormatado = number_format($total, 2, ',', '.');
    echo '<tr>
            <td colspan="2" class="text-end"><strong>Total</strong></td>
            <td><strong>' . htmlspecialchars($totalFormatado) . '</strong></td>
          </tr>';

    // Finaliza a tabela HTML
    echo '    </tbody>
            </table>
        </div>

        <!-- Botão para voltar ao planejamento.html -->
        <div class="text-center my-4">
            <a href="planejamento.html" class="btn btn-primary">Voltar para Planejamento</a>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>';

} else {
    echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos - Ícaro e Tati</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-3">Gastos</h1>
    </header>

    <section class="container my-5">
        <p class="text-center">Nenhum gasto encontrado.</p>

        <!-- Botão para voltar ao planejamento.html -->
        <div class="text-center my-4">
            <a href="planejamento.html" class="btn btn-primary">Voltar para Planejamento</a>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>';
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
