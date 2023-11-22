-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 22/11/2023 às 18:59
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
-- Banco de dados: `EstiloFino`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `Acessorios`
--

CREATE TABLE `Acessorios` (
  `foto` varchar(40) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Blazers`
--

CREATE TABLE `Blazers` (
  `foto` varchar(40) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `Blusas`
--

CREATE TABLE `Blusas` (
  `foto` varchar(40) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `Blusas`
--

INSERT INTO `Blusas` (`foto`, `nome`, `preco`) VALUES
('62f6c35b4b68e2147a0445ea1d2ef2ab.jpg', 'Marron1', '100'),
('c4ccffdefa4163530037cf47306a9099.jpg', 'Marron2', '100'),
('48bc099ab7f9de48eadc90f566c83654.jpg', 'Marrom3', '100');

-- --------------------------------------------------------

--
-- Estrutura para tabela `Calcas`
--

CREATE TABLE `Calcas` (
  `foto` varchar(40) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `FaleConosco`
--

CREATE TABLE `FaleConosco` (
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `mensagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `FaleConosco`
--

INSERT INTO `FaleConosco` (`nome`, `email`, `assunto`, `mensagem`) VALUES
('bianca', 'bianca@gmail.com', 'Devolução', 'devolver blusa'),
('rayanne', 'rayanne@gmail.com', 'Sugestão', 'Gostei muito');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`nome`, `email`, `senha`) VALUES
('bianca', 'bianca@gmail.com', '123'),
('bianca', 'bianca@gmail.com', '123'),
('bianca', 'bianca@gmail.com', '123'),
('bianca', 'bianca@gmail.com', '123'),
('teste1', '1@2.com', '123'),
('teste2', '2@1.com', '123');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
