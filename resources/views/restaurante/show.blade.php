<!-- show.blade.php -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h3>Dados restaurante</h3>
	<p>{{$restaurante->razaoSocial}}</p>
	<p>{{$restaurante->cnpj}}</p>
	<p>{{$restaurante->telefone}}</p>
	<p>{{$restaurante->endereco}}</p>
	<p>{{$restaurante->email}}</p>
	<hr/>
	@foreach($pratos as $p)
		{{$p->nome}} - {{$p->preco}} <br/>
	@endforeach
	<hr/>
	@foreach($tipos as $t)
		{{$t->descricao}} <br/>
	@endforeach
	<hr/>
</body>
</html>