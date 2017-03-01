#!/bin/bash

echo "mise à jours des repos..."
sudo apt-get update
echo "installation de nmap..."
sudo apt-get install nmap
echo "ports ouverts sur le VPS..."
sudo nmap -sS -sU localhost