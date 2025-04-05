CREATE DATABASE IF NOT EXISTS db_library;
USE db_library;

CREATE TABLE IF NOT EXISTS tb_user (
  id_user INT PRIMARY KEY,
  nama_user VARCHAR(255),
  email VARCHAR(255),
  password VARCHAR(255),
  foto VARCHAR(255),
  level INT(1)
);

CREATE TABLE IF NOT EXISTS tb_rak (
  id_rak INT PRIMARY KEY,
  nama_rak VARCHAR(255),
  lantai_rak INT
);

CREATE TABLE IF NOT EXISTS tb_kategori (
  id_kategori INT PRIMARY KEY,
  nama_kategori VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS tb_pengarang (
  id_pengarang INT PRIMARY KEY,
  nama_pengarang VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS tb_penerbit (
  id_penerbit INT PRIMARY KEY,
  nama_penerbit VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS tb_anggota (
  id_anggota INT PRIMARY KEY,
  nik VARCHAR(255),
  nama_anggota VARCHAR(255),
  jenis_kelamin VARCHAR(255),
  alamat VARCHAR(255),
  foto VARCHAR(255)
);

INSERT INTO tb_user (id_user, nama_user, email, password, foto, level) VALUES
(1, 'admin', 'admin@gmail.com', '1234', NULL, 0),
(2, 'user', 'user@gmail.com', '1234', NULL, 1);