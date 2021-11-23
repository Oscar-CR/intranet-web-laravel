@extends('layouts.app')

@section('dashboard')

<div class="contenedor-logo">
        <ul class="logos" style="padding-left: 10px;">
            <li><a  href="#"><img style="max-width: 50px;" src="{{asset('/img/bhtrade.png')}}"  alt="bhtrade"></a> </li>
            <li><a  href="#"><img style="max-width: 80px;" src="{{asset('/img/promolife.png')}}"  alt="promolife"></a> </li>
            <li><a  href="#"><img style="max-width: 50px;"src="{{asset('/img/promodreams.png')}}"  alt="promodreams"></a> </li>
            <li><a  href="#"><img style="max-width: 50px;" src="{{asset('/img/trademarket.png')}}"  alt="trademarket"></a> </li>
        </ul>
    </div>

<div class="row">
  <div class="col-8 ">
    <h3>Agregar contacto</h3>
  </div>

  <form action="{{route('admin.contact.store')}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('POST')

        <label for="exampleFormControlInput1" class="form-label mt-4">Numero </label>
        <input type="text" class="form-control" maxlength="10" name="num_tel" placeholder="Ingrese el numero de telefono">

        <label for="exampleFormControlInput1" class="form-label mt-4">Correo Promolife </label>
        <input type="text" class="form-control" name="correo1" placeholder="Ingrese el correo">

        <label for="exampleFormControlInput1" class="form-label mt-4">Correo BH-Trademarket </label>
        <input type="text" class="form-control" name="correo2" placeholder="Ingrese el correo">

        <label for="exampleFormControlInput1" class="form-label mt-4">Correo Trademarket </label>
        <input type="text" class="form-control" name="correo3" placeholder="Ingrese el correo">

        <label for="exampleFormControlInput1" class="form-label mt-4">Correo Promodreams </label>
        <input type="text" class="form-control" name="correo4" placeholder="Ingrese el correo">

        <input type="submit" class="btnCreate mt-4" value="GUARDAR CONTACTO"></button>
    </form>
</div>

</div>

@stop

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="{{asset('/css/styles.css')}}" rel="stylesheet">

@stop

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@stop