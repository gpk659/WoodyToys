FROM node:latest

WORKDIR /var/www/intranet.wt4.ephec-ti.be

# install dependencies
COPY package.json /var/www/intranet.wt4.ephec-ti.be/
RUN npm install

# bundle app
COPY . /var/www/intranet.wt4.ephec-ti.be

ENV NODE_ENV 'production'