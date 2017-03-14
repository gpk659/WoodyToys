FROM node:latest

COPY package.json /var/www/b2b.wt4.ephec-ti.be
WORKDIR /var/www/b2b.wt4.ephec-ti.be
RUN npm install

ENV NODE_ENV 'production'

EXPOSE 9000
