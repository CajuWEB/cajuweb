-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 28-Fev-2018 às 20:08
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siscomf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `caixas`
--

CREATE TABLE `caixas` (
  `entrada` float NOT NULL,
  `saida` float NOT NULL,
  `dataCaixa` date NOT NULL,
  `idCaixa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filiais`
--

CREATE TABLE `filiais` (
  `nome` varchar(45) DEFAULT NULL,
  `rua` varchar(45) DEFAULT NULL,
  `numero` int(5) DEFAULT NULL,
  `bairro` varchar(45) DEFAULT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `idFilial` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `filial`
--

CREATE TABLE `filial` (
  `nome` varchar(45) NOT NULL,
  `idFilial` int(11) NOT NULL,
  `idCaixa` int(11) DEFAULT NULL,
  `idProd` int(11) DEFAULT NULL,
  `rua` varchar(45) NOT NULL,
  `numero` int(5) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `filial`
--

INSERT INTO `filial` (`nome`, `idFilial`, `idCaixa`, `idProd`, `rua`, `numero`, `bairro`, `complemento`) VALUES
('igor', 1, NULL, NULL, 'igor', 2, 'igor', 'igor'),
('igor', 2, NULL, NULL, 'igor', 321, 'igor', 'igor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `filial_rel_produto`
--

CREATE TABLE `filial_rel_produto` (
  `idRel` int(11) NOT NULL,
  `idFilial` int(11) DEFAULT NULL,
  `idProd` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `nomeProd` varchar(45) NOT NULL,
  `qtdProd` int(5) NOT NULL,
  `codBarras` varchar(20) NOT NULL,
  `fabricante` varchar(45) NOT NULL,
  `precoProd` double NOT NULL,
  `dataCompra` date DEFAULT NULL,
  `dataValidade` date DEFAULT NULL,
  `categoria` varchar(45) NOT NULL,
  `idProd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`nomeProd`, `qtdProd`, `codBarras`, `fabricante`, `precoProd`, `dataCompra`, `dataValidade`, `categoria`, `idProd`) VALUES
('coca-cola 2L', 100, '1234-4321', 'coca-cola', 6.5, '2018-02-28', '2019-02-28', 'bebida', 17),
('arroz branco maratÃ¡', 100, '1234-4321', 'MaratÃ¡', 2.5, '2018-02-28', '2019-02-28', 'cereais', 18),
('castanha do ParÃ¡', 100, '1234-4322', 'ParÃ¡', 10, '2018-02-28', '2019-02-28', 'cereais', 19),
('fanta 2L', 100, '4321-1234', 'coca-cola', 5.5, '1997-05-23', '2000-02-20', 'bebida', 20),
('cafÃ© maratÃ¡', 100, '9090-0909', 'MaratÃ¡', 2.75, '2018-02-20', '2020-02-20', 'bebida', 21);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `nome` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `senha` varchar(64) NOT NULL,
  `id_usuarios` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`nome`, `login`, `senha`, `id_usuarios`) VALUES
('Igor Lima', 'iglx', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caixas`
--
ALTER TABLE `caixas`
  ADD PRIMARY KEY (`idCaixa`);

--
-- Indexes for table `filiais`
--
ALTER TABLE `filiais`
  ADD PRIMARY KEY (`idFilial`);

--
-- Indexes for table `filial`
--
ALTER TABLE `filial`
  ADD PRIMARY KEY (`idFilial`),
  ADD KEY `idCaixa` (`idCaixa`),
  ADD KEY `idProd` (`idProd`);

--
-- Indexes for table `filial_rel_produto`
--
ALTER TABLE `filial_rel_produto`
  ADD PRIMARY KEY (`idRel`),
  ADD KEY `idFilial` (`idFilial`),
  ADD KEY `idProd` (`idProd`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`idProd`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caixas`
--
ALTER TABLE `caixas`
  MODIFY `idCaixa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filiais`
--
ALTER TABLE `filiais`
  MODIFY `idFilial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `filial`
--
ALTER TABLE `filial`
  MODIFY `idFilial` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `filial_rel_produto`
--
ALTER TABLE `filial_rel_produto`
  MODIFY `idRel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `idProd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `filial`
--
ALTER TABLE `filial`
  ADD CONSTRAINT `filial_ibfk_1` FOREIGN KEY (`idCaixa`) REFERENCES `caixas` (`idCaixa`),
  ADD CONSTRAINT `filial_ibfk_2` FOREIGN KEY (`idProd`) REFERENCES `produtos` (`idProd`);

--
-- Limitadores para a tabela `filial_rel_produto`
--
ALTER TABLE `filial_rel_produto`
  ADD CONSTRAINT `filial_rel_produto_ibfk_1` FOREIGN KEY (`idFilial`) REFERENCES `filial` (`idFilial`),
  ADD CONSTRAINT `filial_rel_produto_ibfk_2` FOREIGN KEY (`idProd`) REFERENCES `produtos` (`idProd`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
