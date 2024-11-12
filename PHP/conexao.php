<?php
$servidor = "localhost";
$username = "root";
$password = "";
$bd = "db_royal";

$conexao = new mysqli($servidor, $username, $password, $bd);

if ($conexao->connect_error) {
    die('Falha na conexão: ' . $conexao->connect_error);
}

// Verificando se o código do navio foi passado pela URL
$codigo_navio = isset($_GET['codigo_navio']) ? $_GET['codigo_navio'] : 'n01'; // Valor padrão 'n01'

// Buscando os dados do banco de dados
$sql = "SELECT nome_navio, ano_construcao, num_tripulantes, num_passageiros FROM navios WHERE codigo_navio = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $codigo_navio); // 's' indica que o parâmetro é uma string
$stmt->execute();
$resultado = $stmt->get_result();

// Verificando se algum dado foi retornado
if ($resultado->num_rows > 0) {
    $navio = $resultado->fetch_assoc();
} else {
    $navio = null;
}

// Fechando a conexão
$stmt->close();
$conexao->close();
?>