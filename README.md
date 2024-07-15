# API para o desafio técnico Lojacorr

Está API foi desenvolvida utilizando o framework Laravel e MySql.

# Instalação

```
1. Clone o repositório
- git clone https://github.com/viniciusrg/lojacorr.git lojacorr
- cd lojacorr

2. Instale as dependências do Composer:
- compose install
- composer update (se necessário)

3. Configure a conexão com o banco de dados MySQL:
Copie o arquivo de exemplo .env:
- cp .env.example .env
Configure as variáveis de ambiente no arquivo .env com suas credenciais do MySQL.

4. Gere a chave da aplicação:
- php laravel key:generate

5. Execute as migrações do banco de dados:
- php artsan migration

6. Inicie o servidor de desenvolvimento:
- php artisan serve

```

# Insomnia

```
No diretório Docs você irá encontrar o arquivo de exportação "insomnia_lojacorr.json" para utilizar no seu Insomnia.

Lembre-se de configurar as variáveis de ambiente:
{
	"url_base": "http://localhost:8000/api",
	"access_token": "insira o token de acesso aqui" (Você conseguirá um authToken ao registrar ou logar um usuário na aplicação)
}

Adicionar a variável access_token no campo Auth->Bearer Token -> token nas suas requisições.


```

# Meu LinkedIn
LinkedIn: https://www.linkedin.com/in/vinicius-ribeiro-goulart/
