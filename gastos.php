<?php
// Inclui o arquivo de conexão com o banco de dados
include 'conexao.php';

// Consulta SQL para selecionar todos os registros da tabela 'gastos'
$sql = "SELECT * FROM gastos ORDER BY Gastos";

// Executa a consulta
$result = mysqli_query($conexao, $sql);

// Verifica se a consulta retornou resultados
if (mysqli_num_rows($result) > 0) {
    // Início do HTML
    echo '<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gastos - Ícaro e Tati</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .collapsible {
        background-color: #6b81F0;
        color: white;
        cursor: pointer;
        padding: 10px;
        border: none;
        text-align: left;
        outline: none;
        font-size: 16px;
        width: 100%;
    }

    .active, .collapsible:hover {
        background-color: #4650f0;
    }

    .collapsible:after {
        content: "\\002B";
        color: white;
        font-weight: bold;
        float: right;
        margin-left: 5px;
    }

    .active:after {
        content: "\\2212";
    }

    .content {
        display: none;
        padding: 10px 18px;
        background-color: #f1f1f1;
    }

    .active + .content {
        display: block;
    }
</style>

</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-3">Gastos</h1>
    </header>

    <section class="container my-5">
        <div class="row">
            <div class="col-md-6">
                <h4 class="text-center">Gastos - Ícaro</h4>
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

    // Itera sobre os resultados e cria as linhas da tabela para Ícaro
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['pagante'] == 1) { // Pagante 1 (Ícaro)
            $total += $row['Valor'];
            $valorFormatado = number_format($row['Valor'], 2, ',', '.');

            // Linha principal da tabela com um botão colapsável
            echo '<tr>
                    <td>' . htmlspecialchars($row['idGastos']) . '</td>
                    <td>
                        <button class="collapsible">' . htmlspecialchars($row['Gastos']) . '</button>
                        <div class="content">';

            // Consulta detalhes da tabela 'pagamento' relacionados a este 'idGastos'
            $idGastos = $row['idGastos'];
            $sqlPagamento = "SELECT * FROM pagamento WHERE idGastos = $idGastos AND mostra = 1";
            $resultPagamento = mysqli_query($conexao, $sqlPagamento);

            // Verifica se há registros na tabela 'pagamento' relacionados a este 'idGastos'
            if (mysqli_num_rows($resultPagamento) > 0) {
                echo '<ul>';
                while ($rowPagamento = mysqli_fetch_assoc($resultPagamento)) {
                    echo '<li>Data: ' . date('d/m/Y', strtotime(htmlspecialchars($rowPagamento['Data']))) . ' - Valor: R$ ' . number_format($rowPagamento['Valor'], 2, ',', '.') . ' - Forma: ' . htmlspecialchars($rowPagamento['FormaPagamento']) . '</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Nenhum pagamento encontrado para este gasto.</p>';
            }

            echo '</div></td>
                  <td>R$ ' . htmlspecialchars($valorFormatado) . '</td>
                  </tr>';
        }
    }

    // Adiciona a linha do totalizador para Ícaro
    $totalFormatado = number_format($total, 2, ',', '.');
    echo '<tr>
            <td colspan="2" class="text-end"><strong>Total Ícaro</strong></td>
            <td><strong>R$ ' . htmlspecialchars($totalFormatado) . '</strong></td>
          </tr>';

    echo '        </tbody>
                </table>
            </div>
            </div>

            <div class="col-md-6">
                <h4 class="text-center">Gastos - Tati</h4>
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

    // Zera o totalizador para Tati
    $total = 0;

    // Itera sobre os resultados e cria as linhas da tabela para Tati
    mysqli_data_seek($result, 0); // Reseta o ponteiro do resultado para a primeira linha
    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['pagante'] == 2) { // Pagante 2 (Tati)
            $total += $row['Valor'];
            $valorFormatado = number_format($row['Valor'], 2, ',', '.');

            // Linha principal da tabela com um botão colapsável
            echo '<tr>
                    <td>' . htmlspecialchars($row['idGastos']) . '</td>
                    <td>
                        <button class="collapsible">' . htmlspecialchars($row['Gastos']) . '</button>
                        <div class="content">';

            // Consulta detalhes da tabela 'pagamento' relacionados a este 'idGastos'
            $idGastos = $row['idGastos'];
            $sqlPagamento = "SELECT * FROM pagamento WHERE idGastos = $idGastos AND mostra = 1";
            $resultPagamento = mysqli_query($conexao, $sqlPagamento);

            // Verifica se há registros na tabela 'pagamento' relacionados a este 'idGastos'
            if (mysqli_num_rows($resultPagamento) > 0) {
                echo '<ul>';
                while ($rowPagamento = mysqli_fetch_assoc($resultPagamento)) {
                    echo '<li>Data: ' . date('d/m/Y', strtotime(htmlspecialchars($rowPagamento['Data']))) . ' - Valor: R$ ' . number_format($rowPagamento['Valor'], 2, ',', '.') . ' - Forma: ' . htmlspecialchars($rowPagamento['FormaPagamento']) . '</li>';
                }
                echo '</ul>';
            } else {
                echo '<p>Nenhum pagamento encontrado para este gasto.</p>';
            }

            echo '</div></td>
                  <td>R$ ' . htmlspecialchars($valorFormatado) . '</td>
                  </tr>';
        }
    }

    // Adiciona a linha do totalizador para Tati
    $totalFormatado = number_format($total, 2, ',', '.');
    echo '<tr>
            <td colspan="2" class="text-end"><strong>Total Tati</strong></td>
            <td><strong>R$ ' . htmlspecialchars($totalFormatado) . '</strong></td>
          </tr>';

    echo '        </tbody>
                </table>
            </div>
            </div>
        </div>
        
        <div class="my-5">
            <h4 class="text-center">Pagamentos a Pagar</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Data</th>
                            <th>Descrição</th>
                            <th>Forma de Pagamento</th>
                            <th>Total a Pagar</th>
                        </tr>
                    </thead>
                    <tbody>';

    // Consulta para obter a soma dos pagamentos por data e descrição onde mostra = 1
    $sqlPagamentosAPagar = "
        SELECT 
            DATE(p.Data) as data, 
            SUM(p.Valor) as total, 
            g.Gastos,
            p.FormaPagamento
        FROM 
            pagamento p 
        JOIN 
            gastos g ON p.idGastos = g.idGastos 
        WHERE 
            p.mostra = 1
        GROUP BY 
            DATE(p.Data), g.Gastos, p.FormaPagamento 
        ORDER BY 
            DATE(p.Data)";

    $resultPagamentosAPagar = mysqli_query($conexao, $sqlPagamentosAPagar);

    // Verifica se a consulta retornou resultados
    if (mysqli_num_rows($resultPagamentosAPagar) > 0) {
        // Itera sobre os resultados e cria as linhas da tabela
        while ($rowPagamentosAPagar = mysqli_fetch_assoc($resultPagamentosAPagar)) {
            echo '<tr>
                    <td>' . date('d/m/Y', strtotime(htmlspecialchars($rowPagamentosAPagar['data']))) . '</td>
                    <td>' . htmlspecialchars($rowPagamentosAPagar['Gastos']) . '</td>
                    <td>' . htmlspecialchars($rowPagamentosAPagar['FormaPagamento']) . '</td>
                    <td>R$ ' . number_format($rowPagamentosAPagar['total'], 2, ',', '.') . '</td>
                  </tr>';
        }
    } else {
        echo '<tr><td colspan="4" class="text-center">Nenhum pagamento a pagar encontrado.</td></tr>';
    }

    echo '        </tbody>
                </table>
            </div>
        </div>
        
        <div class="my-5">
            <h4 class="text-center">Soma por Forma de Pagamento</h4>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Forma de Pagamento</th>
                            <th>Valor Total</th>
                        </tr>
                    </thead>
                    <tbody>';

    // Consulta para obter a soma dos pagamentos agrupados pela forma de pagamento
    $sqlSomaFormaPagamento = "
        SELECT 
            p.FormaPagamento, 
            SUM(p.Valor) as total 
        FROM 
            pagamento p 
        WHERE 
            p.mostra = 1 
        GROUP BY 
            p.FormaPagamento";

    $resultSomaFormaPagamento = mysqli_query($conexao, $sqlSomaFormaPagamento);

    // Verifica se a consulta retornou resultados
    if (mysqli_num_rows($resultSomaFormaPagamento) > 0) {
        // Itera sobre os resultados e cria as linhas da tabela
        while ($rowSomaFormaPagamento = mysqli_fetch_assoc($resultSomaFormaPagamento)) {
            echo '<tr>
                    <td>' . htmlspecialchars($rowSomaFormaPagamento['FormaPagamento']) . '</td>
                    <td>R$ ' . number_format($rowSomaFormaPagamento['total'], 2, ',', '.') . '</td>
                  </tr>';
        }
    } else {
        echo '<tr><td colspan="2" class="text-center">Nenhuma forma de pagamento encontrada.</td></tr>';
    }

    echo '        </tbody>
                </table>
            </div>
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
    <script>
    var coll = document.getElementsByClassName("collapsible");
    for (var i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>

</body>
</html>';
} else {
    // Caso não haja registros, exibe uma mensagem de "Nenhum gasto encontrado"
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
        <h4 class="text-center">Nenhum gasto encontrado.</h4>
        <div class="text-center">
            <a href="planejamento.html" class="btn btn-primary">Voltar para Planejamento</a>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>
</body>
</html>';
}

// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>
