default: build

# Run the project build script
build:
	bin/build.sh

# Run the project upgrade script
update:
	bin/upgrade.sh

upgrade:
	bin/upgrade.sh

# Remove ignored git files – e.g. composer dependencies and built theme assets
# But keep .idea directory (PhpStorm config), and uploaded media files
clean:
	@if [ -d ".git" ]; then git clean -xdf --exclude ".env" --exclude ".idea" --exclude "web/app/uploads"; fi

# Remove all ignored git files (including media files)
deep-clean:
	@if [ -d ".git" ]; then git clean -xdf; fi

# Run the application
run:
	cp .env.example .env
	docker-compose up

# Run the application
down:
	docker-compose down

# Launch the application, open browser, no stdout
launch:
	bin/launch.sh

# Launch the application, open browser, no stdout
run-launch:
	bin/launch.sh

# Open a bash shell on the running container
bash:
	docker-compose exec wordpress bash

# Run tests
test:
	composer test