<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/prato/{{$prato->id}}" method="post">
		@csrf
		@method('PUT')
		Tipo: <input type="text" name="tipo" value="{{$prato->tipo}}">
		Nome: <input type="text" name="nome" value="{{$prato->nome}}">
		Preço: <input type="number" name="preco" value="{{$prato->preco}}">
		Restaurante: <select name="restaurante_id">
						@foreach($rest as $r)
						  @if($prato->restaurante_id == $r->id)
							<option value="{{$r->id}}" selected>{{$r->razaoSocial}}</option>
						  @else
						  	<option value="{{$r->id}}" >{{$r->razaoSocial}}</option>
						  @endif
						@endforeach	
				    </select>
		<input type="submit" value="Alterar">
	</form>
</body>
</html>