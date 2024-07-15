# Passo a Passo

# Certifique-se de estar com o Docker em execução.

```sh
docker ps
```

# Certifique-se de ter o Docker Compose instalado.

```sh
docker compose version
```
# Clone a branch docker para um repositório.
- Execute o comando para clonar os arquivos de configuração do Docker:
git clone -b docker https://github.com/viniciusrg/lojacorr.git .

# Clone sua aplicação Laravel para a pasta 'app'. Caso a pasta app não exista, crie a pasta.

A listagem de pastas do projeto deve ficar:

```
    app/
    docker/
    .gitignore
    docker-compose.yml
    readme.md
```

# Certifique-se que sua aplicação Laravel ficou em `./app` e que existe o seguinte caminho: `/app/public/index.php`
- Abra a pasta app no seu terminal e execute o comando: git clone https://github.com/viniciusrg/lojacorr.git .

# Certifique-se que sua aplicação Laravel possuí um .env e que este .env está com a `APP_KEY=` definida com valor válido.
- Seu .env deverá ficar semelhante a esse:
```
DB_CONNECTION=mysql
DB_HOST=host.docker.internal
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root_password
```

# Contruir a imagem Docker, execute:

```sh
docker compose build
```

# Para subir a aplicação, execute:

```sh
docker compose up
```

- Para rodar o ambiente sem precisar manter o terminar aberto, execute:

```sh
docker compose up -d
```

# Para derrubar a aplicação, execute:

```sh
docker compose down
```

# Para entrar dentro do Container da Aplicação, execute:

```sh
docker exec -it web bash
```

# Acesso o container da aplicação para executar os comando do Laravel
- composer install
- php artisan key:generate (Caso ainda não tenha uma key no seu arquivo .env)
- php artisan migrate

# Dentro do diretório ./app você irá encontrar um diretório Docs com o arquivo de importação do Insomnia para utilizar.
- Para mais informações acesso o README da branch main.