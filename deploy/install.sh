#!/bin/bash

# Unpack and remove
tar xzf app.tar.gz
rm -f bundle.tar.gz

# Install src
sudo tar xf src.tar --directory /

# Update permissions
sudo chmod 755 /usr/local/bin/wordpress-backup
sudo chmod 755 /usr/local/bin/wordpress-restore

# Refresh nginx conf
sudo systemctl reload nginx
# 

# Start docker
sudo systemctl start nginx
(cd /srv/charlotte-website/ && docker-compose up)
