<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Padrinhos</title>
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
    </style>
</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-4">Lista de Padrinhos</h1>
        <a href="noivos.php" class="btn btn-secondary mb-3">Voltar para Noivos</a>
    </header>

    <section class="container my-5">
        <div class="table-container">
            <!-- Coluna Ícaro -->
            <div>
                <h2 class="text-center">Padrinhos de Ícaro</h2>
                <?php
                include 'conexao.php';

                $sql_icaro = "SELECT Nome FROM padrinhos WHERE Noivo = 0 ORDER BY idPadrinhos";
                $resultado_icaro = mysqli_query($conexao, $sql_icaro);

                if (mysqli_num_rows($resultado_icaro) > 0) {
                    echo '<table class="table table-striped">';
                    echo '<thead><tr><th>Nome</th></tr></thead>';
                    echo '<tbody>';
                    while($row = mysqli_fetch_assoc($resultado_icaro)) {
                        echo '<tr><td>' . $row["Nome"] . '</td></tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p class="text-center">Nenhum padrinho encontrado.</p>';
                }
                ?>
            </div>

            <!-- Coluna Tati -->
            <div>
                <h2 class="text-center">Padrinhos de Tati</h2>
                <?php
                $sql_tati = "SELECT Nome FROM padrinhos WHERE Noivo = 1 ORDER BY idPadrinhos";
                $resultado_tati = mysqli_query($conexao, $sql_tati);

                if (mysqli_num_rows($resultado_tati) > 0) {
                    echo '<table class="table table-striped">';
                    echo '<thead><tr><th>Nome</th></tr></thead>';
                    echo '<tbody>';
                    while($row = mysqli_fetch_assoc($resultado_tati)) {
                        echo '<tr><td>' . $row["Nome"] . '</td></tr>';
                    }
                    echo '</tbody>';
                    echo '</table>';
                } else {
                    echo '<p class="text-center">Nenhum padrinho encontrado.</p>';
                }

                mysqli_close($conexao);
                ?>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
