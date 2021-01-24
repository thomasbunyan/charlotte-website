#!/bin/bash

# Add swap partition
sudo fallocate -l 4G /swapfile
sudo chmod 600 /swapfile
sudo mkswap /swapfile
sudo swapon /swapfile
echo '/swapfile none swap sw 0 0' | sudo tee -a /etc/fstab

#  Get docker
curl https://get.docker.com > install-docker.sh
chmod 775 install-docker.sh
sudo ./install-docker.sh
sudo usermod -aG docker <MY_USERNAME>
# logout & login

# Get docker-compose
sudo curl -L "https://github.com/docker/compose/releases/download/1.27.4/docker-compose-$(uname -s)-$(uname -m)" -o /usr/local/bin/docker-compose
sudo chmod 755 /usr/local/bin/docker-compose

# Nginx
sudo apt update
sudo apt install nginx -y
sudo systemctl start nginx

# Nginx conf
sudo cp ./config/www.charlottebunyan.com.conf /etc/nginx/sites-available/
sudo cd /etc/nginx/sites-enabled && ln -s /etc/nginx/sites-available/www.charlottebunyan.com.conf www.charlottebunyan.com.conf 
sudo systemctl restart nginx

# Certbot
sudo apt update
sudo apt install certbot python3-certbot-nginx -y
sudo certbot --nginx -d charlottebunyan.com -d www.charlottebunyan.com
# test auto renew
# sudo certbot renew --dry-run