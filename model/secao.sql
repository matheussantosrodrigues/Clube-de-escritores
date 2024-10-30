-- Criação do banco de dados e seleção
create database secao;
use secao;

-- Tabela de Usuários
create table usuario (
    idCad int auto_increment not null primary key,
    usuario varchar(35) not null,
    senha char(8) not null,
    caminho varchar(255) not null,
    email varchar(254) not null
);

-- Tabela de Perfis de Usuários
create table perfil (
    idPerfil int auto_increment primary key,
    idCad int not null,
    nome varchar(50),
    fotoPerfil varchar(255),
    bio text,
    foreign key (idCad) references usuario(idCad) on delete cascade
);

-- Tabela de Amizades entre Usuários
create table amizades (
    idAmizade int auto_increment primary key,
    idCad1 int not null,
    idCad2 int not null,
    status varchar(20) check (status in ('pendente', 'aceito', 'recusado')),
    foreign key (idCad1) references usuario(idCad) on delete cascade,
    foreign key (idCad2) references usuario(idCad) on delete cascade
);

-- Tabela de Livros por Usuários
create table livros (
    idLivro int auto_increment primary key,
    idCad int not null,
    status varchar(20) check (status in ('querler', 'lendo', 'lido')),
    nomelivro varchar(100) not null,
    foreign key (idCad) references usuario(idCad) on delete cascade
);

-- Tabela de Resenhas dos Livros
create table resenhas (
    idResenha int auto_increment primary key,
    idCad int not null,
    nomelivro varchar(100) not null,
    comentario text,
    nota int check (nota between 1 and 5),
    dataResenha datetime default current_timestamp,
    foreign key (idCad) references usuario(idCad) on delete cascade
);

-- Tabela de Curtidas nas Resenhas
create table curtidas (
    idCurtida int auto_increment primary key,
    idResenha int not null,
    idCad int not null,
    foreign key (idResenha) references resenhas(idResenha) on delete cascade,
    foreign key (idCad) references usuario(idCad) on delete cascade
);

-- Tabela de Categorias de Livros
create table categorias (
    idCategoria int auto_increment primary key,
    nomeCategoria varchar(50) not null
);

-- Tabela de Associação entre Livros e Categorias
create table livro_categoria (
    idLivroCategoria int auto_increment primary key,
    idLivroLido int not null,
    idCategoria int not null,
    foreign key (idLivroLido) references livroslidos(idLivroLido) on delete cascade,
    foreign key (idCategoria) references categorias(idCategoria) on delete cascade
);

-- Tabela de Mensagens Privadas entre Usuários
create table mensagens (
    idMensagem int auto_increment primary key,
    idRemetente int not null,
    idDestinatario int not null,
    conteudo text,
    dataEnvio datetime default current_timestamp,
    foreign key (idRemetente) references usuario(idCad) on delete cascade,
    foreign key (idDestinatario) references usuario(idCad) on delete cascade
);

-- Tabela de Listas de Leitura dos Usuários
create table listas_leitura (
    idLista int auto_increment primary key,
    idCad int not null,
    nomeLista varchar(50) not null,
    descricao text,
    foreign key (idCad) references usuario(idCad) on delete cascade
);

-- Tabela de Associação entre Livros e Listas de Leitura
create table livro_lista (
    idLivroLista int auto_increment primary key,
    idLista int not null,
    idLivroLido int not null,
    foreign key (idLista) references listas_leitura(idLista) on delete cascade,
    foreign key (idLivroLido) references livroslidos(idLivroLido) on delete cascade
);
