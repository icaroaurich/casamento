<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Consulta SQL para selecionar todos os registros da tabela 'programacao'
$sql = "SELECT * FROM programacao";

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
    <title>Programação - Ícaro e Tati</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-3">Programação</h1>
    </header>

    <section class="container my-5">
        <div class="table-responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Coisa</th>
                        <th>Data</th>
                        <th>Feito</th>
                    </tr>
                </thead>
                <tbody>';

    // Itera sobre os resultados e cria as linhas da tabela
    while ($row = mysqli_fetch_assoc($result)) {
        // Formata a data
        $dataFormatada = date('d/m/Y', strtotime($row['Data']));
        // Verifica se a coluna 'Feito' está marcada como 1 ou 0 e converte para 'Sim' ou 'Não'
        $feito = $row['Feito'] == 1 ? 'Sim' : 'Não';

        echo '<tr>
                <td>' . htmlspecialchars($row['idProgramacao']) . '</td>
                <td>' . htmlspecialchars($row['Coisa']) . '</td>
                <td>' . htmlspecialchars($dataFormatada) . '</td>
                <td>' . htmlspecialchars($feito) . '</td>
              </tr>';
    }

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
    <title>Programação - Ícaro e Tati</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-3">Programação</h1>
    </header>

    <section class="container my-5">
        <p class="text-center">Nenhuma programação encontrada.</p>

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
