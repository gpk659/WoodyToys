FROM node:latest

RUN mkdir -p /usr/src/b2b.wt4.ephec-ti.be
WORKDIR /usr/src/app
COPY package.json /var/www/b2b.wt4.ephec-ti.be
WORKDIR /var/www/b2b.wt4.ephec-ti.be
RUN npm install

ENV NODE_ENV 'production'

EXPOSE 9000
