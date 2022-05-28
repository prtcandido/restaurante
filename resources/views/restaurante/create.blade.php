<!-- resources\views\restaurante\create.blade.php -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="/restaurante" method="post">
		@csrf
		Razao: <input type="text" name="razaoSocial"/>
		CNPJ: <input type="number" name="cnpj"/>
		Endereco: <input type="text" name="endereco"/>
		Telefone: <input type="text" name="telefone"/>
		Email: <input type="email" name="email"/>
		Tipo: 
		<select name="tipo">
			@foreach($tipos as $t)
				<option value="{{$t->id}}">{{$t->descricao}}</option>
			@endforeach	
		</select>
	</form>
</body>
</html>