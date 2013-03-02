SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE=`TRADITIONAL`;

DROP SCHEMA IF EXISTS `bistrodb` ;
CREATE SCHEMA IF NOT EXISTS `bistrodb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `bistrodb` ;

-- -----------------------------------------------------
-- Table `bistrodb`.`clients`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bistrodb`.`clients` ;

CREATE  TABLE IF NOT EXISTS `bistrodb`.`clients` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `cpf` VARCHAR(14) NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `phone` VARCHAR(13) NULL ,
  `cellphone` VARCHAR(13) NULL ,
  `email` VARCHAR(45) NULL ,
  `removed` TINYINT(1) NOT NULL ,
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) ,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

-- -----------------------------------------------------
-- Table `bistrodb`.`addresses`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bistrodb`.`addresses` ;

CREATE  TABLE IF NOT EXISTS `bistrodb`.`addresses` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `address` VARCHAR(45) NULL ,
  `number` VARCHAR(5) NULL ,
  `neighborhood` VARCHAR(45) NULL ,
  `city` VARCHAR(45) NULL ,
  `state` VARCHAR(45) NULL ,
  `complement` VARCHAR(45) NULL ,
  `zip_code` VARCHAR(10) NULL ,
  `client_id` INT NOT NULL,
  `employee_id` INT NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

-- -----------------------------------------------------
-- Table `bistrodb`.`employees`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bistrodb`.`employees` ;

CREATE  TABLE IF NOT EXISTS `bistrodb`.`employees` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `cpf` VARCHAR(14) NULL ,
  `name` VARCHAR(45) NOT NULL ,
  `phone` VARCHAR(13) NULL ,
  `cellphone` VARCHAR(13) NULL ,
  `email` VARCHAR(45) NULL ,
  `removed` TINYINT(1) NOT NULL ,
  UNIQUE INDEX `cpf_UNIQUE` (`cpf` ASC) ,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

-- -----------------------------------------------------
-- Table `bistrodb`.`users`
-- garcom, admin, gerente, caixa, cliente
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bistrodb`.`users` ;

CREATE  TABLE IF NOT EXISTS `bistrodb`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(20) NOT NULL ,
  `password` VARCHAR(40) NOT NULL ,
  `type` ENUM('waiter', 'admin','manager','cashier','client') NOT NULL ,
  `employee_id` INT NULL ,
  PRIMARY KEY (`id`, `username`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

-- -----------------------------------------------------
-- Table `bistrodb`.`menus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bistrodb`.`menus` ;

CREATE  TABLE IF NOT EXISTS `bistrodb`.`menus` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `description` VARCHAR(65) NULL ,
  `image` VARCHAR(45) NULL ,
  `price` VARCHAR(8) NOT NULL ,
  `type` ENUM('appertizes', 'salads','entrees','desserts','beverages') NOT NULL ,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;
