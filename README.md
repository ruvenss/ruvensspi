ruvensspi
=========

Ruvenss Remote PI Viewer

Requerements
=========
php5
php5-cli
php5-curl
shellinabox
apache2 or lighttpd servers

Setup Instructions
=========
Copy all the files into your /var/www directory
install services

sudo apt-get install shellinabox
// If you use lighttpd
sudo apt-get -y install lighttpd
sudo apt-get -y install php5-common php5-cgi php5 php-cli php-curl
sudo lighty-enable-mod fastcgi-php
sudo service lighttpd force-reload
sudo chmod 775 /var/www
sudo usermod -a -G www-data pi

//add www-data to sudoers
sudo visudo
// add this line at end of the file
www-data ALL=(ALL) NOPASSWD: ALL
// Save
Setup other command tools
sudo apt-get install arpwatch
sudo apt-get install arp-scan
sudo apt-get install shellinabox

That's it
=========
open your browser and point to your raspberry ip or hostname
