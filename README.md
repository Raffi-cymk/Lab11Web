# Lab11Web
## 📝 Deskripsi / Dokumentasi GitHub – Praktikum 11 (PHP OOP Lanjutan)

1️⃣ **Membuat Database latihan_oop & Tabel artikel**

Pada langkah awal, saya masuk ke phpMyAdmin lalu membuat database baru bernama latihan_oop.
Setelah itu, saya membuat tabel artikel menggunakan query berikut:

CREATE TABLE artikel (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(255),
    isi TEXT
);

<img width="813" height="418" alt="Screenshot 2025-12-10 112435" src="https://github.com/user-attachments/assets/3fb618f0-53dd-428e-a625-e8918ff18b42" />


2️⃣ **Tabel artikel berhasil dibuat**

Setelah query dijalankan, tabel artikel muncul di daftar tabel pada database latihan_oop.

<img width="1355" height="400" alt="Screenshot 2025-12-10 112902" src="https://github.com/user-attachments/assets/bcc9ae43-7eef-47f8-b3ba-9ac07c5b5387" />


3️⃣ **Mengisi data awal ke tabel artikel**

Saya menambahkan data awal untuk pengujian, misalnya “Artikel Tes” dan isi artikelnya.

<img width="1349" height="314" alt="Screenshot 2025-12-10 113651" src="https://github.com/user-attachments/assets/a865c479-3817-41f3-b720-6912fbac624c" />


4️⃣ **Menjalankan aplikasi Mini Framework OOP**

Ketika mengakses http://localhost/lab11_php_oop/artikel/index, data artikel ditampilkan dalam bentuk tabel.
Pada tahap ini, tombol Tambah Artikel, Ubah, dan Hapus telah tersedia.

<img width="499" height="328" alt="Screenshot 2025-12-10 114414" src="https://github.com/user-attachments/assets/3a7dbf2e-3d33-4d6e-95f7-ca8007aa762a" />


5️⃣ **Menambahkan Artikel Baru**

Masuk ke halaman tambah.php untuk menambahkan artikel baru menggunakan Form OOP.
Form terdiri dari dua input: Judul dan Isi.

<img width="532" height="268" alt="Screenshot 2025-12-10 115037" src="https://github.com/user-attachments/assets/797669a4-edfd-4be6-a192-4dbcb496ae65" />


6️⃣ **Artikel berhasil disimpan**

Setelah submit, muncul pesan notifikasi bahwa artikel berhasil disimpan.

<img width="419" height="330" alt="Screenshot 2025-12-10 115058" src="https://github.com/user-attachments/assets/2a985a08-624e-4796-96d2-4257f1eb4e4f" />


7️⃣ **Data artikel kini tampil lebih dari satu**

Setelah menambahkan beberapa artikel, tabel di halaman index menampilkan semua data yang ada.

<img width="549" height="359" alt="Screenshot 2025-12-10 115217" src="https://github.com/user-attachments/assets/156ca7e7-faae-4f40-a0f9-4189f702c63c" />


8️⃣ **Masuk ke halaman Ubah Artikel**

Ketika menekan tombol Ubah, halaman ubah.php terbuka dan menampilkan form berisi data lama yang siap diedit.

<img width="525" height="423" alt="Screenshot 2025-12-10 115510" src="https://github.com/user-attachments/assets/a4f100a0-c36b-4293-b2a9-45c45a8d3be6" />


9️⃣ **Artikel berhasil di-update**

Setelah submit, sistem menampilkan pesan bahwa artikel berhasil diperbarui.

<img width="527" height="436" alt="Screenshot 2025-12-10 115524" src="https://github.com/user-attachments/assets/463e8c53-d047-4052-87a9-21dc4aad5aa5" />


🔟 **Tabel artikel menampilkan perubahan terbaru**

Data yang sudah di-update terlihat pada halaman index.

<img width="420" height="380" alt="Screenshot 2025-12-10 115737" src="https://github.com/user-attachments/assets/397eccd2-7346-4ba2-ad19-d73e09dbbf68" />


1️⃣1️⃣ **Konfirmasi Hapus Artikel**

Saat menekan tombol Hapus, browser menampilkan popup konfirmasi sebelum menghapus data.

<img width="1031" height="553" alt="Screenshot 2025-12-10 115750" src="https://github.com/user-attachments/assets/6e8c4de2-daf3-4f85-8943-77552e2dab9e" />


1️⃣2️⃣ **Artikel berhasil dihapus**

Jika mengkonfirmasi penghapusan, muncul pesan bahwa artikel berhasil dihapus.

<img width="537" height="309" alt="Screenshot 2025-12-10 115801" src="https://github.com/user-attachments/assets/3e1bdd83-9e3e-4ef9-84c7-b4f97a67c66a" />


1️⃣3️⃣ **Tabel artikel menampilkan data terbaru setelah penghapusan**

Kembali ke halaman index, data yang dihapus sudah tidak ada lagi dan sisa data tampil dengan benar.

<img width="424" height="302" alt="Screenshot 2025-12-10 120048" src="https://github.com/user-attachments/assets/4838f5e4-91a2-4d28-89f6-9b1b8401600e" />
