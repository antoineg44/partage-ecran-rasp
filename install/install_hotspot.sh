sudo cp /etc/wpa_supplicant/wpa_supplicant.conf /etc/wpa_supplicant/wpa_supplicant.conf.sav
sudo cp /home/pi/partage-ecran-rasp/install/res/wpa_supplicant.conf /etc/wpa_supplicant/wpa_supplicant.conf
wget -q https://git.io/voEUQ -O /tmp/raspap && bash /tmp/raspap
echo "raspap ok";
sudo apt install git libmicrohttpd-dev
cd ~
git clone https://github.com/nodogsplash/nodogsplash.git
cd ~/nodogsplash
make
sudo make install
echo "suite : https://www.maketecheasier.com/turn-raspberry-pi-captive-portal-wi%E2%80%90fi-access-point/";

