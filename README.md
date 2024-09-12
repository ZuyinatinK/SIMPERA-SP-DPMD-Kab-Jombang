<p align="center"><a href="https://github.com/ZuyinatinK/SIMPERA-SP-DPMD-Kab-Jombang"><img src="assets/assets/img/logo.png" width="50vw"/><img alt="SIMPERA-SP | Sistem Pengendalian Pemeliharaan Sarana Prasarana" src="assets/assets/img/logosipera_dpmd.png" width="150vw"/></a></p>
<h1 align="center">SIMPERA-SP | Sistem Pengendalian Pemeliharaan Sarana Prasarana</h1>

**SIMPERA-SP** merupakan **Sistem Informasi** yang digunakan untuk memonitoring pemeliharaan aset dan servis aset di Dinas Pemberdayaan Masyarakat dan Desa Kabupaten Jombang. Sistem ini dibangun untuk menunjang kegiatan operasional pemeliharaan sarana dan prasarana yang dimiliki oleh kantor DPMD Jombang, sehingga dapat dikelola secara efisien dan transparan.

## Daftar Isi

## Preview 🚀

Halaman Pengunjung

![preview](docs/portfolio-details-si_assets-1.png)

Halaman Dashboard Admin

![preview-2](docs/portfolio-details-si_assets-3.png)

## Tentang SIMPERA-SP

**SIMPERA-SP** merupakan aplikasi berbasis web yang dibangun menggunakan **PHP**, **JavaScript**, **HTML**, **CSS**, serta **MySQL** sebagai basis data. Sistem ini dikembangkan dengan memanfaatkan **framework CodeIgniter 3** dan **Bootstrap** untuk mendukung tampilan yang responsif dan interaktif. 

Sistem ini menyediakan dua antarmuka utama:
1. **Halaman Pengunjung**: Digunakan oleh pegawai DPMD untuk memantau jalannya proses pemeliharaan sarana prasarana.
2. **Halaman Admin (Dashboard)**: Memberikan akses kepada admin untuk melakukan manajemen data aset, seperti AC, kendaraan, dan perangkat pengolah data.

<!-- Berikut adalah flowchart yang menggambarkan alur kerja dari SIMPERA-SP, mulai dari akses pengunjung hingga proses manajemen oleh admin:

<p align="center"><img alt="FlowChart Pengunjung" src="docs/flowchat/FlowChart-2.png" width="500vw"/></p>
<p align="center"><img alt="FlowChart Admin" src="docs/flowchat/FlowChart-1.png" width="800vw"/></p> -->

## Fitur Utama

### 1. Halaman Pengunjung
Pengunjung adalah pegawai kantor Dinas Pemberdayaan Masyarakat dan Desa yang dapat memantau aktivitas pemeliharaan sarana dan prasarana. Fitur-fitur yang tersedia bagi pengunjung antara lain:
- **Home**: Informasi umum mengenai status pemeliharaan sarana.
- **Service**: Detail pemeliharaan sarana dan prasarana yang sedang berlangsung.
- **About**: Penjelasan tentang tujuan dan manfaat dari SIMPERA-SP.
- **Monitoring**: Laporan dan status pemeliharaan aset.
- **Contact**: Informasi kontak penting.

Pengunjung tidak perlu login untuk mengakses halaman ini.

### 2. Halaman Admin (Dashboard)
Admin memiliki hak akses lebih tinggi dan bertanggung jawab untuk mengelola data aset. Fitur-fitur penting untuk admin meliputi:
- **Manajemen Data AC**: Mengelola informasi dan status pemeliharaan AC.
- **Manajemen Data Kendaraan**: Mengelola data kendaraan dinas.
- **Manajemen Data Barang Pengolah Data**: Mengelola perangkat IT di kantor.
- **Monitoring Status Pemeliharaan**: Admin dapat memantau dan memperbarui status aset yang sedang dalam pemeliharaan.

## Teknologi yang Digunakan
- **PHP**: Untuk pengembangan backend dan logika aplikasi.
- **JavaScript & JQuery**: Untuk interaktivitas halaman dan komunikasi dengan server.
- **HTML5 & CSS3**: Untuk struktur dan tampilan halaman web.
- **Bootstrap 4**: Untuk layout dan desain responsif.
- **CodeIgniter 3**: Sebagai framework MVC yang digunakan untuk membangun sistem ini.
- **MySQL**: Untuk menyimpan data aset dan aktivitas pemeliharaan.

## Instalasi

1. **Clone repositori**:
   ```bash
   git clone https://github.com/ZuyinatinK/SIMPERA-SP-DPMD-Kab-Jombang.git
   ```
2. Konfigurasi database:
    - Buat database baru dengan nama `simpera_sp`. 
    - Import file `simpera_db.sql` yang terletak di folder ``database/``.
3. Konfigurasi CodeIgniter:
    - Sesuaikan file `application/config/config.php` dengan URL proyek Anda.
    ```bash
    $config['base_url'] = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on") ? "https" : "http");
    $config['base_url'] .= "://" . $_SERVER['HTTP_HOST'];
    $config['base_url'] .= str_replace(basename($_SERVER['SCRIPT_NAME']), "", $_SERVER['SCRIPT_NAME']);
    ```
    - Konfigurasi koneksi database di `application/config/database.php` pada bagian
    ```bash
    $db['default'] = [
    'dsn' => '',
    'hostname' => 'localhost',
	'username' => 'root',
	'password' => '',
	'database' => 'simpera_db',
	'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => false,
    'db_debug' => ENVIRONMENT !== 'production',
    'cache_on' => false,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => false,
    'compress' => false,
    'stricton' => false,
    'failover' => [],
    'save_queries' => true,
    ];
    ```
4. Jalankan di browser: Buka 
    ``` bash
    http://localhost/simpera-sp/ 
    ```
    di browser Anda untuk mengakses aplikasi.

## Penggunaan
- Halaman Pengunjung: Aktor pengunjung diakses tanpa login sehingga dapat melihat status pemeliharaan aset.
Berikut use case pengunjung.

![UseCase-Pengunjung](docs/use-case/UseCase-Pengunjung.png)

- Halaman Admin: Login diperlukan untuk mengakses dashboard admin dan melakukan manajemen aset.
Berikut use case admin.

![UseCase-Admin](docs/use-case/UseCase-Admin.png)

