-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema webbank
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema webbank
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `webbank` CHARACTER SET utf8 COLLATE utf8_spanish_ci;
USE `webbank` ;

-- -----------------------------------------------------
-- Table `webbank`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webbank`.`usuario` (
  `id_usuario` INT NOT NULL AUTO_INCREMENT,
  `numero_cedula` VARBINARY(50) NOT NULL,
  `contrasena` VARBINARY(50) NOT NULL,
  `primer_nombre` VARBINARY(50) NOT NULL,
  `segundo_nombre` VARBINARY(50) NULL,
  `primer_apellido` VARBINARY(50) NOT NULL,
  `segundo_apellido` VARBINARY(50) NULL,
  `saldo` VARBINARY(50) NULL DEFAULT 0,
  PRIMARY KEY (`id_usuario`),
  UNIQUE INDEX `numero_celular_UNIQUE` (`numero_cedula` ASC) ,
  UNIQUE INDEX `id_usuario_UNIQUE` (`id_usuario` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webbank`.`tipo_transacion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webbank`.`tipo_transacion` (
  `id_transacion` INT NOT NULL AUTO_INCREMENT,
  `nombre_transacion` VARCHAR(50) NOT NULL,
  PRIMARY KEY (`id_transacion`),
  UNIQUE INDEX `id_transacion_UNIQUE` (`id_transacion` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `webbank`.`historial`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `webbank`.`historial` (
  `id_historial` INT NOT NULL AUTO_INCREMENT,
  `id_usuario` INT NOT NULL,
  `id_transacion` INT NOT NULL,
  `cantidad` INT NOT NULL,
  `fecha` DATE NOT NULL,
  PRIMARY KEY (`id_historial`, `id_usuario`, `id_transacion`),
  INDEX `fk_usuario_has_transacion_transacion1_idx` (`id_transacion` ASC) ,
  INDEX `fk_usuario_has_transacion_usuario1_idx` (`id_usuario` ASC) ,
  UNIQUE INDEX `id_historial_UNIQUE` (`id_historial` ASC) ,
  CONSTRAINT `fk_usuario_has_transacion_usuario1`
    FOREIGN KEY (`id_usuario`)
    REFERENCES `webbank`.`usuario` (`id_usuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_has_transacion_transacion1`
    FOREIGN KEY (`id_transacion`)
    REFERENCES `webbank`.`tipo_transacion` (`id_transacion`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
