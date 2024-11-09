<?php

$servidor = "localhost";
$username = "root";
$passaword = "";
$banco = "db_royal";

$conexao = new mysqli($servidor, $username, $passaword, $banco);
if ($conexao->connect_error) {
    die('Falha na conexão: ' . $conexao->connect_error);
}

// Defina o código do navio diretamente
$codigo_navio = 'n03'; // Substitua 'N123' pelo código do navio que deseja buscar

// Prepara e executa a consulta
$stmt = $conexao->prepare("SELECT * FROM navios WHERE codigo_navio = ?");
$stmt->bind_param("s", $codigo_navio);
$stmt->execute();
$resultado = $stmt->get_result();

// Verifica se algum dado foi retornado
if ($resultado->num_rows > 0) {
    $navio = $resultado->fetch_assoc();

    // Exibindo os dados do navio
    echo "<h2>Dados do Navio</h2>";
    echo "<p><strong>Código do Navio:</strong> " . htmlspecialchars($navio['codigo_navio']) . "</p>";
    echo "<p><strong>Nome do Navio:</strong> " . htmlspecialchars($navio['nome_navio']) . "</p>";
    echo "<p><strong>Descrição:</strong> " . htmlspecialchars($navio['descricao']) . "</p>";
    echo "<p><strong>Ano de Construção:</strong> " . htmlspecialchars($navio['ano_construcao']) . "</p>";
    echo "<p><strong>Cabine Acessível:</strong> " . htmlspecialchars($navio['cabine_acessivel']) . "</p>";
    echo "<p><strong>Largura:</strong> " . htmlspecialchars($navio['largura']) . "</p>";
    echo "<p><strong>Comprimento:</strong> " . htmlspecialchars($navio['comprimento']) . "</p>";
    echo "<p><strong>Toneladas:</strong> " . htmlspecialchars($navio['toneladas']) . "</p>";
    echo "<p><strong>Velocidade de Navegação:</strong> " . htmlspecialchars($navio['velocidade_navegacao']) . "</p>";
    echo "<p><strong>Número de Passageiros:</strong> " . htmlspecialchars($navio['num_passageiros']) . "</p>";
    echo "<p><strong>Número de Tripulantes:</strong> " . htmlspecialchars($navio['num_tripulantes']) . "</p>";
    echo "<p><strong>Número de Decks:</strong> " . htmlspecialchars($navio['num_decks']) . "</p>";
    echo "<p><strong>Número de Cabines:</strong> " . htmlspecialchars($navio['num_cabines']) . "</p>";
    echo "<p><strong>Idiomas a Bordo:</strong> " . htmlspecialchars($navio['idiomas_abordo']) . "</p>";
} else {
    echo "<p>Nenhum navio encontrado com o código: " . htmlspecialchars($codigo_navio) . "</p>";
}

// Fecha a declaração e a conexão
$stmt->close();
$conexao->close();
?>
