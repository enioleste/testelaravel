Gerenciamento de usuários
======


Kickstart para aplicações que tenham acesso administrativo, com gerenciamento de Grupos, Usuários e Permissões.

Utiliza Laravel 5.3 (backend) e AdminLTE (frontend);

Interface de criação de usuários;
Auto registro, com confirmação de email;

Vem com um usuário pré configurado como administrador; [sql]
(admin / admin@1234)

### Grupos iniciais: 
*  Administrador;
*  Usuário Registrado;
*  Convidado;

### Permissões iniciais: 
* Criação de usuários (Convidado / Administrador);
* Edição de usuários (Administrador);
* Remoção de usuários (Administrador);
* Criação de Grupos (Administrador);

Instação e uso:
======
______

- Clone esse repositório no disco:

 ```git clone [URL] kickstart```

- Execute o Composer install para instalar as dependências:

```
composer install
composer update
```

- Após a instalação das dependências aplicar as permissões:

```
sudo chmod 755 -R kickstart
chmod -R o+w kickstart/storage
```

- Crie seu arquivo de ambiente **.env**. Exemplo de arquivo:
```
APP_ENV=local
APP_KEY=base64:RIUdwEzMOZxMW3xU11smgqjS3VjFXbisGqBNtnen6x8=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kickstart
DB_USERNAME=user
DB_PASSWORD=password

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=36f89aba46b019
MAIL_PASSWORD=0467af839b399d
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_KEY=
PUSHER_SECRET=
```

- Criar database. ex.:
 ```kickstart```

- Editar arquivo '.env' com credenciais de acesso do seu servidor. ex.:
							
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=kickstart
DB_USERNAME=user
DB_PASSWORD=password

MAIL_DRIVER=smtp
MAIL_HOST=mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=user
MAIL_PASSWORD=password
MAIL_ENCRYPTION=null
```
- Executar migrations:

```
php artisan migrate
php artisan migrate --path="/vendor/jrean/laravel-user-verification/src/resources/migrations"
```
- Pronto! Tudo deve funcionar, para começar registre um usuário.

- Faça o Login