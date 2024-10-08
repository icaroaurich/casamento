<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Damas de Honra</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-4">Lista de Damas de Honra</h1>
        <a href="noivos.php" class="btn btn-secondary mb-3">Voltar para Noivos</a>
    </header>

    <section class="container my-5">
        <div>
            <?php
            include 'conexao.php';

            $sql = "SELECT Nome FROM damadehonra ORDER BY Nome";
            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                echo '<table class="table table-striped">';
                echo '<thead><tr><th>Nome</th></tr></thead>';
                echo '<tbody>';
                while($row = mysqli_fetch_assoc($resultado)) {
                    echo '<tr><td>' . $row["Nome"] . '</td></tr>';
                }
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p class="text-center">Nenhuma dama de honra encontrada.</p>';
            }

            mysqli_close($conexao);
            ?>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
