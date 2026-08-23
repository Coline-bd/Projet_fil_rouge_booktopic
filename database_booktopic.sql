CREATE DATABASE IF NOT EXISTS booktopic CHARSET utf8mb4;

use booktopic;

-- Création des tables
CREATE TABLE IF NOT EXISTS `user`(
id_user INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
firstname_user VARCHAR(50) NOT NULL,
lastname_user VARCHAR(50) NOT NULL,
login_user VARCHAR(50) NOT NULL UNIQUE,
mail_user VARCHAR(100) NOT NULL UNIQUE,
password_user VARCHAR(100) NOT NULL,
birthdate_user DATE NOT NULL,
picture_user VARCHAR(255),
presentation_user VARCHAR(255),
id_role INT
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS `role`(
id_role INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
name_role VARCHAR(50) NOT NULL UNIQUE
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS follower_following(
id_follower INT,
id_following INT,
PRIMARY KEY(id_follower,id_following)
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS user_category(
id_user INT,
id_category INT,
PRIMARY KEY(id_user,id_category)
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS user_list(
id_user INT,
id_list INT,
PRIMARY KEY(id_user,id_list)
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS note(
id_note INT PRIMARY KEY	AUTO_INCREMENT NOT NULL,
note INT NOT NULL,
id_book INT NOT NULL,
id_user INT NOT NULL
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS `comment`(
id_comment INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
date_comment DATETIME DEFAULT CURRENT_TIMESTAMP NOT NULL,
content_comment VARCHAR(255) NOT NULL,
id_book INT NOT NULL,
id_user INT NOT NULL
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS category(
id_category INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
name_category VARCHAR(50) NOT NULL UNIQUE
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS `list`(
id_list INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
id_type INT NOT NULL,
id_user INT NOT NULL
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS book(
id_book INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
title_book VARCHAR(50) NOT NULL,
subtitle_book VARCHAR(50),
published_at_book DATE NOT NULL,
summary_book TEXT,
author_book VARCHAR(50),
cover_book VARCHAR(255),
editor_book VARCHAR(50)
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS category_book(
id_book INT,
id_category INT,
PRIMARY KEY(id_book,id_category)
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS list_book(
id_book INT,
id_list INT,
PRIMARY KEY(id_book,id_list)
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS to_like(
id_user INT,
id_comment INT,
PRIMARY KEY(id_user,id_comment)
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS `type`(
id_type INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
name_type VARCHAR(50) NOT NULL UNIQUE
)ENGINE=innoDB;

ALTER TABLE `user`
ADD CONSTRAINT fk_to_define_role
FOREIGN KEY (id_role)
REFERENCES role(id_role);

ALTER table follower_following
ADD CONSTRAINT fk_to_follow_follower
FOREIGN KEY (id_follower)
REFERENCES user(id_user),
ADD CONSTRAINT fk_to_follow_following
FOREIGN KEY (id_following)
REFERENCES user(id_user);

ALTER TABLE to_like
ADD CONSTRAINT fk_to_like_user
FOREIGN KEY (id_user)
REFERENCES user(id_user),
ADD CONSTRAINT fk_to_like_comment
FOREIGN KEY (id_comment)
REFERENCES comment(id_comment);

ALTER TABLE user_category
ADD CONSTRAINT fk_to_prefer_category
FOREIGN KEY (id_category)
REFERENCES category(id_category),
ADD CONSTRAINT fk_to_prefer_user
FOREIGN KEY (id_user)
REFERENCES `user`(id_user);

ALTER TABLE note
ADD CONSTRAINT fk_to_note_user
FOREIGN KEY (id_user)
REFERENCES `user`(id_user)
ON DELETE CASCADE,
ADD CONSTRAINT fk_to_assign_book
FOREIGN KEY (id_book)
REFERENCES book(id_book)
ON DELETE CASCADE;

ALTER TABLE `comment`
ADD CONSTRAINT fk_to_write_user
FOREIGN KEY (id_user)
REFERENCES `user`(id_user)
ON DELETE CASCADE,
ADD CONSTRAINT fk_to_attribute_book
FOREIGN KEY (id_book)
REFERENCES book(id_book)
ON DELETE CASCADE;

ALTER TABLE `list`
ADD CONSTRAINT fk_to_associate_type
FOREIGN KEY (id_type)
REFERENCES `type`(id_type)
ON DELETE CASCADE,
ADD CONSTRAINT fk_to_create_user
FOREIGN KEY (id_user)
REFERENCES `user`(id_user)
ON DELETE CASCADE;

ALTER TABLE category_book
ADD CONSTRAINT fk_to_categorize_category
FOREIGN KEY (id_category)
REFERENCES category(id_category),
ADD CONSTRAINT fk_to_categorize_book
FOREIGN KEY (id_book)
REFERENCES book(id_book);

ALTER TABLE list_book
ADD CONSTRAINT fk_to_add_list
FOREIGN KEY (id_list)
REFERENCES `list`(id_list),
ADD CONSTRAINT fk_to_add_book
FOREIGN KEY (id_book)
REFERENCES book(id_book);

-- Ajout de données

-- rôles des utilisateurs
INSERT INTO `role`(name_role) VALUES ("administrateur"),("utilisateur");

INSERT INTO `user`(firstname_user,lastname_user,login_user,mail_user,password_user,birthdate_user,picture_user,presentation_user,id_role)
VALUES ("Margot","Pascal","Margot17","margotpascal@test.fr","password123","2001-01-02","/images/pdp2.png","J'adore les thrillers !",2),
("Paul","Bernard","Paulo","paulbernard@test.fr","password123","1995-12-15","/images/pdp3.png","J'adore les mangas",2);

-- catégories
INSERT INTO category(name_category) VALUES ("Fantasy"),("Romance"),("Thriller"),("Horreur"),("Manga"),("Policier"),("Science-fiction");

INSERT INTO user_category(id_user,id_category) VALUES (1,1),(1,3),(2,5),(2,7);

-- Livres
INSERT INTO book(title_book,published_at_book,summary_book,editor_book,author_book,cover_book)
VALUE	("Le problème à trois corps","2026-10-05",
"En pleine Révolution culturelle, le pouvoir chinois construit la base militaire secrète de Côte Rouge, destinée à développer une arme de grand calibre. Ye Wenjie, une jeune astrophysicienne en cours de rééducation, intègre l'équipe de recherche. Dans ce lieu isolé où elle croit devoir passer le restant de sa vie, elle est amenée à travailler sur un système de télétransmissions dirigé vers l'espace et découvre peu à peu la véritable mission de Côte Rouge...
Trente-huit ans plus tard, alors qu'une étrange vague de suicides frappe la communauté scientifique internationale, l'éminent chercheur en nanotechnologies Wang Miao est témoin de phénomènes paranormaux qui bouleversent ses convictions d'homme rationnel. Parmi eux, une inexplicable suite de nombres qui défile sur sa rétine, tel un angoissant compte à rebours...","Actes Sud","Liu Cixin","https://static.fnac-static.com/multimedia/PE/Images/FR/NR/6f/23/9b/10167151/1540-1/tsp20240607073037/Le-Probleme-a-trois-corps.jpg");

-- Commentaires
INSERT INTO `comment`(content_comment,id_book,id_user) VALUES ("Je ne m'attendais pas à une si jolie surprise !.. Cette vision de l'évolution de l'espèce humaine après la Catastrophe est pleine d'espoir, et la vie dans cet équipage multi-espèces ne manque ni de saveur ni d'harmonie...",1,1),
("J’ai eu un peu de mal à accrocher au début mais je trouve que le point de vue de l’auteur est intéressant, dommage que l’intrigue mette du temps à se développer.",1,2);


SELECT * FROM user_category WHERE id_user = 1;