<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Consulta SQL para selecionar todos os registros da tabela 'gastos'
$sql = "SELECT Gastos, Valor FROM gastos";
$result = mysqli_query($conexao, $sql);

// Verifica se a consulta retornou resultados
if (mysqli_num_rows($result) > 0) {
    // Início do HTML
    echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos</title>
    <!-- Bootstrap CSS para estilização -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-5">
        <h2 class="text-center mb-4">Lista de Gastos</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Gastos</th>
                    <th>Valor</th>
                </tr>
            </thead>
            <tbody>';

    // Itera sobre os resultados e cria as linhas da tabela
    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>
                <td>' . htmlspecialchars($row['Gastos']) . '</td>
                <td>R$ ' . number_format($row['Valor'], 2, ',', '.') . '</td>
              </tr>';
    }

    // Finaliza a tabela e o HTML
    echo '    </tbody>
        </table>
    </div>

    <!-- Bootstrap JS para funcionalidade adicional -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>';
} else {
    // Caso não haja registros, exibe uma mensagem
    echo '<p class="text-center">Nenhum gasto encontrado.</p>';
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
