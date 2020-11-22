# Criando e administrando um projeto no SourceForge

## Conteúdo

- Algumas informações sobre o SourceForge
- Requisitos para a hospedagem de projetos no SF:
    - Todos os projetos precisam ser Open Source (http://opensource.org/osd). Ver http://p.sf.net/sourceforge/terms
- Alguns Recursos para os projetos
- Limitações conhecidas
- Criação de um novo Projeto
- Configurações de um Projeto
- Importação de Repositórios do GitHub
- Regras para Nomes de arquivos e pastas
- Projeto de Exemplo

- Transferência de Arquivos
    - SCP
    - Rsync
    - SFTP - WinSCP, FileZills e outros
    - Git - terminal
    - SSH - Terminal e Putty
- Tipos de Projetos
    - Código fonte - Git
    
- Recursos Suportados:
    - Git, SCP, SSH, SFTP, Rsync
    - Apache
    - PHP
    - MySQL
    - VHOST

## Algumas informações

Atualmente existem 32 million usuários ao redor do mundo no SF

Nesta semana: ()
- 17.079.263 downloads (24/10/2020)
- 7.896 Code Commits

## Alguns Recursos dos projetos

- Git
- Scp
- Sftp, Filezilla
- SSH
- Forums
- Blog
- Wiki
- Download ilimitado
- Tickets
- Web Hosting (Apache, PHP, MySQL, SQLite)
- Mailling List

## Limitações conhecidas

- Individual files larger than 5 GB will not replicate out to our mirrors and can not be downloaded.
- Moving files may be accomplished via the shell, but cannot be done with the web file manager.
- Note: download statistics are based on path and filename, so stats for moved files will be reset. Your total project download count will include the previous name's stats.

## Criação de um novo projeto

VEja os termos de uso, que precisa concordar para criar um projeto.

http://slashdotmedia.com/terms-of-use/

https://sourceforge.net/user/registration/

https://sourceforge.net/p/forge/documentation/Create%20a%20New%20Project/

https://sourceforge.net/p/forge/documentation/Docs%20Home/

Detalhes aqui - https://sourceforge.net/create/

** Arquivos README.md **

Cada projeto deve ter um arquivo README.md que funciona como um index.html com informações sobre o projeto

https://sourceforge.net/p/forge/documentation/Files-Readme/

Para Enviar

https://sourceforge.net/projects/joomlar/upload/

Ou por qualquer outro meio

## Configurações de um projeto

- Nome - Mint Prog
- Unixname - mint-prog
- Homepage - https://sourceforge.net/projects/mint-prog/
- Short Summary - Resumo sobre o projeto. Uma frase ou duas, para ajudar os instrumentos de busca
- Full Description - Descrição detalhada do projeto. Uma descrição sobre o projeto que aparecerá nos instrumentos de busca.
- Support Page - o tipo de suporte que o projeto presta aos usuários
- Icon - Enviar um ícone do projeto. Caso não envie será mostrado na página do projeto o do SF
- Project Status - status atual do projeto

### Acima

- Summary
- Files (Criação de pastas e envio de arquivos)
    - Add File - Envio de arquivos de até 1GB - https://sourceforge.net/projects/joomlar/upload/
    - Only Open Source-licensed (https://opensource.org/osd) materials may be uploaded to SourceForge.
    - Arquivos maiores devem ser enviados usando rsync
- Reviews - onde podemos habilitar e desabilitar os reviews dos usuários e visualizar. https://sourceforge.net/projects/joomlar/reviews
- Support - https://sourceforge.net/projects/joomlar/support. Preferred Support Page (for users of your project). Escolha o tipo de suporte que deseja oferecer aos usuários. Exemplo: https://sourceforge.net/p/joomlar/discussion/
- Code - https://sourceforge.net/p/joomlar/code/ci/master/tree/ Para projetos de desenvolvimento de software, que usam principalmente git. O README.md aparece abaixo mostrando as informações do projeto, como um index.php faz com um site/aplicativo. Podemos trazer um snapshot do código clicando acima em Download Snapshot. Tem também o History
- Discussion - lista de discussão do projeto, caso enha selecionado em Support.
- Blog - caso enha sido selecionado na criação do projeto
- Admin - área principal de gerenciamento do projeto com muitos recursos
- Add New - para adicionar novos recursos ao projeto, entre os que não foram selecionados na criação do mesmo.
- Cadeado - ícone de um cadeado à esquerda. Se clicar e deixar ele aberto poderá arrastar os itens do menu superios, ordenando a seu gosto e renomeá-los.

## À esquerda

- Welcome
- Metadata - descrição do projeto, upload de screenshots, categorização
- ScreenShots - adicionar alguns para que o usuário veja algo além de texto
- Categorization - Muitas informações importantes sobre o projeto
- Export - exportar dados do rojeto para receber por e-mail
- User permissions. Onde podemos adicionar grupos e usuários ao projeto e também suas permissões.
- Audit trail - ver os logs de uso do projeto
- Import - importar do GitHub, da Allura e do Trac
- Projeto Web hosting:
    - Documentation - https://sourceforge.net/p/forge/documentation/Project%20Web%20Services/
    - MySQL database - https://sourceforge.net/p/joomlar/admin/ext/mysql/
    - VHost DNS - https://sourceforge.net/p/joomlar/admin/ext/vhost/

## Regras para Nomes de arquivos e pastas

- 3-30 caracteres de comprimento, usando somente letras, números e hífen (-)
Allowed characters for files and directories are:
 -_ +.,=#~@!()[]a-zA-Z0-9 (including " " - space).

Disallowed characters are:
 &:%?/*$|{;^}<>\"' and unicode

Filenames may not start with a space or dot ("."), and may not end with a space (" ").

## Importar Repositórios do GitHub para projetos no SF

https://sourceforge.net/p/joomlar/admin/ext/import/

## Projeto de exemplo:

Este tutorial aborda a criação e gerenciamento de um único projeto

- Tipo de projeto - projeto web. Este projeto usa Apache, PHP e MariaDB
- Projeto - joomlar
- Usuário - ribafs
- Pasta dos arquivos 
    - /home/project-web/joomla/htdocs

Hosts:
- web.sourceforge.net
- frs.sourceforge.net

Site do projeto
- https://joomlariba.sourceforge.io/joomlariba/

Site acima com Joomla. Dá algum trabalho além do normal, mas dá.


Depois disso

Aplicativo usando PDO com um simples CRUD

https://joomlariba.sourceforge.io/

Página de usuário

https://ribafs.sourceforge.net/

Que redireciona para

https://sourceforge.net/projects/ribafs/

Caso não exista um index.


## Tipos de projetos

### Código fonte - Code

O uso do git é para trabalhar com o código fonte de projetos que trabalham com linguagens de programação como C, PHP, Ruby, etc. Como também para projetos que usam linguagens, como os frameworks. É o tipo de projeto que a equipe de desenvolvimento do PHP, do Joomla ou similar usa.

### Arquivos binários - Files

Outro tipo de projeto é o que trabalha com arquivos binários e não fontes. Quando se envia arquivos grandes para o SF.

### Projeto web

- Outro tipo é o de projetos web. Destinado a hospedar sites ou aplicativos no SF.
- Estes precisam enviar seus arquivos para a pasta htdocs.
Exemplo:
- sftp ribafs@web.sourceforge.net
- cd /home/project-web/joomlar/htdocs
- Enviar para a pasta acima para que possa ser visto no site abaixo

https://joomlar.sourceforge.io

## Transferência de arquivos

- Via web - https://sourceforge.net/projects/joomlar/upload/ (Arquivos de até 1 GB)
- SCP - Transferir entre desktop e host, host e desktop e host para host. Envia arquivos e também pastas recursivamente. Com SCP transferimos e recebemos os arquivos sem um shell, apenas executando um comendo.
- Rsync - Transferência recomendada para os arquivos grandes
- SFTP - transferência de arquivos que usa SSH, assim como o SCP. Veja o respectivo item. O SFTP abre um shell no servidor onde executamos os comandos e enviamos e recebemos arquivos do e para o desktop.
- Git - Mais usado para transferência e sincronização de código fonte.
- Putty - ferramenta de acesso ao servidor de SSH. Muito usda no Windows. Abre um shell.
- WinSCP - Ferrametna para transferência de arquivos usando SSH para windows.
- FileZilla - suporte a ftp e sftp. Para windows e linux.

A melhor alternativa que encontrei para enviar arquivos para o htdocs, foi usando o FileZilla, especialmente quando preciso enviar vários arquivos, com pastas e sub pastas.

### Enviando via web, pelo site do SF
- Podemos enviar arquivos (Add File) - https://sourceforge.net/projects/joomlar/upload/
- Para enviar arquivos de até 1GB clique em Select files, selecione do seu desktop, clique em Abrir e em Done
- Também podemos arrastar do nosso gerenciador de arquivos e soltar na área pontilhada.
- Caso o arquivo seja maior que 1GB ele oferecec as alternativas:
    - FTP (Use SFTP com o sftp na linha de comando ou o SFTP com o FileZilla)
    - SCP pela linha de comando
    - rsync pela linha de comando

https://sourceforge.net/p/forge/documentation/Release%20Files%20for%20Download/

## Refresh de um projeto

https://sourceforge.net/p/joomlar/code/refresh

## Excluir todos os arquivos do código fonte de um projeto

https://sourceforge.net/p/joomlar/admin/code/delete

## Backup dos arquivos

É uma responsabilidade do cliente e não do SF

mysqldump -h mysql-LETTER --user=DATABASE_USER --opt -p DATABASE | gzip > DATABASE.`date +%Y-%m-%d`.sql.gz

## Excluir um Projeto

- Faça login
- Acesse o projeto
- Clique em Admin
- Clique à direita em Metadata
- Clique à direita em Delete this project
- Confirme digitando DELETE na caixa de texto e Delete

