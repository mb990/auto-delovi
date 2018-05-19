<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('page title') - {{ config('app.name', 'Auto-dijelovi') }}</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div style="height:10px; background-image:url('https://www.elegantthemes.com/blog/wp-content/uploads/2013/09/bg-8-full.jpg');">
        </div>
        <hr>
        <div class="container">
            <div class="col-lg-12 col-md-12 col-sm-12" style="background-image: url('https://www.elegantthemes.com/blog/wp-content/uploads/2013/09/bg-2-full.jpg'); border-radius: 18px;">
            	@include('inc.navbar')
            </div>
        </div>
        <hr>
        <div class="container" style="color:white;">
            @include('inc.messages')
        	@yield('content')
        </div>
      <div class="row">
            <div class="futer-div col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <p class="futer-paragraf">Которска 1/7</p>
                    <p class="futer-paragraf">21000, НОВИ САД</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                   <iframe style="padding:10px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2809.667743717064!2d19.81318131554979!3d45.23428837909894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475b1027907924e7%3A0xbbbe75264bc879ef!2z0JrQvtGC0L7RgNGB0LrQsCAxLCDQndC-0LLQuCDQodCw0LQgMjEwMDA!5e0!3m2!1ssr!2srs!4v1519999655791" width="400" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>  
    <footer id="footer" class="text-center">
		<p>Copyright &copy; Спаса <?php echo date('Y') . "."?></p>
	</footer>
    </body>
</html>