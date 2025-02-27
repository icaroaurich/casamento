<?php
// Incluir a conexão com o banco de dados
include 'conexao.php';

// Se foi enviado um pedido de atualização
if (isset($_POST['update'])) {
    $idPresentes = $_POST['idPresentes'];
    $item = $_POST['item'];
    $grupo = $_POST['grupo'];
    $ganhamos = $_POST['ganhamos'];
	$abencoador = $_POST['abencoador'];

    // Atualizar o registro
    $sql = "UPDATE presentes SET item='$item', grupo='$grupo', ganhamos='$ganhamos', abencoador='$abencoador' WHERE idPresentes='$idPresentes'";
    if (mysqli_query($conexao, $sql)) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar o registro: " . mysqli_error($conexao);
    }
}

// Se foi enviado um pedido de exclusão
if (isset($_GET['delete'])) {
    $idPresentes = $_GET['delete'];

    // Excluir o registro
    $sql = "DELETE FROM presentes WHERE idPresentes='$idPresentes'";
    if (mysqli_query($conexao, $sql)) {
        echo "Registro deletado com sucesso!";
    } else {
        echo "Erro ao deletar o registro: " . mysqli_error($conexao);
    }
}

// Se foi enviado um pedido para adicionar um novo item
if (isset($_POST['add'])) {
    $item = $_POST['item'];
    $grupo = $_POST['grupo'];
    $ganhamos = $_POST['ganhamos'];

    // Inserir o novo item
    $sql = "INSERT INTO presentes (item, grupo, ganhamos) VALUES ('$item', '$grupo', '$ganhamos')";
    if (mysqli_query($conexao, $sql)) {
        echo "Novo item adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar o item: " . mysqli_error($conexao);
    }
}

// Consultar todos os registros da tabela 'presentes'
$sql = "SELECT idPresentes, item, grupo, ganhamos, abencoador FROM presentes ORDER BY grupo, item";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Presentes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h2>Lista de Presentes</h2>

    <?php
    if (mysqli_num_rows($resultado) > 0) {
        echo "<table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Item</th>
                        <th>Grupo</th>
                        <th>Ganhamos</th>
						<th>Abençoador</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>";

        // Exibir os registros
        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <form method='POST' action='crud_presenteie.php'>
                        <td>" . $row["idPresentes"] . "</td>
                        <td><input type='text' name='item' value='" . $row["item"] . "' class='form-control'></td>
                        <td><input type='text' name='grupo' value='" . $row["grupo"] . "' class='form-control'></td>
                        <td>
                            <select name='ganhamos' class='form-control'>
                                <option value='1' " . ($row['ganhamos'] == 1 ? 'selected' : '') . ">Sim</option>
                                <option value='0' " . ($row['ganhamos'] == 0 ? 'selected' : '') . ">Não</option>
                            </select>
                        </td>
						<td><input type='text' name='abencoador' value='" . $row["abencoador"] . "' class='form-control'></td>
                        <td>
                            <input type='hidden' name='idPresentes' value='" . $row["idPresentes"] . "'>
                            <button type='submit' name='update' class='btn btn-primary'>Salvar</button>
                            <a href='crud_presenteie.php?delete=" . $row['idPresentes'] . "' class='btn btn-danger'>Deletar</a>
                        </td>
                    </form>
                </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "Nenhum registro encontrado.";
    }
    ?>

    <!-- Formulário para adicionar um novo item -->
    <div class="mt-5">
        <h3>Adicionar Novo Item</h3>
        <form method="POST" action="crud_presenteie.php">
            <div class="mb-3">
                <label for="item" class="form-label">Item</label>
                <input type="text" class="form-control" id="item" name="item" required>
            </div>
            <div class="mb-3">
                <label for="grupo" class="form-label">Grupo</label>
                <input type="text" class="form-control" id="grupo" name="grupo" required>
            </div>
            <div class="mb-3">
                <label for="ganhamos" class="form-label">Ganhamos</label>
                <select class="form-control" id="ganhamos" name="ganhamos" required>
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <button type="submit" name="add" class="btn btn-success">Adicionar</button>
        </form>
    </div>

    <!-- Botão de Voltar -->
    <div class="mt-3">
        <a href="noivos.php" class="btn btn-secondary">Voltar para Noivos</a>
    </div>

</div>

</body>
</html>

<?php
// Fechar a conexão com o banco
mysqli_close($conexao);
?>
