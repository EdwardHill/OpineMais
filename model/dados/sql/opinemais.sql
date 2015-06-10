-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 09-Jun-2015 às 22:45
-- Versão do servidor: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `opinemais`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario`
--

CREATE TABLE IF NOT EXISTS `comentario` (
`id_comentario` int(11) NOT NULL,
  `mensagem` varchar(1000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentario`
--

INSERT INTO `comentario` (`id_comentario`, `mensagem`) VALUES
(3, 'Você deveria se virar'),
(4, 'Cade meu terreiro'),
(5, 'Quero não'),
(6, 'Mais agora eu queero'),
(7, 'Não quero'),
(9, 'eu mesmo não quero'),
(10, 'mais agora eu quero'),
(11, 'Eu achei muito bom na verdade'),
(12, 'Tchau para todos'),
(13, 'Cara, você não sabe'),
(14, 'eu sei amigo'),
(15, 'Algum discorda'),
(16, 'Não quero saber'),
(17, 'Quem discorda'),
(18, 'Eu discordo'),
(19, 'Uma qualificacao não deve ser assim'),
(20, 'Você discordam'),
(21, 'treretreafdsafdsa'),
(23, 'testestestes'),
(24, ''),
(25, 'fsfdsafdsafdsa'),
(26, ''),
(27, 'Teste de edição testestestestestestestestestestestestes tretretretretre');

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario_opiniao_usuario`
--

CREATE TABLE IF NOT EXISTS `comentario_opiniao_usuario` (
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `id_opiniao` int(11) NOT NULL DEFAULT '0',
  `id_comentario` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentario_opiniao_usuario`
--

INSERT INTO `comentario_opiniao_usuario` (`id_usuario`, `id_opiniao`, `id_comentario`) VALUES
(1, 6, 17),
(2, 6, 18),
(2, 6, 19),
(1, 7, 9),
(1, 7, 10),
(3, 7, 14),
(3, 8, 12),
(1, 9, 15),
(1, 9, 16),
(2, 10, 20),
(1, 12, 27),
(1, 17, 25),
(1, 17, 26);

-- --------------------------------------------------------

--
-- Estrutura da tabela `opiniao`
--

CREATE TABLE IF NOT EXISTS `opiniao` (
`id_opiniao` int(11) NOT NULL,
  `mensagem` varchar(1000) NOT NULL,
  `qualificacao` varchar(50) NOT NULL,
  `nota` float DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `opiniao`
--

INSERT INTO `opiniao` (`id_opiniao`, `mensagem`, `qualificacao`, `nota`, `id_usuario`, `id_produto`) VALUES
(4, 'Ele é bom', '', 0, 1, 12),
(5, 'É bom mais ou menos', 'bom', 0, 1, 10),
(6, 'Ta bom', 'bom', 0, 1, 6),
(7, 'É melhor do que nada', 'bom', 0, 2, 7),
(8, 'So qualifico coisas boas, e essa não é uma delas', 'ruim', 0, 3, 7),
(9, 'Molhor do que nada nada dadadsafdsafdsa', 'ruim', 0, 1, 7),
(10, 'Não quero mais nada', 'bom', 0, 2, 6),
(11, 'Axei uma porcaria', 'ruim', 0, 3, 6),
(12, 'Gostei desse produto', 'bom', 0, 1, 5),
(16, 'Digite sua opinião', '', 0, 1, 2),
(17, 'fdsfds', 'bom', 0, 1, 3),
(19, 'joguei zerei e não gostei', 'ruim', 0, 1, 13),
(20, 'Não presta', 'bom', 0, 3, 13),
(22, 'Não presta, não recomendo jogar', 'ruim', 0, 3, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
`id_produto` int(11) NOT NULL,
  `nome_produto` varchar(100) NOT NULL,
  `detalhes` varchar(500) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `qualificacao_positiva` int(11) DEFAULT NULL,
  `qualificacao_negativa` int(11) DEFAULT NULL,
  `nota_media` float DEFAULT NULL,
  `id_usuario` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `detalhes`, `categoria`, `marca`, `imagem`, `qualificacao_positiva`, `qualificacao_negativa`, `nota_media`, `id_usuario`) VALUES
(1, 'Play Station 3', 'Play Station 3 é bacana pra comprar ainda??', 'Eletrodomestico', 'Sony', '1433608537.jpg', 2, 0, 0, 1),
(2, 'SmartTV 3D 64', 'Quero saber se vale a pena comprar a SmartTV modelo 342432dsfsd ', 'TV & Smart TV', 'Samsung', '1433629042.jpg', 0, 0, 0, 1),
(3, 'Note Book  TZ4433', 'Quero comprar o NoteBook AZUS TZ4433 mais não sei se ele é bom. opinem por favor', 'NoteBooks', 'AZUS', '1433686511.jpg', 0, 0, 0, 1),
(4, 'Game UFC Combate', 'Ola pessoal, Opinem sobre o game UFC Combate.', 'Games & Consoles', 'SPORTS', '1433686971.jpg', 0, 0, 0, 1),
(5, 'Geladeira G555', 'Quero compra essa geraleira, mais não sei se ela é boa. algum poderia dar sua opinião.', 'Eletrodomesticos', 'Brastemp', '1433687329.jpg', 0, 0, 0, 1),
(6, 'Moto X', 'Quero comprar o Moto x, mas não sei se ele é bom. opinem por favor', 'Celulares e SmartPhones', 'Motorola', '1433687458.jpg', 0, 0, 0, 1),
(7, 'Barbeador  r532', 'Opinem sobre esse barbeador, quero compra-lo mais não sei se ele é bom', 'Eletroeletronicos', 'Philips', '1433687801.jpg', 0, 0, 0, 1),
(8, 'Xbox One', 'O Xbox one é melhor que o play 4, quero comprar mais não sei se é bom', 'Games & Consoles', 'Microsoft', '1433688127.jpg', 0, 0, 0, 1),
(9, 'Mortal Combate x', 'Quem já jogou opine por favor', 'Games & Consoles', 'WB Games', '1433688235.jpg', 0, 0, 0, 1),
(10, 'Game FIFA Teste', 'Quem jogou o novo FIFA, por favor opine Teste', 'Games & Consoles', 'SPORTS Teste', '1433747214.jpg', 0, 0, 0, 1),
(12, 'Play Station 4', 'Quem já comprou, por favor opinem', 'Games & Consoles', 'Sony', '1433688746.jpg', 0, 0, 0, 1),
(13, 'teste', 'sdasdasdsdasdasd', 'NoteBooks', 'testeeere', '1433896511.jpg', 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
`id_usuario` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`) VALUES
(1, 'Jackson Daniel', 'jackson.daniel.almeida@gmail.com', '202cb962ac59075b964b07152d234b70'),
(2, 'Ivan Valentim', 'ivanvalentimsantos@gmail.com', '202cb962ac59075b964b07152d234b70'),
(3, 'Eduardo Andrade', 'edurock55@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentario`
--
ALTER TABLE `comentario`
 ADD PRIMARY KEY (`id_comentario`);

--
-- Indexes for table `comentario_opiniao_usuario`
--
ALTER TABLE `comentario_opiniao_usuario`
 ADD PRIMARY KEY (`id_usuario`,`id_opiniao`,`id_comentario`), ADD KEY `id_opiniao` (`id_opiniao`), ADD KEY `id_comentario` (`id_comentario`);

--
-- Indexes for table `opiniao`
--
ALTER TABLE `opiniao`
 ADD PRIMARY KEY (`id_opiniao`), ADD KEY `id_usuario` (`id_usuario`), ADD KEY `id_produto` (`id_produto`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
 ADD PRIMARY KEY (`id_produto`), ADD KEY `id_usuario` (`id_usuario`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
 ADD PRIMARY KEY (`id_usuario`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentario`
--
ALTER TABLE `comentario`
MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `opiniao`
--
ALTER TABLE `opiniao`
MODIFY `id_opiniao` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `comentario_opiniao_usuario`
--
ALTER TABLE `comentario_opiniao_usuario`
ADD CONSTRAINT `comentario_opiniao_usuario_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE,
ADD CONSTRAINT `comentario_opiniao_usuario_ibfk_2` FOREIGN KEY (`id_opiniao`) REFERENCES `opiniao` (`id_opiniao`) ON DELETE CASCADE,
ADD CONSTRAINT `comentario_opiniao_usuario_ibfk_3` FOREIGN KEY (`id_comentario`) REFERENCES `comentario` (`id_comentario`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `opiniao`
--
ALTER TABLE `opiniao`
ADD CONSTRAINT `opiniao_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE,
ADD CONSTRAINT `opiniao_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id_usuario`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
