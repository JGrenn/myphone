<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymopr">
	<title>ESPECIFICACIONES 📲 {{$phone->MARCA_SP}}</title>
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
		<div>
			<table class="table table-hover">
				<thead>
					<tr class="table-primary">
						<th><h3 style="text-align: left">{{$phone->MARCA_SP}}</h3></th>
						<th><h3 style="text-align: right">Especificaciones</h3></th>
					</tr>
				</thead>
				<tbody>
					<tr style="text-align: center">
						<td><h5 class="font-weight-bolder">MODELO</h5></td>
						<td><h5 class="font-weight-bold">{{$phone->MODELO_SP}}</h5></td>
					</tr>
					<tr style="text-align: center">
						<td><p class="font-weight-bolder">SISTEMA OPERATIVO</p><img src="{{ asset('/OSsample.png') }}" class="mx-auto d-block"></img></td>
						<td><br><br><h5 class="col font-weight-normal">{{$phone->SISTEMAOP_SP}}</h5></td>
					</tr>
					<tr style="text-align: center">
						<td><p class="font-weight-bolder">PANTALLA</p><img src="{{ asset('/DISPLAYsample.png') }}" class="mx-auto d-block"></img></td>
						<td><br><br><h5 class="font-weight-normal">{{$phone->PANTALLA_SP}}</h5></td>
					</tr>
					<tr style="text-align: center">
						<td><p class="font-weight-bolder">CÁMARA</p><img src="{{ asset('/CAMERAsample.png') }}" class="mx-auto d-block"></img></td>
						<td><br><br><h5 class="font-weight-normal">{{$phone->CAMARA_SP}}</h5></td>
					</tr>
					<tr style="text-align: center">
						<td><p class="font-weight-bolder">ALMACENAMIENTO</p><img src="{{ asset('/STORAGEsample.png') }}" class="mx-auto d-block"></img></td>
						<td><br><br><h5 class="font-weight-normal">{{$phone->ALMACENAMIENTO_SP}}</h5></td>
					</tr>
					<tr style="text-align: center">
						<td><p class="font-weight-bolder">PROCESADOR</p><img src="{{ asset('/PROCESSORsample.png') }}" class="mx-auto d-block"></img></td>
						<td><br><br><h5 class="font-weight-normal">{{$phone->PROCESADOR_SP}}</h5></td>
					</tr>
					<tr style="text-align: center">
						<td><p class="font-weight-bolder">BATERÍA</p><img src="{{ asset('/BATERYsample.png') }}" class="mx-auto d-block"></img></td>
						<td><br><br><h5 class="font-weight-normal">{{$phone->BATERIA_SP}}</h5></td>
					</tr>
					<tr style="text-align: center">
						<td><p class="font-weight-bolder">CONECTIVIDAD</p><img src="{{ asset('/CONECTIVITYsample.png') }}" class="mx-auto d-block"></img></td>
						<td><br><br><h5 class="font-weight-normal">{{$phone->CONECTIVIDAD_SP}}</h5></td>
					</tr>
					<tr style="text-align: center">
						<td><p class="font-weight-bolder">BANDAS</p><img src="{{ asset('/NETWORKsample.png') }}" class="mx-auto d-block"></img></td>
						<td><br><br><h5 class="font-weight-normal">{{$phone->REDES_SP}}</h5></td>
					</tr>
					<tr style="text-align: center">
						<td><p class="font-weight-bolder">SENSORES</p><img src="{{ asset('/SENSORsample.png') }}" class="mx-auto d-block"></img></td>
						<td><br><br><h5 class="font-weight-normal">{{$phone->SENSORES_SP}}</h5></td>
					</tr>
					<tr style="text-align: center">
						<td><br><br><p class="font-weight-bold">¿ESTA INFORMACIÓN SE ENCUENTRA EDITADA?</p><br></td>
						<td><br><br><h5 class="font-weight-bold bg-warning">{{$phone->EDITADO_SP}}</h5><br></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>
</x-app-layout>