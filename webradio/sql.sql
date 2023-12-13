-- phpMyAdmin SQL Dump
-- version 4.3.7
-- http://www.phpmyadmin.net
--
-- Host: mysql38-farm15.uni5.net
-- Tempo de geração: 09/12/2023 às 06:59
-- Versão do servidor: 10.6.15-MariaDB-log
-- Versão do PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `webradios40`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `nivel_permissao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `admin`
--

INSERT INTO `admin` (`id`, `email`, `senha`, `nivel_permissao`) VALUES
(1, 'oziel_machado@hotmail.com', '$2y$10$3ysbblTq9CKKolc8P5maF.Y.ihr0JYlxn61ZHp4Lj8qUfTD7Z6QuG', 'admin'),
(2, 'rosivanoficial@gmail.com', 'e51fbcb97e1cb1764caedc850033ae89', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `agenda`
--

CREATE TABLE IF NOT EXISTS `agenda` (
  `id` int(11) NOT NULL,
  `data` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `local` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `agenda`
--

INSERT INTO `agenda` (`id`, `data`, `hora`, `local`, `descricao`) VALUES
(1, '2023-08-31', '22:00', 'Louvor e AdoraÃ§Ã£o', ''),
(2, '2023-08-02', '16:00', 'Louvor e AdoraÃ§Ã£o', 'Louvor e AdoraÃ§Ã£o 2'),
(3, '2023-08-03', '04:30', 'Louvor e AdoraÃ§Ã£o', 'Louvor e AdoraÃ§Ã£o 3'),
(4, '2023-09-30', '19:02', 'Louvor e AdoraÃ§Ã£o', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `aplicativo`
--

CREATE TABLE IF NOT EXISTS `aplicativo` (
  `id` int(11) NOT NULL,
  `google_play` varchar(255) DEFAULT NULL,
  `aplicativo` varchar(255) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `aplicativo`
--

INSERT INTO `aplicativo` (`id`, `google_play`, `aplicativo`, `imagem`) VALUES
(1, NULL, 'i9cast_teste4', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cor_site`
--

CREATE TABLE IF NOT EXISTS `cor_site` (
  `id` int(11) NOT NULL,
  `background` varchar(50) NOT NULL,
  `cor_texto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `cor_site`
--

INSERT INTO `cor_site` (`id`, `background`, `cor_texto`) VALUES
(1, 'bg-success', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `endereco`
--

CREATE TABLE IF NOT EXISTS `endereco` (
  `id` int(11) NOT NULL,
  `cep` varchar(255) DEFAULT NULL,
  `rua` varchar(255) DEFAULT NULL,
  `complemento` varchar(255) DEFAULT NULL,
  `bairro` varchar(255) DEFAULT NULL,
  `numero` varchar(255) DEFAULT NULL,
  `cidade` varchar(255) DEFAULT NULL,
  `estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `endereco`
--

INSERT INTO `endereco` (`id`, `cep`, `rua`, `complemento`, `bairro`, `numero`, `cidade`, `estado`) VALUES
(1, '68903-792', 'Passagem Equatorial', 'Sla A1023', 'AraxÃ¡', '1213', 'MacapÃ¡', 'AP');

-- --------------------------------------------------------

--
-- Estrutura para tabela `favicon`
--

CREATE TABLE IF NOT EXISTS `favicon` (
  `id` int(11) NOT NULL,
  `favicon` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `favicon`
--

INSERT INTO `favicon` (`id`, `favicon`) VALUES
(1, '6ed65583b5fe4249c95964c3c19ff60e.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `fotos`
--

INSERT INTO `fotos` (`id`, `foto`) VALUES
(1, '282aaebeeae9cd481ac87043ef87eda1.png'),
(2, 'd23cf636bad8a064c33912cb146d5976.png'),
(3, 'e8e25e11c7d10ad3403ff5b7793b133b.png'),
(4, '18b5ec3bdcc443e7b38779b7e0f8106d.png'),
(5, 'c0f2b2b7014bed61bfede73b8dce81fa.png'),
(6, 'cdb8e2fabc612f6ea03597d662ab25e8.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos_membros`
--

CREATE TABLE IF NOT EXISTS `fotos_membros` (
  `id` int(11) NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `fotos_membros`
--

INSERT INTO `fotos_membros` (`id`, `foto`, `nome`) VALUES
(1, 'f5f012a362e58126e8ad52dca06729c8.png', ''),
(2, 'eb51c76370aa9623c0040c938d6bb60d.png', 'DOS '),
(3, 'a5c30f71de92596d88adf0ff4934d67a.png', 'SANTOS '),
(4, '7f34512b8fb756333199c066fac08f29.png', 'MACHADO'),
(5, '97ba47d1e7b9c8fcbe0d8dcaaf0feef7.png', 'MACHADO'),
(6, 'd4792907f10aaf4e2563c09e8d5c8f8b.png', 'MACHADO');

-- --------------------------------------------------------

--
-- Estrutura para tabela `horarios`
--

CREATE TABLE IF NOT EXISTS `horarios` (
  `id` int(11) NOT NULL,
  `hora_inicio_M` varchar(255) DEFAULT NULL,
  `hora_terminio_M` varchar(255) DEFAULT NULL,
  `hora_inicio_T` varchar(255) DEFAULT NULL,
  `hora_terminio_T` varchar(255) DEFAULT NULL,
  `hora_inicio_N` varchar(255) DEFAULT NULL,
  `hora_terminio_N` varchar(255) DEFAULT NULL,
  `ativo` int(11) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `horarios`
--

INSERT INTO `horarios` (`id`, `hora_inicio_M`, `hora_terminio_M`, `hora_inicio_T`, `hora_terminio_T`, `hora_inicio_N`, `hora_terminio_N`, `ativo`) VALUES
(1, '23:46', '--:--', '--:--', '--:--', '--:--', '--:--', 1),
(2, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(3, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(5, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(6, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(7, NULL, NULL, NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `informacao_radio`
--

CREATE TABLE IF NOT EXISTS `informacao_radio` (
  `id` int(11) NOT NULL,
  `nome_radio` varchar(255) DEFAULT NULL,
  `ip_streaming` varchar(255) DEFAULT NULL,
  `api_streaming` varchar(255) DEFAULT NULL,
  `porta_streaming` varchar(255) DEFAULT NULL,
  `senha_streaming` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `informacao_radio`
--

INSERT INTO `informacao_radio` (`id`, `nome_radio`, `ip_streaming`, `api_streaming`, `porta_streaming`, `senha_streaming`) VALUES
(1, 'RÃ¡dio RomÃ¢ntica FM', 'srv10.ipstm.net', 'http://ipstm.net/api/VFhwamVFNVVXVDA9KzU=', '37156', 'c3a39b711a28');

-- --------------------------------------------------------

--
-- Estrutura para tabela `logo`
--

CREATE TABLE IF NOT EXISTS `logo` (
  `id` int(11) NOT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `logo`
--

INSERT INTO `logo` (`id`, `logo`) VALUES
(1, 'c4ef400d6f21d85c461070e8749e8bd8.png');

-- --------------------------------------------------------

--
-- Estrutura para tabela `modelo_igreja`
--

CREATE TABLE IF NOT EXISTS `modelo_igreja` (
  `id` int(11) NOT NULL,
  `imagens_noticias` varchar(255) DEFAULT NULL,
  `titulo_noticia` varchar(255) DEFAULT NULL,
  `assunto_noticia` varchar(255) DEFAULT NULL,
  `numero_pastor` varchar(255) DEFAULT NULL,
  `div_ativo` varchar(255) DEFAULT NULL,
  `banner_principal` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `modelo_igreja`
--

INSERT INTO `modelo_igreja` (`id`, `imagens_noticias`, `titulo_noticia`, `assunto_noticia`, `numero_pastor`, `div_ativo`, `banner_principal`) VALUES
(1, 'c302a6b1f010d33066bbb23b0d56928b.jpg', 'Dia dos Pais: o que Ã© importante refletir sobre esta data?', 'Entenda a importÃ¢ncia deste momento especial\nNo domingo, dia 13 de agosto, haverÃ¡ a â€œSanta Ceia da ReaproximaÃ§Ã£oâ€œ. Participe no Templo de SalomÃ£o (Ã s 7h, 9h30 ou 18h) ou em uma Universal mais prÃ³xima (consulte o endereÃ§o aqui).', '42455678678', '0', '3a68b3e719bd52a847f1c29b47abace6.jpeg'),
(2, '81bbda7cef637164fd53c93c7297ee64.jpg', NULL, NULL, NULL, '0', NULL),
(3, '0e00b36d43e3243fbd8ca5a901e5b8c7.jpeg', NULL, NULL, NULL, NULL, NULL),
(4, '3412df652e40c378cdc243634c144d62.jpeg', NULL, NULL, NULL, NULL, NULL),
(5, '550eca3f87c09ebc652d79906199592b.jpeg', NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `nossa_igreja`
--

CREATE TABLE IF NOT EXISTS `nossa_igreja` (
  `id` int(11) NOT NULL,
  `imagem_1` varchar(255) DEFAULT NULL,
  `imagem_2` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `nossa_igreja`
--

INSERT INTO `nossa_igreja` (`id`, `imagem_1`, `imagem_2`) VALUES
(1, 'a01470a8e1323906fa29a917b6e179f8.jpeg', 'd207870f9c7c9743ba396ba2585a833b.jpeg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos_musical`
--

CREATE TABLE IF NOT EXISTS `pedidos_musical` (
  `id` int(11) NOT NULL,
  `nomes` varchar(255) DEFAULT NULL,
  `musicas` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL,
  `hora` time DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `pedidos_musical`
--

INSERT INTO `pedidos_musical` (`id`, `nomes`, `musicas`, `data`, `hora`) VALUES
(1, 'i9Cast', 'Manda um alÃ´!', '2023-08-08', '14:29:35'),
(2, '', '', '2023-08-18', '16:51:19'),
(3, 'Eduardo Barbosa De Oliveira', 'Tim Maia - Ã‰ Primavera', '2023-08-18', '18:26:28'),
(4, '', '', '2023-08-18', '18:26:29'),
(5, '', '', '2023-08-18', '18:26:36'),
(6, '', '', '2023-08-18', '18:26:38');

-- --------------------------------------------------------

--
-- Estrutura para tabela `programacao`
--

CREATE TABLE IF NOT EXISTS `programacao` (
  `id` int(11) NOT NULL,
  `dia` varchar(255) DEFAULT NULL,
  `hora` varchar(255) DEFAULT NULL,
  `programa` varchar(255) DEFAULT NULL,
  `apresentador` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `programacao`
--

INSERT INTO `programacao` (`id`, `dia`, `hora`, `programa`, `apresentador`) VALUES
(1, 'Seg.', '15:00', 'PreparaÃ§Ã£o de ConteÃºdo', 'i9Cast'),
(2, 'Ter.', '18:00', 'TransmissÃ£o de Programas Ao Vivo', 'i9Cast'),
(3, 'Qua.', '16:30', 'Playlist Musical', 'i9cast '),
(4, 'Qua.', '16:00', 'Agendamento de Programas', 'i9Cast'),
(5, 'Qui.', '20:00', 'AtualizaÃ§Ã£o do Site', 'i9Cast'),
(6, 'Sex.', '18:00', 'InteraÃ§Ã£o em Redes Sociais', 'i9Cast'),
(7, 'Sex.', '12:00', 'ProduÃ§Ã£o de Vinhetas e Comerciais:', 'i9Cast'),
(8, 'Sab.', '17:00', 'Monitoramento TÃ©cnico', 'i9Cast'),
(9, 'Sab.', '22:30', 'AnÃ¡lise de AudiÃªncia', 'i9Cast'),
(10, 'Dom.', '16:00', 'Parcerias e PromoÃ§Ãµes', 'i9Cast');

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicidade`
--

CREATE TABLE IF NOT EXISTS `publicidade` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `publicidade`
--

INSERT INTO `publicidade` (`id`, `imagem`, `link`) VALUES
(1, '75fafbd7c765254d20f5520b08688f45.jpg', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(2, 'e6bd26236ab87b1d5d584051da9b89aa.jpg', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(3, '136f3cd3e6185e691a7ce026a0006f61.jpg', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(4, 'c7946abaace5381e1e338ab7828aa2fb.jpg', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(5, '7dd87619d1a9f0b85cb3ee44d58cdaa0.jpg', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(6, 'd871e8420410aeb5ff543a7f78d3dfd0.jpg', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(7, '26d05f984e62ff0e19f28238a0af6b15.jpg', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(8, '8245e6635fe72d20b3064eb7975e6c34.jpg', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(9, 'e0ccd3496f0fe477a0d005b941ea6efd.jpg', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(10, '8b7e9262cb2177dfad755d612ece0bae.jpg', 'https://facebook.com'),
(11, '292ec27acbb08a654cbfa799a3a69138.jpg', 'https://facebook.com'),
(12, '034b3d9a8c079fb85b339f3ceca03b56.jpg', 'https://facebook.com');

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicidade_banner`
--

CREATE TABLE IF NOT EXISTS `publicidade_banner` (
  `id` int(11) NOT NULL,
  `banner` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `publicidade_banner`
--

INSERT INTO `publicidade_banner` (`id`, `banner`, `link`) VALUES
(1, '7bc3068a5699e085ca00ca5aeaad9931.jpg', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!');

-- --------------------------------------------------------

--
-- Estrutura para tabela `publicidade_slide`
--

CREATE TABLE IF NOT EXISTS `publicidade_slide` (
  `id` int(11) NOT NULL,
  `slide` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `publicidade_slide`
--

INSERT INTO `publicidade_slide` (`id`, `slide`, `link`) VALUES
(1, '5d72f46023ec99ccbd95091ff79cc2f2.png', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(2, 'c35392bcda55233f9e50a3953485929b.png', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(3, '50ad8892f6f39ef3dc1ee1db895a9074.png', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!');

-- --------------------------------------------------------

--
-- Estrutura para tabela `slide_logo`
--

CREATE TABLE IF NOT EXISTS `slide_logo` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `slide_logo`
--

INSERT INTO `slide_logo` (`id`, `img`, `link`) VALUES
(1, 'eb9b1fa79d4410e6fab273ccce74f017.png', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(2, 'f5255774e54713bc750cf613ec2bbf7a.png', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!'),
(3, 'f47cc3e36dd68c3c324689b97caaa7a9.png', 'https://api.whatsapp.com/send?phone=5548991366942&text=Quero%20criar%20minha%20web%20r%C3%A1dio!');

-- --------------------------------------------------------

--
-- Estrutura para tabela `sobre`
--

CREATE TABLE IF NOT EXISTS `sobre` (
  `id` int(11) NOT NULL,
  `descricao` text DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `sobre`
--

INSERT INTO `sobre` (`id`, `descricao`) VALUES
(1, 'VersÃ­culo de Ontem\nDeem frutos que mostrem o arrependimento. E nÃ£o comecem a dizer a si mesmos: ''AbraÃ£o Ã© nosso pai''. Pois eu digo que destas pedras Deus pode fazer surgir filhos a AbraÃ£o. O machado jÃ¡ estÃ¡ posto Ã  raiz das Ã¡rvores, e toda Ã¡rvore que nÃ£o der bom fruto serÃ¡ cortada e lanÃ§ada ao fogo".\nLucas 3:8-9');

-- --------------------------------------------------------

--
-- Estrutura para tabela `social`
--

CREATE TABLE IF NOT EXISTS `social` (
  `id` int(11) NOT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `tiktok` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `social`
--

INSERT INTO `social` (`id`, `telefone`, `whatsapp`, `facebook`, `instagram`, `tiktok`, `youtube`, `email`, `twitter`) VALUES
(1, '96991317834', '96991317834', 'https://i9cast.web-radio.online', 'https://i9cast.web-radio.online', 'https://i9cast.web-radio.online', 'https://youtu.be/3vYeQLJ2as4', 'oziel_machado@hotmail.com', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tema`
--

CREATE TABLE IF NOT EXISTS `tema` (
  `id` int(11) NOT NULL,
  `nome` varchar(11) DEFAULT NULL,
  `ativo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `tema`
--

INSERT INTO `tema` (`id`, `nome`, `ativo`) VALUES
(1, 'tema 1', '1'),
(2, 'tema 2', NULL),
(3, 'tema 3', NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `top_10_musicas`
--

CREATE TABLE IF NOT EXISTS `top_10_musicas` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `top_10_musicas`
--

INSERT INTO `top_10_musicas` (`id`, `nome`, `link`) VALUES
(1, 'Solinho Do Brabo -  JapÃ£ozin', 'https://www.palcomp3.com/japaozin/solinho-do-brabo/'),
(2, 'Amor E FÃ© - Hungria Hip Hop', 'https://www.palcomp3.com.br/hungriahiphop/amor-e-fe/'),
(3, 'A Gente Fez Amor - Unha Pintada', 'https://www.palcomp3.com/unhapintadaoficial/a-gente-fez-amor/'),
(4, 'Cidade Vizinha - Henrique e Juliano', 'https://www.palcomp3.com/henriqueejulianooficial/cidade-vizinha/'),
(5, 'Carinha De NenÃ©m - JapÃ£ozin', 'https://www.palcomp3.com/japaozin/carinha-de-nenem/'),
(6, 'Completa a Frase - Henrique e Juliano', 'https://www.palcomp3.com/henriqueejulianooficial/completa-a-frase-completa-ai-part-marilia-mendonca/'),
(7, 'ChaÌ De Chifre - Marcynho SensaÃ§Ã£o', 'https://www.palcomp3.com/marcynhosensacao/cha-de-chifre/'),
(8, 'ConspiraÃ§Ã£o - Tribo da Periferia', 'https://www.palcomp3.com.br/unhapintadaoficial/a-gente-fez-amor/'),
(9, 'Desbeijar Minha Boca - Henrique e Juliano', 'https://www.palcomp3.com/henriqueejulianooficial/desbeijar-minha-boca/'),
(10, 'Alma de Pipa - Tribo da Periferia', 'https://www.palcomp3.com/tribodaperiferia/alma-de-pipa/');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `cpf` int(11) DEFAULT NULL,
  `nivel_permissao` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `usuario`
--

INSERT INTO `usuario` (`id`, `email`, `senha`, `cpf`, `nivel_permissao`) VALUES
(1, 'valmirestrela2010@gmail.com', '$2y$10$e/cXEorpC1N/6CcnbJBDS..RmkXifJ/mdjp4ZT6zVk.610oai5rq.', 18514, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `versiculo_dia`
--

CREATE TABLE IF NOT EXISTS `versiculo_dia` (
  `id` int(11) NOT NULL,
  `versiculo_dia` varchar(255) DEFAULT NULL,
  `versiculo` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Fazendo dump de dados para tabela `versiculo_dia`
--

INSERT INTO `versiculo_dia` (`id`, `versiculo_dia`, `versiculo`) VALUES
(1, '"O ladrÃ£o vem apenas para roubar, matar e destruir; eu vim para que tenham vida e a tenham plenamente."', 'JoÃ£o 10:10');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `aplicativo`
--
ALTER TABLE `aplicativo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cor_site`
--
ALTER TABLE `cor_site`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `favicon`
--
ALTER TABLE `favicon`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos`
--
ALTER TABLE `fotos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `fotos_membros`
--
ALTER TABLE `fotos_membros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `horarios`
--
ALTER TABLE `horarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `informacao_radio`
--
ALTER TABLE `informacao_radio`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `modelo_igreja`
--
ALTER TABLE `modelo_igreja`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `nossa_igreja`
--
ALTER TABLE `nossa_igreja`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos_musical`
--
ALTER TABLE `pedidos_musical`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `programacao`
--
ALTER TABLE `programacao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `publicidade`
--
ALTER TABLE `publicidade`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `publicidade_banner`
--
ALTER TABLE `publicidade_banner`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `publicidade_slide`
--
ALTER TABLE `publicidade_slide`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `slide_logo`
--
ALTER TABLE `slide_logo`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sobre`
--
ALTER TABLE `sobre`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `social`
--
ALTER TABLE `social`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tema`
--
ALTER TABLE `tema`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `top_10_musicas`
--
ALTER TABLE `top_10_musicas`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `versiculo_dia`
--
ALTER TABLE `versiculo_dia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `aplicativo`
--
ALTER TABLE `aplicativo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `cor_site`
--
ALTER TABLE `cor_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `endereco`
--
ALTER TABLE `endereco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `favicon`
--
ALTER TABLE `favicon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `fotos`
--
ALTER TABLE `fotos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `fotos_membros`
--
ALTER TABLE `fotos_membros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `horarios`
--
ALTER TABLE `horarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de tabela `informacao_radio`
--
ALTER TABLE `informacao_radio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `modelo_igreja`
--
ALTER TABLE `modelo_igreja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de tabela `nossa_igreja`
--
ALTER TABLE `nossa_igreja`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `pedidos_musical`
--
ALTER TABLE `pedidos_musical`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT de tabela `programacao`
--
ALTER TABLE `programacao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `publicidade`
--
ALTER TABLE `publicidade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT de tabela `publicidade_banner`
--
ALTER TABLE `publicidade_banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `publicidade_slide`
--
ALTER TABLE `publicidade_slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `slide_logo`
--
ALTER TABLE `slide_logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `sobre`
--
ALTER TABLE `sobre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `social`
--
ALTER TABLE `social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `tema`
--
ALTER TABLE `tema`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de tabela `top_10_musicas`
--
ALTER TABLE `top_10_musicas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de tabela `versiculo_dia`
--
ALTER TABLE `versiculo_dia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
