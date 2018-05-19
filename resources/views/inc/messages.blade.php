@if(count($errors) > 0)
	@foreach ($errors->all() as $error)
	    <div class= "alert alert-danger">
	    	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	        {{$error}}
	    </div>
	@endforeach
@endif