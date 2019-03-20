-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20-Mar-2019 às 21:33
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `visconde`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `endereco`
--

CREATE TABLE `endereco` (
  `idEndereco` int(11) NOT NULL,
  `estado` varchar(45) DEFAULT NULL,
  `cidade` varchar(45) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `numero` int(11) DEFAULT NULL,
  `cep` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `fk_idPessoa` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfilusuario`
--

CREATE TABLE `perfilusuario` (
  `id` int(4) NOT NULL,
  `fk_idPessoa` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE `pessoa` (
  `idPessoa` int(11) NOT NULL,
  `nomePessoa` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `senha` varchar(45) CHARACTER SET latin1 DEFAULT NULL,
  `nascimento` datetime DEFAULT NULL,
  `razaoSocial` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`idPessoa`, `nomePessoa`, `email`, `senha`, `nascimento`, `razaoSocial`) VALUES
(1, 'Luan', 'luanrma@gmail.com', 'c6f4044559f2b1d3fcb0d51369515a8e', '1991-01-18 00:00:00', '08063062973'),
(2, 'Matias', 'matias@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', '1990-01-30 00:00:00', '85857484');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `idProduto` int(11) NOT NULL,
  `nomeProduto` varchar(45) DEFAULT NULL,
  `fornecedor` varchar(45) DEFAULT NULL,
  `codigoProduto` varchar(45) DEFAULT NULL,
  `ncm` varchar(45) DEFAULT NULL,
  `ean` varchar(45) DEFAULT NULL,
  `marca` varchar(45) DEFAULT NULL,
  `precoVenda` varchar(45) DEFAULT NULL,
  `precoCusto` varchar(45) DEFAULT NULL,
  `situacao` varchar(45) DEFAULT NULL,
  `descricao` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `imgPequena` varchar(45) DEFAULT NULL,
  `imgGrande` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `endereco`
--
ALTER TABLE `endereco`
  ADD PRIMARY KEY (`idEndereco`),
  ADD KEY `fk_idPessoa` (`fk_idPessoa`);

--
-- Indexes for table `perfilusuario`
--
ALTER TABLE `perfilusuario`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_idPessoa` (`fk_idPessoa`);

--
-- Indexes for table `pessoa`
--
ALTER TABLE `pessoa`
  ADD PRIMARY KEY (`idPessoa`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`idProduto`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `endereco`
--
ALTER TABLE `endereco`
  MODIFY `idEndereco` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perfilusuario`
--
ALTER TABLE `perfilusuario`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pessoa`
--
ALTER TABLE `pessoa`
  MODIFY `idPessoa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `idProduto` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `endereco`
--
ALTER TABLE `endereco`
  ADD CONSTRAINT `fk_idPessoa` FOREIGN KEY (`fk_idPessoa`) REFERENCES `pessoa` (`idPessoa`);

--
-- Limitadores para a tabela `perfilusuario`
--
ALTER TABLE `perfilusuario`
  ADD CONSTRAINT `perfilusuario_ibfk_1` FOREIGN KEY (`fk_idPessoa`) REFERENCES `pessoa` (`idPessoa`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
