-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 12-Maio-2015 às 21:49
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

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
  `id_opiniao` int(11) NOT NULL AUTO_INCREMENT,
  `id_produto` int(11) NOT NULL,
  `titulo_opiniao` varchar(50) DEFAULT NULL,
  `descricao_opiniao` longtext NOT NULL,
  PRIMARY KEY (`id_opiniao`),
  KEY `id_produto` (`id_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Extraindo dados da tabela `opiniao`
--

INSERT INTO `opiniao` (`id_opiniao`, `id_produto`, `titulo_opiniao`, `descricao_opiniao`) VALUES
(1, 1, 'Ivan', 'produto muito bom, gostei'),
(2, 2, 'José', 'Achei mais ou menos'),
(3, 2, 'Josefa', 'achei legal'),
(4, 1, 'Arnold', 'Muito eficiente'),
(5, 1, 'Caligula', 'nada'),
(6, 1, 'edu', 'dofsidofis'),
(7, 1, 'avabel', 'edfd'),
(8, 2, 'porra bixo', 'tu pe feio'),
(9, 1, 'uyuy', 'uyyuyuy');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(200) NOT NULL,
  `detalhes_produto` longtext NOT NULL,
  `marca_produto` varchar(50) NOT NULL,
  `categoria_produto` varchar(200) NOT NULL,
  `imagem` varchar(60) NOT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `detalhes_produto`, `marca_produto`, `categoria_produto`, `imagem`) VALUES
(1, 'Celular Motorola Moto G Colors Dual', 'Motorola Moto G (2ª Geração) Colors Preto, Dual Chip, Processador Quad Core 1.2GHz, Tela 5, Memória 8GB', 'motorola', 'celular', ''),
(2, 'Smartphone Samsung Galaxy S5', 'Smartphone Samsung Galaxy S5 Desbloqueado Android 4.4.2 Tela 5.1" 16GB 4G Wi-Fi Câmera 16 MP - Preto', 'samsung', 'celular', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `resposta`
--

CREATE TABLE IF NOT EXISTS `resposta` (
  `id_resposta` int(11) NOT NULL AUTO_INCREMENT,
  `id_opiniao` int(11) NOT NULL,
  `titulo_resposta` varchar(50) NOT NULL,
  `descricao_resposta` longtext NOT NULL,
  PRIMARY KEY (`id_resposta`),
  KEY `id_opiniao` (`id_opiniao`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `resposta`
--

INSERT INTO `resposta` (`id_resposta`, `id_opiniao`, `titulo_resposta`, `descricao_resposta`) VALUES
(1, 1, 'Maria', 'Eu também gostei'),
(2, 2, 'Jorge', 'você é doido'),
(3, 4, 'Clara', 'tem muito espaço'),
(4, 9, 'er', 'ddd');

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
