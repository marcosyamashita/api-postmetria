
# Api - Postmetria
Projeto de Processo Seletivo - Postmetria

# Descrição
Foi usado a API do viacep para consumir a api e alimentar o banco de dados Mysql de forma dimamica afim de permitir o usuário digitar seu CEP e obter preencher o
endereço completo.

Após essa inclusão no banco de dados foi criado uma APIREST para disponibilizar as informações do banco de dados para serem consumidas publicamente.

Para desenvolvimento foi utilizado o Laravel versão 8, e como metodo de comunicação com a API foi utilizado o Http client request.
Toda instalação de dependencias foi utilizado o composer e toda instalação e criação de Models, Views e Controllers foi feita via linha de comando (Artisan).

# Instalação

Copie o arquivo `.env.example` para `.env`\
Estas são as configurações padrões do arquivo.

Configure os valores de acordo com o seu banco de dados, email (caso for utilizar).

Execute o comando para criar as keys

```shell
php artisan key:generate
```

# Composer

>Você precisa do composer instalado em sua máquina!

Entre na pasta do projeto via linha de comando e execute o comando para baixar as dependências do projeto!

```shell
composer install
```

Após isso execute a migration para criar as tabelas do banco de dados.

```shell
php artisan make:migration create_tables 
```

# Telas do Sistema

### Consumo da API

![print](https://github.com/marcosyamashita/api-postmetria/blob/ff9f422518dd9e83d6d3a22c51d279d2f434db3d/public/img/tela1.png)

![print](https://github.com/marcosyamashita/api-postmetria/blob/ff9f422518dd9e83d6d3a22c51d279d2f434db3d/public/img/tela02.png)

### Servidor API Rest

Para consumir a API criada precisa acessar o link:

```shell
http://localhost:8001/api/cep
```
Como já foi criado a rota ele vai trazer tudo que estiver no banco de dados.

![print](https://github.com/marcosyamashita/api-postmetria/blob/ff9f422518dd9e83d6d3a22c51d279d2f434db3d/public/img/api_rest.png)

