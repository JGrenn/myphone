<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymopr">
	<title>📰 {{$noticia->TITULO_NO}}</title>
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
                </li>
            </ul>
				</div>
			</nav>
		</div>
		</div>
		
		
		<div class="border border-danger col" style="background-color:rgb(159,216,255); text-align: center"><br><br><h2 style="text-align: center">
		{{$noticia->TITULO_NO}}
		</h2><br><br></div>
		
		<br><div class="row" >
		<div class="col-sm-5"><h4 class="col font-weight-normal text-secondary" style="text-align: center">
		Fecha de publicación: {{$noticia->FECHA_NO}}
		</h4>
		</div>
		
		<div class="col-sm-2"><h4 class="col font-weight-normal text-secondary" style="text-align: center">
		|
		</h4></div>
		
		<div class="col-sm-5"><h4 class="col font-weight-normal text-secondary" style="text-align: center">
		{{$noticia->AUTOR_NO}}
		</h4></div>
		</div>
		
		<br><div><p style="font-size:160%; text-align: justify">
		{{$noticia->CONTENIDO_NO}}
		</h2></div>
		
		<br><br><br><br>
		<div>
		<h4 class="col font-weight-normal text-secondary" style="text-align: center">
		REPORTES:
		</h4>
		<table class="table table-hover" style="text-align: center">
			<thead>
			<tr>
				<th><h5>IDENTIFICADOR DEL REPORTE</h5></th>
				<th><h5>DESCRIPCIÓN</h5></th>
			</tr>
			</thead>
			<tbody>
			@foreach($reportes ?? '' as $reporte)
			<tr>
			<td><h5 class="font-weight-bolder">{{$reporte->ID_RE}}</h5></td>
			<td><h5 class="col font-weight-bolder">{{$reporte->MOTIVO_RE}}</h5></td>
			</tr>
			@endforeach 
			</tbody>
		</table>
		</div>	
		</div>	
		</div>	
	</div>
</body>
</html>
</x-app-layout>