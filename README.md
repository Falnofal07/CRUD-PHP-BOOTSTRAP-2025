# Tugas CRUD PHP & Bootstrap 

Proyek ini adalah aplikasi **CRUD (Create, Read, Update, Delete)** untuk mengelola data siswa, dibangun menggunakan **HTML**, **CSS**, **JavaScript**, **PHP**, dan **Database PHPMyAdmin**. Aplikasi ini memungkinkan pengguna untuk melakukan berbagai operasi terkait data siswa, seperti menambahkan, mengedit, menghapus, dan melihat data siswa.

## Fitur Aplikasi

- 📝 **Menambah Data Siswa**: Pengguna dapat menambahkan data siswa baru, seperti NISN, Nama Lengkap, dan Alamat.
- 👀 **Melihat Data Siswa**: Menampilkan daftar siswa dengan kemampuan untuk mencari menggunakan NISN atau Nama.
- ✏️ **Mengedit Data Siswa**: Pengguna dapat mengedit data siswa yang sudah ada.
- 🗑️ **Menghapus Data Siswa**: Pengguna dapat menghapus data siswa setelah konfirmasi.
- 📊 **Ekspor Data**: Pengguna dapat mengekspor data siswa ke dalam format CSV.

## Struktur Proyek

```
CRUD-PHP-BOOTSTRAP-2025
├── authenticate.php
├── edit_siswa.php
├── export.php
├── hapus_siswa.php
├── index.php
├── koneksi.php
├── login.php
├── logout.php
├── simpan_siswa.php
├── tambah_siswa.php
└── update_siswa.php
```



## Teknologi yang Digunakan

[![My Skills](https://skillicons.dev/icons?i=js,html,css,php,mysql)](https://skillicons.dev)
## Koneksi Database

Untuk menghubungkan aplikasi ke database, kamu perlu menyiapkan file **`koneksi.php`** yang berfungsi untuk mengatur koneksi ke database MySQL. Pastikan file **`koneksi.php`** telah disesuaikan dengan konfigurasi server dan database yang kamu gunakan.

- Pastikan database sudah dibuat dengan nama **`db_sekolah`** dan sudah ada tabel yang diperlukan (misalnya `tbl_siswa`).
- Sesuaikan informasi koneksi seperti host, username, password, dan nama database di file **`koneksi.php`** agar sesuai dengan pengaturan di server lokal (misalnya menggunakan XAMPP/WAMP) atau server produksi.

## Cara Menjalankan Aplikasi

### Persyaratan

- Web server yang mendukung PHP, seperti **XAMPP** atau **WAMP**.
- Database MySQL untuk menyimpan data siswa.

### Langkah-langkah

1. **Download atau clone repository ini**.
2. **Ekstrak file** ke folder root server lokal, misalnya `htdocs` pada XAMPP.
3. **Buat database** di **PHPMyAdmin** dengan nama **`db_sekolah`** dan import struktur tabel yang diperlukan (seperti tabel `tbl_siswa`).
4. **Sesuaikan koneksi database** di file **`koneksi.php`** jika diperlukan.
5. **Akses aplikasi** melalui browser di `http://localhost/nama_folder`.

## Lisensi

Proyek ini bersifat **open-source** dan dapat digunakan untuk tujuan pembelajaran.

---

© 2025 **Tugas CRUD PHP & Bootstrap** oleh [Falnofal07](https://github.com/Falnofal07)
