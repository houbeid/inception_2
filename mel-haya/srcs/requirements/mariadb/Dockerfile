FROM debian:buster

RUN apt-get update
RUN apt-get update -y && \
    apt-get install mariadb-server -y && \
    sed -i 's/127.0.0.1/0.0.0.0/' /etc/mysql/mariadb.conf.d/50-server.cnf

COPY tools /
COPY ./conf/data.sql /

CMD bash /start_servs.sh