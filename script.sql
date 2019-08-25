
CREATE TABLE time(
    nome varchar(20) NOT NULL,  
    qntd_torcedores INT UNSIGNED NULL, 
    qntd_jogadores INT UNSIGNED NOT NULL, 
    PRIMARY KEY(nome));


CREATE TABLE usuario(
    user_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    login VARCHAR(20) NOT NULL, 
    password VARCHAR(20) NOT NULL,
    nome VARCHAR(20) NOT NULL,
    sobrenome VARCHAR(40) NOT NULL,
    idade INT UNSIGNED NOT NULL,
    sexo ENUM('M', 'F', 'O') NOT NULL,
    nome_time VARCHAR(20) NOT NULL,
    PRIMARY KEY(user_id),
    FOREIGN KEY (nome_time) REFERENCES time(nome));



CREATE TABLE jogador(
    player_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    nome VARCHAR(50) NOT NULL,
    posicao VARCHAR(20) NOT NULL,
    numero SMALLINT UNSIGNED NOT NULL,
    altura FLOAT NOT NULL,
    peso FLOAT NOT NULL,
    nome_time VARCHAR(20) NOT NULL,
    PRIMARY KEY(player_id),
    FOREIGN KEY (nome_time) REFERENCES time(nome));


CREATE TABLE timeline(
     id_msg INT UNSIGNED  NOT NULL AUTO_INCREMENT,
      mensagem VARCHAR(200) NOT NULL,  
      PRIMARY KEY (id_msg));


CREATE TABLE posta( 
    user_id INT UNSIGNED NOT NULL, 
    id_msg INT UNSIGNED NOT NULL, 
    PRIMARY KEY(user_id, id_msg),  
    FOREIGN KEY (user_id) REFERENCES usuario(user_id),
     FOREIGN KEY (id_msg) REFERENCES timeline(id_msg));
