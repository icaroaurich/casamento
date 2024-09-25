<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Mensagem</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <header class="bg-light text-center py-5">
        <h1 class="display-4">Enviar Mensagem</h1>
    </header>

    <section class="container my-5">
        <form action="" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="mensagem" class="form-label">Mensagem (máx. 200 caracteres)</label>
                <textarea class="form-control" id="mensagem" name="mensagem" rows="3" maxlength="200" required></textarea>
                <div class="error" id="charCount"></div>
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include 'conexao.php';

            $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
            $mensagem = mysqli_real_escape_string($conexao, $_POST['mensagem']);

            $sql = "INSERT INTO mensagem (nome, mensagem) VALUES ('$nome', '$mensagem')";
            if (mysqli_query($conexao, $sql)) {
                echo '<div class="alert alert-success mt-3">Mensagem enviada com sucesso!</div>';
            } else {
                echo '<div class="alert alert-danger mt-3">Erro ao enviar a mensagem: ' . mysqli_error($conexao) . '</div>';
            }

            mysqli_close($conexao);
        }
        ?>
        
        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-secondary">Voltar para a Página Inicial</a>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const textarea = document.getElementById('mensagem');
        const charCount = document.getElementById('charCount');

        textarea.addEventListener('input', () => {
            const remaining = 200 - textarea.value.length;
            charCount.textContent = `Caracteres restantes: ${remaining}`;
        });
    </script>
</body>
</html>
