<x-app-layout>
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
                <li class="nav-item active">
                    <a class="nav-link" href="/Noticias">Noticias 📰</a>
                </li>
            </ul>
        </div>
      </nav>
    </div>
  </div>

  <div class="row jumbotron p-0 m-0">
    <div class="col text-center p-5 m-5" style="height: 300px;">
        <h1 class="text-danger display-4 font-weight-bolder">Bienvenido a My Phone </h1>
        <p class="lead font-weight-normal">"Toda la información que necesitas en un solo lugar."</p>
	</div>
		<div class="col text-right"><img src="{{ asset('/SPsample1.png') }}" class="img-fluid"></div>
  </div>
</div>
</body>
</x-app-layout>
