<?php
// Incluir a conexão com o banco de dados
include 'conexao.php';

// Adicionar novo convidado
if (isset($_POST['add'])) {
    $nome = $_POST['nome'];
    $noivo = $_POST['noivo'];
    $parentesco = $_POST['parentesco'];
    $familia = $_POST['familia'];
    $confirmado = $_POST['confirmado'];

    $sql = "INSERT INTO convidados (nome, noivo, parentesco, familia, confirmado) 
            VALUES ('$nome', '$noivo', '$parentesco', '$familia', '$confirmado')";
    
    if (mysqli_query($conexao, $sql)) {
        //echo "<script>alert('Convidado adicionado com sucesso!');</script>";
    } else {
        echo "<script>alert('Erro ao adicionar convidado: " . mysqli_error($conexao) . "');</script>";
    }
}


// Atualizar registro
if (isset($_POST['update'])) {
    $idConvidados = $_POST['idConvidados'];
    $nome = $_POST['nome'];
    $noivo = $_POST['noivo'];
    $parentesco = $_POST['parentesco'];
    $familia = $_POST['familia'];
    $confirmado = $_POST['confirmado'];

    $sql = "UPDATE convidados SET nome='$nome', noivo='$noivo', parentesco='$parentesco', familia='$familia', confirmado='$confirmado' WHERE idConvidados='$idConvidados'";
    mysqli_query($conexao, $sql);
}

// Deletar registro
if (isset($_GET['delete'])) {
    $idConvidados = $_GET['delete'];
    $sql = "DELETE FROM convidados WHERE idConvidados='$idConvidados'";
    mysqli_query($conexao, $sql);
}

// Consultar registros
$sql = "SELECT idConvidados, nome, noivo, parentesco, familia, confirmado FROM convidados ORDER BY nome";
$resultado = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Convidados</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container my-5">
    <h2>Lista de Convidados</h2>

    <?php
    if (mysqli_num_rows($resultado) > 0) {
        echo "<table class='table table-bordered'>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Noivo</th>
                        <th>Parentesco</th>
                        <th>Família</th>
                        <th>Confirmado</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>";

        while ($row = mysqli_fetch_assoc($resultado)) {
            echo "<tr>
                    <form method='POST' action='crud_convidados.php'>
                        <td>" . $row["idConvidados"] . "</td>
                        <td><input type='text' name='nome' value='" . $row["nome"] . "' class='form-control'></td>
                        <td>
                            <select name='noivo' class='form-control'>
                                <option value='0' " . ($row['noivo'] == 0 ? 'selected' : '') . ">Ícaro</option>
                                <option value='1' " . ($row['noivo'] == 1 ? 'selected' : '') . ">Tatiana</option>
                            </select>
                        </td>
                        <td><input type='text' name='parentesco' value='" . $row["parentesco"] . "' class='form-control'></td>
                        <td><input type='text' name='familia' value='" . $row["familia"] . "' class='form-control'></td>
                        <td>
                            <select name='confirmado' class='form-control'>
                                <option value='1' " . ($row['confirmado'] == 1 ? 'selected' : '') . ">Sim</option>
                                <option value='0' " . ($row['confirmado'] == 0 ? 'selected' : '') . ">Não</option>
                            </select>
                        </td>
                        <td>
                            <input type='hidden' name='idConvidados' value='" . $row["idConvidados"] . "'>
                            <button type='submit' name='update' class='btn btn-primary'>Salvar</button>
                            <a href='crud_convidados.php?delete=" . $row['idConvidados'] . "' class='btn btn-danger'>Excluir</a>
                            <a href='convite.php?familia=" . urlencode($row['familia']) . "' target='_blank' class='btn btn-warning'>Convite</a>
                        </td>
                    </form>
                </tr>";
        }

        echo "</tbody></table>";
    } else {
        echo "Nenhum registro encontrado.";
    }
    ?>

    <!-- Formulário para adicionar um novo convidado -->
    <div class="mt-5">
        <h3>Adicionar Novo Convidado</h3>
        <form method="POST" action="crud_convidados.php">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>
            <div class="mb-3">
                <label for="noivo" class="form-label">Noivo</label>
                <select class="form-control" id="noivo" name="noivo" required>
                    <option value="0">Ícaro</option>
                    <option value="1">Tatiana</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="parentesco" class="form-label">Parentesco</label>
                <input type="text" class="form-control" id="parentesco" name="parentesco">
            </div>
            <div class="mb-3">
                <label for="familia" class="form-label">Família</label>
                <input type="text" class="form-control" id="familia" name="familia">
            </div>
            <div class="mb-3">
                <label for="confirmado" class="form-label">Confirmado</label>
                <select class="form-control" id="confirmado" name="confirmado" required>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
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
mysqli_close($conexao);
?>
