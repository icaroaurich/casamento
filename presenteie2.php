<?php
include 'conexao.php';

// Consulta para obter os presentes agrupados por grupo e ordenados por item
$sql = "SELECT id, grupo, item, ganhamos, abencoador FROM presentes ORDER BY grupo, item";
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
        body { background-color: #ffffff; }
        header { background-color: #f5deb3; color: #000; padding: 20px 0; text-align: center; }
        h1 { font-family: 'Great Vibes', cursive; color: #000; font-size: 4rem; }
        .container { background-color: #f0f0f0; border-radius: 15px; padding: 2rem; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
        h2 { color: #4b0082; text-align: center; margin-top: 20px; }
        .item-checkbox { display: flex; align-items: center; justify-content: space-between; padding: 10px; background-color: #f8e8d3; border-radius: 8px; margin-bottom: 5px; }
        .btn-blush { background-color: #d4afaf; border-color: #d4afaf; color: #fff; font-size: 1rem; padding: 0.5rem 1rem; }
        .btn-blush:hover { background-color: #c49090; border-color: #c49090; }
        .overlay { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.8); align-items: center; justify-content: center; }
        .overlay-content { background: #fff; padding: 20px; border-radius: 10px; text-align: center; }
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
                            <input type="checkbox" <?= $item["ganhamos"] == 1 ? "checked" : "" ?> disabled>
                            <span><?= htmlspecialchars($item["item"]) ?></span>
                            <?php if ($item["ganhamos"] == 0): ?>
                                <button class="btn btn-blush" onclick="abrirModal(<?= $item['id'] ?>, '<?= htmlspecialchars($item['item']) ?>')">Abençoar</button>
                            <?php else: ?>
                                <span><strong>Abençoado por:</strong> <?= htmlspecialchars($item["abencoador"]) ?></span>
                            <?php endif; ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center">Nenhum presente encontrado.</p>
        <?php endif; ?>

        <div class="text-center mt-4">
            <a href="index.html" class="btn btn-blush mb-3 d-block">Voltar para o início</a>
        </div>
    </div>

    <div class="overlay" id="overlay">
        <div class="overlay-content">
            <p id="mensagem">Obrigado por nos abençoar! Digite seu nome completo:</p>
            <input type="text" id="nomeAbencoador" class="form-control" placeholder="Nome completo">
            <button class="btn btn-blush mt-2" onclick="salvarAbençoador()">Confirmar</button>
            <button class="btn btn-secondary mt-2" onclick="fecharModal()">Cancelar</button>
            <input type="hidden" id="presenteId">
        </div>
    </div>

    <script>
        function abrirModal(id, item) {
            document.getElementById('overlay').style.display = 'flex';
            document.getElementById('presenteId').value = id;
        }

        function fecharModal() {
            document.getElementById('overlay').style.display = 'none';
        }

        function salvarAbençoador() {
            let nome = document.getElementById('nomeAbencoador').value;
            let id = document.getElementById('presenteId').value;
            if (nome.trim() === '') {
                alert('Por favor, digite seu nome completo.');
                return;
            }
            
            fetch('salvar_abencoado.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: `id=${id}&nome=${encodeURIComponent(nome)}`
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
                location.reload();
            });
        }
    </script>
</body>
</html>
