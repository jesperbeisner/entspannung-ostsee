.PHONY: help
help: ## Show this help
	@awk 'BEGIN {FS = ":.*?## "} /^[a-zA-Z_\-\.]+:.*?## / {printf "\033[36m%-30s\033[0m %s\n", $$1, $$2}' $(MAKEFILE_LIST)

run: ## Run the application
	docker compose up -d

build: ## Build the application
	docker compose up -d --build

test: ## Runs PHP-CS-Fixer, PHPUnit and PHPStan
	-docker compose exec php php -d memory_limit=-1 -d xdebug.mode=off vendor/bin/php-cs-fixer fix --diff --verbose
	-docker compose exec php php -d memory_limit=-1 -d xdebug.mode=off vendor/bin/phpstan analyze
	-docker compose exec php php -d memory_limit=-1 -d xdebug.mode=off vendor/bin/phpunit

csfixer: ## Run PHP-CS-Fixer
	docker compose exec php php -d memory_limit=-1 -d xdebug.mode=off vendor/bin/php-cs-fixer fix --diff --verbose

phpstan: ## Run PHPStan
	docker compose exec php php -d memory_limit=-1 -d xdebug.mode=off vendor/bin/phpstan analyze

phpunit: ## Run PHPUnit
	docker compose exec php php -d memory_limit=-1 -d xdebug.mode=off vendor/bin/phpunit

phpstan-baseline: ## Generate PHPStan Baseline
	docker compose exec php php -d memory_limit=-1 -d xdebug.mode=off vendor/bin/phpstan --allow-empty-baseline --generate-baseline=.phpstan/phpstan-baseline.php

reset-db: ## Reset the database
	docker compose exec php php -d memory_limit=-1 -d xdebug.mode=off artisan migrate:fresh --seed

watch: ## npm run dev
	docker compose exec php npm run dev
