CREATE DATABASE myshop; /* Jawaban Soal 1 */

USE myshop;

CREATE TABLE users (
	id int NOT NULL AUTO_INCREMENT,			/* Jawaban Soal 2 */
	name varchar(255),
	email varchar(255),
	password varchar(255),
	PRIMARY KEY (id)
);

CREATE TABLE items (
	id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
	name varchar(255),
	description varchar(255),
	price int,
	stock int,
	category_id int,
	FOREIGN KEY (category_id) REFERENCES categories(id)
);

CREATE TABLE categories (
	id int NOT NULL AUTO_INCREMENT,	
	name varchar(255),
	PRIMARY KEY (id)		
);

INSERT INTO users (name, email, password) VALUES ("John Doe", "john@doe.com", "john123");   			/* Jawaban Soal 3 */
INSERT INTO users (name, email, password) VALUES ("Jane Doe", "jane@doe.com", "jenita123");
INSERT INTO categories (name) VALUES ("gadget"), ("cloth"), ("men"), ("women"), ("branded");
INSERT INTO items (name, description, price, stock, category_id) VALUES ("Sumsang b50","hape keren dari merek sumsang","4000000","100", "1"), ("Uniklooh", "baju keren dari brand ternama", "500000", "50", "2"), ("IMHO Watch", "jam tangan anak yang jujur banget", "2000000", "10", "1");


SELECT id, name, email FROM users;    /* Jawaban Soal 4 a */

SELECT * FROM items WHERE price > 1000000;      /* Jawaban Soal 4 b */
SELECT * FROM items WHERE name LIKE "uniklo";

SELECT category_id FROM items JOIN categories ON items.category_id=categories.id; 		/* Jawaban Soal 4 c */

UPDATE items SET name = "Sumsang b50", price = "2500000" WHERE category_id = 1;			/* Jawaban Soal 5 */ 