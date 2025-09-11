<?php
$servidor = "localhost";
$username = "root";
$password = "";
$bd = "db_royal";

$conexao = new mysqli($servidor, $username, $password, $bd);

if ($conexao->connect_error) {
    die('Falha na conexão: ' . $conexao->connect_error);
}

// Função para obter o próximo código do navio
function proximoCodigoNavio($codigo_atual) {
    $prefix = substr($codigo_atual, 0, 1); // Assume prefixo é 'N'
    $numero = intval(substr($codigo_atual, 1)); // Obtém o número como inteiro
    $novo_numero = $numero + 1;
    return $prefix . str_pad($novo_numero, 2, '0', STR_PAD_LEFT); // Gera novo código
}

// Código inicial do navio (pode ser ajustado)
$codigo_navio = 'N01';
$navios = [];
$max_iteracoes = 50; // Limite de iterações para evitar loop infinito

for ($i = 0; $i < $max_iteracoes; $i++) {
    // Consulta ao banco de dados
    $sql = "SELECT codigo_navio, nome_navio, ano_construcao, num_tripulantes, num_passageiros FROM navios WHERE codigo_navio = ? ORDER BY codigo_navio ASC LIMIT 1";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("s", $codigo_navio);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verificando se algum dado foi retornado
    if ($resultado->num_rows > 0) {
        $navio = $resultado->fetch_assoc();
        $navios[] = $navio; // Armazena os dados no array

        // Obtendo o próximo código para a próxima iteração
        $codigo_navio = proximoCodigoNavio($codigo_navio);
    } else {
        break; // Sai do loop se não encontrar mais navios
    }
}

$stmt->close();
$conexao->close();
?>


