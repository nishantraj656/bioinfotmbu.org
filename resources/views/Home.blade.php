<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title')</title>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
{{-- <link rel="stylesheet" herf="{{ '/'}}/css/home.css"> --}}
<link rel="stylesheet" href="{{ URL::to('css/home.css') }}"/>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    
        <img src="{{URL::to('assets/BIO_SUB-DIC.png')}}"/>
 
   
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
       
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="{{url('/home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/gallery')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{url('/gallery')}}">Academic</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link" href="{{url('/gallery')}}">Research</a>
            </li>   
            <li class="nav-item">
                <a class="nav-link" href="{{url('/gallery')}}">Publication</a>
            </li>   
            <li class="nav-item">
                    <a class="nav-link" href="{{url('/gallery')}}">Seminars
                        </a>
            </li>    
          </ul>
        </div>  
      </nav>
   
      @yield('content')
     
     
      

      <footer>
            <div class="footer2">
                    <div style="background-color: #566F90; padding: 20px;">
                        <div class="row">
                            
                            <div class="text-center">
                                <div class="panel-body"  >
                                    <p class="simplenav">
                                        <a style="color: White;" href="#">Home</a> | <a style="color: White" href="#">About US</a>
                                        | <a style="color: White" href="#">Academic</a> | <a style="color: White" href="#">Research</a>
                                        | <a style="color: White" href="#">Publication</a> | <a style="color: White" href="#">
                                            Seminars</a>| <a style="color: White" href="#">
                                            Notice</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- /row of panels -->
                        <div>
                            <p class="text-center" style="color: White">
                                Powered & Maintained by
                                <br />
                                <a style="color: White" href="http://www.bioinformatics-tmbu.org.in/" target="_blank"
                                    rel="develop">University Centre of Bioinformatics
                                    <br />
                                    (Sub-DIC Bioinformatics)<br />
                                    T.M. Bhagalpur University, Bhagalpur - 812007</a>
                            </p>
                        </div>
                        <div>
                            <p style="color: White" class="text-center">
                                Design & Developed by <a style="color: White" href="http://logicopedia.in/" target="_blank" rel="develop">
                                    Bihari Legends</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
    
      </footer>
</body>

</html>