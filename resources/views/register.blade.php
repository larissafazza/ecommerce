<?php $image = asset('images/logo.png');?>

<!DOCTYPE html>
<html lang="{{ str_replace('_','-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>5Labs | e-commerce</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        
        <link rel="icon" href="images/icon.jpg" type="image/x-icon">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">

        <link rel="stylesheet" href="styles/login.css">

        <!-- Styles -->
        <style>
            /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        </style>
    </head>
    <body>
        <div class="login-box">
            <div class="modal-header">
                <h1>Cadastro</h1>
            </div>
            <div>
            <form>
                <div class="">
                    <label for="inputEmail" class="label-input">Email</label>
                    <input type="email" class="form-control text-input" id="inputEmail" aria-describedby="emailHelp">
                </div>
                <div class="">
                    <label for="inputPassword" class="label-input">Senha</label>
                    <input type="password" class="form-control text-input" id="inputPassword">
                </div>
                <div class="">
                    <label for="inputPassword" class="label-input">Confirme a senha</label>
                    <input type="password" class="form-control text-input" id="inputPassword">
                </div>
                <div>
                    <button type="button" class="login-button vendedor">Cadastrar</button>
                </div>
            </form>
            </div>
            </div>
        </div>
    </body>
</html>
