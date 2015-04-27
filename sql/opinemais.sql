-- phpMyAdmin SQL Dump
-- version 4.4.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Tempo de geração: 27/04/2015 às 15:15
-- Versão do servidor: 10.0.17-MariaDB-log
-- Versão do PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `opinemais`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `opiniao`
--

CREATE TABLE IF NOT EXISTS `opiniao` (
  `id_opiniao` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `titulo_opiniao` varchar(50) DEFAULT NULL,
  `descricao_opiniao` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `opiniao`
--

INSERT INTO `opiniao` (`id_opiniao`, `id_produto`, `titulo_opiniao`, `descricao_opiniao`) VALUES
(1, 1, 'Ivan', 'produto muito bom, gostei'),
(2, 2, 'José', 'Achei mais ou menos'),
(3, 2, 'Josefa', 'achei legal'),
(4, 1, 'Arnold', 'Muito eficiente');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(200) NOT NULL,
  `detalhes_produto` longtext NOT NULL,
  `marca_produto` varchar(50) NOT NULL,
  `categoria_produto` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `detalhes_produto`, `marca_produto`, `categoria_produto`) VALUES
(1, 'Celular Motorola Moto G Colors Dual', 'Motorola Moto G (2ª Geração) Colors Preto, Dual Chip, Processador Quad Core 1.2GHz, Tela 5, Memória 8GB', 'motorola', 'celular'),
(2, 'Smartphone Samsung Galaxy S5', 'Smartphone Samsung Galaxy S5 Desbloqueado Android 4.4.2 Tela 5.1" 16GB 4G Wi-Fi Câmera 16 MP - Preto', 'samsung', 'celular');

-- --------------------------------------------------------

--
-- Estrutura para tabela `resposta`
--

CREATE TABLE IF NOT EXISTS `resposta` (
  `id_resposta` int(11) NOT NULL,
  `id_opiniao` int(11) NOT NULL,
  `titulo_resposta` varchar(50) NOT NULL,
  `descricao_resposta` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `resposta`
--

INSERT INTO `resposta` (`id_resposta`, `id_opiniao`, `titulo_resposta`, `descricao_resposta`) VALUES
(1, 1, 'Maria', 'Eu também gostei'),
(2, 2, 'Jorge', 'você é doido'),
(3, 4, 'Clara', 'tem muito espaço');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `opiniao`
--
ALTER TABLE `opiniao`
  ADD PRIMARY KEY (`id_opiniao`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices de tabela `resposta`
--
ALTER TABLE `resposta`
  ADD PRIMARY KEY (`id_resposta`),
  ADD KEY `id_opiniao` (`id_opiniao`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `opiniao`
--
ALTER TABLE `opiniao`
  MODIFY `id_opiniao` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de tabela `resposta`
--
ALTER TABLE `resposta`
  MODIFY `id_resposta` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `opiniao`
--
ALTER TABLE `opiniao`
  ADD CONSTRAINT `opiniao_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produto` (`id_produto`);

--
-- Restrições para tabelas `resposta`
--
ALTER TABLE `resposta`
  ADD CONSTRAINT `resposta_ibfk_1` FOREIGN KEY (`id_opiniao`) REFERENCES `opiniao` (`id_opiniao`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
