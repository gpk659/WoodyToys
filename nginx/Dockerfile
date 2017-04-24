FROM nginx

LABEL maintainer "mathieu0709@gmail.com"

# create folders for logs
RUN mkdir -p /var/log/nginx/public
RUN mkdir -p /var/log/nginx/intranet
RUN mkdir -p /var/log/nginx/marketplace

# install apache2-utils for nginx auth
# RUN apt-get update && apt-get install -y apache2-utils

# create user ($USER and $PASS => env variables [-e in docker])
#RUN htpasswd -c -b /etc/nginx/.htpasswd $USER $PASS
