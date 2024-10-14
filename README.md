# contact-form

お問い合わせフォーム

## 環境構築
Docker
1. git@github.com:GithubEmipon/contact.git
2. docker-compose up -d -build

Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.example ファイルから.envを作成しました
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

## 使用技術(実行環境)
1. PHP 7.4.9-fpm
2. LARAVEL 10.0
3. MYSQL 8.0.26
4. platform: linux/x86_64

## ER図

<img width="1413" alt="drawio" src="https://github.com/user-attachments/assets/47967be0-c02a-4808-8573-1a4c53ed38a0">



## URL
1. 開発環境：http://localhost/
2. phpMYAdmin：http://localhost:8080/
