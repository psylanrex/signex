@extends('pages.admin')

@section('content')
	<h2>Gallery</h2>
	<div class="container" id="gallery">
		<div class="row">
			@foreach(array_chunk($photos, 4) as $set)
				<div class="row">
					@foreach($set as $photo)
						<div class="col-sm-3 col-md-3 gallery__image">
							<div class="img-container">
								<img class="thumbnail" src="/{{$photo->thumbnail_path}}" alt="">
								<button type="submit" class="btn btn-danger">
									<i class="fa fa-trash"></i>
								</button>
							</div>	
							
						</div>
					@endforeach
				</div>
			@endforeach

		</div>
	</div>

@stop