## Como usar o MySQL no chroot

Quero criar aplicativos/sites em meu desktop e transferir para o ambiente chroot juntamente com os bancos.

Instalo no /var/www/html/joomla, o Joomla em meu desktop

Após instalar e configurar exporto o script .sql

Copio o /var/www/html/joomla para o /var/www/html/joomla do chroot

- Paro o mysql no desktop
- Acesso o chroot e inicio o mysql
- Crio os bancos no chroot
- importo os scripts no chroot
- paro o mysql no chroot e continuo a remasterização

## Configurar o MySQL para usos em sudo e sem senha no chroot

## Configurações no php e no apache no chroot

## Configurar o postgresql

Atribuindo uma senha ao postgres e configurando o postgres como trust no pg_hba.conf

## Dicas:

Sair do chroot e voltar ao terminal do desktop

exit

Voltar ao chroot

exit


