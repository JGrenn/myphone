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
                <li class="nav-item active">
                    <a class="nav-link" href="/Smartphones">Smartphones 📱</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/Noticias">Noticias 📰</a>
                </li>
            </ul>
        </div>
      </nav>
    </div>
  </div>

  <div class="row-12">
    <div class="border border-danger col" style="background-color:rgb(159,216,255); text-align: center">
      <p class="lead">¿Deseas publicar alguna noticia nueva?</p>
      <a class="btn btn-danger btn-sm" href="Noticias/crear">Nueva noticia</a>
    </div>
  </div>

  <div class="row">
  <div class="col">
  <table class="table table-hover table-bordered" style="text-align: center">
  <caption>Noticias 🗞</caption>
  <thead>
    <tr class="bg-secondary text-white">
      <th scope="col">Titulo</th>
      <th scope="col">Contenido</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  @foreach($noticias ?? '' as $noticia)
    <tr>
      <th scope="row">{{$noticia->TITULO_NO}}</th>
      <td>{{$noticia->CONTENIDO_NO}}</td>
      <td>
      <a class="btn btn-success" href="/Noticia/ver{{$noticia->ID_NO}}">Ver</a><br>
      <br><a class="btn btn-warning" href="/Noticia/reportar/{{$noticia->ID_NO}}">Reportar</a>
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