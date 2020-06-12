# docker-laravel-boilerplate
Boilerplate for laravel 7 with docker


## Make docker environment up
```
cd laravel;
docker-compose up;
```

Install necessary PHP libary for docker container;

First set alias for less typing
```
alias dweb='docker-compose exec workspace ';
alias dmariadb='docker-compose exec mariadb mysql -udefault -psecret;';
alias dmariadb_bash='docker-compose exec mariadb bash;';
```

Then
```
dweb /usr/local/bin/composer update;
```
