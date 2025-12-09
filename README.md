# Migrate dan Seeder
## Membuat file Migrate
Membuat tabel teman dalam migrate
```bash
php artisan make:migration tabel_teman
```
Lakukan migrate
```bash
php artisan migrate
```
membatalkan migrasi
```bash
php artisan migrate:rollback
```

## Membuat file Seeder
1. Membuat Seeder tabel temans
```bash
php artisan make:seeder temans
```
2. Tambahkan class DB
```bash
use Illuminate\Support\Facades\DB;
```
3. Daftarkan seed ke dalam databaseSeeder.php
```bash

```

## Menggunakan Laravel
1. clone repositories ini atau [download](https://github.com/arthawebid/laraproj2-c/archive/refs/heads/main.zip) 
2. copy dan timpa (rewrite) file php.bak ke c:\xampp\php\php.ini
```bash
copy php.bak c:\xampp\php\php.ini
```
3. copy file .env.example ke .env
```bash
copy .env.example .env
```
5. lakukan install/update modul-modul laravel
```bash
composer install
```
6. lakukan migrate untuk menambahkan sqlite (database)
```bash
php artisan migrate
```
7. generate key
```bash
php artisan key:generate
```
8. Aktifkan internal Laravel Server
```bash
php artisan serve
```