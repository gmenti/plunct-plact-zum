@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
			<a href="{{ route('product.create') }}" class="btn btn-success btn-sm" style="margin-bottom: 7px">
				Cadastrar produto
			</a>

            <div class="panel panel-default">
                <div class="panel-heading">Meus produtos anunciados</div>

                <div class="panel-body">
					<table class="table">
				    	<thead>
				      		<tr>
					        	<th>ID</th>
					        	<th>Título</th>
					        	<th>Preço</th>
								<th class="text-right" width="10%" colspan="2">Ações</th>
					      	</tr>
				    	</thead>
					    <tbody>
							@foreach ($products as $product)
						      	<tr>
						        	<td>{{ $product->id }}</td>
						        	<td>{{ $product->title }}</td>
						        	<td>{{ $product->price }}</td>
									<th class="text-right">
										<a class="btn btn-primary btn-sm" href="{{ route('product.edit', $product) }}">
											<i class="fa fa-pencil"></i>
											<span>Editar</span>
										</a>
									</th>
									<th class="text-right">
										<a class="btn btn-danger btn-sm" onclick="event.preventDefault();
												 document.getElementById('remove-product').submit();">
											<i class="fa fa-trash"></i>
											<span>Excluir</span>
										</a>

                                        <form id="remove-product" action="{{ route('product.destroy', $product) }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
											{{ method_field('delete') }}
                                        </form>
									</th>
						      	</tr>
							@endforeach
					    </tbody>
					  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
