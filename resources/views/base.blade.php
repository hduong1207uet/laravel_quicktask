<!DOCTYPE html>
<html lang="en">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Sun* - QuickTask</title>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
      <link href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />  
      <script src="{{ asset('bower_components/jquery/dist/jquery.min.js') }}"></script>
      <script src="{{ asset('js/app.js') }}"></script>
      
  </head>
  <body>
      <!--language Div-->
      <div class="d-flex flex-row-reverse mr-5 mt-3">
          <a href="{{ route('lang', ['lang' => 'vi']) }}"><button class="btn btn-info" id="lang-btn">VI</button></a>
          <a href="{{ route('lang', ['lang' => 'en' ]) }}"><button class="btn btn-info" id="lang-btn">EN</button></a>
      </div>    
      <!--body Div-->
      <div class="container">
            @yield('main')
      </div>
  </body>
</html>
