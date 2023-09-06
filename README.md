## Pengantar
Di project ini terdapat 2 branch yaitu <b>sprint_1</b> dan <b>sprint_2</b>, di dalam Dokumentasi API telah dibagi menjadi 2 folder untuk masing-masing Sprint. Jadi jika ingin menjalankan API untuk Sprint 1 silahkan pindahkan branch ke <i>sprint_1</i> dan begitu pun untuk Sprint 2 pindahkan branch ke <i>sprint_2</i>.

### Informasi/Kebutuhan System yang digunakan selama pembuatan/pengembangan
1. Laravel 10
2. PHP version ^8.2.7
3. Composer 2.5.1
4. Database Mysql.

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
### Sprint 2
1. Register </br>
   <img width="852" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/caab2d21-3b2f-46c0-b53c-68712f3a49d5">
2. Login </br>
    <img width="855" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/caf8825a-75b0-46ba-a79b-35b990526b5a">
   <p>Token disimpan di Variables</p>
   <img width="847" alt="image" src="https://github.com/luthfifadle/DOT-RajaOngkir/assets/67321679/31c8baed-fe8a-4e43-8cb9-c7a4c417e164">
   

