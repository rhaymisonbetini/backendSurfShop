<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# SurfShop Backend
Projeto de estudos para uma API de APP em Ionic4. Esta API fornece dados de uma loja de produtos de Surf que é consumido pelo aplicativo.

# Instalação

Você deve possuir o composer e o laravel instalados preveamente em sua maquina.
Clone o repositório em sua máquina. Apos esse procedimento no seu terminal ou prompt rode o comando:
`composer install`. Sera instalado todas as dependencias do projeto ( O JWT já esta incluso e o CORS também esta configurado).
Apos esse procedimento no arquivo `.env` configure suas variaveis de ambiente para conexão com o banco de dados. 

Apos esse procedimento rode o comando `php artisan migrate ` para que seja construido sua base de dados. 
Com esses comandos realizados, rode o comando `php artisan serve` e o backend estara rodando a porta 8000.

Com o front-end rodando basta realizar o cadastro no sistema e logar-se pois o front-end e o back-end jão estão conversando entre sí.

# Tecnologias 
- PHP 7.3
- Laravel 6.9
- JWT

# Desenvolvedor

Rhaymison Betini
Rhaymison@hotmail.com
