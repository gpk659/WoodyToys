FROM nginx 

LABEL maintainer "mathieu0709@gmail.com"

# install apache2-utils for nginx auth
RUN apt-get update && apt-get install -y apache2-utils

# create user ($USER and $PASS => env variables [-e in docker])
#RUN htpasswd -c -b /etc/nginx/.htpasswd $USER $PASS

# add the nginx config file
COPY ./nginx.conf /etc/nginx/conf.d/default.conf 
#COPY ./main.conf /etc/nginx/nginx.conf


