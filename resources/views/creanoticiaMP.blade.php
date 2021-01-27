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
                <li class="nav-item">
                    <a class="nav-link" href="/Noticias">Noticias 📰</a>
                </li>
            </ul>
        </div>
      </nav>
    </div>
  </div>

<div class="row-12">
<div class="col-12">
  @if(Session::has('NIExitoso'))
  <div>
    {{Session::get('NIExitoso')}}
  </div>
  @endif
</div>
</div>

  <div class="row">
  <div class="col d-flex justify-content-center">
  <div class="card" style="width: 70rem;">
    <div class="card-header text-white text-center bg-secondary"><h5>Nueva noticia</h5></div>
    <div class="card-body text-primary">
  <form method="POST" action="{{route('InsertarNoticia')}}">
  @csrf

  <div class="form-group">
    <label>TÍtulo: *</label>
    <input type="text" name="Titulo" class="form-control" required
    placeholder="Escribe el título de la noticia">
  </div>
  <div class="form-group">
    <label>Contenido: *</label>
    <input type="text" name="Contenido" class="form-control" required
    placeholder="Escribe el contenido de la noticia">
  </div>
  <div class="form-group">
    <label for="FechaInicial_So">Fecha: *</label>
    <input type="date" class="form-control" name="Fecha" required
    max="2021-12-31">
  </div>
  <div class="form-group">
    <label>Autor:</label>
    <input type="text" name="Autor" class="form-control"
    placeholder="Escribe el nombre del autor (Opcional)">
  </div>
  
 <div style="text-align: center"><button type="submit" class="btn btn-danger .btn-space ">Publicar</button></div>
</div>
</div>
</div>
  </div>

</div>
</body>
</x-app-layout>