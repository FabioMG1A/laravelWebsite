<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Pizzafini</title>
 <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
      <div class="wrapper">
            <header>
                <div id="Home">
                    <h1 class="Naam">@section('pagetitle')
                          Pizzafini
                          @show
                    </h1>
                 </div>
                  <nav>
                        <div class="menu-icon">
                              <i class="fa fa-bars fa-2x"></i>
                        </div>
                        
                        <div class="menu">
                              <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('menu') }}">Menu</a></li>
                                <li><a href="{{ route('registration.form') }}">Reservations</a></li>
                              </ul>
                        </div>
                  </nav>

            </header>
      </div>
        @section('menu')
        @show

        @section('content')
        @show

      <script type="text/javascript">
      // Menu-toggle button
      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });
      // Scrolling Effect
      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
            }
            else {
                  $('nav').removeClass('black');
            }
      })

      
      </script>
<footer>
<br>
Pizzafini © 2018 
</footer>
</body>
</html>