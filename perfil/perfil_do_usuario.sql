-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17/11/2023 às 18:09
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
-- Banco de dados: `perfil_do_usuario`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `perfil`
--

CREATE TABLE `perfil` (
  `ID` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `data_nascimento` int(8) NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `endereco` varchar(250) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `perfil`
--

INSERT INTO `perfil` (`ID`, `nome`, `data_nascimento`, `cpf`, `endereco`, `created`, `modified`) VALUES
(3, ' júlia', 1992, '123.567.239-45', 'Rua dos Girassóis Dourados', '2023-11-16 15:20:26', '0000-00-00 00:00:00'),
(4, 'gabriela', 2006, '123.654.238-56', 'Rua do Bosque', '2023-11-16 15:22:30', '0000-00-00 00:00:00'),
(5, 'joao', 2010, '873.634.167-48', 'rua araújo dos santos', '2023-11-16 15:25:40', '0000-00-00 00:00:00'),
(6, 'pedro', 2012, '246.923.579-13', 'rua joão pessoa', '2023-11-16 15:26:33', '0000-00-00 00:00:00'),
(7, 'pedro', 2012, '246.923.579-13', 'rua joão pessoa', '2023-11-16 15:26:40', '0000-00-00 00:00:00'),
(8, 'pedro', 2012, '246.923.579-13', 'rua joão pessoa', '2023-11-16 15:26:44', '0000-00-00 00:00:00'),
(9, 'erick', 1989, '875.434.544-22', ' Rua da República', '2023-11-16 15:31:41', '0000-00-00 00:00:00');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `perfil`
--
ALTER TABLE `perfil`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `perfil`
--
ALTER TABLE `perfil`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
