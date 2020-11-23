# Usando o MySQL/MariaDB no SF

## Habilitar MySQL no Projeto

- Faça login no SF
- Acesse o projeto
- Clique em Admim
- Role a ela e clique em MySQL Database

https://sourceforge.net/p/joomlar/admin/ext/mysql/

## Site de acesso ao phpmyadmin para gerenciamento dos bancos pela web

https://mysql-j.sourceforge.net

## Documentação

https://p.sf.net/sourceforge/mysql

MySQL Database

Ele mostra as informações abaixo, a serem usadas apra acesso local e via PHP

Hostname: 	mysql-j (exatamente assim, sem sufixo de domínio)
Database name prefix: 	j32038_ Exemplo: "CREATE DATABASE j30038_portal" como usuário ADMIN
RO User: 	j32838ro (somente para SELECT)
RW User: 	j32838rw (pode: SELECT, INSERT , DELETE, UPDATE)
ADMIN User:	j32838admin (tem uma conta com privilégio de RW, e CREATE, DROP, ALTER, INDEX, LOCK TABLES))
Web-access URL: 	https://mysql-j.sourceforge.net

Usamos o admin para criar bancos pelo phpmyadmin

E os outros dois para acessarem o mysql por um site/aplicativo

Host - mysql-j (o j é por conta de ser a primeira letra do nome do projeto)

Acesso web usando o phpmyadmin
https://mysql-j.sourceforge.net

Logo abaixo da página aparecem

Passwords

j32808ro:
j32808rw:
j32808admin

Entre com as senhas e clique em
Set Password

Agora o uso do MySQL está liberado.

Criar um banco usando o phpmyadmin acessando

https://mysql-j.sourceforge.net

Usar o collation utf8mb4_unicode_ci

user - j32808admin
senha -

Podemos acessar o phpmyadmin usando os outros dois usuários mas com suas respectivas restrições.

## Criar banco pela linha de comando

mysqladmin -h mysql-o -u l32786admin -p create l38826_laravel

## Importar o dump
mysql -h mysql-o -u l32786admin -p l32726_laravel < ~/ribafs_laravel_mysqldump.sql

Usar user e senha da página abaixo
https://sourceforge.net/p/joomlar/admin/ext/mysql/

