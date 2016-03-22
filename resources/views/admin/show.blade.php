@extends('pages.admin')

@section('content')
	<h2>Gallery</h2>
	<div class="container">
		<div class="row">
			@foreach($photos as $photo)
				<div class="row">
				
					<div class="col-sm-3 col-md-3 gallery__image">
						<a href="#" class="thumbnail">
							<img src="{{$photo->path}}" alt="">
						</a>
					</div>	
				</div>
			@endforeach

		</div>
	</div>

@stop