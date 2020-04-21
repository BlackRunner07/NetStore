
create table contact(
    id_motivo int (5) auto_increment,
    nombre char(50),
    correo char(50),
    motivo char(80),
    mensaje char(200),
    PRIMARY KEY (id_motivo)
);