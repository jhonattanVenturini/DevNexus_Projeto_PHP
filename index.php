<?php 
  $sql = " SELECT * FROM navios ";
  $sql = $sql . " ORDER BY codigo_navio ASC";
  $card = ""; 
  $contador = 0;
  $servidor = "localhost"; 
  $usuario = "root"; 
  $senha = ""; 
  $banco = "db_royal"; 
  $conexao = mysqli_connect($servidor, $usuario, $senha, $banco); $rs = mysqli_query($conexao, $sql); 

  while ($registro = mysqli_fetch_assoc($rs)) { 

    $codigo_navio = htmlspecialchars($registro["codigo_navio"]); 
    $nome_navio = htmlspecialchars($registro["nome_navio"]); 
    $descricao = htmlspecialchars($registro["descricao"]); 
    $ano_construcao = htmlspecialchars($registro["ano_construcao"]); 
    $cabine_acessivel = htmlspecialchars($registro["cabine_acessivel"]); 
    $largura = htmlspecialchars($registro["largura"]); 
    $comprimento = htmlspecialchars($registro["comprimento"]); 
    $toneladas = htmlspecialchars($registro["toneladas"]); 
    $velocidade_navegacao = htmlspecialchars($registro["velocidade_navegacao"]); 
    $num_passageiros = htmlspecialchars($registro["num_passageiros"]); 
    $num_tripulantes = htmlspecialchars($registro["num_tripulantes"]); 
    $num_decks = htmlspecialchars($registro["num_decks"]); 
    $num_cabines = htmlspecialchars($registro["num_cabines"]); 
    $idiomas_abordo = htmlspecialchars($registro["idiomas_abordo"]); 

    $card .= '<div class="cards">';
    $card .= '<h1>' . $nome_navio . '</h1>';
    $card .= '<img src="./ASSETS/' . $codigo_navio . '.webp" alt="Imagem do navio">'; // Caminho da imagem corrigido
    $card .= '<p>Ano de Construção: ' . $ano_construcao . '</p>';
    $card .= '<p>Número de Tripulantes: ' . $num_tripulantes . '</p>';
    $card .= '<p>Número de Passageiros: ' . $num_passageiros . '</p>';
    $card .= '<br>';
    $card .= '<button><a href="./detalhes.php?codigo_navio=' . $codigo_navio . '" target="_self">Mais Informações</a></button>';
    $card .= '</div>';
}
 
 mysqli_free_result($rs); mysqli_close($conexao); ?>

 
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./CSS/index.css">
    <link rel="icon" type="image/x-icon" href="./ASSETS/LOGO.webp">
    <title>Home</title>
</head>
<body>
<header>
    <a href="index.php">
    <img src="https://www.royalcaribbean.com/content/dam/royal/resources/new-logo-rcg/RCI_Crown%2BAnchor_Symbol_White.png" alt=""> </a>
    <h1>Royal Caribbean</h1>
</header>
<main>
<section class="topo"><img src="https://assets.dm.rccl.com/is/image/RoyalCaribbeanCruises/royal/ships/icon/assets/icon-of-the-seas-aerial-sea-day-crop-water.jpg?$1440x360$" alt=""></section>

        <section class="texto-inicial">
            <p>
                Você conhece a <b>Royal Caribbean</b>? A melhor forma de descobrir os diferenciais e vantagens
                de uma companhia é através de seus navios. Alguns se destacam pelo tamanho, luxo,
                espaços modernos ou ambiente familiar. Cada companhia se diferencia pelas
                características e estilo da sua frota. Aqui você encontra todas as informações sobre cada
                navio.
            </p>
            <section class="navios">
    <div class="container">
        <?php echo $card; ?> <!-- Corrigido para exibir os cards corretamente -->
</div>
</section>

        <h2> 7 Principais países de destino </h2>
        <section class="paises">

            <div class="lugares-impar">
                <img src="https://rccl-h.assetsadobe.com/is/image/content/dam/royal/data/ports/labadee-haiti/labadee-haiti-zipline-coast.jpg?$undefined$" alt="">
                <p><b>Caribe</b>: Cruzeiro para o Caribe e descubra o mergulho do penhasco, a brisa, a areia entre os dedos dos pés, sem se preocupar com o ritmo da vida na ilha. Centenas de anos de história deixaram ruínas na selva dos tempos antigos e cidades coloniais vibrantes com edifícios pintados de forma brilhante que refletem uma história fascinante. Veja montanhas imponentes como Petit Piton em Santa Lúcia, explore as exuberantes florestas tropicais de Belize ou aumente sua adrenalina enquanto percorre as copas das árvores de Labadee ou Honduras. Se a natureza calma e contemplativa é mais sua praia, passe o dia admirando cachoeiras em cascata na Jamaica e os vivos recifes de coral de Bonaire, lar de arraias manta e peixes papagaios. Descubra a magia com um cruzeiro pelo Caribe.</p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://assets.dm.rccl.com/is/image/RoyalCaribbeanCruises/royal/ports-and-destinations/destinations/italy/italy-napoles-capri-hiking.jpg?$144x810$" alt="">
                <p><b>Itália</b>: Faça um cruzeiro para a Itália e contemple arte e arquitetura de classe mundial, paisagens naturais atemporais e uma cena de comida e vinho contra a qual todos os outros são julgados. Caminhe pelas ruas animadas da Cidade Eterna de Roma e veja o Coliseu em sua enorme e antiga glória. Confira o inconfundível Duomo ('cúpula') de Florença e prove o seu caminho através das vinícolas das colinas vizinhas de Chianti. Ande de gôndola pelos canais serpentinos de Veneza, veja os brilhantes mosaicos de ouro da Basílica de São Marcos ou caminhe o vulcânico Monte Vesúvio e reabasteça com uma pizza napolitana clássica em Nápoles. Descubra a magia com um cruzeiro na Itália.
                </p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://assets.dm.rccl.com/is/image/RoyalCaribbeanCruises/royal/content/destinations/australia-new-zealand/boats-in-new-zealand-bay-with-city.jpg?$144x810$" alt="">
                <p><b>Nova Zelândia</b>: A Terra da Longa Nuvem Branca, a Nova Zelândia é conhecida pela cultura Maori, paisagens cheias de vales exuberantes e colinas que se tornaram famosas pelos filmes do Senhor dos Anéis e picos dramáticos de montanhas glaciais. Navegue até a Nova Zelândia e siga para o Parque Nacional Fiordland, listado como Patrimônio Mundial, lar dos poderosos fiordes de Milford Sound. Já imaginou pisar na tundra? Confira as geleiras Franz Josef e Foz na Ilha do Sul, duas das geleiras mais acessíveis do mundo. Obtenha sua dose de cultura urbana no ventoso Wellington, Auckland e Christchurch. Os viciados em adrenalina vão querer fazer uma linha aérea para Queenstown, nas margens do Lago Wakatipu, onde você tem acesso a estações de esqui, bungee jumping e jet boat. </p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://assets.dm.rccl.com/is/image/RoyalCaribbeanCruises/royal/content/destinations/australia/melbourne-australia-seaside-road-and-beach.jpg?$144x810$" alt="">
                <p><b>Austrália</b>: A Austrália oferece o melhor da cidade e do campo, da praia e do mato. Explore a cosmopolita Sydney, lar das águas azul-turquesa de Bondi Beach e da arquitetura única Sydney Opera House. Navegue para a Austrália e visite Queensland para conhecer as Ilhas Whitsunday, onde você pode mergulhar para ver a Grande Barreira de Corais, listada Patrimônio Mundial da UNESCO, o maior organismo vivo do mundo. Para uma autêntica aventura australiana, vá para o outback: Confira o Parque Nacional Uluru-Kata Tjuta, com sua cúpa vermelha conhecida como Ayers Rock.</p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://www.ncl.com/sites/default/files/1000x667-santorini-jade-cruise-1hero.jpg" alt="">
                <p><b>Grécia</b>: Cruzeiro para a Grécia e Ilhas Gregas, onde templos, anfiteatros e aldeias preservados em cinzas vulcânicas ainda revelam os mistérios do passado. Desfrute de pôr do sol dramático em águas translúcidas enquanto explora os penhascos brancos de Milos, ou transporte-se para o passado antigo em ruínas encontradas em quase todas as ilhas gregas. O Templo de Aphaia paira sobre Aegina, enquanto a Ilha Delos abriga o incrível Terraço dos Leões. Você encontrará a mundialmente famosa Acrópole na Ilha de Rodes e o Akrotiri em Santorini. Mas não se esqueça de ver o sol nascer sobre o Egeu enquanto visita os renomados moinhos de vento de Mykonos. Descubra a magia com um cruzeiro pela Grécia e pelas Ilhas Gregas. </p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://www.ncl.com/sites/default/files/1000x667-ncl-nawilwili-hawaii-2.jpg" alt="">
                <p><b>Havaí</b>: Apenas a palavra "Havaí" evoca visões de ondas turquesa batendo em areias coloridas, uma rica tapeçaria histórica que é tão polinésia quanto americana e uma cultura acolhedora que você pode destilar em uma única palavra: Aloha. Assim que chegar, trace a história de Pearl Harbor em Oahu, onde você pode visitar navios de guerra e ver o memorial daquele dia fatídico em 1941. Cruzeiro para o Havaí e vá para a Ilha Grande para uma experiência diferente de qualquer outra. Persiga as cachoeiras nas encostas de Mauna Kea. Ou aproveite o sol e surfe nas margens remotas de Kauai e Maui. Descubra a magia com um cruzeiro havaiano.</p>
            </div>
            <br>
            <div class="lugares-impar">
                <img src="https://assets.dm.rccl.com/is/image/RoyalCaribbeanCruises/royal/ports-and-destinations/destinations/singapore/singapore-city-landscape-at-sunset.JPG?$144x600$" alt="">
                <p><b>Singapura</b>: Um dos destinos mais progressistas do Sudeste Asiático, Singapura é onde os bilionários vão para desabafar, as mentes mais brilhantes do mundo se reúnem para discutir a tecnologia do futuro e a história multicultural é abraçada através da arte, arquitetura e histórias. Faça um cruzeiro para Singapura para sentir a umidade suave da Reserva Natural de Bukit Timah, uma floresta tropical que domina o centro do país, ou dê um passeio pela Haji Lane no centro da cidade, um bairro eclético com murais malaios ousados e coloridos em todas as paredes. Não perca o Gardens on the Bay, lar de superárvores futuristas, e caminhe pela OCBC Skyway de 22 metros de altura com vista para a cidade. Descubra a magia com um cruzeiro em Singapura.</p>
            </div>

<br>
        </section>
        <br>
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
