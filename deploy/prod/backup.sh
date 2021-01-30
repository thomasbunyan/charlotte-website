#!/bin/bash

timestamp=$(date +%s)

echo 'Generate Wordpress backup'
wp updraftplus backup --label="backup"
tar cvfz wordpress-backup-${timestamp}.tar.gz backup
rm -f backup

echo 'Upload Wordpress backup to GS bucket'
gsutil cp wordpress-backup-${timestamp}.tar.gz gs://charlotte-website-backup/

echo 'Clean up local backup'
rm -rf file
rm -rf wordpress-backup-${timestamp}.tar.gz




# New stuff
# Create bundle
tar -czvf package.tar.gz src/wp-content/updraft/backup*

# Unpackage bundle
tar -xvzf package.tar.gz