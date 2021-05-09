# Charlotte's website 3.0

## Deployment
Install to root


DCh#9^#o7GddmuwKZP


### `build` example

    make build ENV=development DB_NAME=wordpress DB_ROOT_PASSWORD=password WP_HOME=http://localhost:8080 WP_TABLE_PREFIX=dev_table_ AUTH_KEY=AUTH_KEY SECURE_AUTH_KEY=SECURE_AUTH_KEY LOGGED_IN_KEY=LOGGED_IN_KEY NONCE_KEY=NONCE_KEY AUTH_SALT=AUTH_SALT SECURE_AUTH_SALT=SECURE_AUTH_SALT LOGGED_IN_SALT=LOGGED_IN_SALT NONCE_SALT=NONCE_SALT


### Manual backup

    (. /srv/charlotte-website/.env.export && /usr/libexec/charlotte-website/charlotte-website backup)
