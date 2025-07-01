# 🌾 LoCraft – Platform Digital Meritokratis untuk UMKM Kreatif

LoCraft adalah aplikasi web yang dirancang untuk menjadi **etalase digital dan ekosistem penemuan (discovery ecosystem)** bagi produk UMKM kreatif di Indonesia. Platform ini fokus mengatasi dua hambatan besar dalam transformasi digital UMKM: **Paradoks Visibilitas** dan **Defisit Kepercayaan**.

---

## ✨ Fitur Utama

- **Profil Ganda**  
  Pengguna dapat mendaftar sebagai:
  - `Pelaku UMKM`: Unggah dan tampilkan produk.
  - `Penikmat Karya`: Berinteraksi dengan produk (like, komentar, rating).

- **Formulir Unggah Produk**  
  Memungkinkan UMKM mengunggah produk dengan foto, deskripsi, kategori, dan link pembelian.

- **Galeri Produk Interaktif**  
  Produk ditampilkan dalam feed dengan dukungan like, komentar, dan klik untuk melihat detail.

- **Panggung Harian / Mingguan / Bulanan / Tahunan**  
  Fitur sorotan produk terpopuler berdasarkan apresiasi komunitas (likes) — sistem **promosi berbasis meritokrasi**.

- **Halaman Detail Produk & Katalog UMKM**  
  Setiap produk memiliki halaman detail, dan setiap UMKM memiliki katalog produknya sendiri.

---

## 🚫 Batasan Fitur

> Untuk menjaga fokus dan kesederhanaan pada tahap awal, LoCraft **bukan platform e-commerce**.

- Tidak ada keranjang belanja, checkout, atau payment gateway.
- Transaksi terjadi secara langsung melalui tautan kontak eksternal.
- Tidak ada manajemen stok atau logistik.

---

## 🧩 Teknologi yang Digunakan

| Layer        | Teknologi                      |
|--------------|-------------------------------|
| Frontend     | Vue.js with Inertia / Tailwind CSS |
| Backend/API  | Laravel 12                     |
| Database     | MySQL                          |
| Deployment   | Local / VPS                    |
| Versioning   | Git + GitHub                   |

---

### Instalasi
Download / Clone Project
```
git clone https://github.com/IqroNegoro/locraft.git
cd locraft
```
Install Package
```
composer install
npm install
```
Rename .env file and changed the database or something that you should change
```
.env.example -> .env
```
Generate new key, migrate fresh database with the seed and link the storage (dont forget to create database it first in mysql, or use phpmyadmin)
```
php artisan key:generate
php artisan migrate:refresh --seed
php artisan storage:link
```
And enjoy
```
composer run dev
```

### User Admin
- **Username** : admin@gmail.com
- **Password** : admin123

### User Default
- **Email** : woodmade@gmail.com
- **Password** : woodmade123
Or you can see in ```DatabaseSeeder.php``` file

