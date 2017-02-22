FROM node:latest

 # move src to /var/www
ADD /src /var/www

ENV NODE_ENV 'production'

EXPOSE 8080

CMD ['node', '/var/www/server.js']
