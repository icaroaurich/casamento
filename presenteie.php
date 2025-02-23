<?php
include 'conexao.php';

// Consulta para obter os presentes agrupados por grupo e ordenados por item
$sql = "SELECT grupo, item, ganhamos FROM presentes ORDER BY grupo, item";
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
    <style>
        body {
            background-color: #fdf7e3; /* Bege claro */
            color: #4b0082; /* Violeta escuro */
        }

        .container {
            max-width: 800px;
            background-color: #fffaf0; /* Fundo bege suave */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        h1, h2 {
            text-align: center;
            color: #4b0082; /* Violeta */
        }

        .item-checkbox {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 10px;
            background-color: #f8e8d3; /* Bege médio */
            border-radius: 8px;
            margin-bottom: 5px;
        }

        .item-checkbox input[type="checkbox"] {
            transform: scale(1.5);
            accent-color: #4b0082; /* Cor violeta */
        }

        .btn-voltar {
            display: block;
            width: 200px;
            margin: 20px auto;
            background-color: #4b0082;
            color: white;
            border-radius: 8px;
            padding: 10px;
            text-align: center;
            font-size: 18px;
            text-decoration: none;
        }

        .btn-voltar:hover {
            background-color: #3a0066;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Lista de Presentes</h1>

        <?php if (!empty($presentes)): ?>
            <?php foreach ($presentes as $grupo => $itens): ?>
                <h2 class="mt-4"><?= htmlspecialchars($grupo) ?></h2>
                <div class="list-group">
                    <?php foreach ($itens as $item): ?>
                        <div class="item-checkbox">
                            <input type="checkbox" <?= $item["ganhamos"] == 1 ? "checked" : "" ?> disabled>
                            <span><?= htmlspecialchars($item["item"]) ?></span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Nenhum presente encontrado.</p>
        <?php endif; ?>

        <!-- Botão de voltar -->
        <a href="index.html" class="btn-voltar">← Voltar</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
