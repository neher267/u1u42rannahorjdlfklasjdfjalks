@extends('layouts.master')

@section('content')

<div class="grids">
	<div class="panel panel-widget forms-panel">
		<div class="forms">
			<div class="form-grids widget-shadow" data-example-id="basic-forms">
				<div class="col-md-12">
					<a href="{{route('products.index')}}" class="btn btn-default"><i class="fas fa-arrow-circle-left green-btn"></i>Back</a>
					@include('common.flash-message')
					<hr>
				</div>
				<div class="form-body">
					<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
					{{ csrf_field() }}

						<div class="form-group"> 
							<label for="name">Product Name</label> 
							<input type="text" name="name" class="form-control" id="name" required> 
						</div>	

						<div class="form-group">
							<label for="category_id">Product Category</label>
							<select name="category_id" id="category_id" class="form-control" required>
								<option value="">Select</option>
								@foreach($categories as $category)
								<option value="{{$category->id}}">{{$category->name}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group">
							<label for="unit">Measurement Unit</label>
							<select name="unit" id="unit" class="form-control" required>
								<option value="">Select</option>
								@foreach(config('settings.unites') as $unit)
								<option value="{{$unit}}">{{$unit}}</option>
								@endforeach
							</select>
						</div>

						<div class="form-group"> 
							<label for="description">Product Discription</label>
							<textarea name="description" id="description" cols="50" rows="4" class="form-control"></textarea>			
						</div>

						<div class="form-group"> 
							<label for="informations">Product Informations</label>
							<textarea name="informations" id="informations" cols="50" rows="4" class="form-control"></textarea>			
						</div>

						<div class="form-group"> 
							<label for="src">Thumbnail Image</label>
							<input type="file" name="src" class="form-control" required>			
						</div>				

						<button type="submit" class="btn btn-default">Save</button>
					</form> 
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	CKEDITOR.replace('description', {
	    language: 'en',
	});
	CKEDITOR.replace('informations', {
	    language: 'en',
	});
</script>
@endsection