#!/bin/bash

echo "mise à jours des repos..."
sudo apt-get update
echo "installation de ufw (uncomplicated firewall)..."
sudo apt-get install ufw -y
echo "blocage du trafic entrant"
sudo ufw default deny incoming
echo "libération du trafic sortant"
sudo ufw default allow outgoing
echo "autorisation de la connection ssh"
# Changer le port dans /etc/ssh/sshd_config ?
# Par défaut [tcp | udp] sinon /tcp ou /udp
sudo ufw allow 22/tcp 
echo "autorisation du trafic web"
ufw allow "WWW Full" # HTTP et HTTPS
echo "Activation du pare-feu..."
sudo ufw enable