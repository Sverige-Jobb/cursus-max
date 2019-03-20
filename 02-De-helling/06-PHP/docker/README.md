# Docker

## Doelstellingen

1. Begrijpen wat Docker is
2. Eigen image aanmaken

### Wat is Docker

Docker is een zeer handige tool om je te helpen bij het ontwikkelen van een project. Aanvankelijk kan het wat ingewikkeld lijken, maar het is zeker de moeite waard om dit onder te knie te krijgen.

Bekijk de [docker survival guide](./docker.md). Maak je geen zorgen als dit eerst niet zo duidelijk is. Docker optimaal leren gebruiken duurt meestal enkele projecten.

### Eigen docker-compose aanmaken

Wanneer je begrijpt wat een image is, kan je zelf een docker-compose bestand samenstellen.
We maken een docker-compose.yml bestand aan met de volgende services:

- php
- mysql
- phpmyadmin

### docker-compose.yml

Maak een bestand aan met de naam docker-compose.yml en open dit in je editor. We zullen een docker-compose bestand aanmaken met een structuur volgens versie 3. Daarom plaatsen we op de eerste regel 

`version: "3"`

Vervolgens zullen we de services toevoegen waarop we beroep willen doen. In onze geval zijn dit PHP, MySQL en phpMyAdmin. Om dit aan te geven plaatsen we op de tweede regel van ons document 

`services:`


#### Language: PHP

De eerste service die we toevoegen is PHP:

```
php: 
      image: "php:apache"
      volumes: 
        - "./src:/var/www/html"
      ports: 
        - "8000:80"
```

* Allereerst definieren we welke php `image` we zullen gebruiken. In dit geval gebruiken we [library/php:apache](https://hub.docker.com/_/php/)
* PHP zal files die we in de folder `./src` plaatsen interpreteren alsof ze in de folder `/var/www/html` op een server staan
* Plaats je PHP files in de `./src` folder, deze zijn dan toegankelijk op je [localhost server](http://localhost).


#### MySQL 

PHP wordt vaak in samenwerking gebruikt met een relationele database. Wij zullen MySQL gebruiken. 

```
mysql: 
      image: "mysql"
      restart: "always"
      volumes: 
        - "mysql_db:/var/lib/mysql"
      ports: 
        - "3306:3306"
        - "33060:33060"
      environment: 
        MYSQL_ROOT_PASSWORD: "root"
```        

#### phpMyAdmin

We voegen ook nog een admin interface toe om het werken met MySQL eenvoudiger te maken:

```
phpmyadmin: 
      image: "phpmyadmin/phpmyadmin"
      ports: 
        - "8080:80"
      depends_on: 
        - "mysql"
      environment: 
        PMA_HOST: "mysql"
        PMA_USER: "root"
        PMA_PASSWORD: "root"
```

Met bovenstaande gegevens zal phpMyAdmin beschikbaar zijn op post 8080 van je localhost. Je kan inloggen met het PMA_USER en PMA_PASSWORD uit het docker-compose.yml bestand.


Tenslotte sluiten we ons docker-compose.yml bestand af met 

```
  volumes: 
    mysql_db: 
```



### CLI tool


Dankzij coach Leny uit Luik is er ook een handige [BeCode CLI](https://www.npmjs.com/package/@becode/cli) waarmee je een docker-compose.yml bestand kan genereren met behulp van het `becode generate env` command.

### Nuttige links

[Docker documentatie](https://docs.docker.com/get-started/)