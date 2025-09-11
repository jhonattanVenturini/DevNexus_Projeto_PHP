<?php
// =================================================================
// BLOCO DE LÓGICA PHP (BUSCA DE DADOS)
// =================================================================

// 1. Conexão com o Banco de Dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "db_royal";
$conexao = mysqli_connect($servidor, $usuario, $senha, $banco);

// Checagem de conexão (boa prática)
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// 2. Consulta SQL para buscar todos os navios
$sql = "SELECT * FROM navios ORDER BY nome_navio ASC";

// 3. Executa a consulta
$rs = mysqli_query($conexao, $sql);

// 4. Busca todos os dados de uma vez para um array
$navios = [];
if ($rs) {
    $navios = mysqli_fetch_all($rs, MYSQLI_ASSOC);
}

// 5. Libera a memória e fecha a conexão
if ($rs) mysqli_free_result($rs);
mysqli_close($conexao);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./CSS/index.css">
  <link rel="icon" type="image/x-icon" href="./ASSETS/LOGO.webp">
  <title>Home | Royal Caribbean</title>
</head>

<body>
  <header>
    <a href="index.php">
      <img src="https://www.royalcaribbean.com/content/dam/royal/resources/new-logo-rcg/RCI_Crown%2BAnchor_Symbol_White.png" alt="Logo Royal Caribbean">
    </a>
    <h1>Royal Caribbean</h1>
  </header>

  <section class="texto-inicial">
    <p>
      Você conhece a <b>Royal Caribbean</b>? A melhor forma de descobrir os diferenciais e vantagens
      de uma companhia é através de seus navios. Alguns se destacam pelo tamanho, luxo,
      espaços modernos ou ambiente familiar. Cada companhia se diferencia pelas
      características e estilo da sua frota. Aqui você encontra todas as informações sobre cada
      navio.
    </p>
  </section>

  <main>
    <h2>Conheça a Nossa Frota</h2>
    <section class="navios">
      <div class="container">
        <?php foreach ($navios as $navio) : ?>
        <div class='cards'>
          <img src='./ASSETS/<?php echo htmlspecialchars($navio['codigo_navio']); ?>.webp' alt='Imagem do navio <?php echo htmlspecialchars($navio['nome_navio']); ?>'>
          <h1><?php echo htmlspecialchars($navio['nome_navio']); ?></h1>
          <p>Ano de Construção: <?php echo htmlspecialchars($navio['ano_construcao']); ?></p>
          <p>Número de Tripulantes: <?php echo htmlspecialchars($navio['num_tripulantes']); ?></p>
          <p>Número de Passageiros: <?php echo htmlspecialchars($navio['num_passageiros']); ?></p>
          <br>
          <button>
            <a href='./detalhes.php?codigo_navio=<?php echo htmlspecialchars($navio['codigo_navio']); ?>' target='_self'>
              Mais Informações
            </a>
          </button>
        </div>
        <?php endforeach; ?>
      </div>
    </section>

    <h2>Principais Países de Destino</h2>
    <section class="paises">
      <div class="lugares-impar">
        <img src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/labadee-haiti/labadee-haiti-zipline-coast.jpg?$undefined$" alt="Caribe">
        <p><b>Caribe</b>: Cruzeiro para o Caribe e descubra o mergulho do penhasco, a brisa, a areia entre os dedos dos pés, sem se preocupar com o ritmo da vida na ilha...</p>
      </div>
      <br>
      <div class="lugares-impar">
        <img src="https://assets.dm.rccl.com/is/image/RoyalCaribbeanCruises/royal/ports-and-destinations/destinations/italy/italy-napoles-capri-hiking.jpg?$144x810$" alt="Itália">
        <p><b>Itália</b>: Faça um cruzeiro para a Itália e contemple arte e arquitetura de classe mundial, paisagens naturais atemporais e uma cena de comida e vinho contra a qual todos os outros são julgados...</p>
      </div>
      <br>
      <div class="lugares-impar">
        <img src="https://assets.dm.rccl.com/is/image/RoyalCaribbeanCruises/royal/content/destinations/australia-new-zealand/boats-in-new-zealand-bay-with-city.jpg?$144x810$" alt="Nova Zelândia">
        <p><b>Nova Zelândia</b>: A Terra da Longa Nuvem Branca, a Nova Zelândia é conhecida pela cultura Maori, paisagens cheias de vales exuberantes e colinas que se tornaram famosas pelos filmes do Senhor dos Anéis...</p>
      </div>
      <br>
      <div class="lugares-impar">
        <img src="https://assets.dm.rccl.com/is/image/RoyalCaribbeanCruises/royal/content/destinations/australia/melbourne-australia-seaside-road-and-beach.jpg?$144x810$" alt="Austrália">
        <p><b>Austrália</b>: A Austrália oferece o melhor da cidade e do campo, da praia e do mato. Explore a cosmopolita Sydney, lar das águas azul-turquesa de Bondi Beach...</p>
      </div>
      <br>
      <div class="lugares-impar">
        <img src="https://www.ncl.com/sites/default/files/1000x667-santorini-jade-cruise-1hero.jpg" alt="Grécia">
        <p><b>Grécia</b>: Cruzeiro para a Grécia e Ilhas Gregas, onde templos, anfiteatros e aldeias preservados em cinzas vulcânicas ainda revelam os mistérios do passado...</p>
      </div>
      <br>
      <div class="lugares-impar">
        <img src="https://www.ncl.com/sites/default/files/1000x667-ncl-nawilwili-hawaii-2.jpg" alt="Havaí">
        <p><b>Havaí</b>: Apenas a palavra "Havaí" evoca visões de ondas turquesa batendo em areias coloridas, uma rica tapeçaria histórica que é tão polinésia quanto americana...</p>
      </div>
      <br>
      <div class="lugares-impar">
        <img src="https://assets.dm.rccl.com/is/image/RoyalCaribbeanCruises/royal/ports-and-destinations/destinations/singapore/singapore-city-landscape-at-sunset.JPG?$144x600$" alt="Singapura">
        <p><b>Singapura</b>: Um dos destinos mais progressistas do Sudeste Asiático, Singapura é onde os bilionários vão para desabafar, as mentes mais brilhantes do mundo se reúnem...</p>
      </div>
    </section>
    <br>
  </main>

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
</body>

</html>