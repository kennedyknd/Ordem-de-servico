-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16-Nov-2018 às 21:30
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crudordem2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
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
  `localidade` varchar(45) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `numero` varchar(5) NOT NULL,
  `complemento` varchar(45) DEFAULT NULL,
  `foto` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nome`, `datanasci`, `email`, `cpf`, `telefone`, `celular`, `rg`, `sexo`, `cep`, `logradouro`, `bairro`, `localidade`, `uf`, `numero`, `complemento`, `foto`) VALUES
(3, 'Kennedy Alves', '2018-05-01', 'kennedyalves.ka@gmail.com', '999.999.999-99', '(99) 9999-9999', '(99) 99999-9999', '65465465', 'M', '71.882-176', 'Quadra QC 4 Conjunto 26', 'Riacho Fundo II', 'Brasília', 'DF', '2', 'Residencia', NULL),
(4, 'Teste2', '1994-12-05', 'teste@gmail.com', '999.999.999-99', '(99) 9999-9999', '(99) 99999-9999', '99999999', 'M', '71.882-174', 'Quadra QC 4 Conjunto 24', 'Riacho Fundo II', 'Brasília', 'DF', '99', 'Casa', NULL),
(5, 'teste', '2000-05-05', 'teste@gmail.com', '000.000.000-00', '(22) 2222-2222', '(22) 22222-2222', '5555', 'M', '71.882-174', 'Quadra QC 4 Conjunto 24', 'Riacho Fundo II', 'Brasília', 'DF', '1', 'Casa', NULL),
(6, 'Alok1', '2018-06-13', 'teste@gmail.com', '000.000.000-00', '(00) 0000-0000', '(00) 00000-0000', '000000', 'M', '71.882-174', 'Quadra QC 4 Conjunto 24', 'Riacho Fundo II', 'Brasília', 'DF', '00', '00', NULL),
(7, 'teste', '1994-12-05', 'kennedyalves.ka@gmail.com', '656.566.656-56', '(61) 6565-6556', '(32) 13213-2132', '54545454', 'M', '71882173', 'Quadra QC 4 Conjunto 23', 'Riacho Fundo II', 'Brasília', 'DF', '26', 'aa', ''),
(8, 'teste', '1994-12-05', 'kennedyalves.ka@gmail.com', '987.465.465-46', '(65) 6599-7854', '(88) 96512-3100', '98765454', 'F', '71882173', 'Quadra QC 4 Conjunto 23', 'Riacho Fundo II', 'Brasília', 'DF', '26', 'teste', 'WIN_20181026_22_14_24_Pro.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `formapagamento`
--

CREATE TABLE `formapagamento` (
  `id_formaPagamento` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `descricao` varchar(100) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `formapagamento`
--

INSERT INTO `formapagamento` (`id_formaPagamento`, `tipo`, `descricao`, `criado`, `modificado`) VALUES
(2, 'Dinheiro', 'Dinheiro', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `metodopagamento`
--

CREATE TABLE `metodopagamento` (
  `id_metodoPagamento` int(11) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `metodopagamento`
--

INSERT INTO `metodopagamento` (`id_metodoPagamento`, `tipo`, `descricao`, `criado`, `modificado`) VALUES
(1, 'A vista', 'A vista', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ordemservico`
--

CREATE TABLE `ordemservico` (
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
-- Extraindo dados da tabela `ordemservico`
--

INSERT INTO `ordemservico` (`id_ordemServico`, `custo`, `observacao`, `criado`, `modificado`, `id_servico`, `id_formaPagamento`, `id_metodoPagamento`, `id_cliente`, `id_situacao`) VALUES
(1, 200, 'Formatar Computador', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 2, 1, 3, 1),
(2, 100.51, 'Formatar Computador', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 7, 2, 1, 3, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pagina`
--

CREATE TABLE `pagina` (
  `id_pagina` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `caminho` varchar(100) NOT NULL,
  `publica` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pagina`
--

INSERT INTO `pagina` (`id_pagina`, `nome`, `caminho`, `publica`) VALUES
(2, 'Login', 'usuario/login.php', 1),
(29, 'View Página', 'pagina/index.php', 0),
(30, 'Cadastro de Página', 'pagina/formulario.php', 0),
(31, 'Cadastro de Clientes', 'cliente/add.php', 0),
(32, 'View Cliente', 'cliente/index.php', 0),
(33, 'Cadastro de OS', 'ordemServico/add.php', 0),
(34, 'View Ordem de Servico', 'ordemServico/index.php', 0),
(35, 'Cadastro de Serviço', 'servico/add.php', 0),
(36, 'View Serviço', 'servico/index.php', 0),
(37, 'Cadastro Forma de Pagamento', 'formaPagamento/add.php', 0),
(38, 'View Forma Pagamento', 'formaPagamento/index.php', 0),
(39, 'Cadastro de Método de Pagamento', 'metodoPagamento/add.php', 0),
(40, 'View Método Pagamento', 'metodoPagamento/index.php', 0),
(41, 'Cadastro Situação', 'situacao/add.php', 0),
(43, 'Cadastro de Usuário', 'usuario/formulario.php', 0),
(45, 'View Usuário', 'usuario/index.php', 0),
(47, 'Cadastro de Perfil', 'perfil/formulario.php', 0),
(48, 'View Perfil', 'perfil/index.php', 0),
(49, 'View Situação', 'situacao/index.php', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `perfil`
--

CREATE TABLE `perfil` (
  `id_perfil` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `perfil`
--

INSERT INTO `perfil` (`id_perfil`, `nome`) VALUES
(2, 'Administrador'),
(3, 'Atendente'),
(4, 'Supervisor');

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissao`
--

CREATE TABLE `permissao` (
  `id_permissao` int(11) NOT NULL,
  `id_perfil` int(11) NOT NULL,
  `id_pagina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `permissao`
--

INSERT INTO `permissao` (`id_permissao`, `id_perfil`, `id_pagina`) VALUES
(2, 2, 3),
(3, 2, 5),
(4, 3, 5),
(5, 2, 6),
(6, 2, 7),
(7, 2, 8),
(8, 2, 9),
(9, 3, 9),
(10, 2, 10),
(11, 3, 10),
(12, 2, 11),
(13, 3, 11),
(14, 2, 12),
(15, 3, 12),
(16, 2, 13),
(17, 3, 13),
(18, 2, 14),
(19, 3, 14),
(20, 2, 15),
(21, 2, 16),
(22, 2, 17),
(23, 2, 18),
(24, 2, 19),
(25, 2, 20),
(26, 2, 21),
(27, 2, 22),
(28, 2, 23),
(29, 2, 24),
(30, 2, 25),
(31, 2, 26),
(32, 2, 27),
(33, 3, 27),
(34, 4, 27),
(35, 2, 28),
(36, 2, 29),
(37, 2, 30),
(38, 2, 31),
(39, 3, 31),
(40, 4, 31),
(41, 2, 32),
(42, 3, 32),
(43, 4, 32),
(44, 2, 33),
(45, 3, 33),
(46, 4, 33),
(47, 2, 34),
(48, 3, 34),
(49, 4, 34),
(50, 2, 35),
(51, 3, 35),
(52, 4, 35),
(53, 2, 36),
(54, 3, 36),
(55, 4, 36),
(56, 2, 37),
(57, 4, 37),
(58, 2, 38),
(59, 3, 38),
(60, 4, 38),
(61, 2, 39),
(62, 4, 39),
(63, 2, 40),
(64, 3, 40),
(65, 4, 40),
(66, 2, 41),
(67, 4, 41),
(68, 2, 42),
(69, 3, 42),
(70, 4, 42),
(71, 2, 43),
(72, 2, 44),
(73, 4, 44),
(74, 2, 45),
(75, 2, 46),
(76, 2, 47),
(77, 2, 48),
(78, 2, 49),
(79, 4, 49);

-- --------------------------------------------------------

--
-- Estrutura da tabela `servico`
--

CREATE TABLE `servico` (
  `id_servico` int(11) NOT NULL,
  `servico` varchar(45) NOT NULL,
  `observacao` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servico`
--

INSERT INTO `servico` (`id_servico`, `servico`, `observacao`) VALUES
(7, 'Formatar', 'Formatar'),
(15, 'Instalar Impressora', 'Instalar Impressora');

-- --------------------------------------------------------

--
-- Estrutura da tabela `situacao`
--

CREATE TABLE `situacao` (
  `id_situacao` int(11) NOT NULL,
  `situacao` varchar(45) NOT NULL,
  `descricao` varchar(45) NOT NULL,
  `criado` datetime NOT NULL,
  `modificado` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `situacao`
--

INSERT INTO `situacao` (`id_situacao`, `situacao`, `descricao`, `criado`, `modificado`) VALUES
(1, 'Em andamento', 'Em andamento', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(32) NOT NULL,
  `id_perfil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome`, `email`, `senha`, `id_perfil`) VALUES
(2, 'kennedy', 'kennedyalves.ka@gmail.com', '202cb962ac59075b964b07152d234b70', 2),
(3, 'guilherme', 'guilherme@guilherme.com', '202cb962ac59075b964b07152d234b70', 4),
(4, 'Atendente', 'atendente@atendente.com', '202cb962ac59075b964b07152d234b70', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indexes for table `formapagamento`
--
ALTER TABLE `formapagamento`
  ADD PRIMARY KEY (`id_formaPagamento`);

--
-- Indexes for table `metodopagamento`
--
ALTER TABLE `metodopagamento`
  ADD PRIMARY KEY (`id_metodoPagamento`);

--
-- Indexes for table `ordemservico`
--
ALTER TABLE `ordemservico`
  ADD PRIMARY KEY (`id_ordemServico`),
  ADD KEY `fk_os_servico1_idx` (`id_servico`),
  ADD KEY `fk_os_formaPagamento1_idx` (`id_formaPagamento`),
  ADD KEY `fk_os_metodoPagamento1_idx` (`id_metodoPagamento`),
  ADD KEY `fk_os_Clientes1_idx` (`id_cliente`),
  ADD KEY `fk_ordemServicos_situacoes1_idx` (`id_situacao`);

--
-- Indexes for table `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id_pagina`);

--
-- Indexes for table `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`id_perfil`);

--
-- Indexes for table `permissao`
--
ALTER TABLE `permissao`
  ADD PRIMARY KEY (`id_permissao`),
  ADD KEY `fk_permissao_perfil1_idx` (`id_perfil`),
  ADD KEY `fk_permissao_pagina1_idx` (`id_pagina`);

--
-- Indexes for table `servico`
--
ALTER TABLE `servico`
  ADD PRIMARY KEY (`id_servico`);

--
-- Indexes for table `situacao`
--
ALTER TABLE `situacao`
  ADD PRIMARY KEY (`id_situacao`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `fk_usuario_perfil1_idx` (`id_perfil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `formapagamento`
--
ALTER TABLE `formapagamento`
  MODIFY `id_formaPagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `metodopagamento`
--
ALTER TABLE `metodopagamento`
  MODIFY `id_metodoPagamento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ordemservico`
--
ALTER TABLE `ordemservico`
  MODIFY `id_ordemServico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id_pagina` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `perfil`
--
ALTER TABLE `perfil`
  MODIFY `id_perfil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `permissao`
--
ALTER TABLE `permissao`
  MODIFY `id_permissao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `servico`
--
ALTER TABLE `servico`
  MODIFY `id_servico` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `situacao`
--
ALTER TABLE `situacao`
  MODIFY `id_situacao` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `ordemservico`
--
ALTER TABLE `ordemservico`
  ADD CONSTRAINT `fk_ordemServicos_situacoes1` FOREIGN KEY (`id_situacao`) REFERENCES `situacao` (`id_situacao`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_Clientes1` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_formaPagamento1` FOREIGN KEY (`id_formaPagamento`) REFERENCES `formapagamento` (`id_formaPagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_metodoPagamento1` FOREIGN KEY (`id_metodoPagamento`) REFERENCES `metodopagamento` (`id_metodoPagamento`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_os_servico1` FOREIGN KEY (`id_servico`) REFERENCES `servico` (`id_servico`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
