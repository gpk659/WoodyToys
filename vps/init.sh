#!/bin/bash 

echo "mise à jours des repos..."
sudo apt-get update
echo "installation de vim..."
sudo apt-get install vim 
echo "installation de la dernière version docker-engine"
sudo apt remove docker-engine 
curl -fsSL https://get.docker.com/ | sh
echo "installation de docker-compose"
sudo rm /usr/local/bin/docker-compose
curl -L https://github.com/docker/compose/releases/download/1.11.2/docker-compose-`uname -s`-`uname -m` > docker-compose
chmod +x docker-compose
sudo mv docker-compose /usr/local/bin
echo "vérification de la version de docker-compose"
docker-compose --version

chmod +x ./init.sh
chmod +x ./nmap.sh
chmod +x ./firewall.sh
chmod +x ./fail2ban.sh
chmod +x ./letsencrypt.sh

sudo usermod -aG docker mathieu