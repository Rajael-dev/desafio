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
Crie o banco de dados com o seguinte nome: desafiodb, e senha root do seu MySQL
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
<br>
<h1 align="center">
    Coleção para testes no Postman
</h1>

## Para a tabela filmes
#### POST (Create)
- Rota: http://127.0.0.1:8000/api/filme
```bash
{
  "titulo": "Senhor do Aneis",
  "descricao": "Uma aventura na Terra Media.",
  "duracao": 180
}
```
#### GET (Read)
- 1 filme específico: http://127.0.0.1:8000/api/filme/1
- Todos: http://127.0.0.1:8000/api/filmes
#### PUT (Update)
- Rota: http://127.0.0.1:8000/api/filme/1
```bash
{
  "titulo": "Star Wars",
  "descricao": "Uma aventura no espaço.",
  "duracao": 120
}
```
#### DELETE (Delete)
- Rota: http://127.0.0.1:8000/api/filme/1

## Para a tabela livros
#### POST (Create)
- Rota: http://127.0.0.1:8000/api/livro
```bash
{
  "titulo": "O guia do mochileiro das galáxias",
  "autor": "Douglas Adams",
  "duracao": 200
}
```
#### GET (Read)
- 1 livro específico: http://127.0.0.1:8000/api/livro/1
- Todos: http://127.0.0.1:8000/api/livros
#### PUT (Update)
- Rota: http://127.0.0.1:8000/api/livro/1
```bash
{
  "titulo": "Harry Potter",
  "autor": "J.K. Rowling",
  "paginas": 500
}
```
#### DELETE (Delete)
- Rota: http://127.0.0.1:8000/api/livro/1
