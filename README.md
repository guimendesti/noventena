# noventena
Checagem de Regra Noventena para Pesquisas NPS

<br />

# Instalar Dependências
<h3>Utilizando o [Composer](https://getcomposer.org), pelo terminal na raiz do projeto, digite:</h3>
<blockquote>composer install</blockquote>

<br />

# Executar projeto localmente
<h3>Para o projeto funcionar localmente é necessário PHP >= 7 instalado. Digite no terminal:</h3>
<blockquote>composer start</blockquote>
<h4>Ou se preferir digite o comando PHP direto, com possibilidade de informar outra porta.</h4>
<blockquote>php -S localhost:8080 -t public</blockquote>

<br />

# Checando de Cliente pode ser Impactado pela Pesquisa
<h3>Com o projeto em execução, na porta 8080, acessa a URL:</h3>
<blockquote>http://localhost:8080/api/clienteNoventena/{ID}</blockquote>
<i>Substituindo o {ID} pela identificação do Cliente</i>

<br />

# Pegando Lista de todos Clientes que podem ser Impactados pela Pesquisa
<h3>Para listar todos os clientes que podem ser impactados, basta remover o {ID} da URL anterior:</h3>
<blockquote>http://localhost:8080/api/clienteNoventena</blockquote>

<br />

# Test PHPUnit nos Endpoints de Checagem da Regra Noventena
<h3>Acesse o terminal na raiz do projeto, para testar a chegagem individual digite:</h3>
<blockquote>./vendor/bin/phpunit ./tests/ChecaClienteNoventenaTest.php</blockquote>
<h4>... e para testar a listagem completa:</h4>
<blockquote>./vendor/bin/phpunit ./tests/ListaClienteNoventenaTest.php</blockquote>


