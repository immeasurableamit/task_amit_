
![image](https://user-images.githubusercontent.com/32042061/222768346-5e5eb22e-ae42-40df-999d-8fc846e74781.png)


![image](https://user-images.githubusercontent.com/32042061/222768476-e782da98-930f-44ef-9abd-9a7600047c7b.png)




## Installation

Please check the official Laravel installation [guide](https://laravel.com/docs/9.x/installation) for server requirements before you start.

For a quick **TL;DR**, you can skip below.

#### Clone the repository
```bash
git clone https://github.com/immeasurableamit/task_amit_.git <projectname>
```

#### Switch to the repo folder
```bash
cd <projectname>
```

#### Install all the dependencies using composer
```bash
composer install
```

#### Copy the example env file and make the required configuration changes in the .env file
```bash
cp .env.example .env
```

#### Generate a new application key
```bash
php artisan key:generate
```

#### Run the DB migration (Make sure DB connection is setup in ``.env`` prior to running migration)
```bash
php artisan migrate
```

#### Local Development Server
If you have PHP installed locally and you would like to use PHP's built-in development server to serve your application, you may use the serve Artisan command.
```bash
php artisan serve
```

You can now access the server at [localhost](http://127.0.0.1:8000).

## Database Seeding

**Populate the database with seed data & relationships.**


#### Run the database seeder
```bash
php artisan db:seed
```

