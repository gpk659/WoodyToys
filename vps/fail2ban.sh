#!/bin/bash

echo "mise à jours des repos..."
sudo apt-get update
echo "installation de fail2ban..."
sudo apt-get install fail2ban -y
echo "sauvegarde de la configuration par défaut"
sudo cp /etc/fail2ban/jail.conf /etc/fail2ban/jail.local
echo "copie de la configuration dans le bon dossier"
sudo cp ./jail.conf /etc/fail2ban/jail.conf 
echo "redémarrage de fail2ban"
sudo service fail2ban restart
echo "obtention des informations générales"
sudo fail2ban-client status
echo "obtention des informations sur une prison"
sudo fail2ban-client status ssh