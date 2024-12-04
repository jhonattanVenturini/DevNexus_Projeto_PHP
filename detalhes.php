<?php
$codigo_navio = isset($_GET['codigo_navio']) ? $_GET['codigo_navio'] : 'N01';

// Sentença SQL corrigida
$sql = "SELECT * FROM navios WHERE codigo_navio = '" . $codigo_navio . "'";

// Variáveis de conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_royal";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);
if (!$conexao) {
    die('Erro na conexão: ' . mysqli_connect_error());
}

$rs = mysqli_query($conexao, $sql);
if (!$rs) {
    die('Erro na consulta: ' . mysqli_error($conexao));
}

// Verifica se os dados foram encontrados
if (mysqli_num_rows($rs) > 0) {
    while ($registro = mysqli_fetch_assoc($rs)) {
        $codigo_navio = htmlspecialchars($registro['codigo_navio']);
        $nome_navio = htmlspecialchars($registro['nome_navio']);
        $descricao = htmlspecialchars($registro['descricao']);
        $ano_construcao = htmlspecialchars($registro['ano_construcao']);
        $cabine_acessivel = htmlspecialchars($registro['cabine_acessivel']);
        $largura = htmlspecialchars($registro['largura']);
        $comprimento = htmlspecialchars($registro['comprimento']);
        $toneladas = htmlspecialchars($registro['toneladas']);
        $velocidade_navegacao = htmlspecialchars($registro['velocidade_navegacao']);
        $num_passageiros = htmlspecialchars($registro['num_passageiros']);
        $num_tripulantes = htmlspecialchars($registro['num_tripulantes']);
        $num_decks = htmlspecialchars($registro['num_decks']);
        $num_cabines = htmlspecialchars($registro['num_cabines']);
        $idiomas_abordo = htmlspecialchars($registro['idiomas_abordo']);
        $imagem = "./ASSETS/" . htmlspecialchars($registro['codigo_navio']) . ".webp";
    }
} else {
    die('Navio não encontrado.');
}

mysqli_close($conexao);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/detalhes.css">
    <link rel="icon" type="image/x-icon" href="./ASSETS/LOGO.webp">
    <title><?php echo $nome_navio; ?></title>
</head>

<body>
<header>
    <a href="index.php">
        <img src="https://www.royalcaribbean.com/content/dam/royal/resources/new-logo-rcg/RCI_Crown%2BAnchor_Symbol_White.png" alt="">
    </a>
    <h1>Royal Caribbean</h1>
</header>
    <main>
        <section>
            <div class="container">
                <fieldset class="conteudo">
                    <div class="infos">
                        <h1 style="padding: 5px;"><?php echo $nome_navio; ?></h1>
                        <img src="<?php echo $imagem; ?>" alt="Imagem do navio" class="img" />
                    </div>
                    <div class="infos2">
                        <p><?php echo $descricao; ?></p>
                        <ul>
                            <li><b>Ano de Construção:</b> <?php echo $ano_construcao; ?></li>
                            <li><b>Cabine com acesso para cadeira de rodas:</b> <?php echo $cabine_acessivel; ?></li>
                            <li><b>Largura:</b> <?php echo $largura; ?> m</li>
                            <li><b>Comprimento:</b> <?php echo $comprimento; ?> m</li>
                            <li><b>Toneladas:</b> <?php echo $toneladas; ?> tn</li>
                            <li><b>Velocidade de Navegação:</b> <?php echo $velocidade_navegacao; ?> nós</li>
                            <li><b>Número total de passageiros:</b> <?php echo $num_passageiros; ?></li>
                            <li><b>Número de Tripulantes:</b> <?php echo $num_tripulantes; ?></li>
                            <li><b>Nº Decks:</b> <?php echo $num_decks; ?></li>
                            <li><b>Nº Cabines:</b> <?php echo $num_cabines; ?></li>
                            <li><b>Idiomas a bordo:</b> <?php echo $idiomas_abordo; ?></li>
                        </ul>
                    </div>
                </fieldset>
            </div>
        </section>

        <footer>
            <h1>&copy;2024</h1>
            <div class="container-footer">
                <ul>
                    <li>Clara Yumi Almeida Kohama</li>
                    <li>Jhonattan de Carvalho Romão Venturini</li>
                    <li>Larissa Trevisani Amaral</li>
                    <li>Vinícius Pereira Garcia</li>
                </ul>
            </div>
        </footer>
    </main>
</body>

</html>