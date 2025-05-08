# 💰 Sistem Informasi Monitoring Dana RT

Sistem berbasis web untuk memonitor dan mencatat pemasukan dan pengeluaran dana di tingkat RT (Rukun Tetangga). 
Dibangun menggunakan **CodeIgniter 3**, **PHP 8.1**, dan **MariaDB** untuk memudahkan pengelolaan keuangan secara transparan dan akuntabel.
Sistem ini dibuat untuk membantu transparansi dan efisiensi pengelolaan dana RT. 
Mudah digunakan, ringan dijalankan, dan fleksibel dikembangkan sesuai kebutuhan lokal!

---

# 📌 Spesifikasi Proyek

| 💻 Komponen         | 🛠️ Teknologi                                                                 |
|---------------------|------------------------------------------------------------------------------|
| ⚙️ Framework        | ![CI3](https://img.shields.io/badge/CodeIgniter-3-red?logo=codeigniter) [CodeIgniter 3](https://codeigniter.com) |
| 🧠 Bahasa Pemrograman | ![PHP](https://img.shields.io/badge/PHP-8.1-blue?logo=php) PHP v8.1                      |
| 🛢️ Database         | ![MySQL](https://img.shields.io/badge/MySQL-MariaDB-4479A1?logo=mysql&logoColor=white) MariaDB |
| 🌐 Web Server       | ![Apache](https://img.shields.io/badge/Apache-2.4-darkred?logo=apache) Apache (via XAMPP) |
| 🧮 Basis Data       | ![RDBMS](https://img.shields.io/badge/RDBMS-Relational-blue) RDBMS

---

🧭 Fitur Utama

🏠 Dashboard
	- Ringkasan dana masuk & keluar
	- Laporan
	- Informasi terbaru
	
	![Dashboard Screenshot](screenshots/dashboard.png)

💸 Monitoring Dana Masuk
	- Input data pemasukan RT
	- Rincian sumber dana
	- Tanggal & nominal dana masuk

🧾 Monitoring Dana Keluar
	- Input kebutuhan dan biaya
	- Bukti pengeluaran (upload file opsional)
	- Tanggal pengeluaran

📑 Laporan
	- Rekap data dana masuk & keluar
	- Cetak laporan bulanan/tahunan
	- Filter berdasarkan tanggal

👨‍💼 Manajemen Pegawai
	- Tambah/edit/hapus pegawai
	- Akses login multiuser (jika diterapkan)
	
---

🚀 Cara Menjalankan di Lokal:

1. Clone repository:
	git clone https://github.com/username/dandes.git

2. Pindahkan ke direktori htdocs (jika pakai XAMPP).

3. Import file dandes.sql ke phpMyAdmin.

4. Edit konfigurasi database:
	- application/config/database.php
	
5. Jalankan melalui browser:
	http://localhost/dandes/
	
---

🙋‍♂️ Kontak Pengembang
📧 Email: [yudyasukma2@gmail.com]

---

🧑‍💻 Kontribusi
Pull request dan saran pengembangan sangat disambut! Jangan ragu untuk fork dan modifikasi proyek ini.

📃 Lisensi
Proyek ini bersifat open-source dan dapat digunakan untuk pembelajaran atau pengembangan lebih lanjut. Silakan cantumkan kredit kepada pengembang asli bila digunakan secara publik.
