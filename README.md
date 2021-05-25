## Preparando ambiente

Certifique-se de que tenha instalado em seu sistema operacional os programas: Composer, PHP e MySql.

Faça o download do arquivo, abra um prompt de comando de sua escolha e use o comando: composer install

## Iniciar projeto

Renomeie o arquivo .env.example para apenas .env

Com seu banco de dados aberto, crie um banco novo com o nome laravel.

Em seguida abra o prompt de comando e use os comandos:

php artisan key:generate

php artisan migrate --seed

php artisan optimize

php artisan ser

E o projeto estará rodando normalmente em sua máquina.
