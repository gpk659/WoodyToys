# WoodyToys
Mise en place d'une infrastructure réseau pour l'entreprise (fictive) WoodyToys.

## Entreprise
- Dispose d'un ERP Web en interne (uniquement acessible de l'intérieur).
- L'ERP permet la gestion des stocks, de la production, des commandes,...
- La vente s'effectue en B2B (Revendeurs).
- L'entreprise désire changer son infrastructure veillissante.

## Implémentation
- Chaque service est placé dans son propre container.
- Installation, Configuration, Validation, Debugging.

### Mise à jour du VPS
Par défaut, Ubuntu 15.04 (vivid) et le docker-engine 1.9.1 sont installés sur le VPS.    
Seulement, docker-compose v2 a besoin d'au minimum docker-engine **1.10** pour fonctionner mais ce dernier n'est pas compatible avec la version d'Ubuntu installée sur le VPS.

Afin de mettre à jour le VPS il suffit de :    

- Mettre à jour Ubuntu : `sudo do-release-upgrade -d`    
- Mettre à jour le docker-engine et docker-compose : `cd vps && ./init.sh` 

:exclamation: En cas de problème lors de la mise à jour en ssh, une session ssh est ouverte sur le port 1022, si un firewall est installé sur le VPS, il faut autoriser préalablement ce port.
### Utilisation
`docker-compose build`     
`docker-compose up`

