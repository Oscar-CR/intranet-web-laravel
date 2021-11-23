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
    <h3>Directorio telefonico y correos</h3>
  </div>

  <div class="col-4">
    <a href="{{route('admin.contact.create')}}" type="button" class="btn btn-success">AGREGAR NUEVO</a>
  </div>
</div>
    <table class="table table-bordered mt-5">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Numero</th>
      <th scope="col">Promolife</th>
      <th scope="col">BH-Trademarket</th>
      <th scope="col">Trademarket</th>
      <th scope="col">PormoDreams</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>

  <tbody>
  @foreach($contacts as $contact)
    <tr>
      <th>{{$contact->id}}</th>
      <td>{{$contact->num_tel}}</td>
      <td>{{$contact->correo1}}</td>
      <td>{{$contact->correo2}}</td>
      <td>{{$contact->correo3	}}</td>
      <td>{{$contact->correo4}}</td>
      <td>
        <a href="{{route('admin.contact.edit',['contact'=> $contact->id] )}}" type="button" class="btn btn-primary">EDITAR</a>
        <button type="button" class="btn btn-danger">ELIMINAR</button>
      </td>
    </tr>
    @endforeach

  </tbody>
  <tbody>


  </tbody>
</table>

@stop

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="{{asset('/css/styles.css')}}" rel="stylesheet">

@stop

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
@stop