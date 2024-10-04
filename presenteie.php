<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Presentes - Ícaro e Tati</title>
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

        p.lead {
            color: #ffffff;
            font-weight: bold;
        }

        /* Botões rosa blush para romance */
        .btn-blush {
            background-color: #d4afaf; /* Rosa blush */
            border-color: #d4afaf;
            color: #fff; /* Texto branco para contraste */
        }

        .btn-blush:hover {
            background-color: #c49090;
            border-color: #c49090;
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
        <h1 class="display-1">Presentes</h1>
        <h1 class="display-4">Para os que querem nos abençoar</h1>
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
