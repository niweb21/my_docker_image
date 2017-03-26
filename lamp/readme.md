### Lunch the containers
docker-compose up -d

### Down and rebuild
docker-compose down && docker-compose rm && docker-compose build
docker volume rm lamp_data-volume

### Connect
docker exec -it lamp_web_1 /bin/bash
docker exec -it lamp_db_1 /bin/bash
