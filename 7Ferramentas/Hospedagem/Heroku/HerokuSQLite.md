# Heroku com PHP e SQLite

PHP e SQLite

## Criar uma conta em

https://heroku.com

## Requisitos

Ter instalados localmente:

- PHP
- SQLite3 e extensão para
- Composer
- Git
- Heroku CLI

## Instalação do Heroku CLI

sudo npm install -g heroku

Se seu sistema operacional é diferente veja detalhes em:

https://devcenter.heroku.com/articles/heroku-cli

## Efetuar login com o Heroku do seu desktop

heroku login

# Instalar o laravel 8

mkdir ribafs-sqlite

## Criar o Procfile

cd ribafs-sqlite

nano Procfile

web: vendor/bin/heroku-php-apache2

## Conexão local com sqlite

$DB = new PDO('sqlite:./sqlite');

Criar o banco com

sqlite3 sqlite

Importar copiando e colando uma tabela como:

sqlite> CREATE TABLE amigos (
id integer PRIMARY KEY AUTOINCREMENT NOT NULL,
nome char(50) NOT NULL,
email char(60) DEFAULT NULL,
nascimento date DEFAULT NULL,
endereco varchar(255) DEFAULT NULL,
fone varchar(15) DEFAULT NULL,
celular varchar(15) DEFAULT NULL,
obs text
);

## Enviar o código para o Heroku via Git

Copiar o aplicativo de exemplo com sqlite para a pasta ribafs-sqlite

Criar

composer.json contendo

{
  "require": {
    "ext-pdo_sqlite": "*"
  }
}

Executar

composer install


```bash
cd ribafs-sqlite
ls

git init
git add .
git commit -am "Primeiro commit"

heroku create ribafs-sqlite

Creating ⬢ ribafs-sqlite... done
https://ribafs-sqlite.herokuapp.com/ | https://git.heroku.com/ribafs-sqlite.git

git push heroku master
```
...
remote:        https://ribafs-sqlite.herokuapp.com/ deployed to Heroku
remote: 
remote: Verifying deploy... done.
To https://git.heroku.com/ribafs-sqlite.git
 * [new branch]      master -> master

## Verificar aplicativos no heroku

heroku ps

## Abrir aplicativo no Heroku

heroku open


https://devcenter.heroku.com/start
https://devcenter.heroku.com/articles/heroku-postgresql
https://devcenter.heroku.com/articles/heroku-mysql
https://elements.heroku.com/addons/cleardb
https://elements.heroku.com/addons/jawsdb-maria
https://davidtang.io/using-sqlite-with-php-on-heroku/
https://devcenter.heroku.com/articles/php-support#extensions

