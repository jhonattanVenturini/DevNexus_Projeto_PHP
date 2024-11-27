<?php
$servidor = "localhost";
$username = "root";
$password = "";
$bd = "db_royal";

// Estabelece a conexão com o banco de dados
$conexao = new mysqli($servidor, $username, $password, $bd);

if ($conexao->connect_error) {
    die('Falha na conexão: ' . $conexao->connect_error);
}

// Função para obter o próximo código do navio
function proximoCodigoNavio($codigo_atual)
{
    $prefix = substr($codigo_atual, 0, 1); // Assume prefixo é 'N'
    $numero = intval(substr($codigo_atual, 1)); // Obtém o número como inteiro
    $novo_numero = $numero + 1;
    return $prefix . str_pad($novo_numero, 2, '0', STR_PAD_LEFT); // Gera novo código
}

// Verifica se o código do navio foi passado pela URL
$codigo_navio = isset($_GET['codigo_navio']) ? $_GET['codigo_navio'] : 'N01';

// Consulta ao banco de dados para buscar os detalhes do navio
$sql = "SELECT codigo_navio, nome_navio, ano_construcao, cabine_acessivel, largura, comprimento, toneladas, velocidade_navegacao, num_passageiros, num_tripulantes, num_decks, num_cabines, idiomas_abordo, descricao FROM navios WHERE codigo_navio = ?";
$stmt = $conexao->prepare($sql);
$stmt->bind_param("s", $codigo_navio);
$stmt->execute();
$resultado = $stmt->get_result();

// Verifica se os dados foram encontrados
if ($resultado->num_rows > 0) {
    $navio = $resultado->fetch_assoc();
} else {
    die('Navio não encontrado.');
}

$stmt->close();
$conexao->close();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/detalhes.css">
    <link rel="icon" type="image/x-icon" href="./ASSETS/LOGO.webp">
    <title><?php echo htmlspecialchars($navio['nome_navio']); ?></title>

</head>

<body>
    <header>
        <img src="https://www.royalcaribbean.com/content/dam/royal/resources/new-logo-rcg/RCI_Crown%2BAnchor_Symbol_White.png" alt="">
        <h1>Royal Caribbean</h1>
    </header>

    <main>
        <section>
            <div class="container">
                <fieldset class="conteudo">
                    <div class="infos">
                        <h1 style="padding: 5px;"><?php echo htmlspecialchars($navio['nome_navio']); ?></h1>
                        <img src="./ASSETS/<?php echo htmlspecialchars($navio['codigo_navio']); ?>.webp" alt="Imagem do navio" class="img" />
                    </div>
                    <p>
                        <?php echo htmlspecialchars($navio['descricao']); ?>
                    </p>
                    <ul>
                        <li><b>Ano de Construção:</b> <?php echo htmlspecialchars($navio['ano_construcao']); ?></li>
                        <li><b>Cabine com acesso para cadeira de rodas:</b> <?php echo htmlspecialchars($navio['cabine_acessivel']); ?></li>
                        <li><b>Largura:</b> <?php echo htmlspecialchars($navio['largura']); ?> m</li>
                        <li><b>Comprimento:</b> <?php echo htmlspecialchars($navio['comprimento']); ?> m</li>
                        <li><b>Toneladas:</b> <?php echo htmlspecialchars($navio['toneladas']); ?> tn</li>
                        <li><b>Velocidade de Navegação:</b> <?php echo htmlspecialchars($navio['velocidade_navegacao']); ?> nós</li>
                        <li><b>Número total de passageiros:</b> <?php echo htmlspecialchars($navio['num_passageiros']); ?></li>
                        <li><b>Número de Tripulantes:</b> <?php echo htmlspecialchars($navio['num_tripulantes']); ?></li>
                        <li><b>Nº Decks:</b> <?php echo htmlspecialchars($navio['num_decks']); ?></li>
                        <li><b>Nº Cabines:</b> <?php echo htmlspecialchars($navio['num_cabines']); ?></li>
                        <li><b>Idiomas a bordo:</b> <?php echo htmlspecialchars($navio['idiomas_abordo']); ?></li>
                    </ul>
                </fieldset>
            </div>
        </section>

        <footer>&copy;2024</footer>
    </main>
</body>

</html>