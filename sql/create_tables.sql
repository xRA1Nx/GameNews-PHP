DROP TABLE IF EXISTS users_categorys, categorys, comments, news, authors, users;

CREATE TABLE IF NOT EXISTS users(
id BIGINT AUTO_INCREMENT PRIMARY KEY NOT NULL,
fname VARCHAR(50) NOT NULL,
lname VARCHAR(50) NOT NULL,
email VARCHAR(70) NOT NULL UNIQUE,
password VARCHAR(70) NOT NULL,
nickname VARCHAR(50),
avatar VARCHAR(255) DEFAULT './imgs/ava-default.svg'
);

CREATE TABLE IF NOT EXISTS authors(
id BIGINT PRIMARY KEY NOT NULL,
FOREIGN KEY(id) REFERENCES users(id) ON DELETE CASCADE
);


CREATE TABLE IF NOT EXISTS news(
id BIGINT AUTO_INCREMENT PRIMARY KEY,
id_author BIGINT NOT NULL,
text TEXT NOT NULL,
title VARCHAR(80)  NOT NULL,
date_time TIMESTAMP DEFAULT NOW(),
post_description TEXT NOT NULL CHECK (CHAR_LENGTH(post_description) <=320),
main_img  VARCHAR(255),
small_img VARCHAR(255) NOT NULL,
FOREIGN KEY(id_author) REFERENCES authors(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS comments(
id INT AUTO_INCREMENT PRIMARY KEY,
id_news BIGINT NOT NULL, 
id_user BIGINT NOT NULL,
text VARCHAR(50),
FOREIGN KEY(id_news) REFERENCES news(id) ON DELETE CASCADE,
FOREIGN KEY(id_user) REFERENCES users(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS categorys(
id INT AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50),
id_news BIGINT NOT NULL,
FOREIGN KEY(id_news) REFERENCES news(id) ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS users_categorys(
id BIGINT AUTO_INCREMENT PRIMARY KEY,
id_category INT NOT NULL,
id_user BIGINT NOT NULL,
FOREIGN KEY(id_category) REFERENCES categorys(id) ON DELETE CASCADE,
FOREIGN KEY(id_user) REFERENCES users(id) ON DELETE CASCADE
);


SELECT news.id, news.id_author, news.title, news.date_time, news.post_description, news.main_img, news.small_img, comments.id_news, SUM(comments.id_news) as com_count 
FROM news, comments 
GROUP BY  news.id  
WHERE news.id = comments.id_news 
ORDER BY com_count