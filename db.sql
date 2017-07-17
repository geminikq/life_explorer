CREATE DATABASE life_explorer CHARSET utf8 COLLATE utf8_general_ci;

USE life_explorer;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255),
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100),
    reference INT,
    sex CHAR(1),
    career VARCHAR(64),
    hobby VARCHAR(128),
    speciality VARCHAR(128),
    points INT NOT NULL DEFAULT 0,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=INNODB;

CREATE TABLE shopping_notes (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    user_id INT NOT NULL,
    bought_at DATE NOT NULL,
    product_channel_id INT NOT NULL,
    quality_id INT NOT NULL,
    rate_no INT NOT NULL DEFAULT 0,
    remark VARCHAR(1024),    
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=INNODB;

CREATE TABLE shopping_note_qualities (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    shopping_note_id INT NOT NULL,
    product_or_channel CHAR(1) DEFAULT '0',
    quality_id INT NOT NULL
) ENGINE=INNODB;

CREATE TABLE channel_qualities (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    description VARCHAR(64)
) ENGINE=INNODB;

CREATE TABLE product_qualities (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    description VARCHAR(64)
) ENGINE=INNODB;

CREATE TABLE sectors (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(128),
    description VARCHAR(1024)
) ENGINE=INNODB;

CREATE TABLE sub_sectors (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(128),
    sector_id INT NOT NULL,
    description VARCHAR(1024)
) ENGINE=INNODB;

CREATE TABLE brands (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(128),
    in_sub_sector CHAR(1) DEFAULT '0',
    sector_id INT NOT NULL,
    description VARCHAR(1024)
) ENGINE=INNODB;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(128),
    brand_id INT NOT NULL,
    description VARCHAR(1024)
) ENGINE=INNODB;

CREATE TABLE channels (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(128),
    description VARCHAR(1024)
) ENGINE=INNODB;

CREATE TABLE questions (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    user_id INT NOT NULL,
    sector_id INT,
    sub_sector_id INT,
    brand_id INT,
    product_id INT,
    content_tag_id INT,
    content VARCHAR(4096),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=INNODB;

CREATE TABLE question_pendings (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    user_id INT NOT NULL,
    sector_id INT,
    sector_name VARCHAR(128),
    brand_id INT,
    brand_name VARCHAR(128),
    product_id INT,
    product_name VARCHAR(128),
    content VARCHAR(4096),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=INNODB;

CREATE TABLE answers (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    user_id INT NOT NULL,
    question_id INT NOT NULL,
    content_tag_id INT NULL,
    content VARCHAR(8192),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=INNODB;

CREATE TABLE comments (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    user_id INT NOT NULL,
    answer_id INT NOT NULL,
    comment_type INT NOT NULL
) ENGINE=INNODB;

CREATE TABLE comment_types (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    description VARCHAR(64)
) ENGINE=INNODB;

CREATE TABLE followers (
    id INT AUTO_INCREMENT PRIMARY KEY, 
    user_id INT NOT NULL,
    follow_type INT NOT NULL DEFAULT 0 COMMENT '0, queston; 1, user; 2, sector',
    follow_id INT NOT NULL
 
) ENGINE=INNODB;






