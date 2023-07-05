 all:
	sudo mkdir -p /home/uisroilo/data/mariadb
	sudo mkdir -p /home/uisroilo/data/wordpress
	docker compose -f ./srcs/docker-compose.yml up --build -d

clean:
	docker compose -f ./srcs/docker-compose.yml down --rmi all -v --remove-orphans 2>/dev/null || true

fclean: clean
	sudo rm -rf /home/uisroilo/data/*
	docker rmi -f $$(docker images -a -q) 2> /dev/null || true
	docker volume prune -f
	docker network prune -f

re: fclean all
