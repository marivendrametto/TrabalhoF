-- --------------------------------------------------------
-- Anfitrião:                    127.0.0.1
-- Versão do servidor:           10.4.32-MariaDB - mariadb.org binary distribution
-- SO do servidor:               Win64
-- HeidiSQL Versão:              12.7.0.6850
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- A despejar estrutura da base de dados para precis_de_ti2
CREATE DATABASE IF NOT EXISTS `precis_de_ti2` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `precis_de_ti2`;

-- A despejar estrutura para tabela precis_de_ti2.areas_profissionais
CREATE TABLE IF NOT EXISTS `areas_profissionais` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.areas_profissionais: ~11 rows (aproximadamente)
DELETE FROM `areas_profissionais`;
INSERT INTO `areas_profissionais` (`id`, `descricao`) VALUES
	(1, 'Construção'),
	(2, 'Canalização'),
	(3, 'Mudanças'),
	(4, 'Limpezas'),
	(5, 'Electricidade'),
	(6, 'Jardinagem'),
	(7, 'Piscinas'),
	(8, 'Serviços Domésticos'),
	(9, 'Montagem'),
	(10, 'Beleza E Estética'),
	(11, 'Recados');

-- A despejar estrutura para tabela precis_de_ti2.cidade
CREATE TABLE IF NOT EXISTS `cidade` (
  `id` int(11) NOT NULL,
  `nomeCidade` varchar(255) DEFAULT NULL,
  `concelho` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `concelho` (`concelho`),
  CONSTRAINT `cidade_ibfk_1` FOREIGN KEY (`concelho`) REFERENCES `concelho` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.cidade: ~0 rows (aproximadamente)
DELETE FROM `cidade`;

-- A despejar estrutura para tabela precis_de_ti2.cliente
CREATE TABLE IF NOT EXISTS `cliente` (
  `nome` varchar(50) DEFAULT NULL,
  `nif` int(11) NOT NULL,
  `bi` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `datanascimento` date DEFAULT NULL,
  `morada` varchar(50) DEFAULT NULL,
  `telefone` int(11) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `id_tipoCliente` int(11) DEFAULT NULL,
  PRIMARY KEY (`nif`),
  KEY `tipocliente` (`id_tipoCliente`),
  CONSTRAINT `tipocliente` FOREIGN KEY (`id_tipoCliente`) REFERENCES `tipo_cliente` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.cliente: ~25 rows (aproximadamente)
DELETE FROM `cliente`;
INSERT INTO `cliente` (`nome`, `nif`, `bi`, `email`, `datanascimento`, `morada`, `telefone`, `foto`, `password`, `id_tipoCliente`) VALUES
	('jhihlkk', 0, 87808, NULL, '0000-00-00', NULL, NULL, NULL, NULL, 1),
	(NULL, 123, NULL, 'email@email.com', NULL, 'rua1', 213423, NULL, '202cb962ac59075b964b07152d234b70', NULL),
	('Maria', 1234, NULL, 'email@email.com', NULL, 'rua', 123, NULL, '81dc9bdb52d04dc20036dbd8313ed055', NULL),
	(NULL, 9048532, NULL, 'email@teste.com', NULL, 'sdlkjgtifçes', 396845, NULL, '0b2b732d6c5848ec7784c57c2e3acba3', NULL),
	('marta', 12345566, 5634653, 'email1@email1.com', '1993-10-12', 'rua', 945903, NULL, '1234', NULL),
	(NULL, 12345678, NULL, 'teste@teste.com', NULL, 'morada', 2147483647, NULL, '202cb962ac59075b964b07152d234b70', NULL),
	(NULL, 49735638, NULL, 'teste@teste.com', NULL, '.jsdvb,khgtj', 29487569, NULL, '5c173b601be14c6210b3115f8e7a6bf3', NULL),
	('João Silva', 123456789, NULL, 'joao.silva@example.com', '1985-06-15', 'Rua A, 123', 912345678, NULL, NULL, NULL),
	('Gustavo Lima', 147258369, NULL, 'gustavo.lima@example.com', '1994-12-16', 'Avenida O, 147', 978912012, NULL, NULL, NULL),
	('Tiago Almeida', 159258463, NULL, 'tiago.almeida@example.com', '1980-10-02', 'Rua I, 159', 912398456, NULL, NULL, NULL),
	('Ricardo Ferreira', 159753486, NULL, 'ricardo.ferreira@example.com', '1987-05-14', 'Rua G, 159', 978901234, NULL, NULL, NULL),
	('Rui Martins', 258147963, NULL, 'rui.martins@example.com', '1983-06-21', 'Avenida M, 258', 956790890, NULL, NULL, NULL),
	('Inês Rocha', 258963147, NULL, 'ines.rocha@example.com', '1984-04-17', 'Avenida J, 258', 923469567, NULL, NULL, NULL),
	('Lucas Vasconcelos', 321321321, NULL, 'lucas.vasconcelos@example.com', '1985-05-30', 'Avenida Q, 321', 912345678, NULL, NULL, NULL),
	('Camila Andrade', 321654123, NULL, 'camila.andrade@example.com', '1989-06-11', 'Rua R, 321', 923456789, NULL, NULL, NULL),
	('Ana Costa', 321654987, NULL, 'ana.costa@example.com', '1995-07-19', 'Rua D, 321', 945678901, NULL, NULL, NULL),
	('Bruno Silva', 369258147, NULL, 'bruno.silva@example.com', '1979-02-24', 'Rua K, 369', 934578678, NULL, NULL, NULL),
	('Pedro Santos', 456789123, NULL, 'pedro.santos@example.com', '1988-11-30', 'Travessa C, 789', 934567890, NULL, NULL, NULL),
	('Tatiane Lima', 654321456, NULL, 'tatiane.lima@example.com', '1990-03-04', 'Rua P, 654', 989023123, NULL, NULL, NULL),
	('José Pereira', 654321789, NULL, 'jose.pereira@example.com', '1982-12-05', 'Avenida E, 654', 956789012, NULL, NULL, NULL),
	('Sofia Ribeiro', 753159258, NULL, 'sofia.ribeiro@example.com', '1993-09-08', 'Avenida H, 753', 989012345, NULL, NULL, NULL),
	('Mariana Nascimento', 789321654, NULL, 'mariana.nascimento@example.com', '1996-11-09', 'Rua N, 789', 967801901, NULL, NULL, NULL),
	('Clara Martins', 789654123, NULL, 'clara.martins@example.com', '1991-01-29', 'Rua F, 987', 967890123, NULL, NULL, NULL),
	('Patrícia Gomes', 951753852, NULL, 'patricia.gomes@example.com', '1992-08-11', 'Rua L, 951', 945689789, NULL, NULL, NULL),
	('Maria Oliveira', 987654321, NULL, 'maria.oliveira@example.com', '1990-03-22', 'Avenida B, 456', 923456789, NULL, NULL, NULL),
	(NULL, 2147483647, NULL, 'email', NULL, 'mncbfng.khj', 38746590, NULL, '25f9e794323b453885f5181f1b624d0b', NULL);

-- A despejar estrutura para tabela precis_de_ti2.competencias
CREATE TABLE IF NOT EXISTS `competencias` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.competencias: ~0 rows (aproximadamente)
DELETE FROM `competencias`;

-- A despejar estrutura para tabela precis_de_ti2.concelho
CREATE TABLE IF NOT EXISTS `concelho` (
  `id` int(11) NOT NULL,
  `nomeConcelho` varchar(255) DEFAULT NULL,
  `distrito` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `distrito` (`distrito`),
  CONSTRAINT `concelho_ibfk_1` FOREIGN KEY (`distrito`) REFERENCES `distrito` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.concelho: ~0 rows (aproximadamente)
DELETE FROM `concelho`;

-- A despejar estrutura para tabela precis_de_ti2.distrito
CREATE TABLE IF NOT EXISTS `distrito` (
  `id` int(11) NOT NULL,
  `nomeDistrito` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.distrito: ~0 rows (aproximadamente)
DELETE FROM `distrito`;

-- A despejar estrutura para tabela precis_de_ti2.estado_pagamento
CREATE TABLE IF NOT EXISTS `estado_pagamento` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.estado_pagamento: ~0 rows (aproximadamente)
DELETE FROM `estado_pagamento`;

-- A despejar estrutura para tabela precis_de_ti2.estado_serviço
CREATE TABLE IF NOT EXISTS `estado_serviço` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.estado_serviço: ~4 rows (aproximadamente)
DELETE FROM `estado_serviço`;
INSERT INTO `estado_serviço` (`id`, `descricao`) VALUES
	(1, 'em progresso'),
	(2, 'concluido'),
	(3, 'cancelado'),
	(4, 'recusado');

-- A despejar estrutura para tabela precis_de_ti2.estado_sessao
CREATE TABLE IF NOT EXISTS `estado_sessao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.estado_sessao: ~0 rows (aproximadamente)
DELETE FROM `estado_sessao`;

-- A despejar estrutura para tabela precis_de_ti2.freguesia
CREATE TABLE IF NOT EXISTS `freguesia` (
  `id` int(11) NOT NULL,
  `nomeFreguesia` varchar(255) DEFAULT NULL,
  `concelho` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `concelho` (`concelho`),
  CONSTRAINT `freguesia_ibfk_1` FOREIGN KEY (`concelho`) REFERENCES `concelho` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.freguesia: ~0 rows (aproximadamente)
DELETE FROM `freguesia`;

-- A despejar estrutura para tabela precis_de_ti2.gestao_permissao
CREATE TABLE IF NOT EXISTS `gestao_permissao` (
  `id` int(11) NOT NULL,
  `descPermissao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.gestao_permissao: ~0 rows (aproximadamente)
DELETE FROM `gestao_permissao`;

-- A despejar estrutura para tabela precis_de_ti2.historico_de_recusas
CREATE TABLE IF NOT EXISTS `historico_de_recusas` (
  `idOrcamento` int(11) NOT NULL,
  `motivo` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idOrcamento`),
  CONSTRAINT `historico_de_recusas_ibfk_1` FOREIGN KEY (`idOrcamento`) REFERENCES `orcamento` (`idPedidoOrcamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.historico_de_recusas: ~0 rows (aproximadamente)
DELETE FROM `historico_de_recusas`;

-- A despejar estrutura para tabela precis_de_ti2.historico_de_servico
CREATE TABLE IF NOT EXISTS `historico_de_servico` (
  `idOrcamento` int(11) NOT NULL,
  `idPedido` int(11) DEFAULT NULL,
  `idEstado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idOrcamento`),
  KEY `FK_historico_de_servico_pedido_serviço` (`idPedido`),
  KEY `FK_historico_de_servico_estado_serviço` (`idEstado`),
  CONSTRAINT `FK_historico_de_servico_estado_serviço` FOREIGN KEY (`idEstado`) REFERENCES `estado_serviço` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_historico_de_servico_pedido_serviço` FOREIGN KEY (`idPedido`) REFERENCES `pedido_serviço` (`idPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `historico_de_servico_ibfk_1` FOREIGN KEY (`idOrcamento`) REFERENCES `orcamento` (`idPedidoOrcamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.historico_de_servico: ~2 rows (aproximadamente)
DELETE FROM `historico_de_servico`;
INSERT INTO `historico_de_servico` (`idOrcamento`, `idPedido`, `idEstado`) VALUES
	(5, 2, 2),
	(7, 1, 2);

-- A despejar estrutura para tabela precis_de_ti2.impostos
CREATE TABLE IF NOT EXISTS `impostos` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.impostos: ~0 rows (aproximadamente)
DELETE FROM `impostos`;

-- A despejar estrutura para tabela precis_de_ti2.materiais_orcamento
CREATE TABLE IF NOT EXISTS `materiais_orcamento` (
  `idmateriais` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(50) DEFAULT NULL,
  `valor` double DEFAULT NULL,
  PRIMARY KEY (`idmateriais`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.materiais_orcamento: ~5 rows (aproximadamente)
DELETE FROM `materiais_orcamento`;
INSERT INTO `materiais_orcamento` (`idmateriais`, `descricao`, `valor`) VALUES
	(1, 'tubo pvc', 6.99),
	(2, 'tubo aço inoxidável', 6.49),
	(3, 'curva', 0.75),
	(4, 'chave fendas', 4.79),
	(5, 'chave boca unica', 4.99);

-- A despejar estrutura para tabela precis_de_ti2.morada
CREATE TABLE IF NOT EXISTS `morada` (
  `id` int(11) NOT NULL,
  `nomeRua` varchar(255) DEFAULT NULL,
  `numPorta` varchar(50) DEFAULT NULL,
  `freguesia` int(11) DEFAULT NULL,
  `cidade` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `freguesia` (`freguesia`),
  KEY `cidade` (`cidade`),
  CONSTRAINT `morada_ibfk_1` FOREIGN KEY (`freguesia`) REFERENCES `freguesia` (`id`),
  CONSTRAINT `morada_ibfk_2` FOREIGN KEY (`cidade`) REFERENCES `cidade` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.morada: ~0 rows (aproximadamente)
DELETE FROM `morada`;

-- A despejar estrutura para tabela precis_de_ti2.orcamento
CREATE TABLE IF NOT EXISTS `orcamento` (
  `idPedidoOrcamento` int(11) NOT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `estado` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idPedidoOrcamento`),
  CONSTRAINT `orcamento_ibfk_1` FOREIGN KEY (`idPedidoOrcamento`) REFERENCES `pedido_de_orcamento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.orcamento: ~3 rows (aproximadamente)
DELETE FROM `orcamento`;
INSERT INTO `orcamento` (`idPedidoOrcamento`, `valor`, `estado`) VALUES
	(5, NULL, 'Em progresso'),
	(7, NULL, 'Em progresso'),
	(8, NULL, 'Em progresso');

-- A despejar estrutura para tabela precis_de_ti2.pagamentos
CREATE TABLE IF NOT EXISTS `pagamentos` (
  `idServico` int(11) NOT NULL,
  `estado` int(11) DEFAULT NULL,
  PRIMARY KEY (`idServico`),
  KEY `estado` (`estado`),
  CONSTRAINT `pagamentos_ibfk_1` FOREIGN KEY (`idServico`) REFERENCES `servicos` (`idOrcamento`),
  CONSTRAINT `pagamentos_ibfk_2` FOREIGN KEY (`estado`) REFERENCES `estado_pagamento` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.pagamentos: ~0 rows (aproximadamente)
DELETE FROM `pagamentos`;

-- A despejar estrutura para tabela precis_de_ti2.pedido_de_orcamento
CREATE TABLE IF NOT EXISTS `pedido_de_orcamento` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nifPrestador` int(11) DEFAULT NULL,
  `nifOrcamento` int(11) DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `duracao` int(11) DEFAULT NULL,
  `comentario` varchar(255) DEFAULT NULL,
  `fotoPedido` varchar(50) DEFAULT NULL,
  `materiais` int(11) DEFAULT NULL,
  `taxas` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nifPrestador` (`nifPrestador`),
  KEY `FK_pedido_de_orcamento_materiais_orcamento` (`materiais`),
  CONSTRAINT `FK_pedido_de_orcamento_materiais_orcamento` FOREIGN KEY (`materiais`) REFERENCES `materiais_orcamento` (`idmateriais`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK_pedido_de_orcamento_prestador_serviços` FOREIGN KEY (`nifPrestador`) REFERENCES `prestador_servicos` (`nif`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.pedido_de_orcamento: ~3 rows (aproximadamente)
DELETE FROM `pedido_de_orcamento`;
INSERT INTO `pedido_de_orcamento` (`id`, `nifPrestador`, `nifOrcamento`, `data`, `duracao`, `comentario`, `fotoPedido`, `materiais`, `taxas`) VALUES
	(5, 321654987, 1111111111, '2024-12-24 14:00:00', NULL, 'comentario 1', NULL, NULL, NULL),
	(7, 321654987, 1111111111, '2024-12-24 14:00:00', NULL, 'comentarior 2 a descrever problema', NULL, NULL, NULL),
	(8, 321654987, 2147483647, '2024-12-24 14:00:00', NULL, 'comentarior 3 a descrever problema', NULL, NULL, NULL);

-- A despejar estrutura para tabela precis_de_ti2.pedido_serviço
CREATE TABLE IF NOT EXISTS `pedido_serviço` (
  `idPedido` int(11) NOT NULL AUTO_INCREMENT,
  `nifCliente` int(11) DEFAULT NULL,
  `idArea` int(11) DEFAULT NULL,
  `nifPrestador` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPedido`),
  KEY `FK__cliente` (`nifCliente`),
  KEY `FK__areas_profissionais` (`idArea`),
  KEY `FK__prestador_serviços` (`nifPrestador`),
  CONSTRAINT `FK__areas_profissionais` FOREIGN KEY (`idArea`) REFERENCES `areas_profissionais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK__cliente` FOREIGN KEY (`nifCliente`) REFERENCES `cliente` (`nif`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `FK__prestador_serviços` FOREIGN KEY (`nifPrestador`) REFERENCES `prestador_servicos` (`nif`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.pedido_serviço: ~2 rows (aproximadamente)
DELETE FROM `pedido_serviço`;
INSERT INTO `pedido_serviço` (`idPedido`, `nifCliente`, `idArea`, `nifPrestador`) VALUES
	(1, 1234, 1, 321654987),
	(2, 1234, 9, 753159258);

-- A despejar estrutura para tabela precis_de_ti2.prestador_areas
CREATE TABLE IF NOT EXISTS `prestador_areas` (
  `id_prestador` int(11) NOT NULL,
  `id_area` int(11) NOT NULL,
  PRIMARY KEY (`id_prestador`,`id_area`),
  KEY `id_area` (`id_area`),
  CONSTRAINT `prestador_areas_ibfk_1` FOREIGN KEY (`id_prestador`) REFERENCES `prestador_servicos` (`idPrestador`),
  CONSTRAINT `prestador_areas_ibfk_2` FOREIGN KEY (`id_area`) REFERENCES `areas_profissionais` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.prestador_areas: ~0 rows (aproximadamente)
DELETE FROM `prestador_areas`;

-- A despejar estrutura para tabela precis_de_ti2.prestador_servicos
CREATE TABLE IF NOT EXISTS `prestador_servicos` (
  `idPrestador` int(11) NOT NULL,
  `nif` int(11) NOT NULL,
  `certificado` varchar(255) NOT NULL DEFAULT '',
  `cadastro` varchar(255) DEFAULT NULL,
  `foto_prestador` varchar(255) DEFAULT NULL,
  `id_tipoPrestador` int(11) DEFAULT NULL,
  `idServico` int(11) DEFAULT NULL,
  `valor_hora` int(11) DEFAULT NULL,
  PRIMARY KEY (`idPrestador`),
  KEY `nif` (`nif`),
  KEY `tipoprestador` (`id_tipoPrestador`),
  KEY `FK_prestador_serviços_areas_profissionais` (`idServico`),
  CONSTRAINT `FK_prestador_serviços_areas_profissionais` FOREIGN KEY (`idServico`) REFERENCES `areas_profissionais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `nif` FOREIGN KEY (`nif`) REFERENCES `cliente` (`nif`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `tipoprestador` FOREIGN KEY (`id_tipoPrestador`) REFERENCES `tipo_prestador` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.prestador_servicos: ~3 rows (aproximadamente)
DELETE FROM `prestador_servicos`;
INSERT INTO `prestador_servicos` (`idPrestador`, `nif`, `certificado`, `cadastro`, `foto_prestador`, `id_tipoPrestador`, `idServico`, `valor_hora`) VALUES
	(1, 321654987, '', NULL, NULL, NULL, 2, NULL),
	(2, 258963147, '', NULL, NULL, NULL, 1, NULL),
	(3, 753159258, '', NULL, NULL, NULL, 2, NULL);

-- A despejar estrutura para tabela precis_de_ti2.quadro_das_competencias
CREATE TABLE IF NOT EXISTS `quadro_das_competencias` (
  `id` int(11) NOT NULL,
  `id_areaProfissional` int(11) DEFAULT NULL,
  `idPrestador` int(11) DEFAULT NULL,
  `prestadorAreaProfissional` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `areasProfissionais` (`id_areaProfissional`),
  KEY `idPrestador` (`idPrestador`),
  CONSTRAINT `areasProfissionais` FOREIGN KEY (`id_areaProfissional`) REFERENCES `areas_profissionais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `idPrestador` FOREIGN KEY (`idPrestador`) REFERENCES `prestador_servicos` (`idPrestador`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.quadro_das_competencias: ~0 rows (aproximadamente)
DELETE FROM `quadro_das_competencias`;

-- A despejar estrutura para tabela precis_de_ti2.recusas
CREATE TABLE IF NOT EXISTS `recusas` (
  `idOrcamento` int(11) NOT NULL,
  PRIMARY KEY (`idOrcamento`),
  CONSTRAINT `recusas_ibfk_1` FOREIGN KEY (`idOrcamento`) REFERENCES `orcamento` (`idPedidoOrcamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.recusas: ~0 rows (aproximadamente)
DELETE FROM `recusas`;

-- A despejar estrutura para tabela precis_de_ti2.servicos
CREATE TABLE IF NOT EXISTS `servicos` (
  `idOrcamento` int(11) NOT NULL,
  `idPedido` int(11) DEFAULT NULL,
  PRIMARY KEY (`idOrcamento`),
  KEY `FK_servicos_pedido_serviço` (`idPedido`),
  CONSTRAINT `FK_servicos_pedido_serviço` FOREIGN KEY (`idPedido`) REFERENCES `pedido_serviço` (`idPedido`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `servicos_ibfk_1` FOREIGN KEY (`idOrcamento`) REFERENCES `orcamento` (`idPedidoOrcamento`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.servicos: ~1 rows (aproximadamente)
DELETE FROM `servicos`;
INSERT INTO `servicos` (`idOrcamento`, `idPedido`) VALUES
	(5, 1),
	(7, 2);

-- A despejar estrutura para tabela precis_de_ti2.sessao
CREATE TABLE IF NOT EXISTS `sessao` (
  `id` int(11) NOT NULL,
  `nifUtilizador` int(11) DEFAULT NULL,
  `dataInicio` datetime DEFAULT NULL,
  `dataFim` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `nifUtilizador` (`nifUtilizador`),
  CONSTRAINT `sessao_ibfk_1` FOREIGN KEY (`nifUtilizador`) REFERENCES `utilizador` (`nif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.sessao: ~0 rows (aproximadamente)
DELETE FROM `sessao`;

-- A despejar estrutura para tabela precis_de_ti2.subscricao
CREATE TABLE IF NOT EXISTS `subscricao` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.subscricao: ~0 rows (aproximadamente)
DELETE FROM `subscricao`;

-- A despejar estrutura para tabela precis_de_ti2.taxas
CREATE TABLE IF NOT EXISTS `taxas` (
  `id` int(11) NOT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.taxas: ~3 rows (aproximadamente)
DELETE FROM `taxas`;
INSERT INTO `taxas` (`id`, `descricao`, `valor`) VALUES
	(0, 'taxa_deslocacao', 3.00),
	(1, 'taxa_normal', 4.00),
	(2, 'taxa_urgencia', 10.00);

-- A despejar estrutura para tabela precis_de_ti2.tipo_cliente
CREATE TABLE IF NOT EXISTS `tipo_cliente` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.tipo_cliente: ~2 rows (aproximadamente)
DELETE FROM `tipo_cliente`;
INSERT INTO `tipo_cliente` (`id`, `descricao`) VALUES
	(1, 'Particular'),
	(2, 'Empresarial');

-- A despejar estrutura para tabela precis_de_ti2.tipo_prestador
CREATE TABLE IF NOT EXISTS `tipo_prestador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.tipo_prestador: ~2 rows (aproximadamente)
DELETE FROM `tipo_prestador`;
INSERT INTO `tipo_prestador` (`id`, `descricao`) VALUES
	(1, 'Particular'),
	(2, 'Empresarial');

-- A despejar estrutura para tabela precis_de_ti2.tipo_servio
CREATE TABLE IF NOT EXISTS `tipo_servio` (
  `idtipo_servico` int(11) NOT NULL AUTO_INCREMENT,
  `area_servico` int(11) NOT NULL DEFAULT 0,
  `descricao` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`idtipo_servico`),
  KEY `FK_tipo_servio_areas_profissionais` (`area_servico`),
  CONSTRAINT `FK_tipo_servio_areas_profissionais` FOREIGN KEY (`area_servico`) REFERENCES `areas_profissionais` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.tipo_servio: ~5 rows (aproximadamente)
DELETE FROM `tipo_servio`;
INSERT INTO `tipo_servio` (`idtipo_servico`, `area_servico`, `descricao`) VALUES
	(1, 2, 'susbtituição de torneira'),
	(2, 2, 'substituição de sanitas'),
	(3, 2, 'reparação de autoclismo'),
	(4, 2, 'fuga de água'),
	(5, 2, 'desentupemento de canos');

-- A despejar estrutura para tabela precis_de_ti2.tipo_utilizador
CREATE TABLE IF NOT EXISTS `tipo_utilizador` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- A despejar dados para tabela precis_de_ti2.tipo_utilizador: ~2 rows (aproximadamente)
DELETE FROM `tipo_utilizador`;
INSERT INTO `tipo_utilizador` (`id`, `descricao`) VALUES
	(4, 'Admin'),
	(5, 'User');

-- A despejar estrutura para disparador precis_de_ti2.taxas_orcamento
SET @OLDTMP_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_ZERO_IN_DATE,NO_ZERO_DATE,NO_ENGINE_SUBSTITUTION';
DELIMITER //
CREATE TRIGGER taxas_orcamento
AFTER INSERT ON pedido_de_orcamento
FOR EACH ROW
BEGIN
    
    DECLARE taxa1 DECIMAL(10, 2);
    DECLARE taxa2 DECIMAL(10, 2);

    
    SELECT valor INTO taxa1 FROM Taxas WHERE id = 0;
    SELECT valor INTO taxa2 FROM Taxas WHERE id = 1;

    
    UPDATE pedido_de_orcamento
    SET taxas_orcamento = taxa1 + taxa2
   WHERE id = NEW.id;
END//
DELIMITER ;
SET SQL_MODE=@OLDTMP_SQL_MODE;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
