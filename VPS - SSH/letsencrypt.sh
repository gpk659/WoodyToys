#!/bin/bash 

echo "mise à jours des repos..."
sudo apt-get update
echo "clonage du repo let's encrypt..."
# dans /opt/letsencrypt, historique tronqué
sudo git clone https://github.com/letsencrypt/letsencrypt /opt/letsencrypt --depth=1
cd /opt/letsencrypt
