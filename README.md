# 📒 Projeto Agenda de Contatos

Projeto de gerenciamento de contatos desenvolvido para prática em **PHP**, **MySQL (PDO)**, **HTML**, **CSS** e **Bootstrap**.

![PHP](https://img.shields.io/badge/PHP-8.0+-blue) ![MySQL](https://img.shields.io/badge/MySQL-5.7+-orange) ![Bootstrap](https://img.shields.io/badge/Bootstrap-5-blueviolet)

---
## Funcionalidades

- Adicionar, editar e excluir contatos.
- Armazenar informações como nome, telefone, e-mail e observações.
- Listar todos os contatos cadastrados.

## Requisitos

* PHP >= 7.4
* MySQL / phpAdmin
* Servidor Web (Apache, Nginx)
* Composer (opcional)

## Como Executar

1. Clone o repositório:

```bash
git clone https://github.com/aryaneandrade/projeto-web-agenda.git
```

2. Acesse o diretório do projeto:

```bash
cd projeto-web-agenda
```

3. Configure o banco de dados no arquivo de conexão `config.php` (ou equivalente):

```php
$host = "localhost";
$db = "agenda";
$user = "seu_usuario";
$pass = "sua_senha";
```

4. Importe a base de dados `agenda.sql` no MySQL.

5. Abra o projeto no navegador:

```
http://localhost/projeto-agenda
```

## Tecnologias Utilizadas

* PHP com PDO para conexão segura ao banco de dados.
* MySQL para armazenamento dos dados.
* HTML, CSS e Bootstrap para a interface.
