init: docker-down docker-pull docker-build docker-up
up:	docker-up
down: docker-down
stop: docker-stop
restart: docker-down docker-up
dependencies-install: composer-install npm-install

docker-up:
	docker compose up -d

docker-down:
	docker compose down --remove-orphans -v

docker-stop:
	docker compose stop

docker-build:
	docker compose build

docker-pull:
	docker compose pull

copy-env:
	docker compose run --rm php-cli cp .env.example .env

composer-install:
	docker compose run --rm php-cli composer i

npm-install:
	docker compose run --rm node-cli npm i

migrations-run:
	docker compose run --rm php-cli php artisan migrate

seeders-run:
	docker compose run --rm php-cli php artisan db:seed

seeders-users:
	docker compose run --rm php-cli php artisan db:seed --class=UserSeeder

seeders-payments:
	docker compose run --rm php-cli php artisan db:seed --class=PaymentSeeder
