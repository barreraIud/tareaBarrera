-- MySQL Script generated by MySQL Workbench
-- Sat Nov 27 15:24:15 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema biblioteca
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema biblioteca
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET utf8 ;
USE `biblioteca` ;

-- -----------------------------------------------------
-- Table `biblioteca`.`autores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`autores` (
   `aut_codigo` INT NOT NULL AUTO_INCREMENT,
   `aut_nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`aut_codigo`))
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `biblioteca`.`prestamos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`prestamos` (
   `pres_codigo` INT NOT NULL AUTO_INCREMENT,
   `pres_estado` VARCHAR(45) NULL,
  PRIMARY KEY (`pres_codigo`))
ENGINE = InnoDB;



-- -----------------------------------------------------
-- Table `biblioteca`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`usuarios` (
  `usu_codigo` INT NOT NULL AUTO_INCREMENT,
  `usu_nombre` VARCHAR(45) NULL,
  `usu_telefono` INT NULL,
  `usu_direccion` VARCHAR(45) NULL,
  PRIMARY KEY (`usu_codigo`))
ENGINE = InnoDB;


-- ---------------------------------------------------
-- Table `biblioteca`.`libros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`libros` (
  `lib_codigo` INT NOT NULL AUTO_INCREMENT,
  `lib_titulo` VARCHAR(45) NULL,
  `lib_ISBN` VARCHAR(45) NULL,
  `lib_Editorial` VARCHAR(45) NULL,
  `lib_paginas` VARCHAR(45) NULL,
  PRIMARY KEY (`lib_codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `biblioteca`.`ejemplares`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`ejemplares` (
  `ejem_codigo` INT NOT NULL AUTO_INCREMENT,
  `ejem_localizacion` VARCHAR(45) NULL,
  `libros_lib_codigo` INT NOT NULL,
  PRIMARY KEY (`ejem_codigo`),
  INDEX `fk_ejemplares_libros1_idx` (`libros_lib_codigo`),
  CONSTRAINT `fk_ejemplares_libros1`
    FOREIGN KEY (`libros_lib_codigo`)
    REFERENCES `biblioteca`.`libros` (`lib_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB;

-- -----------------------------------------------------
-- Table `biblioteca`.`estado_prestamos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`estado_prestamos` (
  `epres_codigo` INT NOT NULL AUTO_INCREMENT,
  `epres_estado` VARCHAR(45) NULL,
  `epres_pres_codigo` INT NOT NULL,
  PRIMARY KEY (`epres_codigo`),
  INDEX `fk_estado_prestamos_prestamos1_idx` (`epres_pres_codigo`),
  CONSTRAINT `fk_estado_prestamos_prestamos1_idx`
    FOREIGN KEY (`epres_pres_codigo`)
    REFERENCES `biblioteca`.`prestamos` (`pres_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = INNODB;


-- -----------------------------------------------------
-- Table `biblioteca`.`autores_has_libros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`autores_has_libros` (
  `autores_aut_codigo` INT NOT NULL,
  `libros_lib_codigo` INT NOT NULL,
  PRIMARY KEY (`autores_aut_codigo`, `libros_lib_codigo`),
  INDEX `fk_autores_has_libros_libros1_idx` (`libros_lib_codigo`),
  INDEX `fk_autores_has_libros_autores_idx` (`autores_aut_codigo`),
  CONSTRAINT `fk_autores_has_libros_autores`
    FOREIGN KEY (`autores_aut_codigo`)
    REFERENCES `biblioteca`.`autores` (`aut_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_autores_has_libros_libros1`
    FOREIGN KEY (`libros_lib_codigo`)
    REFERENCES `biblioteca`.`libros` (`lib_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `biblioteca`.`prestamos_has_libros`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`prestamos_has_libros` (
  `prestamos_pres_codigo` INT NOT NULL,
  `libros_lib_codigo` INT NOT NULL,
  PRIMARY KEY (`prestamos_pres_codigo`, `libros_lib_codigo`),
  INDEX `fk_prestamos_has_libros_libros1_idx` (`libros_lib_codigo`),
  INDEX `fk_prestamos_has_libros_prestamos_idx` (`prestamos_pres_codigo`),
  CONSTRAINT `fk_prestamos_has_libros_prestamos`
    FOREIGN KEY (`prestamos_pres_codigo`)
    REFERENCES `biblioteca`.`prestamos` (`pres_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_prestamos_has_libros_libros1`
    FOREIGN KEY (`libros_lib_codigo`)
    REFERENCES `biblioteca`.`libros` (`lib_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

-- -----------------------------------------------------
-- Table `biblioteca`.`usuarios_has_ejemplares`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `biblioteca`.`usuarios_has_ejemplares` (
  `usuarios_usu_codigo` INT NOT NULL,
  `ejemplares_ejem_codigo` INT NOT NULL,
  PRIMARY KEY (`usuarios_usu_codigo`, `ejemplares_ejem_codigo`),
  INDEX `fk_usuarios_has_ejemplares_ejemplares1_idx` (`ejemplares_ejem_codigo`),
  INDEX `fk_usuarios_has_ejemplares_usuarios1_idx` (`usuarios_usu_codigo`),
  CONSTRAINT `fk_usuarios_has_ejemplares_usuarios1`
    FOREIGN KEY (`usuarios_usu_codigo`)
    REFERENCES `biblioteca`.`usuarios` (`usu_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_has_ejemplares_ejemplares1`
    FOREIGN KEY (`ejemplares_ejem_codigo`)
    REFERENCES `biblioteca`.`ejemplares` (`ejem_codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
