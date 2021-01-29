all: dev

dev:
	docker-compose --env-file ./deploy/dev/.env.dev up -d

prod:
	docker-compose --env-file ./deploy/prod/.env up -d

down:
	docker-compose down

clean: ./src
	docker-compose down -v
	rm -rf ./src

.PHONY: all dev down clean
