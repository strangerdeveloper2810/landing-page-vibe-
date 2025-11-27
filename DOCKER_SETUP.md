# Docker Setup cho Laravel Backend

## Hệ thống đã setup

Docker environment đã được cấu hình với các services:

- **PHP 8.3-FPM** (base-web-container) - Chạy Laravel application
- **Nginx 1.23.1** (base-web-server) - Web server trên port 80
- **MySQL 8.0** (base-web-database) - Database trên port 3306
- **MailHog** (base-web-mailhog) - Mail testing tool (UI: port 8025, SMTP: port 1025)

## Commands hữu ích

### Quản lý containers

```bash
# Khởi động tất cả containers
cd infra && docker-compose up -d

# Dừng tất cả containers
cd infra && docker-compose down

# Xem logs
docker logs base-web-container  # PHP app logs
docker logs base-web-server     # Nginx logs
docker logs base-web-database   # MySQL logs

# Xem trạng thái containers
docker ps
```

### Làm việc với Laravel (qua Docker)

```bash
# Chạy artisan commands
docker exec -u chuongvq base-web-container php artisan [command]

# Ví dụ:
docker exec -u chuongvq base-web-container php artisan migrate
docker exec -u chuongvq base-web-container php artisan tinker
docker exec -u chuongvq base-web-container php artisan cache:clear

# Cài đặt Composer packages
docker exec -u chuongvq base-web-container composer install
docker exec -u chuongvq base-web-container composer require [package]

# Vào shell của container
docker exec -it -u chuongvq base-web-container bash
```

### Làm việc với database

```bash
# Kết nối MySQL từ máy local
mysql -h 127.0.0.1 -P 3306 -u user -p
# Password: password
# Database: db_pri

# Hoặc vào MySQL shell trong container
docker exec -it base-web-database mysql -u user -p
```

## URLs

- **Application**: http://localhost
- **MailHog UI**: http://localhost:8025
- **MySQL**: localhost:3306

## Cấu trúc thư mục

```
/Users/mdm/Desktop/base-app/
├── backend/              # Laravel source code
│   ├── .env             # Laravel config (đã setup cho Docker)
│   ├── app/
│   ├── public/
│   └── ...
└── infra/               # Docker configuration
    ├── docker-compose.yml
    ├── php/
    │   └── Dockerfile
    ├── nginx/
    │   └── config/
    │       └── app.conf
    └── mysql/
        └── data/        # MySQL data (gitignore)
```

## Troubleshooting

### Container MySQL không khởi động
```bash
cd infra
docker-compose down
rm -rf mysql/data
mkdir -p mysql/data
docker-compose up -d
```

### Application không load được
```bash
# Kiểm tra logs
docker logs base-web-server
docker logs base-web-container

# Reload Nginx
docker exec base-web-server nginx -s reload

# Restart containers
cd infra && docker-compose restart
```

### Cần clear cache Laravel
```bash
docker exec -u chuongvq base-web-container php artisan cache:clear
docker exec -u chuongvq base-web-container php artisan config:clear
docker exec -u chuongvq base-web-container php artisan view:clear
```

## Lưu ý

- **KHÔNG cần cài PHP/Composer vào máy** - Mọi thứ chạy qua Docker
- Source code trong `backend/` được mount vào container, nên chỉnh sửa code sẽ reflect ngay lập tức
- MySQL data được lưu trong `infra/mysql/data/` - đừng xóa folder này trừ khi muốn reset database
- File `.env` trong backend đã được cấu hình để kết nối với MySQL container (DB_HOST=mysql)
