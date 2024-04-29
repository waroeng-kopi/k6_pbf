CREATE DATABASE IF NOT EXISTS 'db_crud_buku';
USE db_crud_buku;

CREATE TABLE IF NOT EXISTS tb_buku (
  bukuId        VARCHAR(255)  NOT NULL,
  judulBuku     VARCHAR(255)  NOT NULL,
  penulisBuku   VARCHAR(255)  NOT NULL,
  kategoriBuku  VARCHAR(255)  NOT NULL,
  PRIMARY KEY(bukuId)
  );