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
  `nombre` VARCHAR(100) NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`parroquia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`parroquia` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(100) NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB, 
COMMENT = 'Parroquias de acuerdo a un municipio' ;


-- -----------------------------------------------------
-- Table `py_new`.`organo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`organo` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(200) NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`entidad`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`entidad` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(200) NOT NULL ,
  `organo_id` INT NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_entidad_organo1` (`organo_id` ASC) ,
  CONSTRAINT `fk_entidad_organo1`
    FOREIGN KEY (`organo_id` )
    REFERENCES `py_new`.`organo` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`areaInversion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`areaInversion` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(200) NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`categoria`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`categoria` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(200) NOT NULL ,
  `areaInversion_id` INT NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_categoria_areaInversion1` (`areaInversion_id` ASC) ,
  CONSTRAINT `fk_categoria_areaInversion1`
    FOREIGN KEY (`areaInversion_id` )
    REFERENCES `py_new`.`areaInversion` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`tipoProyecto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`tipoProyecto` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(200) NOT NULL ,
  `categoria_id` INT NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
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
  `nombre` VARCHAR(45) NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`directriz`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`directriz` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`objetivo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`objetivo` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(200) NOT NULL ,
  `directriz_id` INT NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_objetivo_directriz1` (`directriz_id` ASC) ,
  CONSTRAINT `fk_objetivo_directriz1`
    FOREIGN KEY (`directriz_id` )
    REFERENCES `py_new`.`directriz` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`estrategia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`estrategia` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(200) NOT NULL ,
  `directriz_id` INT NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_estrategia_directriz1` (`directriz_id` ASC) ,
  CONSTRAINT `fk_estrategia_directriz1`
    FOREIGN KEY (`directriz_id` )
    REFERENCES `py_new`.`directriz` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`politica`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`politica` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(200) NOT NULL ,
  `estrategia_id` INT NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_politica_estrategia1` (`estrategia_id` ASC) ,
  CONSTRAINT `fk_politica_estrategia1`
    FOREIGN KEY (`estrategia_id` )
    REFERENCES `py_new`.`estrategia` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`lineaEstrategica`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`lineaEstrategica` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(300) NULL ,
  `delete` TINYINT(1)  NOT NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `py_new`.`objetivosDelMilenio`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`objetivosDelMilenio` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(250) NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
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
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_responsable_cargos1` (`cargos_id` ASC) ,
  INDEX `fk_responsable_entidad1` (`entidad_id` ASC) ,
  INDEX `fk_responsable_organo1` (`organo_id` ASC) ,
  CONSTRAINT `fk_responsable_cargos1`
    FOREIGN KEY (`cargos_id` )
    REFERENCES `py_new`.`cargos` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_responsable_entidad1`
    FOREIGN KEY (`entidad_id` )
    REFERENCES `py_new`.`entidad` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_responsable_organo1`
    FOREIGN KEY (`organo_id` )
    REFERENCES `py_new`.`organo` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB, 
COMMENT = 'Persona responsable del proyecto' ;


-- -----------------------------------------------------
-- Table `py_new`.`municipio_parroquia`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`municipio_parroquia` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `municipio_id` INT NOT NULL ,
  `parroquia_id` INT NOT NULL ,
  PRIMARY KEY (`id`, `municipio_id`, `parroquia_id`) ,
  INDEX `fk_parroquia_has_municipio_municipio1` (`municipio_id` ASC) ,
  INDEX `fk_parroquia_has_municipio_parroquia1` (`parroquia_id` ASC) ,
  CONSTRAINT `fk_parroquia_has_municipio_parroquia1`
    FOREIGN KEY (`parroquia_id` )
    REFERENCES `py_new`.`parroquia` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_parroquia_has_municipio_municipio1`
    FOREIGN KEY (`municipio_id` )
    REFERENCES `py_new`.`municipio` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'Esta tabla salio, por que existe la opcion que un proyecto e' /* comment truncated */ ;


-- -----------------------------------------------------
-- Table `py_new`.`grupo`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`grupo` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(60) NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB, 
COMMENT = 'Grupo de usuarios, por medio de los grupos sacare el menu' ;


-- -----------------------------------------------------
-- Table `py_new`.`categoriaStatus`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`categoriaStatus` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(60) NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB, 
COMMENT = 'aqui estaran todas las categorias de los estatus, por ejempl' /* comment truncated */ ;


-- -----------------------------------------------------
-- Table `py_new`.`status`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`status` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(60) NOT NULL ,
  `categoriaStatus_id` INT NOT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_status_categoriaStatus1` (`categoriaStatus_id` ASC) ,
  CONSTRAINT `fk_status_categoriaStatus1`
    FOREIGN KEY (`categoriaStatus_id` )
    REFERENCES `py_new`.`categoriaStatus` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB, 
COMMENT = 'Estatus de acuerdo a una categoria dada, por tabla' ;


-- -----------------------------------------------------
-- Table `py_new`.`users`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`users` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `userLogin` VARCHAR(45) NOT NULL ,
  `passwordLogin` VARCHAR(250) NOT NULL ,
  `nombre` VARCHAR(60) NOT NULL ,
  `apellido` VARCHAR(60) NOT NULL ,
  `correo` VARCHAR(80) NOT NULL ,
  `lastLogin` DATETIME NULL COMMENT 'Como ya tenemos un historial,\neste campo no es tan necesario,\nsolo lo conservo pra tener una \ninformacion extra de cuando fue la ultima vez que logueo este registro' ,
  `organo_id` INT NOT NULL ,
  `entidad_id` INT NULL ,
  `grupo_id` INT NOT NULL ,
  `status_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_users_organo1` (`organo_id` ASC) ,
  INDEX `fk_users_entidad1` (`entidad_id` ASC) ,
  INDEX `fk_users_grupo1` (`grupo_id` ASC) ,
  UNIQUE INDEX `userLogin_UNIQUE` (`userLogin` ASC) ,
  INDEX `fk_users_status1` (`status_id` ASC) ,
  CONSTRAINT `fk_users_organo1`
    FOREIGN KEY (`organo_id` )
    REFERENCES `py_new`.`organo` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_users_entidad1`
    FOREIGN KEY (`entidad_id` )
    REFERENCES `py_new`.`entidad` (`id` )
    ON DELETE RESTRICT
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_users_grupo1`
    FOREIGN KEY (`grupo_id` )
    REFERENCES `py_new`.`grupo` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_users_status1`
    FOREIGN KEY (`status_id` )
    REFERENCES `py_new`.`status` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB, 
COMMENT = 'Usuarios que podran accesar al sistema' ;


-- -----------------------------------------------------
-- Table `py_new`.`proyecto`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`proyecto` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `aprobado` TINYINT(1)  NULL DEFAULT false ,
  `fecha_aprobado` DATETIME NOT NULL ,
  `organoCreador_id` INT NOT NULL ,
  `entidadCreador_id` INT NULL ,
  `cod` INT NULL ,
  `nombre` VARCHAR(255) NULL ,
  `descripcion` TEXT NULL ,
  `lineaEstrategica_id` INT NOT NULL ,
  `organoEntidadResp_id` VARCHAR(20) NOT NULL COMMENT 'si es un organo, el responsable\nse colocara Oid de la tabla\nosea que si el organo tiene como id = 25\nguardariamos en este campo\nO25, por el contrario si es una entidad y tiene como id = 86\nguardariamos E86' ,
  `organoEntidadEjecutor_id` VARCHAR(20) NOT NULL COMMENT 'si es un organo, el ejecutor\nse colocara Oid de la tabla\nosea que si el organo tiene como id = 28\nguardariamos en este campo\nO28, por el contrario si es una entidad y tiene como id = 45\nguardariamos E45' ,
  `objetivosDelMilenio_id` INT NOT NULL ,
  `etapaPreinversion` TINYINT(1)  NOT NULL DEFAULT false ,
  `etapaProyectoNuevo` TINYINT(1)  NOT NULL DEFAULT false ,
  `etapaAmplModif` TINYINT(1)  NOT NULL DEFAULT false ,
  `etapaCulminacion` TINYINT(1)  NOT NULL DEFAULT false ,
  `fase` INT NOT NULL ,
  `tipoProyecto_id` INT NOT NULL ,
  `responsableProyecto_id` INT NOT NULL ,
  `minicipio_parroquia_id` INT NOT NULL ,
  `comunidadConcComunal` VARCHAR(250) NULL ,
  `norte` VARCHAR(19) NULL COMMENT 'latitud' ,
  `este` VARCHAR(19) NULL COMMENT 'longitud' ,
  `politica_id` INT NOT NULL COMMENT 'de Acuerdo a Líneas Generales del Plan de Desarrollo\nEconómico y Social de la Nación 2007 - 2013\n\n' ,
  `objetivo_id` INT NOT NULL COMMENT 'de Acuerdo a Líneas Generales del Plan de Desarrollo\nEconómico y Social de la Nación 2007 - 2013' ,
  `tiempoEstimado` INT NOT NULL COMMENT 'Timepo estimado para la culminacion del proyecto en meses\n' ,
  `monto` DECIMAL(15,2)  NOT NULL ,
  `impactoSocial` TEXT NOT NULL ,
  `poblacionBenef` INT NOT NULL ,
  `porcentajeAvanceF` INT NOT NULL COMMENT 'Porcentaje Fisico del proyecto' ,
  `porcentajeAvanceFinan` INT NOT NULL COMMENT 'avance financiero del proyecto\n\nesto lo que se ha aportado al proyecto' ,
  `empleosDirectos` INT NULL ,
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
  `numeracion_cfg` VARCHAR(45) NULL COMMENT 'Esta es la numeracion que lleva el consejo federal de gobierno' ,
  `user_creador` INT NOT NULL COMMENT 'Que usuario creo el proyecto' ,
  `fechaCreacion` DATETIME NOT NULL ,
  `user_modificador` INT NULL DEFAULT NULL COMMENT 'quien fue el ultimo que modifico' ,
  `fechaModificacion` DATETIME NULL DEFAULT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_proyecto_organo1` (`organoCreador_id` ASC) ,
  INDEX `fk_proyecto_entidad1` (`entidadCreador_id` ASC) ,
  INDEX `fk_proyecto_lineaEstrategica1` (`lineaEstrategica_id` ASC) ,
  INDEX `fk_proyecto_objtivosDelMilenio1` (`objetivosDelMilenio_id` ASC) ,
  INDEX `fk_proyecto_tipoProyecto1` (`tipoProyecto_id` ASC) ,
  INDEX `fk_proyecto_responsable1` (`responsableProyecto_id` ASC) ,
  INDEX `fk_proyecto_parroquia1` (`minicipio_parroquia_id` ASC) ,
  INDEX `fk_proyecto_objetivo1` (`objetivo_id` ASC) ,
  INDEX `fk_proyecto_politica1` (`politica_id` ASC) ,
  INDEX `fk_proyecto_users1` (`user_creador` ASC) ,
  INDEX `fk_proyecto_users2` (`user_modificador` ASC) ,
  CONSTRAINT `fk_proyecto_organo1`
    FOREIGN KEY (`organoCreador_id` )
    REFERENCES `py_new`.`organo` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_proyecto_entidad1`
    FOREIGN KEY (`entidadCreador_id` )
    REFERENCES `py_new`.`entidad` (`id` )
    ON DELETE RESTRICT
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_lineaEstrategica1`
    FOREIGN KEY (`lineaEstrategica_id` )
    REFERENCES `py_new`.`lineaEstrategica` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_proyecto_objtivosDelMilenio1`
    FOREIGN KEY (`objetivosDelMilenio_id` )
    REFERENCES `py_new`.`objetivosDelMilenio` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_proyecto_tipoProyecto1`
    FOREIGN KEY (`tipoProyecto_id` )
    REFERENCES `py_new`.`tipoProyecto` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_proyecto_responsable1`
    FOREIGN KEY (`responsableProyecto_id` )
    REFERENCES `py_new`.`responsable` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_proyecto_parroquia1`
    FOREIGN KEY (`minicipio_parroquia_id` )
    REFERENCES `py_new`.`municipio_parroquia` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_proyecto_objetivo1`
    FOREIGN KEY (`objetivo_id` )
    REFERENCES `py_new`.`objetivo` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_proyecto_politica1`
    FOREIGN KEY (`politica_id` )
    REFERENCES `py_new`.`politica` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_proyecto_users1`
    FOREIGN KEY (`user_creador` )
    REFERENCES `py_new`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proyecto_users2`
    FOREIGN KEY (`user_modificador` )
    REFERENCES `py_new`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB, 
COMMENT = 'Tabla general de proyectos' ;


-- -----------------------------------------------------
-- Table `py_new`.`bitacora`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`bitacora` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `fecha` DATETIME NOT NULL COMMENT 'Fecha de la accion' ,
  `sql` TEXT NOT NULL ,
  `users_id_responsable` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_bitacora_users1` (`users_id_responsable` ASC) ,
  CONSTRAINT `fk_bitacora_users1`
    FOREIGN KEY (`users_id_responsable` )
    REFERENCES `py_new`.`users` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB, 
COMMENT = 'Aqui estaran registrados todos los sucesos relacionados con ' /* comment truncated */ ;


-- -----------------------------------------------------
-- Table `py_new`.`menu`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`menu` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(60) NOT NULL ,
  `url` VARCHAR(50) NULL DEFAULT '#' ,
  `parent` INT NULL ,
  `grupo` TEXT NULL ,
  `delete` TINYINT(1)  NOT NULL DEFAULT false COMMENT 'Este campo se utilizara para las eliminaciones logicas' ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_menu_menu1` (`parent` ASC) ,
  CONSTRAINT `fk_menu_menu1`
    FOREIGN KEY (`parent` )
    REFERENCES `py_new`.`menu` (`id` )
    ON DELETE RESTRICT
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
  PRIMARY KEY (`session_id`) ,
  INDEX `last_activity_idx` (`last_activity` ASC) )
ENGINE = InnoDB, 
COMMENT = 'Se guardaran todas las sessiones activas' ;


-- -----------------------------------------------------
-- Table `py_new`.`historialSessions`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`historialSessions` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `users_id` INT NOT NULL ,
  `fechaIngreso` DATETIME NOT NULL COMMENT 'se guardara la fecha en que ingreso el user' ,
  `userData` TEXT NOT NULL COMMENT 'Aqui se guardara todo\n lo que tiene que ver con la session (TODO)' ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_historialSessions_users1` (`users_id` ASC) ,
  CONSTRAINT `fk_historialSessions_users1`
    FOREIGN KEY (`users_id` )
    REFERENCES `py_new`.`users` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT)
ENGINE = InnoDB, 
COMMENT = 'Se guardara un registro por cada session del usuario y con e' /* comment truncated */ ;


-- -----------------------------------------------------
-- Table `py_new`.`url_especiales`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`url_especiales` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `url` VARCHAR(50) NOT NULL ,
  `id_users` TEXT NULL COMMENT 'Si este campo esta en NULL\ntodos los usuarios podran ver el \ncontenido del controlador' ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB, 
COMMENT = 'Aqui estara la direccion de los controladores, que no estara' /* comment truncated */ ;


-- -----------------------------------------------------
-- Table `py_new`.`planInversion`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `py_new`.`planInversion` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `organo_id` INT NOT NULL ,
  `lineaEstrategica_id` INT NOT NULL ,
  `justificacion` VARCHAR(500) NULL ,
  `necesidades` VARCHAR(500) NULL ,
  `potencialidades` VARCHAR(500) NULL ,
  `objetivo_id` INT NOT NULL ,
  `estrategia_id` INT NOT NULL ,
  `plan_estadal` VARCHAR(150) NULL ,
  `fecha_estadal` DATETIME NULL ,
  `inver_estadal` VARCHAR(150) NULL COMMENT 'Inversion estadal' ,
  `plan_municipal` VARCHAR(150) NULL ,
  `fecha_municipal` DATETIME NULL ,
  `inver_municipal` VARCHAR(150) NULL ,
  `formulacion` VARCHAR(100) NULL COMMENT '3.3.-ARTICULACIÓN CON EL PLAN DE DESARROLLO COMUNAL (LINEAMIENTOS): ' ,
  `integracion` VARCHAR(100) NULL COMMENT '3.4.- INTEGRACIÓN CON EL DISTRITO MOTOR DE DESARROLLO (LINEAMIENTOS): ' ,
  `valorPorcentaje` INT NULL ,
  `observaciones` VARCHAR(45) NULL ,
  `user_creador` INT NOT NULL ,
  `fechaCreacion` DATETIME NOT NULL ,
  `user_modificador` INT NULL DEFAULT NULL ,
  `fechaModificacion` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_planInversion_organo1` (`organo_id` ASC) ,
  INDEX `fk_planInversion_lineaEstrategica1` (`lineaEstrategica_id` ASC) ,
  INDEX `fk_planInversion_objetivo1` (`objetivo_id` ASC) ,
  INDEX `fk_planInversion_estrategia1` (`estrategia_id` ASC) ,
  INDEX `fk_planInversion_users1` (`user_creador` ASC) ,
  INDEX `fk_planInversion_users2` (`user_modificador` ASC) ,
  CONSTRAINT `fk_planInversion_organo1`
    FOREIGN KEY (`organo_id` )
    REFERENCES `py_new`.`organo` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_planInversion_lineaEstrategica1`
    FOREIGN KEY (`lineaEstrategica_id` )
    REFERENCES `py_new`.`lineaEstrategica` (`id` )
    ON DELETE RESTRICT
    ON UPDATE RESTRICT,
  CONSTRAINT `fk_planInversion_objetivo1`
    FOREIGN KEY (`objetivo_id` )
    REFERENCES `py_new`.`objetivo` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_planInversion_estrategia1`
    FOREIGN KEY (`estrategia_id` )
    REFERENCES `py_new`.`estrategia` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_planInversion_users1`
    FOREIGN KEY (`user_creador` )
    REFERENCES `py_new`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_planInversion_users2`
    FOREIGN KEY (`user_modificador` )
    REFERENCES `py_new`.`users` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
