-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 07-Jun-2015 às 11:55
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentario_opiniao_usuario`
--

CREATE TABLE IF NOT EXISTS `comentario_opiniao_usuario` (
  `id_usuario` int(11) NOT NULL DEFAULT '0',
  `id_opiniao` int(11) NOT NULL DEFAULT '0',
  `id_comentario` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `detalhes`, `categoria`, `marca`, `imagem`, `qualificacao_positiva`, `qualificacao_negativa`, `nota_media`, `id_usuario`) VALUES
(1, 'Play Station 3', 'Play Station 3 é bacana pra comprar ainda??', 'Eletrodomestico', 'Sony', '1433608537.jpg', 0, 0, 0, 1),
(2, 'SmartTV 3D 64', 'Quero saber se vale a pena comprar a SmartTV modelo 342432dsfsd ', 'TV & Smart TV', 'Samsung', '1433629042.jpg', 0, 0, 0, 1),
(3, 'Note Book  TZ4433', 'Quero comprar o NoteBook AZUS TZ4433 mais não sei se ele é bom. opinem por favor', 'NoteBooks', 'AZUS', '1433686511.jpg', 0, 0, 0, 1),
(4, 'Game UFC Combate', 'Ola pessoal, Opinem sobre o game UFC Combate.', 'Games & Consoles', 'SPORTS', '1433686971.jpg', 0, 0, 0, 1),
(5, 'Geladeira G555', 'Quero compra essa geraleira, mais não sei se ela é boa. algum poderia dar sua opinião.', 'Eletrodomesticos', 'Brastemp', '1433687329.jpg', 0, 0, 0, 1),
(6, 'Moto X', 'Quero comprar o Moto x, mas não sei se ele é bom. opinem por favor', 'Celulares e SmartPhones', 'Motorola', '1433687458.jpg', 0, 0, 0, 1),
(7, 'Barbeador  r532', 'Opinem sobre esse barbeador, quero compra-lo mais não sei se ele é bom', 'Eletroeletronicos', 'Philips', '1433687801.jpg', 0, 0, 0, 1),
(8, 'Xbox One', 'O Xbox one é melhor que o play 4, quero comprar mais não sei se é bom', 'Games & Consoles', 'Microsoft', '1433688127.jpg', 0, 0, 0, 1),
(9, 'Motal Combate x', 'Quem já jogou opine por favor', 'Games & Consoles', 'WB Games', '1433688235.jpg', 0, 0, 0, 1),
(10, 'Game FIFA', 'Quem jogou o novo FIFA, por favor opine', 'Games & Consoles', 'SPORTS', '1433688416.jpg', 0, 0, 0, 1),
(11, 'Galaxy S6', 'Quem já usou, por favor opinem', 'Celulares e SmartPhones', 'Samsung', '1433688485.jpg', 0, 0, 0, 1),
(12, 'Play Station 4', 'Quem já comprou, por favor opinem', 'Games & Consoles', 'Sony', '1433688746.jpg', 0, 0, 0, 1);

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
MODIFY `id_comentario` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `opiniao`
--
ALTER TABLE `opiniao`
MODIFY `id_opiniao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
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
