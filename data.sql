CREATE TABLE items (
product_id INT NOT NULL,
restaurant_id INT NOT NULL,
product_naam VARCHAR(50) NOT NULL,
prijs INT NOT NULL,
restaurant_restaurant_id INT NOT NULL
);
ALTER TABLE items ADD CONSTRAINT items_pk PRIMARY KEY ( product_id,restaurant_id );
CREATE TABLE klant (
klant_id INT NOT NULL,
voornaam VARCHAR(20) NOT NULL,
achternaam VARCHAR(25) NOT NULL,
straatnaam VARCHAR(30) NOT NULL,
postcode VARCHAR(6) NOT NULL,
huisnummer VARCHAR(6) NOT NULL,
plaatsnaam VARCHAR(30) NOT NULL,
email VARCHAR(40) NOT NULL,
wachtwoord CHAR(32) NOT NULL
);
ALTER TABLE klant ADD CONSTRAINT klant_pk PRIMARY KEY ( klant_id );
CREATE TABLE order_items (
bestelling_id INT NOT NULL,
restaurant_id INT NOT NULL,
product_id INT NOT NULL,
items_product_id INT NOT NULL,
items_restaurant_id INT NOT NULL,
orders_klant_id INT NOT NULL
);


ALTER TABLE order_items
ADD CONSTRAINT order_items_pk PRIMARY KEY ( restaurant_id,product_id,bestelling_id );
CREATE TABLE orders (
order_id INT NOT NULL,
klant_id INT NOT NULL,
order_date DATE NOT NULL,
order_items INT NOT NULL
);
ALTER TABLE orders ADD CONSTRAINT orders_pk PRIMARY KEY ( order_id,klant_id );
CREATE TABLE restaurant (
restaurant_id INT NOT NULL,
restaurantnaam VARCHAR(50) NOT NULL,
straatnaam VARCHAR(30) NOT NULL,
postcode VARCHAR(6) NOT NULL,
huisnummer VARCHAR(6) NOT NULL,
plaatsnaam VARCHAR(30) NOT NULL,
email VARCHAR(40) NOT NULL,
telefoonnummer INT NOT NULL
);
ALTER TABLE restaurant ADD CONSTRAINT restaurant_pk PRIMARY KEY ( restaurant_id );
ALTER TABLE items
ADD CONSTRAINT items_restaurant_fk FOREIGN KEY ( restaurant_restaurant_id )
REFERENCES restaurant ( restaurant_id );
ALTER TABLE order_items
ADD CONSTRAINT order_items_items_fk FOREIGN KEY ( items_product_id,items_restaurant_id )
REFERENCES items ( product_id,restaurant_id );
ALTER TABLE order_items
ADD CONSTRAINT order_items_orders_fk FOREIGN KEY ( bestelling_id,orders_klant_id )


REFERENCES orders ( order_id,klant_id );
ALTER TABLE orders
ADD CONSTRAINT orders_klant_fk FOREIGN KEY ( klant_id )
REFERENCES klant ( klant_id );