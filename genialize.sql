create database genialize;
use genialize;

create table Usuarios (
    idUsuario int not null auto_increment,
    nome varchar(100) not null,
    cpf varchar (11) not null,
    email varchar(40) not null,
    senha varchar(30) not null,
    contato varchar(11) null,
    imgUsuario varchar(150),
    primary key (idUsuario)
);

create table Educadores (
    idEducador int not null auto_increment,
    nome varchar(100) not null,
    cpf varchar (11) not null,
    email varchar(40) not null,
    senha varchar(30) not null,
    contato varchar(11) not null,
    imgEducador varchar(150),
    primary key (idEducador)
);

create table Cursos (
    idCurso int not null auto_increment,
    titulo varchar(50)not null,
    descricao varchar(200)not null,
    idioma varchar(150) not null,
    valor double(9,2) not null,
    categoria varchar(50) not null,
    sobre varchar(3000) not null,
    imgCurso varchar(150) not null,
    idEducador int(11) not null,
    constraint fk_curso_educador
        foreign key(idEducador)
        references genialize.educadores(idEducador),
    primary key (idCurso)
);

create table compras(
    idCurso int(11) not null,
    idUsuario int(11) not null,
    constraint fk_compras_curso
        foreign key(idCurso)
        references genialize.cursos(idCurso),
    constraint fk_compras_usuario
        foreign key(idUsuario)
        references genialize.usuarios(idUsuario),
    primary key (idCurso, idUsuario)
);


create table avisos(
    idAviso int(11) not null auto_increment,
    dataAviso date not null,
    aviso varchar(600) not null,
    idCurso int(11) not null,
    constraint fk_curso_aviso
        foreign key(idCurso)
        references genialize.cursos(idCurso),
    primary key (idAviso)
);

create table aulas(
    idAula int(11) not null auto_increment,
    titulo varchar(50) not null,
    descricao varchar(700) not null,
    idCurso int(11) not null,
    constraint fk_curso_aula
        foreign key(idCurso)
        references genialize.cursos(idCurso),
    primary key (idAula)
);

create table arquivos(
    idArquivo int(11) not null auto_increment,
    arquivo varchar(500) not null,
    tipo varchar(20) not null,
    idAula int(11) not null,
    constraint fk_aula_arquivo
        foreign key(idAula)
        references genialize.aulas(idAula),
    primary key (idArquivo)
);