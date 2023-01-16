
apt-get update
apt-get install -y php php-cli php-fpm php-json php-pdo php-mysql php-zip php-gd  php-mbstring php-curl php-xml php-pear php-bcmath wget unzip php7.3-fpm
echo "listen = 9000" >> /etc/php/7.3/fpm/pool.d/www.conf
mkdir -p /var/www/html
chmod 777 wp-config.php
cp wp-config.php /var/www/html/
cd /var/www/html
wget https://wordpress.org/latest.zip
unzip latest.zip && rm -rf latest.zip
mv wordpress/* . && rm -rf wordpress


