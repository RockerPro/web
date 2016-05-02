create database blog;

use blog;


/* tabla usuarios */

drop table if exists usuario;
create table usuario(
codusu char(9) not null primary key,
nomusu varchar(40) not null,
rol char(3)  default 'U' not null,
email varchar(50) unique not null,
pass mediumtext not null,
fech_create TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

insert into usuario (codusu,nomusu,rol,email,pass) 
values('us0001','Administrador','A','admin123@gmail.com','f865b53623b121fd34ee5426c792e5c33af8c227');
insert into usuario (codusu,nomusu,rol,email,pass) 
values('us0002','Usuario','U','usuario123@gmail.com','3c55950f0400029902b056c1492f4cc040898c79');
select * from usuario;

SELECT SHA1('usuario123');
/* Procedimientos almacenados - login de usuario */
DELIMITER $$
DROP PROCEDURE IF EXISTS sp_login;
create procedure sp_login(
us VARCHAR(50),
ps mediumtext
)
BEGIN
		declare resul varchar(100);
		declare rola char(3);
		declare id char(9);
		set resul = (select nomusu from usuario where email=us and pass=SHA1(ps));
		set rola = (select rol from usuario where email=us and pass=SHA1(ps));
		set id = (select codusu from usuario where email=us and pass=SHA1(ps));
		IF (resul <> '') THEN
       		 select 'success' res,resul,rola,id;	       
     ELSE     
        select 'fail' res;
     END IF;
END

call sp_login('admin123@gmail.com','admin123');
call sp_login('cristians@gmail.com','manzana');

create procedure sp_listar_usu()
select codusu,nomusu,rol,email,fech_create from usuario

DELIMITER $$
CREATE PROCEDURE sp_nuevo_usu(	
 nom varchar(100),
 mail varchar(50),
 pas mediumtext
 )
BEGIN
        DECLARE co CHAR(9);
        DECLARE hm int;
        	 SET hm = (select COUNT(*)  from usuario where email=mail);
        	 IF (hm >= 1) THEN
       		 select 'fail' res, 'El usuario ya existe' res2;       
	     	ELSE   
			   SET co = (select concat('us',right(concat('000',right(IFNULL(max(codusu),'000'),3)+1),4)) AS cod from usuario);
          	insert into usuario (codusu,nomusu, email,pass) values(co,nom,mail,SHA1(pas));
	       	 select 'succes' res, co;
	     	END IF;
        END $$
        
CREATE PROCEDURE sp_obtener_usu(
id char(9)
)select codusu,nomusu,rol,email,fech_create from usuario where codusu = id;


CREATE PROCEDURE sp_elim_usu(
id char(9)
)delete from usuario where codusu = id;

CREATE PROCEDURE sp_editar_usu(
 cod char(9),	
 nom varchar(100),
 mail varchar(50)
 )
update usuario set nomusu=nom, email=mail where codusu=cod;

call sp_editar_usu('us0005','cristians bregante','cristians22@gmail.com');

CREATE PROCEDURE sp_change_pass(
 cod char(9),
 pas mediumtext
 )
update usuario set pass=SHA1(pas) where codusu = cod;

/* tabla categorias*/
drop table if exists categoria;
create table categoria(
codcat char(9) not null primary key,
name varchar(40) not null
)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

insert into categoria values('cat001','Infraestructura');
insert into categoria values('cat002','Soluciones Móbiles');
insert into categoria values('cat003','Consultoría y Emprendimiento');

select * from categoria;
/* tabla posts */

drop table if exists post;
create table post(
codpost char(9) not null primary key,
title varchar(40) not null,
content mediumtext not null,
summary mediumtext not null,
state char(1) default 'D'  not null,
category varchar(40),
author varchar(100),
path_url mediumtext,
fech_create TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


insert into post values('pt001','Post numero 1', 'mucho texto de contenido',
'mucho texto','D','Infraestructura','admin/public/dist/img/post/pt001.jpg');

select * from post;

DELIMITER $$
CREATE PROCEDURE nuevopost(	
 tit varchar(100),
 conte mediumtext,
 summ mediumtext,
 cate varchar(40),
 auth varchar(100)
 )
BEGIN
        DECLARE co CHAR(9);
        DECLARE img mediumtext;
            SET co = (select concat('pt',right(concat('000',right(IFNULL(max(codpost),'000'),3)+1),4)) AS cod from post);
            SET img =(select concat('pt',right(concat('000',right(IFNULL(max(codpost),'000'),3)+1),4),'.jpg') AS img from post);
          insert into post (codpost,title, content,summary,category,author,path_url) values(co,tit,conte,summ,cate,auth,img);
           	select co,img;
        END $$

call nuevopost('post numero 2','contenido asdasdad','resumenasdsa','Infraestructura');


CREATE PROCEDURE sp_lista_posts()
select * from post order by fech_create desc; 


CREATE PROCEDURE sp_obtener_posts(
id char(9)
)select * from post where codpost = id;


CREATE PROCEDURE sp_elim_post(
id char(9)
)delete from post where codpost = id;

CREATE PROCEDURE sp_editar_post(
 cod char(9),	
 tit varchar(100),
 conte mediumtext,
 summ mediumtext,
 cate varchar(40)
 )
update  post set title=tit, content=conte,summary=summ,category=cate where codpost=cod;

/* tabla posts */

drop table if exists comentario;
create table comentario(
codcm char(9) not null primary key,
title varchar(40) not null,
content mediumtext not null,
summary mediumtext not null,
state char(1) default 'D'  not null,
category varchar(40),
author varchar(100),
path_url mediumtext,
fech_create TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


