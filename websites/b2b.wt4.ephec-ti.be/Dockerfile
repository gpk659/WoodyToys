FROM node:latest

WORKDIR /var/www/b2b.wt4.ephec-ti.be

# install dependencies
COPY package.json /var/www/b2b.wt4.ephec-ti.be/
RUN npm install

# bundle app
COPY . /var/www/b2b.wt4.ephec-ti.be

ENV NODE_ENV 'production'

