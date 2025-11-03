CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) UNIQUE NOT NULL, -- Ditambahkan NOT NULL
  email VARCHAR(100) UNIQUE NOT NULL,   -- Ditambahkan UNIQUE dan NOT NULL
  password VARCHAR(255) NOT NULL        -- Ditambahkan NOT NULL
);

CREATE TABLE prodi (
  id_prodi INT AUTO_INCREMENT PRIMARY KEY,
  nama_prodi VARCHAR(100) NOT NULL,
  jenjang VARCHAR(10) NOT NULL
);

CREATE TABLE mahasiswa (
  id_mahasiswa INT AUTO_INCREMENT PRIMARY KEY,
  nim VARCHAR(20) UNIQUE NOT NULL,       -- Ditambahkan UNIQUE dan NOT NULL
  nama_mahasiswa VARCHAR(100) NOT NULL,
  jenis_kelamin CHAR(1),                 -- Asumsi 'L' atau 'P'
  alamat VARCHAR(100),
  id_prodi INT NOT NULL,                 -- Ditambahkan NOT NULL
  FOREIGN KEY (id_prodi) REFERENCES prodi(id_prodi)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4; -- Contoh penambahan Engine dan Charset