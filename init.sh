#!/bin/sh
sudo rm /var/www/html
sudo ln -s /home/pi/partage-ecran-rasp/ /var/www/html
npm install
