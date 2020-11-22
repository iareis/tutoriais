# Usando o Laravel 8 no Heroku com PostgreSQL

## Criar uma conta em

https://signup.heroku.com/

## Requisitos

Ter instalados localmente:

- PHP
- Composer
- Git
- PostgreSQL
- Heroku CLI

## Instalação do Heroku CLI

sudo npm install -g heroku

Se seu sistema operacional é diferente veja detalhes em: https://devcenter.heroku.com/articles/heroku-cli

## Efetuar login na sua conta do Heroku no seu desktop

heroku login

## Instalar o laravel 8

laravel new ribafspg

## Criar o Procfile

Cada aplicativo deve ter no seu raiz um arquivo texto chamado Procfile que diz ao Heroku o que deve executar e a pasta pública do aplicativo.

cd ribafspg

nano Procfile

web: vendor/bin/heroku-php-apache2 public/

## Configurar o PostgreSQL para uso local

Como o uso do MySQL no Heroku requer um AddOn e o cadastro de um cartão, resolvi usar o PostgreSQL, que é free.
```
sudo apt install postgresql
cd ribafspg

sudo su
su - postgres
psql
alter role postgres password 'postgres';
exit
exit
nano /etc/postgresql/12/main/pg_hba.conf
```
Mudar a linha
```
local   all             postgres                                peer

Para
local   all             postgres                                trust
```
Reiniciar o postgresql
```
service postgresql restart
```
Detalhe: faça isso somente em seu desktop. Nunca em servidor em produção.

### Testar
```
sudo su
su - postgres
psql (agora ele pede senha)
```
## Gerenciamento local

Para gerenciar o PostgreSQL pela web localmente podemos usar o adminer.org

- Download - https://www.adminer.org/#download
- Baixar - https://github.com/vrana/adminer/releases/download/v4.7.7/adminer-4.7.7.php
- Renomear e copiar para seu diretório web. Aqui: /var/www/html/adminer.php
- Chamar com - http://localhost/adminer.php
- Selecionar PostgreSQL em Sistema
- Usuário - postgres
- Senha - postgres
- Entrar

### Criar um banco local com o adminer chamado ribafspg

- Criar base de dados
- ribafspg
- Salvar

## Instalar a extensão php7.4-pdo-pgsql
```
sudo apt install php7.4-pdo-pgsql
sudo service apache2 restart
```
## Configurar o PostgreSQL no .env para uso local

```bash
nano .env

APP_NAME='Laravel 8 no Heroku'

DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=ribafspg
DB_USERNAME=postgres
DB_PASSWORD=postgres
```
## Criar banco PostgreSQL no Heroku

- Acesse sua conta. Abra o aplicativo criado e vá em resources - https://dashboard.heroku.com/apps/ribafs/resources
- Em Add-ons digite po e selecione - Heroku postgres
- Então aceite o plano default, que é Hobby Dev - Free
- E clique em Submir order form
- Veja que ele foi adicionado aos recursos do seu aplicativo
- Verifique os seus addons agora pelo terminal/prompt - heroku addons

Checar as credenciais do PostgreSQL para setar no config/database.php e usar no Heroku

- Acesse - https://dashboard.heroku.com/apps
- Clique no aplicativo que tem o PostgreSQL instalado
- Clique em Resources
- Clique em Heroku-postgres
- Settings
- View Credentials

Anote no config/database.php localmente

return [
...
    'connections' => [
...
        'pgsql' => [
            'driver' => 'pgsql',
            'host' => 'ec2-23-20-168-40.compute-1.amazonaws.com',
            'port' => 5432,
            'database' => 'dluqkq122b4m8',
            'username' => 'siiamsyaveerib',
            'password' => '23d4673554431dddd43a537e7c8883dac700192ec56d4defc9a0d1f83bad2242',
            'charset' => 'utf8',
            'prefix' => '',
            'schema' => 'public',
            'sslmode' => 'require',
        ],
...

## Enviar o código para o Heroku via Git

```bash
cd ribafspg

git init
git add .
git commit -am "Primeiro commit"
```

## Criar o aplicativo no Heroku (nas próximas alterações/atualizações não usar o comando abaixo)
```bash
heroku create ribafspg
```

Saída:
```bash
Creating ⬢ ribafspg... done
https://ribafspg.herokuapp.com/ | https://git.heroku.com/ribafspg.git
```

## Criar a chave do laravel
```bash
heroku config:set APP_KEY=$(php artisan --no-ansi key:generate --show)
```
Saída:
```bash
Setting APP_KEY and restarting ⬢ ribafspg... done, v3
APP_KEY: base64:4uI0/7O8ijEoRWJXyGdbfcJlPc8ZCK4yG/Kj1b2jom0=
```
## Enviar o aplicativo para o Heroku
```bash
git push heroku master
```
Saída:
```bash
remote:        https://ribafspg.herokuapp.com/ deployed to Heroku
remote: 
remote: Verifying deploy... done.
To https://git.heroku.com/ribafspg.git
 * [new branch]      master -> master
```
## Verificar aplicativos no heroku

heroku ps

## Abrir aplicativo no Heroku

heroku open

## Endereço do Aplicativo

https://ribafspg.herokuapp.com/

## Erros

Algumas vezes ao tentar abrir o aplicativo recebia a mensagem:

500 Server Error

Pesquisando alguém falou que o problema não era no Heroku, poderia ser algo referente a templates. Uma barra, algo assim.

Realmente. Se instalo o laravel 8 limpo, sem jetstream nem livewire não acontece o erro.

Também instalei um pequeno CRUD, com bootstrap e SQLite e não apresentou problema.

Lembrando que o Heroku também oferece o PostgreSQL free. Veja a documentação abaixo.

Provavelmente o bloqueio de algo do aplicativo com uma ferramenta como um firewall de aplicativo.

## Consultar logs

heroku logs --tail

## Mais sobre o PostgreSQL no Heroku

heroku pg:info

heroku logs -p postgres -t

heroku pg:ps

heroku pg:kill 31912

To drop and recreate your database use pg:reset.

heroku pg:reset DATABASE

Conectando com o PostgreSQL

$db = parse_url(getenv("DATABASE_URL"));
$db["path"] = ltrim($db["path"], "/");

Com extensão
$conn = pg_connect(getenv("DATABASE_URL"));

Com PDO
$db = parse_url(getenv("DATABASE_URL"));

$pdo = new PDO("pgsql:" . sprintf(
    "host=%s;port=%s;user=%s;password=%s;dbname=%s",
    $db["host"],
    $db["port"],
    $db["user"],
    $db["pass"],
    ltrim($db["path"], "/")
));

## Referências

- https://devcenter.heroku.com/articles/getting-started-with-laravel
- https://devcenter.heroku.com/start
- https://devcenter.heroku.com/articles/heroku-postgresql
- https://devcenter.heroku.com/articles/heroku-mysql
- https://elements.heroku.com/addons/cleardb
- https://elements.heroku.com/addons/jawsdb-maria
- https://davidtang.io/using-sqlite-with-php-on-heroku/
- https://devcenter.heroku.com/articles/php-support#extensions
- https://devcenter.heroku.com/articles/heroku-postgresql
