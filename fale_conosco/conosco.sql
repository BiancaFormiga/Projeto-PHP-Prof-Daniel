-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2023 às 13:53
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
-- Banco de dados: `fale_conosco`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `conosco`
--

CREATE TABLE `conosco` (
  `ID` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `assunto` varchar(100) NOT NULL,
  `mensagem` varchar(800) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `conosco`
--

INSERT INTO `conosco` (`ID`, `nome`, `email`, `assunto`, `mensagem`, `created`, `modified`) VALUES
(8, 'rayla ', 'rayla@gmail.com', 'Devolução', 'quero devolver o meu produto ', '2023-11-21 09:44:04', '0000-00-00 00:00:00'),
(9, 'thamyris', 'thamyris@gmail', 'Devolução', 'wefghbjjhgfds', '2023-11-21 09:48:38', '0000-00-00 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `conosco`
--
ALTER TABLE `conosco`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `conosco`
--
ALTER TABLE `conosco`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
