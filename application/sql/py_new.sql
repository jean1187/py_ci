SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `py_new` ;
CREATE SCHEMA IF NOT EXISTS `py_new` DEFAULT CHARACTER SET latin1 COLLATE latin1_spanish_ci ;
USE `py_new` ;

-- -----------------------------------------------------
-- Table `py_new`.`municipio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`municipio` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`parroquia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`parroquia` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  `municipio_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_parroquia_municipio` (`municipio_id` ASC) ,
  CONSTRAINT `fk_parroquia_municipio`
    FOREIGN KEY (`municipio_id` )
    REFERENCES `py_new`.`municipio` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`organo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`organo` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`entidad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`entidad` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  `organo_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_entidad_organo1` (`organo_id` ASC) ,
  CONSTRAINT `fk_entidad_organo1`
    FOREIGN KEY (`organo_id` )
    REFERENCES `py_new`.`organo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`areaInversion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`areaInversion` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`categoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  `areaInversion_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_categoria_areaInversion1` (`areaInversion_id` ASC) ,
  CONSTRAINT `fk_categoria_areaInversion1`
    FOREIGN KEY (`areaInversion_id` )
    REFERENCES `py_new`.`areaInversion` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`tipoProyecto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`tipoProyecto` (
  `id` INT NOT NULL ,
  `nombre` VARCHAR(45) NULL ,
  `categoria_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_tipoProyecto_categoria1` (`categoria_id` ASC) ,
  CONSTRAINT `fk_tipoProyecto_categoria1`
    FOREIGN KEY (`categoria_id` )
    REFERENCES `py_new`.`categoria` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`cargos`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`cargos` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`directriz`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`directriz` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`objetivo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`objetivo` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  `directriz_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_objetivo_directriz1` (`directriz_id` ASC) ,
  CONSTRAINT `fk_objetivo_directriz1`
    FOREIGN KEY (`directriz_id` )
    REFERENCES `py_new`.`directriz` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`estrategia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`estrategia` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`politica`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`politica` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  `directriz_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_politica_directriz1` (`directriz_id` ASC) ,
  CONSTRAINT `fk_politica_directriz1`
    FOREIGN KEY (`directriz_id` )
    REFERENCES `py_new`.`directriz` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`lineaEstrategica`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`lineaEstrategica` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`organoEntidad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`organoEntidad` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`objtivosDelMilenio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`objtivosDelMilenio` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(250) NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`responsable`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`responsable` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `email` VARCHAR(45) NULL ,
  `tlf_celular` VARCHAR(45) NULL ,
  `fax` VARCHAR(45) NULL ,
  `cargos_id` INT NOT NULL ,
  `entidad_id` INT NULL ,
  `organo_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_responsable_cargos1` (`cargos_id` ASC) ,
  INDEX `fk_responsable_entidad1` (`entidad_id` ASC) ,
  INDEX `fk_responsable_organo1` (`organo_id` ASC) ,
  CONSTRAINT `fk_responsable_cargos1`
    FOREIGN KEY (`cargos_id` )
    REFERENCES `py_new`.`cargos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responsable_entidad1`
    FOREIGN KEY (`entidad_id` )
    REFERENCES `py_new`.`entidad` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_responsable_organo1`
    FOREIGN KEY (`organo_id` )
    REFERENCES `py_new`.`organo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`estrategia_objetivo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`estrategia_objetivo` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `estrategia_id` INT NOT NULL ,
  `objetivo_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `estrategia_id`, `objetivo_id`) ,
  INDEX `fk_estrategia_has_objetivo_objetivo1` (`objetivo_id` ASC) ,
  INDEX `fk_estrategia_has_objetivo_estrategia1` (`estrategia_id` ASC) ,
  CONSTRAINT `fk_estrategia_has_objetivo_estrategia1`
    FOREIGN KEY (`estrategia_id` )
    REFERENCES `py_new`.`estrategia` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_estrategia_has_objetivo_objetivo1`
    FOREIGN KEY (`objetivo_id` )
    REFERENCES `py_new`.`objetivo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`proyecto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`proyecto` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `aprobado` TINYINT(1)  NULL DEFAULT false ,
  `fecha_aprobado` DATETIME NULL ,
  `organoCreador_id` INT NOT NULL ,
  `entidadCreador_id` INT NULL ,
  `cod` INT NULL ,
  `nombre` VARCHAR(255) NULL ,
  `descripcion` TEXT NULL ,
  `lineaEstrategica_id` INT NOT NULL ,
  `organoEntidadResp_id` INT NOT NULL ,
  `organoEntidadEjecutor_id` INT NOT NULL ,
  `objtivosDelMilenio_id` INT NOT NULL ,
  `etapaPreinversion` TINYINT(1)  NOT NULL DEFAULT false ,
  `etapaProyectoNuevo` TINYINT(1)  NOT NULL DEFAULT false ,
  `etapaAmplModif` TINYINT(1)  NOT NULL DEFAULT false ,
  `etapaCulminacion` TINYINT(1)  NOT NULL DEFAULT false ,
  `fase` INT NOT NULL ,
  `tipoProyecto_id` INT NOT NULL ,
  `responsableProyecto_id` INT NOT NULL ,
  `parroquia_id` INT NOT NULL ,
  `comunidadConcComunal` VARCHAR(250) NULL ,
  `norte` VARCHAR(19) NULL COMMENT 'latitud' ,
  `este` VARCHAR(19) NULL COMMENT 'longitud' ,
  `politica` TEXT NULL COMMENT 'Aqui tendremos el array serializado con los id de las politicas seleccionadas\n' ,
  `estrategia_objetivo_id` INT NOT NULL ,
  `tiempoEstimado` INT NOT NULL COMMENT 'Timepo estimado para la culminacion del proyecto en meses\n' ,
  `monto` DECIMAL(15,2)  NOT NULL ,
  `fechaCreacion` DATETIME NOT NULL ,
  `impactoSocial` TEXT NOT NULL ,
  `poblacionBenef` INT NOT NULL ,
  `porcentajeAvanceF` INT NOT NULL COMMENT 'Porcentaje Fisico del proyecto' ,
  `porcentajeAvanceFinan` INT NOT NULL COMMENT 'avance financiero del proyecto\n\nesto lo que se ha aportado al proyecto' ,
  `empleoDirectos` INT NULL ,
  `empleosIndirectos` INT NULL ,
  `formulacion` VARCHAR(250) NULL ,
  `metas` VARCHAR(20) NULL ,
  `articulacion` VARCHAR(250) NULL ,
  `componente` VARCHAR(250) NULL ,
  `observaciones` VARCHAR(250) NULL ,
  `factible` INT NULL COMMENT 'año de factibilidad' ,
  `situadoConst` DECIMAL(15,2)  NULL COMMENT 'SituadoConstitucional\n' ,
  `fondoCompInterr` DECIMAL(15,2)  NULL COMMENT 'Fondo de compensacion interterritorial' ,
  `otraFuente` DECIMAL(15,2)  NULL ,
  `notaOF` TEXT NULL COMMENT 'Nota en caso de que sea otra fuente' ,
  `explique2` TEXT NULL ,
  `descripcion2` TEXT NULL ,
  `objetivogene` TEXT NULL ,
  `objetivoespe` TEXT NULL ,
  `poblacionbe` TEXT NULL ,
  `difilcultad` TEXT NULL ,
  `explique4` TEXT NULL ,
  `fuerza` TEXT NULL ,
  `adquiMateria` TEXT NULL ,
  `adquiInsumo` TEXT NULL ,
  `transfTecnologia` TEXT NULL ,
  `armonizacion` TEXT NULL ,
  `eficienciaRecursos` TEXT NULL ,
  `redistribucionSocial` TEXT NULL ,
  `planSimon` TEXT NULL ,
  `planComunal` TEXT NULL ,
  `planMunicipal` TEXT NULL ,
  `planEstadal` TEXT NULL ,
  `integracion` TINYTEXT NULL ,
  `ubica71` TINYINT NULL ,
  `explique7` TEXT NULL ,
  `poblacion72` TINYINT NULL ,
  `explique72` TEXT NULL ,
  `indigena73` INT NULL ,
  `explique73` TEXT NULL ,
  `servicios74` TINYINT NULL ,
  `explique74` TEXT NULL ,
  `integar75` TEXT NULL ,
  `productiva81` TINYINT NULL ,
  `explique8` TEXT NULL ,
  `impulso82` TEXT NULL ,
  `impulso83` TEXT NULL ,
  `participacionLaboral91` TEXT NULL ,
  `participacionDirecc92` TEXT NULL ,
  `transferencia101` TEXT NULL ,
  `validaConsejo` TINYINT NULL ,
  `explique10` TEXT NULL ,
  `consolidacion103` TEXT NULL ,
  `infraestructura` TINYINT NULL ,
  `explique111` TEXT NULL ,
  `productiva112` TINYINT NULL ,
  `explique112` TEXT NULL ,
  `presupuesto121` TEXT NULL ,
  `descripcion122` TEXT NULL ,
  `cronograma` TEXT NULL ,
  `memoria122` TEXT NULL ,
  `perspectiva122` TEXT NULL ,
  `calculos122` TEXT NULL ,
  `fotografias122` TEXT NULL ,
  `plano122` TEXT NULL ,
  `croquis122` TEXT NULL ,
  `titularidad127` TEXT NULL ,
  `cronograma128` TEXT NULL ,
  `permisos129` TEXT NULL ,
  `doceavo1` DECIMAL(15,2)  NULL ,
  `doceavo2` DECIMAL(15,2)  NULL ,
  `doceavo3` DECIMAL(15,2)  NULL ,
  `doceavo4` DECIMAL(15,2)  NULL ,
  `doceavo5` DECIMAL(15,2)  NULL ,
  `doceavo6` DECIMAL(15,2)  NULL ,
  `doceavo7` DECIMAL(15,2)  NULL ,
  `doceavo8` DECIMAL(15,2)  NULL ,
  `doceavo9` DECIMAL(15,2)  NULL ,
  `doceavo10` DECIMAL(15,2)  NULL ,
  `doceavo11` DECIMAL(15,2)  NULL ,
  `doceavo12` DECIMAL(15,2)  NULL ,
  `porcentajeEjecucion` VARCHAR(200) NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_proyecto_organo1` (`organoCreador_id` ASC) ,
  INDEX `fk_proyecto_entidad1` (`entidadCreador_id` ASC) ,
  INDEX `fk_proyecto_lineaEstrategica1` (`lineaEstrategica_id` ASC) ,
  INDEX `fk_proyecto_organoEntidad1` (`organoEntidadResp_id` ASC) ,
  INDEX `fk_proyecto_organoEntidad2` (`organoEntidadEjecutor_id` ASC) ,
  INDEX `fk_proyecto_objtivosDelMilenio1` (`objtivosDelMilenio_id` ASC) ,
  INDEX `fk_proyecto_tipoProyecto1` (`tipoProyecto_id` ASC) ,
  INDEX `fk_proyecto_responsable1` (`responsableProyecto_id` ASC) ,
  INDEX `fk_proyecto_parroquia1` (`parroquia_id` ASC) ,
  INDEX `fk_proyecto_estrategia_objetivo1` (`estrategia_objetivo_id` ASC) ,
  CONSTRAINT `fk_proyecto_organo1`
    FOREIGN KEY (`organoCreador_id` )
    REFERENCES `py_new`.`organo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_entidad1`
    FOREIGN KEY (`entidadCreador_id` )
    REFERENCES `py_new`.`entidad` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_lineaEstrategica1`
    FOREIGN KEY (`lineaEstrategica_id` )
    REFERENCES `py_new`.`lineaEstrategica` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_organoEntidad1`
    FOREIGN KEY (`organoEntidadResp_id` )
    REFERENCES `py_new`.`organoEntidad` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_organoEntidad2`
    FOREIGN KEY (`organoEntidadEjecutor_id` )
    REFERENCES `py_new`.`organoEntidad` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_objtivosDelMilenio1`
    FOREIGN KEY (`objtivosDelMilenio_id` )
    REFERENCES `py_new`.`objtivosDelMilenio` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_tipoProyecto1`
    FOREIGN KEY (`tipoProyecto_id` )
    REFERENCES `py_new`.`tipoProyecto` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_responsable1`
    FOREIGN KEY (`responsableProyecto_id` )
    REFERENCES `py_new`.`responsable` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_parroquia1`
    FOREIGN KEY (`parroquia_id` )
    REFERENCES `py_new`.`parroquia` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_estrategia_objetivo1`
    FOREIGN KEY (`estrategia_objetivo_id` )
    REFERENCES `py_new`.`estrategia_objetivo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`grupo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`grupo` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(60) NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB, 
COMMENT = 'Grupo de usuarios, por medio de los grupos sacare el menu' ;


-- -----------------------------------------------------
-- Table `py_new`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `userLogin` VARCHAR(45) NULL ,
  `passwordLogin` VARCHAR(250) NULL ,
  `nombre` VARCHAR(60) NULL ,
  `apellido` VARCHAR(60) NULL ,
  `correo` VARCHAR(80) NULL ,
  `organo_id` INT NOT NULL ,
  `entidad_id` INT NOT NULL ,
  `grupo_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_users_organo1` (`organo_id` ASC) ,
  INDEX `fk_users_entidad1` (`entidad_id` ASC) ,
  INDEX `fk_users_grupo1` (`grupo_id` ASC) ,
  CONSTRAINT `fk_users_organo1`
    FOREIGN KEY (`organo_id` )
    REFERENCES `py_new`.`organo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_entidad1`
    FOREIGN KEY (`entidad_id` )
    REFERENCES `py_new`.`entidad` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_grupo1`
    FOREIGN KEY (`grupo_id` )
    REFERENCES `py_new`.`grupo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'Usuarios que podran accesar al sistema' ;


-- -----------------------------------------------------
-- Table `py_new`.`bitacora`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`bitacora` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `idRegistro` INT NOT NULL ,
  `tabla` VARCHAR(60) NOT NULL ,
  `accion` TINYINT NOT NULL COMMENT '1 = Añadir \n2= Modificar\n3 = Eliminar' ,
  `fecha` DATETIME NOT NULL COMMENT 'Fecha de la accion' ,
  `sql` TEXT NOT NULL ,
  `users_id_responsable` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_bitacora_users1` (`users_id_responsable` ASC) ,
  CONSTRAINT `fk_bitacora_users1`
    FOREIGN KEY (`users_id_responsable` )
    REFERENCES `py_new`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'Aqui estaran registrados todos los sucesos relacionados con ' /* comment truncated */ ;


-- -----------------------------------------------------
-- Table `py_new`.`menu`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`menu` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(60) NOT NULL ,
  `parent` INT NULL ,
  `grupo` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_menu_menu1` (`parent` ASC) ,
  CONSTRAINT `fk_menu_menu1`
    FOREIGN KEY (`parent` )
    REFERENCES `py_new`.`menu` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'Menu General del sistema' ;


-- -----------------------------------------------------
-- Table `py_new`.`ci_sessions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`ci_sessions` (
  `session_id` VARCHAR(40) NOT NULL DEFAULT 0 ,
  `ip_address` VARCHAR(16) NOT NULL DEFAULT 0 ,
  `user_agent` VARCHAR(120) NOT NULL ,
  `last_activity` INT(10) UNSIGNED NOT NULL DEFAULT 0 ,
  `user_data` TEXT NOT NULL ,
  PRIMARY KEY (`session_id`) )
ENGINE = InnoDB, 
COMMENT = 'Se guardaran todas las sessiones activas' ;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
