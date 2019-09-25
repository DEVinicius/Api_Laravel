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
