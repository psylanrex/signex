@extends('layout')

@section('subnav')

	<div class="subnavbar">
		<div class="subnavbar-inner">
			<div class="container">
				<ul class="mainnav">
					<li class="active">
						<a href="/admin"><i class="fa fa-2x fa-home"></i> Main</a>
					</li>
					<li>
						<a href="/admin/1/photos/create"><i class="fa fa-upload"></i> Upload Photos</a>
					</li>
					<li>
						<a href="/admin/gallery"><i class="fa fa-trash"></i> Delete Photos</a>
					</li>
					<li>
						<a href="#"><i class="fa fa-file-text"></i> Read Messages</a>
					</li>
				</ul>
			</div>
		</div>
	</div>

@stop

@section('content')

<!-- Main -->
	<div class="container">
	  
	  <!-- upper section -->
	  <div class="row">

	    <div class="col-sm-12">
	      	
	      <!-- column 2 -->	
	       <h3><i class="glyphicon glyphicon-dashboard"></i> Signex Dashboard</h3>  
	            
	       <hr>
	      
			<div class="row">
				<div class="col-sm-12">
					@yield('main-content')
					@yield('form')
				</div>
			</div>
	  	</div><!--/col-span-9-->
	    
	  </div><!--/row-->
	  <!-- /upper section -->
	  
	  <!-- lower section -->

	  <hr>

	  <div class="row">
	    
	      <div class="alert alert-info">
	        <button type="button" class="close" data-dismiss="alert">×</button>
	        Please remember to <a href="#">Logout</a> for classified security.
	      </div>	    
	    
	  </div><!--/row-->
	  
	</div><!--/container-->
<!-- /Main -->

@stop








