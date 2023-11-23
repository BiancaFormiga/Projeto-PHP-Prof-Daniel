-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2023 às 13:21
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
-- Banco de dados: `estilofino`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `acessorios`
--

CREATE TABLE `acessorios` (
  `foto` varchar(40) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `acessorios`
--

INSERT INTO `acessorios` (`foto`, `nome`, `preco`) VALUES
('abeeae80d4b29913be70b2d450dde36d.jpg', 'Cinto2', '79,99'),
('f528dcc3fc27a9419506c34e65af65bd.jpg', 'Cinto3', '79,99'),
('74f1def81eba08ddea620d6569b5ef5e.jpg', 'Oculos1', '79,99'),
('44556589cf960340d7287c9310b25e5a.jpg', 'Oculos2', '79,99'),
('7084af13778be79b7f2a343bc02fa850.jpg', 'Oculos3', '79,99'),
('c4e1b0249e4d03261d0784adab9e180e.jpg', 'Presilha1', '79,99'),
('0648d4a137f63a68718591c3da9c0bfb.jpg', 'Presilha2', '79,99'),
('1d509e43bbadf5d22529871622e4a1f3.jpg', 'Presilha3', '79,99');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blazers`
--

CREATE TABLE `blazers` (
  `foto` varchar(40) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `blazers`
--

INSERT INTO `blazers` (`foto`, `nome`, `preco`) VALUES
('24ffbb0b3f9a57537d0f9cf2833842e2.jpg', 'bege1', '59,99'),
('552836f1fbfb1f00e4c7da6796470d89.jpg', 'bege2', '59,99'),
('2be7937c1a0da99a1a5aca862e53f228.jpg', 'bege3', '59,99'),
('f4d89ea9631e255da172165b5c630eb2.jpg', 'bege4', '59,99'),
('d0dc10a79dc2ed45a119a5f72cbe62a4.jpg', 'Marrom1', '59,99'),
('07406b54ce6e5772032e32731cd138ac.jpg', 'Marrom2', '59,99'),
('20a20145f4d340dbb042ede0bb403c65.jpg', 'Marrom3', '59,99'),
('7a14b2ff8c4fdf3e479d824a50134fba.jpg', 'Marrom4', '59,99'),
('2b6b4aebf8fcbacf9f7f6e100ea3b243.jpg', 'Bege1', '59,99'),
('4ff1544fde25b68a9662c07cb4db76bf.jpg', 'bege2', '59,99'),
('047c2dd3621fe27b8b4678561ff8ff3c.jpg', 'bege3', '59,99'),
('dffd16ac46eb8481e03a851fa4c86f4e.jpg', 'Marrom1', '59,99'),
('af31ac058f29870ce0819be63c36c065.jpg', 'Marrom2', '59,99'),
('b91b27ddab4c31f69a14584162b6284d.jpg', 'Marrom3', '59,99'),
('350218d8bb146ede37df9bdae77540ca.jpg', 'Preta1', '59,99'),
('ef8f6a3771e2363f225755384a4bb84b.jpg', 'Preta2', '59,99'),
('f201fb35beb08d2e43cdefa7d6ec5bc4.jpg', 'Preta3', '59,99'),
('c4892c4d6b5816dc1be2f1c4784e084d.jpg', 'Preta4', '59,99');

-- --------------------------------------------------------

--
-- Estrutura para tabela `blusas`
--

CREATE TABLE `blusas` (
  `foto` varchar(40) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `blusas`
--

INSERT INTO `blusas` (`foto`, `nome`, `preco`) VALUES
('6cedbde8a2bbe59796d6132bc30ee45e.png', 'Bege1', '59,99'),
('a5c44699bef53ed6d2c1d765cc737404.png', 'Bege2', '79,99'),
('d5ac2595e97aa2e99400572e079ac450.png', 'Bege3', '96,99'),
('a93377e4441da0167d2b2fc50daa7481.png', 'Bege4', '69,99'),
('dd0b17d8b1c0d4039d66edf74fa1668d.png', 'Bege1', '69,99'),
('0842faa6effa24b3afa3562d5e987365.png', 'Branco1', '69,99'),
('9e32be910ce78bd9ea40eaee0abfe0cd.png', 'Branco2', '69,99'),
('c23eab94dc2d495d0b844a767fa683ba.png', 'Branco3', '69,99'),
('2d076caaf9fadc5377a1bc1e392a5981.png', 'Branco4', '69,99'),
('12ebe5b02bd5b57cb55ee21a572cfa02.png', 'Preto1', '69,99'),
('105e8b2ec37e76165960a0a58d71b920.png', 'Preto2', '69,99'),
('251945a57806e9f29d87a2efa79aa1f0.png', 'Preto3', '69,99'),
('1c70a789737f5cd1e3f1de1513175eb8.png', 'Preto4', '69,99');

-- --------------------------------------------------------

--
-- Estrutura para tabela `calcas`
--

CREATE TABLE `calcas` (
  `foto` varchar(40) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `preco` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `calcas`
--

INSERT INTO `calcas` (`foto`, `nome`, `preco`) VALUES
('da82b889086771cb98a6be3c87c0a2c2.jpg', 'Marrom1', '96,96'),
('6b35e2aa38f223158367cc85b3837baa.jpg', 'Branco3', '69,99'),
('866e1027335ccd5e2cc44e597cea253e.jpg', 'Marrom3', '69,99'),
('4e14133774b5c2a5379ec71817d71ae2.jpg', 'Preta1', '59,99'),
('74aa1abe8a6b158da1e17a67e9ff85f7.jpg', 'Preta2', '59,99'),
('fb061c572270418dd39f0bf5aff1a84a.jpg', 'Preta3', '59,99');

-- --------------------------------------------------------

--
-- Estrutura para tabela `comprafinalizada`
--

CREATE TABLE `comprafinalizada` (
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `cpf` varchar(8) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `pagamento` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `comprafinalizada`
--

INSERT INTO `comprafinalizada` (`nome`, `email`, `cpf`, `endereco`, `pagamento`) VALUES
('Rayanne Freire De Farias', 'freirerayanne55@gmail.com', '797.396.', 'Rua Benilson Gomes De Araújo, 145', 'Boleto');

-- --------------------------------------------------------

--
-- Estrutura para tabela `faleconosco`
--

CREATE TABLE `faleconosco` (
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `assunto` varchar(255) DEFAULT NULL,
  `mensagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
