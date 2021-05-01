/* Diagrama_trabalho: */

CREATE TABLE Paciente (
    id_paciente INTEGER PRIMARY KEY UNIQUE,
    nome VARCHAR,
    telefone DOUBLE,
    cpf DOUBLE,
    email VARCHAR,
    endereco VARCHAR
);