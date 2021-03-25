#!/bin/bash

# Unpack and remove
tar xzf bundle.tar.gz
rm -f bundle.tar.gz

# Install src
tar xf src.tar -C /

# Refresh nginx conf
sudo cd /etc/nginx/sites-enabled && ln -s /etc/nginx/sites-available/charlottebunyan charlottebunyan
sudo systemctl reload nginx