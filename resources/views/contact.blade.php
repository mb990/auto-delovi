@extends ('layouts.app')

@section('page title', 'КОНТАКТ')

@section('content')
<div class="container col-lg-12 col-md-12 col-sm-12" style="background-color: #FFF380;">
	<h1>Kонтакт</h1>
	<div class="col-lg-8" style="float: none; margin:0 auto;">  <!--ovo u style cini da se ovaj div potpuno centrira -->
		{!! Form::open(['url' => 'kontakt/posalji']) !!}
	    	<div class="form-group" style="color:grey;">
	    		{{Form::label('name', 'Име и презиме')}}
	    		{{Form::text('Name', '', ['class' => 'form-control', 'placeholder' => 'Име и презиме'])}}
	    	</div>
	    	<div class="form-group" style="color:grey;">
	    		{{Form::label('email', 'email')}}
	    		{{Form::text('Email', '', ['class' => 'form-control', 'placeholder' => 'Email aдреса'])}}
	    	</div>
	    	  <div class="form-group" style="color:grey;">
	    		{{Form::label('message', 'Порукa')}}
	    		{{Form::textarea('Message', '', ['class' => 'form-control', 'placeholder' => 'Ваша порука'])}}
	    	</div>
	    	<div>
	    		{{Form::submit('Пошаљи', ['class' => 'btn btn-primary'])}}
	    	</div>
		{!! Form::close() !!}
		<br>
	</div>
</div>
@endsection