# Usando o SCP

SCP (cópia segura) é um utilitário de linha de comando que permite copiar arquivos e diretórios com segurança entre dois locais.

Com o scp, você pode copiar um arquivo ou diretório:

- Do seu sistema local para um sistema remoto.
- De um sistema remoto para o seu sistema local.
- Entre dois sistemas remotos estando em seu sistema localou de uma pasta do sisema remoto para outra pasta do mesmo sistema remoto

Ao transferir dados com scp, os arquivos e a senha são criptografados para que o processo inteiro seja confidencial.

Sintaxe

scp [OPTION] [user@]SRC_HOST:]file1 [user@]DEST_HOST:]file2

- OPTION - scp options (https://linux.die.net/man/1/scp) such as cipher, ssh configuration, ssh port, limit, recursive copy …etc.
- [user@]SRC_HOST:]file1 - Source file.
- [user@]DEST_HOST:]file2 - Destination file

Os arquivos locais devem ser especificados usando um path absoluto ou relativo, enquanto os nomes dos arquivos remotos devem incluir uma especificação de usuário e host.

O scp fornece várias opções que controlam todos os aspectos de seu comportamento. As opções mais utilizadas são:

     -P - Especifica a porta ssh do host remoto.
     -p - Preserva a modificação de arquivos e os tempos de acesso. Mostra a velocidade de conexão
     -q - Use esta opção se desejar suprimir o medidor de progresso e as mensagens de não erro.
     -C - Esta opção força o scp a comprimir os dados à medida que são enviados para a máquina de destino, tornando mais rápida a transferência. No destino chegam descompactados
     -r - Esta opção diz ao scp para copiar diretórios recursivamente.
     -v - Mostrar detalhes na tela enquanto copia

## Antes de começar

O comando scp depende do ssh para transferência de dados, portanto, requer uma chave ssh ou senha para autenticar nos sistemas remotos.

Os dois pontos (:) são como o scp distingue entre os locais local e remoto.

Para poder copiar arquivos, você deve ter pelo menos permissão de leitura no arquivo de origem e permissão de gravação no sistema de destino.

Tenha cuidado ao copiar arquivos que compartilham o mesmo nome e localização em ambos os sistemas, o scp sobrescreverá os arquivos sem aviso.

Ao transferir arquivos grandes, é recomendado executar o comando scp dentro de uma tela ou sessão tmux. No caso do SF recomenda o rsync.

## Copiar arquivos e diretórios entre dois sistemas

### Copiar um arquivo local para um sistema remoto

scp file.txt remote_username@10.10.0.2:/remote/directory

scp file.php ribafs@web.sourceforge.net:/home/project-web/joomlar/htdocs

Caso não seja especificado um diretório remoto será copiado para o home do user remoto.

Saída na tela:
ribafs@web.sourceforge.net's password:
file.txt                             100%    0     0.0KB/s   00:00

Caso deseje salvar o arquivo file.txt com um outro nome precisa especificar

scp file.txt remote_username@10.10.0.2:/remote/directory/newfilename.txt

Copiar um inteiro diretório recursivamente, apenas adicione -r. Copiar um diretório local para o SF

scp -r /local/directory remote_username@10.10.0.2:/remote/directory

### Copiar um arquivo do SF para o seu desktop

Use o SF como origem e seu desktop como destino

Copiar um arquivo file.txt do SF para a pasta /home/ribafs/sf em seu desktop:

scp ribafs@web.sourceforge.net:/home/project-web/joomlar/htdocs/file.txt /home/ribafs/sf

### Copiar um arquivo de um host do SF para outro do mesmo SF

Ao contrário do rsync, ao usar o scp, você não precisa fazer login em um dos servidores para transferir arquivos de uma para outra máquina remota.

Lembrando que dependendo do tipo de projeto o SF usa hosts diferentes.

O comando a seguir copiará o arquivo /home/frs/project/joomlar/Rel_1/index.php do host remoto frs.sourceforge.net para o /home/project-web/joomlar/htdocs no host web.sourceforge.net

scp ribafs@frs.sourceforge.net:/home/frs/project/joomlar/Rel_1/index.php ribafs@web.sourceforge.net:/home/project-web/joomlar/htdocs

Para rotear o tráfego através da máquina na qual o comando é emitido, use a opção -3

scp -3 user1@host1.com:/files/file.txt user2@host2.com:/files

Veja o item sobre as Chaves do SSH, para criar uma chave pública em seu desktop e enviar para o SF, de forma que ele não mais solicite as senhas quando executar estes comandos.

Aqui

Referência:

https://linuxize.com/post/how-to-use-scp-command-to-securely-transfer-files/
