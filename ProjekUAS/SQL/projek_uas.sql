CREATE DATABASE projek_uas;

USE projek_uas;

CREATE TABLE pembeli(
    id_pembeli INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_pembeli VARCHAR(30),
    email_pembeli VARCHAR(35),
    alamat VARCHAR(30),
    username VARCHAR(15),
    jumlah_beli INT(3)
);

CREATE TABLE transaksi(
    no_transaksi INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(15),
    distributor VARCHAR(30),
    id_barang INT(3),
    nama_barang VARCHAR(30),
    harga_barang BIGINT
);

CREATE TABLE distributor(
    id_distributor INT(3) NOT NULL PRIMARY KEY,
    nama_distributor VARCHAR(30),
    id_barang INT(3)
);

CREATE TABLE login(
    username VARCHAR(15) NOT NULL PRIMARY KEY,
    password VARCHAR(20)
);

CREATE TABLE admin(
    id_admin INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_admin VARCHAR(30),
    email_admin VARCHAR(35),
    username VARCHAR(15)
);

CREATE TABLE barang(
    id_barang INT(3) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nama_barang VARCHAR(30),
    stok_barang INT,
    harga_barang BIGINT,
    nama_distributor VARCHAR(30)
);

#pembeli
ALTER TABLE pembeli
ADD FOREIGN KEY (username)
REFERENCES login(username);

#distributor
ALTER TABLE distributor
ADD FOREIGN KEY (id_barang)
REFERENCES barang(id_barang); 


#transaksi
ALTER TABLE transaksi
ADD FOREIGN KEY (username)
REFERENCES login(username);

ALTER TABLE transaksi
ADD FOREIGN KEY (id_barang)
REFERENCES barang(id_barang);

#admin
ALTER TABLE admin
ADD FOREIGN KEY (username)
REFERENCES login(username);

#prerequirements
INSERT INTO login (username, password) VALUES
("adminrommel", "gggaming"),
("adminjonathan", "gggaming"),
("adminfasya", "gggaming");

INSERT INTO admin (id_admin, nama_admin, email_admin, username) VALUES
(001, "Rommel", "rommel@email.com", "adminrommel"),
(002, "Jonathan", "jonathan@email.com", "adminjonathan"),
(003, "Fasya", "fasya@email.com", "adminfasya");

INSERT INTO barang VALUES
(1, "LOGITECH G305", 4, 500000, "LOGITECH"),
(2, "LOGITECH G733", 3, 600000, "LOGITECH"),
(3, "LOGITECH G613", 7, 425000, "LOGITECH"),
(4, "RAZER DEATHADDER", 3, 400000, "RAZER"),
(5, "RAZER KRAKEN V2", 5, 550000, "RAZER"),
(6, "RAZER HUNSTMAN MINI", 1, 450000, "RAZER"),
(7, "STEELSERIES RIVAL 3", 8, 475000, "STEELSERIES"),
(8, "STEELSERIES ARCTIS 7", 2, 525000, "STEELSERIES"),
(9, "STEELSERIES APEX M750", 1, 600000, "STEELSERIES"),
(10, "CORSAIR KATAR PRO WIRELESS", 2, 500000, "CORSAIR"),
(11, "CORSAIR KATAR VIRTUOSO PRO", 4, 450000, "CORSAIR"),
(12, "CORSAIR KATAR K65 MINI RGB", 3, 350000, "CORSAIR"),
(13, "HYPERX PULSEFIRE HASTE", 8, 375000, "HYPERX"),
(14, "HYPERX CLOUD II PRO", 4, 575000, "HYPERX"),
(15, "HYPERX ALLOY ORIGIN CORE",2, 450000, "HYPERX");

INSERT INTO distributor VALUES 
(1, "LOGITECH", 1),
(2, "LOGITECH", 2),
(3, "LOGITECH", 3),
(4, "RAZER", 4),
(5, "RAZER", 5),
(6, "RAZER", 6),
(7, "STEELSERIES", 7),
(8, "STEELSERIES", 8),
(9, "STEELSERIES", 9),
(10, "CORSAIR", 10),
(11, "CORSAIR", 11),
(12, "CORSAIR", 12),
(13, "HYPERX", 13),
(14, "HYPERX", 14),
(15, "HYPERX", 15);
