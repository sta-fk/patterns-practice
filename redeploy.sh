#!/bin/bash

docker-compose down
docker-compose up -d --build
docker exec -it dpp_php /bin/sh -c "chmod -R 777 logs"
