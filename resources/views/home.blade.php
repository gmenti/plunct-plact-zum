@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Produtos anunciados</div>

                <div class="panel-body">
					<table class="table table-hover">
				    	<thead>
				      		<tr>
					        	<th>ID</th>
					        	<th>Título</th>
					        	<th>Preço</th>
								<th>Vendedor</th>
								<th class="text-right">Ações</th>
					      	</tr>
				    	</thead>
					    <tbody>
							@foreach ($products as $product)
						      	<tr>
						        	<td>{{ $product->id }}</td>
						        	<td>{{ $product->title }}</td>
						        	<td>{{ $product->price }}</td>
									<td>{{ $product->user->name }}</td>
									<td class="pull-right">
										<button class="btn btn-default btn-sm" onclick="alert('Construção...');">
											Comprar
										</button>
									</td>
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
