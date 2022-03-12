INSERT INTO `biblioteca`.`autores` (`aut_nombre`) VALUES ('Gabriel García Marquez');
INSERT INTO `biblioteca`.`autores` (`aut_nombre`) VALUES ('Mario Vargas Llosa ');
INSERT INTO `biblioteca`.`autores` (`aut_nombre`) VALUES ('Octavio Paz');
INSERT INTO `biblioteca`.`autores` (`aut_nombre`) VALUES ('Julio Cortazar');
INSERT INTO `biblioteca`.`autores` (`aut_nombre`) VALUES ('Isabel Allende');

INSERT INTO `biblioteca`.`prestamos` (`pres_codigo`,`pres_estado`) VALUES ('1','disponible');
INSERT INTO `biblioteca`.`prestamos` (`pres_codigo`,`pres_estado`) VALUES ('2','prestado');

INSERT INTO `biblioteca`.`usuarios` (`usu_nombre`,`usu_telefono`, `usu_direccion`) VALUES ('Juan Cano','313323232','cra 12 b no 32-33');
INSERT INTO `biblioteca`.`usuarios` (`usu_nombre`,`usu_telefono`, `usu_direccion`) VALUES ('Ferney Orejuela','314323232','cra 10 b no 44-33');
INSERT INTO `biblioteca`.`usuarios` (`usu_nombre`,`usu_telefono`, `usu_direccion`) VALUES ('Victor Perez','315323232','cll 12 b no 23-34');
INSERT INTO `biblioteca`.`usuarios` (`usu_nombre`,`usu_telefono`, `usu_direccion`) VALUES ('Ana Pinilla','316323232','cll 8 no 3-23');
INSERT INTO `biblioteca`.`usuarios` (`usu_nombre`,`usu_telefono`, `usu_direccion`) VALUES ('Jessica Fajardo','317323232','cra 6 b no 12-33');
INSERT INTO `biblioteca`.`usuarios` (`usu_nombre`,`usu_telefono`, `usu_direccion`) VALUES ('Carolina Hernandez','319323232','cra 9 b no 22-33');
INSERT INTO `biblioteca`.`usuarios` (`usu_nombre`,`usu_telefono`, `usu_direccion`) VALUES ('Jhon Mena','320323232','cra 12 b no 14-33');

INSERT INTO `biblioteca`.`libros`  (`lib_titulo`,`lib_ISBN`,`lib_Editorial`,`lib_paginas`) VALUES ('100 años de soledad','2108','Planeta','300');
INSERT INTO `biblioteca`.`libros`  (`lib_titulo`,`lib_ISBN`,`lib_Editorial`,`lib_paginas`) VALUES ('la ciudad y los perros','2118','Gato Malo','320');
INSERT INTO `biblioteca`.`libros`  (`lib_titulo`,`lib_ISBN`,`lib_Editorial`,`lib_paginas`) VALUES ('el laberinto de la soledad','2109','Carvajal','310');
INSERT INTO `biblioteca`.`libros`  (`lib_titulo`,`lib_ISBN`,`lib_Editorial`,`lib_paginas`) VALUES ('rayuela','6708','Planeta','300');
INSERT INTO `biblioteca`.`libros`  (`lib_titulo`,`lib_ISBN`,`lib_Editorial`,`lib_paginas`) VALUES ('la casa de los espiritus','2798','Planeta','390');
INSERT INTO `biblioteca`.`libros`  (`lib_titulo`,`lib_ISBN`,`lib_Editorial`,`lib_paginas`) VALUES ('el amante japones','6458','Gato Malo','301');
INSERT INTO `biblioteca`.`libros`  (`lib_titulo`,`lib_ISBN`,`lib_Editorial`,`lib_paginas`) VALUES ('la casa verde','1108','Planeta','400');


INSERT INTO `biblioteca`.`ejemplares`(`ejem_localizacion`,`libros_lib_codigo`) VALUES ('A','1');
INSERT INTO `biblioteca`.`ejemplares`(`ejem_localizacion`,`libros_lib_codigo`) VALUES ('A','2');
INSERT INTO `biblioteca`.`ejemplares`(`ejem_localizacion`,`libros_lib_codigo`) VALUES ('A','5');
INSERT INTO `biblioteca`.`ejemplares`(`ejem_localizacion`,`libros_lib_codigo`) VALUES ('A','1');
INSERT INTO `biblioteca`.`ejemplares`(`ejem_localizacion`,`libros_lib_codigo`) VALUES ('B','2');
INSERT INTO `biblioteca`.`ejemplares`(`ejem_localizacion`,`libros_lib_codigo`) VALUES ('B','7');
INSERT INTO `biblioteca`.`ejemplares`(`ejem_localizacion`,`libros_lib_codigo`) VALUES ('B','4');
INSERT INTO `biblioteca`.`ejemplares`(`ejem_localizacion`,`libros_lib_codigo`) VALUES ('B','5');
INSERT INTO `biblioteca`.`ejemplares`(`ejem_localizacion`,`libros_lib_codigo`) VALUES ('C','6');

INSERT INTO `biblioteca`.`autores_has_libros`(`autores_aut_codigo` ,`libros_lib_codigo`) VALUES ('1','1');
INSERT INTO `biblioteca`.`autores_has_libros`(`autores_aut_codigo` ,`libros_lib_codigo`) VALUES ('2','2');
INSERT INTO `biblioteca`.`autores_has_libros`(`autores_aut_codigo` ,`libros_lib_codigo`) VALUES ('3','3');
INSERT INTO `biblioteca`.`autores_has_libros`(`autores_aut_codigo` ,`libros_lib_codigo`) VALUES ('4','4');
INSERT INTO `biblioteca`.`autores_has_libros`(`autores_aut_codigo` ,`libros_lib_codigo`) VALUES ('5','5');
INSERT INTO `biblioteca`.`autores_has_libros`(`autores_aut_codigo` ,`libros_lib_codigo`) VALUES ('5','6');
INSERT INTO `biblioteca`.`autores_has_libros`(`autores_aut_codigo` ,`libros_lib_codigo`) VALUES ('2','7');


INSERT INTO `biblioteca`.`usuarios_has_ejemplares`(`usuarios_usu_codigo`,`ejemplares_ejem_codigo`) VALUES ('1','1');
INSERT INTO `biblioteca`.`usuarios_has_ejemplares`(`usuarios_usu_codigo`,`ejemplares_ejem_codigo`) VALUES ('2','2');
INSERT INTO `biblioteca`.`usuarios_has_ejemplares`(`usuarios_usu_codigo`,`ejemplares_ejem_codigo`) VALUES ('3','3');
INSERT INTO `biblioteca`.`usuarios_has_ejemplares`(`usuarios_usu_codigo`,`ejemplares_ejem_codigo`) VALUES ('4','4');
INSERT INTO `biblioteca`.`usuarios_has_ejemplares`(`usuarios_usu_codigo`,`ejemplares_ejem_codigo`) VALUES ('5','5');
INSERT INTO `biblioteca`.`usuarios_has_ejemplares`(`usuarios_usu_codigo`,`ejemplares_ejem_codigo`) VALUES ('6','6');
INSERT INTO `biblioteca`.`usuarios_has_ejemplares`(`usuarios_usu_codigo`,`ejemplares_ejem_codigo`) VALUES ('7','7');

INSERT INTO `biblioteca`.`prestamos_has_libros`(`prestamos_pres_codigo`,`libros_lib_codigo`) VALUES ('1','1');
INSERT INTO `biblioteca`.`prestamos_has_libros`(`prestamos_pres_codigo`,`libros_lib_codigo`) VALUES ('1','2');
INSERT INTO `biblioteca`.`prestamos_has_libros`(`prestamos_pres_codigo`,`libros_lib_codigo`) VALUES ('1','3');
INSERT INTO `biblioteca`.`prestamos_has_libros`(`prestamos_pres_codigo`,`libros_lib_codigo`) VALUES ('2','4');
INSERT INTO `biblioteca`.`prestamos_has_libros`(`prestamos_pres_codigo`,`libros_lib_codigo`) VALUES ('2','5');
INSERT INTO `biblioteca`.`prestamos_has_libros`(`prestamos_pres_codigo`,`libros_lib_codigo`) VALUES ('2','6');
INSERT INTO `biblioteca`.`prestamos_has_libros`(`prestamos_pres_codigo`,`libros_lib_codigo`) VALUES ('2','7');


INSERT INTO `biblioteca`.`estado_prestamos`(`epres_estado`,`epres_pres_codigo`) VALUES ('disponible','1');
INSERT INTO `biblioteca`.`estado_prestamos`(`epres_estado`,`epres_pres_codigo`) VALUES ('prestado','2');

