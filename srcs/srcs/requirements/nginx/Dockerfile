FROM debian:buster

RUN apt-get update
RUN apt-get install -y nginx 

COPY tools /
COPY conf /

COPY ./conf/default /etc/nginx/sites-available/
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
CMD sh start_servs.sh