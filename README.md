<h1 align="center">
    API Rest Laravel CRUD
</h1>

<h3 align="center">
  Teste para vaga backend.
</h3>

<br>

## :rocket: Tecnologias e Ferramentas Utilizadas

Esse projeto foi desenvolvido com as seguintes tecnologias:

- [PHP](https://www.php.net/)
- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/downloads/)

<br>

## 💻 Instalação

Dentro da pasta base do projeto:
Crie o banco de dados com o seguinte nome: desafio db, e senha root do seu MySQL
```bash
chmod -R guo+w ./storage
mysql -u root -p"5521" -e "DROP DATABASE IF EXISTS desafiodb;CREATE DATABASE desafiodb"
```
Em seguida confira no arquivo .env se os dados do banco de dados estão corretos
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=desafiodb
DB_USERNAME=root
DB_PASSWORD=5521
```
Em seguida, execute as migrations:
```bash
php artisan migrate
```
Por fim:
```bash
php artisan serve
```
