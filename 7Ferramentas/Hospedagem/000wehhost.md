# Hospedagem free compartilhada 000webhost

Suporte a PHP 7.4 e MySQL

Com isso podemos hospedar sites com

- Joomla
- WordPress
- Laravel
- E outros em PHP

## Criar conta

https://000webhost.com

## Efetuar login e mudar php para o 7.4

- https://www.000webhost.com/members/website/list
- Clique em Meus Sites, abaixo, em Gerenciador de Sites
- Configurações de site
- Geral
- Rolar a tela até Versão do PHP
- Caso não esteja na 7.4, clique em Alterar a versão do PHP e selecione PHP 7.4
Aguarde um pouco que ele atualiza.

## Acessar o gerenciador de arquivos

- Acima clique em Home
- Ferramentas
- Gerenciador de arquivos

## Instalar localmente o laravel 8

laravel new 000

cd 000

## Pequeno ajuste na view welcome

Editar resources/views/welcome.blade.php

Aqui, iniciando na linha 44, onde tem
```
                        </g>
                    </svg>
                </div>
```

Mudei para que se perceba a customização
```
                        </g>
                    </svg>
&nbsp;&nbsp;<h1 style="font-size:50px;color:red">8 no 000webhost.com</h1>
                </div>
```
## Testando localmente

php artisan serve

http://localhost:8000

## Configurações para envio
```
cd 000
php artisan key:generate
php artisan config:clear
php artisan cache:clear
```

## Exportar o banco de dados localmente para .sql

000.sql

## Compactar toda a psta do aplicativo

000.zip

## Enviar para o 000webhost

### Download do unzipper

https://github.com/ribafs/unzipper

Faça o download e descompacte.

Após o login no 000webhost acesse

- https://files.000webhost.com/
- Clique à esquerda em public_html
- Clique no ícone com uma seta apontando para uma nuvem
- Select Files
- Envie apenas o arquivo unzipper.php e clique em Upload e aguarde
- Envie agora o arquivo 000.zip

## Descompactar o 000.zip

Chame pelo navegador com

https://ribamarfs.000webhostapp.com/unzipper.php

Veja que ele já detecta nosso 000.zip

Apenas clique em Unzip Archive

Rapidamente ele descompacta.

Então acesse

https://ribamarfs.000webhostapp.com/public

E o laravel 8 aparece.

## Banco de dados

Veja que para a nossa demonstração nem criamos banco de dados, mas  a conta free do 000webhost permite a criação de um banco de dados com MySQL.

Nas configurações tem Gerenciador de banco de dados, onde podemos criar um novo banco de dados e usar no laravel.

## Problema

Após criar este aplicativo com laravel no 000WebHost no outro dia me enviaram um e-mail dizendo que meu site foi reportado por abuso. Dizendo que se eu não concordasse fizesse uma justificativa do conteúdo e enviasse um documento de identidade. Fiz isso, pois apenas enviei o laravel padrão. A minha suspeita é de que, como chamando o raiz não aparece nada, apenas as mensagens do 000webhost talvez este seja o problema. Eu deveria ter criado um script para redirecionar para o public. Estou aguardando a resposta deles.

Outro problema que conheço do 000webhost é que ele para nosso site uma hora todo dia, como forma de nos estimular a aderir aos eus planos pagos.


