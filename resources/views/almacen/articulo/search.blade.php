{!! Form::open(array('url'=>'almacen/articulo','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
	<div class="form-group">
		<div class="input-group">
			<input class="form-control" type="text" name="searchText" placeholder="Buscar..." value="{{$searchText}}">
			<span class="input-group-btn">
				<button type="submit" class="btn btn-primary">Buscar</button>
			</span>
		</div>		
	</div>
{{Form::close()}}