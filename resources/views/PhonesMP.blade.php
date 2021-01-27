<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <tittle></tittle>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-md navbar-dark bg-danger">
        <a class="navbar-brand" href="/">My Phone</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/Smartphones">Smartphones 📱</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/Noticias">Noticias 📰</a>
                </li>
                <form class="form-inline" method="GET" action="{{route('BuscarSP')}}">              
                  <input class="form-control mr-sm-2" type="search" name="buscarphone" placeholder="Buscar modelo" aria-label="Search">
                  <button class="btn btn-secondary my-2 my-sm-0" type="submit">Buscar</button>
                </form>
            </ul>
        </div>
      </nav>
    </div>
  </div>

  <div class="row-12">
    <div class="border border-danger col" style="background-color:rgb(159,216,255); text-align: center">
      <p class="lead">¿Deseas publicar información acerca de un nuevo dispositivo?</p>
      <a class="btn btn-danger btn-sm" href="/Smartphones/crear">Nuevo dispositivo</a>
    </div>
  </div>

  <div class="row-12">
    <div class="col-12">
        @if(Session::has('PBExitoso'))
          <div>
            {{Session::get('PBExitoso')}}
          </div>
        @endif
    </div>
  </div>

  <div class="row">
  <div class="col">
  <table class="table table-hover table-bordered" style="text-align: center">
  <caption>Smartphones</caption>
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">Marca</th>
      <th scope="col">Modelo</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <tr>
	  @foreach($phones ?? '' as $phone)
      <th scope="row">{{$phone->MARCA_SP}}</th>
      <td>{{$phone->MODELO_SP}}</td>
      <td>
	  <a class="btn btn-success btn-sm" href="/Smartphones/ver{{$phone->MODELO_SP}}">Ver</a>
      <a class="btn btn-warning btn-sm" href="/Smartphones/editar/{{$phone->MODELO_SP}}">Editar</a>
      <a class="btn btn-danger btn-sm" href="/Smartphones/borrar/{{$phone->MODELO_SP}}">Borrar</a>
      </td>
    </tr>
  @endforeach
  </tbody>
  </table>
</div>
</div>

</div>
</body>
</x-app-layout> 