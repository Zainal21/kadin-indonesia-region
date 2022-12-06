## OXY Creative Kadin Region Package

This library is KADIN Official Region Libary Package written with PHP.

### Installation

Install `indoregion` with composer by following command:

```bash
composer require muhamadzain/indoregion
```

or add it manually in your composer.json file.

### Installing Packages

Before you start to code, run this command to install all of the required packages. Make sure you have `composer` installed in your computer

```bash
composer require muhamadzain/indoregion
```

Publish Package (if your'e using laravel framework)

```bash
php artisan Kadinindoregion:publish
```

Run Migrations and Seeder

```bash
php artisan migrate
```

### Import all Seeder

php artisan db:seed --class=IndoRegionSeeder # Import data Provinsi/Province, Kabupaten/Regency, Kecamatan/District

### You can run seeder one by one

php artisan db:seed --class=IndoRegionProvinceSeeder # Import data province
php artisan db:seed --class=IndoRegionRegencySeeder # Import data kota/regency
php artisan db:seed --class=IndoRegionDistrictSeeder # Import data kecamatan/district
