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

# Resposta do problema de lógica

```
Esse código foi feito em JavaScript para solucionar o problema de quantidade máxima de casas que podemos comprar com um orçamento e valores das casas pre determinados.

Basicamente o código é uma função que recebe um array com os valores das casas e também o valor do orçamento disponível e retorna quantas casas foram possíveis comprar e quantos reais foram gastos com essas compras.
 
1. Ordenar o valor das casas do menor para o maior para garantir que poderemos comprar o maior número de casas possíveis com o orçamento.

2. Realizar a soma do "totalGasto" + "valoresCasas" até que essa soma seja menor ou igual ao valor do orçamento. Dessa forma o valor do "totalGastos" armazenará quantos reais foram utilizados e também a variável "numeroCasas" guardará quantas somas foram realizadas para determinar quantas casas foram compradas.

3. É necessário criar as constantes "valoresCasas" para armazenar a lista de valores de cada casa e também o "orcamento" que deverá ser a quantidade disponível para compra.

4. Finalmente chamamos a função passando os seus parâmetros e exebimos o resultado na forma de console.log().

function maxCasasCompradas(valoresCasas, orcamento) {
    valoresCasas.sort((a, b) => a - b);

    let totalGasto = 0;
    let numeroCasas = 0;

    for (let i = 0; i < valoresCasas.length; i++) {
        if (totalGasto + valoresCasas[i] <= orcamento) {
            totalGasto += valoresCasas[i];
            numeroCasas++;
        }
    }

    return {
        numeroCasas: numeroCasas,
        totalGasto: totalGasto
    };
}

const valoresCasas = [20000, 50000, 30000, 10000, 25000];
const orcamento = 70000;

const resultado = maxCasasCompradas(valoresCasas, orcamento);
console.log(`Número de casas compradas: ${resultado.numeroCasas}`);
console.log(`Valor total gasto: R$${resultado.totalGasto}`);
```

# Meu LinkedIn
LinkedIn: https://www.linkedin.com/in/vinicius-ribeiro-goulart/
