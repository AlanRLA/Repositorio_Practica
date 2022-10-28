<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Form</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      
        <!-- Styles -->
        <style>
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">

        <div class="container mt-4 col-md-4">

            <H3 class="text-center">Registrar pedido de comida</H3>
           
            <form action="" class="border">
                <div class="mt-4">
                    <div><Label  class="form-control">Platillo</Label></div>
                    <input class="form-control" type="text" name="txtPlatillo" placeholder="Ingresar platillo">
                </div>

                <div class="m">
                    <div><Label  class="form">Notas</Label></div>
                    <input class="form-control" type="text" name="txtNota" placeholder="Ingresar platillo">
                </div>

                <div class="">
                    <div><Label  class="form">Cantidad</Label></div>
                    <input class="form-control" type="number" name="txtCantidad" placeholder="Ingresar platillo">
                </div>

                <div class="mb-4">
                    <div><Label  class="form">Platillo</Label></div>
                    <input class="form-control" type="number" name="txtCantidad" placeholder="Ingresar platillo">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>

            </form>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    </body>
</html>
