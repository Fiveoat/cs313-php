CREATES
---------------
DATABASE
---------------
CREATE DATABASE app;


TABLES
---------------
CREATE TABLE users(user_id SERIAL PRIMARY KEY,first_name varchar(40),last_name varchar(40), points int, hashed_password varchar(100), email varchar(60));
CREATE TABLE locations(location_id SERIAL PRIMARY KEY, name varchar(100) , country_code varchar(2));
CREATE TABLE homes(home_id SERIAL PRIMARY KEY, user_id int REFERENCES users(user_id), location_id int REFERENCES locations(location_id), value int);
CREATE TABLE bookings(booking_id SERIAL PRIMARY KEY, renter int REFERENCES users(user_id), owner int REFERENCES users(user_id), home_id int REFERENCES homes(home_id), booked boolean, duration int);


INSERTS
---------------
INSERT INTO users(first_name, last_name, points, hashed_password, email) VALUES ('Bill', 'Gates', 100, 'e23e8b55e902d8ecbca3542ea41bca0b', email);
INSERT INTO homes(user_id, city_id, value) VALUES(1, 1, 100);
INSERT INTO locations(name, country_code) VALUES ('Seattle', 'US');
INSERT INTO bookings(user_id, renter, owner, home_id, booked, duration) VALUES(1, 1, TRUE, 1, 1, 1);


SELECTS
---------------
MY BOOKINGS
SELECT * FROM bookings WHERE renter = <user_id>;

USER DASHBOARD
SELECT * FROM users u INNER JOIN homes h ON u.user_id = h.user_id INNER JOIN locations l ON l.location_id = h.location_id;

AVAILABLE BOOKINGS
SELECT * FROM homes h INNER JOIN locations l ON h.location_id = l.location_id INNER JOIN bookings h.home_i ON h = b.home_i;


UPDATES
---------------
UPDATE users SET points = <points> WHERE user_id = <user_id>;
UPDATE bookings SET booked = <bool> WHERE booking = <booking_id>;

