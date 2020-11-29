CREATE DATABASE `tio` /*!40100 DEFAULT CHARACTER SET latin1 */;

CREATE TABLE usuario(
id INT PRIMARY KEY,
nombre VARCHAR(45),
rol VARCHAR(30),
contra VARCHAR(50)
);

INSERT INTO `tio`.`usuario` (`id`, `nombre`, `rol`, `contra`) VALUES ('1', 'cristian', 'recepcion', 'a');
INSERT INTO `tio`.`usuario` (`id`, `nombre`, `rol`, `contra`) VALUES ('2', 'william', 'psiquiatria', 'b');
INSERT INTO `tio`.`usuario` (`id`, `nombre`, `rol`, `contra`) VALUES ('3', 'samy', 'psicologo', 'c');