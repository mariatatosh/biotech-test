up:	docker-up
down: docker-down
stop: docker-stop
rebuild: docker-down docker-pull docker-build docker-up
restart: docker-down docker-up
app-init: migrations-run

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

migrations-run:
	docker compose run --rm php-cli php artisan migrate
