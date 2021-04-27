#!/bin/sh
sudo apt-get install apache2 -y
sudo apt-get install php libapache2-mod-php -y
sudo apt-get install npm -y
sudo service apache2 restart

echo "pour retirer les warnings de tension faible, ajouter avoid_warnings=1 et avoid_warnings=2 dans /boot/config.txt";


