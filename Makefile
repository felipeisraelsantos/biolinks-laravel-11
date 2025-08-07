# Define o nome do serviço da aplicação no docker-compose.yml
APP_SERVICE = app

# Comandos para Docker Compose
up:
	docker-compose up -d

down:
	docker-compose down

start: up

stop: down

restart: down up

# Comandos do Artisan (executados dentro do container)
about:
	docker-compose exec $(APP_SERVICE) php artisan about

artisan:
	docker-compose exec $(APP_SERVICE) php artisan

migrate:
	docker-compose exec $(APP_SERVICE) php artisan migrate

controller:
	docker-compose exec $(APP_SERVICE) php artisan make:controller $(NAME) $(ARGS)

seed:
	docker-compose exec $(APP_SERVICE) php artisan db:seed

rollback:
	docker-compose exec $(APP_SERVICE) php artisan migrate:rollback

cache-clear:
	docker-compose exec $(APP_SERVICE) php artisan cache:clear

config-cache:
	docker-compose exec $(APP_SERVICE) php artisan config:cache

route-list:
	docker-compose exec $(APP_SERVICE) php artisan route:list

# Comandos de Composer
composer-install:
	docker-compose exec $(APP_SERVICE) composer install

composer-update:
	docker-compose exec $(APP_SERVICE) composer update

# Comandos diversos
bash:
	docker-compose exec $(APP_SERVICE) bash

permissions:
	docker-compose exec $(APP_SERVICE) chown -R www-data:www-data storage bootstrap/cache
	docker-compose exec $(APP_SERVICE) chmod -R 775 storage bootstrap/cache

help:
	@echo "Comandos disponíveis:"
	@echo ""
	@echo "  up             - Sobe os containers (docker-compose up -d)"
	@echo "  down           - Derruba os containers"
	@echo "  start          - Alias para 'up'"
	@echo "  stop           - Alias para 'down'"
	@echo "  restart        - Reinicia os containers"
	@echo ""
	@echo "  artisan <cmd>  - Executa um comando do Artisan (e.g., make:controller)"
	@echo "  migrate        - Roda as migrações"
	@echo "  seed           - Roda os seeders"
	@echo "  rollback       - Volta a última migração"
	@echo "  cache-clear    - Limpa o cache da aplicação"
	@echo "  config-cache   - Cria o cache de configuração"
	@echo "  route-list     - Lista todas as rotas"
	@echo "  make-controller     - Cria um novo controller"
	@echo "                           (Ex: make make-controller NAME=PostController)"
	@echo "                           (Ex: make make-controller NAME=PostController ARGS=\"--resource\")"
	@echo ""
	@echo "  composer-install - Roda 'composer install' dentro do container"
	@echo "  composer-update  - Roda 'composer update' dentro do container"
	@echo ""
	@echo "  bash           - Abre um terminal bash dentro do container 'app'"
	@echo "  permissions    - Corrige permissões de storage e cache"
	@echo ""

.PHONY: up down start stop restart artisan migrate seed rollback cache-clear config-cache route-list composer-install composer-update bash permissions help
