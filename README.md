# Laravel Project - Base project

## Thông tin hệ thống
- Laravel Framework version 11
- PHP version 8.2
- Database: Mysql version 8
- Mail server local: Mailhog

## Cấu trúc dự án
- backend: code xử lý chính
- infra: nôi chứa dockerFile (môi trường dự án)
- README.md: thông tin và cách setup dự án

## Chuẩn bị
- Hệ thống Window hoặc Linux có cài docker, docker-compose

## Cài đặt dự án
Step 1: Giải nén dự án

Step 1: cd vào base-app/infra và up docker với câu lện dưới đây
```bash
cd /base-app/infra
docker-compose up --build -d
```
Step 2: Exec vào container và thực hiện các bước setup laravel app
```bash
docker exec -it base-web-container bash
// Chạy các câu lệnh sau trong container
cp .env.example .env
composer install
php artisan migrate
```
Step 3: từ browser truy cập vào web local
- URL App: http://127.0.0.1/
- Server mail local (mailhog): http://127.0.0.1:8025/

## ⚙️ Database Configuration

Dự án sử dụng **MySQL** làm cơ sở dữ liệu.  
Thông tin kết nối mặc định được cấu hình trong file `.env` như sau:

```env
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=db_pri
DB_USERNAME=user
DB_PASSWORD=password


// Cách truy cập vào container app
Container backend: docker exec -it base-web-container bash
