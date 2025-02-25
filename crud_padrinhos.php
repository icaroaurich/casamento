<?php
// Incluir a conexão com o banco de dados
include 'conexao.php';

// Adicionar novo padrinho
if (isset($_POST['add'])) {
    $Nome = $_POST['Nome'];
    $noivo = $_POST['noivo'];

    $sql = "INSERT INTO padrinhos (Nome, noivo) VALUES ('$Nome', '$noivo')";
    if (mysqli_query($conexao, $sql)) {
        echo "Registro adicionado com sucesso!";
    } else {
        echo "Erro ao adicionar: " . mysqli_error($conexao);
    }
}

// Atualizar padrinho
if (isset($_POST['update'])) {
    $idPadrinhos = $_POST['idPadrinhos'];
    $Nome = $_POST['Nome'];
    $noivo = $_POST['noivo'];

    $sql = "UPDATE padrinhos SET Nome='$Nome', noivo='$noivo' WHERE idPadrinhos='$idPadrinhos'";
    if (mysqli_query($conexao, $sql)) {
        echo "Registro atualizado com sucesso!";
    } else {
        echo "Erro ao atualizar: " . mysqli_error($conexao);
    }
}

// Deletar padrinho
if (isset($_GET['delete'])) {
    $idPadrinhos = $_GET['delete'];
    $sql = "DELETE FROM padrinhos WHERE idPadrinhos='$idPadrinhos'";
    if (mysqli_query($conexao, $sql)) {
        echo "Registro deletado com sucesso!";
    } else {
        echo "Erro ao deletar: " . mysqli_error($conexao);
    }
}

// Consultar padrinhos
$sql = "SELECT idPadrinhos, Nome, noivo FROM padrinhos ORDER BY casal";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Padrinhos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h2>Lista de Padrinhos</h2>

    <?php
    if (mysqli_num_rows($resultado) > 0) {
        echo "<table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Noivo</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <form method='POST' action='crud_padrinhos.php'>
                        <td>" . $row["idPadrinhos"] . "</td>
                        <td><input type='text' name='Nome' value='" . htmlspecialchars($row["Nome"]) . "' class='form-control'></td>
                        <td>
                            <select name='noivo' class='form-control'>
                                <option value='0' " . ($row['noivo'] == 0 ? 'selected' : '') . ">Ícaro</option>
                                <option value='1' " . ($row['noivo'] == 1 ? 'selected' : '') . ">Tatiana</option>
                            </select>
                        </td>
                        <td>
                            <input type='hidden' name='idPadrinhos' value='" . $row["idPadrinhos"] . "'>
                            <button type='submit' name='update' class='btn btn-primary'>Salvar</button>
                            <a href='crud_padrinhos.php?delete=" . $row['idPadrinhos'] . "' class='btn btn-danger'>Excluir</a>
                        </td>
                    </form>
                </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "<p>Nenhum padrinho cadastrado.</p>";
    }
    ?>

    <!-- Formulário para adicionar um novo padrinho -->
    <div class="mt-5">
        <h3>Adicionar Novo Padrinho</h3>
        <form method="POST" action="crud_padrinhos.php">
            <div class="mb-3">
                <label for="Nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="Nome" name="Nome" required>
            </div>
            <div class="mb-3">
                <label for="noivo" class="form-label">Noivo</label>
                <select class="form-control" id="noivo" name="noivo" required>
                    <option value="0">Ícaro</option>
                    <option value="1">Tatiana</option>
                </select>
            </div>
            <button type="submit" name="add" class="btn btn-success">Adicionar</button>
        </form>
    </div>

    <!-- Botão de Voltar -->
    <div class="mt-3">
        <a href="noivos.php" class="btn btn-secondary">Voltar</a>
    </div>

</div>

</body>
</html>

<?php
mysqli_close($conexao);
?>
