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

