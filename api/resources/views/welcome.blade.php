<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
       <style>
           body {
               margin: 0px ;
           }
           .content {
               position: absolute ;
               width: 100% ;
               height: 100% ;
               display: flex;
               justify-content: center;
               align-items: center;
               background-image: url('/img/bg1.jpg'); background-position: center ;background-size: cover ;
           }
       </style>
    </head>
    <body style="background-image: url('/img/bg1.jpg'); background-position: center ;background-size: cover ; ">
        <div class="content">
            <img width="200" src="/img/logo_riide.svg" alt="">
        </div>
    </body>
</html>
