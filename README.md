### Informasi/Kebutuhan System yang digunakan selama pembuatan/pengembangan
1. Laravel 10
2. PHP version ^8.2.7
3. Composer 2.5.1
4. Database Mysql.

## Instalasi
1. Clone Repository di Local directory
2. Setelah selesai, masuk kedalam project dan jalankan printah <b><i> composer install </i></b> di console
4. Buat Database di MySql
5. Simpan nama Database yang telah dibuat pada settingan db_connection di file .env
6. Jalankan perintah <b><i> php artisan key:generate </i></b> jika APP_KEY di dalam file .env kosong
7. Jalan printah <b><i> php artisan migrate </i></b> di console untuk menjalankan migrasi menambah Table Province dan Cities di Database.

## Menjalankan Fetching Data Raja Ongkir
1. Jalankan printah <b><i> php artisan app:fetching-raja-ongkir </i></b> di console

## Dokumentasi API dan API Testing
Dokumentasi API bisa mengakses tautan berikut :
https://documenter.getpostman.com/view/19239119/2s9YBz1ZhL

*Untuk API Testing diharuskan menjalankan Dokumentasi tersebut di Aplikasi Postman.

## Tambahan
Di project ini terdapat 2 branch yaitu <b>sprint_1</b> dan <b>sprint_2</b>, di dalam Dokumentasi API telah dibagi menjadi 2 folder untuk masing-masing Sprint. Jadi jika ingin menjalankan API untuk Sprint 1 silahkan pindahkan branch ke <i>sprint_1</i> dan begitu pun untuk Sprint 2 pindahkan branch ke <i>sprint_2</i>, Jika tidak ingin repot-repot berpindah-pindah branch silahkan jalankan branch <i>main</i>
