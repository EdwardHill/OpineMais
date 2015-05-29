-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 14-Maio-2015 às 05:44
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

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
-- Estrutura da tabela `opiniao`
--

CREATE TABLE IF NOT EXISTS `opiniao` (
  `id_opiniao` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `titulo_opiniao` varchar(50) DEFAULT NULL,
  `descricao_opiniao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(200) NOT NULL,
  `detalhes_produto` longtext NOT NULL,
  `marca_produto` varchar(50) NOT NULL,
  `categoria_produto` varchar(200) NOT NULL,
  `imagem_produto` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `detalhes_produto`, `marca_produto`, `categoria_produto`, `imagem_produto`) VALUES
(1, 'Carlos Eduardo', 'dssd', 'ewewe', 'Tv', ''),
(2, 'Carlos Eduardo', 'dssd', 'ewewe', 'Tv', ''),
(3, 'Carlos Eduardo', 'dssd', 'ewewe', 'Tv', ''),
(4, 'Motorola moto Maxx', 'Moto Maxx , 3G de RAM, 64 Gigas de memoria interna, tela QHD, camera 21 megapixels', 'Motorola', 'cosmeticos', '1431561577.jpg'),
(5, 'dfdf', 'dfdf', 'dfdfd', 'Celulares e SmartPhones', '1431561706.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE IF NOT EXISTS `resposta` (
  `id_resposta` int(11) NOT NULL,
  `id_opiniao` int(11) NOT NULL,
  `titulo_resposta` varchar(50) NOT NULL,
  `descricao_resposta` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `opiniao`
--
ALTER TABLE `opiniao`
  ADD PRIMARY KEY (`id_opiniao`), ADD KEY `id_produto` (`id_produto`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Indexes for table `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`id_resposta`), ADD KEY `id_opiniao` (`id_opiniao`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `opiniao`
--
ALTER TABLE `opiniao`
  MODIFY `id_opiniao` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `resposta`
--
ALTER TABLE `resposta`
  MODIFY `id_resposta` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `opiniao`
--
ALTER TABLE `opiniao`
ADD CONSTRAINT `opiniao_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`);

--
-- Limitadores para a tabela `resposta`
--
ALTER TABLE `resposta`
ADD CONSTRAINT `resposta_ibfk_1` FOREIGN KEY (`id_opiniao`) REFERENCES `opiniao` (`id_opiniao`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
