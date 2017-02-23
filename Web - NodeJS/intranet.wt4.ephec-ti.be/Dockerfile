FROM node:latest

# copy files to /var/www
COPY . /var/www

ENV NODE_ENV 'production'

EXPOSE 8080

CMD ['node', '/var/www/server.js']
