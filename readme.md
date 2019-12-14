# CRUD - Laravel

## Instalação

Guia de instalação oficial no link: [Official Documentation](https://laravel.com/docs/5.8/installation#installation)


Clone o repositório

    git clone https://github.com/anderson-matheus/crud-laravel.git

Entre na pasta

    cd crud-laravel

Instale as dependências com o composer

    composer install && npm install

Faça uma cópia do arquivo .env.example para .env

    cp .env.example .env

Gere a key da aplicação

    php artisan key:generate

Configure as variáveis de ambiente para o banco de dados no .env

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=crud_laravel
    DB_USERNAME=root
    DB_PASSWORD=

Rode as migrações

    php artisan migrate

Rode os seeds

    php artisan db:seed

Rode o servidor local

    php artisan serve

Em outra aba do terminal rode o comando do npm

    npm run watch --watch-poll

Acesse o projeto na seguinte url http://localhost:8000
