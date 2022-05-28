<!-- show.blade -->
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	{{$rest->razaoSocial}}<br/>
	{{$rest->cnpj}}<br/>
	{{$rest->telefone}}<br/>
	{{$rest->endereco}}<br/>
	{{$rest->email}}<br/>
	@foreach( $rest->hasMany(App\Models\Prato::class)->get() as $p)
		<hr/>
		{{$p->tipo}}<br/>
		{{$p->nome}}<br/>
		{{$p->preco}}<br/>
	@endforeach
	
	@foreach( $rest->belongsToMany(App\Models\TipoRestaurante::class)->get() as $t );
		{{$t->descricao}}<br/>
	@endforeach
</body>
</html>