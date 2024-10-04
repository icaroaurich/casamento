<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestimenta dos Padrinhos</title>
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

        /* Garantindo que as imagens tenham a mesma proporção */
        .img-fluid {
            width: 100%;
            height: auto;
            max-height: 400px; /* Ajuste para altura máxima uniforme */
            object-fit: cover; /* Mantém a proporção e cobre o espaço */
        }

        /* Título estilizado */
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #000; /* Preto para o título */
        }

        /* Estilo para os títulos das imagens */
        .image-title {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 0.5rem; /* Espaço entre o título e a imagem */
        }

        /* Estilo para o texto manuscrito */
        .text-manuscrito {
            font-family: 'Dancing Script', cursive; /* Fonte manuscrita */
            font-size: 1.5rem; /* Tamanho da fonte */
            margin-top: 1rem; /* Espaço acima do texto */
        }
    </style>
</head>
<body>
    <header class="text-center py-5">
        <h1 class="display-1">Vestimenta dos Padrinhos</h1>
    </header>

    <section class="container my-5">
        <div class="text-center">
            <div class="image-title">Madrinhas</div>
            <img src="imagens/madrinhas01.jpg" alt="Madrinhas" class="img-fluid mb-4">
            <ul class="list-unstyled text-start mb-4" style="font-size: 1.5rem;">
                <li>01 - Vestido cor X</li>
                <li>02 - Condição 2</li>
                <li>03 - Condição 3</li>
            </ul>
            <div class="image-title">Padrinhos</div>
            <img src="imagens/padrinhos03.jpg" alt="Padrinhos" class="img-fluid mb-4">
            <ul class="list-unstyled text-start mb-4" style="font-size: 1.5rem;">
                <li>01 - Colete cor X</li>
                <li>02 - Calça Y cor da cor X</li>
                <li>03 - Condição 3</li>
            </ul>
        </div>

        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-blush mb-3 d-block btn-lg-custom">Voltar para o início</a>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p class="mb-0">© 2024 Ícaro e Tati. Todos os direitos reservados.</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
