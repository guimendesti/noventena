# noventena
Checagem de Regra Noventena para Pesquisas NPS

<br />

# Requisitos Mínimos do Ambiente de Desenvolvimetno
 - PHP >= 7.1
 - MySQL >= 5.4 <i>(Estrutura e Dados: ./databaseInit.sql)</i>
 - Composer
 
<br />

# Instalar Dependências do Projeto
<h3>Utilizando o [Composer](https://getcomposer.org), pelo terminal na raiz do projeto, digite:</h3>
<blockquote>composer install</blockquote>

<br />

# Executar projeto localmente
<h3>Acesse a raiz do projeto pelo terminal e digite:</h3>
<blockquote>composer start</blockquote>
<h4>Ou se preferir digite o comando PHP abaixo, podendo informar outra porta:</h4>
<blockquote>php -S localhost:8080 -t public</blockquote>

<br />

# Checando se Cliente pode ser Impactado pela Pesquisa
<h3>Com o projeto em execução, na porta 8080, acessa a URL:</h3>
<blockquote>http://localhost:8080/api/clienteNoventena/{ID}</blockquote>
<i>Substituindo o {ID} pela identificação do Cliente</i>

<br />
<br />

# Listando todos Clientes que podem ser Impactados
<h3>Para listar todos os clientes que podem ser impactados, basta remover o {ID} da URL anterior:</h3>
<blockquote>http://localhost:8080/api/clienteNoventena</blockquote>

<br />

# Test PHPUnit nos Endpoints de Checagem Noventena
<h3>Acesse o terminal na raiz do projeto, para testar a chegagem individual digite:</h3>
<blockquote>./vendor/bin/phpunit ./tests/ChecaClienteNoventenaTest.php</blockquote>
<h4>... e para testar a listagem completa:</h4>
<blockquote>./vendor/bin/phpunit ./tests/ListaClienteNoventenaTest.php</blockquote>


