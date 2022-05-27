-- USERS 
DELETE FROM users;
ALTER TABLE users AUTO_INCREMENT=0;

INSERT INTO users (fname, lname, email, password, nickname) 
VALUES('Станислав','Порхачевский', "stwski@gmail.com", "12345678", "xRA1Nx");

INSERT INTO users (fname, lname, email, password, nickname) 
VALUES('Петр','Пятаков', "user1@yandex.ru", "12345678", "PetrP");

INSERT INTO users (fname, lname, email, password, nickname) 
VALUES('Иванов','Иван', "user2@yandex.ru", "12345678", "IvanovI");

-- AUTHORS

DELETE FROM authors;
ALTER TABLE authors AUTO_INCREMENT=0;

INSERT INTO authors  
VALUES(1);

-- CATEGORYS

DELETE FROM categorys;
ALTER TABLE categorys AUTO_INCREMENT=0;


INSERT INTO categorys  (name)
VALUES('Diablo');

INSERT INTO categorys  (name)
VALUES('Overwatch');

INSERT INTO categorys  (name)
VALUES('HoS');

INSERT INTO categorys  (name)
VALUES('Starcraft');

INSERT INTO categorys  (name)
VALUES('Hearthstone');

INSERT INTO categorys  (name)
VALUES('Warcraft');

INSERT INTO categorys  (name)
VALUES('Другие игры');


-- NEWS

DELETE FROM news;
ALTER TABLE news AUTO_INCREMENT=0;

-- 1

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 2

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 3

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 4

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 5

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 6

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 7

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 8

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 9

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 10

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 11

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 12

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 13

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 14

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 7, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 15

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 7, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 16

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 7, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 17

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 7, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 18

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 7, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 19

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 7, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");

-- 20

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 1, 
"./imgs/test.jpg", "./imgs/test.jpg",
"DIABLO: тест", "DIABLO: тест", "DIABLO: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 2, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Overwatch: тест", "Overwatch: тест", "Overwatch: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 3, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Herous of the storm: тест", "Herous of the storm: тест", "Herous of the storm: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 4, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Starcraft: тест", "Starcraft: тест", "Starcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 5, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Hearthstone: тест", "Hearthstone: тест", "Hearthstone: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 6, 
"./imgs/test.jpg", "./imgs/test.jpg",
"World of Warcraft: тест", "World of Warcraft: тест", "World of Warcraft: тест");

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1, 7, 
"./imgs/test.jpg", "./imgs/test.jpg",
"Другие игры: тест", "Другие игры: тест", "Другие игры: тест");




INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1,
5, 
"./imgs/News/news-009.jpg",
"./imgs/Posts/post-009.jpg",
"Hearthstone: грядущее изменение баланса",
"Игроки в Hearthstone могут долго спорить друг с другом о балансе различных картах и целых колод, имея при этом
разные мнения об одном и том же предмете разговора. Но абсолютное большинство сходится во мнении, что есть одна
карта, баланс которой вызывает вопросы.",

"Игроки в Hearthstone могут долго спорить друг с другом о балансе различных картах и целых колод, имея при этом разные мнения об одном и том же предмете разговора. Но абсолютное большинство сходится во мнении, что есть одна карта, баланс которой вызывает вопросы. Конечно же речь о Спустить Собак. Собирая не первый месяц недовольные отзывы, разработчики наконец решили поделиться с сообществом своим виденьем решения данной проблемы.
Официальная цитата Blizzard (Источник)
Следующие изменения баланса будут введены в ближайшем обновлении:

Стоимость карты Спустить Собак (Охотник) теперь равна 3 маны (ранее 2)
На протяжении нескольких последних месяцев мы видели сотни различных колод, которые хорошо себя показывали, опираясь при этом на различные факторы. Наше сообщество невероятно изобретательно! Мы видим, как игроки постоянно пробуют что-то новое, создавая стратегии, позволяющие им бороться с колодами, которые вызывают у них проблемы.

На самых высоких уровнях игры существует несколько колод, которые хорошо себя показывают, а колоды топовых игроков меняются каждую неделю. Так как мы видим, что различные колоды обретают или теряют популярность в зависимости от того, как быстро игроки к ним адаптируются, то в данный момент мы не хотим кардинально изменять карту Спустить Собак. Однако, колоды Охотников стали сильно доминировать на всех уровнях игры.

Нам нравится, когда с помощью своей колоды вы можете сделать действительно мощный ход и показать сильное комбо. Но при этом, играя против Охотника, вы оказываетесь наказанными за то, что разыгрываете слишком много существ. Но выкладывание существ на стол является ключевым моментом игры, важным кусочком всего Hearthstone паззла. Поэтому игрок не должен ощущать ограничение в возможных ходах из-за того, что противник может ответить не самым приятным способом.

Мы очень серьезно подходим ко всем изменениям поэтому будем придерживаться нашего принципа о том, что изменять карты нужно только при крайней необходимости. После долгих размышлений мы пришли к выводу, что стоимость карты Спустить Собак должна быть увеличена до 3 маны. Это изменение сделает игру против карты Спустить Собак более комфортной, при этом оставит Охотнику возможность сделать сильный ход."
);

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1,
2, 
"./imgs/News/news-008.jpg",
"./imgs/Posts/post-008.jpg",
"Overwatch 2: вся информация о бета-тестировании",
"БТ завершается!
      Разработчики Overwatch 2 объявили, что в конце апреля начинается бета-тестирование PVP-режима игры.
      Тестировать будут нового героя Соджорн, 4 новых поля боя, новый режим «Натиск» и разные игровые системы.",

"Разработчики Overwatch 2 объявили о том, что в конце апреля начинается ограниченное бета-тестирование PVP-режима игры. Помимо режима 5 на 5 тестировать будут нового героя Соджорн, 4 новых поля боя, новый режим «Натиск» и разные игровые системы.

Официальная цитата Blizzard (Источник)
Новости от разработчиков Overwatch 2
Overwatch развивается. Мы уже сделали первый шаг к расширению коммуникации и подготовке более частых выпусков новостей, и нам не терпится поделиться информацией о наших планах на ближайшие месяцы. Мы изменим нашу стратегию выпуска новинок, разделив режимы PvP и PvE в Overwatch 2. Так мы сможем быстрее добавлять новый контент для PvP, пока продолжаем работу над PvE. Узнайте больше в новом выпуске новостей от разработчиков, которыми поделился директор игры Аарон Келлер:


Закрытое тестирование PvP в Overwatch 2 начинается сегодня. В нем примут участие сотрудники Blizzard, профессиональные игроки из Overwatch League и несколько специально отобранных групп, которые помогут нам подготовиться к более масштабному тестированию.

Первое бета-тестирование PvP на PC начнется в определенных регионах в конце апреля. В этом закрытом бета-тесте будет участвовать более крупная группа игроков, которых мы попросим поделиться с нами отзывами об игровом процессе. Сейчас наша цель — опробовать новые функции, контент и системы, прежде чем мы перейдем к проверке надежности работы серверов с большим количеством игроков в ходе будущих этапов бета-тестирования.

Это первое бета-тестирование PvP будет самым значимым событием со времен выхода игры. Вот основные элементы, которые вы сможете увидеть в ходе первого бета-тестирования:

Новый герой-боец: Соджорн
Новый режим: «Натиск»
Сетевые матчи 5 на 5
Изменения героев
4 новых поля боя
Вы можете зарегистрироваться на сайте PlayOverwatch.com, чтобы подать заявку на участие в бета-тестировании PvP в Overwatch 2. Доступ будет предоставляться поэтапно. Мы будем приглашать все больше и больше игроков по мере проведения этапов тестирования. Мы также будем регулярно делиться новостями о том, чего стоит ожидать в ходе первого бета-тестирования за несколько недель до его начала.

Спасибо, что вместе с нами вступаете в новую эру Overwatch. Нам не терпится показать вам больше новинок!"
);

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1,
6, 
"./imgs/News/news-001.jpg",
"./imgs/Posts/post-001.jpg",
"Warcraft Arclight Rumble: новая мобильная игра от Blizzard
Entertainment",
"Добавлено видео игрового процесса. Blizzard Entertainment
анонсировала Warcraft Arclight Rumble - мобильную условно бесплатную
экшен-стратегию для устройств под управлением iOS и Android.
Бета-тестирование игры начнется уже в ближайшее время.",
"В трактирах и тавернах Азерота устроила настоящий фурор новая потрясающая игра Warcraft Arclight Rumble. Это чудо инженерной мысли гномов позволит игрокам устраивать потешные битвы, используя маленькие фигурки величайших героев и ужаснейших злодеев Азерота.

Собирайте армии, используя свои коллекции миниатюр. Сперва вам нужно будет выбирать лидеров, известных персонажей вселенной Warcraft, таких как вождь клана Песни Войны Громмаш Адский Крик и верховный маг Джайна Праудмур, а затем пополнять войско обычными миниатюрными отрядами и мощными заклинаниями. Каждое из заданий в одиночной кампании — это стратегическая головоломка, и чтобы справиться с этими динамичными испытаниями, игрокам предстоит научиться изменять тактику на лету.

Соберите более 60 персонажей из вселенной Warcraft, воссозданных с любовью в виде очаровательных миниатюр для настольных игр.
Пройдите потрясающую одиночную кампанию из более чем 70 заданий.
Играйте вместе с друзьями и или испытайте силу своих армий в соревновательном PvP-режиме.
Зачищайте подземелья или организуйте совместное прохождение сложных рейдов.
Вы сможете вступить в гильдию, сражаться в PvP-боях и не только.
Примите участие в бета-тестировании
Пройдите предварительную регистрацию на официальном сайте Warcraft Arclight Rumble. Пользователи Android также могут зарегистрироваться для участия в бета-тестировании заранее на платформе Google Play. Следите за новостями на официальном сайте, чтобы узнать о дате начала бета-тестирования на iOS.

Минимальные системные требования Warcraft Arclight Rumble
Игра будет доступна на устройствах под управлением iOS (6S или более новые) и Android (S7 или более новые).

Официальная цитата Blizzard (Источник)
Обзор игрового процесса Warcraft® Arclight Rumble™
Хватайте миниатюры, ставьте их на поле боя и готовьтесь к игре— вас ждет динамичная стратегия, разработанная специально для мобильных устройств!

Этот триумф гномской инженерной мысли привлекает толпы азартных посетителей в таверны от Зимних Ключей до Пиратской Бухты. Собирайте армии из любимых персонажей вселенной Warcraft и выполняйте уникальные боевые задания, проверяя свои тактические навыки.

Собирайте симпатичные миниатюры и отправляйте их в бой на нескольких линиях, проходя десятки неповторимых заданий.

Повышайте уровни в потрясающей кампании из более чем 70 заданий для одного игрока — или вступите в гильдию и играйте в совместном режиме.
Испытайте свою армию в битвах с другими игроками.
Осваивайте новое подземелье каждую неделю, а каждый месяц отправляйтесь в рейды для нескольких игроков.
В Warcraft Arclight Rumble вы найдете все, что можно ожидать от игры во вселенной Warcraft.

Соберите их все!
Добавьте в свою коллекцию более чем 60 героев, злодеев и монстров из вселенной Warcraft, и они помогут вам переломить ход боя. У каждого персонажа свои способности, которые можно усилить с помощью мощных талантов, и, конечно же, свой характер. Создайте армию из лучших воинов и командиров, сочетайте их способности наилучшим образом — или просто соберите веселый отряд и посмотрите, что из этого получится. 

Выполняйте задания, получайте монеты и развивайте свое войско. За монеты можно покупать миниатюры, таланты, опыт и книги. Все это сделает вашу армию сильнее и разрушительней.

Фракции
Фракции — это основа основ Warcraft Arclight Rumble. Будьте верны свой фракции, и она вас не подведет.

Благородный Альянс предоставит вам мощных защитников и оборонительные заклинания.
Гордые воины Орды уничтожат ваших врагов.
Закаленные воители из Черной Горы пробьют брешь в обороне врага.
Благодаря нежити у вас на поле боя всегда будет ОЧЕНЬ много скелетов.
А стая разъяренных зверей из степей и джунглей Азерота не оставит от ваших противников и мокрого места.
Выполняйте задания в режиме «Завоевание» и получайте дополнительные награды за повтороное прохождение уровней с командирами пяти фракций.

Командиры
Кто-то должен встать во главе вашего разношерстного войска и повести его в бой. Без командира ему не одержать ни единой победы. Выберите командира, который поможет вам добиться желаемого, и создайте уникальную боевую стратегию. Командиры — это столпы, на которых держится ваша армия из отрядов и заклинаний.

Альянс: командиры Альянса специализируются на защите, исцелении, скрытности и боевой магии. Тирион Фордринг, Майев Песнь Теней и Джайна Праудмур верно служат Альянсу.

Орда: командиры Орды, такие как Громмаш Адский Крик и Кэрн Кровавое Копыто, помогают набрать темп: приносят дополнительное золото, ведут в бой быстрые отряды и оглушают врагов на большой площади.

Черная Гора: командиры Черной горы, среди которых Ренд Чернорук и генерал Драккисат, ведут в бой мощные летающие отряды и заклинателей стихий, способных сжечь противников дотла.

Нежить: командиры нежити используют могущественную некромантию. Маг крови Талнос становится сильнее с каждым разыгранным вами заклинанием. Барон Ривендер ведет армию мертвецов, которых не жалко потерять, и вытягивает из них здоровье, чтобы дольше оставаться на поле боя.

Звери: командиры зверей, такие как Чарлга Остробок, могут нейтрализовать защитные здания противника, чтобы ваши звери не оставили от них камня на камне. А другие, такие как Дробитель, будут рады хорошей драке, набегая на врагов во главе стремительной стаи.

Меняйте и корректируйте способности своих командиров между уровнями, чтобы подготовиться к грядущим испытаниям и обнаружить новые полезные сочетания."
);

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1,
1, 
"./imgs/News/news-002.gif",
"./imgs/Posts/post-002.jpg",
"Анимационный сериал Diablol 2 от Carbot Animations",
"Анонсирован новый  анимационный сериал от студии
Carbot Animations по мативам Diablol 2!",
"Уже в октябре 2022г. выйдет в свет долгожданный анимационный сериал Diablol 2  от студии Carbot Animations, эпизоды которого посвящены забавным ситуациям, героям и боссам, непростым взаимоотношениям персонажей и разным механикам второй части игр серии Diablo."
);

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES(
1,
6, 
"./imgs/News/news-003.jpg",
"./imgs/Posts/post-003.jpg",
"Слух: Blizzard работала над двумя мобильными играми Warcraft",
"Джейсон Шрайер c сайта Bloomberg со ссылкой на свои источники
      сообщил, что Blizzard Entertainment работала над двумя мобильными
      играми во вселенной Warcraft. По словам журналиста, до завершающего
      этапа разработки и анонса добралась только одна.",
"Джейсон Шрайер c сайта Bloomberg со ссылкой на свои источники сообщил, что Blizzard Entertainment работала над двумя мобильными играми во вселенной Warcraft. По словам журналиста, до завершающего этапа разработки и анонса добралась только одна.

Первая игра во вселенной Warcraft, отмененная в этом году, была похожа на популярную мобильную игру Pokemon: GO от студии Niantic. Игрокам нужно было собирать различных монстров по подворотням и устраивать между ними бои при помощи смартфона и дополненной реальности.

Вторая игра, анонс которой должен состояться 3 мая, больше всего похожа на одну из онлайн стратегий серии Clash от студии Supercell."
);

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1,
7, 
"./imgs/News/news-004.jpg",
"./imgs/Posts/post-004.jpg",
"Battle.net: поддержка новых валют",
"Компания Blizzard Entertainment разослала игрокам электронное
      письмо, в котором сообщила, что в ближайшем будущем в Battle.net
      появится поддержка четырех новых валют, включая украинскую гривну,
      казахстанский тенге и грузинский лари.",

"Компания Blizzard Entertainment разослала игрокам электронное письмо, в котором сообщила, что в ближайшем будущем в Battle.net появится поддержка четырех новых валют, включая украинскую гривну, казахстанский тенге и грузинский лари.
До появления в Battle.net поддержки новых валют игроки из Украины, Казахстана и Грузии в основном использовали российский рубль, а игроки из Турции — евро.
Новые валюты будут доступны в Battle.net® с 4 мая 2022 года
Battle.net® регулярно пересматривает список валют, которые поддерживаются на платформе. По результатам последней оценки мы планируем добавить на платформу несколько новых валют. В число новых валют входят:
Грузинский лари
Турецкая лира
Казахстанский тенге
Украинская гривна
Мы ожидаем, что эти изменения вступят в силу 4 мая 2022 года или позже. Если у вас возникнут дополнительные вопросы или проблемы, обращайтесь в службу поддержки.

До встречи в онлайне!"
);

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES( 
1,
6, 
"./imgs/News/news-005.jpg",
"./imgs/Posts/post-005.jpg",
"Warcraft Mobile: анонс игры состоится 3 мая",
"Компания Blizzard объявила, что 3 мая в 20:00 МСК состоится
официальный анонс мобильной игры во вселенной Warcraft. В первую
очередь мобильный Warcraft покажут на специальном сайте, на котором
пройдет трансляция с анонсом или будет опубликовано вступительное
видео игры.",

"Компания Blizzard объявила, что 3 мая в 20:00 МСК состоится официальный анонс мобильной игры во вселенной Warcraft. В первую очередь мобильный Warcraft покажут на специальном сайте, на котором пройдет трансляция с анонсом или будет опубликовано вступительное видео игры.

Официальная цитата Blizzard (Источник)
Приглашаем вас на анонс мобильной игры во вселенной Warcraft®!
Вселенная Warcraft® по-прежнему набирает новых поклонников по всему миру благодаря незабываемым впечатлениям и захватывающему игровому процессу, которые стали основой популярности World of Warcraft и Hearthstone. Мы с радостью представляем новую мобильную игру для героев Азерота, в которую можно играть где угодно, и с нетерпением ждем возможности выпустить ее.

Сделайте пометку в календаре и заведите будильник, чтобы не пропустить анонс новой увлекательной игры, создававшейся специально для мобильных устройств.

Дата и время
3 мая в 20:00 МСК

Где посмотреть
reveal.blizzard.com

Нам не терпится поделиться с вами подробностями о новом приключении во вселенной Warcraft, так что почаще заходите на страницу reveal.blizzard.com."
);

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES(
1,
1, 
"./imgs/News/news-006.jpg",
"./imgs/Posts/post-006.jpg",
"Diablo III: 10-летний юбилей игры",
"В честь 10-летия Diablo III разработчики планируют оставить событие текущего сезона «Вторящий кошмар» в игре навсегда, так как оно очень понравилось игрокам, а также удвоить награды за выполнение всех поручений до окончания 26-го сезона.",

"В честь 10-летия Diablo III разработчики планируют оставить событие текущего сезона «Вторящий кошмар» в игре навсегда, так как оно очень понравилось игрокам, а также удвоить награды за выполнение всех поручений до окончания 26-го сезона.

Официальная цитата Blizzard (Источник)
10-летний юбилей Diablo III
В этот день ровно 10 лет назад отважные нефалемы прибыли в Новый Тристрам, чтобы разыскать упавшую звезду, а затем обрели божественного союзника и остановили зловещий замысел по уничтожению Санктуария и Небес. Даже победив всех противников и сразив Диабло, доблестные нефалемы не прекратили защищать слабых. Мы, как и весь Санктуарий, благодарим вас за ваши подвиги, преданность и борьбу с кошмарными угрозами, порожденными Преисподней, на протяжении десяти лет.

Помните, нефалемы, что этот 10-летний юбилей Diablo III — ваша заслуга. Многие из вас провели бесчисленные часы за убийством демонов, сбором добычи и незабываемыми приключениями. В знак нашей безграничной благодарности более чем 65 миллионам нефалемов по всему миру, посвящавшим свое время нашей игре на протяжении последних 10 лет, мы с радостью представим анонс Вторящего кошмара, а также подготовим новый положительный эффект в середине сезона. Но сначала нам хотелось бы еще раз поблагодарить вас за то, что празднуете 10-летие Diablo III вместе с нами!

Обновление Вторящего кошмара


С начала 26-го сезона многие нефалемы отомстили за своих павших союзников во Вторящем кошмаре. Игроки делились с нами положительными отзывами о Вторящем кошмаре, и мы просто счастливы, что им так понравилось сражаться с ужасами из прошлого нефалемов, получая опыт и мощную добычу.

По этой причине Вторящий кошмар будет навсегда добавлен в Diablo III. Мы постоянно стремимся создавать новые сложные и интересные задачи для персонажей максимального уровня, так что нам не терпится сделать этот режим перманентной частью игры. Вы сможете играть в этом режиме в любое время.

Событие в середине сезона — двойные награды за поручения


Награды за истребление самых опасных монстров в Санктуарии стали еще более заманчивыми! До окончания 26-го сезона награды за выполнение всех поручений будут удвоены. Сейчас мы расскажем вам, как получить шанс заработать еще больше легендарных предметов, таких как престижное кольцо королевской роскоши.

Выполнив все пять поручений в определенном акте, вы получите в два раза больше сокровищ хорадримов, чем обычно дается в награду на соответствующем уровне сложности. Вероятность получения определенных наград в каждом сокровище не изменится во время события. Но чем больше сокровищ вы получаете, тем больше у вас шансов найти нужный предмет, способный усилить вариант развития вашего нефалема. 

По всему Санктуарию можно повстречать могучих противников и получить награды за их убийство — отправьтесь в путь и соберите новые трофеи, если осмелитесь!

Пусть 10-летие Diablo III запомнится вам навсегда
10 лет всегда исполняется только один раз, и Diablo III — не исключение. Украсьте стены изображениями, созданными лучшими ремесленниками Преисподней, приобретя эксклюзивные иллюстрации в честь 10-летнего юбилея Diablo III. Успейте воспользоваться этим ПЛАМЕННЫМ предложением, нефалемы!"
);

INSERT INTO news  (id_author, id_category, small_img, main_img, title, post_description, text)
VALUES(
1,
1, 
"./imgs/News/news-007.jpg",
"./imgs/Posts/post-007.jpg",
"Diablo Immortal: дата выхода и версия для ПК",
"Добавлено видео игрового процесса версии игры для ПК. Разработчики
      Diablo Immortal анонсировали дату выхода, а также версию игры для
      ПК. Начать борьбу с демоническими силами Скарна и узнать о событиях,
      происходивших между Diablo II и Diablo III можно будет уже 2 июня.",

"Как и ожидалось, разработчики Diablo Immortal анонсировали дату выхода, а также версию игры для ПК. Начать борьбу с демоническими силами Скарна, Владыки Проклятий, и узнать о событиях, происходивших между Diablo II и Diablo III можно будет уже 2 июня.


Официальная цитата Blizzard (Источник)
Diablo® Immortal™ Новые глубины Преисподней откроются на мобильных устройствах и PC 2 июня
Сражение века приближается. Пламя Преисподней мерцает и потрескивает в предвкушении — грядет Diablo® Immortal™! 2 июня отважные искатели приключений в большинстве регионов мира* смогут начать борьбу с демоническими силами Скарна, Владыки Проклятий, и узнать о событиях, происходивших между Diablo II и Diablo III.

В ходе разработки Diablo Immortal для нас было чрезвычайно важно взаимодействие с сообществом, и вы сможете сами увидеть множество примеров того, как оно повлияло на игру. Многие игроки писали о том, что хотели бы играть в Diablo Immortal на PC, и мы откликнулись на их просьбы. Теперь мы очень рады сообщить, что мечты стали реальностью — одновременно с выходом игры на устройствах Android и iOS начнется открытое бета-тестирование Diablo Immortal на PC с Windows, участвовать в котором можно будет бесплатно.

Нам особенно приятно объявить об этом, поскольку Diablo Immortal — во многом новаторский проект как для франшизы Diablo, так и для компании Blizzard. Diablo Immortal станет самой масштабной игрой серии Diablo. В ней будет больше различных зон, уникальных боев и способов уничтожения демонов, чем когда-либо прежде. Diablo Immortal также является первой игрой Blizzard, созданной с нуля для мобильных устройств и обеспечивающей игровой процесс уровня ААА со столь полюбившимися игрокам боями с демонами, которые теперь будут доступны где угодно.

*Diablo Immortal станет доступна в некоторых странах Азиатско-Тихоокеанского региона через несколько недель после выхода игры.


DIABLO IMMORTAL НА PC
Нам важно заверить вас, что мобильная игра Diablo Immortal обеспечит игровой процесс высочайшего качества также и на PC с Windows. Чтобы убедиться в этом, мы организуем выход Diablo Immortal на PC в рамках открытого бета-тестирования. Это означает, что вы сможете начать сражения с легионами Преисподней на PC сразу после выхода игры. В период открытого бета-тестирования на PC мы продолжим собирать отзывы, вносить изменения и дорабатывать эту версию Diablo Immortal, пока не почувствуем, что она дарит всем отважным искателям приключений только положительные впечатления. Мы уже внесли несколько корректировок, чтобы защитникам Санктуария было комфортно играть в Diablo Immortal на PC.



Вы сможете сражаться с демоническими захватчиками Санктуария где угодно — кроссплатформенная игра и сохранение прогресса на мобильных устройствах и PC поможет вам объединяться с другими отважными искателями приключений, независимо от платформы. Когда период открытого бета-тестирования на PC закончится, весь ваш прогресс и покупки сохранятся.

Мы понимаем, что при длительной игре важна не только доступность, но и комфорт. Чтобы у игроков было еще больше возможностей, в Diablo Immortal будет реализована поддержка контроллеров как на PC, так и на мобильных устройствах. После закрытого бета-тестирования мы доработали возможности использования контроллеров, и теперь искатели приключений могут использовать для навигации в меню свободный указатель, управляемый джойстиком. Для ввода сообщений в игре потребуется сенсорный экран или клавиатура.

Нам важно, чтобы вам было удобно пользоваться контроллерами при защите Санктуария, поэтому после выхода Diablo Immortal мы продолжим развивать их поддержку. Кроме того, для передвижения по полю боя на PC можно пользоваться клавишами WASD — впервые в истории серии Diablo.



ИНФЕРНАЛЬНЫЙ КОНТЕНТ, ПОДГОТОВЛЕННЫЙ К ВЫХОДУ ИГРЫ
Приближается время надеть доспехи варвара, крестоносца, охотника на демонов, монаха, некроманта или чародея и сражаться за будущее Санктуария. Раздумывая, какой класс выбрать для прогулок по улицам Вестмарша и за его пределами, вы также можете задаться другим вопросом: какие опасности или восхитительно захватывающие испытания будут ждать вас после выхода игры?

По мере продвижения по сюжетной линии Diablo Immortal вы посетите восемь больших зон, в каждой из которых царит уникальная мрачная атмосфера. Но не волнуйтесь, мы оставим врата Преисподней открытыми, чтобы добавить дополнительные зоны и контент. Осматривая достопримечательности и уничтожая орды демонов на своем пути, вы столкнетесь с опасными событиями в реальном времени, в ходе которых все искатели приключений на одном сервере смогут объединиться, чтобы бросить вызов судьбе и одержать победу над Преисподней. А когда вы решите сразиться с боссами Адского реликвария, то будете рады узнать, что со времени закрытого бета-тестирования мы добавили в список еще трех грозных противников, и в будущих бесплатных обновлениях их станет еще больше.

Искатели приключений, мы хотели бы поблагодарить вас за отзывы о прошлых альфа- и бета-версиях Diablo Immortal. Многие из них команда Diablo Immortal учитывала при подготовке изменений, которые помогут сделать игру лучше. Нам уже не терпится дать вам возможность откликнуться на зов 2 июня!"
);

-- COMMENTS

DELETE FROM comments;
ALTER TABLE comments AUTO_INCREMENT=0;



INSERT INTO comments(id_news, id_user, text)
VALUES(146, 2, "Отличная статья!");

INSERT INTO comments(id_news, id_user, text)
VALUES(141, 2, "круто");
INSERT INTO comments(id_news, id_user, text)
VALUES(141, 3, "благодарю за статью!");

INSERT INTO comments(id_news, id_user, text)
VALUES(142, 2, "круто");
INSERT INTO comments(id_news, id_user, text)
VALUES(142, 2, "Спасибо!");
INSERT INTO comments(id_news, id_user, text)
VALUES(142, 3, "интересно");


INSERT INTO comments(id_news, id_user, text)
VALUES(144, 2, "круто");
INSERT INTO comments(id_news, id_user, text)
VALUES(144, 2, "Спасибо!");
INSERT INTO comments(id_news, id_user, text)
VALUES(144, 3, "интересно");
INSERT INTO comments(id_news, id_user, text)
VALUES(144, 3, "благодарю за статью!");





-- 1
-- Diablo
	
-- 2
-- Overwatch
	
-- 3
-- Herous of the storm
	
-- 4
-- Starcraft
	
-- 5
-- Hearthstone
	
-- 6
-- World of Warcraft
	
-- 7
-- Другие игры