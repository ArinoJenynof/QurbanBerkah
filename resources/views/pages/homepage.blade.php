@extends('layouts.app')

@section('content')
<div class="container">
	<div class="jumbotron text-center">
		<h1>Selamat Datang di<br>QurbanBerkah</h1>
	</div>

	<a class="btn btn-primary" href="{{ url("/hewan") }}">Lihat Hewan</a>
</div>
@endsection