## DOCKER TEMPLATE ## 

Simple Docker template for development using 
- Nginx
- PHP 8.4 FPM
- SQL Database:
    - MySQL
- No-SQL Databases:
    - MongoDB
- NodeJS
- Composer

## Requirements ##

- Docker
- Docker Compose

## How to use ##

1. Clone the repository
2. Run the command: docker-compose up
3. Add your project files to the src directory 
4. Run the command: docker-compose up (if you haven't done it yet)
5. Open your browser and go to http://localhost
6. Happy coding! 

### Nginx Configuration ###

The Nginx configuration file is located at: ./nginx/default.conf

You can change the port to your needs in the Nginx configuration file.

By default the port is set to 80, it's set on the default.conf file and also on the docker-compose.yml file. 

### PHP Configuration ###

The PHP configuration file is located at: ./php/Dockerfile

The extensions that are installed are:

- bcmath
- calendar
- exif
- gd
- intl
- mbstring
- mysqli
- opcache
- pcntl
- pdo_mysql
- soap
- sockets
- zip
- curl

You can add more extensions by adding them to the list.

## Project Structure ##

```
├── .dockerignore
├── README.md
├── docker-compose.yml
├── nginx
    ├── .default.conf.kate-swp
    └── default.conf
├── node
    ├── .dockerignore
    └── Dockerfile
├── package-lock.json
└── php
    ├── .dockerignore
    └── Dockerfile
└── src
    ├── your_project_files
└── .gitignore
```

#### Remember to change the port in the docker-compose.yml file if you change the port in the default.conf file ####

## Docker Commands v2 ##

| Command | Description | 
| --- | --- |
| docker compose up | Run all containers |
| docker compose up -d | Run all containers in the background |
| docker compose down | Stop and remove all containers |
| docker compose build | Build images |
| docker compose restart | Restart all containers |
| docker compose logs -f | Follow the logs of the containers |
| docker compose exec php bash | Enter the bash shell of the php container |
| docker compose exec nginx bash | Enter the bash shell of the nginx container |
| docker compose exec mysql bash | Enter the bash shell of the mysql container |
| docker compose exec mongodb bash | Enter the bash shell of the mongodb container |


### Docker compose up command ### 
![Docker compose up](image.png) 

### If you visit http://localhost/index.php ###
![If you visit http://localhost/index.php](image-1.png)

### Remember to remove the info.php on production ### 
![If you visit http://localhost/info.php](image-2.png) 


### Additional Information ###

- If you want the database to be persistent you can use the volumes in the docker-compose.yml file. (./mysql-data)
- If you want to use the database in a different port you can change the port in the docker-compose.yml file. 
- Let me know if you find any bugs or have any suggestions.
- Hit me up on Ig: @vinicordeirox or LinkedIn https://www.linkedin.com/in/vinicordeirox/
- Star the repository on GitHub: https://github.com/vinicius-g-cordeiro/docker-template <a href="https://github.com/vinicius-g-cordeiro/docker-template" target="_blank"> </a>

### Contact Info ###
| Link | Description |
| --- | --- |
| https://github.com/vinicius-g-cordeiro | GitHub |
| https://instagram.com/vinicordeirox | Instagram |
| https://www.linkedin.com/in/vinicordeirox/ | LinkedIn |

<i style="font-size: 12px;">&copy; Copyright, All rights reserved  (2025 Vinícius Gonçalves Cordeiro)</i>
