Hotel JWD <------------- Parent folder projek
├── img/ <-------------- Folder untuk menampung gambar
│   └── jail.jpg <------ Gambar untuk kamar standard
│   └── luxury.jpg <---- Gambar untuk kamar family
│   └── nice.jpg <------ Gambar untuk kamar deluxe
│   └── untitled.jpg <-- Gambar ketika belum memilih kamar
├── include/ <---------- Folder untuk menampung file php yang akan digunakan ulang / di-include
│   └── bootstrap.php <- deklarasi stylesheet dan js bootstrap melalui cdn / link url
│   └── navbar.php <---- Navigation bar dari aplikasi
├── proses/ <----------- Folder untuk menampung file php yang berkaitan dengan proses query dengan database
│   └── conn.php <------ Php untuk koneksi ke database
│   └── pesan.php <----- Php untuk membuat query insert ke tabel pemesanan
├── Booking.php <------- Halaman untuk melakukan pemesanan kamar
├── Produk.php <-------- Halaman utama / homepage dari aplikasi
├── daftarharga.php <--- Halaman yang menampilkan daftar harga dalam bentuk tabel
├── index.php <--------- Php untuk redirect ke Produk.php sehingga menjadi halaman utama dalam aplikasi php
├── my booking.php <---- Halaman yang menampilkan list pesanan-pesanan yang sudah dibuat
└── tentang.php <------- Halaman yang menampilkan profil hotel / Tentang Kami