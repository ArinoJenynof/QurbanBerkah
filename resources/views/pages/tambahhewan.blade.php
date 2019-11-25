@extends('layouts.app')

@section('content')
<div class="container">
	<h1 class="text-center">Tambah hewan</h1>
	@include('layouts.messages')
	<a class="btn btn-primary" href="{{ url("/hewan") }}">Kembali</a>

	<div class="my-2">
		{!! Form::open(["action" => "HewanController@store", "method" => "POST"]) !!}
		<div class="form-group">
			{!! Form::label("nama", "Nama hewan") !!}
			{!! Form::text("nama", "", ["class" => "form-control"]) !!}
		</div>

		<div class="form-group">
			{!! Form::label("deskripsi", "Deskripsi hewan") !!}
			{!! Form::textarea("deskripsi", "", ["class" => "form-control"]) !!}
		</div>

		<div class="form-group">
			{!! Form::label("harga", "Harga hewan") !!}
			{!! Form::text("harga", "", ["class" => "form-control"]) !!}
		</div>
		{!! Form::submit("Selesai", ["class" => "btn btn-primary"]) !!}
		{!! Form::close() !!}
	</div>
</div>
@endsection