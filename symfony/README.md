# My Symfony skeleton docker image

## Init project
```
cd ./symfony
composer create-projec symfony/framework-standard-edition symfony_app
mv symfony_app/* .
mv symfony_app/.* .
rmdir symfony_app
```
then rename symfony folder with your project name

## Run
```
cd ./symfony
docker-compose up -d
```

## Down and rebuild
```
docker-compose down && docker-compose rm && docker-compose build
```

## Connect
```
docker exec -it symfony_web_1 --user www-data /bin/bash
```
