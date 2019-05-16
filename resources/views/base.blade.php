<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Laravel</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
  <style>
  .options {
    display: inline-flex;
    margin:5px 0;
  }
  .options *{
    margin: 0 2px;
  }
  .hide{
    display: none;
  }
  li ul {
      display: none;
  }
  li ul.active {
    display: block;
  }
  li{
    list-style-type: none;
    cursor: pointer;
  }
   a.element:hover{
    font-weight: bold;
  }
  ul li,
  li {
      border-left: 1px solid #136aaf;
      padding-left: 18px;
      position: relative;
      font-size: 16px;
  }

  ul li:last-child:after {
      position: absolute;
      content: "";
      display: inline-block;
      top: 28px;
      width: 1px;
      left: -1px;
      bottom: 0;
      background: #fff;
  }

  ul li:before,
  li:before {
      height: 1px;
      background: #136aaf;
      width: 15px;
      left: 0;
      top: 27px;
      display: inline-block;
      content: "";
      position: absolute;
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