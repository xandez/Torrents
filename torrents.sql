-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 08-Nov-2018 às 12:16
-- Versão do servidor: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `torrents`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `filme`
--

CREATE TABLE `filme` (
  `id` int(11) NOT NULL,
  `titulo` varchar(220) NOT NULL,
  `desc_torrent` mediumtext NOT NULL,
  `desc_filme` mediumtext NOT NULL,
  `ano_filme` int(11) NOT NULL,
  `audio` varchar(80) NOT NULL,
  `legenda` varchar(80) NOT NULL,
  `formato` varchar(80) NOT NULL,
  `resolucao` varchar(80) NOT NULL,
  `tamanho` varchar(80) NOT NULL,
  `duracao_filme` int(11) NOT NULL,
  `imagem_url` mediumtext NOT NULL,
  `imagem_url2` mediumtext NOT NULL,
  `link_trailer` mediumtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `filme`
--

INSERT INTO `filme` (`id`, `titulo`, `desc_torrent`, `desc_filme`, `ano_filme`, `audio`, `legenda`, `formato`, `resolucao`, `tamanho`, `duracao_filme`, `imagem_url`, `imagem_url2`, `link_trailer`) VALUES
(4, 'Jumanji - Bem-Vindo à Selva Torrent', 'Download Jumanji - Bem-Vindo à Selva 1080p 720p BDRip Bluray FullHD HD torrent (2018) Baixar Filme Dublado \r\nCompleto com qualidade de áudio e vídeo 10/10 e no formato MKV MP4 grátis.', 'Jumanji - Bem-Vindo à Selva Torrent Sequência tão esperada do filme Jumanji. Quatro adolescentes encontram um videogame cuja ação se passa numa floresta tropical. Empolgados com o jogo, eles escolhem seus avatares para o desafio, mas um evento inesperado faz com que sejam transportados para dentro do universo fictício, transformando-se nos personagens da aventura. Faça o download de Jumanji - Bem-Vindo à Selva via torrent.', 2018, 'Dublado / Inglês / Português 5.1', 'Português', 'MKV / MP4', '1080p / 720p / BDRip / Bluray / FullHD / HD ', '1.09 GB / 2.18 GB / 9.05 GB', 119, 'https://1.bp.blogspot.com/-Wk2FbdtrGkw/Wp2-PETCizI/AAAAAAAAJMI/sHzIaN48mM030H42f1-sffaB8yVHO0s6QCLcBGAs/s1600/Jumanji%2BBem-Vindo%2B%25C3%25A0%2BSelva%2Btorrent%2Bdownload%2Bdublado%2Bbluray.jpg', 'https://4.bp.blogspot.com/-XvyR7Q1SN3k/Wp2-PFHpXBI/AAAAAAAAJMM/VmhZy2C-0i8xUPE_Dc0WPuVYmKTK5rm8QCLcBGAs/s1600/Filme%2BJumanji%2BBem-Vindo%2B%25C3%25A0%2BSelva%2Btorrent%2Bdownload%2Bdublado%2Bbluray.jpg', 'www.youtube.com/embed/qobswH4eqIc'),
(2, 'Mulher-Maravilha Torrent', 'Download Mulher-Maravilha 1080p 720p FullHD HD HDRIP torrent (2017) Baixar Filme Dublado Completo com qualidade de áudio e vídeo 10/10 e no formato MKV MP4 grátis.', 'Mulher-Maravilha Torrent Agora totalmente dublado e com excelente qualidade de imagem e som. Treinada desde cedo para ser uma guerreira imbatível, Diana Prince (Gal Gadot) nunca saiu da paradisíaca ilha em que é reconhecida como princesa das Amazonas. Quando o piloto Steve Trevor (Chris Pine) se acidenta e cai numa praia do local, ela descobre que uma guerra sem precedentes está se espalhando pelo mundo e decide deixar seu lar certa de que pode parar o conflito. Lutando para acabar com todas as lutas, Diana percebe o alcance de seus poderes e sua verdadeira missão na Terra. Faça o download de Mulher-Maravilha via torrent.', 2017, 'Dublado / Inglês / Português 5.1', 'Português', 'MKV / MP4', '1080p / 720p / FullHD / HD / HDRIP ', '1.44 GB / 5.0 GB', 141, 'https://3.bp.blogspot.com/-7vZblJvSrVc/WaTFVpKqrvI/AAAAAAAAFCg/kLMIB8-BIb8Ph77wPxuoNx-854AC3jYVACLcBGAs/s1600/Mulher-maravilha-torrent-2017-download-dublado-bluray-1080p-720p.jpg', 'https://2.bp.blogspot.com/-KpRK_SSHRlE/WaTFVtRlJ2I/AAAAAAAAFCk/E9P5CJDH3846lkIqzeOYcywFNeY8ZLbDgCLcBGAs/s1600/Filme-Mulher-maravilha-torrent-2017-download-dublado-bluray-1080p-720p.jpg', 'www.youtube.com/embed/I6Gj8Fvukk4'),
(5, 'Thor - Ragnarok Torrent', 'Download Thor - Ragnarok 1080p 720p BDRip Bluray FullHD HD torrent (2018) Baixar Filme Dublado Completo com qualidade de áudio e vídeo 10/10 e no formato MKV MP4 grátis.', 'Thor - Ragnarok Torrent Thor 3 Ragnarok dublado com excelente qualidade de bluray para download via torrent. Thor (Chris Hemsworth) está preso do outro lado do universo. Ele precisa correr contra o tempo para voltar a Asgard e parar o Ragnarok, a destruição de seu mundo, que está nas mãos da poderosa e implacável vilã Hela (Cate Blanchett). Em sua jornada até Asgard ele e seu irmão Loki (Tom Hiddleston) vão parar em um planeta desconhecido onde Thor encontra e enfrenta o poderoso Hulk (Mark Ruffalo). Faça o download de Thor - Ragnarok via torrent.', 2018, 'Dublado / Inglês / Português', 'Português', 'MKV / MP4', '1080p / 720p / BDRip / Bluray / FullHD / HD ', '1.07 GB / 2.34 GB', 130, 'https://4.bp.blogspot.com/-tN1xKVCYm4s/WmRU3sS0OdI/AAAAAAAAHhU/kj6Yx5oLG5Mn2EdcjlH3E_WfPQ2lo9VNACLcBGAs/s1600/Thor-Ragnarok-torrent-dublado-bluray-2018.jpg', 'https://2.bp.blogspot.com/-i6W2puFERdg/WmRU3NgpqjI/AAAAAAAAHhQ/x-OZNqHRpbEJlD6j6DVKjvQdoZ2nLkd8gCLcBGAs/s1600/Thor-Ragnarok-torrent-dublado-bluray-2018-1080p-720p.jpg', 'www.youtube.com/embed/UvNnqWLruXA'),
(1, 'Capitão América 3 - Guerra Civil Torrent', 'Download Capitão América 3 - Guerra Civil 1080p 720p BDRip FullHD HD torrent (2016) Baixar Filme Dublado com qualidade de áudio e vídeo 10/10 e no formato MKV MP4 grátis.', 'Capitão América 3 - Guerra Civil Torrent Steve Rogers (Chris Evans) é o atual líder dos Vingadores, super-grupo de heróis formado por Viúva Negra (Scarlett Johansson), Feiticeira Escarlate (Elizabeth Olsen), Visão (Paul Bettany), Falcão (Anthony Mackie) e Máquina de Combate (Don Cheadle). O ataque de Ultron fez com que os políticos buscassem algum meio de controlar os super-heróis, já que seus atos afetam toda a humanidade. Tal decisão coloca o Capitão América em rota de colisão com Tony Stark (Robert Downey Jr.), o Homem de Ferro. Faça o download de Capitão América 3 - Guerra Civil via torrent.', 2016, 'Dublado / Inglês / Português', 'Português', 'MKV / MP4', '1080p / 720p / BDRip / FullHD / HD', '1.70 GB / 3.0 GB', 146, 'https://i.imgur.com/qMszTYV.jpg', 'https://i.imgur.com/YHIjZwJ.jpg', 'www.youtube.com/embed/FRLYZn5PGuA'),
(3, 'Homem-Aranha - De Volta Ao Lar Torrent', 'Download Homem-Aranha - De Volta Ao Lar 1080p 720p BDRip Bluray FullHD HD torrent (2017) Baixar Filme Dublado Completo e grátis com qualidade de áudio e vídeo 10/10 e no formato MKV MP4 grátis.', 'Homem-Aranha - De Volta Ao Lar Torrent Agora totalmente dublado dual áudio 5.1 e com qualidade de bluray 1080p e 720p Depois de atuar ao lado dos Vingadores, chegou a hora do pequeno Peter Parker (Tom Holland) voltar para casa e para a sua vida, já não mais tão normal. Lutando diariamente contra pequenos crimes nas redondezas, ele pensa ter encontrado a missão de sua vida quando o terrível vilão Abutre (Michael Keaton) surge amedrontando a cidade. O problema é que a tarefa não será tão fácil como ele imaginava. Faça o download de Homem-Aranha - De Volta Ao Lar via torrent.', 2017, 'Dublado / Inglês / Português', 'Português', 'MKV / MP4', '1080p / 720p / BDRip / Bluray / FullHD / HD1.0 GB / 10 GB', '1.0 GB / 10 GB', 133, 'https://1.bp.blogspot.com/-QYajE9K0Vg0/WdQcRHfw4tI/AAAAAAAAGNY/nyLjRwpQ0KYVuxCHCNXP0I0v1vocywy3QCLcBGAs/s1600/homem-aranha-de-volta-ao-lar-torrent-2017-download-dublado-dual-audio-5.1-bluray-1080p-720p.jpg', 'https://4.bp.blogspot.com/-c39kxA6gTMc/WcpTdSvKJJI/AAAAAAAAGAs/IB1DUkfQPoM4RzSI6tiJCgBBwJF7OnJ-wCLcBGAs/s1600/Filme-Homem-Aranha-De-Volta-ao-Lar-torrent-2017-download-bluray-1080p-720p.jpg', 'www.youtube.com/embed/ntE5Jmsol70');

-- --------------------------------------------------------

--
-- Estrutura da tabela `subcategoria`
--

CREATE TABLE `subcategoria` (
  `categoria` varchar(30) CHARACTER SET utf8 NOT NULL,
  `subcategoria` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=armscii8 COLLATE=armscii8_bin;

--
-- Extraindo dados da tabela `subcategoria`
--

INSERT INTO `subcategoria` (`categoria`, `subcategoria`) VALUES
('Filmes', 'Ação'),
('Filmes', 'Animação'),
('Filmes', 'Anime'),
('Filmes', 'Aventura'),
('Filmes', 'Clássicos\r\n'),
('Filmes', 'Comédia\r\n'),
('Filmes', 'Comédia romântica\r\n'),
('Filmes', 'Corrida\r\n'),
('Filmes', 'Documentário\r\n'),
('Filmes', 'Drama\r\n'),
('Filmes', 'Educativo\r\n'),
('Filmes', 'Família\r\n'),
('Filmes', 'Fantasia\r\n'),
('Filmes', 'Faroeste\r\n'),
('Filmes', 'Ficção\r\n'),
('Filmes', 'Gospel\r\n'),
('Filmes', 'Heróis\r\n'),
('Filmes', 'Musical\r\n'),
('Filmes', 'Nacional\r\n'),
('Filmes', 'Romance\r\n'),
('Filmes', 'Suspense\r\n'),
('Filmes', 'Terror\r\n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
