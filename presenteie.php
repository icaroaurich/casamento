<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentes - Ícaro e Tati</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-4">Presentes</h1>
        <p>Para os que querem nos abençoar</p>
    </header>

    <section class="container my-5">
        <div>
            <?php
            include 'conexao.php';

            $sql = "SELECT item, abençoador FROM presentes ORDER BY item";
            $resultado = mysqli_query($conexao, $sql);

            if (mysqli_num_rows($resultado) > 0) {
                echo '<table class="table table-striped">';
                echo '<thead><tr><th>Item</th><th>Abençoador</th></tr></thead>';
                echo '<tbody>';
                while($row = mysqli_fetch_assoc($resultado)) {
                    echo '<tr><td>' . $row["item"] . '</td><td>' . $row["abençoador"] . '</td></tr>';
                }
                echo '</tbody>';
                echo '</table>';
            } else {
                echo '<p class="text-center">Nenhum presente encontrado.</p>';
            }

            mysqli_close($conexao);
            ?>
        </div>
        
        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-secondary">Voltar para Início</a>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
