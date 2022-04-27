<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    



<nav class="navbar navbar-expand-lg m-2 " style="background-color: #5da4e7; ">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <div class="col-sm ">
        <div class="ins ">
            <div id="logo_centre_widget-3 ">
                <div class="targeta_id_centre row ">
                    <div class="large-6 small-12 columns logo_inline hide-for-small ">
                        <div class="overflow-hidden  sm:rounded-lg">
                            <!--login al header--->
                                <img alt="Logotip entitat " id="logo_entity " src="{{ asset('img/logo-JM-blau-miniatura-1.jpg') }}" width="120 " height="90 " alt=" ">
                                <div class="col-12 col-md-8 ">

                                
                                </div>

                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav mr-auto">

                                   
                    
                        
                    
                                    </ul>
                
                    
                
                                </div>
                                
                       
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


<title>Custom Auth in Laravel</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-light navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
    <div class="container">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                
                <li class="nav-item">
                     <a href="{{url('log')}}"  ><i class="bi bi-person"></i> <b><strong>Login</strong></b></a><br><br> 
                </li>
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('borsa.log') }}">Login</a>
                    </li>
                   
                @else
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('signout') }}">Logout</a>
                    </li>
                @endguest
                

                


            </ul>
        </div>
    </div>
</nav>
@yield('content')




