
O ecommerce é um prototipo de um e-commerce para avaliação de conhecimento de php, laravel, html, css e javascript.

Para rodar o programa, precisa das seguintes ferramentas:
Ferramenta 1: Laravel 8;
Guia de instalaçao
Pré-requisitos
JSON PHP Extension + Banco de dados (MySQL, SQLite) + Servidor web (Apache) - recomendado: download do ambiente de desenvolvimento php Xampp.
Configuração correta das variáveis de ambiente (mysql e php).
Composer

Passo a passo:
Clone o repositório para seu computador;
Dentro da pasta principal do projeto crie um arquivo com o nome: .env; 
Copie o conteúdo do arquivo .env.example para o arquivo .env recém criado;
Acesse o repositório com um terminal e execute o comando: composer install;
Ainda no terminal, gere uma application key com o comando: php artisan key:generate;
Configure o arquivo .env com as configurações do banco de dados local;
No terminal, execute as migrations com o comando: php artisan migrate --seed;
Depois, execute o comando php artisan fetch:data (este comando criado através do Kernel do Laravel);
Por fim, para executar o projeto, use o comando: php artisan serve e acesse a url indicada no terminal.

Desenvolvimento
Este e-commerce foi desenvolvido usando como base o framework Laravel. O frontend foi feito em html, css e javascript, e com o uso do Bootstrap como base e auxilio para a estilização do projeto.

Desenvolvido por Larissa Rezende Fazza
