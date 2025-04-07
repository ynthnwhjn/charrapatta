<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>@yield('title')</title>

   <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="hold-transition skin-black fixed sidebar-mini">
   <div class="wrapper">
      <div class="content-wrapper">
         <div class="content">
            @yield('content')
         </div>
      </div>
   </div>

   <script src="{{asset('js/app.js')}}"></script>
</body>
</html>
