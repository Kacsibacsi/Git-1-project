-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`beka2`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`beka2` (
  `id_bk` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `beka2col` VARCHAR(45) NOT NULL,
  `beka2col1` DATETIME NOT NULL,
  PRIMARY KEY (`id_bk`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`beka1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`beka1` (
  `id_beka1` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `beka1col` VARCHAR(45) NOT NULL,
  `beka2_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`id_beka1`),
  INDEX `fk_beka1_beka2_idx` (`beka2_id` ASC) VISIBLE,
  CONSTRAINT `fk_beka1_beka2`
    FOREIGN KEY (`beka2_id`)
    REFERENCES `mydb`.`beka2` (`id_bk`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
