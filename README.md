# jds_pretest

## Installation

Run the Following Command:
```shell
git clone https://github.com/MSerperior/jds_pretest.git
cd jds_pretest

composer update
cp .env.example .env
php artisan key:generate
php artisan serve
```

change the following env variables to these:
```shell
QUEUE_CONNECTION=redis
REDIS_CLIENT=predis
DB_CONNECTION=mysql
```
