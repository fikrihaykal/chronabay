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
- Pada homepage tentunya digunakan sebagai landing page, disini sudah terdapat bilah menu untuk melakukan aktivitas lainnya
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Home.png?raw=true)

### Tambah Donasi
- Pertama user harus mengecek keanggotan menggunakan ID
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Make%20Donation%20-%20Check.png?raw=true)
- Jika belum terdaftar, maka harus mendaftarkan keanggotaan terlebih dahulu
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Make%20Donation%20-%20Sign%20Up.png?raw=true)
- Tampilan database tabel `donors` setelah ada pendaftar baru
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Database%20-%20donors.png?raw=true)
- Jika sudah maka akan dialihkan ke halaman form donasi, disini user bisa menambahkan beberapa kalo donasi dalam 1 transaksi
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Make%20Donation%20-%20First.png?raw=true)
- Setiap donasi yang telah disimpan akan ditampilkan dibawah form donasi, namun belum ditampilkan ke halaman <b>Total Donasi</b>
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Make%20Donation%20-%20After%20Save.png?raw=true)
- Tampilan database tabel `donations` setelah menyimpan beberapa donasi
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Database%20-%20donations.png?raw=true)
- User juga bisa membatalkan donasi dengan mengklik tombol `Hapus`
- Tampilan setelah menghapus satu donasi
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Make%20Donation%20-%20After%20Delete.png?raw=true)
- Jika donasi dirasa telah cukup, user bisa menyelesaikan transaksi
- Tampilan database tabel `transactions` setelah menyelesaikan transaksi
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Database%20-%20transactions.png?raw=true)
- Tampilan database tabel `donations` setelah menyelesaikan transaksi
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Database%20-%20donations%20after%20transactions.png?raw=true)
- Donasi akan bisa dilihat di halaman <b>Total Donasi</b>
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/Make%20Donation%20-%20End.png?raw=true)

### Total Donasi
- Saya menampilkan segala donasi dengan format tabel agar mudah untuk dilihat, disortir dan difilter
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/TotalDonation%20-%20All.png?raw=true)

### Donasi per Kategori
- Kita bisa memilih donasi per kategori di bilah menu sebelah kiri
- Sama seperti fitur <b>Total Donasi</b>, saya menggunakan format tabel
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/TotalDonation%20-%20Kategori.png?raw=true)

### Donasi per ID Donatur
- Pertama user harus menginputkan idnya terlebih dahulu
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/MyDonation%20-%20Check.png?raw=true)
- Jika tidak ditemukan, maka akan dialihkan ke halaman lain
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/MyDonation%20-%20Gagal.png?raw=true)
- Jika sukses, maka akan langsung menampilkan tabel donasi sesuai dengan ID donatur
![alt text](https://github.com/fikrihaykal/chronabay/blob/master/screenshot/MyDonation%20-%20List.png?raw=true)
