-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 29-Nov-2021 às 04:19
-- Versão do servidor: 10.4.20-MariaDB
-- versão do PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `reserva_carro`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro_carro`
--

CREATE TABLE `cadastro_carro` (
  `id` int(11) NOT NULL,
  `modelo` varchar(50) NOT NULL,
  `placa` varchar(50) NOT NULL,
  `ano` int(10) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `manutencao` varchar(50) NOT NULL,
  `data_inicio` varchar(10) NOT NULL,
  `data_final` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cadastro_carro`
--

INSERT INTO `cadastro_carro` (`id`, `modelo`, `placa`, `ano`, `estado`, `manutencao`, `data_inicio`, `data_final`) VALUES
(17, 'Citroen', 'AAA8E555', 2010, 'RIO', 'Disponivel', '', ''),
(18, 'Ford', 'ABC8E848', 2008, 'Paraná', 'Disponivel', '', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro_carro`
--
ALTER TABLE `cadastro_carro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro_carro`
--
ALTER TABLE `cadastro_carro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
