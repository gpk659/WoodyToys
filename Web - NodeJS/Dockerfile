FROM node:latest

ADD /src /var/www # move src to /var/www

ENV NODE_ENV 'production'

EXPOSE 8080

CMD ['node', '/var/www/server.js']
