<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Convidados</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .btn-lg-custom {
            font-size: 1.25rem;
            padding: 1rem;
            height: 60px;
        }
        .table-container {
            display: flex;
            justify-content: space-around;
        }
        .status-sim {
            width: 20px;
            height: 20px;
            background-color: green;
            display: inline-block;
            border-radius: 3px; /* para um efeito mais suave */
        }
        .status-nao {
            width: 20px;
            height: 20px;
            background-color: red;
            display: inline-block;
            border-radius: 3px; /* para um efeito mais suave */
        }
    </style>
</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-4">Lista de Convidados</h1>
    </header>

    <section class="container my-5">
        <div class="table-container">
            <!-- Tabela Ícaro -->
            <div>
                <h2 class="text-center">Convidados de Ícaro</h2>
                <?php
                include 'conexao.php';

                $sql_icaro = "SELECT Nome, Parentesco, Familia, Confirmado FROM convidados WHERE Noivo = 0 ORDER BY Familia";
                $resultado_icaro = mysqli_query($conexao, $sql_icaro);

                if (mysqli_num_rows($resultado_icaro) > 0) {
                    echo '<table class="table table-striped">';
                    echo '<thead><tr><th>Nome</th><th>Parentesco</th><th>Família</th><th>Confirmado</th></tr></thead>';
                    echo '<tbody>';
                    while($row = mysqli_fetch_assoc($resultado_icaro)) {
                        $status = $row["Confirmado"] == 1 ? '<div class="status-sim"></div>' : '<div class="status-nao"></div>';
                        echo '<tr><td>' . $row["Nome"] . '</td><td>' . $row["Parentesco"] . '</td><td>' . $row["Familia"] . '</td><td>' . $status . '</td></tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p class="text-center">Nenhum convidado encontrado.</p>';
                }
                ?>
            </div>

            <!-- Tabela Tati -->
            <div>
                <h2 class="text-center">Convidados de Tati</h2>
                <?php
                $sql_tati = "SELECT Nome, Parentesco, Familia, Confirmado FROM convidados WHERE Noivo = 1 ORDER BY Familia";
                $resultado_tati = mysqli_query($conexao, $sql_tati);

                if (mysqli_num_rows($resultado_tati) > 0) {
                    echo '<table class="table table-striped">';
                    echo '<thead><tr><th>Nome</th><th>Parentesco</th><th>Família</th><th>Confirmado</th></tr></thead>';
                    echo '<tbody>';
                    while($row = mysqli_fetch_assoc($resultado_tati)) {
                        $status = $row["Confirmado"] == 1 ? '<div class="status-sim"></div>' : '<div class="status-nao"></div>';
                        echo '<tr><td>' . $row["Nome"] . '</td><td>' . $row["Parentesco"] . '</td><td>' . $row["Familia"] . '</td><td>' . $status . '</td></tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p class="text-center">Nenhum convidado encontrado.</p>';
                }

                mysqli_close($conexao);
                ?>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-secondary btn-lg-custom">Voltar para a Página Inicial</a>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
