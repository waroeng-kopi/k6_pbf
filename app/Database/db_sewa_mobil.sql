CREATE DATABASE IF NOT EXISTS `db_sewa_mobil`;
USE db_sewa_mobil;

CREATE TABLE IF NOT EXISTS tb_sewa (
  sewaId        VARCHAR(255)  NOT NULL,
  namaMobil     VARCHAR(255)  NOT NULL,
  penyewa   VARCHAR(255)  NOT NULL,
  jamSewa  VARCHAR(255)  NOT NULL,
  PRIMARY KEY(sewaId)
);

CREATE TABLE IF NOT EXISTS tb_user (
  user_id INT PRIMARY KEY AUTO_INCREMENT,
  username VARCHAR(255) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL,
  email VARCHAR(255) UNIQUE NOT NULL
);

INSERT INTO tb_sewa (sewaId, namaMobil, penyewa, jamSewa) VALUES
('SW001', 'Toyota Avanza', 'John Doe', 4),
('SW002', 'Honda Civic', 'Jane Smith', 6),
('SW003', 'Suzuki Ertiga', 'David Brown', 5),
('SW004', 'Mitsubishi Xpander', 'Emily Johnson', 8),
('SW005', 'Nissan Grand Livina', 'Michael Lee', 7),
('SW006', 'Toyota Fortuner', 'Jessica Garcia', 3),
('SW007', 'Honda CR-V', 'Daniel Martinez', 9),
('SW008', 'Ford Everest', 'Sarah Wilson', 6),
('SW009', 'Hyundai Tucson', 'Chris Anderson', 4),
('SW010', 'Mazda CX-5', 'Jennifer Taylor', 5),
('SW011', 'Kia Seltos', 'Matthew Clark', 8),
('SW012', 'Chevrolet Trax', 'Emma Rodriguez', 7),
('SW013', 'Subaru XV', 'Andrew Hall', 3),
('SW014', 'Volkswagen Tiguan', 'Olivia Martinez', 9),
('SW015', 'Renault Koleos', 'William Davis', 6),
('SW016', 'BMW X1', 'Sophia Thomas', 5),
('SW017', 'Mercedes-Benz GLA', 'James Brown', 4),
('SW018', 'Audi Q3', 'Ava Wilson', 7),
('SW019', 'Lexus NX', 'Ryan Moore', 8),
('SW020', 'Infiniti QX50', 'Isabella Thompson', 3);

INSERT INTO tb_user (user_id, username, password, email) VALUES 
(1, 'admin', 'rahasia', 'admin@gmail.com');