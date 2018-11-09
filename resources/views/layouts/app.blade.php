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
            <div class="col-lg-12 col-md-12 col-sm-12" style="background-image: url('https://www.intercotire.com/sites/default/files/styles/news_page_image/public/biasvsradial_0.jpg?itok=i1TjBkCq'); height:200px; border-radius: 18px;">
            	@include('inc.navbar')
            </div>
        </div>
        <hr>
        <div class="container col-lg-8 col-md-8 col-sm-8" style="color: white; float:none; margin: 0 auto;"> 
            @include('inc.messages')
        	@yield('content')
        </div>
      <div class="row">
            <div class="futer-div col-lg-12 col-md-12 col-sm-12">
                <div class="col-lg-3 col-md-3 col-sm-3">
                    <p class="futer-paragraf">Стефана Дечанског 131</p>
                    <p class="futer-paragraf">76300, Бијељина</p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                   <iframe style="padding:10px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2833.089167120444!2d19.1945529!3d44.7585962!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475be8d9ea7c5217%3A0x30205130403c35f9!2z0KHRgtC10YTQsNC90LAg0JTQtdGH0LDQvdGB0LrQvtCzIDEzMSwg0JHQuNGY0LXRmdC40L3QsCA3NjMwMCwg0JHQvtGB0L3QsCDQuCDQpdC10YDRhtC10LPQvtCy0LjQvdCw!5e0!3m2!1ssr!2srs!4v1539954714503" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>  
                </div>
            </div>
        </div>  
    <footer id="footer" class="text-center">
		<p>Copyright &copy;<?php echo(' ') . date('Y') . "."?></p>
	</footer>
    </body>
</html>