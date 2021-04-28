#!/bin/sh
sudo apt-get install apache2 -y
sudo apt-get install php libapache2-mod-php -y
sudo apt-get install npm -y
sudo service apache2 restart

cp /home/pi/partage-ecran-rasp/install/autostart/* /home/pi/.config/autostart/

echo "pour retirer les warnings de tension faible, ajouter avoid_warnings=1 et avoid_warnings=2 dans /boot/config.txt";
echo "pour la mise en veille, ajouter 'consoleblank=0' à la fin de la ligne dans le fichier '/boot/cmdline.txt'"

