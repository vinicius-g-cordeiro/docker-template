## DOCKER TEMPLATE ## 

Simple Docker template for development using 
- Nginx
- PHP 8.4 FPM
- XDebug
- SQL Database:
    - MySQL
- No-SQL Databases:
    - MongoDB

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
- xdebug
- curl

You can add more extensions by adding them to the list.

#### Remember to change the port in the docker-compose.yml file if you change the port in the default.conf file ####

## Docker Commands v2 ##

| Command | Description |
| --- | --- |
| docker-compose up | Run all containers |
| docker-compose up -d | Run all containers in the background |
| docker-compose down | Stop and remove all containers |
| docker-compose build | Build images |
| docker-compose restart | Restart all containers |
| docker-compose logs -f | Follow the logs of the containers |
| docker-compose exec php bash | Enter the bash shell of the php container |
| docker-compose exec nginx bash | Enter the bash shell of the nginx container |
| docker-compose exec mysql bash | Enter the bash shell of the mysql container |
| docker-compose exec postgres bash | Enter the bash shell of the postgres container |
| docker-compose exec mssql bash | Enter the bash shell of the mssql container |

## Additional Information ##

- If you want the database to be persistent you can use the volumes in the docker-compose.yml file. (./mysql-data, ./postgres-data, ./mssql-data)

- If you want to use a different database you can comment the one you don't need and uncomment the one you need. or remove completely the database you don't need from the docker-compose.yml file.


// by Vinícius Cordeiro
<hr>
<i style="font-size: 12px;">&copy; Copyright, All rights reserved  (2025 Vinícius Gonçalves Cordeiro)</i>
<a href="https://github.com/vinicius-g-cordeiro/" target="_blank" style="font-size: 12px; margin-left: 10px; margin-right: 10px;"> 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
  <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27s1.36.09 2 .27c1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.01 8.01 0 0 0 16 8c0-4.42-3.58-8-8-8"/>
</svg>
Github
</a>
<a href="https://github.com/vinicius-g-cordeiro/docker-template/" target="_blank" style="font-size: 12px; margin-left: 10px;  margin-right: 10px;" title="Project Repository">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-flag" viewBox="0 0 16 16">
  <path d="M14.778.085A.5.5 0 0 1 15 .5V8a.5.5 0 0 1-.314.464L14.5 8l.186.464-.003.001-.006.003-.023.009a12 12 0 0 1-.397.15c-.264.095-.631.223-1.047.35-.816.252-1.879.523-2.71.523-.847 0-1.548-.28-2.158-.525l-.028-.01C7.68 8.71 7.14 8.5 6.5 8.5c-.7 0-1.638.23-2.437.477A20 20 0 0 0 3 9.342V15.5a.5.5 0 0 1-1 0V.5a.5.5 0 0 1 1 0v.282c.226-.079.496-.17.79-.26C4.606.272 5.67 0 6.5 0c.84 0 1.524.277 2.121.519l.043.018C9.286.788 9.828 1 10.5 1c.7 0 1.638-.23 2.437-.477a20 20 0 0 0 1.349-.476l.019-.007.004-.002h.001M14 1.221c-.22.078-.48.167-.766.255-.81.252-1.872.523-2.734.523-.886 0-1.592-.286-2.203-.534l-.008-.003C7.662 1.21 7.139 1 6.5 1c-.669 0-1.606.229-2.415.478A21 21 0 0 0 3 1.845v6.433c.22-.078.48-.167.766-.255C4.576 7.77 5.638 7.5 6.5 7.5c.847 0 1.548.28 2.158.525l.028.01C9.32 8.29 9.86 8.5 10.5 8.5c.668 0 1.606-.229 2.415-.478A21 21 0 0 0 14 7.655V1.222z"/>
</svg>
Github Repository
</a>
