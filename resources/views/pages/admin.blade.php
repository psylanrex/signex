@extends('layout')

@section('content')

<!-- Main -->
	<div class="container">
	  
	  <!-- upper section -->
	  <div class="row">
		<div class="col-sm-3">
	      <!-- left -->
	      <h3><i class="glyphicon glyphicon-briefcase"></i> Toolbox</h3>
	      <hr>
	      
	      <ul class="nav nav-stacked">
	        <li><a href="#" target="ext"><i class="fa fa-2x fa-home"></i> Home</a></li>
	        <li><a href="admin/create"><i class="fa fa-upload"></i> Upload Photos</a></li>
	        <li><a href="#"><i class="fa fa-pencil-square-o"></i> Edit/Delete Photos</a></li>
	        <li><a href="#"><i class="fa fa-file-text"></i> Read Messages</a></li>
	       </ul>
	      	      
	  	</div><!-- /span-3 -->
	    <div class="col-sm-9">
	      	
	      <!-- column 2 -->	
	       <h3><i class="glyphicon glyphicon-dashboard"></i> Signex Dashboard</h3>  
	            
	       <hr>
	      
			<div class="row">
				<div class="col-sm-12">
					@yield('form')
				</div>
			</div>
	  	</div><!--/col-span-9-->
	    
	  </div><!--/row-->
	  <!-- /upper section -->
	  
	  <!-- lower section -->

	  <hr>

	  <div class="row">
	    
	   	<h2>Content in a row</h2>             
	      

	      
	  
	      
	      <hr>
	      
	      <div class="alert alert-info">
	        <button type="button" class="close" data-dismiss="alert">×</button>
	        Please remember to <a href="#">Logout</a> for classified security.
	      </div>

	    
	    </div>
	    
	    
	  </div><!--/row-->
	  
	</div><!--/container-->
<!-- /Main -->

@stop








