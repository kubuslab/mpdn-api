# MPDN/AMP-SR Client API

Framework pencatatan data kematian Maternal dan Perinatal melalui MPDN/AMP-SR meliputi proses:
 - Daftar Agregat Angka Kematian per Daerah
 - Notifikasi Kematian (MPDN)
 - Format kode dan Struktur Wilayah yang digunakan MPDN
 - Daftar User per Fasilitas Pelayanan Kesehatan

Mencatat informasi pemberitahuan (notifikasi) kematian baik Maternal maupun Perinatal berupa:
 - MATERNAL
    - Pelaporan Baru
    - Update Data
    - Anulir Data
    - Menandai Data Duplikat
    - Verifikasi Data
    - Finalisasi Data
 - PERINATAL
    - Pelaporan Baru
    - Update Data
    - Anulir Data
    - Menandai Data Duplikat
    - Verifikasi Data
    - Finalisasi Data

## Cara Penggunaan
MPDN API mensyaratkan setiap koneksi menyertakan header ```X-GLOBAL-KEY``` dan ```X-USER-KEY```. Dimana ```X-GLOBAL-KEY``` bersifat statis untuk tiap Aplikasi pengguna (SIKDA, SIMRS atau SIMPUS). Sementara ```X-USER-KEY``` mewakili API Key per user yang harus disesuaikan untuk setiap request.

> Sebagai contoh SIKDA/SIMPUS di Kabupaten A untuk dapat mengirimkan Informasi Kematian Maternal **atas nama Puskesmas XYZ**, maka saat mengirim request membuat data kematian baru **harus juga menyertakan API Key** yang dibuat atas nama Puskesmas XYZ.

Untuk dapat melihat daftar ```X-USER-KEY``` per user yang dimiliki oleh Aplikasi pengguna dapat diakses melalui Web Service ```Organization::users```.

### 1. Instalasi
Gunakan composer untuk menempelkan Library di project anda.
```sh
composer require kubuslab/mpdn-api
```

### 2. Inisialisasi
Sebelum digunakan, library terlebih dahulu harus diinisialisasi secara sederhana dengan cara:

```php
use MPDN;
$globalKey = 'example-global-key-123456789';
MPDN::prepare($globalKey, false);
```
**Parameter kedua** pada ```MPDN::prepare()``` untuk menentukan apakah anda menggunakan MPDN versi FULL(```true```) atau DEMO(```false```).

MPDN API menggunakan library Guzzle sebagai backend HTTP Client. Sehingga untuk konfigurasi spesifik terhadap HTTP Client dapat menggunakan panduan sesuai dokumentasi [Guzzle](https://docs.guzzlephp.org/en/stable). Passing konfigurasi guzzle dapat dilakukan dengan cara:

```php
use MPDN;
$globalKey = 'example-global-key-123456789';
$configGuzzle = [
    'timeout' => 60,
    'verify' => true,
];

MPDN::prepare($globalKey, false, $configGuzzle);
```

Jika anda menggunakan library Http client lain, maka anda diharuskan membuat custom interface HTTP client dengan mengimplementasikan ```MPDN\Http\ClientInterface``` seperti berikut.

```php
/**
 * File CustomHttpClient.php
 */
use MPDN\Http\ClientInterface;

class CustomHttpClient implements ClientInterface {

    /**
     * Override fungsi sendRequest
     */
    public function sendRequest($method, string $url, $params, array $headers = []) {
        // ...
        // terapkan logic Http Client library anda disini
        // ...
    }
}
```

Kemudian gunakan ```setHttpClient``` saat inisialisasi untuk menggunakan client library anda.
```php
use MPDN;
use \CustomHttpClient;

$globalKey = 'example-global-key-123456789';

// Custom Http Client
$myClient = new CustomHttpClient();

MPDN::prepare($globalKey, false)
    ->setHttpClient($myClient);
```

## 3. Menggunakan Operation pada MPDN API
Berikut adalah fitur (disebut dengan **Operation**) yang didukung oleh library.
| Class | Function | Operation |
| ----- | -------- | --------- |
| MPDN\Operation\Notification\Maternal | list | Menampilkan daftar agregat Angka Kematian Ibu per daerah sesuai dengan spesifikasi berikut. |
| MPDN\Operation\Notification\Maternal | requestNew | Meminta ```token``` form Notifikasi Kematian Maternal untuk pelaporan kematian baru. |
| MPDN\Operation\Notification\Maternal | requestEdit | Meminta ```token``` form Notifikasi Kematian Maternal untuk pengeditan data. idkematian kematian Maternal harus disertakan pada url request. |
| MPDN\Operation\Notification\Maternal | create | Menampilkan daftar agregat Angka Kematian Ibu per daerah sesuai dengan spesifikasi berikut. |
| MPDN\Operation\Notification\Maternal | edit | Menampilkan daftar agregat Angka Kematian Ibu per daerah sesuai dengan spesifikasi berikut. |
| MPDN\Operation\Notification\Maternal | markAsVerified | **Verifikasi** data kematian Maternal. |
| MPDN\Operation\Notification\Maternal | markAsFinal | **Finalisasi** data kematian Maternal. |
| MPDN\Operation\Notification\Maternal | markAsDuplicate | Menandai data kematian Maternal yang belum memiliki Nomor KTP(NIK) Ibu sebagai **TERDUPLIKAT**. |
| MPDN\Operation\Notification\Maternal | markAsAnnulled | Menganulir kematian maternal hanya dapat dilakukan oleh pelapor yang pertama melaporkan data (owner). |
| MPDN\Operation\Notification\Maternal | requestForRejection | Mengirim pengajuan penolakan atas sengkata Alamat Domisili. |
| MPDN\Operation\Notification\Maternal | acceptForRejection | Mengirim persetujuan penolakan atas sengkata Alamat Domisili. |
| MPDN\Operation\Notification\Perinatal | list | Menampilkan daftar agregat Angka Kematian Ibu per daerah sesuai dengan spesifikasi berikut. |
| MPDN\Operation\Notification\Perinatal | requestNew | Meminta ```token``` form Notifikasi Kematian Perinatal untuk pelaporan kematian baru. |
| MPDN\Operation\Notification\Perinatal | requestEdit | Meminta ```token``` form Notifikasi Kematian Perinatal untuk pengeditan data. idkematian kematian Perinatal harus disertakan pada url request. |
| MPDN\Operation\Notification\Perinatal | create | Menampilkan daftar agregat Angka Kematian Ibu per daerah sesuai dengan spesifikasi berikut. |
| MPDN\Operation\Notification\Perinatal | edit | Menampilkan daftar agregat Angka Kematian Ibu per daerah sesuai dengan spesifikasi berikut. |
| MPDN\Operation\Notification\Perinatal | markAsVerified | **Verifikasi** data kematian Perinatal. |
| MPDN\Operation\Notification\Perinatal | markAsFinal | **Finalisasi** data kematian Perinatal. |
| MPDN\Operation\Notification\Perinatal | markAsDuplicate | Menandai data kematian Perinatal yang belum memiliki Nomor KTP(NIK) Ibu sebagai **TERDUPLIKAT**. |
| MPDN\Operation\Notification\Perinatal | markAsAnnulled | Menganulir kematian maternal hanya dapat dilakukan oleh pelapor yang pertama melaporkan data (owner). |
| MPDN\Operation\Notification\Perinatal | requestForRejection | Mengirim pengajuan penolakan atas sengkata Alamat Domisili. |
| MPDN\Operation\Notification\Perinatal | acceptForRejection | Mengirim persetujuan penolakan atas sengkata Alamat Domisili. |
| MPDN\Operation\Admin\Organization | subdivisions | Menampilkan daftar sub-wilayah berdasarkan induk wilayah tertentu. |
| MPDN\Operation\Admin\Organization | facilites | Menampilkan daftar FASKES berdasarkan induk wilayah tertentu. |
| MPDN\Operation\Admin\Organization | users | Menampilkan daftar user terdaftar yang dapat digunakan oleh Aplikasi. User management yang ada di MPDN dapat direlasikan dengan user management yang ada pada internal Aplikasi anda dengan bantuan web service ini. |
| MPDN\Operation\FormOperation | requestReset | Menghapus(membatalkan) ```token``` form yang dibuat baik token form ibu maupun bayi. |
| MPDN\Operation\SessionOperation | check | Memeriksa hak akses dan kemampuan yang dimiliki oleh session saat ini. |
