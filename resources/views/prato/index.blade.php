<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
	<tr><th>Tipo</th><th>Nome</th>
		<th>Preço</th><th>Restaurante</th>
	</tr>
	@foreach($pratos as $p)
	<tr><td>{{$p->tipo}}</td><td>{{$p->nome}}</td>
		<td>{{$p->preco}}</td>
		<td>
			{{$p->belongsTo(Restaurante::class)->first()->razaoSocial}}
		</td>
	</tr>
	@endforeach
	</table>
</body>
</html>