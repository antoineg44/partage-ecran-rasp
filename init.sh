#!/bin/sh
sudo rm /var/www/html
sudo ln -s /home/pi/partage-ecran-rasp/ /var/www/html
npm install
cd php/fonctions/
gcc -Wall eteindre.c -o eteindre && sudo chown root:www-data eteindre && sudo chmod 4754 eteindre
gcc -Wall fermerNavi.c -o fermerNavi && sudo chown root:www-data fermerNavi && sudo chmod 4754 fermerNavi
gcc -Wall phpreboot.c -o phpreboot && sudo chown root:www-data phpreboot && sudo chmod 4754 phpreboot
gcc -Wall unveille.c -o unveille && sudo chown root:www-data unveille && sudo chmod 4754 unveille
gcc -Wall veille.c -o veille && sudo chown root:www-data veille && sudo chmod 4754 veille
