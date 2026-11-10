drop table Biblioteca_de_alejandria.dbo.clientes;
drop table Biblioteca_de_alejandria.dbo.pedidos;
-- Tablas

CREATE TABLE clientes (id INTEGER PRIMARY KEY, nombre varchar(100), ciudad varchar(100));
CREATE TABLE pedidos  (id INTEGER PRIMARY KEY, cliente_id INTEGER, fecha date, total REAL);




select * from clientes;

-- Datos de ejemplo
INSERT INTO clientes VALUES
 (1,'Ana Ruiz','Bogotá'), (2,'Luis Gómez','Medellín'), (3,'Marta Peña','Bogotá'),
 (4,'Juan Pérez','Cali'), (5,'Juan Pérez','Bogotá'), (6,'Sofía Díaz','Medellín');

INSERT INTO pedidos VALUES
 (1,1,'2026-01-10',120000), (2,1,'2026-03-05',80000),  (3,2,'2026-02-14',45000),
 (4,3,'2025-12-20',300000), (5,4,'2026-04-01',60000),  (6,4,'2026-04-15',90000),
 (7,5,'2026-05-02',150000);

--Corrige tu consulta 2 para que aparezcan todos los clientes, con 0 si no tienen pedidos.
select c.id, c.nombre, isnull(sum(p.total),0)
from Biblioteca_de_alejandria.dbo.clientes c
left join Biblioteca_de_alejandria.dbo.pedidos p on c.id = p.cliente_id
group by c.id, c.nombre;


--Muestra cuántos pedidos tiene cada cliente (usa COUNT bien, que no cuente 1 para quien no tiene).
select c.id, c.nombre, count(p.id)
from Biblioteca_de_alejandria.dbo.clientes c
left join Biblioteca_de_alejandria.dbo.pedidos p on c.id = p.cliente_id
group by c.id, c.nombre;

--Muestra solo los clientes que tienen más de un pedido.
select c.id, c.nombre, count(p.id)
from Biblioteca_de_alejandria.dbo.clientes c
left join Biblioteca_de_alejandria.dbo.pedidos p on c.id = p.cliente_id
group by c.id, c.nombre
having count(p.id) > 1;

--4. Total vendido por ciudad, incluyendo ciudades cuyos clientes no han comprado.
SELECT c.ciudad, isnull(sum(p.total),0)
from clientes c
left join pedidos p on c.id = p.cliente_id
group by c.ciudad;

-- 5. Clientes con pedidos en 2026 y también los que no tienen ninguno en 2026, pero que se vean todos. (Aquí aplica la trampa de WHERE vs ON.)
SELECT c.id, c.nombre, isnull(sum(p.total),0)
from clientes c
left join pedidos p on c.id = p.cliente_id
and p.fecha >= '2026-05-02'
group by c.id, c.nombre;

-- 6. Muestra el cliente con mayor total gastado. Hay dos “Juan Pérez”: tu consulta debe distinguirlos.
select top 1 c.id, c.nombre, isnull(sum(p.total),0) as total
from Biblioteca_de_alejandria.dbo.clientes c
left join Biblioteca_de_alejandria.dbo.pedidos p on c.id = p.cliente_id
group by c.id, c.nombre
order by total desc;


-- A) Subconsulta ESCALAR: devuelve UN solo valor
-- Pedidos cuyo total supera el promedio de todos los pedidos
SELECT id, cliente_id, total
FROM pedidos
WHERE total > (SELECT AVG(total) FROM pedidos);   -- la interna devuelve un número
-- Resultado esperado con tus datos: pedidos 4 (300000) y 7 (150000)
--para entender mejor consulta separada
SELECT AVG(total) FROM pedidos;


-- B) Subconsulta de LISTA: devuelve varios valores, se usa con IN
-- Clientes que aparecen en la tabla de pedidos
SELECT id, nombre
FROM clientes
WHERE id IN (SELECT cliente_id FROM pedidos);
-- para entender mejor consulta separada
SELECT cliente_id FROM pedidos;

-- C) Subconsulta en FROM (tabla derivada): se usa como si fuera una tabla
SELECT t.ciudad, t.total_ciudad
FROM (
    SELECT c.ciudad, SUM(p.total) AS total_ciudad
    FROM clientes c
    JOIN pedidos p ON c.id = p.cliente_id
    GROUP BY c.ciudad
) AS t                                            -- aquí el alias es obligatorio en SQL Server
WHERE t.total_ciudad > 100000;
-- consulta separada para entender mejor
SELECT c.ciudad, SUM(p.total) AS total_ciudad
    FROM clientes c
    JOIN pedidos p ON c.id = p.cliente_id
    GROUP BY c.ciudad;


-- CTE: primero calculo el total por ciudad, luego lo filtro
WITH ventas_por_ciudad AS (
    SELECT c.ciudad, SUM(p.total) AS total_ciudad
    FROM clientes c
    JOIN pedidos p ON c.id = p.cliente_id
    GROUP BY c.ciudad
)
SELECT ciudad, total_ciudad
FROM ventas_por_ciudad
WHERE total_ciudad > 100000;
-- Resultado esperado: Bogotá 650000 y Cali 150000
-- para entenderlo separo las consultas
SELECT c.ciudad, SUM(p.total) AS total_ciudad
    FROM clientes c
    JOIN pedidos p ON c.id = p.cliente_id
    GROUP BY c.ciudad;


--Ejercicio 7 (el que te preocupa): clientes cuyo total gastado es mayor al promedio de gasto por cliente.
--💡 Pista 1: es un problema de dos niveles. Primero necesitas el total por cliente. Luego, el promedio de esos totales (no el promedio de los pedidos, que es otra 
--cosa). Después comparas. ¿Qué herramienta de la clase de hoy te deja hacer el primer paso y reutilizarlo en el segundo?
select AVG(t.total_por_cliente) as promedio
from (
select c.id, isnull(sum(p.total),0) as total_por_cliente
from Biblioteca_de_alejandria.dbo.clientes c
left join Biblioteca_de_alejandria.dbo.pedidos p on c.id = p.cliente_id
group by c.id
) ;


WITH total_por_cliente AS (
select c.id, c.nombre, isnull(sum(p.total),0) as total
from Biblioteca_de_alejandria.dbo.clientes c
left join Biblioteca_de_alejandria.dbo.pedidos p on c.id = p.cliente_id
group by c.id, c.nombre
) 
SELECT id, nombre, total
FROM total_por_cliente
WHERE total > ( select AVG(total) as promedio
from total_por_cliente
) ;


--Ejercicio 8: reescribe tu ejercicio 6 (cliente con mayor gasto) usando una CTE que calcule el total por cliente.
--💡 Pista 1: el cuerpo de la CTE es casi idéntico a tu consulta del ejercicio 1. La consulta final solo tiene que elegir una fila de ella.
with orden_ventas as (
    select c.id, c.nombre, isnull(sum(p.total),0) as total
from Biblioteca_de_alejandria.dbo.clientes c
left join Biblioteca_de_alejandria.dbo.pedidos p on c.id = p.cliente_id
group by c.id, c.nombre
)
select top 1 id, nombre, total
from orden_ventas
order by total desc;

-- Ejercicio 9b: escribe una sola consulta que muestre las ciudades con más de 1 pedido en 2026, usando WHERE y HAVING a la vez.
-- Resultado esperado con tus datos: Bogotá con 3 y Cali con 2.
select c.ciudad, count(p.id)
from Biblioteca_de_alejandria.dbo.clientes c
join Biblioteca_de_alejandria.dbo.pedidos p on c.id = p.cliente_id
where fecha > '2025-12-31'
group by c.ciudad
having count(p.id) > 1;

--Ejercicio 10 (nuevo): clientes sin pedidos, pero con NOT EXISTS en lugar de LEFT JOIN. Compara los dos resultados: deben ser iguales.
SELECT c.id, c.nombre
FROM clientes c
WHERE NOT EXISTS (
    SELECT 1
    FROM pedidos p
    WHERE p.cliente_id = c.id
);

--patron que se usa mucho
-- Paso 1: calcular una métrica por entidad (CTE)
WITH total_por_cliente AS (
    SELECT c.id, c.nombre, COALESCE(SUM(p.total), 0) AS total
    FROM clientes c
    LEFT JOIN pedidos p ON c.id = p.cliente_id
    GROUP BY c.id, c.nombre
)
-- Paso 2: compararla contra un agregado de esa misma métrica
SELECT id, nombre, total
FROM total_por_cliente
WHERE total > (SELECT AVG(total) FROM total_por_cliente);


--cada pedido con el total de su cliente (sin perder filas)
SELECT
    id,
    cliente_id,
    total,
    -- suma los totales de TODOS los pedidos del mismo cliente, pero deja cada fila viva
    SUM(total) OVER (PARTITION BY cliente_id) AS total_cliente
FROM Biblioteca_de_alejandria.dbo.pedidos;


-- numerar los pedidos de cada cliente por fecha
SELECT
    cliente_id,
    id AS pedido_id,
    fecha,
    total,
    -- reinicia el conteo en 1 para cada cliente; el orden lo da la fecha
    ROW_NUMBER() OVER (PARTITION BY cliente_id ORDER BY fecha) AS n_pedido
FROM Biblioteca_de_alejandria.dbo.pedidos;



-- el patrón más importante, “el último pedido de cada cliente”
WITH pedidos_numerados AS (
    SELECT
        cliente_id,
        id AS pedido_id,
        fecha,
        total,
        -- DESC: el pedido más reciente de cada cliente recibe el número 1
        ROW_NUMBER() OVER (PARTITION BY cliente_id ORDER BY fecha DESC) AS rn
    FROM Biblioteca_de_alejandria.dbo.pedidos
)
SELECT cliente_id, pedido_id, fecha, total
FROM pedidos_numerados
WHERE rn = 1;   -- nos quedamos solo con el más reciente