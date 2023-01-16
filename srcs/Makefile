# **************************************************************************** #
#                                                                              #
#                                                         :::      ::::::::    #
#    Makefile                                           :+:      :+:    :+:    #
#                                                     +:+ +:+         +:+      #
#    By: houbeid <houbeid@student.42.fr>            +#+  +:+       +#+         #
#                                                 +#+#+#+#+#+   +#+            #
#    Created: 2022/05/23 22:54:44 by houbeid           #+#    #+#              #
#    Updated: 2022/05/23 22:54:45 by houbeid          ###   ########.fr        #
#                                                                              #
# **************************************************************************** #

CMD = docker-compose -f srcs/docker-compose.yml

all:
	${CMD} up -d
up:
	${CMD} up -d
down:
	${CMD} down
build:
	${CMD} up -d --build
stop:
	${CMD} stop
start:
	${CMD} start
ps:
	${CMD} ps
img:
	${CMD} images
vlm_ls:
	docker volume ls
net:
	docker network ls
re: clean build
clean: 
	docker-compose -f srcs/docker-compose.yml down -v --rmi all

.PHONY:	all up down build stop start ps img vlm_ls net re clean
