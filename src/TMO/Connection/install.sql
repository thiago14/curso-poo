CREATE DATABASE IF NOT EXISTS poo;
USE poo;

-- DROP TABLE IF EXISTS `poo`.`poo_clientes`;
CREATE TABLE IF NOT EXISTS `poo`.`poo_clientes` (
  `id`              INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nome`            VARCHAR(255)             NULL ,
  `sobrenome`       VARCHAR(255)             NULL ,
  `idade`           INT(3)                   NULL ,
  `sexo`            CHAR(1)                  NULL ,
  `cpf`             VARCHAR(15)              NULL ,
  `classificacao`   INT(2)               NOT NULL ,
  `telefone`        VARCHAR(15)          NOT NULL ,
  `razao`           VARCHAR(255)             NULL ,
  `fantasia`        VARCHAR(255)             NULL ,
  `cnpj`            VARCHAR(20)              NULL ,
  `inscricao`       VARCHAR(128)             NULL ,
  `responsavel_id`  INTEGER(10) UNSIGNED     NULL ,
  PRIMARY KEY (id)
) ENGINE = InnoDB;

-- DROP TABLE IF EXISTS `poo`.`poo_enderecos`;
CREATE TABLE IF NOT EXISTS`poo`.`poo_enderecos` (
  `id`           INTEGER(10) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `cliente_id`   INTEGER(10) UNSIGNED NOT NULL ,
  `logradouro`   VARCHAR(255)             NULL ,
  `numero`       INT(10)                  NULL ,
  `bairro`       VARCHAR(255)             NULL ,
  `cidade`       VARCHAR(255)             NULL ,
  `estado`       CHAR(2)              NOT NULL ,
  `cep`          VARCHAR(10)              NULL ,
  `cobranca`     tinyint(1)           NOT NULL ,
  PRIMARY KEY (id)
) ENGINE = InnoDB;