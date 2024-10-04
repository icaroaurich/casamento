<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Mensagem</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonte manuscrita para os noivos -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        /* Estilo adicional para botões maiores */
        .btn-lg-custom {
            font-size: 1.25rem;
            padding: 1rem;
            height: 80px; /* Altura maior dos botões */
        }

        /* Fundo branco para simplicidade e pureza */
        body {
            background-color: #ffffff; /* Branco puro */
        }

        /* Cabeçalho com champagne para sofisticação */
        header {
            background-color: #f5deb3; /* Champagne */
            color: #000; /* Cor do texto do cabeçalho em preto */
        }

        /* Destaque no nome dos noivos */
        h1 {
            font-family: 'Great Vibes', cursive; /* Fonte manuscrita */
            color: #000; /* Nome dos noivos em preto */
            font-size: 6rem; /* Tamanho ainda maior para destaque */
        }

        .error {
            color: red;
        }

        /* Rodapé com verde suave para equilíbrio */
        footer {
            background-color: #e0eee0; /* Verde suave */
            color: #000;
        }

        /* Seções com toques de cinza claro/prata para elegância discreta */
        section {
            background-color: #f0f0f0; /* Cinza claro */
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Aumentando o espaçamento entre os blocos de botões */
        .mb-3 {
            margin-bottom: 1.5rem !important;
        }
    </style>
</head>
<body>
    <header class="text-center py-5">
        <h1 class="display-1">Enviar Mensagem</h1>
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
