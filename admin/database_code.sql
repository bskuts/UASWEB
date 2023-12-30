CREATE DATABASE db_digital_marketing;

CREATE TABLE kategori
(
  id_kategori INT NOT NULL AUTO_INCREMENT,
  nama_kategori VARCHAR(255) NOT NULL,
  PRIMARY KEY (id_kategori)
);

CREATE TABLE login
(
  id_pelanggan INT(11) AUTO_INCREMENT,
  username VARCHAR(50),
  password VARCHAR(255),
  nama_pelanggan VARCHAR(255),
  email_pelanggan VARCHAR(255),
  level VARCHAR(20),
  PRIMARY KEY (id_pelanggan)
);

CREATE TABLE pesanan
(
  id_pesanan INT NOT NULL AUTO_INCREMENT,
  id_pelanggan INT(11),
  tanggal_pesanan DATE NOT NULL,
  PRIMARY KEY (id_pesanan),
  FOREIGN KEY (id_pelanggan) REFERENCES login (id_pelanggan) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE produk
(
  id_produk INT NOT NULL AUTO_INCREMENT,
  nama_produk VARCHAR(255) NOT NULL,
  deskripsi_produk TEXT,
  harga DECIMAL(10,2) NOT NULL,
  stok INT(11),
  id_kategori INT NOT NULL,
  gambar_produk VARCHAR(255) NOT NULL,
  PRIMARY KEY (id_produk),
  FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori) ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE detail_pesanan
(
  id_detail_pesanan INT NOT NULL AUTO_INCREMENT,
  id_pesanan INT NOT NULL,
  id_produk INT NOT NULL,
  jumlah_produk  INT NOT NULL,
  subtotal DECIMAL(10,2),
  PRIMARY KEY (id_detail_pesanan),
  FOREIGN KEY (id_produk) REFERENCES produk(id_produk) ON DELETE CASCADE ON UPDATE CASCADE,
  FOREIGN KEY (id_pesanan) REFERENCES pesanan(id_pesanan) ON DELETE CASCADE ON UPDATE CASCADE
);


-- Insert data ke tabel Kategori
INSERT INTO kategori (nama_kategori) VALUES
    ('SEO'),
    ('Social Media'),
    ('Google Ads'),
    ('Website Services'),
    ('Content Marketing'),
    ('Email Marketing'),
    ('Branding');

-- Insert data ke tabel Login (Admin dan User)
INSERT INTO login (username, password, nama_pelanggan, email_pelanggan, level) VALUES
    ('admin_digital', 'adminpass', 'Admin Digital', 'admin@digitalagency.com','admin'),
    ('client1', 'clientpass1', 'Client One', 'client1@email.com','client'),
    ('client2', 'clientpass2', 'Client Two', 'client2@email.com', 'client');

-- Insert data ke tabel Produk (Layanan Digital Marketing Agency)
INSERT INTO produk (nama_produk, deskripsi_produk, harga, stok, id_kategori, gambar_produk) VALUES
    ('Paket SEO Basic', 'Optimisasi mesin pencari untuk website kecil', 499000, 10, 1, 'gambar1.jpg'),
    ('Paket Social Media Management', 'Manajemen konten sosial media harian', 799000, 15, 2, 'gambar2.jpg'),
    ('Paket Google Ads Campaign', 'Perancangan dan pelaksanaan kampanye Google Ads', 1299000, 8, 3, 'gambar3.jpg'),
    ('Paket Content Marketing', 'Pengembangan konten berkualitas tinggi', 899000, 12, 5, 'gambar1.jpg'),
    ('Paket Email Marketing', 'Desain dan pengelolaan kampanye email', 699000, 10, 6, 'gambar2.jpg'),
    ('Paket Website Design & Development', 'Desain dan pengembangan website responsif', 1999000, 5, 4, 'gambar3.jpg'),
    ('Paket Branding Strategy', 'Strategi pemasaran merek secara menyeluruh', 1499000, 8, 7, 'gambar1.jpg');

-- Insert data ke tabel Pesanan
INSERT INTO pesanan (id_pelanggan, tanggal_pesanan) VALUES
    (2, '2023-01-15'),
    (3, '2023-01-16'),
    (2, '2023-01-18');

-- Insert data ke tabel DetailPesanan
INSERT INTO detail_pesanan (id_pesanan, id_produk, jumlah_produk, subtotal) VALUES
    (1, 1, 1, 499000),
    (2, 3, 1, 1299000),
    (3, 5, 2, 1799000);