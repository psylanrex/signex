@extends('pages.admin')

@section('form')
<div class="row">

	<h4>Drop in new photos</h4>
	<form id="addPhotoForm" 
			class="dropzone" 
			method="POST" 
			action="/admin/1/photos">
		{{ csrf_field() }}
	</form>
</div>
@stop

@section('scripts.footer')

	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.2.0/dropzone.js"></script>

@stop
