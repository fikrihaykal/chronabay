# Final Project Pemrograman Integratif 2020
Repository pengumpulan Final Project Pemrograman Integratif 2020 - Teknologi Informasi
- Nama : Fikri Haykal
- NRP : 05311840000006
- Departemen : Teknologi Informasi

## Penjelasan Singkat
Aplikasi ini saya namakan dengan <b>Chronabay</b><br />
Disini user bisa melakukan beberapa aktivitas seperti melihat total donasi yang telah masuk, melihat donasi untuk setiap kategori, melihat donasi yang telah ia buat. Untuk sekarang, terdapat 3 kategori donasi, yaitu Uang Tunai, Minyak dan Gula. Namun kategori tentunya dapat disesuaikan sesuai kebutuhan.<br />
Untuk template pada aplikasi ini, saya menggunakan template admin <b>SB Admin 2</b> yang didapatkan dari <b>startbootstrap.com</b>.

## Struktur Database
Saya menggunakan 3 tabel, yaitu :
- Tabel `donations`
  Disini digunakan untuk menyimpan segala donasi. Untuk kolomnya terdiri dari, ID donasi, ID donatur, Kategori, Jumlah, ID Transaksi, Waktu donasi, serta status
- Tabel `donors`
  Disini digunakan untuk menyimpan data donatur. Untuk kolomnya terdiri dari, ID donatur, Nama, Kota, Waktu pendaftaran
- Tabel `transactions`
  Tabel ini digunakan untuk menyimpan id transaksi yang digunakan sebagai foreign key di tabel `donors`. Kolomnya terdiri dari ID Transaksi, ID Donatur, Waktu Transaksi

## Fitur
### Home Page
Pada homepage tentunya digunakan sebagai landing page, disini sudah terdapat bilah menu untuk melakukan aktivitas lainnya

### Tambah Donasi
- Pertama user harus mengecek keanggotan menggunakan ID
- Jika belum terdaftar, maka harus mendaftarkan keanggotaan terlebih dahulu
- Tampilan database tabel `donors` setelah ada pendaftar baru
- Jika sudah maka akan dialihkan ke halaman form donasi, disini user bisa menambahkan beberapa kalo donasi dalam 1 transaksi
- Setiap donasi yang telah disimpan akan ditampilkan dibawah form donasi, namun belum ditampilkan ke halaman <b>Total Donasi</b>
- Tampilan database tabel `donations` setelah menyimpan beberapa donasi
- User juga bisa membatalkan donasi dengan mengklik tombol `Hapus`
- Tampilan setelah menghapus satu donasi
- Jika donasi dirasa telah cukup, user bisa menyelesaikan transaksi
- Tampilan database tabel `transactions` setelah menyelesaikan transaksi
- Donasi akan bisa dilihat di halaman <b>Total Donasi</b>

### Total Donasi
- Saya menampilkan segala donasi dengan format tabel agar mudah untuk dilihat, disortir dan difilter

### Donasi per Kategori
- Kita bisa memilih donasi per kategori di bilah menu sebelah kiri
- Sama seperti fitur <b>Total Donasi</b>, saya menggunakan format tabel

### Donasi per ID Donatur
- Pertama user harus menginputkan idnya terlebih dahulu
- Jika tidak ditemukan, maka akan dialihkan ke halaman lain
- Jika sukses, maka akan langsung menampilkan tabel donasi sesuai dengan ID donatur
