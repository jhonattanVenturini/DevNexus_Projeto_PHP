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
    // Lógica para determinar o próximo código
    // Adapte essa lógica conforme a sua estrutura de códigos
    $ultimo_digito = substr($codigo_atual, -1);
    $novo_digito = intval($ultimo_digito) + 1;
    return substr($codigo_atual, 0, -1) . $novo_digito;
}

// Código inicial do navio (pode ser ajustado)
$codigo_navio = 'N01';
$navios = [];

while (true) {
    // Consulta ao banco de dados
    $sql = "SELECT codigo_navio, nome_navio, ano_construcao, num_tripulantes, num_passageiros FROM navios WHERE codigo_navio >= ? ORDER BY codigo_navio ASC LIMIT 1";
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
        break;
    }
}

$stmt->close();
$conexao->close();
?>
