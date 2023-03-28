CREATE TABLE IF NOT EXISTS `exemplodsi`.`produtos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(255) NULL,
  `preco` VARCHAR(255) NULL,
  `descricao` TEXT NULL,
  `estoque` INT NULL,
  `ativo` TINYINT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;