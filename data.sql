CREATE TABLE tip(
tip_id INT PRIMARY KEY,
customer_id INT,
 server_id INT,
 amount INT
);
CREATE TABLE servers(
 server_id INT PRIMARY KEY,
 username varchar(50),
 first_name VARCHAR(50),
 last_name VARCHAR(50),
 time_in time,
 time_out time
);
CREATE TABLE orders(
 order_id INT PRIMARY KEY,
 food_name VARCHAR(50),
 discount INT,
 food_price INT
);
CREATE TABLE reservation(
 reservation_id INT PRIMARY KEY,
 server_id VARCHAR(50),
 table_number INT,
 shift VARCHAR(50),
 for_sharing INT
);
CREATE TABLE customer(
 customer_id INT PRIMARY KEY,
 username VARCHAR(50),
 order_id INT,
 server_id INT,
 tip_id INT,
 menu_id INT
);

INSERT INTO customer (customer_id, username, order_id, server_id, tip_id) VALUES
(1, 'ZORO',1,5,1),
(2, 'LUFFY',1,5,1),
(3, 'ICHIGO',2,4,2),
(4, 'GON',3,4,4),
(5, 'KILLUA',3,4,3),
(6, 'NARUTO',4,3,4),
(7, 'GUTS',5,2,5),
(8, 'MELODIAS',6,1,6);
INSERT INTO orders (order_id, food_name, discount, food_price) VALUES
(1, 'SPAGHETTI MEAL', 20, 100),
(2, 'STEAK', 0, 75),
(3, 'PESTO PASTA', 20, 110),
(4, 'MEATBALLS', 0, 50),
(5, 'FRIED CHICKEN', 0, 60),
(6, 'SMOKED HAM', 10, 99);
INSERT INTO reservation (reservation_id, server_id, table_number, shift, for_sharing)
VALUES
(1, 5, 01, 'Brunch', 1),
(2, 4, 01, 'Lunch', 0 ),
(3, 4, 02, 'After_Lunch', 1),
(4, 2, 01, 'Dinner', 0 ),
(5, 1, 02, 'Midnight Meals',0);
INSERT INTO servers (server_id, username, first_name, last_name, time_in, time_out) VALUES
(1,'MEA', 'Mee', 'aaa', 'Dinner', 'Breakfast'),
(2, 'YUE','You', 'eee','After lunch', 'Midnight Meals'),
(3, 'DEMI', 'them', 'iii','Brunch','Dinner'),
(4, 'OURO','our', 'ooo','Breakfast',' Lunch'),
(5, 'USU', 'us', 'uuu','Small Hours','Brunch');
INSERT INTO tip (tip_id, server_id, amount) VALUES
(1, 5, 30),
(2, 4, 15),
(3, 4, 35),
(4, 3, 20),
(5, 2, 10),
(6, 1, 25);
