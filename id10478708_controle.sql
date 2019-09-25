CREATE TABLE `historico` (
  `id_manutencao` int(11) NOT NULL,
  `id_patrimonio` int(11) NOT NULL,
  `id_empresa` int(11) NOT NULL,
  `id_empresa_manutencao` int(11) NOT NULL,
  `nome_manutencao` varchar(50) DEFAULT NULL,
  `descricao_problema` text DEFAULT NULL,
  `data_manutencao` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `nivel_user` (
  `id_nivel` int(11) NOT NULL,
  `nome_funcao` varchar(50) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

CREATE TABLE `relatorio` (
  `id_relatorio` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `relatorio` varchar(500) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


CREATE TABLE `user_array` (
  `id_user_array` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_ambiente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `id_empresa` int(11) DEFAULT NULL,
  `nome_usuario` varchar(100) COLLATE utf8_bin DEFAULT NULL,
  `cpf` varchar(11) COLLATE utf8_bin DEFAULT NULL,
  `id_nivel_usuario` int(11) DEFAULT NULL,
  `senha` text COLLATE utf8_bin DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_bin DEFAULT NULL,
  `telefone` varchar(20) COLLATE utf8_bin NOT NULL,
  `imagem` varchar(100) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
