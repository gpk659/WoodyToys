#!/bin/bash

echo "mise à jours des repos..."
sudo apt-get update
echo "installation de fail2ban..."
sudo apt-get install fail2ban -y
echo "sauvegarde de la configuration par défaut"
sudo cp /etc/fail2ban/jail.conf /etc/fail2ban/jail.local