# Criando projetos com PHP no SF

## Distribuição do SF

CentOS 7

## LAMP

Apache 2.4.x web server

PHP 

- 5.4.x sob mod_php para projetos com domínios PROJECT.sourceforge.net
- PHP 7.1.x sob mod_php para projetos mais recentes com domínios PROJECT.sourceforge.io

## Checar se pdo tá disponível

print_r(PDO::getAvailableDrivers());

ou

if (!defined('PDO::ATTR_DRIVER_NAME')) {
    echo 'PDO unavailable';
}else{
    echo 'PDO   available';
}

## Verificar informações do PHP em seu projeto

Criar no desktop o arquivo

i.php

<?php
phpinfo();

## Enviar os arquivos para o SF usando o sftp para a pasta htdocs

Caso sejam apenas arquivos, sem pastas. Quando for uma pasta com outras dentro, usar o SCP.

sftp ribafs@web.sourceforge.net
cd /home/project-web/joomlar/htdocs

Enviar os arquivos da pasta /home/user/sf/ em meu desktop para o htdocs no SF
put /home/user/sf/*

Verificando o arquivo i.php no site do projeto joomlar
https://joomlar.sourceforge.io/i.php

Parâmetros do php.ini

php_value memory_limit 32M

Alguns parâmetros podem ser alterados usando no início do arquivo php

 <?php ini_set("memory_limit", "32M"); ?>

Outros não podem.
