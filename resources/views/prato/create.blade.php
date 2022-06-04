<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/prato" method="post">
		@csrf
		Tipo: <input type="text" name="tipo">
		Nome: <input type="text" name="nome">
		Preço: <input type="number" name="preco">
		Retaurante: <select name="restaurante_id">
						@foreach($rest as $r)
							<option value="{{$r->id}}">{{$r->razaoSocial}}</option>
						@endforeach	
				    </select>
		<input type="submit" value="Criar">
	</form>
</body>
</html>