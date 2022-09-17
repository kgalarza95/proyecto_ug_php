CREATE SCHEMA `bd_php_p2` ;

use bd_php_p2;

CREATE TABLE `usuario` (
  `id` int(20) NOT NULL auto_increment,
  `usuario` varchar(30) NOT NULL,
  `pass` varchar(30) NOT NULL,
  primary key(id)
) ;

INSERT INTO `bd_php_p2`.`usuario` (`id`, `usuario`, `pass`) VALUES ('1', 'admin', '123');
INSERT INTO `bd_php_p2`.`usuario` (`id`, `usuario`, `pass`) VALUES ('2', 'ADMIN', '123');

CREATE TABLE `frm_registro` (
  `id` int(20) NOT NULL auto_increment,
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(100),
  `telefono` varchar(13),
  `empresa` varchar(100),
  `asunto` varchar(100),
  `mensaje` varchar(200),
  primary key(id)
) ;

select * from frm_registro;
select * from usuario u where u.usuario = 'admin' and pass = '123';

INSERT INTO frm_registro(nombre, correo, telefono, empresa, asunto, mensaje) 
values ('$nombre', '$email', '$telefono', '$empresa', '$asunto', '$mensaje')