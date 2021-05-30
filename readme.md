# Pameran KUI
>Pameran KUI(Karya Untuk Indonesia) adalah aplikasi yang dibuat untuk mendukung para seniman untuk terus aktif dan produktif meski saat ini dihadapkan dengan pandemi COVID-19 yang berimbas ke hampir seluruh sektor. 

**<a href="https://pamerankui.rendiputra.my.id/">Live Demo</a>**

dibuat menggunakan framework **Laravel 5.8**

Cara Instalasi:
### 1. Dumping db db_pameran.sql

### 2. Configurasi env
```bash
$ cp .env.example .env
```

### 3. Install semua depency menggunakan composer

```bash 
$ composer install
```

### 4. Generate a new application key
```bash 
$ php artisan key:generate
```

### 5. Start the local development server
```bash
$ php artisan serve
```
# Rangkuman command


```bash 
$ git clone https://github.com/rendiputra/pameran_kuy.git
$ cd pameran_kuy
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan serve
```
**Dan jangan lupa untuk import DB file sqlnya**
