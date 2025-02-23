<?php
// Configurações do banco de dados
$host = 'localhost:4407';
$dbname = 'teste';
$username = 'root';
$password = 'new_sql';

try {
    // Conexão com o banco de dados usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Verifica se o parâmetro 'nome' foi passado via GET
    if (isset($_GET['nome'])) {
        $nome = $_GET['nome'];

        // Prepara a consulta de inserção
        $sql = "INSERT INTO usuarios (nome) VALUES (:nome)";
        $stmt = $pdo->prepare($sql);

        // Liga o parâmetro :nome com o valor da variável $nome
        $stmt->bindParam(':nome', $nome);

        // Executa a consulta
        $stmt->execute();

        echo "Nome inserido com sucesso!";
    } else {
        echo "Por favor, forneça o parâmetro 'nome' na URL.";
    }

} catch (PDOException $e) {
    echo "Erro ao conectar ao banco de dados: " . $e->getMessage();
}
?>
