<?php
include 'conexao.php';

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $idPresentes = isset($_POST["idPresentes"]) ? $_POST["idPresentes"] : null;
    $abencoador = isset($_POST["abencoador"]) ? $_POST["abencoador"] : null;

    if ($idPresentes && $abencoador) {
        $sql = "UPDATE presentes SET abencoador = ?, ganhamos = 1 WHERE idPresentes = ?";
        $stmt = mysqli_prepare($conexao, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "si", $abencoador, $idPresentes);

            if (mysqli_stmt_execute($stmt)) {
                echo json_encode(["sucesso" => true]);
            } else {
                echo json_encode(["sucesso" => false, "erro" => mysqli_error($conexao)]);
            }

            mysqli_stmt_close($stmt);
        } else {
            echo json_encode(["sucesso" => false, "erro" => "Erro na preparação da query"]);
        }
    } else {
        echo json_encode(["sucesso" => false, "erro" => "Dados incompletos"]);
    }
}
?>
