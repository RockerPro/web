create database blog;

use blog;


/* tabla usuarios */

drop table if exists usuario;
create table usuario(
codusu char(9) not null primary key,
nomusu varchar(40) not null,
rol char(3)  default 'U' not null,
email varchar(50) unique not null,
pass varchar(20) not null
)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

insert into usuario values('us0001','Administrador','A','admin123@gmail.com','admin123');
select * from usuario;

/* Procedimientos almacenados - login de usuario */
DELIMITER $$
DROP PROCEDURE IF EXISTS sp_login;
create procedure sp_login(
us VARCHAR(50),
ps VARCHAR(20)
)
BEGIN
		declare resul varchar(100);
		declare rola char(3);
		set resul = (select nomusu from usuario where email=us and pass=ps);
		set rola = (select rol from usuario where email=us and pass=ps);
		IF (resul <> '') THEN
       		 select 'success' res,resul,rola;	       
     ELSE     
        select 'fail' res;
     END IF;
END

call sp_login('usuario1@gmail.com','otrouser123');
call sp_login('usuario123@gmail.com','usuario123');

/* tabla posts */

drop table if exists post;
create table post(
codusu char(9) not null primary key,
nomusu varchar(40) not null,
rol char(3)  default 'U' not null,
email varchar(50) unique not null,
pass varchar(20) not null
)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


