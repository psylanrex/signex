@extends('pages.admin')

@section('content')
	<h2>Gallery</h2>
	<div class="container">
		<div class="row">
			@foreach(array_chunk($photos, 4) as $set)
				<div class="row">
					@foreach($set as $photo)
						<div class="col-sm-3 col-md-3 gallery__image">
							<a href="#" class="thumbnail">
								<img src="/{{$photo->thumbnail_path}}" alt="">
							</a>
						</div>	
					@endforeach
				</div>
			@endforeach

		</div>
	</div>

@stop