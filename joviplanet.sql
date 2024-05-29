-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 22/04/2024 às 00:26
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `joviplanet`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0001_categorias`
--

CREATE TABLE `tb0001_categorias` (
  `codigoCATEGORIA` int(11) NOT NULL,
  `nomeCATEGORIA` varchar(255) NOT NULL,
  `imagemCATEGORIA` varchar(500) NOT NULL,
  `slugCATEGORIA` varchar(255) NOT NULL,
  `ativoCATEGORIA` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb0001_categorias`
--

INSERT INTO `tb0001_categorias` (`codigoCATEGORIA`, `nomeCATEGORIA`, `imagemCATEGORIA`, `slugCATEGORIA`, `ativoCATEGORIA`) VALUES
(1, 'Apartment', '', 'apartment', 1),
(2, 'Castel', '', 'castel', 1),
(3, 'House', '', 'house', 1),
(4, 'Studio', '', 'studio', 1),
(5, 'Hotel', '', 'hotel', 1),
(6, 'Condo', '', 'condo', 1),
(7, 'terrenos', '', 'terrenos', 1),
(8, 'Lojas', '', 'lojas', 1),
(9, 'Luxury orpremium', '', 'luxury orpremium', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0031_imoveis`
--

CREATE TABLE `tb0031_imoveis` (
  `codigoIMOVEL` int(11) NOT NULL,
  `planoIMOVEL` int(11) NOT NULL,
  `clienteIMOVEL` int(11) NOT NULL,
  `enderecoIMOVEL` varchar(255) NOT NULL,
  `categoriaIMOVEL` varchar(3) NOT NULL,
  `tipoIMOVEL` int(11) NOT NULL,
  `paisIMOVEL` int(11) NOT NULL,
  `tituloIMOVEL` varchar(255) NOT NULL,
  `descricaoIMOVEL` varchar(600) NOT NULL,
  `qtdpessoasIMOVEL` int(11) NOT NULL,
  `quartosIMOVEL` int(11) NOT NULL,
  `casalcamasIMOVEL` int(100) NOT NULL,
  `solteirocamasIMOVEL` int(100) NOT NULL,
  `banheirosIMOVEL` int(11) NOT NULL,
  `metragemIMOVEL` int(30) NOT NULL,
  `checkinIMOVEL` time NOT NULL,
  `checkoutIMOVEL` time NOT NULL,
  `fotosIMOVEL` int(11) NOT NULL,
  `videoIMOVEL` varchar(100) NOT NULL,
  `vagasgaragemIMOVEL` int(11) NOT NULL,
  `arcondicionadoIMOVEL` varchar(3) NOT NULL,
  `academiaIMOVEL` varchar(3) NOT NULL,
  `lavanderiaIMOVEL` varchar(3) NOT NULL,
  `saunaIMOVEL` varchar(3) NOT NULL,
  `fumarIMOVEL` varchar(3) NOT NULL,
  `petsIMOVEL` varchar(3) NOT NULL,
  `festaIMOVEL` varchar(3) NOT NULL,
  `criancasIMOVEL` int(11) NOT NULL,
  `permanenciaminimaIMOVEL` int(10) NOT NULL,
  `permanenciamaximaIMOVEL` int(10) NOT NULL,
  `regrasadicionaisIMOVEL` varchar(300) NOT NULL,
  `slugIMOVEL` varchar(255) NOT NULL,
  `emailIMOVEL` text NOT NULL,
  `closetIMOVEL` varchar(3) NOT NULL,
  `salaodejogosIMOVEL` varchar(3) NOT NULL,
  `quadraesportivaIMOVEL` varchar(3) NOT NULL,
  `portariaIMOVEL` varchar(3) NOT NULL,
  `proximoaometroIMOVEL` int(100) NOT NULL,
  `elevadorIMOVEL` varchar(3) NOT NULL,
  `playgroundIMOVEL` int(50) NOT NULL,
  `roomIMOVEL` varchar(255) NOT NULL,
  `numeroIMOVEL` varchar(20) NOT NULL,
  `cityIMOVEL` varchar(255) NOT NULL,
  `zipcodeIMOVEL` varchar(255) NOT NULL,
  `countryIMOVEL` varchar(255) NOT NULL,
  `stateIMOVEL` varchar(255) NOT NULL,
  `valorIMOVEL` text NOT NULL,
  `labelvalorIMOVEL` varchar(50) NOT NULL,
  `longitudeIMOVEL` int(50) NOT NULL,
  `latitudeIMOVEL` int(50) NOT NULL,
  `ativoIMOVEL` int(11) NOT NULL DEFAULT 1,
  `wifiIMOVEL` varchar(3) NOT NULL,
  `coberturaIMOVEL` varchar(3) NOT NULL,
  `extraIMOVEL` varchar(100) NOT NULL,
  `idIMOVEL` varchar(100) NOT NULL,
  `destaqueIMOVEL` int(100) NOT NULL,
  `poraoIMOVEL` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb0031_imoveis`
--

INSERT INTO `tb0031_imoveis` (`codigoIMOVEL`, `planoIMOVEL`, `clienteIMOVEL`, `enderecoIMOVEL`, `categoriaIMOVEL`, `tipoIMOVEL`, `paisIMOVEL`, `tituloIMOVEL`, `descricaoIMOVEL`, `qtdpessoasIMOVEL`, `quartosIMOVEL`, `casalcamasIMOVEL`, `solteirocamasIMOVEL`, `banheirosIMOVEL`, `metragemIMOVEL`, `checkinIMOVEL`, `checkoutIMOVEL`, `fotosIMOVEL`, `videoIMOVEL`, `vagasgaragemIMOVEL`, `arcondicionadoIMOVEL`, `academiaIMOVEL`, `lavanderiaIMOVEL`, `saunaIMOVEL`, `fumarIMOVEL`, `petsIMOVEL`, `festaIMOVEL`, `criancasIMOVEL`, `permanenciaminimaIMOVEL`, `permanenciamaximaIMOVEL`, `regrasadicionaisIMOVEL`, `slugIMOVEL`, `emailIMOVEL`, `closetIMOVEL`, `salaodejogosIMOVEL`, `quadraesportivaIMOVEL`, `portariaIMOVEL`, `proximoaometroIMOVEL`, `elevadorIMOVEL`, `playgroundIMOVEL`, `roomIMOVEL`, `numeroIMOVEL`, `cityIMOVEL`, `zipcodeIMOVEL`, `countryIMOVEL`, `stateIMOVEL`, `valorIMOVEL`, `labelvalorIMOVEL`, `longitudeIMOVEL`, `latitudeIMOVEL`, `ativoIMOVEL`, `wifiIMOVEL`, `coberturaIMOVEL`, `extraIMOVEL`, `idIMOVEL`, `destaqueIMOVEL`, `poraoIMOVEL`) VALUES
(1, 1, 1, '', '2', 1, 1, 'Titulo Imovel Noruega', 'Descrição do Imovel', 2, 2, 2, 0, 2, 120, '10:00:00', '14:00:00', 5, 'MyI2InRLuVI', 2, '2', '0', '1', '0', '0', '0', '0', 0, 2, 10, 'Regras Adicionais', '1', '', '0', '0', '0', '0', 0, '0', 0, '0', '0', '0', '0', '0', '0', '53,34', 'mês', -3, -1, 1, '', '', '', '', 0, ''),
(2, 0, 0, '', '1', 0, 0, 'Titulo Imovel', 'Descrição do Imovel', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '2', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(3, 0, 1, '', '1', 0, 0, 'Titulo Imovel', 'Descrição do Imovel', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '3', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(4, 0, 1, '', '1', 0, 0, 'Titulo Imovel', 'Descrição do Imovel', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '4', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(5, 0, 1, '', '2', 0, 0, 'Titulo Imovel', 'Descrição do Imovel', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '5', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(6, 1, 1, '', '3', 0, 0, 'Titulo Imovel', 'Descrição do Imovel', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '6', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(7, 1, 1, '', '4', 0, 0, 'Titulo Imovel', 'Descrição do Imovel', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '7', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(8, 1, 1, '', '1', 0, 0, 'Titulo Imovel', 'Descrição do Imovel', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '8', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(9, 1, 1, '', '2', 0, 0, 'Titulo Imovel', 'Descrição do Imovel', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '9', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(10, 1, 1, '', '6', 0, 0, 'Titulo Imovel', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '10', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(11, 1, 1, '', '0', 0, 0, 'Titulo Imovel', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '11', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(12, 1, 1, '', '7', 0, 0, 'Titulo Imovel', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '12', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(13, 1, 1, '', '5', 0, 0, 'Titulo Imovel', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '13', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(14, 1, 1, '', '5', 0, 0, 'Titulo Imovel', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '14', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(15, 1, 1, '', '0', 0, 0, 'Titulo Imovel', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '15', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(16, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '16', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(17, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '17', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(18, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '18', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(19, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '19', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(20, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '20', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(21, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '21', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(22, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '22', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(23, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '23', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(24, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '24', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(25, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '25', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(26, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '26', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(27, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '27', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(28, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '28', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(29, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '29', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(30, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '30', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(31, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '31', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(32, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '32', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(33, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '33', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(34, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '34', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(35, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '35', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(36, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '36', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(37, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '37', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(38, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '38', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(39, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '39', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(40, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '40', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(41, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '41', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(42, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '42', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(43, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '43', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(44, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '44', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(45, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '45', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(46, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '46', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(47, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '47', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(48, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '48', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(49, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '49', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(50, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '50', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(51, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '51', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(52, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '52', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(53, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '53', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(54, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '54', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(55, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '55', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(56, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '56', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(57, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '57', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(58, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '58', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(59, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '59', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(60, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '60', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(61, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '61', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(62, 1, 1, 'Rua Israel Pinheiro ', '1', 2, 0, 'dubai', 'arabes unidos', 8, 8, 1, 0, 3, 7444, '22:39:00', '20:36:00', 0, '', 1, '0', '0', '0', '1', '0', '1', '0', 3, 2, 2, 'não fumar', '62', '', '2', '1', '1', '1', 0, '1', 0, '3', '72', 'São Bernardo do Campo', '6855233221', '785525544', 'São Paulo', '7.777.777', '34', 0, 0, 0, '', '', '', '', 0, ''),
(63, 1, 1, 'Rua Israel Pinheiro ', '1', 2, 0, 'dubai', 'arabes unidos', 8, 8, 1, 0, 3, 7444, '22:39:00', '20:36:00', 0, '', 1, '0', '0', '0', '1', '0', '1', '0', 3, 2, 2, 'não fumar', '63', '', '2', '1', '1', '1', 0, '1', 0, '3', '72', 'São Bernardo do Campo', '6855233221', '785525544', 'São Paulo', '7.777.777', '34', 0, 0, 0, '', '', '', '', 0, ''),
(64, 1, 1, 'Rua Israel Pinheiro ', '1', 2, 0, 'dubai', 'arabes unidos', 8, 8, 1, 0, 3, 7444, '22:39:00', '20:36:00', 0, '', 1, '0', '0', '0', '1', '0', '1', '0', 3, 2, 2, 'não fumar', '64', '', '2', '1', '1', '1', 0, '1', 0, '3', '72', 'São Bernardo do Campo', '6855233221', '785525544', 'São Paulo', '7.777.777', '34', 0, 0, 0, '', '', '', '', 0, ''),
(65, 1, 1, 'Rua Israel Pinheiro ', '1', 2, 0, 'dubai', 'arabes unidos', 8, 8, 1, 0, 3, 7444, '22:39:00', '20:36:00', 0, '', 1, '0', '0', '0', '1', '0', '1', '0', 3, 2, 2, 'não fumar', '65', '', '2', '1', '1', '1', 0, '1', 0, '3', '72', 'São Bernardo do Campo', '6855233221', '785525544', 'São Paulo', '7.777.777', '34', 0, 0, 0, '', '', '', '', 0, ''),
(66, 1, 1, 'Rua Israel Pinheiro ', '1', 2, 0, 'dubai', 'arabes unidos', 8, 8, 1, 0, 3, 7444, '22:39:00', '20:36:00', 0, '', 1, '0', '0', '0', '1', '0', '1', '0', 3, 2, 2, 'não fumar', '66', '', '2', '1', '1', '1', 0, '1', 0, '3', '72', 'São Bernardo do Campo', '6855233221', '785525544', 'São Paulo', '7.777.777', '34', 0, 0, 0, '', '', '', '', 0, ''),
(67, 1, 1, 'Rua Israel Pinheiro ', '1', 2, 0, 'dubai', 'arabes unidos', 8, 8, 1, 0, 3, 7444, '22:39:00', '20:36:00', 0, '', 1, '0', '0', '0', '1', '0', '1', '0', 3, 2, 2, 'não fumar', '67', '', '2', '1', '1', '1', 0, '1', 0, '3', '72', 'São Bernardo do Campo', '6855233221', '785525544', 'São Paulo', '7.777.777', '34', 0, 0, 0, '', '', '', '', 0, ''),
(68, 1, 1, '', '1', 2, 0, 'dubai', 'arabes unidos', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '68', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '7.777.777', '34', 0, 0, 0, '', '', '', '', 0, ''),
(69, 1, 1, 'Dubai ', '8', 1, 0, 'emirados arabes unidos', 'Titulo do Imovel', 20, 3, 4, 0, 2, 15, '20:56:00', '20:51:00', 0, '', 1, '2', '0', '0', '0', '0', '0', '0', 1, 2, 20, 'não tem', '69', '', '2', '1', '0', '1', 0, '1', 0, '3', '256', 'Contagem', '78555215', 'Brasil', 'Minas Gerais', '75.550.000', '69.500.000', 0, 0, 0, '', '', '', '', 0, ''),
(70, 1, 1, '', '0', 0, 0, '', '', 0, 3, 4, 0, 2, 0, '00:00:00', '00:00:00', 0, '', 1, '2', '0', '0', '0', '0', '0', '0', 0, 0, 0, 'não tem', '70', '', '2', '2', '0', '1', 0, '1', 0, '3', '198', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(71, 1, 1, 'asdasdas', '0', 2, 0, 'asdasdasd', 'asdasdasdad', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '71', '', '0', '0', '0', '0', 0, '0', 0, '', '', 'asdasd', '', '', 'adasd', '75.550.000', '69.500.000', 0, 0, 0, '', '', '', '', 0, ''),
(72, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '72', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(73, 1, 1, 'sdsdsd', '1', 1, 0, 'aaaa', 'asdasd v', 0, 1, 1, 0, 1, 15, '00:00:00', '00:00:00', 0, '', 0, '1', '1', '1', '1', '1', '1', '1', 0, 0, 0, '', '73', '', '0', '1', '1', '1', 1, '1', 1, '1', '1', 'sdsds', '', '', 'sdsdsdsdss', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(74, 1, 1, '', '0', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, '', '74', '', '0', '0', '0', '0', 0, '0', 0, '', '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', 0, ''),
(75, 1, 1, 'you dont no', '0', 3, 0, 'Dubai', 'Emirados Árabes Unidos', 3, 3, 1, 0, 1, 15, '00:00:00', '00:00:00', 0, '', 3, '1', '1', '1', '1', '1', '1', '123', 3, 55, 56, '1', '75', '', '3', '1', '123', '3', 1, '3', 1, '1', '1', 'California', '', '', 'CA', '8.572,65', '7.633,98', 0, 0, 1, '', '', '', '', 0, ''),
(76, 1, 1, '', '7', 2, 0, '234567i546', 'dfgdfgfdg', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '76', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '5454', '1215841', 0, 0, 1, '', '', '', '', 0, ''),
(77, 1, 1, '', '', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '77', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(78, 1, 1, '', '', 0, 0, '', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '78', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(79, 1, 1, '', '', 0, 0, 'AAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAA', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '79', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(80, 1, 1, '', '', 0, 0, 'AAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAA', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '80', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(81, 1, 1, '', '', 0, 0, 'AAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAA', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '81', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(82, 1, 1, '', '', 0, 0, 'AAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAA', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '82', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(83, 1, 1, '', '', 0, 0, 'AAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAA', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '83', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(84, 1, 1, '', '', 0, 0, 'AAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAA', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '84', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(85, 1, 1, '', '', 0, 0, 'AAAAAAAAAAAAAAAAA', 'AAAAAAAAAAAAAAAAAAAAA', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '85', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(86, 1, 1, '', '', 0, 0, 'Título do imóvel', 'title', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '', '', 0, 0, 1, '', '', '', '', 0, ''),
(87, 1, 1, 'Alto do monte alegre', '', 0, 0, '13456', 'sssssssssssssss', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', 0, '', 0, '20', '20', 'CA', '', '', 'NY', '888888', '69.800.000', 0, 0, 1, '', '', '', '', 0, ''),
(88, 1, 1, '', '', 0, 0, 'teste 123', '', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '75.550.000', '525521', 0, 0, 1, '', '', '', '', 1, ''),
(89, 1, 1, '', '7', 3, 0, 'teste 123', 'Teste California', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', '', '', 0, 0, 0, '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '', '', '57.000', 'Venda', 0, 0, 1, '', '', '', '', 1, ''),
(90, 1, 1, '', '1', 3, 0, 'Barra da Tijuca', 'apto 4 dorms', 0, 0, 0, 0, 0, 0, '00:00:00', '00:00:00', 0, '', 0, '', '', '', '', '', 'Sim', '', 0, 0, 0, '', '', '', '', '', '', '', 0, '', 0, '', '', '', '', '02366325', '', '', '', 0, 0, 1, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0032_atributos`
--

CREATE TABLE `tb0032_atributos` (
  `codigoATRIBUTO` int(11) NOT NULL,
  `nomeATRIBUTO` varchar(50) NOT NULL,
  `iconeATRIBUTO` varchar(255) NOT NULL,
  `slugATRIBUTO` int(11) NOT NULL,
  `ativoATRIBUTO` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0033_relacionamentoatributo`
--

CREATE TABLE `tb0033_relacionamentoatributo` (
  `codigoRELATRIBUTO` int(11) NOT NULL,
  `atributoRELATRIBUTO` int(11) NOT NULL,
  `imovelRELATRIBUTO` int(11) NOT NULL,
  `valorRELATRIBUTO` varchar(100) NOT NULL,
  `slugREALATRIBUTO` int(11) NOT NULL,
  `ativoRELATRIBUTO` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0034_reservas`
--

CREATE TABLE `tb0034_reservas` (
  `codigoRESERVA` int(11) NOT NULL,
  `deRESERVA` date NOT NULL,
  `ateRESERVA` date NOT NULL,
  `imovelRESERVA` int(11) NOT NULL,
  `slugRESERVA` int(11) NOT NULL,
  `ativoRESERVA` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0035_tipoimovel`
--

CREATE TABLE `tb0035_tipoimovel` (
  `codigoTIPOIMOVEL` int(11) NOT NULL,
  `nomeTIPOIMOVEL` varchar(255) NOT NULL,
  `slugTIPOIMOVEL` varchar(255) NOT NULL,
  `ativoTIPOIMOVEL` int(11) NOT NULL DEFAULT 1,
  `ClosetImovel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb0035_tipoimovel`
--

INSERT INTO `tb0035_tipoimovel` (`codigoTIPOIMOVEL`, `nomeTIPOIMOVEL`, `slugTIPOIMOVEL`, `ativoTIPOIMOVEL`, `ClosetImovel`) VALUES
(1, 'Rent', 'rent', 1, ''),
(2, 'Sale', 'sale', 1, ''),
(3, 'Vacation', 'vacation', 1, '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0036_fotos`
--

CREATE TABLE `tb0036_fotos` (
  `codigoFOTO` int(11) NOT NULL,
  `pathFOTO` int(11) NOT NULL,
  `nomeFOTO` varchar(500) NOT NULL,
  `quantidadeFOTO` double(18,6) NOT NULL,
  `padraoFOTO` int(11) NOT NULL,
  `imovelFOTO` int(11) NOT NULL,
  `slugFOTO` int(11) NOT NULL,
  `ativoFOTO` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0037_planos`
--

CREATE TABLE `tb0037_planos` (
  `codigoPLANO` int(11) NOT NULL,
  `nomePLANO` varchar(100) NOT NULL,
  `valorPLANO` varchar(100) NOT NULL,
  `quantidadePLANO` varchar(100) NOT NULL,
  `slugPLANO` int(11) NOT NULL,
  `ativoPLANO` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb0037_planos`
--

INSERT INTO `tb0037_planos` (`codigoPLANO`, `nomePLANO`, `valorPLANO`, `quantidadePLANO`, `slugPLANO`, `ativoPLANO`) VALUES
(1, '25 Adverts (Highlights)', '4491', '25', 0, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0038_checkout`
--

CREATE TABLE `tb0038_checkout` (
  `codigoCHECKOUT` int(11) NOT NULL,
  `nomeCHECKOUT` varchar(255) NOT NULL,
  `clienteCHECKOUT` varchar(100) NOT NULL,
  `planoCHECKOUT` varchar(100) NOT NULL,
  `periodoCHECKOUT` varchar(100) NOT NULL,
  `valorCHECKOUT` decimal(18,0) NOT NULL,
  `quantidadeCHECKOUT` varchar(255) NOT NULL,
  `ativoCHECKOUT` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0039_pais`
--

CREATE TABLE `tb0039_pais` (
  `codigoPAIS` int(11) NOT NULL,
  `nomePAIS` varchar(255) NOT NULL,
  `fotoPAIS` varchar(255) NOT NULL,
  `slugPAIS` varchar(255) NOT NULL,
  `ativoPAIS` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb0039_pais`
--

INSERT INTO `tb0039_pais` (`codigoPAIS`, `nomePAIS`, `fotoPAIS`, `slugPAIS`, `ativoPAIS`) VALUES
(1, 'France', '/images/France.png', 'france', 1),
(2, 'italy', 'images/Italy.png', 'italy', 1),
(3, 'portugal', 'images/Portugal.png', 'portugal', 1),
(4, 'spain', '/images/Spain.png', 'spain', 1),
(5, 'greece', 'images/Greece.png', 'greece', 1),
(6, 'brazil', 'images/Brazil.png', 'brazil', 1),
(7, 'eua', '/images/USA.png', 'eua', 1),
(8, 'dubai', 'images/Dubai.png', 'dubai', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0050_paginas`
--

CREATE TABLE `tb0050_paginas` (
  `codigoPAGINA` int(11) NOT NULL,
  `tituloPAGINA` varchar(255) NOT NULL,
  `subtituloPAGINA` varchar(150) NOT NULL,
  `conteudoPAGINA` varchar(100) NOT NULL,
  `slugPAGINA` int(11) NOT NULL,
  `ativoPAGINA` int(11) NOT NULL DEFAULT 1,
  `NumberImovel` varchar(255) NOT NULL,
  `StateImovel` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0055_configuracoes`
--

CREATE TABLE `tb0055_configuracoes` (
  `codigoCONFIGURACAO` int(11) NOT NULL,
  `googleclientidCONFIGURACAO` varchar(255) NOT NULL,
  `googleclientsecret` varchar(255) NOT NULL,
  `googlerecaptchaCONFIGURACAO` varchar(255) NOT NULL,
  `googlemapstokenCONFIGURACAO` varchar(255) NOT NULL,
  `stripetokenCONFIGURACAO` varchar(255) NOT NULL,
  `sobrenostituloCONFIGURACAO` varchar(255) NOT NULL,
  `sobrenossubtituloCONFIGURACAO` varchar(255) NOT NULL,
  `sobrenosdescricaoCONFIGURACAO` varchar(600) NOT NULL,
  `sobrerodapeCONFIGURACAO` varchar(300) NOT NULL,
  `blocoglobotituloCONFIGURACAO` varchar(255) NOT NULL,
  `blocoglobodescricaoCONFIGURACAO` varchar(600) NOT NULL,
  `blocoglobobotaoCONFIGURACAO` varchar(55) NOT NULL,
  `blocoglobobgCONFIGURACAO` int(11) NOT NULL,
  `linkedinCONFIGURACAO` varchar(255) NOT NULL,
  `facebookCONFIGURACAO` varchar(255) NOT NULL,
  `instagramCONFIGURACAO` varchar(255) NOT NULL,
  `youtubeCONFIGURACAO` varchar(255) NOT NULL,
  `ativoCONFIGURACAO` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0155_tipoplanos`
--

CREATE TABLE `tb0155_tipoplanos` (
  `codigoTIPOPLANO` int(11) NOT NULL,
  `usuarioTIPOPLANO` int(255) NOT NULL,
  `planoTIPOPLANO` int(50) NOT NULL,
  `mensalTIPOPLANO` int(11) NOT NULL,
  `semestralTIPOPLANO` int(11) NOT NULL,
  `anualTIPOPLANO` int(50) NOT NULL,
  `premiumTIPOPLANO` int(100) NOT NULL,
  `feriasTIPOPLANO` int(11) NOT NULL,
  `ativoTIPOPLANO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0156_faturas`
--

CREATE TABLE `tb0156_faturas` (
  `codigoFATURA` int(10) UNSIGNED NOT NULL,
  `usuarioFATURA` varchar(100) NOT NULL,
  `planoFATURA` varchar(10) NOT NULL,
  `ativoFATURA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0158_financeiro`
--

CREATE TABLE `tb0158_financeiro` (
  `codigoFINANCEIRO` int(11) NOT NULL,
  `usuarioFINANCEIRO` varchar(100) NOT NULL,
  `planoFINANCEIRO` varchar(50) NOT NULL,
  `debitoFINANCEIRO` varchar(100) NOT NULL,
  `boletoFINANCEIRO` varchar(100) NOT NULL,
  `ativoFINANCEIRO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0160_visitantes`
--

CREATE TABLE `tb0160_visitantes` (
  `codigoVISITANTE` int(11) NOT NULL,
  `usuarioVISITANTE` varchar(100) NOT NULL,
  `mensagemVISITANTE` text NOT NULL,
  `chatVISITANTE` text NOT NULL,
  `perfilVISITANTE` varchar(255) NOT NULL,
  `favoritosVISITANTE` varchar(255) NOT NULL,
  `ativoVISITANTE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0161_destaques`
--

CREATE TABLE `tb0161_destaques` (
  `codigoDESTAQUE` int(11) NOT NULL,
  `ativoDESTAQUE` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0162_mensagens`
--

CREATE TABLE `tb0162_mensagens` (
  `codigoMENSAGEM` int(11) NOT NULL,
  `chatMENSAGEM` text NOT NULL,
  `favoritosMENSAGEM` varchar(200) NOT NULL,
  `perfilMENSAGEM` varchar(100) NOT NULL,
  `dataMENSAGEM` datetime NOT NULL,
  `horarioMENSAGEM` date NOT NULL,
  `frommeMENSAGEM` int(11) NOT NULL,
  `ativoMENSAGEM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0163_emails`
--

CREATE TABLE `tb0163_emails` (
  `codigoEMAIL` int(11) NOT NULL,
  `usuarioEMAIL` varchar(100) NOT NULL,
  `ativoEMAIL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0170_faqtipos`
--

CREATE TABLE `tb0170_faqtipos` (
  `codigoFAQTIPO` int(11) NOT NULL,
  `nomeFAQTIPO` varchar(255) NOT NULL,
  `ativoFAQTIPO` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0171_faq`
--

CREATE TABLE `tb0171_faq` (
  `codigoFAQ` int(11) NOT NULL,
  `tipoFAQ` int(11) NOT NULL,
  `perguntaFAQ` int(11) NOT NULL,
  `respostaFAQ` int(11) NOT NULL,
  `ativoFAQ` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0201_usuarios`
--

CREATE TABLE `tb0201_usuarios` (
  `codigoUSUARIO` int(11) NOT NULL,
  `nomeUSUARIO` varchar(20) NOT NULL,
  `sobrenomeUSUARIO` varchar(50) NOT NULL,
  `googleidUSUARIO` varchar(255) NOT NULL,
  `whatsappUSUARIO` varchar(15) NOT NULL,
  `emailUSUARIO` varchar(60) NOT NULL,
  `senhaUSUARIO` varchar(32) NOT NULL,
  `fotoUSUARIO` varchar(300) NOT NULL,
  `nivelUSUARIO` int(11) NOT NULL DEFAULT 2,
  `slugUSUARIO` int(11) NOT NULL,
  `imovelrelacionadoUSUARIO` int(11) NOT NULL,
  `ativoUSUARIO` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb0201_usuarios`
--

INSERT INTO `tb0201_usuarios` (`codigoUSUARIO`, `nomeUSUARIO`, `sobrenomeUSUARIO`, `googleidUSUARIO`, `whatsappUSUARIO`, `emailUSUARIO`, `senhaUSUARIO`, `fotoUSUARIO`, `nivelUSUARIO`, `slugUSUARIO`, `imovelrelacionadoUSUARIO`, `ativoUSUARIO`) VALUES
(1, 'Daniel', 'Picaglia', '', '+5511949880615', 'danielpicaglia@gmail.com', 'f5e086f4ba9ef1bcad872b67a623c911', 'https://joviplanet.digitalott.com.br/wp-content/uploads/2024/01/testimonial-author-4.png', 1, 0, 1, 1),
(5, 'Artur', 'Aguiar', '2cd43e0a0d1b31aab94c36bbb0077c7f', '', 'artur.aparecido@gmail.com', '2cd43e0a0d1b31aab94c36bbb0077c7f', 'https://lh3.googleusercontent.com/a/ACg8ocKgElm1V_BfJTggdAM4vcf4a2AVGUP9cjF6PXOZtCp40Q=s96-c', 3, 0, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0202_favoritos`
--

CREATE TABLE `tb0202_favoritos` (
  `codigoFAVORITO` int(11) NOT NULL,
  `imovelFAVORITO` int(11) NOT NULL,
  `usuarioFAVORITO` int(11) NOT NULL,
  `dataFAVORITO` datetime NOT NULL DEFAULT current_timestamp(),
  `ativoFAVORITO` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb0202_favoritos`
--

INSERT INTO `tb0202_favoritos` (`codigoFAVORITO`, `imovelFAVORITO`, `usuarioFAVORITO`, `dataFAVORITO`, `ativoFAVORITO`) VALUES
(12, 89, 1, '2024-04-12 20:06:25', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0203_reservas`
--

CREATE TABLE `tb0203_reservas` (
  `codigoRESERVA` int(11) NOT NULL,
  `imovelRESERVA` int(11) NOT NULL,
  `tempoRESERVA` int(11) NOT NULL,
  `usuarioRESERVA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb0203_reservas`
--

INSERT INTO `tb0203_reservas` (`codigoRESERVA`, `imovelRESERVA`, `tempoRESERVA`, `usuarioRESERVA`) VALUES
(1, 3, 90, 1),
(2, 89, 30, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb0301_mensagens`
--

CREATE TABLE `tb0301_mensagens` (
  `codigoMENSAGEM` int(11) NOT NULL,
  `remetenteMENSAGEM` int(11) NOT NULL,
  `destinatarioMENSAGEM` int(11) NOT NULL,
  `mensagemMENSAGEM` text NOT NULL,
  `frommeMESAGEM` int(11) NOT NULL,
  `imovelrelacionadoMENSAGEM` int(11) NOT NULL,
  `ativoMENSAGEM` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `tb0301_mensagens`
--

INSERT INTO `tb0301_mensagens` (`codigoMENSAGEM`, `remetenteMENSAGEM`, `destinatarioMENSAGEM`, `mensagemMENSAGEM`, `frommeMESAGEM`, `imovelrelacionadoMENSAGEM`, `ativoMENSAGEM`) VALUES
(1, 1, 5, 'Teste de mensagem', 1, 1, 1),
(2, 5, 1, 'Resposta da Mensagem', 0, 1, 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `tb0001_categorias`
--
ALTER TABLE `tb0001_categorias`
  ADD PRIMARY KEY (`codigoCATEGORIA`);

--
-- Índices de tabela `tb0031_imoveis`
--
ALTER TABLE `tb0031_imoveis`
  ADD PRIMARY KEY (`codigoIMOVEL`);

--
-- Índices de tabela `tb0032_atributos`
--
ALTER TABLE `tb0032_atributos`
  ADD PRIMARY KEY (`codigoATRIBUTO`);

--
-- Índices de tabela `tb0033_relacionamentoatributo`
--
ALTER TABLE `tb0033_relacionamentoatributo`
  ADD PRIMARY KEY (`codigoRELATRIBUTO`);

--
-- Índices de tabela `tb0034_reservas`
--
ALTER TABLE `tb0034_reservas`
  ADD PRIMARY KEY (`codigoRESERVA`);

--
-- Índices de tabela `tb0035_tipoimovel`
--
ALTER TABLE `tb0035_tipoimovel`
  ADD PRIMARY KEY (`codigoTIPOIMOVEL`);

--
-- Índices de tabela `tb0036_fotos`
--
ALTER TABLE `tb0036_fotos`
  ADD PRIMARY KEY (`codigoFOTO`);

--
-- Índices de tabela `tb0037_planos`
--
ALTER TABLE `tb0037_planos`
  ADD PRIMARY KEY (`codigoPLANO`);

--
-- Índices de tabela `tb0038_checkout`
--
ALTER TABLE `tb0038_checkout`
  ADD PRIMARY KEY (`codigoCHECKOUT`);

--
-- Índices de tabela `tb0039_pais`
--
ALTER TABLE `tb0039_pais`
  ADD PRIMARY KEY (`codigoPAIS`);

--
-- Índices de tabela `tb0050_paginas`
--
ALTER TABLE `tb0050_paginas`
  ADD PRIMARY KEY (`codigoPAGINA`);

--
-- Índices de tabela `tb0055_configuracoes`
--
ALTER TABLE `tb0055_configuracoes`
  ADD PRIMARY KEY (`codigoCONFIGURACAO`);

--
-- Índices de tabela `tb0155_tipoplanos`
--
ALTER TABLE `tb0155_tipoplanos`
  ADD PRIMARY KEY (`codigoTIPOPLANO`);

--
-- Índices de tabela `tb0156_faturas`
--
ALTER TABLE `tb0156_faturas`
  ADD PRIMARY KEY (`codigoFATURA`);

--
-- Índices de tabela `tb0158_financeiro`
--
ALTER TABLE `tb0158_financeiro`
  ADD PRIMARY KEY (`codigoFINANCEIRO`);

--
-- Índices de tabela `tb0160_visitantes`
--
ALTER TABLE `tb0160_visitantes`
  ADD PRIMARY KEY (`codigoVISITANTE`);

--
-- Índices de tabela `tb0161_destaques`
--
ALTER TABLE `tb0161_destaques`
  ADD PRIMARY KEY (`codigoDESTAQUE`);

--
-- Índices de tabela `tb0163_emails`
--
ALTER TABLE `tb0163_emails`
  ADD PRIMARY KEY (`codigoEMAIL`);

--
-- Índices de tabela `tb0170_faqtipos`
--
ALTER TABLE `tb0170_faqtipos`
  ADD PRIMARY KEY (`codigoFAQTIPO`);

--
-- Índices de tabela `tb0171_faq`
--
ALTER TABLE `tb0171_faq`
  ADD PRIMARY KEY (`codigoFAQ`);

--
-- Índices de tabela `tb0201_usuarios`
--
ALTER TABLE `tb0201_usuarios`
  ADD PRIMARY KEY (`codigoUSUARIO`);

--
-- Índices de tabela `tb0202_favoritos`
--
ALTER TABLE `tb0202_favoritos`
  ADD PRIMARY KEY (`codigoFAVORITO`);

--
-- Índices de tabela `tb0203_reservas`
--
ALTER TABLE `tb0203_reservas`
  ADD PRIMARY KEY (`codigoRESERVA`);

--
-- Índices de tabela `tb0301_mensagens`
--
ALTER TABLE `tb0301_mensagens`
  ADD PRIMARY KEY (`codigoMENSAGEM`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `tb0001_categorias`
--
ALTER TABLE `tb0001_categorias`
  MODIFY `codigoCATEGORIA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `tb0031_imoveis`
--
ALTER TABLE `tb0031_imoveis`
  MODIFY `codigoIMOVEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT de tabela `tb0032_atributos`
--
ALTER TABLE `tb0032_atributos`
  MODIFY `codigoATRIBUTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb0033_relacionamentoatributo`
--
ALTER TABLE `tb0033_relacionamentoatributo`
  MODIFY `codigoRELATRIBUTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb0034_reservas`
--
ALTER TABLE `tb0034_reservas`
  MODIFY `codigoRESERVA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb0035_tipoimovel`
--
ALTER TABLE `tb0035_tipoimovel`
  MODIFY `codigoTIPOIMOVEL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `tb0036_fotos`
--
ALTER TABLE `tb0036_fotos`
  MODIFY `codigoFOTO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb0037_planos`
--
ALTER TABLE `tb0037_planos`
  MODIFY `codigoPLANO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `tb0038_checkout`
--
ALTER TABLE `tb0038_checkout`
  MODIFY `codigoCHECKOUT` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb0039_pais`
--
ALTER TABLE `tb0039_pais`
  MODIFY `codigoPAIS` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `tb0050_paginas`
--
ALTER TABLE `tb0050_paginas`
  MODIFY `codigoPAGINA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb0055_configuracoes`
--
ALTER TABLE `tb0055_configuracoes`
  MODIFY `codigoCONFIGURACAO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb0170_faqtipos`
--
ALTER TABLE `tb0170_faqtipos`
  MODIFY `codigoFAQTIPO` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb0171_faq`
--
ALTER TABLE `tb0171_faq`
  MODIFY `codigoFAQ` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `tb0201_usuarios`
--
ALTER TABLE `tb0201_usuarios`
  MODIFY `codigoUSUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `tb0202_favoritos`
--
ALTER TABLE `tb0202_favoritos`
  MODIFY `codigoFAVORITO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de tabela `tb0203_reservas`
--
ALTER TABLE `tb0203_reservas`
  MODIFY `codigoRESERVA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `tb0301_mensagens`
--
ALTER TABLE `tb0301_mensagens`
  MODIFY `codigoMENSAGEM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
