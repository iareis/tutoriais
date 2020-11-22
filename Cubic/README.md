# Remasterização do Linux Mint 20

## Usando o Cubic

Cria uma ISO customizada do Ubuntu 20.04 ou do Linux Mint 20

Esta ISO quando se instala num pendrive tem um Live Ubuntu ou Mint e pode ser instalado

## Instalação do cubic

sudo apt-add-repository -y ppa:cubic-wizard/release
sudo apt update
sudo apt install -y cubic

## Executar o cubic no desktop

Antes criar uma pasta para que o cubic armazene arquivos temporários enquanto gera a ISO e ao final remova (opção abaixo)

### Selecionar a pasta de trabalho

Selecione e clique acima em Select

Next

### Selecione a ISO a ser customizada

Requer que você tenha a ISO do Ubuntu ou do Mint num diretório do seu desktop

Customize alguns campos e clique em Next

### Copiando e extraindo os arquivos compactados

Aguarde ...

### Ambiente chroot

Agora temos um terminal que praticamente é uma VM isolada do nosso sistema do desktop.

Neste terminal instalaremos pacotes, desinstalaremos, copiaremos arquivos, etc.

## Enviar o arquivo cubic.sh do desktop para o chroot:

Faça o download do script "cubic.sh" daqui:

https://github.com/ribafs/tutoriais/tree/master/10Linux/Cubic

- Com botão direito do mouse sobre o arquivo "cubic.sh" no desktop
- Copiar

- Vamos ao chroot
- Clicar na tela com botão direito
- Paste file
- Copy (acima)

### Executar no chroot

sh cubic.sh

## Para clonar o desktop

Copie todo o conteúdo da sua pasta pessoal, em /home/seuUser para a /etc/skel do chroot. Não copie a pasta, mas tudo que contém.

Instalei algumas extensões no VSCode para já contar com elas ao instalar esta ISO.

Copiar os scripts que criei no /usr/local/bin para o /usr/local/bin do chroot

- Se eu copiar todo o conteúdo da pasta /home/ribafs para a pasta /etc/skel do chroot,
- Se instalar no chroot todos os softwares de terceiros que instalei no desktop,
- Então quando gerar a ISO e a instalar terei praticamente um clone do meu sistema desktop.

Aqui a pasta ~/.cache continha 1.2 GB de um total de 1.6 na pasta /home/ribafs.
Removi todos os arquivos dela e meu home ficou apenas com 439 MB.

Assim meu sistema com esta ISO virá com:

- Atalhos do nemo e remoção de atalhos originais
- Teclas de atalho customizadas que crio para or programas mais usados
- Favoritos dos navegadores, extensões e até o histórico
- Configurações que fiz em alguns programas: LibreOffice, xed, terminal, etc
- E mais

## Remasterização para distribuir

Nesta opção devemos selecionar o que devemos distribuir

No diretório abaixo:

https://github.com/ribafs/tutoriais/tree/master/10Linux/Cubic

Encontrará as pastas (como exemplo):

- /etc_skel
- /etc_skel_.config
- usr_local_bin

Copie:

- etc_skel para /etc/skel no chroot
- etc_skel_config para /etc/skel/.config no chroot
- usr_local_bin para /etc/local/bin no chroot

## Mensagens
gpg: Warning: using insecure memory!

Unable to init server: Could not connect: Connection refused

Ignore

## Copiar os aliases abaixo e colar no chroot em /etc/skel/.bashrc

Se estiver clonando o desktop ignore, pois já consta.

alias cw='cd /backup/www/laravel'
alias cpu='cd /backup/backup_github/public'
alias cpr='cd /backup/backup_github/private'
alias cdocs='cd /backup/backup_github/public/docs_source'
alias af='php artisan migrate:fresh'
alias am='php artisan migrate'
alias as='php artisan serve'
alias ams='composer du;php artisan migrate --seed'
alias asd='composer du;php artisan db:seed'
alias at='php artisan tinker'
alias auth7='composer require laravel/ui --dev;php artisan ui bootstrap --auth;npm install && npm run dev;npm audit fix'
alias clearall='php artisan view:clear;php artisan cache:clear;php artisan route:cache;php artisan route:clear;php artisan optimize;php artisan config:cache;composer dumpautoload'

## Depois de ... 
- atualização dos repositórios
- upgrade
- dos arquivos enviados
- pacotes instalador
- pacotes removidos
- Configurações dos novos usuários

Clicar em Next

## Analizando as customizações e preparando opções

Selecionar os pacotes a serem removidos

Next

## Selecionar a versão do kernel

Manter a seleção e Next

## Selecionar a compressão

Para que a ISO fique maior ou menor, dependendo da compactação.

- Quanto mais compactar mais lento será o processo
- xz é o que mais compacta, mas o mais lento consequentemente
- Mantive gzip
- Generate

Aguardar

## Finish

Nesta tela, abaixo tem um check para marcar e ele remover todos os arquivos temporários usados para gerar a ISO. Não removerá a ISO nem o checksum.

## Close

A ISO ficou aqui com 3.5 GB.

## Remasterizando uma ISO remasterizada

Desta vez eu usei o cubic não com uma ISO original do Mint mas com uma ISO que eu havia gerado antes e que já tinha muita coisa instalada, faltando apenas o meu home.

Agora a ISO continuou com 3.5 GB.

## Testar

Veja o item

[Textando com o VirtualBox](vbox.md)

## Site oficial

https://launchpad.net/cubic

Cubic (Custom Ubuntu ISO Creator)

É um software gráfico para o desktop usado para criar uma imagem ISO personalizada do Ubuntu Live.

O Cubic permite uma navegação fácil pelas etapas de personalização da ISO e apresenta um ambiente de linha de comando virtual (chroot) integrado para personalizar o sistema de arquivos Linux. Você pode criar novos projetos de personalização ou modificar projetos existentes. Parâmetros importantes são preenchidos dinamicamente com padrões inteligentes para simplificar o processo de personalização.

Veja que não falam no Mint, mas como nosso Mint é oriundo do Ubuntu, o Cubic funciona bem nele e provavelmente funcione também em ouras distros oriundas do Ubuntu.

## Dicas sobre o uso do chroot

[chroot](chroot.md)

## Ajudando a traduzir

https://translations.launchpad.net/cubic


