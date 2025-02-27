<?php
include 'conexao.php';

// Consulta para obter os presentes agrupados por grupo e ordenados por item
$sql = "SELECT idPresentes, grupo, item, ganhamos FROM presentes ORDER BY grupo, item";
$resultado = mysqli_query($conexao, $sql);

$presentes = [];

if (mysqli_num_rows($resultado) > 0) {
    while ($row = mysqli_fetch_assoc($resultado)) {
        $grupo = $row["grupo"];
        $presentes[$grupo][] = $row;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Presentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <style>
        body {
            background-color: #ffffff;
        }

        header {
            background-color: #f5deb3;
            color: #000;
            padding: 20px 0;
            text-align: center;
        }

        h1 {
            font-family: 'Great Vibes', cursive;
            color: #000;
            font-size: 4rem;
        }

        .container {
            background-color: #f0f0f0;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #4b0082;
            text-align: center;
            margin-top: 20px;
        }

        .item-checkbox {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 10px;
            padding: 10px;
            background-color: #f8e8d3;
            border-radius: 8px;
            margin-bottom: 5px;
        }

        .btn-blush {
            background-color: #d4afaf;
            border-color: #d4afaf;
            color: #fff;
        }

        .btn-blush:hover {
            background-color: #c49090;
            border-color: #c49090;
        }

        /* Estilização dos modais */
        #modal-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        #modal {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 90%;
            max-width: 400px;
        }

        #modal-pix {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            justify-content: center;
            align-items: center;
        }

        #modal-pix-content {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            width: 90%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Lista de Presentes</h1>
    </header>

    <div class="container mt-5">
        <?php if (!empty($presentes)): ?>
            <?php foreach ($presentes as $grupo => $itens): ?>
                <h2><?= htmlspecialchars($grupo) ?></h2>
                <div class="list-group">
                    <?php foreach ($itens as $item): ?>
                        <div class="item-checkbox">
                            <span><?= htmlspecialchars($item["item"]) ?></span>
                            <?php if ($item["ganhamos"] == 0): ?>
                                <button class="btn btn-blush abencoar-btn" data-id="<?= $item['idPresentes'] ?>">Abençoar</button>
                            <?php else: ?>
                                <button class="btn btn-success" disabled>Já Abençoado</button>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Nenhum presente encontrado.</p>
        <?php endif; ?>
		
		        <!-- Botão "Abençoar com Pix" -->
        <div class="text-center mt-4">
            <button id="abencoar-pix-btn" class="btn btn-warning">Abençoar com Pix</button>
        </div>

        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-blush mb-3 d-block">Voltar para o início</a>
        </div>


    </div>

    <!-- Modal para Abençoar com Pix -->
    <div id="modal-pix">
        <div id="modal-pix-content">
            <h3>Obrigado por nos abençoar com Pix!</h3>
            <p>Segue nossa chave para doação via Pix:</p>
            <p><strong>73981236008</strong></p>
            <button id="fechar-modal-pix" class="btn btn-secondary">Fechar</button>
        </div>
    </div>

    <!-- Modal para Abençoar presente -->
    <div id="modal-overlay">
        <div id="modal">
            <h3>Obrigado por nos abençoar!</h3>
            <p>Por favor, digite seu nome completo:</p>
            <input type="text" id="nome-abencoado" class="form-control">
            <br>
            <button id="confirmar-abencoar" class="btn btn-success">Confirmar</button>
            <button id="fechar-modal" class="btn btn-secondary">Cancelar</button>
        </div>
    </div>

    <script>
        let presenteSelecionado = null;

        // Modal de Abençoar presente
        document.querySelectorAll('.abencoar-btn').forEach(button => {
            button.addEventListener('click', () => {
                presenteSelecionado = button.getAttribute('data-id');
                document.getElementById('modal-overlay').style.display = 'flex';
            });
        });

        // Fechar o modal de Abençoar
        document.getElementById('fechar-modal').addEventListener('click', () => {
            document.getElementById('modal-overlay').style.display = 'none';
        });

        // Confirmar a ação de Abençoar
        document.getElementById('confirmar-abencoar').addEventListener('click', () => {
            const nomeAbencoado = document.getElementById('nome-abencoado').value;

            if (!nomeAbencoado.trim()) {
                alert('Por favor, digite seu nome completo.');
                return;
            }

            fetch('salvar_abencoado.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `idPresentes=${presenteSelecionado}&abencoador=${encodeURIComponent(nomeAbencoado)}`
            })
            .then(response => response.json())
            .then(data => {
                if (data.sucesso) {
                    alert('Presente abençoado com sucesso!');
                    location.reload();
                } else {
                    alert('Erro ao abençoar o presente.');
                }
            });
        });

        // Mostrar o modal de Pix ao clicar no botão "Abençoar com Pix"
        document.getElementById('abencoar-pix-btn').addEventListener('click', () => {
            document.getElementById('modal-pix').style.display = 'flex';
        });

        // Fechar o modal de Pix
        document.getElementById('fechar-modal-pix').addEventListener('click', () => {
            document.getElementById('modal-pix').style.display = 'none';
        });
    </script>
</body>
</html>
