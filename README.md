# Install process

1. Clone the repo

2. Move to the recently created folder
```shell
$ cd folder
```

3. Make your own environment settings
```shell
$ cp .env.example .env
```

4. Set your database settings on the environment
```shell
$ vi .env
```

5. Install and update composer packages
```shell
$ composer install
```

6. Generate your artisan key
```shell
$ php artisan key:generate
```

8. Run the migrations and the seed
```
$ php artisan migrate
$ php artisan db:seed --class=CategoriesTableSeeder
$ php artisan db:seed --class=CardsTableSeeder
```
