@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Novo produto</div>

                <div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
						    <ul>
						        @foreach ($errors->all() as $error)
						            <li>{{ $error }}</li>
						        @endforeach
						    </ul>
						</div>
					@endif

					<form action="{{ route('product.store') }}" method="POST">
						{{ csrf_field() }}

						<div class="form-group">
					    	<label for="title">Título</label>
					    	<input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}"/>
					  	</div>

						<div class="form-group">
					    	<label for="price">Preço</label>
					    	<input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}"/>
					  	</div>

						<button type="submit" class="btn btn-primary">Cadastrar</button>
					</form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
