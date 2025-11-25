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
