<?php

require "config.php";
?>

<!DOCTYPE htm
l>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous">
        <title>Kaike Lira</title>
    </head>
    <body>

<header>
    <nav class="navbar bg-body-tertiary fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href='index.html'>Kaike Lira</a>
            <button class="navbar-toggler" style="box-shadow: none; border: none;" type="button" data-bs-toggle="offcanvas" 
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close" 
                    style="box-shadow: none; border: none;"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Principal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./pages/afazeres.html">Afazeres do dia</a>
                        </li>

                    </ul>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>



<div class="container" style=" margin-top: 120px;">
<h1 class="text-center">Cronograma semanal</h1>
<div class="table">
<table class="table" style="border: 1px solid black;">
  <thead>
    <tr>
      <th scope="col">Horários</th>
      <th scope="col">Segunda</th>
      <th scope="col">Terça</th>
      <th scope="col">Quarta</th>
      <th scope="col">Quinta</th>
      <th scope="col">Sexta</th>
      <th scope="col">Sábado</th>
      <th scope="col">Domingo</th>
    </tr>
  </thead>
  <tbody>
<?php
puxando();
?>
  </tbody>
</table>
</div>
</div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
        crossorigin="anonymous"></script>
    </body>
</html>