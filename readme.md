# 📂 Docker

## 📃 Projeto de implementação de containers PHP, MySQL e phpMyAdmin utilizando arquivo docker.compose.yml

## 🚀 Tecnologias

- Docker Desktop com WSL 2
- HTML
- PHP
- phpMyAdmin
- Git e Github
- Google Fonts

## 💻 Projeto
> Frontend da aplicação 📸

<p align="center">
  <img alt="To-do list" src="frontend.png" width="100%">
</p>


## 📃 Orientações

 ✓ Necessário que o Docker esteja instalado;<br />
 ✓ Clone o repositório<br />
 ✓ Execute: docker-compose up -d

---
---

Conceder permissão tudo para todos: Acesse o diretório e digite o comando

    sudo chmod -R 777 .

---
---

# Docker

### Remover todos os contêineres

    docker stop $(docker ps -aq)
    docker rm $(docker ps -aq)

### Remover Todas as Imagens

    docker rmi $(docker images -q)

### Remover Todos os Contêineres e Imagens em Um Comando

    docker stop $(docker ps -aq) && docker rm $(docker ps -aq) && docker rmi $(docker images -q)

### Executar ambiente (-d roda em segundo plano)

    docker-compose up -d

### Encerrar containers em execução

    docker-compose down

### Encerrar containers em execução excluindo volume

    docker-compose down -v

<br />
 ✓ docker inspect idcontainer => exibe informações detalhadas do container
<br />
 ✓ docker cp index.php idcontainerphp:/bar/www/html => copia index.php para dentro do container
 <br />
 ✓ http://localhost/ => Acessar php
<br />
 ✓ http://localhost:8080/ => Acessar phpMyAdmin





---
---
## 📧 Contato
[LinkedIn](https://www.linkedin.com/in/wsawebmaster/)

[wsawebmaster@yahoo.com.br](mailto:wsawebmaster@yahoo.com.br)
