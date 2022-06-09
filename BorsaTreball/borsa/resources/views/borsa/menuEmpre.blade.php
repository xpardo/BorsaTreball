


 
 <!---logo--->

 <nav class="navbar navbar-expand-lg navbar-light m-2" style="background-color: #bcdefd;">
                <div class="col-12 col-md-3">


                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </div>
<!--Menu-->
            <div class="lletres">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{ route('perfilEmpre.index') }} ">  <i class="fa fa-duotone fa-user"></i>Perfil</a>
                        </li>
                    
                        <li class="nav-item active">
                            <a class="nav-link"  href="{{url('ofempresa')}}">  <i class="fas fa-solid fa-pager"></i>Oferta</a>
                        </li>

                    </ul>

                </div>
            </div>
    
        </button>

    </nav>





        
               


@include('estil/perfil')


