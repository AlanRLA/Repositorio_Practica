@extends('Plantilla')

@section('contenido')

        <div class="container mt-4 col-md-4">

            <H3 class="text-center">Registrar pedido de comida</H3>
            @if ($errors->any())

            @foreach ($errors->all() as $error)
         
            <div class="alert alert-danger alert-dimissible fade show" role="alert">
             <strong> {{$error}} </strong>
             <button type="button" class="btn-close" data-bs-dimiss="alert" aria-label="Close"></button>
           </div>

            @endforeach

            @endif

            <form action="GuardarPedido" class="border" method="POST">
                @csrf
                <div class="mt-4">
                    <div><Label  class="form-control">Platillo</Label></div>
                    <input class="form-control" type="text" name="txtPlatillo" placeholder="Ingresar platillo">
                    <p class="text-primary"> {{$errors->first('txtPlatillo')}}</p>
                </div>

                <div class="m">
                    <div><Label  class="form">Notas</Label></div>
                    <input class="form-control" type="text" name="txtNota" placeholder="Ingresar notas">
                    <p class="text-primary"> {{$errors->first('txtNota')}}</p>
                </div>

                <div class="">
                    <div><Label  class="form">Cantidad</Label></div>
                    <input class="form-control" type="number" name="txtCantidad" placeholder="Ingresar cantidad">
                    <p class="text-primary"> {{$errors->first('NmCantidad')}}</p>
                </div>

                <div class="mb-4">
                    <div><Label  class="form">Mesa</Label></div>
                    <input class="form-control" type="number" name="txtMesa" placeholder="Indicar mesa">
                    <p class="text-primary"> {{$errors->first('NmMesa')}}</p>
                </div>
                <button class="btn btn-primary" type="submit" name="btnEnviar" >Enviar</button>

            </form>
        </div>
 @stop