CREATE TABLE estudiante
	(matricula_estudiante VARCHAR(5),
	cedula_estudiante VARCHAR(15),
	nombres_estudiante VARCHAR(50),
	apellidos_estudiante VARCHAR(50),
	celular_estudiante VARCHAR(10),
	email_estudiante VARCHAR(50),
	PRIMARY KEY (matricula_estudiante, cedula_estudiante));

CREATE TABLE carrera
	(codigo_carrera VARCHAR(5),
	nombre_carrera VARCHAR(50),
	PRIMARY KEY (codigo_carrera));

CREATE TABLE asignatura
	(codigo_asignatura VARCHAR(5),
	nombre_asignatura VARCHAR(50),
	codigo_carrera VARCHAR(5),
	PRIMARY KEY (codigo_asignatura),
	CONSTRAINT cod_carrera FOREIGN KEY (codigo_carrera) REFERENCES carrera(codigo_carrera));


CREATE TABLE inscripcion
	(matricula_estudiante VARCHAR(5),
	codigo_carrera VARCHAR(10),
	codigo_asignatura VARCHAR(10),
	CONSTRAINT fk_matri_est FOREIGN KEY (matricula_estudiante) REFERENCES estudiante(matricula_estudiante),
	CONSTRAINT cod_carrera FOREIGN KEY (codigo_carrera) REFERENCES carrera(codigo_carrera),
	CONSTRAINT cod_asig FOREIGN KEY (codigo_asignatura) REFERENCES asignatura(codigo_asignatura));

INSERT INTO carrera VALUES ('420','Ingenieria de sistemas');
INSERT INTO carrera VALUES ('421','Ingenieria industrial');
INSERT INTO carrera VALUES ('422','Ingenieria electronica');
INSERT INTO carrera VALUES ('423','Ingenieria de alimentos');

INSERT INTO asignatura VALUES ('42031','Ingenieria de software I','420');
INSERT INTO asignatura VALUES ('42032','Ingenieria de software II','420');
INSERT INTO asignatura VALUES ('42124','Materiales','421');
INSERT INTO asignatura VALUES ('42125','introcucion a las maquinas','421');

INSERT INTO estudiante VALUES ('70438','1013623024','David Leonardo','Bautista Bernal','3213728276','david.bautista@ugc.edu.co');

