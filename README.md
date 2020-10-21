# docker-laravel-demo
```
$ git clone git@github.com:hakuba20xx/docker-laravel-demo.git
$ cd docker-laravel-demo
$ docker-compose up -d --build
$ docker-compose exec app bash
$ composer install
$ cp .env.example .env
$ php artisan key:generate
$ php artisan migrate
$ exit
```
[http://127.0.0.1:10080](http://127.0.0.1:10080)

