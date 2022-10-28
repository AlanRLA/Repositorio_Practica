@extends('Plantilla')

@section('contenido')

    @if (session()->has('Succesful'))
    {!!"<script> Swal.fire(
        'Registro Exitoso',
        '',
        'success'
      )</script>"!!}
    @endif

        <div class="container mt-4 col-md-4">

            <H3 class="text-center">Registrar pedido de comida</H3>
            @if ($errors->any())

            @foreach ($errors->all() as $error)
        

            @endforeach

            @endif

            <form action="GuardarPedido" class="border" method="POST">
                @csrf
                <div class="mt-4">
                    <div><Label  class="form-control">Platillo</Label></div>
                    <input class="form-control" type="text" name="txtPlatillo" placeholder="Ingresar platillo" value="{{old('txtPlatillo')}}">
                    <p class="text-danger"> {{$errors->first('txtPlatillo')}}</p>
                </div>

                <div class="m">
                    <div><Label  class="form">Notas</Label></div>
                    <input class="form-control" type="text" name="txtNota" placeholder="Ingresar notas" value="{{old('txtNota')}}">
                    <p class="text-danger"> {{$errors->first('txtNota')}}</p>
                </div>

                <div class="">
                    <div><Label  class="form">Cantidad</Label></div>
                    <input class="form-control" type="number" name="NmCantidad" placeholder="Ingresar cantidad" value="{{old('NmCantidad')}}">
                    <p class="text-danger"> {{$errors->first('NmCantidad')}}</p>
                </div>

                <div class="mb-4">
                    <div><Label  class="form">Mesa</Label></div>
                    <input class="form-control" type="number" name="NmMesa" placeholder="Indicar mesa" value="{{old('NmMesa')}}">
                    <p class="text-danger"> {{$errors->first('NmMesa')}}</p>
                </div>
                <button class="btn btn-primary" type="submit" name="btnEnviar" >Enviar</button>

            </form>
        </div>
 @stop