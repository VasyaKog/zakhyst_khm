# Install and development 

## First run local

Copy .env.example to .env

``cp .env.example .env``

Build the docker images

``docker compose -f docker-compose.build.yml build``

Run the docker compose

`` docker compose -f docker-compose.local.yml up ``

Open bash (in separate terminal)

`` docker compose -f docker-compose.local.yml exec -u www-data php bash``

Install composer
``composer install``

Run migrations
``php artisan migrate``

