--
-- Banco de dados: `AHAHAHABORGES`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartuchos`
--
DROP TABLE IF EXISTS cartuchos;
CREATE TABLE `cartuchos` (
  `id` int UNSIGNED NOT NULL,
  `nome_cartucho_cd` varchar(255) NOT NULL,
  `ano` int UNSIGNED NOT NULL,
  `sistema` varchar(255) NOT NULL,
  `tela` blob NOT NULL,
  `id_usuario` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cartuchos`
--
DROP TABLE IF EXISTS deletados;
CREATE TABLE `deletados` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome_cartucho_cd` varchar(255) NOT NULL,
  `ano` int(10) UNSIGNED NOT NULL,
  `sistema` varchar(255) NOT NULL,
  `dia` varchar(10) NOT NULL,
  `id_usuario` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--
DROP TABLE IF EXISTS produtos;
CREATE TABLE `produtos` (
  `id` int UNSIGNED NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `preco` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`) VALUES
(1, 'Camiseta', '29.99'),
(2, 'Calça jeans', '79.90'),
(3, 'Tênis', '129.99'),
(4, 'Relógio', '249.99'),
(5, 'Notebook', '2599.99'),
(6, 'Celular', '1899.00'),
(7, 'Televisão', '3999.90'),
(8, 'Fones de ouvido', '149.99'),
(9, 'Cadeira de escritório', '699.00'),
(10, 'Mesa de jantar', '1499.99');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--
DROP TABLE IF EXISTS usuarios;
CREATE TABLE `usuarios` (
  `id` int UNSIGNED NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nome_de_usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `adm` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_completo`, `email`, `nome_de_usuario`, `senha`, `adm`) VALUES
(1, 'admin', '', 'admin', 'admin123', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cartuchos`
--
ALTER TABLE `cartuchos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `deletados`
--
ALTER TABLE `deletados`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cartuchos`
--
ALTER TABLE `cartuchos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `cartuchos`
--
ALTER TABLE `cartuchos`
  ADD CONSTRAINT `cartuchos_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

--
-- Limitadores para a tabela `deletados`
--
ALTER TABLE `deletados`
  ADD CONSTRAINT `deletados_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;