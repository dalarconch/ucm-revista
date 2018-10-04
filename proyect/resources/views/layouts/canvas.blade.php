<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Offcanvas sidebar menu with a twist</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  	<link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>

    <link rel="stylesheet" href="{{ asset('canvas/css/style.css') }}">

  
</head>

<body>

  <div class="page">
  <span class="menu_toggle">
    <i class="menu_open fa fa-bars fa-lg"></i>
    <i class="menu_close fa fa-times fa-lg"></i>
  </span>
  <ul class="menu_items">
    <li><a href="#"><i class="icon fa fa-signal fa-2x"></i> Moar</a></li>
    <li><a href="#"><i class="icon fa fa-coffee fa-2x"></i> Coffee</a></li>
    <li><a href="#"><i class="icon fa fa-heart fa-2x"></i> Please</a></li>
  </ul>
  <main class="content">
    <div class="content_inner">

            @yield('content')
            <h1>BIEVENIDOS A LA REVISTA UCM</h1>
        <p>wea pa mala csm me da pena la wea cmnas dasjda skdasd</p>
    </div>
  </main>
</div>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="{{ asset('canvas/js/index.js') }}"></script>




</body>

</html>
