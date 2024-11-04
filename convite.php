<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convite</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
            font-size: 1.5rem; /* Aumenta o tamanho da fonte para todo o corpo */
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

        /* Aumenta o tamanho da fonte das mensagens */
        .message {
            font-size: 1.9rem; /* Aumenta o tamanho do texto das mensagens */
        }
    </style>
</head>
<body>
    <header class="text-center py-5">
        <h1 class="display-0">Convite</h1>
        <h1 class="display-1">Casamento de Ícaro e Tatiana</h1>
    </header>

    <section class="container my-5">
        <?php
        include 'conexao.php';

        // Variáveis para data e hora do casamento
        $data = "";
        $hora = "";

        // Consulta para obter a data e a hora do casamento
        $sql_data_hora = "SELECT data FROM datahoralocal LIMIT 1"; // Obter data
        $resultado_data_hora = mysqli_query($conexao, $sql_data_hora);

        if ($resultado_data_hora) {
            $row_data_hora = mysqli_fetch_assoc($resultado_data_hora);
            if ($row_data_hora) { // Verifica se retornou algum resultado
                $data_hora = $row_data_hora['data']; // Obtenha a data e hora

                // Separar data e hora
                $data = date('d-m-Y', strtotime($data_hora)); // Formato: 13-05-2025
                $hora = date('H:i', strtotime($data_hora)); // Formato: 15:00
            } else {
                echo '<p class="text-danger">Nenhuma data ou hora encontrada.</p>';
            }
        } else {
            echo '<p class="text-danger">Erro na consulta da data e hora: ' . mysqli_error($conexao) . '</p>';
        }

        // Verifica se o parâmetro 'familia' foi passado na URL
        if (isset($_GET['familia'])) {
            $familia = intval($_GET['familia']); // Obtém o número da família

            // Consulta para buscar convidados pela família
            $sql = "SELECT Nome FROM convidados WHERE Familia = $familia ORDER BY Nome";
            $resultado = mysqli_query($conexao, $sql);
            $nomes = [];

            // Armazenar os nomes dos convidados em um array
            while($row = mysqli_fetch_assoc($resultado)) {
                $nomes[] = $row["Nome"];
            }

            // Verifica a quantidade de convidados e monta a mensagem adequada
            $contagem = count($nomes);

            echo '<p class="message text-center">';
            if ($contagem === 1) {
                echo "<strong>{$nomes[0]}</strong>, você foi convidado para o casamento de <strong>Ícaro</strong> e <strong>Tati</strong>, no dia {$data} às {$hora} horas, contamos com sua presença!";
            } elseif ($contagem === 2) {
                echo "<strong>{$nomes[0]}</strong> e <strong>{$nomes[1]}</strong>, vocês foram convidados para o casamento de <strong>Ícaro</strong> e <strong>Tati</strong>, no dia {$data} às {$hora} horas, contamos com sua presença!";
            } elseif ($contagem > 2) {
                echo implode(', ', array_map(function($nome) {
                    return "<strong>$nome</strong>"; // Envolve cada nome em negrito
                }, array_slice($nomes, 0, -1))) . " e <strong>" . end($nomes) . "</strong>, vocês foram convidados para o casamento de <strong>Ícaro</strong> e <strong>Tati</strong>, no dia {$data} às {$hora} horas, contamos com sua presença!";
            } else {
                echo 'Nenhum convidado encontrado para essa família.';
            }            
            echo '</p>';

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
