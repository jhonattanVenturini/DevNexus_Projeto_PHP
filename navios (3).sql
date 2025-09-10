-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04/12/2024 às 15:55
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `db_royal`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `navios`
--

CREATE TABLE `navios` (
  `codigo_navio` char(3) NOT NULL,
  `nome_navio` varchar(100) NOT NULL,
  `descricao` text DEFAULT NULL,
  `ano_construcao` int(11) DEFAULT NULL,
  `cabine_acessivel` text DEFAULT NULL,
  `largura` float DEFAULT NULL,
  `comprimento` float DEFAULT NULL,
  `toneladas` float DEFAULT NULL,
  `velocidade_navegacao` float DEFAULT NULL,
  `num_passageiros` int(11) DEFAULT NULL,
  `num_tripulantes` int(11) DEFAULT NULL,
  `num_decks` int(11) DEFAULT NULL,
  `num_cabines` int(4) DEFAULT NULL,
  `idiomas_abordo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `navios`
--

INSERT INTO `navios` (`codigo_navio`, `nome_navio`, `descricao`, `ano_construcao`, `cabine_acessivel`, `largura`, `comprimento`, `toneladas`, `velocidade_navegacao`, `num_passageiros`, `num_tripulantes`, `num_decks`, `num_cabines`, `idiomas_abordo`) VALUES
('N01', 'Star of the Seas', 'Descubra o novo e deslumbrante Star of the Seas, o segundo navio da classe Icon da Royal Caribbean, onde você se divertirá como nunca antes!', 2025, 'não', 48.5, 365, 250800, 25, 7514, 2350, 20, 2805, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N02', 'Icon of the Seas', 'Descubra o impressionante Icon of the Seas, o primeiro navio da classe Icon da Royal Caribbean, repleto de novas acomodações, o maior parque aquático em alto mar e a primeira piscina suspensa no mar!', 2024, 'não', 48.5, 365, 250800, 25, 7514, 2350, 20, 2805, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N03', 'Utopia of the Seas', 'O Utopia of the Seas, da Royal Caribbean, é um navio com 18 decks, mais de 40 opções de comida, 17 tobogãs e 4 piscinas. Todos os roteiros incluem a ilha Perfect Day at Coco Cay para uma experiência inesquecível.', 2024, 'não', 64.27, 362, 236860, 25, 5668, 2290, 20, 2834, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N04', 'Wonder of the Seas', 'O Wonder of the Seas, o maior navio do mundo, começa a operar em março de 2022 no Caribe e, em maio, vai para o Mediterrâneo. Oferece diversas atrações, como o Wonder Playscape e o Ultimate Abyss.', 2022, 'sim', 64, 362, 236857, 22, 6988, 2300, 20, 2867, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N05', 'Odyssey of the Seas', 'O Odyssey of the Seas é um navio de cruzeiro da Royal Caribbean, lançado em 2021, que oferece diversas opções de entretenimento e gastronomia, principalmente em itinerários pelo Caribe.', 2021, 'sim', 41, 348, 168800, 22, 5498, 1550, 16, 2105, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N06', 'Spectrum of the Seas', 'O Spectrum of the Seas, da Royal Caribbean, é um navio com atrações como o North Star, FlowRider e uma Ultimate Family Suite, além de opções para o público chinês, como Karaokê e o Restaurante Sichuan Red.', 2019, 'sim', 49, 347, 169379, 22, 5622, 1551, 16, 2137, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N07', 'Symphony of the Seas', 'O Symphony of the Seas é o maior navio de cruzeiro do mundo, com atrações emocionantes, opções gastronômicas e um deck repleto de plantas, proporcionando férias inesquecíveis.', 2018, 'sim', 65.6, 362, 228, 22, 6870, 2175, 18, 2759, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N08', 'Ovation of the Seas', 'O Ovation of the Seas, inaugurado em 2016, oferece tecnologia avançada, entretenimento, atividades e gastronomia, assim como seus navios gêmeos, Quantum e Anthem of the Seas, para proporcionar uma viagem inesquecível.', 2016, 'sim', 41, 348, 167800, 22, 4905, NULL, 16, 2090, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N09', 'Anthem of the Seas', 'O Anthem of the Seas, da classe Quantum, destaca-se por suas cabines modernas, tecnologia inovadora e excelentes restaurantes, com a colaboração de especialistas para aprimorar o design e as comodidades a bordo.', 2015, 'sim', 65, 348, 167800, 22.6, 4180, 2384, 16, 2090, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N10', 'Harmony of the Seas', 'O Harmony of the Seas℠ combina adrenalina e relaxamento, com serviços personalizados e entretenimento da Broadway, além de opções de bem-estar como spa e yoga. É um navio moderno ideal para escapar da rotina.', 2015, 'sim', 47, 362, 227000, 23, 5479, 2115, 18, 2747, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N11', 'Quantum of the Seas', 'O novo Quantum of the Seas, que navegará a partir de Nova York, promete elevar as viagens de cruzeiro com suas cabines modernas, tecnologia inovadora, instalações espetaculares e excelentes restaurantes.', 2014, 'sim', 41, 348, 167800, 22, 4905, 1500, 16, 2090, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N12', 'Allure of the Seas', 'Parte da classe Oasis, conhecido por seu entretenimento de ponta e vasta gama de atividades.', 2010, 'sim', 66, 362, 225282, 22, 6780, 2200, 18, 2747, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N13', 'Oasis of the Seas', 'Um dos navios mais icônicos da classe Oasis, conhecido por suas áreas temáticas e uma vasta gama de atividades e entretenimento.', 2009, 'sim', 66, 361, 226838, 22, 6780, 2200, 18, 2742, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N14', 'Liberty of the Seas', 'Parte da classe Freedom, conhecido por suas emocionantes atividades a bordo e opções de entretenimento.', 2007, 'sim', 56, 339, 155889, 21.6, 4960, 1360, 15, 1817, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N15', 'Independence of the Seas', 'Parte da classe Freedom, oferecendo uma variedade de entretenimento e atividades para todas as idades.', 2008, 'sim', 56, 339, 155889, 21.6, 4960, 1360, 15, 1817, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N16', 'Freedom of the Seas', 'Parte da classe Freedom, com diversas opções de entretenimento e atividades para todas as idades.', 2006, 'sim', 56, 339, 154407, 21.6, 4960, 1360, 15, 1817, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N17', 'Jewel of the Seas', 'Parte da classe Radiance, conhecido por suas vistas panorâmicas e atividades variadas a bordo.', 2004, 'sim', 32, 293, 90090, 25, 2702, 842, 13, 1055, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N18', 'Mariner of the Seas', 'Parte da classe Voyager, conhecido por suas atividades emocionantes e variadas opções de entretenimento.', 2003, 'sim', 39, 311, 139863, 22, 3807, 1185, 15, 1557, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N19', 'Serenade of the Seas', 'Parte da classe Radiance, conhecido por suas vistas panorâmicas e variedade de opções de entretenimento.', 2003, 'sim', 32, 293, 90090, 25, 2702, 842, 13, 1055, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N20', 'Brilliance of the Seas', 'Parte da classe Radiance, conhecido por suas vistas espetaculares e design elegante com muitos espaços envidraçados.', 2002, 'sim', 32, 293, 90090, 25, 2543, 848, 13, 1070, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N21', 'Navigator of the Seas', 'Parte da classe Voyager, com uma variedade de opções de entretenimento e atividades para todas as idades.', 2002, 'sim', 39, 311, 139999, 22, 3807, 1213, 15, 1557, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N22', 'Adventure of the Seas', 'Parte da classe Voyager, oferecendo uma ampla gama de atividades e entretenimento para todas as idades.', 2001, 'sim', 39, 311, 137276, 22, 3807, 1185, 15, 1557, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N23', 'Radiance of the Seas', 'Parte da classe Radiance, com grandes janelas e áreas envidraçadas que oferecem vistas espetaculares do mar.', 2001, 'sim', 32, 293, 90090, 25, 2501, 859, 13, 1071, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N24', 'Explorer of the Seas', 'Parte da classe Voyager, oferecendo uma ampla gama de atividades e entretenimento para todas as idades.', 2000, 'sim', 39, 311, 137308, 22, 3840, 1185, 15, 1557, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N25', 'Voyager of the Seas', 'Parte da classe Voyager, um dos primeiros navios a introduzir muitas das inovações que definem a experiência de cruzeiro moderno.', 1999, 'sim', 39, 311, 138194, 22, 3840, 1185, 15, 1557, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N26', 'Vision of the Seas', 'Parte da classe Vision, conhecido por seu design elegante e uma variedade de atividades e entretenimento.', 1998, 'sim', 32, 279, 78340, 22, 2514, 765, 12, 1000, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N27', 'Enchantment of the Seas', 'Parte da classe Vision, conhecido por suas atividades divertidas e ambiente acolhedor.', 1997, 'sim', 32, 301, 82910, 22, 2446, 765, 12, 1000, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N28', 'Rhapsody of the Seas', 'Parte da classe Vision, conhecido por seu ambiente relaxante e atividades variadas.', 1997, 'sim', 32, 279, 78878, 22, 2416, 765, 12, 1020, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português'),
('N29', 'Grandeur of the Seas', 'Parte da classe Vision, conhecido por seu ambiente acolhedor e uma variedade de atividades a bordo.', 1996, 'sim', 32, 279, 74140, 22, 2446, 760, 12, 996, 'Inglês, Espanhol, Francês, Alemão, Italiano, Mandarim, Japonês, Coreano, Português');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `navios`
--
ALTER TABLE `navios`
  ADD PRIMARY KEY (`codigo_navio`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
