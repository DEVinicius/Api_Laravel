-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Set-2019 às 22:04
-- Versão do servidor: 10.3.15-MariaDB
-- versão do PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `web_api`
--
CREATE DATABASE IF NOT EXISTS `web_api` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `web_api`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ambientes`
--

CREATE TABLE `ambientes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_ambiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantidade_patrimonio` char(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_setor` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `empresas`
--

CREATE TABLE `empresas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_empresa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cnpj` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cep` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `endereco` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bairro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `historicos`
--

CREATE TABLE `historicos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_historico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_patrimonio` bigint(20) UNSIGNED NOT NULL,
  `id_empresa` bigint(20) UNSIGNED NOT NULL,
  `id_ambiente` bigint(20) UNSIGNED NOT NULL,
  `local_destino` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(34, '2014_10_12_000000_create_users_table', 1),
(35, '2014_10_12_100000_create_password_resets_table', 1),
(36, '2019_08_19_000000_create_failed_jobs_table', 1),
(37, '2019_09_23_143114_create_empresas_table', 1),
(38, '2019_09_23_143331_create_setors_table', 1),
(39, '2019_09_23_151711_create_ambientes_table', 1),
(40, '2019_09_23_162817_create_patrimonios_table', 1),
(41, '2019_09_25_161853_create_historicos_table', 1),
(42, '2019_09_25_165506_create_nivel_users_table', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel_users`
--

CREATE TABLE `nivel_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_funcao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `nivel_users`
--

INSERT INTO `nivel_users` (`id`, `nome_funcao`) VALUES
(1, 'Administrador'),
(2, 'Gerenciador'),
(3, 'Suporte');

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `patrimonios`
--

CREATE TABLE `patrimonios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_patrimonio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ambiente` bigint(20) UNSIGNED NOT NULL,
  `codigo_patrimonio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `setors`
--

CREATE TABLE `setors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nome_setor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_empresa` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ambientes`
--
ALTER TABLE `ambientes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ambientes_id_setor_foreign` (`id_setor`);

--
-- Índices para tabela `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `empresas_nome_empresa_unique` (`nome_empresa`),
  ADD UNIQUE KEY `empresas_cnpj_unique` (`cnpj`),
  ADD UNIQUE KEY `empresas_telefone_unique` (`telefone`),
  ADD UNIQUE KEY `empresas_email_unique` (`email`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `historicos`
--
ALTER TABLE `historicos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `historicos_id_patrimonio_foreign` (`id_patrimonio`),
  ADD KEY `historicos_id_empresa_foreign` (`id_empresa`),
  ADD KEY `historicos_id_ambiente_foreign` (`id_ambiente`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `nivel_users`
--
ALTER TABLE `nivel_users`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `patrimonios`
--
ALTER TABLE `patrimonios`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patrimonios_codigo_patrimonio_unique` (`codigo_patrimonio`),
  ADD KEY `patrimonios_id_ambiente_foreign` (`id_ambiente`);

--
-- Índices para tabela `setors`
--
ALTER TABLE `setors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `setors_id_empresa_foreign` (`id_empresa`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ambientes`
--
ALTER TABLE `ambientes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `historicos`
--
ALTER TABLE `historicos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT de tabela `nivel_users`
--
ALTER TABLE `nivel_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `patrimonios`
--
ALTER TABLE `patrimonios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `setors`
--
ALTER TABLE `setors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `ambientes`
--
ALTER TABLE `ambientes`
  ADD CONSTRAINT `ambientes_id_setor_foreign` FOREIGN KEY (`id_setor`) REFERENCES `setors` (`id`);

--
-- Limitadores para a tabela `historicos`
--
ALTER TABLE `historicos`
  ADD CONSTRAINT `historicos_id_ambiente_foreign` FOREIGN KEY (`id_ambiente`) REFERENCES `ambientes` (`id`),
  ADD CONSTRAINT `historicos_id_empresa_foreign` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`),
  ADD CONSTRAINT `historicos_id_patrimonio_foreign` FOREIGN KEY (`id_patrimonio`) REFERENCES `patrimonios` (`id`);

--
-- Limitadores para a tabela `patrimonios`
--
ALTER TABLE `patrimonios`
  ADD CONSTRAINT `patrimonios_id_ambiente_foreign` FOREIGN KEY (`id_ambiente`) REFERENCES `ambientes` (`id`);

--
-- Limitadores para a tabela `setors`
--
ALTER TABLE `setors`
  ADD CONSTRAINT `setors_id_empresa_foreign` FOREIGN KEY (`id_empresa`) REFERENCES `empresas` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
