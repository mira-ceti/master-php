INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`, `fecha`) 
    VALUES (NULL, 'Isidro', 'Bellón Cano', 'isidro.bellon@gmail.com', '123456', '2021-04-14'), 
            (NULL, 'Juan Manuel', 'Fernández de la Cal', 'jmcal@gmail.com', '123456', '2021-04-14'),
            (NULL, 'Edmundo', 'Pérez de los Cobos', 'edmundo.cobos@gmail.com', '123456', '2021-04-14'),
            (NULL, 'admim', 'dba mysql', 'admin.mysql@gmail.com', '123456', '2021-04-01');

--Me muestra el 2 y 3 registros:
SELECT * FROM `usuarios` WHERE 1 LIMIT 1,2

id	nombre	        apellidos	        email	                 password	fecha	
2	Juan Manuel	Fernández de la Cal	jmcal@gmail.com	         123456	        2021-04-14	
3	Edmundo	        Pérez de los Cobos	edmundo.cobos@gmail.com	 123456	        2021-04-14	

INSERT INTO `categorias` (`id`, `nombre`) 
    VALUES (NULL, 'Acción'), (NULL, 'Rol'), (NULL, 'Deportes');

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) 
    VALUES (NULL, '1', '1', 'La Vuelta al Mundo en 80 días', 'Agencia de Viajes el Suceso SL saca este pack de viajes sorprendentes alrededor del mundo', '2021-04-14'), 
            (NULL, '1', '2', 'Review de LOL online', 'Todo sobre LOL en la Red y las opiniones de los usuarios', '2021-04-14'),
            (NULL, '1', '3', 'World Cup Championship', 'Campeonanto del Mundo de Fútbol', '2021-04-14');

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) 
    VALUES (NULL, '2', '1', 'La Vuelta al Mundo en 80 días', 'Agencia de Viajes el Suceso SL saca este pack de viajes sorprendentes alrededor del mundo', '2021-04-14'), 
            (NULL, '2', '2', 'Review de LOL online', 'Todo sobre LOL en la Red y las opiniones de los usuarios', '2021-04-14'),
            (NULL, '2', '3', 'World Cup Championship', 'Campeonanto del Mundo de Fútbol', '2021-04-14');

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) 
    VALUES (NULL, '3', '1', 'La Vuelta al Mundo en 80 días', 'Agencia de Viajes el Suceso SL saca este pack de viajes sorprendentes alrededor del mundo', '2021-04-14'), 
            (NULL, '3', '2', 'Review de LOL online', 'Todo sobre LOL en la Red y las opiniones de los usuarios', '2021-04-14'),
            (NULL, '3', '3', 'World Cup Championship', 'Campeonanto del Mundo de Fútbol', '2021-04-14');

INSERT INTO `entradas` (`id`, `usuario_id`, `categoria_id`, `titulo`, `descripcion`, `fecha`) 
    VALUES (NULL, '4', '1', 'La Vuelta al Mundo en 80 días', 'Agencia de Viajes el Suceso SL saca este pack de viajes sorprendentes alrededor del mundo', '2021-04-14'), 
            (NULL, '4', '2', 'Review de LOL online', 'Todo sobre LOL en la Red y las opiniones de los usuarios', '2021-04-14'),
            (NULL, '4', '3', 'World Cup Championship', 'Campeonanto del Mundo de Fútbol', '2021-04-14');

SELECT e.id, e.titulo, u.nombre AS 'Autor', c.nombre AS 'Categoría'
    FROM entradas e
    INNER JOIN usuarios u ON u.id = e.usuario_id
    INNER JOIN categorias c ON c.id = e.categoria_id
    ORDER BY e.id;

SELECT c.nombre, COUNT(e.id) 
    FROM entradas e 
    RIGHT JOIN categorias c ON c.id = e.categoria_id 
    GROUP BY e.categoria_id