up:
	sudo docker-compose up -d
exec:
	sudo docker-compose exec workspace bash
build:
	sudo docker-compose build --no-cache --force-rm
stop:
	sudo docker-compose stop
down:
	sudo docker-compose down
restart:
	@make down
	@make up
destroy:
	sudo docker-compose down --rmi all --volumes
destroy-volumes:
	sudo docker-compose down --volumes
ps:
	sudo docker-compose ps
logs:
	sudo docker-compose logs
