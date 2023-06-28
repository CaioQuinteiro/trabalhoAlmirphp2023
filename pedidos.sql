-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29/06/2023 às 01:32
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `pedidos`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `ENDERECO` varchar(100) NOT NULL,
  `TELEFONE` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`ID`, `NOME`, `ENDERECO`, `TELEFONE`) VALUES
(1, 'Caio Quinteiro', 'Rua Aparecido De Almeida, 377', '(18) 99655-6066'),
(2, 'Nilton Gabriel ', 'Rua Joao Ferreira, 254', '(18) 99633-9332'),
(3, 'Manuela Fantin', 'Renascence', '(18) 99673-2777'),
(4, 'Luis Antonio Quinteiro', 'Rua Aparecido de Almeida, 377', '(18) 99745-3197'),
(5, 'Luiza Ribeiro', 'Rua Joana Hernades Carricondo, 141', '(18) 99628-5633'),
(6, 'Eduardo Henrique', 'Rua Jose Fagundes, 475', '(18) 99423-7765');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `ID` int(11) NOT NULL,
  `ID_CLIENTE` int(11) NOT NULL,
  `ID_PRODUTO` int(11) NOT NULL,
  `DATA_PEDIDO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`ID`, `ID_CLIENTE`, `ID_PRODUTO`, `DATA_PEDIDO`) VALUES
(1, 1, 3, '2023-06-28'),
(2, 5, 8, '2023-06-14');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `ID` int(11) NOT NULL,
  `NOME` varchar(50) NOT NULL,
  `PRECO` float NOT NULL,
  `QTDE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`ID`, `NOME`, `PRECO`, `QTDE`) VALUES
(1, 'Mouse RedDragon', 160, 14),
(2, 'Teclado RedDragon', 250, 15),
(3, 'Monitor AOC', 800, 57),
(4, 'Mouse Logitech', 300, 17),
(5, 'Headset HyperX', 600, 213),
(6, 'Mouse Razer', 160, 90),
(7, 'Teclado HyperX', 700, 29),
(8, 'Notebook Asus', 5050, 184),
(9, 'Teclado Razer', 155, 123);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `USUARIO` varchar(10) NOT NULL,
  `SENHA` varchar(32) NOT NULL,
  `EMAIL` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `USUARIO`, `SENHA`, `EMAIL`) VALUES
(1, 'CaioQuinte', '4be39bd72609ab311cf7de00c77be3a9', 'caioquinteiro7@gmail.com'),
(2, 'NiltonDuar', 'e7d80ffeefa212b7c5c55700e4f7193e', 'NiltonDuarte@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `ID_CLIENTE` (`ID_CLIENTE`),
  ADD KEY `ID_PRODUTO` (`ID_PRODUTO`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`ID`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `ID_CLIENTE` FOREIGN KEY (`ID_CLIENTE`) REFERENCES `cliente` (`ID`),
  ADD CONSTRAINT `pedidos_ibfk_1` FOREIGN KEY (`ID_PRODUTO`) REFERENCES `produto` (`ID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
