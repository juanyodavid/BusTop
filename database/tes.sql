#database NAME AN CREATION
CREATE DATABASE IF NOT EXISTS pasaje_database;
#select in the database
USE pasaje_database;
#creation of tables
SET GLOBAL event_scheduler = ON;
#bus
create table if  not exists bus(
	id_bus INT NOT NULL AUTO_INCREMENT, # id of the paddock
	chapa varchar(30), # name of paddock
	nivel varchar(50), # name of paddock
	cant_pas int(3), # name of paddock
	anho year, # descripcion
    index(id_bus),
	primary key(id_bus)# principal element
)ENGINE=INNODB;
#destino
create table if  not exists destino(
	id_destino INT NOT NULL AUTO_INCREMENT, # id of the paddock
	destino varchar(50), # name of paddock
	rutas varchar(50), # name of paddock
	precio varchar(50), # descripcion
	salida_dia date, # descripcion
	salida_hora time, # descripcion
	estado boolean default '1', # para desabilitar el destino una vez pasado el tiempo
    index(id_destino),
	primary key(id_destino),# principal element
    id_bus int not null,
    foreign key(id_bus)
    references bus(id_bus) on delete no action on update cascade
    
)ENGINE=INNODB;

#boleto
create table if  not exists boleto(
	id_boleto INT NOT NULL AUTO_INCREMENT,
	doc_pas int(50),
	nombre varchar(50),
	apellido varchar(50),
    estado boolean ,# para ver si esta reservado o no
    asiento varchar(10) ,
	obs varchar(50),
    primary key(id_boleto),
    id_destino int not null,
    foreign key(id_destino)
    references destino(id_destino) on delete no action on update cascade
)ENGINE=INNODB;

CREATE FUNCTION horaActual(entrada DATETIME) RETURNS FLOAT # esta funcion lo que debe hacer es que cuando se ponga la hora actual, nos convierta al FLOAT que necesitamosque supuestamente comienza del 1 de enero
BEGIN
  DECLARE salida FLOAT;
  SET salida = entrada;
  RETURN salida;
END
DELIMITER //
CREATE EVENT  if not exists cargar_notificiciones
    ON SCHEDULE
      EVERY 10 second  #Puedes escoger cada cuanto tiempo se ejecuta el evento 
	  DO 
	  BEGIN
    UPDATE visita SET contacto_infectado= 1 WHERE iduser IN(SELECT idusuario FROM resultest WHERE resultado =1 AND verificacion = 0) and CURRENT_DATE-10 <= diahora_salida ; #creo que setea todos los valores las visitas infectados y de 10 dias antes 
	 UPDATE resultest SET verificacion= 1 WHERE 1; # una vez que todas las visitas infectadas hayan sido identificadas, entonces se setea en 1 la verificacion ya que estan establecidos 
	 UPDATE visita SET contacto_infectado = 2 WHERE idplace IN(SELECT idplace FROM visitas WHERE resultado =1 AND verificacion = 0) # a los posibles infectados les setea en 2 ya que no estamos seguros que esten enfermos

	 INSERT INTO notis(iduser,mensaje,tiempo_contacto) SELECT iduser, idplace, diahora_entrada from visitas where contacto_infectado = 2 ); # en la tabla de notificaciones se insertan todos los posibles infectados con el id user, el lugar en el que tuvieron contacto y la hora aproximada mas info:https://www.w3schools.com/sql/trysql.asp?filename=trysql_insert_into_select_where
END //
DELIMITER;

CREATE EVENT  if not exists eliminar_boleto
ON SCHEDULE EVERY 5 second  #Puedes escoger cada cuanto tiempo se ejecuta el evento 
DO
DELETE FROM boleto WHERE estado=0 and id_destino IN(SELECT id_destino FROM destino WHERE salida_hora <= (CURRENT_TIME+ INTERVAL 1 HOUR) AND (CURRENT_DATE >= destino.salida_dia))


