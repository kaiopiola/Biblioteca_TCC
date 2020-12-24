DROP DATABASE if exists tcc;

CREATE DATABASE tcc CHARACTER SET utf8 COLLATE utf8_general_ci;

USE tcc;

CREATE TABLE cargos (
    id int NOT NULL AUTO_INCREMENT,
    cargo varchar(30) NOT NULL,
    posicao int NOT NULL UNIQUE,
    PRIMARY KEY(id)
);

CREATE TABLE cursos (
	id int NOT NULL AUTO_INCREMENT,
    curso varchar(50) NOT NULL UNIQUE,
    codigo varchar(6) NOT NULL UNIQUE,
    PRIMARY KEY(id)
);

CREATE TABLE usuarios (
    id int NOT NULL AUTO_INCREMENT,
    ra varchar(20) NULL UNIQUE,
    nome varchar(50) NOT NULL,
    genero enum('m', 'f', 'o') NOT NULL,
    curso int NULL,
    email varchar(50) NOT NULL,
    senha char(60) NOT NULL,
    cargo int NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(cargo) REFERENCES cargos(id),
    FOREIGN KEY(curso) REFERENCES cursos(id)
);

CREATE TABLE trabalhos (
	id int NOT NULL AUTO_INCREMENT,
    titulo varchar(200) NOT NULL,
    descricao text NULL,
    curso int NOT NULL,
    orientador int NOT NULL,
    data_publicacao date NULL,
    arquivo varchar(40),
    ultima_alteracao datetime DEFAULT current_timestamp,
    PRIMARY KEY(id),
    FOREIGN KEY(curso) REFERENCES cursos(id),
    FOREIGN KEY(orientador) REFERENCES usuarios(id)
);

CREATE TABLE relacao (
	id int NOT NULL AUTO_INCREMENT,
    aluno int NOT NULL,
    trabalho int NOT NULL,
    PRIMARY KEY(id),
    FOREIGN KEY(aluno) REFERENCES usuarios(id),
    FOREIGN KEY(trabalho) REFERENCES trabalhos(id)
);

INSERT INTO cargos(`cargo`, `posicao`)
VALUES ('Aluno', 1), 
('Professor', 2), 
('Coordenador', 3), 
('Supervisor', 4), 
('Administrador', 5);

INSERT INTO usuarios(`nome`, `genero`, `email`, `senha`, `cargo`) VALUES ('Administrador', 'o', 'kaio.piola@hotmail.com', '$2y$10$f1Ex.c5jjbCnrt/5UrmxiuYpBA76dQhB8RNrMunnR4heV1PRQyt/i', 5);

CREATE TABLE permissoes (
	permitir_registro bool NOT NULL DEFAULT false,
    cadastrar_aluno int NOT NULL DEFAULT 3,
    cadastrar_professor int NOT NULL DEFAULT 4,
    cadastrar_coordenador int NOT NULL DEFAULT 4,
    inserir_trabalho int NOT NULL DEFAULT 2,
    
	FOREIGN KEY(cadastrar_aluno) REFERENCES cargos(id),
    FOREIGN KEY(cadastrar_professor) REFERENCES cargos(id),
    FOREIGN KEY(cadastrar_coordenador) REFERENCES cargos(id),
    FOREIGN KEY(inserir_trabalho) REFERENCES cargos(id)
);

INSERT INTO permissoes () VALUES ();
