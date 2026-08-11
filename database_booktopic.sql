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
birthdate DATE NOT NULL,
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
id_type INT NOT NULL
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS book(
id_book INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
title_book VARCHAR(50) NOT NULL,
subtitle_book VARCHAR(50),
published_at_book DATE NOT NULL,
summary_book TEXT,
id_author INT,
id_editor INT
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

CREATE TABLE IF NOT EXISTS editor(
id_editor INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
name_editor VARCHAR(50) NOT NULL UNIQUE
)ENGINE=innoDB;

CREATE TABLE IF NOT EXISTS author(
id_author INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
firstname_author VARCHAR(50) NOT NULL,
lastname_author VARCHAR(50) NOT NULL
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

ALTER TABLE user_list
ADD CONSTRAINT fk_to_register_list
FOREIGN KEY (id_list)
REFERENCES list(id_list),
ADD CONSTRAINT fk_to_register_user
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

