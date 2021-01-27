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
  @if(Session::has('PIExitoso'))
  <div>
    {{Session::get('PIExitoso')}}
  </div>
  @endif
</div>
</div>

  <div class="row">
  <div class="col d-flex justify-content-center">
  <div class="card" style="width: 70rem;">
    <div class="card-header text-white text-center bg-secondary"><h5>Nuevo smartphone</h5></div>
    <div class="card-body text-primary" >
  <form method="POST" action="{{route('InsertarPhone')}}">
  @csrf

  <div class="form-group">
    <label>Marca: *</label>
    <input type="text" name="Marca" class="form-control" required
    placeholder="Escribe el nombre de la marca">
  </div>
  <div class="form-group">
    <label>Modelo: *</label>
    <input type="text" name="Modelo" class="form-control" required
    placeholder="Escribe el nombre del modelo">
  </div>
  <div class="form-group">
    <label>Sistema operativo: *</label>
    <input type="text" name="SistemaOp" class="form-control" required
    placeholder="Escribe el sistema operativo">
  </div>
  <div class="form-group">
    <label>Pantalla: *</label>
    <input type="text" name="Pantalla" class="form-control" required
    placeholder="Describe las características de la pantalla">
  </div>
  <div class="form-group">
    <label>Cámara: *</label>
    <input type="text" name="Camara" class="form-control" required
    placeholder="Describe las características de la cámara">
  </div>
  <div class="form-group">
    <label>Almacenamiento: *</label>
    <input type="text" name="Almacenamiento" class="form-control" required
    placeholder="Describe las características del almacenamiento">
  </div>
  <div class="form-group">
    <label>Procesador: *</label>
    <input type="text" name="Procesador" class="form-control" required
    placeholder="Describe las características del procesador">
  </div>
  <div class="form-group">
    <label>Batería: *</label>
    <input type="text" name="Bateria" class="form-control" required
    placeholder="Describe las características de la batería">
  </div>
  <div class="form-group">
    <label>Conectividad: *</label>
    <input type="text" name="Conectividad" class="form-control" required
    placeholder="Escribe las opciones de conectividad">
  </div>
  <div class="form-group">
    <label>Bandas: *</label>
    <input type="text" name="Bandas" class="form-control" required
    placeholder="Escribe las bandas de frecuencia">
  </div>
  <div class="form-group">
    <label>Sensores: *</label>
    <input type="text" name="Sensores" class="form-control" required
    placeholder="Escribe los sensores disponibles">
  </div>

  <div style="text-align: center"><button type="submit" class="btn btn-primary .btn-space">Publicar</button></div>
</div>
</div>
</div>
  </div>

</div>
</body>
</x-app-layout>