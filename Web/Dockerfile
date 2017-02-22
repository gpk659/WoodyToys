LABEL maintainer "mathieu0709@gmail.com"

FROM nginx:latest # from nginx

RUN apt-get update && apt-get install -y apache2-utils # install apache2-utils for nginx auth

ADD ./nginx.conf /etc/nginx/conf.d/default.conf # add nginx.conf


EXPOSE 80
