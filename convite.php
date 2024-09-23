<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convite</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-size: 1.2rem; /* Aumenta o tamanho da fonte para todo o corpo */
        }
        th, td {
            font-size: 1.2rem; /* Aumenta o tamanho da fonte para cabeçalhos e células da tabela */
        }
    </style>
</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-4">Convite</h1>
    </header>

    <section class="container my-5">
        <?php
        include 'conexao.php';

        // Verifica se o parâmetro 'familia' foi passado na URL
        if (isset($_GET['familia'])) {
            $familia = intval($_GET['familia']); // Obtém o número da família

            // Consulta para buscar convidados pela família
            $sql = "SELECT Nome, Parentesco FROM convidados WHERE Familia = $familia ORDER BY Nome";
            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                echo '<table class="table table-striped">';
                echo '<thead><tr><th>Nome</th><th>Parentesco</th></tr></thead>';
                echo '<tbody>';
                while($row = mysqli_fetch_assoc($resultado)) {
                    echo '<tr><td>' . $row["Nome"] . '</td><td>' . $row["Parentesco"] . '</td></tr>';
                }
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p class="text-center">Nenhum convidado encontrado para essa família.</p>';
            }

            // Botão para confirmar presença
            echo '<div class="text-center mt-4">';
            echo '<form method="POST" action="">';
            echo '<input type="hidden" name="familia" value="' . $familia . '">';
            echo '<button type="submit" class="btn btn-success">Confirmar presença</button>';
            echo '</form>';
            echo '</div>';

            // Verifica se o formulário foi enviado
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['familia'])) {
                $familia_confirmada = intval($_POST['familia']);
                // Atualiza a tabela para confirmar presença
                $update_sql = "UPDATE convidados SET confirmado = 1 WHERE Familia = $familia_confirmada";
                if (mysqli_query($conexao, $update_sql)) {
                    echo '<p class="text-success text-center">Presença confirmada com sucesso!</p>';
                } else {
                    echo '<p class="text-danger text-center">Erro ao confirmar presença: ' . mysqli_error($conexao) . '</p>';
                }
            }
        } else {
            echo '<p class="text-center">Parâmetro de família não fornecido.</p>';
        }

        mysqli_close($conexao);
        ?>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
