Charlotte's Website
![Website](https://img.shields.io/website?label=status&url=https%3A%2F%2Fcharlottebunyan.com)
![AppVeyor branch](https://img.shields.io/appveyor/build/thomasbunyan/charlotte-website/master)
[![GitHub license](https://img.shields.io/github/license/thomasbunyan/charlotte-website.svg)](https://github.com/thomasbunyan/charlotte-website/blob/master/LICENSE.txt)
===================
> Running Wordpress on the cheap.

Source code for https://charlottebunyan.com


## About
A Wordpress website designed to run in Docker behind an Nginx reverse proxy. Deployments are designed to create immutable machine images, supported by standard Wordpress backup behavior.

The application is hosted on GCP (read more in `stacks/`). The Wordpress 'state' is backed up once a day at `03:00 UTC+0`. When a new deployment is made it does **not** take a new backup, therefore a manual backup might have to be taken prior to a deployment (see [Manual backups](#manual-backups)).

## Setup
![Version](https://img.shields.io/badge/Docker-%3E%3D%2020.10.5-blue) ![Version](https://img.shields.io/badge/npm-%3E%3D%206.14.8-blue)

## Usage
Deployments are built from the `master` branch, triggered manually in Cloud Build.

Specific environment variables are required for Wordpress to operate, these can be built using the root's Makefile (see [Make targets](#make-targets)). The Wordpress theme is located in `src/srv/charlotte-website/web/themes/custom-theme`. From in here the Docker containers can be started for local development on port `8080` by running:

    docker-compose up -d
### Make targets
* `clean` - Remove generated environment variables and packaged files
* `build` - Generate environment variables
* `package` - Tar `src/` for deployment to server 

Build example with required ENV vars:

    make build ENV=development DB_NAME=wordpress DB_ROOT_PASSWORD=password WP_HOME=http://localhost:8080 WP_TABLE_PREFIX=dev_table_ AUTH_KEY=AUTH_KEY SECURE_AUTH_KEY=SECURE_AUTH_KEY LOGGED_IN_KEY=LOGGED_IN_KEY NONCE_KEY=NONCE_KEY AUTH_SALT=AUTH_SALT SECURE_AUTH_SALT=SECURE_AUTH_SALT LOGGED_IN_SALT=LOGGED_IN_SALT NONCE_SALT=NONCE_SALT

### Manual backups
Firstly gain access to the servers terminal by SSHing into the instance.

Backups require access to the Wordpress database, the name/password for this are stored as environment variables from the build, therefore the complete backup process can be initiated by running:  

    (. /srv/charlotte-website/.env.export && /usr/libexec/charlotte-website/charlotte-website backup)

## Project structure
    .
    ├── deploy                 # Config to build image (packer, bake scripts)
    ├── src                    # Code to be packaged and installed on the server
    │   ├── etc                # Server specific configuration (init.d, nginx)
    │   ├── srv                # Application code
    │   └── usr                # Custom scripts (backup, restore, certs)
    ├── stacks                 # GCP Infrastructure
    ├── cloudbuild.yaml        # Build target for Cloud Build
    ├── Makefile
    └── README.md


## Author
[Thomas Bunyan](https://github.com/thomasbunyan)

## License
Copyright © 2021 [Thomas Bunyan](https://github.com/thomasbunyan).

Usage is provided under the MIT License.
