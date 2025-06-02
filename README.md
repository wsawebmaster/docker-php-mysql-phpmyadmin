## 📂 Ambiente para Desenvolvimento PHP com MySQL usando Docker

### 📌 Visão Geral
Projeto de implementação de containers PHP, MySQL e phpMyAdmin utilizando arquivo docker.compose.yml

## 🛠️ Tecnologias Utilizadas

- Docker Desktop com WSL 2
- HTML
- PHP
- phpMyAdmin
- SQL
- Git e Github
- Google Fonts

## 💻 Projeto
> Frontend da aplicação 📸

<p align="center">
  <img alt="imagem front end da aplicação" src="frontend.png" width="100%">
</p>

### Acessar o
Projeto: [http://localhost/](http://localhost/)<br />
phpMyAdmin: [http://localhost:8080/](http://localhost:8080/)

Iniciar a aplicação

    docker-compose up -d

Caso queira acessar o container php
```sh
docker-compose exec php bash
```

---
---

### Encerrar containers em execução

    docker-compose down

### Remover contêineres, imagens e limpar redes não utilizadas.

    [ "$(docker ps -q)" ] && docker stop $(docker ps -q); [ "$(docker ps -aq)" ] && docker rm $(docker ps -aq); [ "$(docker images -q)" ] && docker rmi $(docker images -q); docker network prune -f

---
---

### 👨‍💻 Expert

<p>
<img 
      align="left" 
      style="margin: 10px; width: 80px; border-radius: 50%;" 
      src="https://avatars.githubusercontent.com/u/52001930?s=400&u=fb999c966c5c652a8357cbede4b1112e79cbfe18&v=4" 
/>
    <p style="padding-top:25px">&nbsp&nbsp&nbsp Wagner Andrade<br>
    &nbsp&nbsp&nbsp
    <a href="https://github.com/wsawebmaster">
    GitHub</a>&nbsp;|&nbsp;
    <a href="https://www.linkedin.com/in/
wsawebmaster">LinkedIn</a>
&nbsp;|&nbsp;
<a href="mailto:wsawebmaster@yahoo.com.br">
    Email</a>
  &nbsp;|&nbsp;
</p>
</p>