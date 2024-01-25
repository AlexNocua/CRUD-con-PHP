create database crud_php;
use crud_php;


CREATE TABLE `persona` (
  `id_empleado` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `cc` int(11) DEFAULT NULL,
  `fecha_nacimiento` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_empleado`)
) 
SELECT `persona`.`id_empleado`,
    `persona`.`nombre`,
    `persona`.`apellido`,
    `persona`.`cc`,
    `persona`.`fecha_nacimiento`,
    `persona`.`correo`
FROM `crud_php`.`persona`;

SELECT * FROM crud_php.persona;