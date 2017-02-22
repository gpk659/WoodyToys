LABEL maintainer "mathieu0709@gmail.com"

FROM nginx # from nginx

RUN apt-get update && apt-get install -y apache2-utils # install apache2-utils for nginx auth

ADD ./nginx.conf /etc/nginx/conf.d/default.conf # add nginx.conf
ADD /src /var/www # move src to /var/www



EXPOSE 80
