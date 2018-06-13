-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13/06/2018 às 19:08
-- Versão do servidor: 10.1.32-MariaDB
-- Versão do PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `crudOrdem2`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `datanasci` date NOT NULL,
  `email` varchar(45) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `telefone` varchar(14) NOT NULL,
  `celular` varchar(15) NOT NULL,
  `rg` varchar(20) NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `cep` varchar(10) NOT NULL,
  `logradouro` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `datanasci`, `email`, `cpf`, `telefone`, `celular`, `rg`, `sexo`, `cep`, `logradouro`, `bairro`, `cidade`, `uf`, `numero`, `complemento`) VALUES
(3, 'Kennedy Alves', '2018-05-01', 'kennedyalves.ka@gmail.com', '999.999.999-99', '(99) 9999-9999', '(99) 99999-9999', '65465465', 'M', '71.882-176', 'Quadra QC 4 Conjunto 26', 'Riacho Fundo II', 'Brasília', 'DF', '2', 'Residencia'),
(4, 'Teste2', '1994-12-05', 'teste@gmail.com', '999.999.999-99', '(99) 9999-9999', '(99) 99999-9999', '99999999', 'M', '71.882-174', 'Quadra QC 4 Conjunto 24', 'Riacho Fundo II', 'Brasília', 'DF', '99', 'Casa'),
(5, 'teste', '2000-05-05', 'teste@gmail.com', '000.000.000-00', '(22) 2222-2222', '(22) 22222-2222', '5555', 'M', '71.882-174', 'Quadra QC 4 Conjunto 24', 'Riacho Fundo II', 'Brasília', 'DF', '1', 'Casa'),
(6, 'Alok1', '2018-06-13', 'teste@gmail.com', '000.000.000-00', '(00) 0000-0000', '(00) 00000-0000', '000000', 'M', '71.882-174', 'Quadra QC 4 Conjunto 24', 'Riacho Fundo II', 'Brasília', 'DF', '00', '00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `formaPagamento`
--

CREATE TABLE `formaPagamento` (
  `id_formaPagamento` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `formaPagamento`
--

INSERT INTO `formaPagamento` (`id_formaPagamento`, `tipo`, `descricao`, `criado`, `modificado`) VALUES
(2, 'Dinheiro', 'Dinheiro', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `metodoPagamento`
--

CREATE TABLE `metodoPagamento` (
  `id_metodoPagamento` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `metodoPagamento`
--

INSERT INTO `metodoPagamento` (`id_metodoPagamento`, `tipo`, `descricao`, `criado`, `modificado`) VALUES
(1, 'A vista', 'A vista', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `ordemServico`
--

CREATE TABLE `ordemServico` (
  `id_ordemServico` int(11) NOT NULL,
  `custo` float NOT NULL,
  `observacao` varchar(200) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL,
  `id_servico` int(11) NOT NULL,
  `id_formaPagamento` int(11) NOT NULL,
  `id_metodoPagamento` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_situacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ordemServico`
--

INSERT INTO `ordemServico` (`id_ordemServico`, `custo`, `observacao`, `criado`, `modificado`, `id_servico`, `id_formaPagamento`, `id_metodoPagamento`, `id_cliente`, `id_situacao`) VALUES
(1, 200, 'Formatar Computador', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 2, 1, 3, 1),
(2, 100.51, 'Formatar Computador', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `servico`
--

CREATE TABLE `servico` (
  `id_servico` int(11) NOT NULL,
  `servico` varchar(45) NOT NULL,
  `observacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `servico`, `observacao`) VALUES
(7, 'Formatar', 'Formatar'),
(15, 'Instalar Impressora', 'Instalar Impressora');

-- --------------------------------------------------------

--
-- Estrutura para tabela `situacao`
--

CREATE TABLE `situacao` (
  `id_situacao` int(11) NOT NULL,
  `situacao` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `situacao`
--

INSERT INTO `situacao` (`id_situacao`, `situacao`, `descricao`, `criado`, `modificado`) VALUES
(1, 'Em andamento', 'Em andamento', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Índices de tabela `formaPagamento`
--
ALTER TABLE `formaPagamento`
  ADD PRIMARY KEY (`id_formaPagamento`);

--
-- Índices de tabela `metodoPagamento`
--
ALTER TABLE `metodoPagamento`
  ADD PRIMARY KEY (`id_metodoPagamento`);

--
-- Índices de tabela `ordemServico`
--
ALTER TABLE `ordemServico`
  ADD PRIMARY KEY (`id_ordemServico`),
  ADD KEY `fk_os_servico1_idx` (`id_servico`),
  ADD KEY `fk_os_formaPagamento1_idx` (`id_formaPagamento`),
  ADD KEY `fk_os_metodoPagamento1_idx` (`id_metodoPagamento`),
  ADD KEY `fk_os_Clientes1_idx` (`id_cliente`),
  ADD KEY `fk_ordemServicos_situacoes1_idx` (`id_situacao`);

--
-- Índices de tabela `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_servico`);

--
-- Índices de tabela `situacao`
--
ALTER TABLE `situacao`
  ADD PRIMARY KEY (`id_situacao`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `formaPagamento`
--
ALTER TABLE `formaPagamento`
  MODIFY `id_formaPagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `metodoPagamento`
--
ALTER TABLE `metodoPagamento`
  MODIFY `id_metodoPagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `ordemServico`
--
ALTER TABLE `ordemServico`
  MODIFY `id_ordemServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `situacao`
--
ALTER TABLE `situacao`
  MODIFY `id_situacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `ordemServico`
--
ALTER TABLE `ordemServico`
  ADD CONSTRAINT `fk_ordemServicos_situacoes1` FOREIGN KEY (`id_situacao`) REFERENCES `situacao` (`id_situacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_Clientes1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_formaPagamento1` FOREIGN KEY (`id_formaPagamento`) REFERENCES `formaPagamento` (`id_formaPagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_metodoPagamento1` FOREIGN KEY (`id_metodoPagamento`) REFERENCES `metodoPagamento` (`id_metodoPagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_servico1` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
