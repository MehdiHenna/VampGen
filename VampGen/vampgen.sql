SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `vampgen` DEFAULT CHARACTER SET utf8 ;
USE `vampgen` ;

-- -----------------------------------------------------
-- Table `vampgen`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vampgen`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(255) NULL,
  `username` VARCHAR(16) NOT NULL,
  `password` VARCHAR(32) NOT NULL,
  `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP NULL,
  `deleted_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`));


-- -----------------------------------------------------
-- Table `vampgen`.`clans`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vampgen`.`clans` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `deleted_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vampgen`.`characters`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vampgen`.`characters` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `user_id` INT NOT NULL,
  `clan_id` INT NOT NULL,
  `nature` VARCHAR(45) NULL,
  `demeanor` VARCHAR(45) NULL,
  `concept` VARCHAR(45) NULL,
  `sire` VARCHAR(45) NULL,
  `name` VARCHAR(45) NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `deleted_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`, `user_id`, `clan_id`),
  INDEX `fk_Personnage_User_idx` (`user_id` ASC),
  INDEX `fk_characters_clans1_idx` (`clan_id` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `vampgen`.`skills`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vampgen`.`skills` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `max` INT NULL,
  `created_at` TIMESTAMP NULL,
  `deleted_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vampgen`.`characters_has_skills`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vampgen`.`characters_has_skills` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `character_user_id` VARCHAR(45) NOT NULL,
  `character_id` INT NOT NULL,
  `skill_id` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `deleted_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`, `character_user_id`, `character_id`, `skill_id`),
  INDEX `fk_characters_has_skills_skills1_idx` (`skill_id` ASC),
  INDEX `fk_characters_has_skills_characters1_idx` (`character_id` ASC, `character_user_id` ASC),
  CONSTRAINT `fk_characters_has_skills_characters1`
    FOREIGN KEY (`character_id` , `character_user_id`)
    REFERENCES `vampgen`.`characters` (`id` , `user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_characters_has_skills_skills1`
    FOREIGN KEY (`skill_id`)
    REFERENCES `vampgen`.`skills` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vampgen`.`disciplines`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vampgen`.`disciplines` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `max` INT NULL,
  `deleted_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `vampgen`.`clans_has_disciplines`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `vampgen`.`clans_has_disciplines` (
  `clan_id` INT NOT NULL,
  `discipline_id` INT NOT NULL,
  `id` INT NOT NULL AUTO_INCREMENT,
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `deleted_at` TIMESTAMP NULL,
  PRIMARY KEY (`id`, `clan_id`, `discipline_id`),
  INDEX `fk_clans_has_disciplines_disciplines1_idx` (`discipline_id` ASC),
  INDEX `fk_clans_has_disciplines_clans1_idx` (`clan_id` ASC),
  CONSTRAINT `fk_clans_has_disciplines_clans1`
    FOREIGN KEY (`clan_id`)
    REFERENCES `vampgen`.`clans` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_clans_has_disciplines_disciplines1`
    FOREIGN KEY (`discipline_id`)
    REFERENCES `vampgen`.`disciplines` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
