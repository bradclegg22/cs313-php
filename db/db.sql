CREATE TABLE products
(
    id INT NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL,
    price FLOAT NOT NULL,
    description VARCHAR(200) NOT NULL,
    productcategoryid INT NOT NULL 
);

CREATE TABLE productcategories
(
    id SERIAL NOT NULL PRIMARY KEY,
    name VARCHAR(50) NOT NULL
);

CREATE TABLE users
(
    id SERIAL NOT NULL UNIQUE PRIMARY KEY,
    username VARCHAR(100) NOT NULL UNIQUE,
	password VARCHAR(100) NOT NULL,
	display_name VARCHAR(100) NOT NULL
);

CREATE TABLE orders
(
    id SERIAL NOT NULL UNIQUE PRIMARY KEY,
    userid INT NOT NULL REFERENCES users(id),
    product INT NOT NULL REFERENCES products(id)
);