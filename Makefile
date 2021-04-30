all: package

build:
	cd ./src/srv/charlotte-website && \
	ENV="$(ENV)" \
	DB_NAME="$(DB_NAME)" \
	DB_ROOT_PASSWORD="$(DB_ROOT_PASSWORD)" \
	WP_HOME="$(WP_HOME)" \
	WP_TABLE_PREFIX="$(WP_TABLE_PREFIX)" \
	AUTH_KEY="$(AUTH_KEY)" \
	SECURE_AUTH_KEY="$(SECURE_AUTH_KEY)" \
	LOGGED_IN_KEY="$(LOGGED_IN_KEY)"  \
	NONCE_KEY="$(NONCE_KEY)" \
	AUTH_SALT="$(AUTH_SALT)" \
	SECURE_AUTH_SALT="$(SECURE_AUTH_SALT)" \
	LOGGED_IN_SALT="$(LOGGED_IN_SALT)" \
	NONCE_SALT="$(NONCE_SALT)" \
	envsubst < .env.template > .env

	cd ./src/etc/cron.d/ && \
	DB="$(DB_NAME)" \
	PW="$(DB_ROOT_PASSWORD)" \
	envsubst < backup.template > backup
	rm ./src/etc/cron.d/backup.template

package: build
	tar -czf app.tar.gz -C src .

clean:
	rm -f app.tar.gz
	rm -f ./src/srv/charlotte-website/.env

.PHONY: all clean generate build
