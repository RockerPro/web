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
values('us0001','Administrador','A','admin123@gmail.com','010438e6515e45aeaea0ac5303dbf9c2806eb0d0');
insert into usuario (codusu,nomusu,rol,email,pass) 
values('us0002','Usuario','U','usuario123@gmail.com','3c55950f0400029902b056c1492f4cc040898c79');
select * from usuario;

SELECT SHA1('usuario123');
SELECT SHA1('3c55950f0400029902b056c1492f4cc040898c79');
1dd69c9972b50a6fcb013a72baaebc5eef05cd8a
select * from usuario
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

call sp_login('admin123@gmail.com','010438e6515e45aeaea0ac5303dbf9c2806eb0d0');
call sp_login('usuario123@gmail.com','3c55950f0400029902b056c1492f4cc040898c79');

drop procedure if exists sp_listar_usu;
create procedure sp_listar_usu()
select codusu,nomusu,rol,email,fech_create from usuario
where rol = 'U';

select * from usuario

DELIMITER $$
drop procedure if exists sp_nuevo_usu;
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
	       	 select 'success' res, co;
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
select 'success' res;


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
title varchar(200) not null,
content mediumtext not null,
summary mediumtext not null,
state char(1) default 'D'  not null,
category varchar(40),
author varchar(100),
path_url mediumtext,
url_web varchar(200),
fech_create TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP
)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


insert into post values('pt001','Post numero 1', 'mucho texto de contenido',
'mucho texto','D','Infraestructura','admin/public/dist/img/post/pt001.jpg');

select REPLACE(REPLACE(REPLACE('¿Por qué abandonan los carritos de compra',"¿",""),"?","")," ","-") from post;
select * from post;

DELIMITER $$
drop PROCEDURE if exists nuevopost;
CREATE PROCEDURE nuevopost(	
 tit varchar(200),
 conte mediumtext,
 summ mediumtext,
 cate varchar(40),
 auth varchar(100),
 url varchar(200)
 )
BEGIN
        DECLARE co CHAR(9);
        DECLARE ur varchar(200);
        DECLARE img mediumtext;
        		SET ur = (select REPLACE(url," ","-"));
            SET co = (select concat('pt',right(concat('000',right(IFNULL(max(codpost),'000'),3)+1),4)) AS cod from post);
            SET img =(select concat('pt',right(concat('000',right(IFNULL(max(codpost),'000'),3)+1),4),'.jpg') AS img from post);
          insert into post (codpost,title, content,summary,category,author,url_web,path_url) values(co,tit,conte,summ,cate,auth,ur,img);
           	select co,img;
        END $$

call nuevopost('post numero 2','contenido asdasdad','resumenasdsa','Infraestructura');


CREATE PROCEDURE sp_lista_posts()
select * from post order by fech_create desc; 

CREATE PROCEDURE sp_ult_posts()
select codpost, left(title,65) as title, path_url,url_web from post 
where state= 'A' order by fech_create desc limit 3;
 


CREATE PROCEDURE sp_related_posts(
 cate varchar(40)
)
select codpost, left(title,65) as title, path_url,url_web from post 
where category = cate and state = 'A'
ORDER BY RAND() desc limit 5;

CREATE PROCEDURE sp_xarea_posts(
 cate varchar(40)
)
select codpost, title, summary, path_url, fech_create, author,url_web from post 
where category = cate and state = 'A'
ORDER BY fech_create desc;




CREATE PROCEDURE sp_obtener_posts(
id char(9)
)select * from post where codpost = id;


CREATE PROCEDURE sp_elim_post(
id char(9)
)delete from post where codpost = id;

drop PROCEDURE if exists sp_editar_post;
CREATE PROCEDURE sp_editar_post(
 cod char(9),	
 tit varchar(200),
 conte mediumtext,
 summ mediumtext,
 cate varchar(40),
 url varchar(200)
 )
update  post set title=tit, content=conte,summary=summ,category=cate, url_web = REPLACE(url," ","-") where codpost=cod;

DELIMITER $$
drop PROCEDURE if exists sp_change_state_post;
CREATE PROCEDURE sp_change_state_post(	
 cod char(9)	
 )
BEGIN
	 DECLARE stte char(1);
    SET stte = (select state from post where codpost = cod);
	IF (stte = 'D') THEN
       update post set state = 'A' where codpost = cod;
		 select 'Activado' res;	       
   ELSEIF (stte = 'A') THEN   
       update post set state = 'D' where codpost = cod;
       select 'Desactivado' res;
   ELSE
       select 'lol' res;
   END IF;   
END $$

call sp_change_state_post('pt0001');

/* tabla analytics */

create table analytics(
content mediumtext not null
)DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

insert into analytics values('<script>var google_conversion_id=1072579290,google_conversion_label="OTUsCLDCh1wQ2oW5_wM",
google_custom_params=window.google_tag_params,google_remarketing_only=!0</script>');

select * from analytics;

drop PROCEDURE if exists sp_editar_script;
CREATE PROCEDURE sp_editar_script(
 conte mediumtext
 )
update analytics set content=conte;

CREATE PROCEDURE sp_listar_script(
 )
select * from analytics limit 1
