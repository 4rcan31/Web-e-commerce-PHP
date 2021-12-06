CREATE SCHEMA `vapesuissee` DEFAULT CHARACTER SET utf8mb4 ;

use vapesuissee;

create table usuarios(
				id_usuario int auto_increment,
				nombre varchar(50),
				apellido varchar(50),
				email varchar(50),
				password text(50),
				fechaCaptura date,
				primary key(id_usuario)
					);

create table categorias (
				id_categoria int auto_increment,
				id_usuario int not null,
				nombreCategoria varchar(150),
				fechaCaptura date,
				primary key(id_categoria)
						);

create table imagenes(
				id_imagen int auto_increment,
				id_categoria int not null,
				nombre varchar(500),
				ruta varchar(500),
				fechaSubida date,
				primary key(id_imagen)
					);
create table articulos(
				id_producto int auto_increment,
				id_categoria int not null,
				id_imagen int not null,
				id_usuario int not null,
				nombre varchar(50),
				descripcion varchar(500),
				cantidad int,
				precio float,
				fechaCaptura date,
				primary key(id_producto)

						);

create table clientes(
				id_cliente int auto_increment,
				id_usuario int not null,
				nombre varchar(200),
				apellido varchar(200),
				direccion varchar(200),
				email varchar(200),
				telefono varchar(200),
				rfc varchar(200),
				primary key(id_cliente)
					);
create table ventas(
				id_venta int not null,
				id_cliente int,
				id_producto int,
				id_usuario int,
				precio float,
				fechaCompra date
					);


CREATE TABLE `roles` ( `id_rol`
			 INT(2) NOT NULL AUTO_INCREMENT , 
			 `rol` VARCHAR(30) NOT NULL , 
			 PRIMARY KEY (`id_rol`))
			  ENGINE = InnoDB;



-- TODO: recuerda poner foreign key en la tabla de usuarios en la columna de 'rol' 