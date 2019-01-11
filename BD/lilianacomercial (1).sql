-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Máquina: localhost
-- Data de Criação: 30-Mai-2018 às 05:48
-- Versão do servidor: 5.5.8
-- versão do PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `lilianacomercial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `idAdministrador` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(12) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idAdministrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`idAdministrador`, `email`, `password`, `nome`) VALUES
(3, 'waldemarperalta916@gmail.com', '0101', 'waldemar'),
(4, 'joel1@hotmail.com', '1234', 'joel');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE IF NOT EXISTS `cliente` (
  `idCliente` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Administrador_idAdministrador` int(10) unsigned NOT NULL,
  `codCliente` int(25) unsigned DEFAULT NULL,
  `nomeCliente` text,
  `sobrenome` varchar(20) NOT NULL,
  `data` date NOT NULL,
  `emailCliente` text,
  `senhaCliente` varchar(12) DEFAULT NULL,
  `endereco` varchar(25) NOT NULL,
  `telefones` int(15) NOT NULL,
  PRIMARY KEY (`idCliente`,`Administrador_idAdministrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`idCliente`, `Administrador_idAdministrador`, `codCliente`, `nomeCliente`, `sobrenome`, `data`, `emailCliente`, `senhaCliente`, `endereco`, `telefones`) VALUES
(1, 1, 4294967295, 'waldemarcliente', '', '0000-00-00', 'waldemarcliente@gmail.com', '0001', '', 0),
(2, 0, 265365, 'wall', 'cliente', '2018-05-28', 'wall@cliente.lc', '1234', 'luanda', 922000000),
(3, 0, 348374, 'euy4', '3hgdsfhjgd', '2018-05-01', 'rewqrew@gbhfg', '4343', 'dfhgdf', 764575);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente_encomenda_produto`
--

CREATE TABLE IF NOT EXISTS `cliente_encomenda_produto` (
  `Cliente_Administrador_idAdministrador` int(10) unsigned NOT NULL,
  `Cliente_idCliente` int(10) unsigned NOT NULL,
  `Produto_Administrador_idAdministrador` int(10) unsigned NOT NULL,
  `Produto_id` int(10) unsigned NOT NULL,
  `Administrador_idAdministrador` int(10) unsigned NOT NULL,
  `data_Encomenda` date DEFAULT NULL,
  PRIMARY KEY (`Cliente_Administrador_idAdministrador`,`Cliente_idCliente`,`Produto_Administrador_idAdministrador`,`Produto_id`,`Administrador_idAdministrador`),
  KEY `Cliente_has_Produdo_FKIndex1` (`Cliente_idCliente`,`Cliente_Administrador_idAdministrador`),
  KEY `Cliente_has_Produdo_FKIndex2` (`Produto_id`,`Produto_Administrador_idAdministrador`),
  KEY `Cliente_Encomenda_Produdo_FKIndex3` (`Administrador_idAdministrador`),
  KEY `Produto_Administrador_idAdministrador` (`Produto_Administrador_idAdministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente_encomenda_produto`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `dados_clientes`
--

CREATE TABLE IF NOT EXISTS `dados_clientes` (
  `idDadosclientes` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `Cliente_idCliente` int(10) unsigned NOT NULL,
  `Cliente_Administrador_idAdministrador` int(10) unsigned NOT NULL,
  `telefones` int(10) unsigned DEFAULT NULL,
  `endereco` text,
  PRIMARY KEY (`idDadosclientes`,`Cliente_idCliente`,`Cliente_Administrador_idAdministrador`),
  KEY `Dados_clientes_FKIndex1` (`Cliente_idCliente`,`Cliente_Administrador_idAdministrador`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Extraindo dados da tabela `dados_clientes`
--


-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE IF NOT EXISTS `produto` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `codProduto` int(10) unsigned DEFAULT NULL,
  `nomeProduto` varchar(255) DEFAULT NULL,
  `dataProduto` date DEFAULT NULL,
  `tipo` text,
  `estado` varchar(20) DEFAULT 'Publicado',
  `descricao` varchar(255) DEFAULT NULL,
  `ficheiro` text,
  `preco` float DEFAULT NULL,
  `dimensao` varchar(255) DEFAULT NULL,
  `cor` varchar(20) NOT NULL,
  `genero` enum('marculino','femenino') NOT NULL,
  `marca` varchar(20) NOT NULL,
  `origem` varchar(30) NOT NULL,
  `idAdministrador` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idAdministrador` (`idAdministrador`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=65 ;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id`, `codProduto`, `nomeProduto`, `dataProduto`, `tipo`, `estado`, `descricao`, `ficheiro`, `preco`, `dimensao`, `cor`, `genero`, `marca`, `origem`, `idAdministrador`) VALUES
(35, 123, 'blusa', '0000-00-00', '', 'publicado', 'nenhuma descricao', 'IMG_20180212_010116.jpg', 3900, 'xxL', 'vermelha', 'femenino', 'billabong', 'Brazil', 0),
(36, 339, 'perfume', '2018-05-08', 'perfume', 'encomendado', 'rredtfghjk', 'FB_IMG_14999677353180696.jpg', 3000, '40mml', 'red', 'femenino', 'facebook', 'luanda', 0),
(38, 5678, 'Espiritual', '0000-00-00', 'perfume', 'publicado', 'bom para uma boa ocasiao', 'FB_IMG_14999677353180696.jpg', 2344, '4ml', '', 'femenino', 'nike', 'Benguela', 0),
(41, 0, '', '0000-00-00', 'roupa', 'publicado', '', '', 0, '', '', '', '', '', 0),
(42, 0, '', '0000-00-00', 'calcado', 'publicado', '', '', 0, '', '', '', '', '', 0),
(43, 0, '', '0000-00-00', 'calcado', 'publicado', '', '', 0, '', '', '', '', '', 0),
(44, 0, '', '2008-05-18', 'roupa', 'publicado', '', '', 0, '', '', '', '', '', 0),
(45, 0, '', '2018-05-08', '', 'publicado', '', '', 0, '', '', '', '', '', 0),
(46, 4550, 'casaco', '2018-05-08', 'roupa', 'encomendado', 'Duravel e preÃ§o descutivel ', 'IMG_20180212_010116.jpg', 6000, 'xxl', 'preto', '', 'lost', 'Namibe', 0),
(47, 0, '', '0000-00-00', 'roupa', 'publicado', '', '', 0, '', '', '', '', '', 0),
(48, 0, '', '2018-05-08', '', 'publicado', '', '', 0, '', '', '', '', '', 0),
(49, 0, '', '2018-05-08', '', 'publicado', '', '', 0, '', '', '', '', '', 0),
(50, 7887, 'BlackXL', '2018-05-08', 'perfume', 'publicado', 'quem conhece nÃ£o esquece', 'FB_IMG_15018555428930793.jpg', 20000, '6ml', '', 'femenino', 'rosa', 'Portugal', 0),
(51, 0, '', '2018-05-09', 'perfume', 'publicado', '', '', 0, '', '', '', '', '', 0),
(52, 0, '', '2018-05-09', 'perfume', 'publicado', '', '', 0, '', '', '', '', '', 0),
(53, 0, '', '2018-05-09', '', 'publicado', '', '', 0, '', '', '', '', '', 0),
(54, 0, '', '2018-05-09', '', 'publicado', '', '', 0, '', '', '', '', '', 0),
(55, 123333, '', '2018-05-11', 'perfume', 'publicado', '', '', 0, '', '', '', '', '', 0),
(56, 0, '', '2018-05-11', '', 'publicado', '', '', 0, '', '', '', '', '', 0),
(57, 0, '', '2018-05-14', 'perfume', 'publicado', '', '', 0, '', '', '', '', '', 0),
(58, 55044, 'lool', '2018-05-15', 'calcado', 'publicado', 'nenhuma descriÃ§Ã£o', 'build.png', 1500, '37', 'verde', 'femenino', 'avera', 'Luanda', 0),
(59, 0, '', '2018-05-16', '', 'publicado', '', '', 0, '', '', '', '', '', 0),
(60, 0, '', '2018-05-21', '', 'publicado', '', '', 0, '', '', '', '', '', 0),
(61, 456, 'gaspar', '2018-05-22', '', 'publicado', 'tem desconto', '', 500, '40', 'rosa', '', 'puma', 'china', 0),
(62, 0, '', '2018-05-23', '', 'publicado', '', '', 0, '', '', '', '', '', 0),
(63, 0, 'hgffhj', '2018-05-23', 'roupa', 'publicado', '', '', 0, '', '', '', '', '', 0),
(64, 5446, 'calÃ§ana', '2018-05-28', 'roupa', 'publicado', 'nenhuma', 'BZLF5057.png', 645453, '343', 'preta', 'femenino', 'boot', 'regra', 0);

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `cliente_encomenda_produto`
--
ALTER TABLE `cliente_encomenda_produto`
  ADD CONSTRAINT `cliente_encomenda_produto_ibfk_1` FOREIGN KEY (`Cliente_Administrador_idAdministrador`) REFERENCES `administrador` (`idAdministrador`),
  ADD CONSTRAINT `cliente_encomenda_produto_ibfk_2` FOREIGN KEY (`Cliente_idCliente`) REFERENCES `cliente` (`idCliente`),
  ADD CONSTRAINT `cliente_encomenda_produto_ibfk_3` FOREIGN KEY (`Produto_Administrador_idAdministrador`) REFERENCES `administrador` (`idAdministrador`),
  ADD CONSTRAINT `cliente_encomenda_produto_ibfk_4` FOREIGN KEY (`Produto_id`) REFERENCES `produto` (`id`),
  ADD CONSTRAINT `cliente_encomenda_produto_ibfk_5` FOREIGN KEY (`Administrador_idAdministrador`) REFERENCES `administrador` (`idAdministrador`);
