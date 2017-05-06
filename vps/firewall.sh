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
echo "autorisation du trafic dns..."
sudo ufw allow 53
echo "autorisation du trafic web"
sudo ufw allow proto tcp from any to any port 80,443 # HTTP et HTTPS
echo "autorisation des mails entrants"
sudo ufw allow 25
sudo ufw allow 587
echo "autorisation des mails sortants"
sudo ufw allow 110
sudo ufw allow 993
echo "autorisation de la voip"
sudo ufw allow 5060
echo "Activation du pare-feu..."
sudo ufw enable -y
