<h1>Desafio RITS - vaga DESENVOLVEDOR PHP</h1>
<p>Para a resolução do desafio proposto, utilizei as seguintes tecnologias:

<ul>
    <li>CLI do <strong>**VUEJS**</strong> na criação da landing page de captura de currículos;</li>
    <li>Desenvolvimento da API com o <strong>**LARAVEL**</strong></li>
    <li>Painel administrativo usei como base o Voyager (pacote php para LARAVEL)</li>
</ul>

<h2>Como rodar localmente:</h2>

<h3>Rodando a landing page de captura de curriculums:</h3>
<p>Dentro do diretório <strong>frontend</strong> instale as dependências do npm executando o comando:</p>

<pre>$ npm install</pre>

<p>Ainda dentro do diretório <strong>frontend</strong> execute o comando:</p>

<pre>$ npm run serve</pre>

<h3>Rodando Painel administrativo e a API:</h3>

<p>No diretório raiz da aplicação instale as dependências do composer</p>
<pre>$ composer install</pre>

<p>Criando as tabelas</p>

<pre>$ php artisan migrate</pre>

<p>Alimentando as tabelas com as configurações das breads do voyager e dados do usuário admin</p>

<pre>$ php artisan db:seed</pre>

Após rodar o comando será criado o usuário com as seguintes credenciais para acessar o painel do voyager:

<pre>
<label><strong>email:</strong> admin@rits.com.br</label>
<label><strong>senha:</strong> 12345678</label>
</pre>

<p>execute o comando</p>

<pre>$ php artisan serve</pre>

<pre>ps: O APP_URL do laravel para está definido como <strong>localhost:8001</strong>, preferencialmente executando nessa ordem nem uma ação a mais será necessária</pre> 


** Caso necessário instalação do <a href="https://nodejs.org/en/docs/" target="_blank">NODE</a> e/ou <a href="https://vuejs.org/v2/guide/">VUE</a> na máquina, consulte a documentação **
