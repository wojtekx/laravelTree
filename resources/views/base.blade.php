<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <style>
  .options {
    display: inline-flex;
    margin: 10px 5px;
  }
  .options *{
    margin: 0 2px;
  }
  </style>
</head>
<body>
  <div class="container">
    @yield('main')
  
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="{{ asset('js/app.js') }}" type="text/js"></script>
  @stack('custom-scripts')

</body>
</html>