LABEL maintainer "mathieu0709@gmail.com"

FROM nginx # from nginx

# install apache2-utils for nginx auth
RUN apt-get update && apt-get install -y apache2-utils
# create user ($USER and $PASS => env variables [-e in docker])
RUN htpasswd -c -b /etc/nginx/.htpasswd $USER $PASS

# add the nginx config file
ADD ./nginx.conf /etc/nginx/conf.d/default.conf # add nginx.conf

# Nginx available on port 80
EXPOSE 80

# Reload nginx config file
CMD ['nginx', '-s', 'reload']
