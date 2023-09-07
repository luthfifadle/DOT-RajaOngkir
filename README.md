## Pengantar
Di project ini terdapat 2 branch yaitu <b>sprint_1</b> dan <b>sprint_2</b>, di dalam Dokumentasi API telah dibagi menjadi 2 folder untuk masing-masing Sprint. Jadi jika ingin menjalankan API untuk Sprint 1 silahkan pindahkan branch ke <i>sprint_1</i> dan begitu pun untuk Sprint 2 pindahkan branch ke <i>sprint_2</i>.

### Informasi/Kebutuhan System yang digunakan selama pembuatan/pengembangan
1. Laravel 10
2. PHP version ^8.2.7
3. Composer 2.5.1
4. Xampp 7.4
5. Database Mysql.

   *Note
   Jangan lupa untuk menjalankan service Apache dan MySql Database di aplikasi Xampp
   <img width="673" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/210b21b2-6a00-4faa-8a26-372057310cd2">


## Dokumentasi API dan API Testing
Dokumentasi API bisa mengakses tautan berikut :
https://documenter.getpostman.com/view/19239119/2s9YBz1ZhL

Untuk API Testing diharuskan menjalankan Dokumentasi tersebut di Aplikasi Postman.

## Instalasi
1. Clone Repository di Local directory
2. Setelah selesai, masuk kedalam project dan jalankan printah <b><i> composer install </i></b> di console
4. Buat Database di MySql
5. Simpan nama Database yang telah dibuat pada settingan db_connection di file .env
6. Jalankan perintah <b><i> php artisan key:generate </i></b> jika APP_KEY di dalam file .env kosong
7. Jalan printah <b><i> php artisan migrate </i></b> di console untuk menjalankan migrasi menambah Table Province dan Cities di Database.
8. Jalankan printah <b><i> php artisan serve </i></b> untuk menjalankan project

## Menjalankan Fetching Data Raja Ongkir
Jalankan printah <b><i> php artisan app:fetching-raja-ongkir </i></b> di console

## Menjalankan API
### Sprint 1
1. Search Province
   <p>Mengirim parameter <i>province_id</i> untuk pencarian data Province berdasarkan id.</p>
   <img width="455" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/02eaf23a-4837-4f54-9396-4f7e8a369746">

2. Search City
   <p>Mengirim parameter <i>city_id</i> untuk pencarian data City berdasarkan id.</p>
   <img width="854" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/f1d0624f-80db-411f-ac30-781f41bc15f4">

### Sprint 2
1. Register </br>
    Mengisikan data <i>name, email, password, c_password</i> (c_password adalah mengulangi password yang diinput)
   <img width="452" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/caab2d21-3b2f-46c0-b53c-68712f3a49d5">

2. Login </br>
   <p>Memasukan data email dan password untuk Authentikasi, jika berhasil maka akan menampilkan response Token yang digunakan untuk mengakses API Search Province & City. Untuk Token disimpan di Global Variables seperti di gambar berikut.</p>
   <img width="455" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/caf8825a-75b0-46ba-a79b-35b990526b5a">
   <img width="447" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/31c8baed-fe8a-4e43-8cb9-c7a4c417e164">

3. Search Province
   <p>Tambahkan Authorization type Bearer Token, dan isi dengan variable token/{{token}}. Mengisi parameter province_id untuk pencarian berdasarkan id provinsi, untuk Swapable Implementation silahkan menambahkan parameter <i>swap_raja_ongkir</i> yang memiliki nilai <i>true</i> atau <i>false</i>, yang dimana jika <i>true</i> maka akan mengambil data dari API Raja Ongkir, dan jika <i>false</i> mengambil data dari Database.</p>
   <img width="449" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/2bf2c2f9-1a9c-4c96-adc6-63bbf30e32c3">
    <img width="452" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/15aaf1c8-512e-4797-ace3-bc03deaaa6f5">

4. Search City
   <p>Sama seperti Search Province, untuk city silahkan mengisi city_id dan swap_raja_ongkir.</p>
   <img width="456" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/568af531-0d5c-47d4-a5cb-010293bba6da">


## Penutup
Akhir kata saya ucapkan terima kasih telah memberikan kesempatan bagi saya untuk bisa bergabung mengisi posisi Backend PHP (Freelance) di PT. Digdaya Olah Teknologi (DOT) Indonesia, semoga hasil test yang telah saya kerjakan dapat menjadi pertimbangan Team Penguji, HRD, serta Pimpinan. Sekali lagi saya ucapkan Terima Kasih.

Salam hangat,
Luthfi Fadle Rynaldy


©2023
